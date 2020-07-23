@extends("layouts.app")

@section("content")

<div class="container">
	{{ $articles->links()}}
	@foreach($articles as $article)
	<div class="row">
		<div class="card mb-2">
	<div class="card-body">

		<div class="col-sm-6">
		<h5>{{ $article->title }} </h5>
		<div class="col-sm-6">
		<img src="{{ asset('uploads/article/'. $article->image)}}" width="200px" height="200px" alt="image">
			
		</div>
		</div>

		
		<div class="col-sm-6">
			<p> {{ $article->body }} </p>
		</div>
		
		<div class="col-sm-6 text-muted small">
			{{ $article->created_at->diffForHumans() }}
		</div>

		

		<a class="btn btn-primary" href="{{ url("/articles/detail/$article->id")}}">View Detail &raquo</a>
		<a class="btn btn-danger" href=" {{url("/articles/delete/$article->id")}} ">Delete &raquo</a>
		<a class="btn btn-success" href=" {{url("/articles")}} ">Back to Home</a>
		<a class="btn btn-warning" href=" {{url("/articles/edit/$article->id")}} ">Edit</a>

		
	</div>
		</div>
		
	</div>


	@endforeach
</div>
@endsection