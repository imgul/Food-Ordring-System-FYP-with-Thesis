@extends('Admin.layout')
@section('title')
Dashboard
@endsection
@section('dashboard')
          <!-- Begin Page Content -->
          <div class="container-fluid">

<!-- Page Heading -->
<div class="d-sm-flex align-items-center justify-content-between mb-4">
    <h1 class="h3 mb-0 text-gray-800">Dashboard</h1>
    
</div>

<!-- Content Row -->
<div class="row">

    <!-- Earnings (Monthly) Card Example -->

    <!-- Earnings (Monthly) Card Example -->
    <div class="col-xl-6 col-md-6 mb-4">
        <div class="card border-left-success shadow h-100 py-2">
            <div class="card-body">
                <div class="row no-gutters align-items-center">
                    <div class="col mr-2">
                        <div class="text-xs font-weight-bold text-success text-uppercase mb-1">
                           Total Products</div>
                        <div class="h5 mb-0 font-weight-bold text-gray-800">{{$count}}</div>
                    </div>
                    <div class="col-auto">
                        <i class="fas fa-dollar-sign fa-2x text-gray-300"></i>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Earnings (Monthly) Card Example -->
    <div class="col-xl-6 col-md-6 mb-4">
        <div class="card border-left-info shadow h-100 py-2">
            <div class="card-body">
                <div class="row no-gutters align-items-center">
                    <div class="col mr-2">
                        <div class="text-xs font-weight-bold text-info text-uppercase mb-1">Orders
                        </div>
                        <div class="row no-gutters align-items-center">
                            <div class="col-auto">
                                <div class="h5 mb-0 mr-3 font-weight-bold text-gray-800">{{$countorders}}</div>
                            </div>
                          
                        </div>
                    </div>
                    <div class="col-auto">
                        <i class="fas fa-clipboard-list fa-2x text-gray-300"></i>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Pending Requests Card Example -->

</div>

<!-- Content Row -->

<div class="row">

    <!-- Area Chart -->
    <div class="col-xl-8 col-lg-7">
       <!-- table -->
       <div class="table-responsive">
            <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                <thead>
               
                </thead>
      
                    <tr>
                        <th>Image</th> 
                        <th>Name</th>
                        <th>Price</th>
                        <th>Category</th>
                        <th>Add time</th>
                        <th>Delete</th>
                       
                    </tr>
      
                <tbody>
                    @foreach($products as $p)
                    <tr>
                       <td><img src="../images/{{$p->Image}}" width="70px" alt=""></td>
                       <td>{{$p->Product_name}}</td>
                       <td>{{$p->Price}}</td>
                       <td>{{$p->Category}}</td>
                       <td>{{$p->created_at}}</td>
                       <td><a href="{{url('deletepro/'.$p->id)}}" class="btn btn-danger">Delete</a></td>
                    </tr>
                  @endforeach
                </tbody>
            </table>
        </div>
    </div>

    <!-- Pie Chart -->
    <div class="col-xl-4 col-lg-5">
        <div class="card shadow mb-4">
            <!-- Card Header - Dropdown -->
            <div
                class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
                <h6 class="m-0 font-weight-bold text-primary">Revenue Sources</h6>
         <!-- Button trigger modal -->
         <button type="button" class="btn btn-success" data-toggle="modal" data-target="#exampleModalCenter">
 Add Products
</button>
<br>
<!-- Modal -->
<div class="modal fade" id="exampleModalCenter" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLongTitle">Add Products</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
      <form action="productadded" method="Post" enctype="multipart/form-data">
        @csrf
        <div class="form-group">
            <label for="name">Product Name</label>
            <input type="text" class="form-control" name="name" placeholder="Type Product Name...">
        </div>

        <div class="form-group">
            <label for="name">Price</label>
            <input type="number" class="form-control" name="Price" placeholder="Insert Price...">
        </div>
        <div class="form-group">
            <label for="name">Product Image</label>
            <input type="file" class="form-control" name="image" placeholder="Type Product Name...">
        </div>
        <div class="form-group">
            <label for="name">Product Category</label>
            <select name="category" class="form-control" id="">
                <option value="">Select Category</option>
            @foreach($category as $c)
                <option value="{{$c->Category_name}}">{{$c->Category_name}}</option>
            @endforeach
            </select>
        </div>
        <div class="form-group">
            <label for="name">Product Description</label>
            <textarea name="description"class="form-control" cols="30" rows="5"></textarea>
        </div>



      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <button type="submit" class="btn btn-success">Add Product</button>      </form>
      </div>
    </div>
  </div>
</div>

            </div>
            <!-- Card Body -->
            <div class="card-body">
                <div class="chart-pie pt-4 pb-2">
                    <canvas id="myPieChart"></canvas>
                </div>
                <div class="mt-4 text-center small">
                    <span class="mr-2">
                        <i class="fas fa-circle text-primary"></i> Direct
                    </span>
                    <span class="mr-2">
                        <i class="fas fa-circle text-success"></i> Social
                    </span>
                    <span class="mr-2">
                        <i class="fas fa-circle text-info"></i> Referral
                    </span>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- Content Row -->

<!-- End of Main Content -->
</div>
<!-- Footer -->
@endsection