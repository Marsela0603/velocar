<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\jenis_kendaraan;
use Illuminate\Support\Facades\Auth;

class JKController extends Controller
{
    public function index(){
        $jenis_kendaraans = jenis_kendaraan::all();
        return view('admin.jenis_kendaraan.index', compact('jenis_kendaraans'));   
    }

    public function create(){
        return view('admin.jenis_kendaraan.create');
    }

    public function store(Request $request)
    {
        // validasi form input
        $validated = $request->validate([
            'nama' => 'required|string',
            'deskripsi' => 'required|string'
        ]);

        jenis_kendaraan::create($validated);
        return redirect('/dashboard/jenis_kendaraan/')->with('pesan', 'Data Berhasil Ditambah');
    }

    public function show(string $id)
    {
        $jenis_kendaraan = jenis_kendaraan::find($id);
        return view('admin.jenis_kendaraan.show', compact('jenis_kendaraan'));
    }

    public function edit(string $id)
    {
        $jenis_kendaraan = jenis_kendaraan::find($id);
        return view('admin.jenis_kendaraan.edit', compact('jenis_kendaraan'));
    }

    public function update(Request $request, string $id)
    {
         // validasi form input
         $validated = $request->validate([
            'nama' => 'required|string',
            'deskripsi' => 'required|string'
        ]);

        $jenis_kendaraan = jenis_kendaraan::find($id);
        $jenis_kendaraan->update($validated);

        return redirect('dashboard/jenis_kendaraan')->with('pesan', 'Data Berhasil Diperbarui');
    }

    public function destroy(string $id)
    {
        $jenis_kendaraan = jenis_kendaraan::find($id);
        $jenis_kendaraan->delete();

        return redirect('dashboard/jenis_kendaraan')->with('pesan', 'Data Berhasil Dihapus');
    }
}
