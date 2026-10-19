@extends('layouts.app')
@section('content')
    <h1 style="text-align: center; color: #3498db;">EDIT DATA AGEN</h1>
    
    <div class="comic-panel" style="max-width: 500px; margin: 0 auto; border-color: #3498db;">
        <form action="/admin/update/{{ $student->id }}" method="POST">
            @csrf
            <label><strong>NIS:</strong></label>
            <input type="text" name="nis" value="{{ $student->nis }}" required>
            
            <label><strong>Nama Lengkap:</strong></label>
            <input type="text" name="nama" value="{{ $student->nama }}" required>
            
            <label><strong>Status Voting (0 = Belum, 1 = Sudah):</strong></label>
            <input type="number" name="has_voted" value="{{ $student->has_voted }}" min="0" max="1" required>
            
            <div style="display: flex; gap: 10px; margin-top: 20px;">
                <a href="/admin" class="btn-comic btn-yellow" style="width: 50%; text-align: center;">BATAL</a>
                <button type="submit" class="btn-comic btn-blue" style="width: 50%;">SIMPAN! ZAP!</button>
            </div>
        </form>
    </div>
@endsection