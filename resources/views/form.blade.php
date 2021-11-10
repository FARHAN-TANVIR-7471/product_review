@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-10">
            <div class="card">
                <div class="card-header">{{ __('Form') }}</div>

                <div class="card-body">
                    <div class="p-3">
                        <a class="btn btn-info" href="{{ route('home') }}" role="button">Back</a>
                    </div>

                    @if(Session::has('message'))
                        <p class="alert {{ Session::get('alert-class', 'alert-info') }}">{{ Session::get('message') }}</p>
                    @endif
                    
                    <form method="POST" action="{{ route('create.product') }}" enctype="multipart/form-data">
                        {{ csrf_field() }}
                        <div class="form-group">
                            <label for="exampleInputEmail1">Title</label>
                            <input type="input" class="form-control" id="exampleInputEmail1" name="title" placeholder="Title">
                            
                        </div>
                        <div class="form-group">
                            <label for="exampleInputPassword1">Price</label>
                            <input type="number" class="form-control" name="price" placeholder="Price">
                            
                        </div>
                        <div class="form-group">
                            <label for="exampleInputEmail1">Discount</label>
                            <input type="number" class="form-control" id="Discount" name="discount" placeholder="Discount">
                        </div>
                        <div class="form-group">
                            <label for="exampleInputPassword1">image</label>
                            <input type="file" class="form-control" name="image" placeholder="image-link">
                            
                        </div>
                        <div class="form-group">
                            <label for="exampleInputEmail1">Status</label>
                            <input type="input" class="form-control" name="status" placeholder="Status">
                            
                        </div>
                        <div class="form-group">
                            <label for="exampleInputPassword1">description</label>
                            <input type="text" class="form-control" name="description" placeholder="description">
                        </div>
                        <button type="submit" class="btn btn-primary">Submit</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
