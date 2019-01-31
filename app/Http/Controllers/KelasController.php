<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

class KelasController extends Controller
{
    public function index()
    {
    	$data['result'] = \App\Kelas::all();
    	return view('kelas/index')->with($data);
    }
    public function create()
    {
    	return view('kelas/form');
    }
    public function store(Request $request)
    {
    	$rules = [
    		'nama_kelas' =>'required|max:100','jurusan' =>'required|max:100'
    	];
    	$this->validate($request, $rules);

    	$input = $request->all();
    	$status = \App\Kelas::create($input);
    	return redirect('/');
    	
    	if ($status) return redirect('/')->with('success','Data Berhasil Ditambah');
    else return redirect('/')->with('error','Data gagal Ditambah');
    }

    public function edit($id)
    {
    	$data['result'] = \App\Kelas::where('id_kelas', $id)->first();
    	return view('kelas/form')->with($data);
    }
    public function update(Request $request, $id)
    {
    	$rules = [
    		'nama_kelas' =>'required|max:100','jurusan' =>'required|max:100'
    	];
    	$this->validate($request, $rules);

    	$input = $request->all();
    	$result = \App\Kelas::where('id_kelas', $id)->first();
    	$status = $result->update($input);
    	
    	if ($status) return redirect('/')->with('success','Data Berhasil Diubah');
    else return redirect('/')->with('error','Data gagal diubah');
    }
    public function destroy(Request $request, $id)
    {
    	$result = \App\Kelas::where('id_kelas', $id)->first();
    	$status = $result->delete();
    	if ($status) return redirect('/')->with('success','Data Berhasil Dihapus');
    else return redirect('/')->with('error','Data gagal dihapus');
    }
}
