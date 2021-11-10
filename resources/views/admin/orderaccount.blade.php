@include('/admin/partials/header')
@include('/admin/partials/nav')
@include('/admin/partials/sidebar')

<div id="layoutSidenav_content">
    <main>
        <div class="container-fluid">
            <h1 class="mt-4"></h1>            
            
            <div class="card mb-4" id="datatable">
                <div class="card-header"><i class="fas fa-table mr-1"></i>Account Data Table</div>
                <div class="card-body">
                    <div class="table-responsive">
                        <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                            <thead>
                                <tr>
                                    <th>Order Id</th>
                                    <th>Day</th>
                                    <th>Month</th>
                                    <th>Name</th>
                                    <th>Profit</th>                                   
                                    <th>Details</th>
                                </tr>
                            </thead>
                            <tfoot>
                                <tr>
                                    <th>Order Id</th>
                                    <th>Day</th>
                                    <th>Month</th>
                                    <th>Name</th>
                                    <th>Profit</th>                                    
                                    <th>Details</th>
                                </tr>
                            </tfoot>
                            <tbody>
                                   @foreach ($results->orders as $order) 
                                   <tr>
                                       <td>{{$order->id}}</td>
                                       <td>{{$order->day}}</td>
                                       <td>{{$order->month}}</td>
                                       <td>{{$order->name}}</td>
                                       <td>{{$order->profit}}</td>                                      
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
