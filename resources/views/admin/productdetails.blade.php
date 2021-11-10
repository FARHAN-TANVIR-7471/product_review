@include('/admin/partials/header')
@include('/admin/partials/nav')
@include('/admin/partials/sidebar')
<div id="layoutSidenav_content">
	<div class="container-fluid">
		<main>
			<div class="card m-5" id="datatable">
                <div class="card-header"><i class="fas fa-table mr-1"></i>Product Details</div>
                <div class="card-body">
                    <div class="row">
                    	<div class="col-md-5">
                              <div class="row">
                                   <div class="col-md-4">
                                        @if($results->data->image =='' || $results->data->color =='')                  
                                        @else
                                        <div>
                                             <img id="new_img" class="w-20 img-responsive" src="{{$results->data->image}}" width="130" height="130">
                                        </div>

                                        <div class="mt-3">
                                             <label>{{$results->data->color}}</label>
                                        </div>
                                        @endif
                                   </div>
                                   <div class="col-md-4">
                                        @if($results->data->image_2 =='' || $results->data->color_2 =='')                  
                                        @else
                                        <img id="new_img" class="w-20 img-responsive" src="{{$results->data->image_2}}" width="130" height="130">
                                        <div class="mt-3">
                                             <label>{{$results->data->color_2}}</label>
                                        </div>                                        
                                        @endif
                                   </div>
                                   <div class="col-md-4">
                                        @if($results->data->image_3 =='' || $results->data->color_3 =='')                  
                                        @else
                                        <img id="new_img" class="w-20 img-responsive" src="{{$results->data->image_3}}" width="130" height="130">
                                        <div class="mt-3">
                                             <label>{{$results->data->color_3}}</label>
                                        </div>
                                        @endif
                                   </div>
                              </div>
                              <div class="row mt-3">
                                   <div class="col-md-4">
                                        @if($results->data->image_4 =='' || $results->data->color_4 =='')                  
                                        @else
                                        <img id="new_img" class="w-20 img-responsive" src="{{$results->data->image_4}}" width="120" height="120">
                                        <label>{{$results->data->color_4}}</label>
                                        @endif
                                   </div>
                                   <div class="col-md-4">
                                        @if($results->data->image_5 =='' || $results->data->color_5 =='')                  
                                        @else
                                        <img id="new_img" class="w-20 img-responsive" src="{{$results->data->image_5}}" width="120" height="120"><br>
                                        <label>{{$results->data->color_5}}</label>
                                        @endif
                                   </div>
                              </div>
                    		
                    	</div>

                    	<div class="col-md-7">
                    		<div class="mb-5">
                    			<h3> <samp>Name:</samp> {{$results->data->name}}</h3>
                    		</div>

                    		<div class="row">
                    			<div class="col-3">
                    				<h5>Price:</h5>
                    			</div>
                    			<div class="col">
                    				<h5><samp>৳ </samp> {{$results->data->price}}</h5>
                    			</div>
                    		</div>

                    		<div class="row">
                    			<div class="col-3">
                    				<h5>Cost Price:</h5>
                    			</div>
                    			<div class="col">
                    				<h5><samp>৳ </samp> {{$results->data->cost_price}}</h5>
                    			</div>
                    		</div>

                    		<div class="row">
                    			<div class="col-3">
                    				<h5>Profit:</h5>
                    			</div>
                    			<div class="col">
                    				<h5><samp>৳ </samp> {{$results->data->profit}}</h5>
                    			</div>
                    		</div>

                    		<div class="row">
                    			<div class="col-3">
                    				<h5>Margin:</h5>
                    			</div>
                    			<div class="col">
                    				<h5><samp>৳ </samp> {{$results->data->margin}}%</h5>
                    			</div>
                    		</div>

                    		<div class="row">
                    			<div class="col-3">
                    				<h5>Discount:</h5>
                    			</div>
                    			<div class="col">
                    				<h5><samp>৳ </samp> {{$results->data->discount}}%</h5>
                    			</div>
                    		</div>

                    		<div class="row mt-3">
                    			<div class="col-12">
                    				<table class="table">
									<thead>
									     <tr>
									      <th scope="col">SKU</th>
									      <th scope="col">Quantity</th>
									      <th scope="col">Sell</th>
									      <th scope="col">Remain</th>
                                                   <th scope="col">Short</th>
									     </tr>
									</thead>
									<tbody>
                                                  @foreach ($results->stock as $stock)
									     <tr>
									      <th>{{$stock->sku_name}}</th>
									      <td>{{$stock->sku_quantity}}</td>
									      <td>{{$stock->sku_sell}}</td>
									      <td>{{$stock->sku_remain}}</td>
                                                   @if($stock->sku_sell > $stock->sku_quantity)         
                                                       <td>{{($stock->sku_sell - $stock->sku_quantity)}}</td>
                                                   @else
                                                       <td>0</td>     
                                                   @endif      
									     </tr>
                                                  @endforeach 
									</tbody>
								</table>
                    			</div>
                    		</div>
                    		<hr>
                    		<div class="row">
                    			<div class="col-12">
                    				<h5>Discount:</h5>
                    				<p>{{$results->data->description}}</p>
                    			</div>
                    		</div>
                    	</div>
                    </div>
                </div>
            </div>
		</main>
	</div>
@include('/admin/partials/future')