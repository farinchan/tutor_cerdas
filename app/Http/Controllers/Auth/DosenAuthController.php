<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Models\Dosen;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class DosenAuthController extends Controller
{
    public function LoginForm()
    {
        return view('auth.dosen_login');
    }

    public function login(Request $request)
    {
        $credentials = $request->only('email', 'password');

        if (Auth::guard('dosen')->attempt($credentials)) {
            return redirect()->route('dosen.home');
        }

        return back()->withErrors([
            'email' => 'The provided credentials do not match our records.',
        ]);
    }

    public function logout()
    {
        Auth::guard('dosen')->logout();

        return redirect()->route('home');
    }

    public function registerForm()
    {
        return view('auth.dosen_register');
    }

    public function register(Request $request)
    {
        // dd($request->all());
        $request->validate([
            'nidn' => 'required|string|max:255|unique:dosen',
            'nama' => 'required|string|max:255',
            'email' => 'required|string|email|max:255|unique:dosen',
            'password' => 'required|string|min:8',
            'jabatan' => 'required|string|max:255',
            'pangkat' => 'required|string|max:255',
            'foto' => 'nullable|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            'alamat' => 'required|string',
            'pendidikan_terakhir' => 'required|string',
        ],
        [
            'required' => ':attribute wajib diisi',
            'string' => ':attribute harus berupa string',
            'max' => ':attribute maksimal :max karakter',
            'unique' => ':attribute sudah terdaftar',
            'email' => ':attribute harus berupa email',
            'min' => ':attribute minimal :min karakter',
            'image' => ':attribute harus berupa gambar',
            'mimes' => ':attribute harus berupa gambar dengan format jpeg, png, jpg, gif, atau svg',
            'max' => ':attribute maksimal :max KB',
        ]);

        $dosen = Dosen::create([
            'nidn' => $request->nidn,
            'nama' => $request->nama,
            'email' => $request->email,
            'password' => bcrypt($request->password),
            'jabatan' => $request->jabatan,
            'pangkat' => $request->pangkat,
            'foto' => $request->file('foto')->storeAs('foto', $request->nidn . '.' . $request->file('foto')->extension()),
            'alamat' => $request->alamat,
            'pendidikan_terakhir' => $request->pendidikan_terakhir,

        ]);

        Auth::guard('dosen')->login($dosen);

        return redirect()->route('dosen.home');
    }

    public function resetPasswordForm()
    {
        return view('auth.dosen_reset_password');
    }

    public function resetPassword(Request $request)
    {
        $request->validate([
            'email' => 'required|string|email|max:255',
        ],
        [
            'required' => ':attribute wajib diisi',
            'string' => ':attribute harus berupa string',
            'email' => ':attribute harus berupa email',
        ]);

        $dosen = Dosen::where('email', $request->email)->first();

        if ($dosen) {
            $dosen->sendPasswordResetNotification();
        }

        return back()->with('status', 'Link reset password telah dikirim ke email Anda');
    }
}
