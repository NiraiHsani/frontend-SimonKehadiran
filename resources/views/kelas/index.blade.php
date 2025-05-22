@extends('layouts.app')

@section('content')
<h2>Data Kelas</h2>
<a href="{{ route('kelas.create') }}" class="btn btn-primary mb-2">Tambah kelas</a>

@if(session('success'))
    <div class="alert alert-success">{{ session('success') }}</div>
@endif

<table class="table table-bordered">
    <thead>
        <tr>
            <th>ID</th><th>Nama Kelas</th><th>Aksi</th>
        </tr>
    </thead>
    <tbody>
        @foreach($kelases as $kelas)
        <tr>
            <td>{{ $kelas['kode_kelas'] }}</td>
            <td>{{ $kelas['nama_kelas'] }}</td>

            <td>
                <a href="{{ route('kelas.edit', $kelas['kode_kelas']) }}" class="btn btn-warning btn-sm">Edit</a>
                <form action="{{ route('kelas.destroy', $kelas['kode_kelas']) }}" method="POST" style="display:inline;">
                    @csrf @method('DELETE')
                    <button type="submit" onclick="return confirm('Hapus kelas ini?')" class="btn btn-danger btn-sm">Hapus</button>
                </form>
            </td>
        </tr>
        @endforeach
    </tbody>
</table>
@endsection
