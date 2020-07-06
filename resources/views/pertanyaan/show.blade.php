@extends('layouts.template')

@section('content')
<div class="container mt-4">

	@if (session('msg'))
    <div class="alert alert-success">
        {{ session('msg') }}
    </div>
	@endif

	<h5>Pertanyaan #{{ $id }}</h5>
	<a href="{{ url('pertanyaan/'.$id.'/edit') }}" class="btn badge badge-dark">Edit</a>
	<form action="{{ url('pertanyaan/'.$id) }}" method="post" class="d-inline">
		@csrf
		@method('DELETE')
		<button type="submit" class="btn badge badge-danger">Hapus</button>
	</form>

	<div class="card my-3">
		<div class="card-body">
			<h3 class="card-title font-weight-bold">{{ $pertanyaan->judul }}</h3>
			<p class="card-text">{{ $pertanyaan->isi }}</p>
			<small class="text-muted">Posted at {{ $pertanyaan->created_at }} | Updated at {{ $pertanyaan->updated_at }}</small>
		</div>
	</div>
	
	<h5>Jawaban :</h5>
	@if(count($jawabanById) > 0)
	@foreach($jawabanById as $j)
	<div class="card my-2">
		<div class="card-body">
			<p class="card-text">{{ $j->isi }}</p>
		</div>
	</div>
	@endforeach

	@else
	<div class="card my-2">
		<div class="card-body">
			<p class="card-text text-muted">Belum ada jawaban</p>
		</div>
	</div>
	@endif

	<div class="card mt-2">
		<div class="card-body">
			<form action="{{ url('jawaban/'.$id) }}" method="post">
	  		@csrf
				 <div class="form-group">
				    <textarea class="form-control" name="jawaban" id="jawaban" rows="3" placeholder="Masukkan jawaban baru.."></textarea>
				 </div>
		     <input type="submit" value="Submit" class="btn btn-dark">
	    </form>
		</div>
	</div>

</div>
@endsection