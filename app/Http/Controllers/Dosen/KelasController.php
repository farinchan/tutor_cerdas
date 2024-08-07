<?php

namespace App\Http\Controllers\Dosen;

use App\Http\Controllers\Controller;
use App\Models\Kelas;
use App\Models\Matakuliah;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use RealRashid\SweetAlert\Facades\Alert;
use Illuminate\Support\Str;

class KelasController extends Controller
{
    public function index()
    {
        $kelas = Kelas::where('nidn', auth()->user()->dosen->nidn)->with(['matakuliah', 'dosen', 'mahasiswa', 'materi']);
        $data =[
            'title' => 'Kelas',
            'kode_kelas_new' => Str::random(10),
            'kelas' => $kelas->get()
        ];
        return view('pages.kelas.index', $data);
    }

    public function store(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'matakuliah' => 'required',
            'sks' => 'required|numeric',
            'kode_kelas' => 'required',
            'nama_kelas' => 'required',
            'tingkat' => 'required',
            'jurusan' => 'required',
        ],[
            'required' => ':attribute tidak boleh kosong',
            'numeric' => ':attribute harus berupa angka'
        ]);

        if ($validator->fails()) {
            Alert::error('Error', $validator->errors()->all());
            return redirect()->back();
        }

        $matakuliah = new Matakuliah();
        $matakuliah->nama_mk = $request->matakuliah;
        $matakuliah->sks = $request->sks;
        $matakuliah->save();

        $matakuliah = Matakuliah::where('nama_mk', $request->matakuliah)->first();
        Kelas::create([
            'kode_kelas' => $request->kode_kelas,
            'nama_kelas' => $request->nama_kelas,
            'tingkat' => $request->tingkat,
            'jurusan' => $request->jurusan,
            'kode_mk' => $matakuliah->kode_mk,
            'nidn' => auth()->user()->dosen->nidn
        ]);

        Alert::success('Berhasil', 'Kelas berhasil ditambahkan');
        return redirect()->back();
    }
}
