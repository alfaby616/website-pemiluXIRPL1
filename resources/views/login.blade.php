@extends('layouts.app')
@section('content')

    <style>
        .login-wrapper {
            background-color: #3498db;
            background-image: radial-gradient(#ffffff 15%, transparent 16%), radial-gradient(#ffffff 15%, transparent 16%);
            background-size: 40px 40px;
            background-position: 0 0, 20px 20px;
            /* Padding atas diperbesar agar kotak putih judul terdorong ke bawah, memberi ruang untuk SWOOSH */
            padding: 90px 20px 70px 20px;
            border-radius: 10px;
            border: 5px solid #000;
            box-shadow: inset 0 0 20px rgba(0,0,0,0.5);
            min-height: 85vh;
            display: flex;
            flex-direction: column;
            align-items: center;
            justify-content: center;
            position: relative;
            overflow: hidden;
        }
        
        .bg-text {
            position: absolute;
            z-index: 50;
            pointer-events: none; /* Aman dari klik */
        }
        
        /* Posisi dipaku menggunakan pixel (px) di sudut, bukan persentase (%) */
        .bg-text-1 { 
            top: 25px; 
            left: 25px; 
            transform: rotate(-25deg); 
        }
        .bg-text-2 { 
            bottom: 25px; 
            right: 25px; 
            transform: rotate(20deg); 
        }
        
        /* Penyesuaian otomatis jika dibuka di HP agar stikernya mengecil dan tidak menutupi layar */
        @media (max-width: 768px) {
            .bg-text-1 { top: 10px; left: 10px; transform: scale(0.6) rotate(-25deg); transform-origin: top left; }
            .bg-text-2 { bottom: 10px; right: 10px; transform: scale(0.6) rotate(20deg); transform-origin: bottom right; }
            .login-wrapper { padding-top: 60px; padding-bottom: 50px; }
        }
    </style>

    <div class="login-wrapper">
        
        <!-- Aksen Teks Mengambang (Sekarang dijamin aman di pojok) -->
        <div class="floating bg-text bg-text-1">
            <div class="action-text" style="font-size: clamp(3rem, 6vw, 4.5rem); color: #f1c40f; text-shadow: 4px 4px 0 #000; margin: 0;">SWOOSH!</div>
        </div>
        <div class="floating bg-text bg-text-2" style="animation-delay: 0.5s;">
            <div class="action-text" style="font-size: clamp(3rem, 6vw, 5rem); color: #e74c3c; text-shadow: 4px 4px 0 #000; margin: 0;">BAM!</div>
        </div>

        <!-- Judul Bergaya Logo Komik -->
        <div style="text-align: center; margin-bottom: 30px; position: relative; z-index: 5; background: #fff; padding: 15px 30px; border: 5px solid #000; box-shadow: 8px 8px 0 #000; transform: rotate(-2deg); max-width: 90%;">
            <h1 style="font-size: clamp(2.5rem, 5vw, 4.5rem); color: #e74c3c; text-shadow: 3px 3px 0 #000; letter-spacing: 2px; margin-bottom: 0; font-family: 'Bangers', cursive; line-height: 1;">BATTLE OF LEADERS</h1>
            <h2 style="font-size: clamp(1.2rem, 3vw, 2rem); color: #2c3e50; font-family: 'Bangers', cursive; letter-spacing: 1px; margin-top: 5px; margin-bottom: 0;">PEMILU XI RPL 1</h2>
        </div>

        <!-- Balon Kata Arahan -->
        <div class="speech-bubble floating" style="max-width: 350px; text-align: center; font-size: 1.1rem; position: relative; z-index: 10; font-weight: bold; margin-bottom: 75px;">
            "Hentikan kejahatan GOLPUT! Masukkan identitas rahasiamu untuk mengakses markas pemilihan!"
        </div>

        <!-- Panel Login Utama -->
        <div class="comic-panel yellow" style="max-width: 400px; width: 100%; position: relative; z-index: 10; padding: 60px 25px 25px 25px; background: #f1c40f; margin-top: 10px; overflow: visible;">
            
            <!-- Avatar Penjaga -->
            <div style="position: absolute; top: -60px; left: 50%; transform: translateX(-50%); background: #fff; border: 5px solid #000; border-radius: 50%; padding: 5px; width: 100px; height: 100px; box-shadow: 4px 4px 0 #000; z-index: 20;">
                <img src="https://api.dicebear.com/7.x/bottts/svg?seed=Security" style="width: 100%; height: 100%; border-radius: 50%;" alt="Security Bot">
            </div>

            <!-- Pesan Error -->
            @if(session('error'))
                <div style="background: #e74c3c; color: white; padding: 10px; border: 3px solid #000; font-weight: bold; text-align: center; margin-bottom: 20px; border-radius: 5px; animation: pop 0.3s ease-out forwards; text-transform: uppercase;">
                    ⚠️ {{ session('error') }} ⚠️
                </div>
            @endif

            <form action="/login" method="POST">
                @csrf
                <div style="margin-bottom: 20px;">
                    <label style="font-family: 'Bangers', cursive; font-size: 1.5rem; letter-spacing: 1px; display: block; margin-bottom: 5px; text-align: center;">🎫 NOMOR INDUK SISWA (NIS)</label>
                    <input type="text" name="nis" required placeholder="Contoh: 1001" style="font-size: 1.2rem; text-align: center; width: 100%; box-sizing: border-box; padding: 10px; border: 3px solid #000; border-radius: 5px; box-shadow: inset 2px 2px 5px rgba(0,0,0,0.1);">
                </div>
                
                <div style="margin-bottom: 30px;">
                    <label style="font-family: 'Bangers', cursive; font-size: 1.5rem; letter-spacing: 1px; display: block; margin-bottom: 5px; text-align: center;">🦸‍♂️ NAMA AGEN (LENGKAP)</label>
                    <input type="text" name="nama" required placeholder="Sesuai absen kelas" style="font-size: 1.2rem; text-align: center; width: 100%; box-sizing: border-box; padding: 10px; border: 3px solid #000; border-radius: 5px; box-shadow: inset 2px 2px 5px rgba(0,0,0,0.1);">
                </div>
                
                <button type="submit" class="btn-comic btn-blue" style="width: 100%; font-size: 1.6rem; padding: 12px;">🚀 MASUK KE ARENA!</button>
            </form>
        </div>
    </div>
@endsection