@include('/admin/partials/header')
@include('/admin/partials/nav')
@include('/admin/partials/sidebar')

<div id="layoutSidenav_content">
    <main>
        <div class="container-fluid">
            <h1 class="mt-4"></h1>            
            <div class="card mb-4" id="datatable">
                <div class="card-header"><i class="fas fa-table mr-1"></i>Order DataTable</div>
                <div class="card-body">
                    <div class="table-responsive">
                        <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                            <thead>
                                <tr>
                                    <th>Id</th>
                                    <th>Date</th>
                                    <th>name</th>
                                    <th>email</th>
                                    <th>phone</th>
                                    <th>address</th>
                                    <th>Total Yards</th>
                                    <th>Total Price</th>
                                    <th>Packeing</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tfoot>
                                <tr>
                                    <th>Id</th>
                                    <th>Date</th>
                                    <th>Name</th>
                                    <th>Email</th>
                                    <th>Phone</th>
                                    <th>Address</th>
                                    <th>Total Yards</th>
                                    <th>Total Price</th>
                                    <th>Packeing</th>
                                    <th>Action</th>
                                </tr>
                            </tfoot>
                            <tbody>
                                   @foreach ($results->orders as $order) 
                                      <?php
                                          $sl = 1;
                                          $totalprice = 0;
                                          $totalyards = 0;
                                      ?>
                                     @foreach ($order->orderitems as $orderitems)
                                      <p class="hidden-print d-none">{{ floor($totalprice += $orderitems->total_amount)}}</p>
                                      <p class="hidden-print d-none">{{ $totalyards += $orderitems->product_quantity}}</p>
                                     @endforeach
                                     <tr>
                                         <td>{{$order->id}}</td>
                                         <td>{{$order->day}}</td>
                                         <td>{{$order->name}}</td>
                                         <td>{{$order->email}}</td>
                                         <td>{{$order->phone}}</td>
                                         <td>{{$order->address}}</td>
                                         <td>{{$totalyards}}</td>
                                         <td>{{$totalprice}}</td>
                                         <td>{{$order->status}}</td>
                                         <td class="font-weight-bold"><a href="{{url('/admin/orderdetails/' . $order->id)}}">Details</a></td>
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
