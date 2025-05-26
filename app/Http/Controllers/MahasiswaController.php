<?php

namespace App\Http\Controllers;

use App\Models\Mahasiswa;
use App\Models\Prodi;
use Illuminate\Http\Request;

class MahasiswaController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
                //panggil model mahasiswa dmenggunakan eloquent
                $mahasiswa = Mahasiswa::all(); // perintah sql select * from mahasiswa
                // dd($mahasiswa); // dump and die
                return view('mahasiswa.index')->with('mahasiswa', $mahasiswa);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $prodi = Prodi::all(); // ambil semua data fakultas
        return view('mahasiswa.create', compact('prodi'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        // validasi input
        $input = $request->validate([
            'npm' => 'required|unique:mahasiswa',
            'nama' => 'required',
            'jenis_kelamin' => 'required',
            'tanggal_lahir' => 'required|date',
            'tempat_lahir' => 'required',
            'asal_sma' => 'required',
            'prodi_id' => 'required',
            'foto' => 'image|mimes:jpeg,png,jpg,gif|max:2048',
        ]);
        // jika ada file foto yang diupload
        if ($request->hasFile('foto')) {
            // ambil file foto
            $file = $request->file('foto');
            // buat nama file unik, agar nama foto tidak ada yang sama
            $filename = time() . '.' . $file->getClientOriginalExtension();
            // simpan file foto ke folder public/foto
            $file->move(public_path('foto'), $filename);
            // simpan nama file baru ke database
            $input['foto'] = $filename;
        }

        // simpan data ke tabel mahasiswa
        Mahasiswa::create($input);

        // redirect ke route mahasiswa.index
        return redirect()->route('mahasiswa.index')->with('success', 'Mahasiswa berhasil ditambahkan.');

    }

    /**
     * Display the specified resource.
     */
    public function show(Mahasiswa $mahasiswa)
    {
        //dd($mahasiswa);
        return view('mahasiswa.show', compact('mahasiswa'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Mahasiswa $mahasiswa)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Mahasiswa $mahasiswa)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Mahasiswa $mahasiswa)
    {
        $mahasiswa->delete(); // hapus data mahasiswa
        // jika ada foto, hapus juga file fotonya
        if ($mahasiswa->foto) {
            $filePath = public_path('foto/' . $mahasiswa->foto);
            if (file_exists($filePath)) {
                unlink($filePath); // hapus file foto
            }
        }
        // redirect ke route mahasiswa.index
        return redirect()->route('mahasiswa.index')->with('success', 'Mahasiswa berhasil dihapus.');
    }
}
