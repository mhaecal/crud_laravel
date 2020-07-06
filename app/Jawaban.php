<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class Jawaban extends Model
{
	public static function getJawaban() {
		$jawaban = DB::table('jawaban')->get();
		return $jawaban;
	}
 
	public static function saveJawabanById($id, $request) {
		DB::table('jawaban')->insert([
			'pertanyaan_id' => $id,
			'isi' => $request->jawaban
		]);
	}

	public static function getJawabanById($id) {
		$jawaban = DB::table('jawaban')->where('pertanyaan_id', $id)->get();
		return $jawaban;
	} 

}
