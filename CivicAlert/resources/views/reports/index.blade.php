@extends('layouts.dashboard')
@section('main')
<div style="width: 70vw" class="row">
	<div class="col-12 col-lg-12">
	  <div class="card">
		<div class="card-header">Recent Order Tables
		 <div class="card-action">
			
			</div>
		</div>
		  <div class="table-responsive">
				<table class="table align-items-center table-flush table-borderless">
				 <thead>
				  <tr>
					<th>Title</th>
					<th>Description</th>
					<th>Latitude</th>
					<th>Longtitude</th>
					
					<th>Status</th>
					<th>Actions</th>
					<th></th>
					<th></th>
				  </tr>
				  </thead>
				  <tbody>
				  @foreach ($reports as $report)
				  <tr>
					<td>{{$report->title}}</td>
					  <td>{{$report->description}}</td>
					  <td>{{$report->Longitude}}</td>
					  <td>{{$report->latitude}}</td>
					  <td><a href="" class="btn btn-danger">{{$report->status}}</a></td>
					  <td><form action="{{ route('update-status', $report->id) }}" method="POST">
						@csrf
						@method('PUT')
						<input type="hidden" name="status" value="lu">
						<button type="submit" class="btn btn-success">Marquer Comme lu</button>
					  </form></td>
					  <td><a class="btn btn-primary" href="">Modifier</a></td>
					  <td><a class="btn btn-danger" href="">Supprimer</a></td>
				  </tr>
					  
				  @endforeach

				


				</tbody></table>
			  </div>
	  </div>
	</div>
   </div>
	
@endsection