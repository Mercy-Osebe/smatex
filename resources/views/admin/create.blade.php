@extends("layouts.app")
@section('content')

<div class="container-fluid px-1 py-5 mx-auto">
    <div class="row d-flex justify-content-center">
        <div class="col-xl-7 col-lg-8 col-md-9 col-11 text-center">
            <h3>Welcome to the Admin section</h3>
            <p class="blue-text">Here you can add the items to your website<br>In this section you can be able to edit entrries and even delete them.</p>
            <div class="card">
                <h5 class="text-center mb-4">Enter the furniture details</h5>

                <form class="form-card" enctype="multipart/form-data" method="post" action="{{url('admin/create')}}">
                    @csrf
                    <div class="row justify-content-center">
                        <div class="form-group col-sm-6 flex-column d-flex"> <label class="form-control-label px-3" for="item_name">Furniture Name:<span class="text-danger"> *</span></label> <input type="text" id="item_name" name="item_name"> </div>
                    </div>
                    <div class="row justify-content-center">
                        <div class="form-group col-sm-6 flex-column d-flex"> <label class="form-control-label px-3" for="price">Price:<span class="text-danger"> *</span></label> <input type="number" id="price" name="price"> </div>
                    </div>
                    <div class="row justify-content-center">
                        <div class="form-group col-sm-6 flex-column d-flex"> <label class="form-control-label px-3" for="description">Description:</label> <textarea name="description" id="" cols="30" rows="10"></textarea> </div>
                    </div>
                    
                    <div class="row justify-content-center">
                        <div class="form-group col-sm-6 flex-column d-flex"> <label class="form-control-label px-3" for="image_alt">Image Description:</label> <input type="text" name="image_alt" id="image_alt"> </div>
                    </div>
                    <div class="row justify-content-center">
                        <div class="form-group col-sm-6 flex-column d-flex"><label for="image" class="form-label">Upload Image:<span class="text-danger"> *</span></label><input class="form-control" type="file" id="image" name="image" multiple></div>
                    </div>
                    <div class="row justify-content-center mt-3">
                        <div class="form-group col-sm-6"> <button type="submit" class="btn-block btn-primary" name=submit>Add Item</button> </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>

@endsection