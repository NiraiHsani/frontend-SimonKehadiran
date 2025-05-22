@extends('layouts.app')

@section('content')
<h2>Data User</h2>
<a href="{{ route('user.create') }}" class="btn btn-primary mb-2">Tambah User</a>

@if(session('success'))
    <div class="alert alert-success">{{ session('success') }}</div>
@endif

<table class="table table-bordered">
    <thead>
        <tr>
            <th>ID</th><th>Username</th><th>Level</th><th>Aksi</th>
        </tr>
    </thead>
    <tbody>
        @foreach($users as $user)
        <tr>
            <td>{{ $user['id_user'] }}</td>
            <td>{{ $user['username'] }}</td>
            <td>{{ $user['level'] }}</td>
            <td>
                <a href="{{ route('user.edit', $user['id_user']) }}" class="btn btn-warning btn-sm">Edit</a>
                <form action="{{ route('user.destroy', $user['id_user']) }}" method="POST" style="display:inline;">
                    @csrf @method('DELETE')
                    <button type="submit" onclick="return confirm('Hapus user ini?')" class="btn btn-danger btn-sm">Hapus</button>
                </form>
            </td>
        </tr>
        @endforeach
    </tbody>
</table>
@endsection
