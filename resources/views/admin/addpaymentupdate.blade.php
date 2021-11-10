@include('/admin/partials/header')
@include('/admin/partials/nav')
@include('/admin/partials/sidebar')

<div id="layoutSidenav_content">
    <main>
        <div class="container-fluid mt-3">
            <div class="card" id="inputfild">
                <div class="card-header"><i class="fas fa-table mr-1"></i>Update Payment</div>
                <div class="card-body">
                    
                    <form action="{{route('addpayment.update')}}" method="post" enctype="multipart/form-data">
                        @csrf
                        <input type="hidden" name="id" value="{{$results->data->id}}">
                        <div class="form-row">
                            <div class="form-group col-md-4">
                                <label for="exampleFormControlInput1">Invoice Id </label>
                                <input type="text" name="invoice_id" class="form-control" value="{{$results->data->invoice_id}}">
                            </div>

                            <div class="form-group col-md-4">
                                <label for="exampleFormControlInput1">Merchant: </label>
                                {{csrf_field()}}
                                <input type="text" name="merchant" class="form-control" id="exampleFormControlInput1" value="{{$results->data->merchant}}">
                            </div>

                            <div class="form-group col-md-4">
                                <label for="exampleFormControlInput1">Total Quantity: </label>
                                {{csrf_field()}}
                                <input type="text" name="total_quantity" class="form-control" id="exampleFormControlInput1" value="{{$results->data->total_quantity}}">
                            </div>
                        </div>

                        <div class="form-row">
                            <div class="form-group col-md-4">
                                <label for="exampleFormControlInput1">Bill Amount: </label>
                                {{csrf_field()}}
                                <input type="number" name="bill_amount" class="form-control" id="exampleFormControlInput1" value="{{$results->data->bill_amount}}">
                            </div>

                            <div class="form-group col-md-4">
                                <label for="exampleFormControlTextarea1">Payment Amount</label>
                                {{csrf_field()}}
                                <input type="number" name="payment_amount" class="form-control" id="exampleFormControlInput1" value="{{$results->data->payment_amount}}">
                            </div>

                            <div class="form-group col-md-4">
                                <label for="exampleFormControlTextarea1">Due Amount</label>
                                {{csrf_field()}}
                                <input type="number" name="due_amount" class="form-control" id="exampleFormControlInput1" value="{{$results->data->due_amount}}">
                            </div>
                        </div>

                        <div class="form-row">
                            <div class="form-group col-md-4">
                                <label for="exampleFormControlInput1">Date of birth: </label>
                                {{csrf_field()}}
                                <input type="date" class="form-control" id="start" name="date" value="{{$results->data->date}}">
                            </div>
                        </div>
                        <button type="submit" class="btn btn-primary">Submit</button>
                    </form>
                </div>
            </div>

        </div>
    </main>

@include('/admin/partials/future')
