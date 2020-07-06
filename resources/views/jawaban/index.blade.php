@extends('layouts.template')

@section('content')
<div class="container mt-4">
	@if (session('msg'))
    <div class="alert alert-success">
        {{ session('msg') }}
    </div>
	@endif
	<h3>Pertanyaan #{{ $id }}</h3>

	<h5 class="mt-3">Jawaban:</h5>
	@if(count($jawaban) > 0)
	@foreach($jawaban as $j)
	<div class="card my-2">
		<div class="card-body">
			<p class="card-text">{{ $j->isi }}</p>
		</div>
	</div>
	@endforeach
	@else
	<div class="card my-2">
		<div class="card-body">
			<p class="card-text">Belum ada jawaban</p>
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