<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Rayon;
use App\Models\Rombel;
use App\Models\Student;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     */

    public function view(){
        $rombels = Rombel::count();
        $ps = User::where('role', 'ps')->count();
        $admin = User::where('role', 'admin')->count();
        $siswa = Student::count();
        $rayon = Rayon::count();
        return view('admin.dashboard', compact('rombels', 'ps', 'admin', 'siswa', 'rayon'));
    }

    public function index()
    {
        $users = User::all();
        return view('admin.user.list', compact('users'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.user.add');
        
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'nama' => 'required|min:3',
            'email' => 'required|email',
            'password' => 'required',
        ]);

        User::create([
            'nama' => $request->nama,
            'email' => $request->email,
            'role' => $request->role,
            'password' => Hash::make(substr($request->email, 0, 3) . substr($request->nama, 0, 3))
        ]);
        return redirect()->route('user.data')->with('success', 'Berhasil menambahkan akun pengguna!');
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
        $user = User::find($id); //sama dengan user::where('id', $id)->first()

        return view('admin.user.edit', compact('user'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $request->validate([
            'nama' => 'required|min:3',
            'email' => 'required|email',
            'role' => 'required'
        ]);
        if ($request->password == "") {
            User::where('id', $id)->update([
                'nama' => $request->nama,
                'email' => $request->email,
                'role' => $request->role
            ]);
        } else {
            User::where('id', $id)->update([
                'nama' => $request->nama,
                'email' => $request->email,
                'role' => $request->role,
                'password' => $request->password
            ]);
        }

        return redirect()->route('user.data')->with('success', 'Berhasil mengubah data pengguna!');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        Rombel::where('id', $id)->delete();

        return redirect()->back()->with('deleted', 'Berhasil menghapus data !');
    }

    public function loginAuth(Request $request)
    {
        $request->validate([
            'email' => 'required',
            'password' => 'required|alpha_dash',
        ], [
            'email.required' => 'Email harus diisi!',
            'email.email' => 'Email tidak valid',
            'password.required' => 'Password harus diisi',
            'password.alpha_dash' => 'Password harus berisi huruf dan karakter tanpa spasi'
        ]);

        $user = $request->only(['email', 'password']);

        if (Auth::attempt($user)) {
            return redirect()->route('dashboardlogin');
        }else{
            return redirect()->back()->with('failed', 'Proses login gagal, silahkan coba kembali dengan data yang benar!');
        }
    }

    public function logout()
    {
        Auth::logout();

        return redirect()->route('/')->with('logout', 'Anda telah logout!');
    }
}