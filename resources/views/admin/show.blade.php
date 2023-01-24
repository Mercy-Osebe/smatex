@extends("layouts.app")
@section('content')

<div class="container-fluid px-1 py-5 mx-auto">
    <div class="row d-flex justify-content-center">
        <div class="col-xl-7 col-lg-8 col-md-9 col-11 text-center">
            <h3>Welcome to the Admin section</h3>
            <p class="blue-text">Here you can add the items to your website<br>In this section you can be able to edit entrries and even delete them.</p>
            <div class="card">
                <h5 class="text-center mb-4">Enter the furniture details</h5>
                {{$item->id}}
                <div class="row justify-content-center">
                    <div class="form-group col-sm-6 flex-column d-flex"> <label class="form-control-label px-3" for="item_name">Furniture Name:<span class="text-danger"> *</span></label> {{$item->item_name}}</div>
                </div>
                <div class="row justify-content-center">
                    <div class="form-group col-sm-6 flex-column d-flex"> <label class="form-control-label px-3" for="price">Price:<span class="text-danger"> *</span></label> {{$item->price}} </div>
                </div>
                <div class="row justify-content-center">
                    <div class="form-group col-sm-6 flex-column d-flex"> <label class="form-control-label px-3" for="description">Description:</label> {{$item->description}} </div>
                </div>

                <div class="row justify-content-center">
                    <div class="form-group col-sm-6 flex-column d-flex"> <label class="form-control-label px-3" for="image_alt">Image Description:</label> {{$item->image_alt}} </div>
                </div>
                <div class="row justify-content-center">
                    <div class="form-group col-sm-6 flex-column d-flex"><label for="image" class="form-label">Upload Image:<span class="text-danger"> *</span></label><img src="{{URL::to('/') }}/images/{{$item->image}}" alt="">

                    </div>
                    <div class="row justify-content-around mt-3">

                        <div class="form-group col-sm-6">


                            <!-- Route::get('/post/{post}/comment/{comment}', function (Post $post, Comment $comment) {
                            //
                            })->name('comment.show');

                            echo route('comment.show', ['post' => 1, 'comment' => 3]);

                            // http://example.com/post/1/comment/3 -->


                            <button type="submit" class="btn-block btn-primary" name=submit><a href="{{route('admin.edit',['id'=>$item->id])}}">Update Item</a></button>

                        </div>


                        <div class="form-group col-sm-6">
                            <form action="{{url('/admin',$item->id)}}" method="post">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn-block btn-primary" name=submit>Delete Item</button>
                            </form>
                        </div>

                    </div>

                </div>
            </div>
        </div>
    </div>

    @endsection