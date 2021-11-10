@include('/admin/partials/header')
@include('/admin/partials/nav')
@include('/admin/partials/sidebar')
<div id="layoutSidenav_content">
                <main>
                    <div class="container-fluid">
                        <h1 class="mt-4">Dashboard</h1>
                        
                        <div class="card" id="inputfild">
                        	<div class="card-header"><i class="fas fa-table mr-1"></i>Update Product Type</div>
							<div class="card-body">
						    	<form action="{{url('/update/producttype',$product_type->id)}}" method="post">   @csrf
								  	<div class="form-row">
									    <div class="form-group col-md-12">
									        <label for="exampleFormControlInput1">Product Type Name: </label>
                                            {{csrf_field()}}
											<input type="text" name="name" class="form-control" placeholder="Product Type Name" value="{{$product_type->name}}">
											<input type="hidden" name="id" class="form-control"  value="{{$product_type->id}}">
									    </div>
								  	</div>

									<button type="submit" class="btn btn-primary">Update</button>
								</form>
						  	</div>
						</div>

                    </div>
                </main>



@include('/admin/partials/future')

<script>
	/*$(document).ready(function(){

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
	});*/
</script>