<?php

namespace App\Http\Controllers;

use App\Models\Student;
use Illuminate\Http\Request;

class StudentController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $students = Student::all();
        return view('admin.student.list', compact('students'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.student.add');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'nis' => 'required|min:8',
            'nama' => 'required',
            'rombel' => 'rombel',
            'rayon' => 'rayon',
        ]);

        Student::create([
            'nis' => $request->nis,
            'nama' => $request->nama,
            'rombel' => $request->rombel_id,
            'rayon' => $request->rayon_id
        ]);
        return redirect()->route('student.data')->with('success', 'Berhasil menambahkan akun pengguna!');
    }

    /**
     * Display the specified resource.
     */
    public function show(Student $student)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Student $id)
    {
        $students = Student::find($id);

        return view('admin.student.edit', compact('students'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        $request->validate([
            'nis' => 'required|min:8',
            'nama' => 'required',
            'rombel' => 'rombel',
            'rayon' => 'rayon',
        ]);

        Student::where('id', $id)->update([
            'nis' => $request->nis,
            'nama' => $request->nama,
            'rombel' => $request->rombel_id,
            'rayon' => $request->rayon_id
        ]);

        return redirect()->route('admin.student.list')->with('success', 'Berhasil mengubah data !');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        Student::where('id', $id)->delete();

        return redirect()->back()->with('deleted', 'Berhasil menghapus data !');
    }
}
