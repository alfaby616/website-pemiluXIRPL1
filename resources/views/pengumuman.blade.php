@extends('layouts.app')
@section('content')
    <!-- VS BADGE -->
    <div style="text-align: center; position: relative; margin-bottom: 20px;">
        <div class="action-text floating" style="position: relative; display: inline-block; font-size: 4.5rem; color: #f1c40f; transform: rotate(-5deg); text-shadow: 4px 4px 0 #000, -2px -2px 0 #000, 2px -2px 0 #000, -2px 2px 0 #000;">VS!</div>
    </div>
    
    <h1 style="text-align: center; font-size: 3.5rem; margin-top: 10px; margin-bottom: 25px; text-shadow: 3px 3px 0px #f1c40f;">PAPAN SKOR SEMENTARA</h1>
    
    <!-- KOTAK UCAPAN TERIMA KASIH -->
    @if(session('success_vote'))
        <div style="background: #f1c40f; border: 5px solid #000; box-shadow: 8px 8px 0 #000; padding: 25px; text-align: center; margin-bottom: 40px; margin-top: 20px; position: relative; border-radius: 10px;">
            <div class="action-text" style="top: -25px; left: -10px; font-size: 2.5rem; color: #2ecc71; transform: rotate(-15deg);">AWESOME!</div>
            <h2 style="font-size: 2.5rem; margin: 0; color: #e74c3c;">{{ session('success_vote') }}</h2>
            <p style="font-size: 1.2rem; font-weight: bold; margin-top: 10px; color: #000;">Terima kasih agen {{ session('student_name') }}! Kamu telah berpartisipasi menentukan nasib XI RPL 1.</p>
        </div>
    @endif

    <!-- STATISTIK TOTAL -->
    <div class="comic-panel yellow" style="text-align: center; overflow: visible;">
        <h2>TOTAL SUARA MASUK: {{ $sudahMemilih }} DARI {{ $total }} AGEN</h2>
        <div class="stat-bar" style="height: 30px;">
            @php $persenTotal = $total > 0 ? ($sudahMemilih / $total) * 100 : 0; @endphp
            <div class="stat-fill striped" style="width: {{ $persenTotal }}%; background: #2ecc71;"></div>
        </div>
    </div>

    @php 
        $persen1 = $sudahMemilih > 0 ? ($suara1 / $sudahMemilih) * 100 : 0;
        $persen2 = $sudahMemilih > 0 ? ($suara2 / $sudahMemilih) * 100 : 0;
    @endphp

    <div class="grid-2" style="align-items: stretch; margin-top: 30px; gap: 30px;">
        <!-- SKOR PASLON 01 -->
        <div class="comic-panel" style="border-color: #3498db; background: #eaf2f8; overflow: visible; display: flex; flex-direction: column; justify-content: space-between; padding: 30px 25px 25px 25px;">
            
            <div style="display: flex; justify-content: space-between; align-items: center; margin-bottom: 20px;">
                <div style="background: #3498db; color: #fff; font-family: 'Bangers', cursive; font-size: 1.8rem; padding: 3px 15px; border: 3px solid #000; box-shadow: 3px 3px 0px #000; border-radius: 5px; transform: rotate(-3deg);">PASLON #01</div>
                <div style="font-weight: bold; color: #3498db; font-size: 1.1rem;">THE DEFENDERS</div>
            </div>
            
            <div>
                <!-- Avatar Paslon 1 -->
                <div style="display: flex; gap: 15px; justify-content: center; margin-bottom: 20px;">
                    <div style="text-align: center;">
                        <img src="https://api.dicebear.com/7.x/micah/svg?seed=Yudistira&backgroundColor=b6e3f4" class="avatar" style="width: 80px; height: 80px; background: white;" alt="Yudistira">
                        <div style="font-size: 0.8rem; font-weight: bold; background: #000; color: #fff; padding: 3px 10px; border-radius: 5px; margin-top: 5px; border: 2px solid #000;">Yudistira</div>
                    </div>
                    <div style="text-align: center;">
                        <img src="https://api.dicebear.com/7.x/micah/svg?seed=Maskhidir&backgroundColor=c0aede" class="avatar" style="width: 80px; height: 80px; background: white;" alt="Maskhidir">
                        <div style="font-size: 0.8rem; font-weight: bold; background: #000; color: #fff; padding: 3px 10px; border-radius: 5px; margin-top: 5px; border: 2px solid #000;">Maskhidir</div>
                    </div>
                </div>

                <h2 style="text-align: center; color: #2c3e50; font-family: 'Bangers', cursive; font-size: 2rem; margin-bottom: 25px; letter-spacing: 1px;">YUDISTIRA & MASKHIDIR</h2>
            </div>
            
            <!-- Area Skor -->
            <div>
                <h1 style="font-size: 5.5rem; margin: 0; text-align: center; color: #3498db; text-shadow: 4px 4px 0px #000; font-family: 'Bangers', cursive;">{{ $suara1 }}</h1>
                <h3 style="text-align: center; margin-top: -5px; margin-bottom: 15px; font-family: 'Bangers', cursive; letter-spacing: 1px; color: #000;">SUARA ({{ round($persen1, 1) }}%)</h3>
                <div class="stat-bar" style="height: 20px; background: #fff; border: 3px solid #000;"><div class="stat-fill striped" style="width: {{ $persen1 }}%; background: #3498db; height: 100%;"></div></div>
            </div>
        </div>

        <!-- SKOR PASLON 02 -->
        <div class="comic-panel" style="border-color: #e74c3c; background: #fdedec; overflow: visible; display: flex; flex-direction: column; justify-content: space-between; padding: 30px 25px 25px 25px;">
            
            <div style="display: flex; justify-content: space-between; align-items: center; margin-bottom: 20px;">
                <div style="background: #e74c3c; color: #fff; font-family: 'Bangers', cursive; font-size: 1.8rem; padding: 3px 15px; border: 3px solid #000; box-shadow: 3px 3px 0px #000; border-radius: 5px; transform: rotate(3deg);">PASLON #02</div>
                <div style="font-weight: bold; color: #e74c3c; font-size: 1.1rem;">THE CREATORS</div>
            </div>
            
            <div>
                <!-- Avatar Paslon 2 -->
                <div style="display: flex; gap: 15px; justify-content: center; margin-bottom: 20px;">
                    <div style="text-align: center;">
                        <img src="https://api.dicebear.com/7.x/micah/svg?seed=Ailsa&backgroundColor=ffdf7a" class="avatar" style="width: 80px; height: 80px; background: white;" alt="Ailsa">
                        <div style="font-size: 0.8rem; font-weight: bold; background: #000; color: #fff; padding: 3px 10px; border-radius: 5px; margin-top: 5px; border: 2px solid #000;">Ailsa</div>
                    </div>
                    <div style="text-align: center;">
                        <img src="https://api.dicebear.com/7.x/micah/svg?seed=Alea&backgroundColor=f8ad9d" class="avatar" style="width: 80px; height: 80px; background: white;" alt="Alea">
                        <div style="font-size: 0.8rem; font-weight: bold; background: #000; color: #fff; padding: 3px 10px; border-radius: 5px; margin-top: 5px; border: 2px solid #000;">Alea</div>
                    </div>
                </div>

                <h2 style="text-align: center; color: #2c3e50; font-family: 'Bangers', cursive; font-size: 2rem; margin-bottom: 25px; letter-spacing: 1px;">AILSA & ALEA</h2>
            </div>
            
            <!-- Area Skor -->
            <div>
                <h1 style="font-size: 5.5rem; margin: 0; text-align: center; color: #e74c3c; text-shadow: 4px 4px 0px #000; font-family: 'Bangers', cursive;">{{ $suara2 }}</h1>
                <h3 style="text-align: center; margin-top: -5px; margin-bottom: 15px; font-family: 'Bangers', cursive; letter-spacing: 1px; color: #000;">SUARA ({{ round($persen2, 1) }}%)</h3>
                <div class="stat-bar" style="height: 20px; background: #fff; border: 3px solid #000;"><div class="stat-fill striped" style="width: {{ $persen2 }}%; background: #e74c3c; height: 100%;"></div></div>
            </div>
        </div>
    </div>
    
    <!-- TOMBOL KEMBALI (Sudah Diperbaiki Jarak & Warnanya) -->
    <div style="text-align: center; margin-top: 50px; margin-bottom: 60px; clear: both; display: block;">
        <a href="/home" class="btn-comic btn-yellow" style="font-size: 1.8rem; padding: 15px 40px; text-decoration: none; display: inline-block;">KEMBALI KE MARKAS</a>
    </div>
@endsection