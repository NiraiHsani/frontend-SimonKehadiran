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
