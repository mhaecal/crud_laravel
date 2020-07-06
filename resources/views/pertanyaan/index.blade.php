@extends('layouts.template')

@section('content')
<div class="container mt-4">
	@if (session('msg'))
    <div class="alert alert-success">
        {{ session('msg') }}
    </div>
	@endif
	<a href="{{ url('pertanyaan/create') }}" class="btn btn-outline-dark btn-block btn-lg">+ Saya ingin bertanya</a>
	@if(count($pertanyaan) > 0)
	@foreach($pertanyaan as $p)
	<div class="card my-3">
		<div class="card-body">
			<h5 class="card-title text-dark font-weight-bold">{{ $p->judul }}</h5>
			<p class="card-text">{{ $p->isi }}</p>
			<div class="row">
				<div class="col-md-8">
					<a href="{{ url('pertanyaan/'.$p->id) }}" class="btn btn-dark btn-sm w-100">Lihat Detail Pertanyaan</a>
				</div>
				<div class="col-md-4">
					<a href="{{ url('jawaban/'.$p->id) }}" class="btn btn-outline-dark btn-sm w-100">Lihat Jawaban Saja</a>
				</div>
			</div>
		</div>
	</div>
	@endforeach

	@else
	<div class="card my-3">
		<div class="card-body">
			<p class="card-text text-center text-muted">Belum ada pertanyaan</p>
		</div>
	</div>
	@endif
</div>
@endsection