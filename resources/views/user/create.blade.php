@extends('layouts.app')

@section('content')
<h2>Tambah User</h2>
<form action="{{ route('user.store') }}" method="POST">
    @csrf
    <div class="mb-3">
        <label>Username</label>
        <input type="text" name="username" class="form-control" required>
    </div>
    <div class="mb-3">
        <label>Password</label>
        <input type="text" name="password" class="form-control" required>
    </div>
    <div class="mb-3">
        <label>Level</label>
        <select name="level" class="form-control">
            <option value="dosen">Dosen</option>
            <option value="mahasiswa">Mahasiswa</option>
            <option value="admin">Admin</option>
        </select>
    </div>
    <button type="submit" class="btn btn-primary">Simpan</button>
</form>
@endsection
