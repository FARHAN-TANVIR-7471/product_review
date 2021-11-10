@include('/admin/partials/header')
@include('/admin/partials/nav')
@include('/admin/partials/sidebar')
<div id="layoutSidenav_content">
                <main>
                    <div class="container-fluid">
                        <h1 class="mt-4">Dashboard</h1>
                        <div class="breadcrumb mb-4 col-md-12 ">
                        	<button type="button" class="btn btn-info m-1" id="addbtn"> Add Cart</button>
							<button type="button" class="btn btn-info m-1" id="showbtn">Show Cart</button>
                        </div>
                        <!-- <ol class="breadcrumb mb-4">
                            <div class="btn-group btn-group-toggle" data-toggle="buttons">
							  <label class="btn btn-primary form-check-label active">
							    <input class="form-check-input" type="radio" name="options" id="option1" autocomplete="off" checked>
							    Show Product
							  </label>
							  <label class="btn btn-primary form-check-label" action="#input">

							    <input class="form-check-input" type="radio" name="options" id="option2" autocomplete="off"> Add Product
							  </label>
							</div>

							
                        </ol> -->
                        
                        
                        <div class="card mb-4" id="datatable">
                            <div class="card-header"><i class="fas fa-table mr-1"></i>Cart DataTable</div>
                            <div class="card-body">
                                <div class="table-responsive">
                                    <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                                        <thead>
                                            <tr>
                                                <th>id</th>
                                                <th>Registration</th>
                                                <th>product</th>
                                                <th>Age</th>
                                                <th>Number</th>
                                                <th>Price</th>
                                                <th>Actions</th>
                                            </tr>
                                        </thead>
                                        <tfoot>
                                            <tr>
                                                <th>id</th>
                                                <th>Registration</th>
                                                <th>product</th>
                                                <th>Age</th>
                                                <th>Number</th>
                                                <th>Price</th>
                                                <th>Actions</th>
                                            </tr>
                                        </tfoot>
                                        <tbody>
                                            
                                            <tr>
                                                <td>kura Yamamoto</td>
                                                <td>Support Engineer</td>
                                                <td>Tokyo</td>
                                                <td>37</td>
                                                <td>2009/08/19</td>
                                                <td>$139,575</td>
                                                <td>
													<a href="#" class="view" title="View" data-toggle="tooltip"><i style="color: #03A9F4" class="material-icons">&#xE417;</i></a>
						                            <a href="#" class="edit" title="Edit" data-toggle="tooltip"><i style="color: #FFC107;" class="material-icons">&#xE254;</i></a>
						                            <a href="#" class="delete" title="Delete" data-toggle="tooltip"><i style="color: #E34724;" class="material-icons">&#xE872;</i></a>
						                        </td>
                                            </tr>
                                            <tr>
                                                <td>Thor Walton</td>
                                                <td>Developer</td>
                                                <td>New York</td>
                                                <td>61</td>
                                                <td>2013/08/11</td>
                                                <td>$98,540</td>
                                                 <td>
													<a href="#" class="view" title="View" data-toggle="tooltip"><i style="color: #03A9F4" class="material-icons">&#xE417;</i></a>
						                            <a href="#" class="edit" title="Edit" data-toggle="tooltip"><i style="color: #FFC107;" class="material-icons">&#xE254;</i></a>
						                            <a href="#" class="delete" title="Delete" data-toggle="tooltip"><i style="color: #E34724;" class="material-icons">&#xE872;</i></a>
						                        </td>
                                            </tr>
                                            <tr>
                                                <td>Finn Camacho</td>
                                                <td>Support Engineer</td>
                                                <td>San Francisco</td>
                                                <td>47</td>
                                                <td>2009/07/07</td>
                                                <td>$87,500</td>
                                                 <td>
													<a href="#" class="view" title="View" data-toggle="tooltip"><i style="color: #03A9F4" class="material-icons">&#xE417;</i></a>
						                            <a href="#" class="edit" title="Edit" data-toggle="tooltip"><i style="color: #FFC107;" class="material-icons">&#xE254;</i></a>
						                            <a href="#" class="delete" title="Delete" data-toggle="tooltip"><i style="color: #E34724;" class="material-icons">&#xE872;</i></a>
						                        </td>
                                            </tr>
                                            <tr>
                                                <td>Serge Baldwin</td>
                                                <td>Data Coordinator</td>
                                                <td>Singapore</td>
                                                <td>64</td>
                                                <td>2012/04/09</td>
                                                <td>$138,575</td>
                                                <td>
													<a href="#" class="view" title="View" data-toggle="tooltip"><i style="color: #03A9F4" class="material-icons">&#xE417;</i></a>
						                            <a href="#" class="edit" title="Edit" data-toggle="tooltip"><i style="color: #FFC107;" class="material-icons">&#xE254;</i></a>
						                            <a href="#" class="delete" title="Delete" data-toggle="tooltip"><i style="color: #E34724;" class="material-icons">&#xE872;</i></a>
						                        </td>
                                            <tr>
                                                <td>Zenaida Frank</td>
                                                <td>Software Engineer</td>
                                                <td>New York</td>
                                                <td>63</td>
                                                <td>2010/01/04</td>
                                                <td>$125,250</td>
                                                <td>
													<a href="#" class="view" title="View" data-toggle="tooltip"><i style="color: #03A9F4" class="material-icons">&#xE417;</i></a>
						                            <a href="#" class="edit" title="Edit" data-toggle="tooltip"><i style="color: #FFC107;" class="material-icons">&#xE254;</i></a>
						                            <a href="#" class="delete" title="Delete" data-toggle="tooltip"><i style="color: #E34724;" class="material-icons">&#xE872;</i></a>
						                        </td>
                                            </tr>
                                            <tr>
                                                <td>Zorita Serrano</td>
                                                <td>Software Engineer</td>
                                                <td>San Francisco</td>
                                                <td>56</td>
                                                <td>2012/06/01</td>
                                                <td>$115,000</td>
                                                <td>
													<a href="#" class="view" title="View" data-toggle="tooltip"><i style="color: #03A9F4" class="material-icons">&#xE417;</i></a>
						                            <a href="#" class="edit" title="Edit" data-toggle="tooltip"><i style="color: #FFC107;" class="material-icons">&#xE254;</i></a>
						                            <a href="#" class="delete" title="Delete" data-toggle="tooltip"><i style="color: #E34724;" class="material-icons">&#xE872;</i></a>
						                        </td>
                                            </tr>
                                            <tr>
                                                <td>Jennifer Acosta</td>
                                                <td>Junior Javascript Developer</td>
                                                <td>Edinburgh</td>
                                                <td>43</td>
                                                <td>2013/02/01</td>
                                                <td>$75,650</td>
                                                <td>
													<a href="#" class="view" title="View" data-toggle="tooltip"><i style="color: #03A9F4" class="material-icons">&#xE417;</i></a>
						                            <a href="#" class="edit" title="Edit" data-toggle="tooltip"><i style="color: #FFC107;" class="material-icons">&#xE254;</i></a>
						                            <a href="#" class="delete" title="Delete" data-toggle="tooltip"><i style="color: #E34724;" class="material-icons">&#xE872;</i></a>
						                        </td>
                                            </tr>
                                            <tr>
                                                <td>Cara Stevens</td>
                                                <td>Sales Assistant</td>
                                                <td>New York</td>
                                                <td>46</td>
                                                <td>2011/12/06</td>
                                                <td>$145,600</td>
                                               <td>
													<a href="#" class="view" title="View" data-toggle="tooltip"><i style="color: #03A9F4" class="material-icons">&#xE417;</i></a>
						                            <a href="#" class="edit" title="Edit" data-toggle="tooltip"><i style="color: #FFC107;" class="material-icons">&#xE254;</i></a>
						                            <a href="#" class="delete" title="Delete" data-toggle="tooltip"><i style="color: #E34724;" class="material-icons">&#xE872;</i></a>
						                        </td>
                                            <tr>
                                                <td>Hermione Butler</td>
                                                <td>Regional Director</td>
                                                <td>London</td>
                                                <td>47</td>
                                                <td>2011/03/21</td>
                                                <td>$356,250</td>
                                                <td>
													<a href="#" class="view" title="View" data-toggle="tooltip"><i style="color: #03A9F4" class="material-icons">&#xE417;</i></a>
						                            <a href="#" class="edit" title="Edit" data-toggle="tooltip"><i style="color: #FFC107;" class="material-icons">&#xE254;</i></a>
						                            <a href="#" class="delete" title="Delete" data-toggle="tooltip"><i style="color: #E34724;" class="material-icons">&#xE872;</i></a>
						                        </td>
                                            <tr>
                                                <td>Lael Greer</td>
                                                <td>Systems Administrator</td>
                                                <td>London</td>
                                                <td>21</td>
                                                <td>2009/02/27</td>
                                                <td>$103,500</td>
                                               <td>
													<a href="#" class="view" title="View" data-toggle="tooltip"><i style="color: #03A9F4" class="material-icons">&#xE417;</i></a>
						                            <a href="#" class="edit" title="Edit" data-toggle="tooltip"><i style="color: #FFC107;" class="material-icons">&#xE254;</i></a>
						                            <a href="#" class="delete" title="Delete" data-toggle="tooltip"><i style="color: #E34724;" class="material-icons">&#xE872;</i></a>
						                        </td>
                                            </tr>
                                            <tr>
                                                <td>Jonas Alexander</td>
                                                <td>Developer</td>
                                                <td>San Francisco</td>
                                                <td>30</td>
                                                <td>2010/07/14</td>
                                                <td>$86,500</td>
                                                 <td>
													<a href="#" class="view" title="View" data-toggle="tooltip"><i style="color: #03A9F4" class="material-icons">&#xE417;</i></a>
						                            <a href="#" class="edit" title="Edit" data-toggle="tooltip"><i style="color: #FFC107;" class="material-icons">&#xE254;</i></a>
						                            <a href="#" class="delete" title="Delete" data-toggle="tooltip"><i style="color: #E34724;" class="material-icons">&#xE872;</i></a>
						                        </td>
                                            </tr>
                                            <tr>
                                                <td>Shad Decker</td>
                                                <td>Regional Director</td>
                                                <td>Edinburgh</td>
                                                <td>51</td>
                                                <td>2008/11/13</td>
                                                <td>$183,000</td>
                                                 <td>
													<a href="#" class="view" title="View" data-toggle="tooltip"><i style="color: #03A9F4" class="material-icons">&#xE417;</i></a>
						                            <a href="#" class="edit" title="Edit" data-toggle="tooltip"><i style="color: #FFC107;" class="material-icons">&#xE254;</i></a>
						                            <a href="#" class="delete" title="Delete" data-toggle="tooltip"><i style="color: #E34724;" class="material-icons">&#xE872;</i></a>
						                        </td>
                                            </tr>
                                            <tr>
                                                <td>Michael Bruce</td>
                                                <td>Javascript Developer</td>
                                                <td>Singapore</td>
                                                <td>29</td>
                                                <td>2011/06/27</td>
                                                <td>$183,000</td>
                                                 <td>
													<a href="#" class="view" title="View" data-toggle="tooltip"><i style="color: #03A9F4" class="material-icons">&#xE417;</i></a>
						                            <a href="#" class="edit" title="Edit" data-toggle="tooltip"><i style="color: #FFC107;" class="material-icons">&#xE254;</i></a>
						                            <a href="#" class="delete" title="Delete" data-toggle="tooltip"><i style="color: #E34724;" class="material-icons">&#xE872;</i></a>
						                        </td>
                                            </tr>
                                            <tr>
                                                <td>Donna Snider</td>
                                                <td>Customer Support</td>
                                                <td>New York</td>
                                                <td>27</td>
                                                <td>2011/01/25</td>
                                                <td>$112,000</td>
                                                 <td>
													<a href="#" class="view" title="View" data-toggle="tooltip"><i style="color: #03A9F4" class="material-icons">&#xE417;</i></a>
						                            <a href="#" class="edit" title="Edit" data-toggle="tooltip"><i style="color: #FFC107;" class="material-icons">&#xE254;</i></a>
						                            <a href="#" class="delete" title="Delete" data-toggle="tooltip"><i style="color: #E34724;" class="material-icons">&#xE872;</i></a>
						                        </td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>

                        <div class="card" id="inputfild">
                        	<div class="card-header"><i class="fas fa-table mr-1"></i>Add Product</div>
							<div class="card-body">
						    	<form>
								  	<div class="form-row">
									    <div class="form-group col-md-6">
									        <label for="exampleFormControlInput1">Product Name: </label>
											<input type="email" class="form-control" id="exampleFormControlInput1" placeholder="Product Name">
									    </div>
									    <div class="form-group col-md-6">
									      <label for="exampleFormControlSelect1">Gender</label>
											<select class="form-control" id="exampleFormControlSelect1">
												<option>Male</option>
												<option>Female</option>
																		      
											</select>
									    </div>
								  	</div>

								  	<div class="form-row">
									    <div class="form-group col-md-6">
									        <label for="exampleFormControlSelect1">Product Type</label>

										    <select class="form-control" id="exampleFormControlSelect1">
										      	<option>1</option>
										      	<option>2</option>
										      	<option>3</option>
										      	<option>4</option>			
										    </select>
									    </div>
									    <div class="form-group col-md-6">
									      	<label for="exampleFormControlInput1">Product Color: </label>
									    	<input type="text" class="form-control" id="exampleFormControlInput1" placeholder="Product Color">
									    </div>
								  	</div>

									<div class="form-group">
									    <label for="exampleFormControlTextarea1">Product Discount</label>
									    <!-- <textarea class="form-control" id="exampleFormControlTextarea1" rows="2"></textarea> -->
									    <input type="number" class="form-control" id="exampleFormControlInput1" placeholder="Product Discount">
									</div>

									<div class="form-group">
								        <label>Upload Image</label>
								        <div class="input-group">
								            <span class="input-group-btn">
								                <span class="btn btn-default btn-file">
								                    <input type="file" id="imgInp">
								                </span>
								            </span>							
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