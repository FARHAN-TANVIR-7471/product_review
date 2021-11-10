@include('/admin/partials/header')
@include('/admin/partials/nav')
@include('/admin/partials/sidebar')
<style type="text/css">
    @media print {
        .printbtn {
        display : none;
        }
    }
    tr.noBorder td {
      border: 0;
    }
</style>
<script type="text/javascript">
    function myFunction()
    {
        window.print();
        printWindow.document.getElementById('showTopDetailsContent').style.display='block';
    }
</script>

<div id="layoutSidenav_content">
    <div class="breadcrumb printbtn">
        <div class="row">
            <div class="col-md-4">
                <input style="padding:5px;" value="Print Order" type="button" onclick="myFunction()" class="hidden-print btn btn-info font-weight-bold"></input>
            </div>
        </div>
        
        <div class="card-body" style="margin-top: -20px"> 
            <form action="{{route('packeing.update')}}" method="post" enctype="multipart/form-data">
                @csrf
                <div class="form-group col-md-3">
                    {{csrf_field()}}
                    <label for="exampleFormControlSelect1">Order Status</label>

                    <input  type="hidden" name="order_id" value="{{$order_id}}">

                    <select name="status" class="form-control" id="exampleFormControlSelect1">
                        <option value="Shipping">Shipping</option>
                        <option value="Delivered">Delivered</option>
                        <option value="Canceled">Canceled</option>           
                    </select>
                </div>
                <div class="form-group col-md-3">
                    <button type="submit" class="btn btn-primary">Submit</button>
                </div>
            </form>
        </div>
    </div>

    <!-- <div class="card-header p-4 mb-3">
        <img id="logo" src="{{URL::asset('image/logo.jpg')}}">
    </div> -->
@foreach ($results->orders as $order)
<div class="container">
    @if($order->id == $order_id)
        <div class="row">
            <div class="col-md-6">
                <h3>SALES INVOICE</h3>
                <h2 class="m-0"><samp class="font-weight-bold"><samp>#IPM</samp></samp>{{$order->id}}</h2>
            </div>
            <div class="col-md-6">
                <img id="logo" src="{{URL::asset('image/invoice.png')}}" width="150" height="150">
            </div>
        </div>

        <div class="row">
            <div class="col-md-6">
                <h5 class="m-0 mt-3 mb-1">Billing & Shipping Details</h5>
                <p class="m-0 mt-1"><samp class="font-weight-bold mr-2">Name:</samp>{{$order->name}}</p>
                <p class="m-0"><samp class="font-weight-bold mr-2">Email:</samp>{{$order->email}}</p>
                <p class="m-0"><samp class="font-weight-bold mr-2">Phone:</samp>{{$order->phone}}</p>
                <p class="m-0"><samp class="font-weight-bold mr-2">Address:</samp>{{$order->address}}</p>
            </div>
            <div class="col-md-6 ml-auto">
                <h5 class="m-0 mt-3 mb-1">Company Details</h5>
                <p class="m-0 mt-1">Islampur Market</p>
                <p class="m-0">114, 115, 116 Islampur</p>
                <p class="m-0">Road, Jahangir Tower</p>
                <p class="m-0">Dhaka-1100, Bangladesh</p>
                <p class="m-0">Phone: +8801701206363</p>
            </div>
        </div>

        <div class="container pb-2 mt-3">
            <div class="row">
                <table class="table mt-3">
                    <thead>
                      <tr>
                        <th>Sl.</th>
                        <th>SKU</th>
                        <th>Name</th>
                        <!-- <th>order_id</th> -->
                        <th>Yards</th>
                        <th>Total</th>
                      </tr>
                    </thead>
                     
                    <tbody>
                        <?php
                            $sl = 1;
                            $totalprice = 0;
                            $DeliveryCharge = 70;
                        ?>

                        @foreach($order->orderitems as $order)
                        <p class="hidden-print d-none">{{ floor($totalprice += $order->total_amount)}}</p>
                        
                            <tr>
                                <th scope="row">{{ $sl++ }}</th>
                                <td>{{$order->sku}}</td>
                                <td>{{$order->product_name}}</td>
                                <!-- <td>{{$order->order_id}}</td> -->
                                <td>{{$order->product_quantity}}</td>
                                <td><samp>৳</samp>{{$order->total_amount}}</td>
                            </tr>

                        @endforeach

                        <hr>

                        <tr>
                            <td colspan="3"> </td>
                            <td>Sub Total Amount: </td>
                            <td><samp>৳</samp>{{$totalprice}}</td>
                        </tr>
                        <tr class="noBorder">
                            <td colspan="3"> </td>
                            <td> Delivery Charge: </td>
                            <td><samp>৳</samp>70</td>
                        </tr>

                        <tr class="noBorder">
                            <td colspan="3"> </td>
                            <td>Total Amount: </td>
                            <td><samp>৳</samp>{{ floor($totalprice += $DeliveryCharge)}}</td>
                        </tr>
                    </tbody>
                </table>
            </div> 
        </div>
        <!-- <div class="mt-5 mb-5 ml-3">
            <p class="pt-5">signature</p>
        </div> -->

        <div class="mt-5 mb-5 ml-3">
            <div class="d-flex">
                <h4>Terms & Conditions:</h4>
            </div>

            <div class="d-flex">
                <p>
                    In case of defect or wrong product(s), customers will have a time span of 7 days to notify Islampur Market through
                    our Facebook page. We will exchange the defect product with a fresh product (*conditions apply) with no extra
                    delivery charge on the specific product(s) only. Color variance (lighter/deeper shade) is a non-negotiable factor.
                    Screen viewing fabrics and real fabric might differ in color shades for obvious reasons. For queries, please contact
                    customer service at 01701206363.
                </p>
            </div>
        </div>

        
        <div class="d-flex">
            <hr style="border: 1.2px solid gray; width: 400px;">
            <p class="mt-1">www.islampurmarket.com</p>
            <hr style="border: 1.2px solid gray; width: 400px;">
        </div>
    @endif
</div>

@endforeach

@include('/admin/partials/future')
