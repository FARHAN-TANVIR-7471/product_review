@include('/admin/partials/header')
@include('/admin/partials/nav')
@include('/admin/partials/sidebar')

<div id="layoutSidenav_content">
    <main>
        <div class="container-fluid">
            
            <div class="breadcrumb mb-4 col-md-12 mt-3">
                <button type="button" class="btn btn-info m-1" id="addbtn"> Add Product</button>
                <button type="button" class="btn btn-info m-1" id="showbtn">Show Product</button>
            </div>
            
            <div class="card mb-4" id="datatable">
                <div class="card-header"><i class="fas fa-table mr-1"></i>Product DataTable</div>
                <div class="card-body">
                    <div class="table-responsive">
                        <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                            <thead>
                                <tr>
                                    <th>Id</th>
                                    <th>Name</th>
                                    <th>Product Type</th>

                                    <th>Quantity</th>
                                    <th style="color:#008000;">Sell</th>
                                    <th style="color:#DAA520;">Remaining</th>
                                    <th style="color:red;">Short</th>

                                    <th>Price</th>
                                    <th>Profit</th>
                                    <th>Margin</th>
                                    <th>Discount</th>
                                    <th>Color</th>
                                    <th>Image</th>
                                    <th>Actions</th>
                                </tr>
                            </thead>
                            <tfoot>
                                <tr>
                                    <th>Id</th>
                                    <th>Name</th>
                                    <th>Product Type</th>

                                    <th>Quantity</th>
                                    <th style="color:#008000;">Sell</th>
                                    <th style="color:#DAA520;">Remaining</th>
                                    <th style="color:red;">Short</th>

                                    <th>Price</th>
                                    <th>Profit</th>
                                    <th>Margin</th>
                                    <th>Discount</th>
                                    <th>Color</th>
                                    <th>Image</th>
                                    <th>Actions</th>
                                </tr>
                            </tfoot>
                            <tbody>
                                @foreach ($results->data as $user)
                                <tr>
                                    <td>{{ $user->id }}</td>
                                    <td>{{ $user->name }}</td>

                                    @if( $user->product_type_id == 1 )
                                    <td>Bexi Fabrics Voile Prints</td>                                        
                                    @elseif ($user->product_type_id == 2)
                                    <td>Other Voils Prints</td>
                                    @elseif ($user->product_type_id == 3)
                                    <td>Bexi Fabrics Digital Prints</td>
                                    @elseif ($user->product_type_id == 4)
                                    <td>Other Digital Prints</td>
                                    @elseif ($user->product_type_id == 5)
                                    <td>Linen Prints</td>
                                    @elseif( $user->product_type_id == 6 )
                                    <td>Georgette Prints</td>                                        
                                    @elseif ($user->product_type_id == 7)
                                    <td>Slub Cotton Prints</td>
                                    @elseif ($user->product_type_id == 8)
                                    <td>Poplin Prints</td>
                                    @elseif ($user->product_type_id == 9)
                                    <td>Silk Print</td>
                                    @elseif ($user->product_type_id == 10)
                                    <td>Bexi Poplin</td>
                                    @elseif( $user->product_type_id == 11 )
                                    <td>Gold Star Poplin</td>                                        
                                    @elseif ($user->product_type_id == 12)
                                    <td>Fatullah Shulov Poplin</td>
                                    @elseif ($user->product_type_id == 13)
                                    <td>Fatullah Shonali Poplin</td>
                                    @elseif ($user->product_type_id == 14)
                                    <td>Bexi Voile</td>
                                    @elseif ($user->product_type_id == 15)
                                    <td>Gold Star Voile</td>
                                    @elseif( $user->product_type_id == 16 )
                                    <td>Fatullah Shonali Voile</td>                                        
                                    @elseif ($user->product_type_id == 17)
                                    <td>Fatullah Shulov Voile</td>
                                    @elseif ($user->product_type_id == 18)
                                    <td>Bexi Linen</td>
                                    @elseif ($user->product_type_id == 19)
                                    <td>Chinese Linen</td>
                                    @elseif ($user->product_type_id == 20)
                                    <td>Bangladeshi Linen</td>
                                    @elseif( $user->product_type_id == 21 )
                                    <td>Single Georgette</td>                                        
                                    @elseif ($user->product_type_id == 22)
                                    <td>Dana Georgette</td>
                                    @elseif ($user->product_type_id == 23)
                                    <td>Double Georgette</td>
                                    @elseif ($user->product_type_id == 24)
                                    <td>Charmeuse Silk</td>
                                    @elseif ($user->product_type_id == 25)
                                    <td>Slub Cotton</td>
                                    @elseif ($user->product_type_id == 26)
                                    <td>All 3 Pcs</td>
                                    @elseif ($user->product_type_id == 27)
                                    <td>All Lungi</td>
                                    @endif

                                    <td>{{ $user->sku_quantity }}</td>
                                    <td style="color:#008000;">{{ $user->sku_sell }}</td>
                                    <td style="color:#DAA520;">{{ $user->sku_remain }}</td>
                                    @if($user->sku_sell > $user->sku_quantity)         
                                       <td style="color:red;">{{($user->sku_sell - $user->sku_quantity)}}</td>
                                    @else
                                       <td style="color:red;">0</td>     
                                    @endif
                                    <!-- <td>Short</td> -->

                                    <td>{{ $user->price }}</td>
                                    <td>{{ $user->profit }}</td>
                                    <td>{{ $user->margin }} %</td>
                                    <td>{{ $user->discount }}%</td>
                                    <td>{{ $user->color }}</td>
                                    <td>
                                        <img width="70" height="70" src="{{ $user->image}}">
                                    </td>
                                    <td class="text-center">
                                        <a href="{{'/admin/productdetails/'.$user->id}}" class="view" title="View" data-toggle="tooltip"><i style="color: #03A9F4" class="material-icons">&#xE417;</i></a> 
                                        <a href="{{'/admin/productupdate/' . $user->id}}" class="edit" title="Edit" data-toggle="tooltip"><i style="color: #FFC107;" class="material-icons">&#xE254;</i></a>

                                        <a href="#" class="edit" data-toggle="tooltip">
                                            <form action="/productdelete" method="post" enctype="multipart/form-data">
                                                @csrf
                                                <input type="hidden" name="id" value="{{$user->id}}">

                                                <button class="btn btn-danger btn-sm rounded-0" type="submit"data-toggle="tooltip" data-placement="top" title="Delete"><i class="fa fa-trash"></i></button>
                                            </form>
                                        </a>                           
                                    </td>
                                </tr>
                                @endforeach                                            
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>

            <div class="card" id="inputfild">
                <div class="card-header"><i class="fas fa-table mr-1"></i>Add Product</div>
                <div class="card-body">
                    
                    <form action="/productinsert" method="post" enctype="multipart/form-data">
                        @csrf
                        <div class="form-row">
                            <div class="form-group col-md-4">
                                <label for="exampleFormControlInput1">Product Name: </label>
                                <input type="text" name="brand" class="form-control">
                            </div>

                            <div class="form-group col-md-4">
                                {{csrf_field()}}
                              <label for="exampleFormControlSelect1">Product Type</label>

                                <select name="product_type_id" class="form-control" id="exampleFormControlSelect1">
                                    <option value="1">Bexi Fabrics Voile Prints</option>
                                    <option value="2">Other Voils Prints</option>
                                    <option value="3">Bexi Fabrics Digital Prints</option>
                                    <option value="4">Other Digital Prints</option>
                                    <option value="5">Linen Prints</option>
                                    <option value="6">Georgette Prints</option>
                                    <option value="7">Slub Cotton Prints</option>
                                    <option value="8">Poplin Prints</option>
                                    <option value="9">Silk Print</option>
                                    <option value="10">Bexi Poplin</option>
                                    <option value="11">Gold Star Poplin</option>
                                    <option value="12">Fatullah Shulov Poplin</option>
                                    <option value="13">Fatullah Shonali Poplin</option>
                                    <option value="14">Bexi Voile</option>
                                    <option value="15">Gold Star Voile</option>
                                    <option value="16">Fatullah Shonali Voile</option>
                                    <option value="17">Fatullah Shulov Voile</option>
                                    <option value="18">Bexi Linen</option>
                                    <option value="19">Chinese Linen</option>
                                    <option value="20">Bangladeshi Linen</option>
                                    <option value="21">Single Georgette</option>
                                    <option value="22">Dana Georgette</option>
                                    <option value="23">Double Georgette</option>
                                    <option value="24">Charmeuse Silk</option>
                                    <option value="25">Slub Cotton</option>  
                                    <option value="26">All 3 Pcs</option>
                                    <option value="27">All Lungi</option>           
                                </select>
                            </div>
                            <div class="form-group col-md-4">
                                <label for="exampleFormControlInput1">Price: </label>
                                {{csrf_field()}}
                                <input type="text" name="price" class="form-control" id="exampleFormControlInput1" >
                            </div>
                        </div>

                        <div class="form-row">
                            <div class="form-group col-md-4">
                                <label for="exampleFormControlInput1">Cost Price: </label>
                                {{csrf_field()}}
                                <input type="text" name="costprice" class="form-control" id="exampleFormControlInput1">
                            </div>

                            <div class="form-group col-md-4">
                                <label for="exampleFormControlTextarea1">Discount</label>
                                {{csrf_field()}}
                                <input type="number" name="discount" class="form-control" id="exampleFormControlInput1" placeholder="Product Discount in %">
                            </div>
                        </div>

                        <hr>

                        <div class="form-row">                            
                            <div class="form-group col-md-3">
                                <label for="exampleFormControlInput1">Product Color: </label>
                                {{csrf_field()}}
                                <input type="text" name="colorone" class="form-control" id="exampleFormControlInput1">
                            </div>

                            <div class="form-group col-md-3" {{ $errors->has('image') ? 'has-error' : '' }}>
                                <label for="image">Image : </label>
                                <input type="file" name="image" id="image" class="form-control">
                                <span class="text-danger"> {{ $errors->first('image') }}</span>
                            </div>

                            <div class="form-group col-md-3">
                                <label for="exampleFormControlInput1">Quantity</label>
                                {{csrf_field()}}
                                <input type="number" name="qualityone" class="form-control" id="exampleFormControlInput1" step="0.25" placeholder=".25">
                            </div>

                            <div class="form-group col-md-3">
                                <label for="exampleFormControlInput1">SKU </label>
                                {{csrf_field()}}
                                <input type="text" name="skuone" class="form-control" id="exampleFormControlInput1">
                            </div>
                        </div>

                        <div class="form-row">                            
                            <div class="form-group col-md-3">
                                <label for="exampleFormControlInput1">Product Color: </label>
                                {{csrf_field()}}
                                <input type="text" name="colortwo" class="form-control" id="exampleFormControlInput1">
                            </div>

                            <div class="form-group col-md-3" {{ $errors->has('image') ? 'has-error' : '' }}>
                                <label for="image">Image : </label>
                                <input type="file" name="imagetwo" id="image" class="form-control">
                                <span class="text-danger"> {{ $errors->first('image') }}</span>
                            </div>

                            <div class="form-group col-md-3">
                                <label for="exampleFormControlInput1">Quantity</label>
                                {{csrf_field()}}
                                <input type="number" name="qualitytwo" class="form-control" id="exampleFormControlInput1" step="0.25" placeholder=".25">
                            </div>

                            <div class="form-group col-md-3">
                                <label for="exampleFormControlInput1">SKU </label>
                                {{csrf_field()}}
                                <input type="text" name="skutwo" class="form-control" id="exampleFormControlInput1">
                            </div>
                        </div>

                        <div class="form-row">                            
                            <div class="form-group col-md-3">
                                <label for="exampleFormControlInput1">Product Color: </label>
                                {{csrf_field()}}
                                <input type="text" name="colorthree" class="form-control" id="exampleFormControlInput1">
                            </div>

                            <div class="form-group col-md-3" {{ $errors->has('image') ? 'has-error' : '' }}>
                                <label for="image">Image : </label>
                                <input type="file" name="imagethree" id="image" class="form-control">
                                <span class="text-danger"> {{ $errors->first('image') }}</span>
                            </div>

                            <div class="form-group col-md-3">
                                <label for="exampleFormControlInput1">Quantity</label>
                                {{csrf_field()}}
                                <input type="number" name="qualitythree" class="form-control" id="exampleFormControlInput1" step="0.25" placeholder=".25">
                            </div>

                            <div class="form-group col-md-3">
                                <label for="exampleFormControlInput1">SKU </label>
                                {{csrf_field()}}
                                <input type="text" name="skuthree" class="form-control" id="exampleFormControlInput1">
                            </div>
                        </div>

                        <div class="form-row">                            
                            <div class="form-group col-md-3">
                                <label for="exampleFormControlInput1">Product Color: </label>
                                {{csrf_field()}}
                                <input type="text" name="colorfour" class="form-control" id="exampleFormControlInput1">
                            </div>

                            <div class="form-group col-md-3" {{ $errors->has('image') ? 'has-error' : '' }}>
                                <label for="image">Image : </label>
                                <input type="file" name="imagefour" id="image" class="form-control">
                                <span class="text-danger"> {{ $errors->first('image') }}</span>
                            </div>

                            <div class="form-group col-md-3">
                                <label for="exampleFormControlInput1">Quantity</label>
                                {{csrf_field()}}
                                <input type="number" name="qualityfour" class="form-control" id="exampleFormControlInput1" step="0.25" placeholder=".25">
                            </div>

                            <div class="form-group col-md-3">
                                <label for="exampleFormControlInput1">SKU </label>
                                {{csrf_field()}}
                                <input type="text" name="skufour" class="form-control" id="exampleFormControlInput1">
                            </div>
                        </div>

                        <div class="form-row">                            
                            <div class="form-group col-md-3">
                                <label for="exampleFormControlInput1">Product Color: </label>
                                {{csrf_field()}}
                                <input type="text" name="colorfive" class="form-control" id="exampleFormControlInput1">
                            </div>

                            <div class="form-group col-md-3" {{ $errors->has('image') ? 'has-error' : '' }}>
                                <label for="image">Image : </label>
                                <input type="file" name="imagefive" id="image" class="form-control">
                                <span class="text-danger"> {{ $errors->first('image') }}</span>
                            </div>

                            <div class="form-group col-md-3">
                                <label for="exampleFormControlInput1">Quantity</label>
                                {{csrf_field()}}
                                <input type="number" name="qualityfive" class="form-control" id="exampleFormControlInput1" step="0.25" placeholder=".25">
                            </div>

                            <div class="form-group col-md-3">
                                <label for="exampleFormControlInput1">SKU </label>
                                {{csrf_field()}}
                                <input type="text" name="skufive" class="form-control" id="exampleFormControlInput1">
                            </div>
                        </div>

                        <hr>

                        <div class="form-row">
                            <div class="form-group col-md-12">
                                <label for="exampleFormControlInput1">Description: </label>
                                {{csrf_field()}}
                                <!-- <input type="text" name="season" class="form-control" id="exampleFormControlInput1" placeholder="Season"> -->
                                <textarea name="description" class="form-control" id="exampleFormControlTextarea1" rows="3"></textarea>
                            </div>
                        </div>

                        <button type="submit" class="btn btn-primary">Submit</button>

                    </form>
                </div>
            </div>

        </div>
    </main>

@include('/admin/partials/future')

<script>
    $(document).ready(function(){

        $("#showbtn").hide();
        $("#inputfild").hide();

         $("#addbtn").click(function(){
            $("#addbtn").hide();
            $("#datatable").hide();
            $("#showbtn").show();
            $("#inputfild").show();
        });

        $("#showbtn").click(function(){
            $("#addbtn").show();
            $("#datatable").show();
            $("#showbtn").hide();
            $("#inputfild").hide();
        });
    });
</script>