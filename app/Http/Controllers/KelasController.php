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
