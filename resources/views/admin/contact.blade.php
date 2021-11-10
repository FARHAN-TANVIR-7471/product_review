@include('/admin/partials/header')
@include('/admin/partials/nav')
@include('/admin/partials/sidebar')

<div id="layoutSidenav_content">
    <main>
        <div class="container-fluid">
            <h1 class="mt-4"></h1>            
            
            <div class="card mb-4" id="datatable">
                <div class="card-header"><i class="fas fa-table mr-1"></i>Contact Data Table</div>
                <div class="card-body">
                    <div class="table-responsive">
                        <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                            <thead>
                                <tr>
                                    <th>Id</th>
                                    <th>name</th>
                                    <th>email</th>
                                    <th>phone</th>
                                    <th>Message</th>
                                    <!-- <th>product_id</th>
                                    <th>product_quantity</th>
                                    <th>otal_amount</th> -->
                                </tr>
                            </thead>
                            <tfoot>
                                <tr>
                                    <th>Id</th>
                                    <th>Name</th>
                                    <th>Email</th>
                                    <th>Phone</th>
                                    <th>Message</th>
                                    <!-- <th>product_id</th>
                                    <th>product_quantity</th>
                                    <th>otal_amount</th> -->
                                </tr>
                            </tfoot>
                            <tbody>
                                   @foreach ($results->data as $order) 
                                   <tr>
                                       <td>{{$order->id}}</td>
                                       <td>{{$order->name}}</td>
                                       <td>{{$order->email}}</td>
                                       <td>{{$order->phone}}</td>
                                       <td>{{$order->message}}</td>
                                   </tr>
                                   @endforeach     
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>

        </div>
    </main>



@include('/admin/partials/future')
