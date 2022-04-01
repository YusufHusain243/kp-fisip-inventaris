<?php

namespace App\Http\Controllers;

use App\Models\Aset;
use App\Models\Ruangan;
use Illuminate\Http\Request;

class KelolaAsetController extends Controller
{
    public function lihatDaftarAset(){
        $ruangan = Ruangan::all();
        $aset = Aset::all();
        return view('KelolaAset.aset',[
            "title" => "Kelola Aset",
            'aset' => $aset,
            'ruangan' => $ruangan
        ]);
    }

    public function tambah(Request $request){
        $request->validate([
            'id_ruangan' => 'required',
            'nama_barang' => 'required',
            'merk' => 'required',
            'tahun' => 'required',
            'jumlah' => 'required',
            'kondisi' => 'required',
            'keterangan' => 'required',
            'status' => 'required'
        ]);
        $data = $request->all();
        Aset::create($data);
        toast('Data berhasil ditambahkan!','success');
        return redirect('/menu-aset');
    }

    public function edit(Request $request, $id){
        $request->validate([
            'id_ruangan' => 'required',
            'nama_barang' => 'required',
            'merk' => 'required',
            'tahun' => 'required',
            'jumlah' => 'required',
            'kondisi' => 'required',
            'keterangan' => 'required',
            'status' => 'required'
        ]);

        $att = $request->all();
        $item =  Aset::findOrFail($id);
        $item->update($att);
        toast('Data berhasil diedit!','success');
        return redirect('/menu-aset');
    }

    public function hapus($id){
        $item = Aset::findOrFail($id);
        $item->delete();

        toast('Data berhasil dihapus!','success');
        return redirect('/menu-aset');
    }
}
