<x-guest-layout>

    <!-- home section -->
<section id="home" class="parallax-section">
	<div class="container">
		<div class="row">
			<div class="col-md-12 col-sm-12">
				<h1>Table Reservation</h1>
				<h2>CLEAN &amp; SIMPLE DESIGN</h2>
			
			</div>
		</div>
	</div>
</section>


<!-- gallery section -->
<section id="gallery" class="parallax-section">
	<div class="container">
		<div class="row">
			<div class="col-md-offset-2 col-md-8 col-sm-12 text-center">
				<h1 class="heading">Food Gallery</h1>
				<hr>
			</div>
			<div class="col-md-4 col-sm-4 wow fadeInUp" data-wow-delay="0.3s">
				<a href="{{ asset('zendo_assets/images/gallery-img1.jpg') }}" data-lightbox-gallery="zenda-gallery"><img src="{{ asset('zendo_assets/images/gallery-img1.jpg') }}" alt="gallery img"></a>
				<div>
					<h3>Lemon-Rosemary Prawn</h3>
					<span>Seafood / Shrimp / Lemon</span>
				</div>
				<a href="{{ asset('zendo_assets/images/gallery-img2.jpg') }}" data-lightbox-gallery="zenda-gallery"><img src="{{ asset('zendo_assets/images/gallery-img2.jpg') }}" alt="gallery img"></a>
				<div>
					<h3>Lemon-Rosemary Vegetables</h3>
					<span>Tomato / Rosemary / Lemon</span>
				</div>
			</div>
			<div class="col-md-4 col-sm-4 wow fadeInUp" data-wow-delay="0.6s">
				<a href="{{ asset('zendo_assets/images/gallery-img3.jpg') }}" data-lightbox-gallery="zenda-gallery"><img src="{{ asset('zendo_assets/images/gallery-img3.jpg') }}" alt="gallery img"></a>
				<div>
					<h3>Lemon-Rosemary Bakery</h3>
					<span>Bread / Rosemary / Orange</span>
				</div>
			</div>
			<div class="col-md-4 col-sm-4 wow fadeInUp" data-wow-delay="0.9s">
				<a href="{{ asset('zendo_assets/images/gallery-img4.jpg') }}" data-lightbox-gallery="zenda-gallery"><img src="{{ asset('zendo_assets/images/gallery-img4.jpg') }}" alt="gallery img"></a>
				<div>
					<h3>Lemon-Rosemary Salad</h3>
					<span>Chicken / Rosemary / Green</span>
				</div>
				<a href="{{ asset('zendo_assets/images/gallery-img5.jpg') }}" data-lightbox-gallery="zenda-gallery"><img src="{{ asset('zendo_assets/images/gallery-img5.jpg') }}" alt="gallery img"></a>
				<div>
					<h3>Lemon-Rosemary Pizza</h3>
					<span>Pasta / Rosemary / Green</span>
				</div>
			</div>
		</div>
	</div>
</section>


<!-- contact section -->
<section id="contact" class="parallax-section">
	<div class="container">
		<div class="row">
			<div class="col-md-offset-1 col-md-10 col-sm-12 text-center">
				<h1 class="heading">Contact Us</h1>
				<hr>
			</div>
			<div class="col-md-offset-1 col-md-10 col-sm-12 wow fadeIn" data-wow-delay="0.9s">
                @if(Session::has('success'))
                    <div class="alert alert-secondary ml-4 mr-4">
                    {{ Session::get('success') }}
                    </div>
                @endif
				<form action="{{ route('save.contact') }}" method="POST">
                    @csrf
					<div class="col-md-6 col-sm-6">
						<input name="name" type="text" class="form-control" id="name" placeholder="Name">
                        @error('name')
                            <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                            </span>
                        @enderror
				  </div>
					<div class="col-md-6 col-sm-6">
						<input name="email" type="email" class="form-control" id="email" placeholder="Email">
                        @error('email')
                            <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                            </span>
                        @enderror
				  </div>
					<div class="col-md-12 col-sm-12">
						<textarea name="message" rows="8" class="form-control" id="message" placeholder="Message"></textarea>
                        @error('message')
                            <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                            </span>
                        @enderror
					</div>
					<div class="col-md-offset-3 col-md-6 col-sm-offset-3 col-sm-6">
						<input name="submit" type="submit" class="form-control" id="submit" value="make a reservation">
					</div>
				</form>
			</div>
			<div class="col-md-2 col-sm-1"></div>
		</div>
	</div>
</section>

</x-guest-layout>
