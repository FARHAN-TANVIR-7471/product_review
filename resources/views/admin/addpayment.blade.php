@include('/admin/partials/header')
@include('/admin/partials/nav')
@include('/admin/partials/sidebar')

<div id="layoutSidenav_content">
    <main>
        <div class="container-fluid">
            <div class="breadcrumb mb-4 col-md-12 mt-3">
                <button type="button" class="btn btn-info m-1" id="addbtn"> Add Payment</button>
                <button type="button" class="btn btn-info m-1" id="showbtn">Show Payment</button>
            </div>
            
            <div class="card mb-4" id="datatable">
                <div class="card-header"><i class="fas fa-table mr-1"></i>Payment Data Table</div>
                <div class="card-body">
                    <div class="table-responsive">
                        <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                            <thead>
                                <tr>
                                    <th>Id</th>
                                    <th>Invoice Id</th>
                                    <th>Merchant</th>
                                    <th>Quantity</th>
                                    <th>Bill Amount</th>
                                    <th>Payment Amount</th>
                                    <th>Due Amount</th>
                                    <th>Date</th>
                                    <th>Actions</th>
                                </tr>
                            </thead>
                            <tfoot>
                                <tr>
                                    <th>Id</th>
                                    <th>Invoice Id</th>
                                    <th>Merchant</th>
                                    <th>Quantity</th>
                                    <th>Bill Amount</th>
                                    <th>Payment Amount</th>
                                    <th>Due Amount</th>
                                    <th>Date</th>
                                    <th>Actions</th>
                                </tr>
                            </tfoot>
                            <tbody>
                                @foreach ($results->data as $user)
                                <tr>
                                    <td>{{ $user->id }}</td>
                                    <td>{{ $user->invoice_id }}</td>
                                    <td>{{ $user->merchant }}</td>
                                    <td>{{ $user->total_quantity }}</td>
                                    <td>{{ $user->bill_amount }}</td>
                                    <td>{{ $user->payment_amount }}</td>
                                    <td>{{ $user->due_amount }}</td>
                                    <td>{{ $user->date }}</td>
                                    
                                    <td class="text-center"> 
                                        <a href="{{'/admin/addpayment/update/' . $user->id}}" class="edit" title="Edit" data-toggle="tooltip"><i style="color: #FFC107;" class="material-icons">&#xE254;</i></a>

                                        <a href="#" class="edit" data-toggle="tooltip">
                                            <form action="{{route('addpayment.delete')}}" method="post" enctype="multipart/form-data">
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
                <div class="card-header"><i class="fas fa-table mr-1"></i>Add Payment</div>
                <div class="card-body">
                    
                    <form action="{{route('addpayment.insert')}}" method="post" enctype="multipart/form-data">
                        @csrf
                        <div class="form-row">
                            <div class="form-group col-md-4">
                                <label for="exampleFormControlInput1">Invoice Id </label>
                                <input type="text" name="invoice_id" class="form-control">
                            </div>

                            <div class="form-group col-md-4">
                                <label for="exampleFormControlInput1">Merchant: </label>
                                {{csrf_field()}}
                                <input type="text" name="merchant" class="form-control" id="exampleFormControlInput1" >
                            </div>

                            <div class="form-group col-md-4">
                                <label for="exampleFormControlInput1">Total Quantity: </label>
                                {{csrf_field()}}
                                <input type="text" name="total_quantity" class="form-control" id="exampleFormControlInput1" >
                            </div>
                        </div>

                        <div class="form-row">
                            <div class="form-group col-md-4">
                                <label for="exampleFormControlInput1">Bill Amount: </label>
                                {{csrf_field()}}
                                <input type="number" name="bill_amount" class="form-control" id="exampleFormControlInput1">
                            </div>

                            <div class="form-group col-md-4">
                                <label for="exampleFormControlTextarea1">Payment Amount</label>
                                {{csrf_field()}}
                                <input type="number" name="payment_amount" class="form-control" id="exampleFormControlInput1">
                            </div>

                            <div class="form-group col-md-4">
                                <label for="exampleFormControlTextarea1">Due Amount</label>
                                {{csrf_field()}}
                                <input type="number" name="due_amount" class="form-control" id="exampleFormControlInput1">
                            </div>
                        </div>

                        <div class="form-row">
                            <div class="form-group col-md-4">
                                <label for="exampleFormControlInput1">Date of birth: </label>
                                {{csrf_field()}}
                                <input type="date" class="form-control" id="start" name="date">
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