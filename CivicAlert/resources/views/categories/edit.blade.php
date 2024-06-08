@extends('layouts.dashboard')
@section('main')
<div class="card">
	<div class="card-body">
	<div class="card-title">Modifier Category</div>
	<hr>
	 <form method="POST" action="{{ route('categories.update', $category->id) }}">
		@csrf
		@method('PUT')

	<div class="form-group">
	 <label for="input-1">Name</label>
	 <input value="{{$category->name}}" name="name"  type="text" class="form-control" id="input-1" placeholder="{{$category->name}}">
	</div>
	
	
	
	<div class="form-group">
		<button type="submit" class="btn btn-primary" href="">	
			Confirmer
		</button>
   </div>
   </form>
  </div>
  </div>
	
@endsection