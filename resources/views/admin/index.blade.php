@extends('template.app')
@section('hero')

<section id="hero" class="hero d-flex flex-column justify-content-center align-items-center" data-aos="fade" data-aos-delay="1500">
  <div class="container">
    <div class="row justify-content-center">
      <div class="col-lg-6 text-center">
        <h2>This is <span>SMATEX Admin section</span></h2>
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
    @foreach($items as $item)
      <div class="col-xl-3 col-lg-4 col-md-6">
        <div class="gallery-item h-100">
          <div class="card text-center">
            <img src="{{ URL::to('/') }}/images/{{$item->image}}" class="card-img-top" alt="image">
            <div class="card-body">
              <h5 class="card-title" style="color: black;">{{$item->item_name}}</h5>
              <p class="card-text" style="color:black">{{$item->price}}</p>
              <a href="{{url('/admin',$item->id)}}" class="btn btn-primary">View details</a>
            </div>
          </div>
        </div>
      </div><!-- End Gallery Item -->
      @endforeach


    </div>
   

  </div>
</section><!-- End Gallery Section -->
@endsection