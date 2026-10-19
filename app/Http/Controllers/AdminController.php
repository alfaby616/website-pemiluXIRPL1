<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Student;

class AdminController extends Controller
{
    // Menampilkan daftar pemilih & form tambah
    public function index() {
        $students = Student::orderBy('nis', 'asc')->get();
        return view('admin', compact('students'));
    }

    // Proses Tambah Data
    public function store(Request $request) {
        $request->validate([
            'nis' => 'required|unique:students',
            'nama' => 'required'
        ]);

        Student::create([
            'nis' => $request->nis,
            'nama' => $request->nama
        ]);

        return back()->with('success', 'BAM! Data agen baru berhasil ditambahkan!');
    }

    // Menampilkan halaman Edit
    public function edit($id) {
        $student = Student::find($id);
        return view('admin-edit', compact('student'));
    }

    // Proses Update Data
    public function update(Request $request, $id) {
        $request->validate([
            'nis' => 'required',
            'nama' => 'required'
        ]);

        $student = Student::find($id);
        $student->update([
            'nis' => $request->nis,
            'nama' => $request->nama,
            'has_voted' => $request->has_voted // Opsi reset status vote
        ]);

        return redirect('/admin')->with('success', 'ZAP! Data berhasil diperbarui!');
    }

    // Proses Hapus Data
    public function destroy($id) {
        Student::find($id)->delete();
        return back()->with('success', 'POW! Data agen telah dihapus dari markas!');
    }
}