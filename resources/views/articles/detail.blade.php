@extends("layouts.app")

@section("content")

<div class="container">
	
	<div class="row">
		<div class="card mb-2">
	<div class="card-body">
		<div class="col-sm-6">
		<h5>{{ $article->title }} </h5>
		</div>
		
		<div class="col-sm-6">
			<p> {{ $article->body }} </p>
		</div>
		
		<div class="col-sm-6 text-muted small">
			{{ $article->created_at->diffForHumans() }}
		</div>

		
		<a class="btn btn-danger" href=" {{url("/articles/delete/$article->id")}} ">Delete &raquo</a>
		<a class="btn btn-success" href=" {{url("/articles")}} ">Back to Home</a>


		
	</div>
		</div>
		
	</div>

	

	
</div>
@endsection