<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Student;
use Illuminate\Support\Facades\Session;

class PemiluController extends Controller
{
    public function loginView() {
        return view('login');
    }

    public function loginAuth(Request $request) {
        $student = Student::where('nis', $request->nis)->where('nama', $request->nama)->first();
        if($student) {
            Session::put('student_id', $student->id);
            Session::put('student_name', $student->nama);
            Session::put('has_voted', $student->has_voted);
            return redirect('/home');
        }
        return back()->with('error', 'IDENTITAS TIDAK DITEMUKAN!');
    }

    public function logout() {
        Session::flush();
        return redirect('/');
    }

    public function home() {
        if(!Session::has('student_id')) return redirect('/');
        return view('home');
    }

    public function paslon1() {
        if(!Session::has('student_id')) return redirect('/');
        return view('paslon1');
    }

    public function paslon2() {
        if(!Session::has('student_id')) return redirect('/');
        return view('paslon2');
    }

    public function vote(Request $request, $pilihan) {
        if(!Session::has('student_id')) return redirect('/');
        $student = Student::find(Session::get('student_id'));
        
        if(!$student->has_voted) {
            $student->pilihan = $pilihan;
            $student->has_voted = true;
            $student->save();
            Session::put('has_voted', true);
            
            // Redirect dengan pesan sukses
            return redirect('/pengumuman')->with('success_vote', 'MISI SELESAI! SUARAMU BERHASIL TEREKAM!');
        }
        return redirect('/pengumuman');
    }

    public function pengumuman() {
        if(!Session::has('student_id')) return redirect('/');
        $suara1 = Student::where('pilihan', 1)->count();
        $suara2 = Student::where('pilihan', 2)->count();
        $total = Student::count();
        $sudahMemilih = Student::where('has_voted', true)->count();
        
        return view('pengumuman', compact('suara1', 'suara2', 'total', 'sudahMemilih'));
    }
}