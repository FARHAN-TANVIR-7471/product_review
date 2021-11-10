<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

    <title>Review</title>
  </head>
  <body>
    <nav class="navbar navbar-light bg-light justify-content-between">
        <a href="{{ route('product.list') }}" class="navbar-brand">Navbar</a>
        @if (Route::has('login'))
                <div class="hidden fixed top-0 right-0 px-6 py-4 sm:block">
                    @auth
                        <a href="{{ url('/home') }}" class="text-sm text-gray-700 dark:text-gray-500 underline">Home</a>
                    @else
                        <a href="{{ route('login') }}" class="text-sm text-gray-700 dark:text-gray-500 underline">Log in</a>

                        @if (Route::has('register'))
                            <a href="{{ route('register') }}" class="ml-4 text-sm text-gray-700 dark:text-gray-500 underline">Register</a>
                        @endif
                    @endauth
                </div>
            @endif
    </nav>
    <div class="container">
        <div class="row m-5">
            <div class="col-md-6">
                <div class="card" style="width: 25rem;">
                    <img class="card-img-top" src="{{ $product->image }}" height="280" alt="Card image cap">
                    <div class="card-body">
                      <h5 class="card-title">{{ $product->title }}</h5>
                      <h5 class="card-title">Price: {{ $product->discount }}</h5>
                      <p class="card-title">Price: {{ $product->price }}</p>
                      <p class="card-text">{{ $product->description }}</p>
                    </div>
                </div>
            </div>

            <div class="col-md-6">
                <div>
                    @if(Session::has('message'))
                        <p class="alert {{ Session::get('alert-class', 'alert-info') }}">{{ Session::get('message') }}</p>
                    @endif
                    <form method="POST" action="{{ route('create.review') }}" enctype="multipart/form-data">
                        {{ csrf_field() }}
                        <input type="hidden" class="form-control" name="product_id" value="{{ $product->id }}">
                        <div class="form-group">
                            <label for="exampleInputPassword1">Rating</label>
                            <fieldset class="rating"> 
                                <input type="radio" id="star5" name="rating" value="5" /><label class="full" for="star5" title="Awesome - 5 stars"></label> 
                                <input type="radio" id="star4half" name="rating" value="4" /><label class="half" for="star4half" title="Pretty good - 4 stars"></label> 
                                <input type="radio" id="star4" name="rating" value="3" /><label class="full" for="star4" title="Pretty good - 3 stars"></label> 
                                <input type="radio" id="star3half" name="rating" value="2" /><label class="half" for="star3half" title="Meh - 2 stars"></label> 
                                <input type="radio" id="star3" name="rating" value="1" /><label class="full" for="star3" title="Meh - 1 stars"></label> 
                                
                            </fieldset>
                    
                        </div>
                        <div class="form-group">
                            <label for="exampleInputPassword1">Review</label>
                            <textarea ows="4" class="form-control" name="review" placeholder="description"></textarea>
                        </div>
                        <button type="submit" class="btn btn-primary">Submit</button>
                    </form>
                </div>

                <div class="mt-5">
                    @foreach ($product->review as $review)
                        <p>{{ $review->star }}* - {{ $review->review }}</p>
                        {{-- <p>{{ $review->review }}</p> --}}
                    @endforeach
                </div>
                
            </div>
            
        </div>
      </div>
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
  </body>
</html>