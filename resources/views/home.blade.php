@extends('layouts.app')
@section('content')
    <div class="action-text" style="top: -20px; left: -20px;">BOOM!</div>
    
    <div style="display: flex; justify-content: space-between; align-items: center; border-bottom: 5px solid #000; padding-bottom: 20px; margin-bottom: 30px;">
        <div style="display: flex; align-items: center; gap: 20px;">
            <!-- Avatar dinamis menggunakan DiceBear berdasarkan Nama Siswa -->
            <img src="https://api.dicebear.com/7.x/avataaars/svg?seed={{ session('student_name') }}" class="avatar" alt="Avatar">
            <div>
                <h1 style="margin: 0; font-size: 2.5rem;">CHOOSE YOUR HERO!</h1>
                <p style="margin: 5px 0 0 0; font-size: 1.2rem; font-weight: bold;">Identitas Agen: {{ session('student_name') }}</p>
            </div>
        </div>
        <a href="/logout" class="btn-comic btn-yellow" style="font-size: 1rem; padding: 10px 15px;">LOGOUT</a>
    </div>
    
    <div class="speech-bubble">
        "Nasib kelas XI RPL 1 ada di tanganmu! Pilihlah pemimpin yang paling pantas membawa kelas ini menuju kemenangan!"
    </div>
    
    <div class="grid-2" style="align-items: stretch;">
        <!-- KOTAK PASLON 01 -->
        <div class="comic-panel floating" style="text-align: center; border-color: #3498db; background: #eaf2f8; display: flex; flex-direction: column; justify-content: space-between; padding: 25px;">
            <div style="position: relative;">
                <div class="action-text" style="font-size: 1.5rem; top: -10px; right: -10px; color: #3498db;">#01</div>
                
                <!-- Avatar Paslon 1 (Dua Orang) -->
                <div style="display: flex; gap: 15px; justify-content: center; margin-bottom: 15px;">
                    <div style="text-align: center;">
                        <img src="https://api.dicebear.com/7.x/micah/svg?seed=Yudistira&backgroundColor=b6e3f4" class="avatar" style="width: 90px; height: 90px;" alt="Yudistira">
                        <div style="font-size: 0.8rem; font-weight: bold; background: #000; color: #fff; padding: 5px 12px; border-radius: 5px; margin-top: 8px; border: 2px solid #000;">Yudistira</div>
                    </div>
                    <div style="text-align: center;">
                        <img src="https://api.dicebear.com/7.x/micah/svg?seed=Maskhidir&backgroundColor=c0aede" class="avatar" style="width: 90px; height: 90px;" alt="Maskhidir">
                        <div style="font-size: 0.8rem; font-weight: bold; background: #000; color: #fff; padding: 5px 12px; border-radius: 5px; margin-top: 8px; border: 2px solid #000;">Maskhidir</div>
                    </div>
                </div>

                <h2 style="font-size: 2rem; margin-top: 15px; color: #2c3e50; font-family: 'Bangers';">YUDISTIRA & MASKHIDIR</h2>
                <p style="font-weight: bold; margin-bottom: 20px;">Julukan: The Defenders</p>
            </div>
            
            <!-- Tombol Paslon 1 (Otomatis Rata Bawah) -->
            <a href="/paslon/1" class="btn-comic btn-blue" style="width: 100%; box-sizing: border-box; margin-top: auto;">INTIP KEKUATAN</a>
        </div>
        
        <!-- KOTAK PASLON 02 -->
        <div class="comic-panel floating" style="text-align: center; border-color: #e74c3c; background: #fdedec; animation-delay: 0.5s; display: flex; flex-direction: column; justify-content: space-between; padding: 25px;">
            <div style="position: relative;">
                <div class="action-text" style="font-size: 1.5rem; top: -10px; right: -10px; color: #e74c3c;">#02</div>
                
                <!-- Avatar Paslon 2 (Dua Orang) -->
                <div style="display: flex; gap: 15px; justify-content: center; margin-bottom: 15px;">
                    <div style="text-align: center;">
                        <img src="https://api.dicebear.com/7.x/micah/svg?seed=Ailsa&backgroundColor=ffdf7a" class="avatar" style="width: 90px; height: 90px;" alt="Ailsa">
                        <div style="font-size: 0.8rem; font-weight: bold; background: #000; color: #fff; padding: 5px 12px; border-radius: 5px; margin-top: 8px; border: 2px solid #000;">Ailsa</div>
                    </div>
                    <div style="text-align: center;">
                        <img src="https://api.dicebear.com/7.x/micah/svg?seed=Alea&backgroundColor=f8ad9d" class="avatar" style="width: 90px; height: 90px;" alt="Alea">
                        <div style="font-size: 0.8rem; font-weight: bold; background: #000; color: #fff; padding: 5px 12px; border-radius: 5px; margin-top: 8px; border: 2px solid #000;">Alea</div>
                    </div>
                </div>

                <h2 style="font-size: 2rem; margin-top: 15px; color: #2c3e50; font-family: 'Bangers';">AILSA & ALEA</h2>
                <p style="font-weight: bold; margin-bottom: 20px;">Julukan: The Creators</p>
            </div>
            
            <!-- Tombol Paslon 2 (Otomatis Rata Bawah) -->
            <a href="/paslon/2" class="btn-comic" style="width: 100%; box-sizing: border-box; margin-top: auto;">INTIP KEKUATAN</a>
        </div>
    </div>

    <div style="text-align: center; margin-top: 40px;">
        <a href="/pengumuman" class="btn-comic btn-green" style="font-size: 2rem;">🏆 LIHAT PAPAN SKOR 🏆</a>
    </div>
@endsection