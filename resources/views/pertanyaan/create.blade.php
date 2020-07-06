@extends('layouts.template')

@section('content')
<div class="container mt-4">
	<h5 class="font-weight-bold">Pertanyaan Baru</h5>
	<div class="card">
	  <div class="card-body">
	  	<form action="{{ url('pertanyaan') }}" method="post">
	  		@csrf
		     <div class="form-group">
			    <label for="judul">Judul Pertanyaan</label>
			    <input type="text" class="form-control" name="judul" id="judul">
			 </div>
			 <div class="form-group">
			    <label for="isi">Isi Pertanyaan</label>
			    <textarea class="form-control" name="isi" id="isi" rows="3"></textarea>
			 </div>
		     <input type="submit" value="Submit" class="btn btn-dark">
	    </form>
	  </div>
	</div>
</div>
@endsection