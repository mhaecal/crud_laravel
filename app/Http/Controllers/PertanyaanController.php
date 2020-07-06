<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Pertanyaan;
use App\Jawaban;

class PertanyaanController extends Controller
{
    
	public function index() {
		$pertanyaan = Pertanyaan::getAll();
		return view('pertanyaan.index', compact('pertanyaan'));
	}

	public function create() {
		return view('pertanyaan.create');
	}

	public function store(Request $request) {
		$pertanyaan = Pertanyaan::saveAll($request);
		return redirect('pertanyaan')->with('msg', 'Pertanyaan berhasil ditambahkan!');
	}

	public function show($id) {
		$pertanyaan = Pertanyaan::getById($id);
		$jawabanById = Jawaban::getJawabanById($id);
		return view('pertanyaan.show', compact('pertanyaan', 'jawabanById', 'id'));
	}

	public function edit($id) {
		$pertanyaan = Pertanyaan::getById($id);
		return view('pertanyaan.edit', compact('pertanyaan', 'id'));
	}

	public function update($id, Request $request) {
		Pertanyaan::updateById($id, $request);
		return redirect('pertanyaan/'.$id)->with('msg', 'Pertanyaan berhasil diedit!');
	}

	public function destroy($id) {
		$pertanyaan = Pertanyaan::deleteById($id);
		return redirect('pertanyaan')->with('msg', 'Pertanyaan berhasil dihapus!');
	}

}
