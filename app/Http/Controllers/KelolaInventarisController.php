<?php

namespace App\Http\Controllers;

use App\Models\Ruangan;
use App\Models\Aset;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Http\Requests\StoreRuanganRequest;
use App\Http\Requests\UpdateRuanganRequest;


class KelolaInventarisController extends Controller
{
    public function lihatDaftarRuangan(){
        $ruangan = Ruangan::all();
        return view('admin.kelola_ruangan.ruangan',[
            "title" => "Kelola Inventaris",
            'ruangan' => $ruangan
        ]);
    }

    public function tambahRuangan(Request $request){
        $request->validate([
            'nama_ruangan' => 'required',
            'keterangan' => 'required',
            'status' => 'required'
        ]);
        // $ruangan = Ruangan::get('nama_ruangan')->where('nama_ruangan', $request['nama_ruangan']);
        $ruangan = DB::table('ruangans')->where('nama_ruangan', $request['nama_ruangan'])->first();
        if($ruangan){
            alert()->warning('Data sudah ada!');
            return redirect('/menu-inventaris');
        } else{
            $data = $request->all();
            Ruangan::create($data);
            toast('Data berhasil ditambahkan!','success');
            return redirect('/menu-inventaris');
        }
    }

    public function editRuangan(Request $request, $id){
        $request->validate([
            'nama_ruangan' => 'required',
            'keterangan' => 'required',
            'status' => 'required',
        ]);

        $att = $request->all();
        $item =  Ruangan::findOrFail($id);
        $item->update($att);
        toast('Data berhasil diedit!','success');
        return redirect('/menu-inventaris');
    }

    public function hapusRuangan($id){
        $item = Ruangan::findOrFail($id);
        $item->delete();

        toast('Data berhasil dihapus!','success');
        return redirect('/menu-inventaris');
    }

    public function lihatDaftarAset($id){
        // $ruangan = Ruangan::all();
        // $aset = Aset::findOrFail($id);
        // return view('KelolaAset.aset',[
        //     "title" => "Kelola Aset",
        //     'aset' => $aset,
        //     // 'ruangan' => $ruangan
        // ]);
        // echo($id);
        return view('admin.kelola_aset.aset', [
            "title" => "Kelola Aset"
        ]);
    }
}
