@extends('layouts.app')
@section('content')
    <div class="action-text" style="top: 10px; right: 20px; color: #e74c3c;">POW!</div>
    
    <!-- HEADER PROFIL PASLON 2 -->
    <div style="display: flex; gap: 30px; align-items: center; margin-bottom: 30px; flex-wrap: wrap;">
        <!-- Avatar Dua Orang -->
        <div style="display: flex; gap: 15px;">
            <div style="text-align: center;">
                <img src="https://api.dicebear.com/7.x/micah/svg?seed=Ailsa&backgroundColor=ffdf7a" class="avatar" style="width: 110px; height: 110px;" alt="Ailsa">
                <div style="font-size: 0.9rem; font-weight: bold; background: #000; color: #fff; padding: 3px 10px; border-radius: 5px; margin-top: 8px; border: 2px solid #000;">Ailsa</div>
            </div>
            <div style="text-align: center;">
                <img src="https://api.dicebear.com/7.x/micah/svg?seed=Alea&backgroundColor=f8ad9d" class="avatar" style="width: 110px; height: 110px;" alt="Alea">
                <div style="font-size: 0.9rem; font-weight: bold; background: #000; color: #fff; padding: 3px 10px; border-radius: 5px; margin-top: 8px; border: 2px solid #000;">Alea</div>
            </div>
        </div>
        
        <!-- Judul Paslon -->
        <div>
            <h1 style="font-size: 3.5rem; margin: 0; color: #2c3e50;">PASLON #02: THE CREATORS</h1>
            <h2 style="color: #e74c3c; margin-top: 5px;">AILSA & ALEA</h2>
        </div>
    </div>

    <!-- KONTEN VISI MISI & STATISTIK -->
    <div class="grid-2">
        <div>
            <div class="speech-bubble">
                "Kreativitas tanpa batas! Kami akan menyulap XI RPL 1 menjadi inkubator ide-ide brilian."
            </div>
            <div class="comic-panel red">
                <h3>⚡ VISI (SUPERPOWER AIM)</h3>
                <p>Menjadikan XI RPL 1 sebagai inkubator kreativitas, mandiri, dan berbudaya positif dalam pengembangan teknologi dan UI/UX desain.</p>
                <h3>💥 MISI (ACTION PLAN)</h3>
                <ul style="padding-left: 20px;">
                    <li>Membentuk circle UI/UX dan Web Dev kelas.</li>
                    <li>Sistem piket lab yang disiplin tapi fun.</li>
                    <li>Showcase project bulanan.</li>
                </ul>
            </div>
        </div>
        <div class="comic-panel">
            <h2>STATISTIK KEKUATAN</h2>
            <label><strong>CREATIVITY (Ide & Desain)</strong></label>
            <div class="stat-bar"><div class="stat-fill striped" style="width: 95%; background: #9b59b6;"></div></div><br>
            
            <label><strong>PUBLIC SPEAKING (Komunikasi)</strong></label>
            <div class="stat-bar"><div class="stat-fill striped" style="width: 90%; background: #e67e22;"></div></div><br>
            
            <label><strong>PROBLEM SOLVING (Penyelesaian Masalah)</strong></label>
            <div class="stat-bar"><div class="stat-fill striped" style="width: 85%; background: #1abc9c;"></div></div>
        </div>
    </div>

    <!-- TOMBOL AKSI -->
    <div style="display: flex; justify-content: space-between; align-items: center; border-top: 5px solid #000; padding-top: 20px; margin-top: 20px;">
        <a href="/home" class="btn-comic btn-yellow">KEMBALI KE MARKAS</a>
        @if(!session('has_voted'))
        <form action="/vote/2" method="POST" style="margin: 0;">
            @csrf
            <button type="submit" class="btn-comic btn-green" style="font-size: 2rem;">🎯 VOTE PASLON 2!</button>
        </form>
        @else
        <h2 style="color: #7f8c8d; margin: 0; background: #eee; padding: 10px 20px; border: 3px solid #000; box-shadow: 4px 4px 0 #000;">⚠️ ANDA SUDAH MENJALANKAN MISI (VOTED)</h2>
        @endif
    </div>
@endsection