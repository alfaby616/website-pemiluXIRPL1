@extends('layouts.app')
@section('content')
    <div class="action-text" style="top: 10px; right: 20px; color: #3498db;">ZAP!</div>
    
    <!-- HEADER PROFIL PASLON 1 -->
    <div style="display: flex; gap: 30px; align-items: center; margin-bottom: 30px; flex-wrap: wrap;">
        <!-- Avatar Dua Orang -->
        <div style="display: flex; gap: 15px;">
            <div style="text-align: center;">
                <img src="https://api.dicebear.com/7.x/micah/svg?seed=Yudistira&backgroundColor=b6e3f4" class="avatar" style="width: 110px; height: 110px;" alt="Yudistira">
                <div style="font-size: 0.9rem; font-weight: bold; background: #000; color: #fff; padding: 3px 10px; border-radius: 5px; margin-top: 8px; border: 2px solid #000;">Yudistira</div>
            </div>
            <div style="text-align: center;">
                <img src="https://api.dicebear.com/7.x/micah/svg?seed=Maskhidir&backgroundColor=c0aede" class="avatar" style="width: 110px; height: 110px;" alt="Maskhidir">
                <div style="font-size: 0.9rem; font-weight: bold; background: #000; color: #fff; padding: 3px 10px; border-radius: 5px; margin-top: 8px; border: 2px solid #000;">Maskhidir</div>
            </div>
        </div>
        
        <!-- Judul Paslon -->
        <div>
            <h1 style="font-size: 3.5rem; margin: 0; color: #2c3e50;">PASLON #01: THE DEFENDERS</h1>
            <h2 style="color: #3498db; margin-top: 5px;">YUDISTIRA & MASKHIDIR</h2>
        </div>
    </div>

    <!-- KONTEN VISI MISI & STATISTIK -->
    <div class="grid-2">
        <div>
            <div class="speech-bubble">
                "Kami siap menjadi tameng pelindung aspirasi kalian dan menegakkan keadilan di XI RPL 1!"
            </div>
            <div class="comic-panel blue">
                <h3>⚡ VISI (SUPERPOWER AIM)</h3>
                <p>Mewujudkan XI RPL 1 sebagai kelas yang solid, berprestasi dalam coding, dan memiliki solidaritas tinggi layaknya sebuah tim Avengers.</p>
                <h3>💥 MISI (ACTION PLAN)</h3>
                <ul style="padding-left: 20px;">
                    <li>Mengadakan "Ngoding Bareng" setiap Jumat.</li>
                    <li>Membangun bank source code kelas.</li>
                    <li>Mabar e-sport bulanan.</li>
                </ul>
            </div>
        </div>
        <div class="comic-panel">
            <h2>STATISTIK KEKUATAN</h2>
            <label><strong>LEADERSHIP (Kepemimpinan)</strong></label>
            <div class="stat-bar"><div class="stat-fill striped" style="width: 90%; background: #e74c3c;"></div></div><br>
            
            <label><strong>CODING SKILL (Kemampuan Logic)</strong></label>
            <div class="stat-bar"><div class="stat-fill striped" style="width: 85%; background: #3498db;"></div></div><br>
            
            <label><strong>TEAMWORK (Kerjasama)</strong></label>
            <div class="stat-bar"><div class="stat-fill striped" style="width: 95%; background: #f1c40f;"></div></div>
        </div>
    </div>

    <!-- TOMBOL AKSI -->
    <div style="display: flex; justify-content: space-between; align-items: center; border-top: 5px solid #000; padding-top: 20px; margin-top: 20px;">
        <a href="/home" class="btn-comic btn-yellow">KEMBALI KE MARKAS</a>
        @if(!session('has_voted'))
        <form action="/vote/1" method="POST" style="margin: 0;">
            @csrf
            <button type="submit" class="btn-comic btn-green" style="font-size: 2rem;">🎯 VOTE PASLON 1!</button>
        </form>
        @else
        <h2 style="color: #7f8c8d; margin: 0; background: #eee; padding: 10px 20px; border: 3px solid #000; box-shadow: 4px 4px 0 #000;">⚠️ ANDA SUDAH MENJALANKAN MISI (VOTED)</h2>
        @endif
    </div>
@endsection