<?php

namespace App\Http\Controllers;

use App\Models\Berobat;
use App\Models\Dokter;
use App\Models\Pasien;
use Carbon\Carbon;
use Illuminate\Http\Request;

class BerobatController extends Controller
{
    //
    public function index() {
        $berobat = Berobat::query()->with('pasien')->with(['dokter', 'dokter.poli'])->get();
        $now = Carbon::now();
        $data = [];
        foreach ($berobat as $v) {
            $bday = Carbon::parse($v->pasien->date);
            $data[] = [
                'id' => $v->id,
                'tr_id' => 'TR00'.$v->id,
                'pasien_id' => 'PS.00'.$v->pasien->id,
                'pasien_name' => $v->pasien->name,
                'usia' => $bday->diffInYears($now),
                'gender' => $v->pasien->gender,
                'keluhan' => $v->keluhan,
                'poli' => $v->dokter->poli->name,
                'dokter' => $v->dokter->name,
                'biaya' => $v->adm
            ]; 
        }
        // return response()->json(['data' => $data]);
        return view('berobat.index', ['data' => $data]);
    }

    public function add() {
     $pasien = Pasien::all();
     $dokter = Dokter::all();
     return view('berobat.add', ['pasien' => $pasien, 'dokter' => $dokter]);
    }

    public function post(Request $request) {
        $data = $request->all();
        $berobat = new Berobat();

        $berobat->pasien_id = $data['pasien_id'];
        $berobat->date = $data['year'].'-'.$data['month'].'-'.$data['day'];
        $berobat->dokter_id = $data['dokter_id'];
        $berobat->keluhan = $data['keluhan'];
        $berobat->adm = $data['adm'];

        $berobat->save();
        return redirect()->back();
    }

    public function edit($id) {
    $pasien = Pasien::all();
    $dokter = Dokter::all();
    $berobat = Berobat::find($id);
     return view('berobat.edit', ['dokter' => $dokter, 'pasien' => $pasien, 'data' => $berobat]);
    }

    public function updateBerobat(Request $request) {
        $data = $request->all();
        $berobat = Berobat::find($data['id']);
        $berobat->pasien_id = $data['pasien_id'];
        $berobat->date = $data['year'].'-'.$data['month'].'-'.$data['day'];
        $berobat->dokter_id = $data['dokter_id'];
        $berobat->keluhan = $data['keluhan'];
        $berobat->adm = $data['adm'];
        $berobat->save();
        return redirect('/berobat');
    }

    public function destroy($id) {
        $berobat = Berobat::find($id);
        $berobat->delete();
        return redirect()->back();
    }
}
