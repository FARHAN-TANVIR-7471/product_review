@include('/admin/partials/header')
@include('/admin/partials/nav')
@include('/admin/partials/sidebar')

<div id="layoutSidenav_content">
<main>
    <div class="container-fluid">
        <h1 class="mt-4">Dashboard</h1>
        <div class="card" id="inputfild">
            <div class="card-header"><i class="fas fa-table mr-1"></i>Update Product</div>
            <div class="card-body">
                
                <form action="/productupdate" method="post" enctype="multipart/form-data">
                    @csrf
                    <input type="hidden" name="id" value="{{$results->data->id}}">
                    <div class="form-row">
                        <div class="form-group col-md-4">
                            <label for="exampleFormControlInput1">Product Brand: </label>
                            <input type="text" name="brand" class="form-control" placeholder="Product Name" value="{{$results->data->name}}">
                        </div>

                        <div class="form-group col-md-4">
                            {{csrf_field()}}
                          <label for="exampleFormControlSelect1">Product Type</label>

                            <select name="product_type_id" class="form-control" id="exampleFormControlSelect1">
                                <option value="1">Print</option>
                                <option value="2">Yard Fabtics</option>
                                <option value="3">3 Pieces</option>
                                <option value="4">Lungi</option>
                                <option value="5">Sale</option>             
                            </select>
                        </div>
                        <div class="form-group col-md-4">
                            <label for="exampleFormControlInput1">Price: </label>
                            {{csrf_field()}}
                            <input type="text" name="price" class="form-control" id="exampleFormControlInput1" value="{{$results->data->price}}">
                        </div>
                    </div>

                    <div class="form-row">
                        <div class="form-group col-md-4">
                            <label for="exampleFormControlInput1">Cost Price: </label>
                            {{csrf_field()}}
                            <input type="text" name="costprice" class="form-control" id="exampleFormControlInput1" value="{{$results->data->cost_price}}">
                        </div>

                        <div class="form-group col-md-4">
                            <label for="exampleFormControlTextarea1">Discount</label>
                            {{csrf_field()}}
                            <input type="number" name="discount" class="form-control" id="exampleFormControlInput1" placeholder="Product Discount in %" value="{{$results->data->discount}}">
                        </div>
                    </div>

                    <hr>

                    <div class="form-row">                            
                        <div class="form-group col-md-3">
                            <label for="exampleFormControlInput1">Product Color: </label>
                            {{csrf_field()}}
                            <input type="text" name="colorone" class="form-control" id="exampleFormControlInput1" value="{{$results->data->color}}">
                        </div>

                        <div class="form-group col-md-3" {{ $errors->has('image') ? 'has-error' : '' }}>
                            <label for="image">Image : </label>
                            <input type="file" name="image" id="image" class="form-control" value="{{$results->data->image}}">
                            <span class="text-danger"> {{ $errors->first('image') }}</span>
                        </div>

                        <div class="form-group col-md-3">
                            <label for="exampleFormControlInput1">Quantity</label>
                            {{csrf_field()}}
                            <input type="number" name="qualityone" class="form-control" id="exampleFormControlInput1" value="{{$results->data->number}}">
                        </div>

                        <div class="form-group col-md-3">
                            <label for="exampleFormControlInput1">SKU </label>
                            {{csrf_field()}}
                            <input type="text" name="skuone" class="form-control" id="exampleFormControlInput1"value="{{$results->data->sku}}">
                        </div>
                    </div>

                    <div class="form-row">                            
                        <div class="form-group col-md-3">
                            <label for="exampleFormControlInput1">Product Color: </label>
                            {{csrf_field()}}
                            <input type="text" name="colortwo" class="form-control" id="exampleFormControlInput1" value="{{$results->data->color_2}}">
                        </div>

                        <div class="form-group col-md-3" {{ $errors->has('image') ? 'has-error' : '' }}>
                            <label for="image">Image : </label>
                            <input type="file" name="imagetwo" id="image" class="form-control" value="{{$results->data->image_2}}">
                            <span class="text-danger"> {{ $errors->first('image') }}</span>
                        </div>

                        <div class="form-group col-md-3">
                            <label for="exampleFormControlInput1">Quantity</label>
                            {{csrf_field()}}
                            <input type="number" name="qualitytwo" class="form-control" id="exampleFormControlInput1" value="{{$results->data->number_1}}">
                        </div>

                        <div class="form-group col-md-3">
                            <label for="exampleFormControlInput1">SKU </label>
                            {{csrf_field()}}
                            <input type="text" name="skutwo" class="form-control" id="exampleFormControlInput1"value="{{$results->data->sku_1}}">
                        </div>
                    </div>

                    <div class="form-row">                            
                        <div class="form-group col-md-3">
                            <label for="exampleFormControlInput1">Product Color: </label>
                            {{csrf_field()}}
                            <input type="text" name="colorthree" class="form-control" id="exampleFormControlInput1" value="{{$results->data->color_3}}">
                        </div>

                        <div class="form-group col-md-3" {{ $errors->has('image') ? 'has-error' : '' }}>
                            <label for="image">Image : </label>
                            <input type="file" name="imagethree" id="image" class="form-control" value="{{$results->data->image_3}}">
                            <span class="text-danger"> {{ $errors->first('image') }}</span>
                        </div>

                        <div class="form-group col-md-3">
                            <label for="exampleFormControlInput1">Quantity</label>
                            {{csrf_field()}}
                            <input type="number" name="qualitythree" class="form-control" id="exampleFormControlInput1" value="{{$results->data->number_2}}">
                        </div>

                        <div class="form-group col-md-3">
                            <label for="exampleFormControlInput1">SKU </label>
                            {{csrf_field()}}
                            <input type="text" name="skuthree" class="form-control" id="exampleFormControlInput1" value="{{$results->data->sku_2}}">
                        </div>
                    </div>

                    <div class="form-row">                            
                        <div class="form-group col-md-3">
                            <label for="exampleFormControlInput1">Product Color: </label>
                            {{csrf_field()}}
                            <input type="text" name="colorfour" class="form-control" id="exampleFormControlInput1" value="{{$results->data->color_4}}">
                        </div>

                        <div class="form-group col-md-3" {{ $errors->has('image') ? 'has-error' : '' }}>
                            <label for="image">Image : </label>
                            <input type="file" name="imagefour" id="image" class="form-control" value="{{$results->data->color}}">
                            <span class="text-danger"> {{ $errors->first('image') }}</span>
                        </div>

                        <div class="form-group col-md-3">
                            <label for="exampleFormControlInput1">Quantity</label>
                            {{csrf_field()}}
                            <input type="number" name="qualityfour" class="form-control" id="exampleFormControlInput1" value="{{$results->data->number_3}}">
                        </div>

                        <div class="form-group col-md-3">
                            <label for="exampleFormControlInput1">SKU </label>
                            {{csrf_field()}}
                            <input type="text" name="skufour" class="form-control" id="exampleFormControlInput1"value="{{$results->data->sku_3}}">
                        </div>
                    </div>

                    <div class="form-row">                            
                        <div class="form-group col-md-3">
                            <label for="exampleFormControlInput1">Product Color: </label>
                            {{csrf_field()}}
                            <input type="text" name="colorfive" class="form-control" id="exampleFormControlInput1" value="{{$results->data->color_5}}">
                        </div>

                        <div class="form-group col-md-3" {{ $errors->has('image') ? 'has-error' : '' }}>
                            <label for="image">Image : </label>
                            <input type="file" name="imagefive" id="image" class="form-control">
                            <span class="text-danger"> {{ $errors->first('image') }}</span>
                        </div>

                        <div class="form-group col-md-3">
                            <label for="exampleFormControlInput1">Quantity</label>
                            {{csrf_field()}}
                            <input type="number" name="qualityfive" class="form-control" id="exampleFormControlInput1" value="{{$results->data->number_4}}">
                        </div>

                        <div class="form-group col-md-3">
                            <label for="exampleFormControlInput1">SKU </label>
                            {{csrf_field()}}
                            <input type="text" name="skufive" class="form-control" id="exampleFormControlInput1"value="{{$results->data->sku_4}}">
                        </div>
                    </div>

                    <hr>

                    <div class="form-row">
                        <div class="form-group col-md-12">
                            <label for="exampleFormControlInput1">Description: </label>
                            {{csrf_field()}}
                            <!-- <input type="text" name="season" class="form-control" id="exampleFormControlInput1" placeholder="Season"> -->
                            <textarea name="description" class="form-control" id="exampleFormControlTextarea1" rows="3">{{ $results->data->description }}</textarea>
                        </div>
                    </div>
                    <button type="submit" class="btn btn-primary">Submit</button>
                </form>
            </div>
        </div>

    </div>
</main>

@include('/admin/partials/future')
