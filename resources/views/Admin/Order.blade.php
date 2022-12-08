@extends('Admin.layout')
@section('title')
Add Produts
@endsection
@section('dashboard')
<div class="container-fluid">

<!-- Page Heading -->
<h1 class="h3 mb-2 text-gray-800">Orders Management</h1>

<!-- DataTales Example -->
<br><div class="card shadow mb-4">
    <div class="card-header py-3">
        <h6 class="m-0 font-weight-bold text-primary">Manage Orders</h6>
    </div>
    <div class="card-body">
        <div class="table-responsive">
            <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                <thead>
               
                </thead>
      
                    <tr>
                   
                        <th>Customer_Name</th>
                        <th>Email</th>
                        <th>Phone</th>
                        <th>Product_name</th>
                        <th>Price</th>
                        <th>Quantity</th>
                        <th>Address</th>
                        <th>Add time</th>
                        <th>Delete</th>
                       
                    </tr>
      
                <tbody>
                    @foreach($orders as $p)
                    <tr>
                       <td>{{$p->Name}}</td>
                       <td>{{$p->Phone}}</td>
                       <td>{{$p->Email}}</td>
                       <td>{{$p->Product_name}}</td>
                       <td>{{$p->Price}}</td>
                       <td>{{$p->Quantity}}</td>
                       <td>{{$p->Address}}</td>
                       <td>{{$p->created_at}}</td>
                       <td><a href="{{url('deleteorders/'.$p->id)}}" class="btn btn-danger">Delete</a></td>
                    </tr>
                  @endforeach
                </tbody>
            </table>
        </div>
    </div>
</div>

</div>
<!-- /.container-fluid -->

</div>
@endsection