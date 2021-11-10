@include('/admin/partials/header')
@include('/admin/partials/nav')
@include('/admin/partials/sidebar')

<div id="layoutSidenav_content">
    <main>
        <div class="container-fluid">
            
            <div class="breadcrumb mb-4 col-md-12 mt-3">
                <button type="button" class="btn btn-info m-1" id="addbtn"> Add Product</button>
                <button type="button" class="btn btn-info m-1" id="showbtn">Show Product</button>
            </div>
            
            <div class="card mb-4" id="datatable">
                <div class="card-header"><i class="fas fa-table mr-1"></i>Product DataTable</div>
                <div class="card-body">
                    <div class="table-responsive">
                        <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                            <thead>
                                <tr>
                                    <th>Id</th>
                                    <th>Name</th>
                                    <th>Phone Number</th>
                                    <th>Email ID</th>
                                </tr>
                            </thead>
                            <tfoot>
                                <tr>
                                    <th>Id</th>
                                    <th>Name</th>
                                    <th>Phone Number</th>
                                    <th>Email ID</th>
                                </tr>
                            </tfoot>
                            <tbody>
                                @foreach ($results->user as $user)
                                <tr>
                                    <td>{{ $user->id }}</td>
                                    <td>{{ $user->name }}</td>
                                    <td>{{ $user->phone }}</td>
                                    <td>{{ $user->email }}</td>
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