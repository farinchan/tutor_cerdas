<?php

namespace App\Http\Controllers\Dosen;

use App\Http\Controllers\Controller;
use App\Models\Kelas;
use App\Models\Materi;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Str;

class MateriController extends Controller
{
    public function create($kode_kelas)
    {
        if (Kelas::where('kode_kelas', $kode_kelas)->count() == 0) {
            return abort(404);
        }

        $data = [
            'title' => 'Buat Materi',
            'menu' => 'materi',
            'sub_menu' => 'create',
            'kode_kelas' => $kode_kelas
        ];
        return view('pages.materi.create', $data);
    }

    public function store(Request $request)
    {
        return response()->json($request->all());
        if (Kelas::where('kode_kelas', $request->kode_kelas)->count() == 0) {
            return response()->json([
                'status' => 'error',
                'message' => 'Kelas tidak ditemukan'
            ], 404);
        }

        $validator = Validator::make($request->all(), [
            'foto' => 'nullable',
            'judul' => 'required',
            'deskripsi' => 'required',
            'isi_materi' => 'required',
            'file' => 'nullable',
            'kode_kelas' => 'required',
            'status' => 'required'
        ], [
            'required' => ':attribute tidak boleh kosong',
            'image' => ':attribute harus berupa gambar',
            'mimes' => ':attribute harus berupa gambar dengan format jpeg, png, jpg, gif, svg',
        ]);

        if ($validator->fails()) {
            return response()->json([
                'status' => 'error',
                'message' => $validator->errors()->all()
            ], 400);
        }

        $fotoPath = null;
        if($request->hasFile('foto')){
            $foto = $request->file('foto');
            $fotoNewName = Str::random(10) . "_" . $foto->getClientOriginalName();
            $fotoPath = $foto->storeAs('public/materi/foto', $fotoNewName);
        }

        $fileArray = [];
        if ($request->hasFile('file')) {
            foreach ($request->file('file') as $file) {

                $fileNewName = Str::random(10) . "_" . $file->getClientOriginalName();
                $filePath = $file->storeAs('public/materi', $fileNewName);
                $fileArray[] = $filePath;
            }
        }


        $materi = new Materi();
        $materi->gambar = $fotoPath;
        $materi->judul = $request->judul;
        $materi->deskripsi = $request->deskripsi;
        $materi->isi_materi = $request->isi_materi;
        $materi->nidn = Auth::user()->dosen->nidn;
        $materi->kode_kelas = $request->kode_kelas;
        $materi->status = $request->status;
        $materi->file = $fileArray;
        $materi->save();

        return response()->json([
            'status' => 'success',
            'message' => 'Materi berhasil ditambahkan'
        ]);
    }

    public function uploadFile(Request $request)
    {

        $validator = Validator::make($request->all(), [
            'file' => 'required|array',
        ], [
            'required' => ':attribute tidak boleh kosong',
        ]);

        if ($validator->fails()) {
            return response()->json([
                'status' => 'error',
                'message' => $validator->errors()->all()
            ], 400);
        }
        if ($request->hasFile('file')) {
            foreach ($request->file('file') as $file) {
                $file->storeAs('public/materi', Str::random(10) . "_" . $file->getClientOriginalName());
            }

            return response()->json([
                'status' => 'success',
                'message' => 'File berhasil diupload'
            ]);
        }
    }
}
