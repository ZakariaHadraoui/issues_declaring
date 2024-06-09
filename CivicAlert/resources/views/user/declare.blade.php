@extends('layouts.app')
@section('content')
@if(session('success'))
        <div class="alert alert-success p-3">
            {{ session('success') }}
        </div>
    @endif

<div class="container-fluid py-5 wow fadeInUp" data-wow-delay="0.1s">
	<div class="container">
		<div class="text-center mx-auto mb-5" style="max-width: 600px;">
			<h5 class="text-primary text-uppercase" style="letter-spacing: 5px;">Déclarer probléme</h5>
		</div>
		<div class="row g-5">
			<div class="col-lg-7 wow slideInUp" data-wow-delay="0.3s">
				<div class="bg-light rounded p-5">
					<form method="POST" action="/postdec">
						@csrf
						<div class="row g-3">
							<div class="col-6">
								<input name="title" type="text" class="form-control border-0 px-4" placeholder="title of declaration" style="height: 55px;">
							</div>
							<div class="col-10">
								<textarea  placeholder="description de la déclaration" style="height: 500px" name="description" type="text" class="form-control  border-0 px-4" placeholder="description" style="height: 55px;">
								</textarea>
							</div>
							
							<div class="col-12">
								<button class="btn btn-primary w-100 py-3" type="submit">Confirmer</button>
							</div>
						</div>
					</form>
				</div>
			</div>
			<div class="col-lg-5 wow slideInUp" data-wow-delay="0.6s">
				<div class="bg-light rounded p-5">
					<div class="d-flex align-items-center mb-2">
						<i class="bi bi-geo-alt fs-1 text-primary me-3"></i>
						<div class="text-start">
							<h5 class="mb-1">Our Office</h5>
							<span>123 Street, New York, USA</span>
						</div>
					</div>
					<div class="d-flex align-items-center mb-2">
						<i class="bi bi-envelope-open fs-1 text-primary me-3"></i>
						<div class="text-start">
							<h5 class="mb-1">Email Us</h5>
							<span>info@example.com</span>
						</div>
					</div>
					<div class="d-flex align-items-center mb-4">
						<i class="bi bi-phone-vibrate fs-1 text-primary me-3"></i>
						<div class="text-start">
							<h5 class="mb-1">Call Us</h5>
							<span>+012 345 6789</span>
						</div>
					</div>
					<div>
						<iframe class="position-relative w-100"
							src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3001156.4288297426!2d-78.01371936852176!3d42.72876761954724!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x4ccc4bf0f123a5a9%3A0xddcfc6c1de189567!2sNew%20York%2C%20USA!5e0!3m2!1sen!2sbd!4v1603794290143!5m2!1sen!2sbd"
							frameborder="0" style="height: 230px; border:0;" allowfullscreen="" aria-hidden="false"
							tabindex="0"></iframe>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>
	
@endsection