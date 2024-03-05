<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\siswa;

class SiswaController extends Controller
{
    //
    public function index(){
        $data['siswas'] = siswa::all();
        return view('siswa', $data);
    }

    public function add(){
        $data['siswas'] = siswa::All();
        return view('formsiswa', $data);
    }

    public function create(Request $request){
        $siswa = siswa::create([
            'nis' => $request->nis,
            'nama' => $request->nama,
            'nohp' => $request->nohp,
            'alamat' => $request->alamat,
            'kelas' => $request->kelas,
        ]);

        if ($siswa) {
            return redirect('/siswa');
        }

        return redirect()->back();
    }

    function delete(Request $request){
        siswa::where('nis', $request->nis)->delete();
        return redirect('siswa');
        }

    function edit(Request $request){
        $data['siswa'] = siswa::where('nis', $request->nis)->first();
        return view('updatesiswa', $data);
    }

    function update(Request $req){
        siswa::where('nis', $req->nis)->update([
            'nis'=>$req->nis,
            'nama'=>$req->nama,
            'nohp'=>$req->nohp,
            'alamat'=>$req->alamat,
            'kelas'=>$req->kelas,
        ]);
        return redirect('siswa');
    }
}
