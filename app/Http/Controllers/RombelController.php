<?php

namespace App\Http\Controllers;

use App\Models\Rombel;
use Illuminate\Http\Request;

class RombelController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $rombels = Rombel::all();
        return view('admin.rombel.list', compact('rombels'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.rombel.add');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'rombel' => 'required|min:3'
        ]);

        Rombel::create([
            'rombel' => $request->rombel,
        ]);

        //atau jika seluruh data input akan dimasukkan langsung ke db bisa dengan perintah Rombel::create($request->all());

        return redirect()->route('rombel.data')->with('success', 'Berhasil menambahkan data !');
    }

    /**
     * Display the specified resource.
     */
    public function show(Rombel $rombel)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        $rombels = Rombel::find($id);
        // atau $rombels = Rombel::where('id', $id)->first()

        return view('admin.rombel.edit', compact('rombels'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        $request->validate([
            'rombel' => 'required|min:3'
        ]);

        Rombel::where('id', $id)->update([
            'rombel' => $request->rombel
        ]);

        return redirect()->route('rombel.data')->with('success', 'Berhasil mengubah data !');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        Rombel::where('id', $id)->delete();

        return redirect()->back()->with('deleted', 'Berhasil menghapus data !');
    }
}
