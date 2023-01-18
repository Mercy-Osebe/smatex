@extends('layout.app')
@section('hero')

<section id="hero" class="hero d-flex flex-column justify-content-center align-items-center" data-aos="fade" data-aos-delay="1500">
  <div class="container">
    <div class="row justify-content-center">
      <div class="col-lg-6 text-center">
        <h2>This is <span>SMATEX</span> a one stop shop furniture store</h2>
        <p>Explore an exclusive range of office and home furniture from Kenya's Number 1 Furniture Store. Furniture palace offers them at best prices.</p>
        <a href="gallery.html" class="btn-get-started">Make a purchase.</a>
      </div>
    </div>
  </div>
</section><!-- End Hero Section -->


@endsection

@section('content')



<!-- ======= Gallery Section ======= -->
<section id="gallery" class="gallery">
  <div class="container-fluid">

    <div class="row gy-4 justify-content-center">
      <div class="col-xl-3 col-lg-4 col-md-6">
        <div class="gallery-item h-100">
          <img src="{{asset('img/gallery/gallery-1.jpg')}}" class="img-fluid" alt="">
          <div class="gallery-links d-flex align-items-center justify-content-center">
            <a href="assets/img/gallery/gallery-1.jpg" title="Gallery 1" class="glightbox preview-link"><i class="bi bi-arrows-angle-expand"></i></a>
            <a href="gallery-single.html" class="details-link"><i class="bi bi-link-45deg"></i></a>
          </div>
        </div>
      </div><!-- End Gallery Item -->



    </div>

  </div>
</section><!-- End Gallery Section -->
@endsection