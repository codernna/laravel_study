@extends("layouts.app")

@section('content')

<div class="container">
	<form method="post">
			@csrf
		<div class="form-group">
		<label>Title</label>
		<input type="text" name="title" class="form-control">
		</div>
		
		<div class="form-group">
		<label>Body</label>
		<textarea type="text" name="body" class="form-control"></textarea>
		</div>

		<div class="form-group">
		<label>Category</label>
		<select class="form-control" name="category_id">
			@foreach ($categories as $category)
			<option value="{{ $category['id'] }} ">
				{{ $category['name'] }}
			</option>
			@endforeach
		</select>
		</div>
		
		<input class="btn btn-primary" type="submit" value="Add Article">

	</form>
</div>


@endsection