<?php

namespace App\Http\Controllers\Admin;
use App\Models\eskul;
use Illuminate\Support\Facades\Auth;
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
        return view('Admin.Eskul.index');
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
        $eskul = eskul::all();
        return view('Admin.Eskul.create', compact('eskul'));
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
            'nama_eskul' => 'required',
            'nama_pembina' => 'required|exists:pembina,id',
            'nama_ketua' => 'required|exists:ketua,id',
            'jadwal' => 'required',
            'tentang' => 'required',
        ]);

        // Simpan data ke database
        $register = new eskul([
            'nama_eskul' => $request->nama_eskul,
            'nama_pembina' => $request->nama_pembina,
            'nama_ketua' => $request->nama_ketua,
            'jadwal' => $request->jadwal,
            'tentang' => $request->tentang     
        ]);

        $register->save();

        return redirect('/Admin/Eskul/index');
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
