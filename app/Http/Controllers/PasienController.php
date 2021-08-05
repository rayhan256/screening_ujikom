<?php

namespace App\Http\Controllers;

use App\Models\Pasien;
use Illuminate\Http\Request;

class PasienController extends Controller
{
    //
    public function index() {
        $pasien = Pasien::all();
        return view('dashboard', ['data' => $pasien]);
    }

    public function add() {
        return view('add_pasien');
    }

    public function edit($id) {
        $pasien = Pasien::find($id);
        return view('edit_pasien', ['data' => $pasien]);
    }

    public function post(Request $request) {
        $data = $request->all();
        Pasien::create($data);
        return redirect('/');
    }

    public function updatePasien(Request $request) {
        $data = $request->all();
        $pasien = Pasien::find($data['id']);
        $pasien->update($data);
        return redirect('/');
    }

    public function destroy($id) {
        $pasien = Pasien::find($id);
        $pasien->delete();
        return redirect()->back();
    }
}
