@extends('layouts.app')

@section('content')
<h2>Edit User</h2>
<form action="{{ route('user.update', $user['id_user']) }}" method="POST">
    @csrf
    @method('PUT')
    <div class="mb-3">
        <label>Username</label>
        <input type="text" name="username" class="form-control" value="{{ $user['username'] }}" required>
    </div>
    <!-- <div class="mb-3">
        <label>Password</label>
        <input type="text" name="password" class="form-control" value="{{ $user['password'] }}" required>
    </div> -->
    <div class="mb-3">
        <label>Password</label>
        <input type="password" name="password" class="form-control" placeholder="Kosongkan jika tidak ingin ganti password">
    </div>
    <div class="mb-3">
        <label>Level</label>
        <select name="level" class="form-control">
            <option value="dosen" {{ $user['level'] == 'dosen' ? 'selected' : '' }}>Dosen</option>
            <option value="mahasiswa" {{ $user['level'] == 'mahasiswa' ? 'selected' : '' }}>Mahasiswa</option>
            <option value="admin" {{ $user['level'] == 'admin' ? 'selected' : '' }}>Admin</option>
        </select>
    </div>
    <button type="submit" class="btn btn-primary">Update</button>
</form>
@endsection
