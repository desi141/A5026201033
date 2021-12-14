<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class MaskerController extends Controller
{
    public function index()
    {
        //DB::table('')->get();
    	// mengambil data dari table masker
    	//$masker = DB::table('masker')->get();
        $masker = DB::table('masker')->paginate(3) ;
    	// mengirim data masker ke view index
    	return view('masker.index',['masker' => $masker]);

    }

    // method untuk menampilkan view form tambah masker
public function tambah()
{

	// memanggil view tambah
	return view('masker.tambah');

}

// method untuk insert data ke table masker
public function store(Request $request)
{
	// insert data ke table masker
	DB::table('masker')->insert([
		'merkmasker' => $request->merkmasker,
		'stockmasker' => $request->stockmasker,
		'tersedia' => $request->tersedia
	]);
	// alihkan halaman ke halaman masker
	return redirect('/masker');

}

// method untuk edit data masker
public function edit($id)
{
	// mengambil data masker berdasarkan id yang dipilih
	$masker = DB::table('masker')->where('kodemasker',$id)->get();
	// passing data masker yang didapat ke view edit.blade.php
	return view('masker.edit',['masker' => $masker]);

}
// method untuk melihat detail data masker
    public function detail($id)
    {
        // mengambil data masker berdasarkan id yang dipilih
        $masker = DB::table('masker')->where('kodemasker', $id)->get();
        // passing data masker yang didapat ke view edit.blade.php
        return view('masker.detail', ['masker' => $masker]);
    }
// update data masker
public function update(Request $request)
{
	// update data masker
	DB::table('masker')->where('kodemasker',$request->id)->update([
		'merkmasker' => $request->merkmasker,
		'stockmasker' => $request->stockmasker,
		'tersedia' => $request->tersedia
	]);
	// alihkan halaman ke halaman masker
	return redirect('/masker');
}

// method untuk hapus data masker
public function hapus($id)
{
	// menghapus data masker berdasarkan id yang dipilih
	DB::table('masker')->where('kodemasker',$id)->delete();

	// alihkan halaman ke halaman masker
	return redirect('/masker');
}
public function cari(Request $request)
	{
		// menangkap data pencarian
		$cari = $request->cari;

    		// mengambil data dari table masker sesuai pencarian data
		$masker = DB::table('masker')
		->where('merkmasker','like',"%".$cari."%")
		->paginate();

    		// mengirim data masker ke view index
		return view('masker.index',['masker' => $masker]);

	}
}

