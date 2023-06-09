<?php

namespace App\Http\Controllers;

use App\Models\Kategori;
use Illuminate\Http\Request;

class KategoriController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data = Kategori::orderBy('name', 'ASC')->get();
        return view('kategori.index', compact('data'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('kategori.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // $request->validate(
        //     [
        //         'id' => 'required',
        //         'name' => 'required',
        //         'updated_at' => 'required',
        //         'created_at' => 'required'
        //     ]
        // );

        $request->validate([
            'id' => 'required|numeric|min:3|unique:kategoris',
            'name' => 'required|min:3',
        ], [
            'id.required' => 'Id Belum Diisi.',
            'id.unique' => 'Id Sudah Terdaftar.',
            'id.numeric' => 'Id Harus Angka.',
            'id.min' => 'Id Minimal 3 Angka.',
            'name.required' => 'Nama Kategori Belum Diisi.',
            'name.min' => 'Nama Kategori Minimal 3 Karakter.',
        ]);

        $data = [
            'id' => $request->id,
            'name' => $request->name,
        ];

        Kategori::create($data);
        return to_route('kategori.index')->with('message', 'Kategori Berhasil Ditambahkan');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Kategori  $kategori
     * @return \Illuminate\Http\Response
     */
    public function show(Kategori $kategori)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Kategori  $kategori
     * @return \Illuminate\Http\Response
     */
    public function edit(Kategori $kategori)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Kategori  $kategori
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Kategori $kategori)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Kategori  $kategori
     * @return \Illuminate\Http\Response
     */
    public function destroy(Kategori $kategori)
    {
        //
    }
}
