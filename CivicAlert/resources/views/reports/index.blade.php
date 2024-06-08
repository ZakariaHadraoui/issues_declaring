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
					<th>Date</th>
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
					  <td>{{$report->Longtitude}}</td>
					  <td>{{$report->latitude}}</td>
					  <td>{{$report->status}}</td>
					  <td><a class="btn btn-success" href="">Marquer Comme lu</a></td>
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