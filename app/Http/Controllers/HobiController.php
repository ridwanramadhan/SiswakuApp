<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Hobi;
use Session;

class HobiController extends Controller
{
    public function index() {
        
        $hobi_list = Hobi::all();  
        return view('hobi/index', compact('hobi_list'));
    }

    //halaman create
    public function create() {
        return view('hobi.create');
    }

    //simpan dalam request
    public function store(Request $request) {
        Hobi::create($request->all());
        // Flash input / alert
        Session::flash('flash_message', 'Hobi Berhasill Disimpan...');
        return redirect('hobi');
    }

    public function edit(Hobi $hobi) {
        return view('hobi.edit', compact('hobi'));
    }

    public function update($id, Request $request) {
    // public function update(Hobi $hobi, HobiRequest $request) {
        $hobi = Hobi::findOrFail($id);
        $hobi -> update ($request -> all());
        // Flash input / alert
        Session::flash('flash_message', 'Hobi Berhasill Diupdate...');
        return redirect ('hobi');
    }

    public function destroy($id){
    // public function destroy(Hobi $hobi) {
        $hobi = Hobi::findOrFail($id);
        $hobi -> delete();
        // Flash input / alert
        Session::flash('flash_message', 'Hobi Berhasill Dihapus...');
        Session::flash('penting', true);
        return redirect ('hobi');
    }
}
