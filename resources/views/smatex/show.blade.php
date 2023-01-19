@extends('template.app')
@section('content')

<h1 style="color:black;">Smatex detailed View</h1>
<?php echo "hello" ?>
<div class="container-fluid px-1 py-5 mx-auto">
    <div class="row d-flex justify-content-center">
        <div class="col-xl-7 col-lg-8 col-md-9 col-11 text-center">
            <h3>Welcome to the show item section</h3>
            <p class="blue-text">Here you can see the details of your item<br>In this section you can be able to make a purchase or go back gto the index page</p>
            <div class="card">
                <div class="row">
                    <div class="col-4" style="color:black">
                        <img src="{{ URL::to('/') }}/images/{{$item->image}}" class="img-fluid" alt="image">
                    </div>
                    <div class="col-8" style="background-color: cyan;">
                        <h5 class="text-center mb-4" style="color:black">The furniture details</h5>
                        <div class="mb-3" style="color:black">
                            <label for="item_name" class="form-label">Item Name:</label>
                            <div>
                            <h1>{{$item->item_name}}</h1>
                            </div>
                        </div>
                        <div class="mb-3" style="color:black">
                            <label for="price" class="form-label">Price:</label>
                            <div>
                            <h3>{{$item->price}}</h3>
                            </div>
                        </div>
                        <div class="mb-3" style="color:black">
                            <label for="description" class="form-label">Description:</label>
                            <div>
                            {{$item->description}}
                            </div>
                        </div>
                        <div class="row justify-content-around mt-3">
                            <div class="form-group col-sm-6"> <button type="submit" class="btn-block btn-primary" name=submit><a href="/cart">Buy Item</a></button> </div>
                            <div class="form-group col-sm-6"> <button type="submit" class="btn-block btn-primary" name=submit><a href="{{url('smatex')}}">Cancel</a></button> </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
</div>


@endsection