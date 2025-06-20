<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class ObatController extends Controller
{
    protected $apiUrl = 'http://localhost:8000/api/obat';

    // public function index(Request $request)
    // {
    //     $search = $request->query('search');
    //     $response = Http::get($this->apiUrl, ['search' => $search]);
    //     $dataObat = $response->json();

    //     return view('obat.index', compact('dataObat'));
    // }

public function index()
{
    try {
        $response = Http::get('http://localhost:8080/obat'); // ganti URL sesuai API kamu

        if ($response->successful()) {
            $dataObat = $response->json();
        } else {
            $dataObat = [];
        }
    } catch (\Exception $e) {
        $dataObat = [];
    }

    return view('obat.index', compact('dataObat'));
}

    

    public function create()
    {
        return view('obat.create');
    }

    public function store(Request $request)
    {
        $response = Http::post($this->apiUrl, $request->all());

        return redirect()->route('obat.index')->with(
            $response->successful() ? 'success' : 'error',
            $response->successful() ? 'Data berhasil ditambahkan!' : 'Gagal menambahkan data.'
        );
    }

    public function edit($id)
    {
        $response = Http::get($this->apiUrl . '/' . $id);
        $obat = $response->json();
        return view('obat.edit', compact('obat'));
    }

    public function update(Request $request, $id)
    {
        $response = Http::put($this->apiUrl . '/' . $id, $request->all());

        return redirect()->route('obat.index')->with(
            $response->successful() ? 'success' : 'error',
            $response->successful() ? 'Data berhasil diupdate!' : 'Gagal mengupdate data.'
        );
    }

    public function destroy($id)
    {
        $response = Http::delete($this->apiUrl . '/' . $id);

        return redirect()->route('obat.index')->with(
            $response->successful() ? 'success' : 'error',
            $response->successful() ? 'Data berhasil dihapus!' : 'Gagal menghapus data.'
        );
    }
}
