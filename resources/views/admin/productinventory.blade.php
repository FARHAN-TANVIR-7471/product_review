@include('/admin/partials/header')
@include('/admin/partials/nav')
@include('/admin/partials/sidebar')

<div id="layoutSidenav_content">
    <main>
        <div class="container-fluid">
            <h1 class="mt-4"></h1>            
            <div class="card mb-4" id="datatable">
                <div class="card-header"><i class="fas fa-table mr-1"></i>Product DataTable</div>
                <div class="card-body">
                    <div class="table-responsive">
                        <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                            <thead>
                                <tr>
                                    <th>Id</th>
                                    <th>Name</th>
                                    <th>Selling Number</th>
                                    <th>Stock product</th>
                                    <th>Cash money</th>
                                </tr>
                            </thead>
                            <tfoot>
                                <tr>
                                    <th>Id</th>
                                    <th>Name</th>
                                    <th>Selling Number</th>
                                    <th>Stock product</th>
                                    <th>Cash money</th>
                                </tr>
                            </tfoot>
                            <tbody>                                
                                <tr>
                                    <td>1</td>
                                    <td>Name</td>
                                    <td>Selling Number</td>
                                    <td>Stock product</td>
                                    <td>cash money</td>

                                    <!-- <td>
                                        <img style="width: 30%; height:15%" src="">
                                    </td> -->
                                </tr>                                        
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </main>
@include('/admin/partials/future')
