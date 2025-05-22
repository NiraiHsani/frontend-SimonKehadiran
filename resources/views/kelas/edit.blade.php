@extends('layouts.app')

@section('content')
<h2>Edit Kelas</h2>

@if ($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif

<form action="{{ route('kelas.update', $kelas['kode_kelas']) }}" method="POST">
    @csrf
    @method('PUT')
    
    <div class="mb-3">
        <label>Kode Kelas</label>
        <input type="text" name="kode_kelas" class="form-control"
               value="{{ old('kode_kelas', $kelas['kode_kelas']) }}" required>
    </div>

    <div class="mb-3">
        <label>Nama Kelas</label>
        <input type="text" name="nama_kelas" class="form-control"
               value="{{ old('nama_kelas', $kelas['nama_kelas'] ?? '') }}" required>
    </div>

    <button type="submit" class="btn btn-primary">Update</button>
</form>
@endsection
