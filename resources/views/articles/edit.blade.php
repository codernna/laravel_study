@extends("layouts.app")

@section('content')

<div class="container">
	<!--  @if ($errors->any())
        <div class="alert alert-danger">
            <strong>Whoops!</strong> There were some problems with your input.<br><br>
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif -->
	<form method="POST" >
			@csrf
			
		<div class="form-group">
				<div class="form-group">
		<label>Title</label>
		<input type="text" value="{{$article->title}}"  name="title"  class="form-control" > 
		</div>
		
		</div>
		
		<div class="form-group">
		<label>Body</label>
		<input value="{{$article->body}}" type="text"  name="body"  class="form-control" >
		</div>

		<div class="form-group">
		<label>Category</label>
		<select class="form-control" name="category_id">
			
			
			<option value="">
				
			</option>
	
			
			
		</select>
		</div>
		
		<input class="btn btn-primary" type="submit" value="Update Article">

	</form>
</div>


@endsection