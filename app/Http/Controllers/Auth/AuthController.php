<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Validator;
use RealRashid\SweetAlert\Facades\Alert;

class AuthController extends Controller
{
    public function login()
    {
        return view('auth.login');
    }

    public function register()
    {
        return view('auth.register');
    }

    public function loginProcess(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'email' => 'required|email',
            'password' => 'required'
        ],[
            'required' => ':attribute tidak boleh kosong',
            'email' => ':attribute harus berupa email'
        ]);

        if ($validator->fails()) {
            Alert::error('Error', $validator->errors()->all());
            return redirect()->back();
        }

        $credentials = $request->only('email', 'password');
        if (Auth::attempt($credentials)) {
            return redirect()->route('home');
        }
    }

    public function registerProcess(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'email' => 'required|email',
            'password' => 'required',
            'role' => 'required'
        ],[
            'required' => ':attribute tidak boleh kosong',
            'email' => ':attribute harus berupa email'
        ]);

        if ($validator->fails()) {
            Alert::error('Error', $validator->errors()->all());
            return redirect()->back();
        }

        if ($request->role == 'mahasiswa') {
            $user = User::create([
                'email' => $request->email,
                'password' => bcrypt($request->password)
            ]);

            $validator_mhs = Validator::make($request->all(), [
                'nim' => 'required|numeric',
                'nama' => 'required|string',
                'foto' => 'nullable|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
                'alamat' => 'required|string',
                'jenis_kelamin' => 'required|in:L,P',
                'agama' => 'required|in:Islam,Kristen,Katolik,Hindu,Budha,Konghucu',
                'jurusan' => 'required|string'
            ],[
                'required' => ':attribute tidak boleh kosong',
                'numeric' => ':attribute harus berupa angka',
                'string' => ':attribute harus berupa huruf',
                'image' => ':attribute harus berupa gambar',
                'mimes' => ':attribute harus berupa gambar dengan format jpeg, png, jpg, gif, svg',
                'max' => ':attribute tidak boleh lebih dari 2MB',
                'in' => ':attribute harus salah satu dari :values'
            ]);

            if ($validator_mhs->fails()) {
                Alert::error('Error', $validator_mhs->errors()->all());
                return redirect()->back();
            }

            $user->mahasiswa()->create([
                'nim' => $request->nim,
                'nama' => $request->nama,
                'foto' => $request->foto,
                'alamat' => $request->alamat,
                'jenis_kelamin' => $request->jenis_kelamin,
                'agama' => $request->agama,
                'jurusan' => $request->jurusan
            ]);

            Alert::success('Success', 'Registrasi berhasil');
            return redirect()->route('login');

        } else {
            $user = User::create([
                'email' => $request->email,
                'password' => bcrypt($request->password)
            ]);

            $validator_dosen = Validator::make($request->all(), [
                'nidn' => 'required|numeric',
                'nama' => 'required|string',
                'foto' => 'nullable|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
                'alamat' => 'required|string',
                'jenis_kelamin' => 'required|in:L,P',
                'agama' => 'required|in:Islam,Kristen,Katolik,Hindu,Budha,Konghucu',
                'jabatan' => 'required|string'
            ],[
                'required' => ':attribute tidak boleh kosong',
                'numeric' => ':attribute harus berupa angka',
                'string' => ':attribute harus berupa huruf',
                'image' => ':attribute harus berupa gambar',
                'mimes' => ':attribute harus berupa gambar dengan format jpeg, png, jpg, gif, svg',
                'max' => ':attribute tidak boleh lebih dari 2MB',
                'in' => ':attribute harus salah satu dari :values'
            ]);

            if ($validator_dosen->fails()) {
                Alert::error('Error', $validator_dosen->errors()->all());
                return redirect()->back();
            }

            if ($request->hasFile('foto')) {
                $request->file('foto')->move('images/', $request->file('foto')->getClientOriginalName());
            }

            $user->dosen()->create([
                'nidn' => $request->nidn,
                'nama' => $request->nama,
                'foto' => $request->foto,
                'alamat' => $request->alamat,
                'jenis_kelamin' => $request->jenis_kelamin,
                'agama' => $request->agama,
                'jabatan' => $request->jabatan
            ]);

            Alert::success('Success', 'Registrasi berhasil');
            return redirect()->route('login');
        }
    }

    public function logout()
    {
        Auth::logout();
        return redirect()->route('login');
    }
}
