# 🎯 Laravel Frontend + CodeIgniter Backend (API) - USER & KELAS

Proyek ini adalah integrasi **Laravel (Frontend)** dan **CodeIgniter 4 (Backend API)** untuk menampilkan dan mengelola data **User** dan **Kelas**.

---

## 🧱 PERSYARATAN

Pastikan kamu sudah menyiapkan:

- ✅ Laragon (untuk server lokal)
- ✅ PHP versi 8.3
- ✅ Composer & Git
- ✅ phpMyAdmin
- ✅ Text editor (seperti VS Code)

---

## 📁 STRUKTUR FOLDER YANG DIGUNAKAN

```plaintext
D:/
├── backend/            # Folder backend CodeIgniter (Simon-kehadiran)
│   └── .env
│   └── app/
│   └── public/
│   └── ...
│
D:/
├──frontend/           # Folder frontend Laravel
    ├── .env
    ├── routes/
    ├── app/Http/Controllers/
    ├── resources/views/
    └── ...
```

---

## 🚀 LANGKAH-LANGKAH SETUP

---

### 📦 1. CLONE DAN JALANKAN BACKEND (CODEIGNITER 4)

#### 🔧 1.1 Buat folder backend

```bash
cd D:
mkdir backend
cd backend
```

#### ⬇️ 1.2 Clone project backend

```bash
git https://github.com/NalindraDT/Simon-kehadiran.git simon-kehadiran
```

#### ⚙️ 1.3 Install dependency

```bash
composer install
```

#### 🛠️ 1.4 Copy file `.env`

```bash
cp env .env
```

Edit file `.env` untuk koneksi database:

```bash
database.default.hostname = localhost
database.default.database = simon_kehadiran
database.default.username = root
database.default.password =
```

#### 🗃️ 1.5 Import database ke phpMyAdmin

1. Download SQL file:  
   https://github.com/JiRizkyCahyusna/DBE_Simon  
   Nama file: `simon_kehadiran.sql`

2. Buka `http://localhost/phpmyadmin`

3. Buat database baru dengan nama: `simon_kehadiran`

4. Klik **Import** dan upload file `simon_kehadiran.sql`

#### ▶️ 1.6 Jalankan backend (masuk & sesuaikan ke folder backend)

```bash
cd D:/backend/simon-kehadiran
php spark serve
```

Buka di browser:

```
http://localhost:8080
```

Coba buka endpoint:

- `http://localhost:8080/user`
- `http://localhost:8080/kelas`
---

#### 🧪 1.7 PENGUJIAN DENGAN POSTMAN

Setelah frontend dan backend berhasil dihubungkan, lakukan pengujian API menggunakan **Postman** untuk memastikan endpoint bekerja dengan benar.

#### 📁 A. ENDPOINT KELAS

| Metode | Endpoint                                 | Keterangan             |
|--------|------------------------------------------|------------------------|
| GET    | `http://localhost:8080/kelas`            | Ambil semua data kelas |
| POST   | `http://localhost:8080/kelas`            | Tambah data kelas baru |
| PUT    | `http://localhost:8080/kelas/{id_kelas}` | Update data kelas      |
| DELETE | `http://localhost:8080/kelas/{id_kelas}` | Hapus data kelas       |

#### 🔐 Contoh Body JSON - POST / PUT (Kelas)

```json
{
  "nama_kelas": "XII RPL 1",
  "wali_kelas": "Budi Santoso"
}
```

---

#### 👤 B. ENDPOINT USER

| Metode | Endpoint                                | Keterangan            |
|--------|-----------------------------------------|-----------------------|
| GET    | `http://localhost:8080/user`            | Ambil semua data user |
| POST   | `http://localhost:8080/user`            | Tambah data user baru |
| PUT    | `http://localhost:8080/user/{id_user}`  | Update data user      |
| DELETE | `http://localhost:8080/user/{id_user}`  | Hapus data user       |

#### 🔐 Contoh Body JSON - POST / PUT (User)

```json
{
  "username": "admin123",
  "password": "12345678",
  "role": "admin",
  "status": "aktif"
}
```

#### ⚠️ Catatan:

- Pastikan backend (`php spark serve`) **dalam keadaan aktif**
- Gunakan `Headers` di Postman:
  - `Content-Type: application/json`
- Gunakan metode HTTP yang sesuai: **GET, POST, PUT, DELETE**

---


### 🖥️ 2. SETUP FRONTEND (LARAVEL)

#### 📁 2.1 Buat folder frontend

```bash
cd D:
laravel new frontend
cd frontend
```

---

## 🖥️ 2. SETUP FRONTEND (LARAVEL)

### 📌 2.1 Buat Folder Laravel Frontend di Laragon

Pastikan kamu sudah menginstal **Laragon** dan Laravel versi terbaru. Proses ini akan membuat folder `frontend` di direktori `laragon/www`.

#### ✅ Langkah-langkah:

1. **Buka Laragon**, lalu klik menu **Terminal**.

2. Jalankan perintah di bawah ini untuk masuk ke folder `www`:

```bash
cd C:\laragon\www
```

3. **Buat project Laravel baru dengan nama `frontend`**:

```bash
laravel new frontend
```

> Jika perintah `laravel` tidak dikenali, kamu bisa gunakan Composer:
```bash
composer create-project laravel/laravel frontend
```

4. Setelah proses selesai, masuk ke folder proyek:

```bash
cd frontend
```

---

### ⚙️ 2.2 Konfigurasi File `.env`

Edit file `.env` untuk menambahkan konfigurasi API backend CodeIgniter 4 agar Laravel bisa terhubung dengan API tersebut.

#### ➕ Tambahkan baris berikut ke `.env` Laravel:

```dotenv
VITE_API_URL=http://localhost:8080
```

> `http://localhost:8080` adalah alamat dari backend CodeIgniter 4 yang kamu jalankan dengan `php spark serve`.

---

### 🚀 2.3 Jalankan Laravel Frontend

Jalankan server Laravel lokal:

```bash
php artisan serve
```

Buka di browser:

```
http://localhost:8000
```

---

### 🛠️ Tips:

- Jika kamu ingin membuka folder Laravel langsung di Visual Studio Code:

```bash
code .
```
---

## 🖥️ 2. SETUP FRONTEND (LARAVEL)

### 📦 2.1 Pilihan Lokasi Folder Laravel Frontend

#### ✅ **Opsi 1: Instal Laravel di `C:\laragon\www` (direkomendasikan untuk Laragon)**

1. Buka Terminal Laragon:
```bash
cd C:\laragon\www
laravel new frontend
cd frontend
```

> Jika `laravel new` tidak tersedia, gunakan Composer:
```bash
composer create-project laravel/laravel frontend
```

#### ✅ **Opsi 2: Instal Laravel di drive lain (misalnya `D:\`)**

1. Buka Command Prompt atau Terminal biasa:
```bash
cd D:\
composer create-project laravel/laravel frontend
cd frontend
```

> Pastikan sudah menginstal Composer dan Laravel Global jika tidak memakai Laragon.

---

### 🧱 2.2 Struktur dan Pembuatan Komponen Frontend

#### 🛠️ Buat Controller

```bash
php artisan make:controller UserController
php artisan make:controller KelasController
```

#### 🛠️ Buat View (dalam `resources/views/`)

Contoh membuat file view:
```bash
cd resources/views
mkdir user
mkdir kelas
touch user/index.blade.php
touch kelas/index.blade.php
```


#### ⚙️ 2.3 Generate app key

```bash
composer install
php artisan key:generate
```

---

### 🧩 3. BUAT ROUTE, CONTROLLER, DAN VIEW

#### ✏️ 3.1 Tambahkan route di `routes/web.php`

```php
<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\KelasController;

Route::get('/dashboard', [UserController::class, 'dashboard'])->name('dashboard');
Route::get('/user', [UserController::class, 'index'])->name('user.index');
Route::get('/user/create', [UserController::class, 'create'])->name('user.create');
Route::post('/user', [UserController::class, 'store'])->name('user.store');
Route::get('/user/{id}/edit', [UserController::class, 'edit'])->name('user.edit');
Route::put('/user/{id}', [UserController::class, 'update'])->name('user.update');
Route::delete('/user/{id}', [UserController::class, 'destroy'])->name('user.destroy');

Route::get('/dashboard', [UserController::class, 'dashboard'])->name('dashboard');
Route::get('/kelas', [KelasController::class, 'index'])->name('kelas.index');
Route::get('/kelas/create', [KelasController::class, 'create'])->name('kelas.create');
Route::post('/kelas', [KelasController::class, 'store'])->name('kelas.store');
Route::get('/kelas/{id}/edit', [KelasController::class, 'edit'])->name('kelas.edit');
Route::put('/kelas/{id}', [KelasController::class, 'update'])->name('kelas.update');
Route::delete('/kelas/{id}', [KelasController::class, 'destroy'])->name('kelas.destroy');
```

---

#### 📡 3.2 Isikan `app/Http/Controllers/Controller.php`

```php
<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;

class Controller extends BaseController
{
    use AuthorizesRequests, ValidatesRequests;
}

```
#### 📡 3.3 Isikan `app/Http/Controllers/UserController.php`
```php
<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class UserController extends Controller
{
    private $apiUrl = 'http://localhost:8080/user';

    public function dashboard()
    {
        return view('dashboard');
    }

    public function index()
    {
        $response = Http::get($this->apiUrl);
        $users = $response->json();
        return view('user.index', compact('users'));
    }

    public function create()
    {
        return view('user.create');
    }

    public function store(Request $request)
    {
        $response = Http::asForm()->post($this->apiUrl, $request->all());
        if ($response->successful()) {
            return redirect()->route('user.index')->with('success', 'User created successfully.');
        } else {
            return back()->withErrors('Gagal menyimpan data user');
        }
    }

    public function edit($id)
    {
        $response = Http::get("{$this->apiUrl}/{$id}");
        $user = $response->json();
        return view('user.edit', compact('user'));
    }

    public function update(Request $request, $id)
    {
        $data = $request->all();

        // Kalau password kosong, hapus dari data supaya backend pakai password lama
        if (empty($data['password'])) {
            unset($data['password']);
        }

        $response = Http::asForm()->put("{$this->apiUrl}/{$id}", $data);

        if ($response->successful()) {
            return redirect()->route('user.index')->with('success', 'User updated successfully.');
        } else {
            return back()->withErrors('Gagal mengupdate data user');
        }
    }

    public function destroy($id)
    {
        Http::delete("{$this->apiUrl}/{$id}");
        return redirect()->route('user.index')->with('success', 'User deleted successfully.');
    }
}
```

#### 📡 3.4 Isikan `app/Http/Controllers/KelasController.php`
```php
<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class KelasController extends Controller
{
     private $apiUrl = 'http://localhost:8080/kelas';

    public function dashboard()
    {
        return view('dashboard');
    }

    public function index()
    {
        $response = Http::get($this->apiUrl);
        $kelases = $response->json();
        return view('kelas.index', compact('kelases'));
    }

    public function create()
    {
        return view('kelas.create');
    }

    public function store(Request $request)
    {
        $response = Http::asForm()->post($this->apiUrl, $request->all());
        if ($response->successful()) {
            return redirect()->route('kelas.index')->with('success', 'kelas created successfully.');
        } else {
            return back()->withErrors('Gagal menyimpan data kelas');
        }
    }

    public function edit($id)
    {
        $response = Http::get("{$this->apiUrl}/{$id}");
        $kelas = $response->json();
        return view('kelas.edit', compact('kelas'));
        
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'kode_kelas' => 'required|string',
            'nama_kelas' => 'required|string',
        ]);

        $data = $request->all();

        // Debug: lihat data yang dikirim
        \Log::debug('Data update kelas:', $data);

        $response = Http::put("{$this->apiUrl}/{$id}", $data);

        if ($response->successful()) {
            return redirect()->route('kelas.index')->with('success', 'Kelas berhasil diperbarui.');
        } else {
            \Log::error('Gagal update kelas', [
                'status' => $response->status(),
                'body' => $response->body(),
            ]);
            return back()->withErrors(['msg' => 'Gagal mengupdate data kelas.'])->withInput();
        }
    }

    public function destroy($id)
    {
        Http::delete("{$this->apiUrl}/{$id}");
        return redirect()->route('kelas.index')->with('success', 'kelas deleted successfully.');
    }

}
```
---

#### 🖼️ 3.5 Isikan View: `resources/views/dashboard.blade.php`
```php
@extends('layouts.app')

@section('content')
<h1>Dashboard</h1>
<p>Selamat datang di dashboard aplikasi Laravel yang terhubung dengan API CodeIgniter.</p>
@endsection
```
#### 🖼️ 3.6 Isikan View: `resources/views/layouts/app.blade.php`
```php
<!DOCTYPE html>
<html>
<head>
    <title>Dashboard</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
<div class="d-flex">
    <div class="bg-dark text-white p-3" style="width: 200px; height: 100vh;">
        <h4>Menu</h4>
        <ul class="nav flex-column">
            <li class="nav-item"><a class="nav-link text-white" href="{{ route('dashboard') }}">Dashboard</a></li>
            <li class="nav-item"><a class="nav-link text-white" href="{{ route('user.index') }}">User</a></li>
            <li class="nav-item"><a class="nav-link text-white" href="{{ route('kelas.index') }}">Kelas</a></li>
        </ul>
    </div>
    <div class="p-4" style="flex-grow: 1;">
        @yield('content')
    </div>
</div>
</body>
</html>
```
#### 🖼️ 3.7 Isikan View: `resources/views/user/index.blade.php`
```php
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

```
#### 🖼️ 3.8 Isikan View: `resources/views/user/create.blade.php`
```php
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
```
#### 🖼️ 3.9 Isikan View: `resources/views/user/edit.blade.php`
```php
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
```
#### 🖼️ 3.10 Isikan View: `resources/views/kelas/index.blade.php`
```php
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
```
#### 🖼️ 3.11 Isikan View: `resources/views/user/create.blade.php`
```php
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

```
#### 🖼️ 3.12 Isikan View: `resources/views/user/edit.blade.php`
```php
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

```
---

## ✅ JALANKAN FRONTEND

```bash
cd D:/frontend/simon-kehadiran
php artisan serve
```

Akses di browser:

- `http://localhost:8000/user` → Data user
- `http://localhost:8000/kelas` → Data kelas

---

## 📝 CATATAN

- Backend harus aktif (`php spark serve`)
- Database `simon_kehadiran` harus sudah di-import
- Pastikan `.env` Laravel mengarah ke `http://localhost:8080`

---

## 📄 LISENSI

MIT License
