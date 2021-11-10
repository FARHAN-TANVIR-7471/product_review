@include('/admin/partials/header')
@include('/admin/partials/nav')
@include('/admin/partials/sidebar')
<div id="layoutSidenav_content">
    <main>
        <div class="container-fluid">
            <h1 class="mt-4">Dashboard</h1>
            <div class="breadcrumb mb-4 col-md-12 ">
            	<h5>Gender Dashboard</h5>
            </div>                        
            
            <div class="card mb-4" id="datatable">
                <div class="card-header"><i class="fas fa-table mr-1"></i>Product DataTable</div>
                <div class="card-body">
                    <div class="table-responsive">
                        <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                            <thead>
                                <tr>
                                    <th class="text-center">ID</th>
                                    <th class="text-center">Name</th>
                                </tr>
                            </thead>
                            
                            <tbody>
                            	<tr>
                                    <td>1</td>
                                    <td>Man</td>
                                </tr>
							    
                                <tr>
                                    <td>2</td>
                                    <td>Women</td>
                                </tr>
                                
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>

            
        </div>
    </main>



@include('/admin/partials/future')

