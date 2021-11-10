@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-10">
            <div class="card">
                <div class="card-header">{{ __('Dashboard') }}</div>

                <div class="card-body">
                    <div class="p-3">
                        <a class="btn btn-info" href="{{ route('add.product') }}" role="button">Add Product</a>
                        {{-- <button type="button" class="btn btn-info">Add Product</button> --}}
                    </div>
                    
                    {{-- @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    {{ __('You are logged in!') }} --}}
                    
                    <table class="table">
                        <thead>
                          <tr>
                            <th scope="col">#</th>
                            <th scope="col">Title</th>
                            <th scope="col">Price</th>
                            <th scope="col">discount</th>
                            <th scope="col">description</th>
                            <th scope="col">image</th>
                            <th scope="col">Status</th>
                          </tr>
                        </thead>
                        <tbody>

                          @foreach ($products as $product)
                          <tr>
                            <th scope="row">{{ $product->id }}</th>
                            <td>{{ $product->title }}</td>
                            <td>{{ $product->price }}</td>
                            <td>{{ $product->discount }}</td>
                            <td>{{ $product->description }}</td>
                            <td><img src="{{ $product->image }}" alt="Girl in a jacket" width="50" height="50">
                            </td>
                            <td>{{ $product->status }}</td>
                          </tr>
                          @endforeach
                          
                        </tbody>
                      </table>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
