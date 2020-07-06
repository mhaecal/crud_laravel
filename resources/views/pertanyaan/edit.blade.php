@extends('layouts.template')

@section('content')
<div class="container mt-4">
	<h5 class="font-weight-bold">Edit Pertanyaan</h5>
	<div class="card">
	  <div class="card-body">
	  	<form action="{{ url('pertanyaan/'.$id) }}" method="post">
	  		@csrf
	  		@method('PUT')
		     <div class="form-group">
			    <label for="judul">Judul Pertanyaan</label>
			    <input type="text" class="form-control" value="{{ $pertanyaan->judul }}" name="judul" id="judul">
			 </div>
			 <div class="form-group">
			    <label for="isi">Isi Pertanyaan</label>
			    <textarea class="form-control" name="isi" id="isi" rows="3">{{ $pertanyaan->isi }}</textarea>
			 </div>
		     <input type="submit" value="Update" class="btn btn-dark">
	    </form>
	  </div>
	</div>
</div>
@endsection