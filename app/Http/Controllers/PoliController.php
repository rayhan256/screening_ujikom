<?php

namespace App\Http\Controllers;

use App\Models\Poli;
use Illuminate\Http\Request;

class PoliController extends Controller
{
    //
    public function index() {
        $poli = Poli::all();
        return view('poli.index', ['data' => $poli]);
    }

    public function add() {
        return view('poli.add');
    }

    public function post(Request $request) {
        $data = $request->all();
        Poli::create($data);
        return redirect()->back();
    }
}
