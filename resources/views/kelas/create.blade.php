@extends('layouts.app')

@section('content')
<h2>Tambah Kelas</h2>
<form action="{{ route('kelas.store') }}" method="POST">
    @csrf
    <div class="mb-3">
        <label>ID Kelas</label>
        <input type="text" name="kode_kelas" class="form-control" required>
    </div>
    <div class="mb-3">
        <label>Nama Kelas</label>
        <input type="text" name="nama_kelas" class="form-control" required>
    </div>
    <button type="submit" class="btn btn-primary">Simpan</button>
</form>
@endsection
