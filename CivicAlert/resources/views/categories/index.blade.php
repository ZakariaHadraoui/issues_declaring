@extends('layouts.dashboard')
@section('main')
@if(session('success'))
        <div class="alert alert-success p-3">
            {{ session('success') }}
        </div>
    @endif
<a href="/categories/create" class="btn btn-primary mb-2 mt-4">Create Category</a>
<div class="card">
	<div class="card-body">
	  <h5 class="card-title">Basic Table</h5>
	  <div class="table-responsive">
	   <table class="table">
		  <thead>
			<tr>
			  <th scope="col">#</th>
			  <th scope="col">Name</th>
			  <th scope="col">Actions</th>
			  <th scope="col"></th>
			</tr>
		  </thead>
		  <tbody>
			@foreach ($categs as $item)
			<tr>
				<th scope="row">{{$item->id}}</th>
				<td>{{$item->name}}</td>
				<td><a class="btn btn-primary" href="{{ route('categories.edit', $item->id) }}">Modifier</a></td>
                 <td><form action="{{ route('categories.destroy', $item->id) }}" method="POST">
					@csrf
					@method('DELETE')
					<button type="submit" class="btn btn-danger">Delete</button>
				</form></td>
			</tr>
				
			@endforeach
			
		  </tbody>
		</table>
	</div>
	</div>
  </div>	
	
@endsection