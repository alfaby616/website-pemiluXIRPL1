<?php
namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Student;

class PemiluApiController extends Controller
{
    // 1. API Login
    public function login(Request $request) {
        $request->validate([
            'nis' => 'required',
            'nama' => 'required'
        ]);

        $student = Student::where('nis', $request->nis)->where('nama', $request->nama)->first();

        if (!$student) {
            return response()->json(['message' => 'NIS atau Nama salah!'], 401);
        }

        // Buat Token API
        $token = $student->createToken('auth_token')->plainTextToken;

        return response()->json([
            'message' => 'Login berhasil',
            'data' => $student,
            'token' => $token
        ]);
    }

    // 2. API Logout
    public function logout(Request $request) {
        // Hapus token yang sedang digunakan
        $request->user()->currentAccessToken()->delete();
        
        return response()->json(['message' => 'Logout berhasil']);
    }

    // 3. API Vote (Hanya bisa diakses jika punya token)
    public function vote(Request $request) {
        $request->validate([
            'pilihan' => 'required|in:1,2'
        ]);

        $student = $request->user(); // Ambil data siswa dari token

        if ($student->has_voted) {
            return response()->json(['message' => 'Akses ditolak: Anda sudah melakukan voting!'], 403);
        }

        $student->pilihan = $request->pilihan;
        $student->has_voted = true;
        $student->save();

        return response()->json([
            'message' => 'Voting berhasil disimpan!',
            'pilihan' => 'Paslon ' . $student->pilihan
        ]);
    }

    // 4. API Pengumuman Hasil (Bisa diakses publik)
    public function pengumuman() {
        $suara1 = Student::where('pilihan', 1)->count();
        $suara2 = Student::where('pilihan', 2)->count();
        $total = Student::count();
        $sudahMemilih = Student::where('has_voted', true)->count();

        return response()->json([
            'message' => 'Data perolehan suara terkini',
            'data' => [
                'paslon_1' => $suara1,
                'paslon_2' => $suara2,
                'total_pemilih' => $total,
                'sudah_memilih' => $sudahMemilih,
                'belum_memilih' => $total - $sudahMemilih
            ]
        ]);
    }
}