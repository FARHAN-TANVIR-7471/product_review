<div id="layoutSidenav">
    <div id="layoutSidenav_nav">
        <nav class="sb-sidenav accordion sb-sidenav-dark" id="sidenavAccordion">
            <div class="sb-sidenav-menu">
                <div class="nav">
                    <div class="sb-sidenav-menu-heading">Core</div>
                    <a class="nav-link" href="{{URL::asset('/dashboard')}}"
                        ><div class="sb-nav-link-icon"><i class="fas fa-tachometer-alt"></i></div>
                        Dashboard
                    </a>
                    
                    <a class="nav-link" href="{{url('/admin/product')}}"><div class="mr-3"><i class="fas fa-book-open"></i> </div>Product</a>
                    <a class="nav-link" href="{{url('admin/order')}}"><div class="mr-3"><i class="fas fa-book-open"></i></div>Order</a>
                    <a class="nav-link" href="{{url('admin/contact')}}"><div class="mr-3"><i class="fas fa-book-open"></i></div>Contact</a>
                    <a class="nav-link" href="{{url('/admin/orderaccount')}}"><div class="mr-3"><i class="fas fa-book-open"></i></div>Order Account</a>
                    
                    <a class="nav-link" href="{{route('user.data')}}"><div class="mr-3"><i class="fas fa-book-open"></i></div>Customer Data</a>
                    <a class="nav-link" href="{{route('addpayment.get')}}"><div class="mr-3"><i class="fas fa-book-open"></i></div>Add Payment</a>
                    
                </div>
            </div>       
        </nav>
    </div>
