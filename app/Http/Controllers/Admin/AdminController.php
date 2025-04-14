<?php

namespace App\Http\Controllers\Admin;
use App\Models\eskul;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class AdminController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {

        return view('Admin.index');
    }
    public function eskul()
    {
        $eskul = eskul::all();
        return view('Admin.Eskul.index', compact('eskul'));
    }
    public function pengguna()
    {
        return view('Admin.Pengguna.index');
    }


    /**
     * Show the form for creating a new resource.
     */
    public function create_eskul()
    {
        return view('Admin.Eskul.create');
    }

    public function create_pengguna()
    {
        return view('Admin.Pengguna.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
                // Validasi data input
        $request->validate([
            'nama_eskul' => 'required|string|max:255',
            'id_pembina' => 'required|email|unique:students,email',
            'id_ketua' => 'required|integer|min:1',
            'jadwal' => 'required|integer|min:1',
            'tentang' => 'required|integer|min:1',
        ]);

        // Simpan data ke database
        $student = new eskul();
        $student->name = $request->name;
        $student->email = $request->email;
        $student->age = $request->age;
        $student->save();

        // Redirect dengan pesan sukses
        return redirect()->back()->with('success', 'Data siswa berhasil ditambahkan!');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
