@include('/admin/partials/header')
@include('/admin/partials/nav')
@include('/admin/partials/sidebar')
<div id="layoutSidenav_content">
                <main>
                    <div class="container-fluid">
                        <h1 class="mt-4">Dashboard</h1>
                        <div class="breadcrumb mb-4 col-md-12 ">
                        	<button type="button" class="btn btn-info m-1" id="addbtn"> Add Product Type</button>
							<button type="button" class="btn btn-info m-1" id="showbtn">Show Product Type</button>
                        </div>
                        
                        
                        <div class="card mb-4" id="datatable">
                            <div class="card-header"><i class="fas fa-table mr-1"></i>Product Type DataTable</div>
                            <div class="card-body">
                                <div class="table-responsive">
                                    <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                                        <thead>
                                            <tr>
                                                <th class="text-center">ID</th>
                                                <th class="text-center">Name</th>                               
                                                <th class="text-center">Actions</th>
                                            </tr>
                                        </thead>
                                        <tfoot>
                                            <tr>
                                                <th class="text-center">ID</th>
                                                <th class="text-center">Name</th>                                
                                                <th class="text-center">Actions</th>
                                            </tr>
                                        </tfoot>
                                        <tbody>
                                           
                                                <tr>
                                                    <td>A</td>
                                                    <td>A</td>
                                                    <td>C</td>
                                                    
                                                    <!-- <td class="text-center">
                                                        <a href="#" class="view" title="View" data-toggle="tooltip"><i style="color: #03A9F4" class="material-icons">&#xE417;</i></a>
                                                        <a href="#" method="get" class="edit" title="Edit" data-toggle="tooltip"><i style="color: #FFC107;" class="material-icons">&#xE254;</i></a>
                                                        <a href="#" class="delete" title="Delete" data-toggle="tooltip"><i style="color: #E34724;" class="material-icons">&#xE872;</i></a>
                                                    </td> -->
                                                </tr>
                                            
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>

                        <div class="card" id="inputfild">
                        	<div class="card-header"><i class="fas fa-table mr-1"></i>Add New Product Type</div>
							<div class="card-body">
						    	<form action="/insert" method="post">
								  	<div class="form-row">
									    <div class="form-group col-md-12">
									        <label for="exampleFormControlInput1">Product Type Name: </label>
                                            {{csrf_field()}}
											<input type="text" name="name" class="form-control" placeholder="Product Type Name">
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