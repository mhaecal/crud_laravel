<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Jawaban;

class JawabanController extends Controller
{
    
	public function index($id) {
		$jawaban = Jawaban::getJawabanById($id);
		return view('jawaban.index', compact('jawaban', 'id'));
	}

	public function store($id, Request $request) {
		Jawaban::saveJawabanById($id, $request);
		return redirect('pertanyaan/'.$id)->with('msg', 'Jawaban berhasil ditambahkan!');
	}
 
}
