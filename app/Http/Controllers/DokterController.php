<?php

namespace App\Http\Controllers;

use App\Models\Dokter;
use App\Models\Poli;
use Illuminate\Http\Request;

class DokterController extends Controller
{
    //
    public function index() {
        $dokter = Dokter::query()->with('poli')->get();
        // return response()->json(['data' => $dokter]);
        return view('dokter.index', ['data' => $dokter]);
    }

    public function add() {
        $poli = Poli::all();
        return view('dokter.add', ['poli' => $poli]);
    }

    public function post(Request $request) {
        $data = $request->all();
        Dokter::create($data);
        return redirect()->back();
    }
}
