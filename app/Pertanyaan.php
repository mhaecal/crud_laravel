<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class Pertanyaan extends Model
{
   
	public static function getAll() {
		$pertanyaan = DB::table('pertanyaan')->get();
		return $pertanyaan;
	}

	public static function saveAll($request) {
		DB::table('pertanyaan')->insert([
			'judul' => $request->judul,
			'isi' => $request->isi,
			'created_at' =>  \Carbon\Carbon::now(),
      'updated_at' => \Carbon\Carbon::now()
		]);
	}

	public static function getById($id) {
		$pertanyaan = DB::table('pertanyaan')->where('id', $id)->first();
		return $pertanyaan;
	}

	public static function updateById($id, $request) {
		DB::table('pertanyaan')
			->where('id', $id)
			->update([
				'judul' => $request->judul,
				'isi' => $request->isi,
				'updated_at' => \Carbon\Carbon::now()
			]);
	}

	public static function deleteById($id) {
		DB::table('pertanyaan')
			->where('id', $id)
			->delete();
	}

}
