@extends('layouts.dashboard')
@section('main')
<div style="width: 80vw" class="container-fluid py-5 wow fadeInUp" data-wow-delay="0.1s">
	<div class="container">
		<div class="text-center mx-auto mb-5" style="max-width: 600px;">
			<h1 class="display-5 mb-0">Créer Catégorie</h1>
		</div>
		<div class="row g-5" >
			<div class="col-lg-12 wow slideInUp" data-wow-delay="0.3s">
				<div style="display: grid;place-content:center" class="bg-light rounded p-5 w-full ">
					<form action="{{ route('categories.store') }}" method="POST" style="width: 400px">
						@csrf
						<div class="row g-3">
							<div class="col-10">
								<input name="name" type="text" class="form-control border-0 px-4" placeholder="Nom de categorie" style="height: 55px;">
								<button class="btn btn-primary mt-4">Créer</button>
							</div>
							
						</div>
					</form>
				</div>
			</div>
			
		</div>
	</div>
</div>
	
	
@endsection