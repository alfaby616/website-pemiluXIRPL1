@extends('layouts.app')
@section('content')
    <div class="action-text" style="top: -20px; right: -10px; font-size: 3rem;">TOP SECRET!</div>
    
    <div style="display: flex; justify-content: space-between; align-items: center; border-bottom: 5px solid #000; padding-bottom: 20px; margin-bottom: 30px;">
        <h1 style="margin: 0; font-size: 2.5rem; color: #e74c3c;">MARKAS ADMIN (CRUD)</h1>
        <a href="/home" class="btn-comic btn-blue" style="font-size: 1rem; padding: 10px 15px;">KEMBALI KE HOME</a>
    </div>

    @if(session('success'))
        <div class="speech-bubble" style="background: #2ecc71; color: white;">
            {{ session('success') }}
        </div>
    @endif

    <div class="grid-2">
        <!-- FORM TAMBAH DATA -->
        <div class="comic-panel yellow">
            <h2>➕ TAMBAH AGEN BARU</h2>
            <form action="/admin/tambah" method="POST">
                @csrf
                <label><strong>NIS:</strong></label>
                <input type="text" name="nis" required placeholder="Masukkan NIS unik">
                
                <label><strong>Nama Lengkap:</strong></label>
                <input type="text" name="nama" required placeholder="Masukkan Nama">
                
                <button type="submit" class="btn-comic" style="width: 100%;">REKRUT AGEN!</button>
            </form>
        </div>

        <!-- INFO MARKAS -->
        <div class="comic-panel blue">
            <h2>ℹ️ INFO SISTEM</h2>
            <p>Total Agen (Pemilih): <strong>{{ $students->count() }}</strong></p>
            <p>Sudah Voting: <strong>{{ $students->where('has_voted', true)->count() }}</strong></p>
            <p>Belum Voting: <strong>{{ $students->where('has_voted', false)->count() }}</strong></p>
        </div>
    </div>

    <!-- TABEL DATA -->
    <div class="comic-panel">
        <h2>📋 DAFTAR AGEN KELAS XI RPL 1</h2>
        <div style="overflow-x: auto;">
            <table style="width: 100%; border-collapse: collapse; border: 4px solid #000; font-weight: bold;">
                <thead style="background: #000; color: #fff; font-family: 'Bangers'; letter-spacing: 1px;">
                    <tr>
                        <th style="padding: 10px; border: 3px solid #000;">NO</th>
                        <th style="padding: 10px; border: 3px solid #000;">NIS</th>
                        <th style="padding: 10px; border: 3px solid #000;">NAMA AGEN</th>
                        <th style="padding: 10px; border: 3px solid #000;">STATUS VOTE</th>
                        <th style="padding: 10px; border: 3px solid #000; text-align: center;">AKSI</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($students as $index => $s)
                    <tr style="background: {{ $loop->iteration % 2 == 0 ? '#f9f9f9' : '#fff' }};">
                        <td style="padding: 10px; border: 3px solid #000;">{{ $index + 1 }}</td>
                        <td style="padding: 10px; border: 3px solid #000;">{{ $s->nis }}</td>
                        <td style="padding: 10px; border: 3px solid #000;">{{ $s->nama }}</td>
                        <td style="padding: 10px; border: 3px solid #000; color: {{ $s->has_voted ? '#2ecc71' : '#e74c3c' }};">
                            {{ $s->has_voted ? 'SUDAH' : 'BELUM' }}
                        </td>
                        <td style="padding: 10px; border: 3px solid #000; text-align: center;">
                            <a href="/admin/edit/{{ $s->id }}" class="btn-comic btn-yellow" style="padding: 5px 10px; font-size: 1rem;">EDIT</a>
                            <a href="/admin/hapus/{{ $s->id }}" class="btn-comic" style="padding: 5px 10px; font-size: 1rem;" onclick="return confirm('Yakin ingin menghapus agen {{ $s->nama }}?')">HAPUS</a>
                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
@endsection