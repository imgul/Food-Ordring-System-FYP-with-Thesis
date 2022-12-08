@extends('Admin.layout')
@section('title')
Add Categories
@endsection
@section('dashboard')
<div class="container-fluid">

<!-- Page Heading -->
<h1 class="h3 mb-2 text-gray-800">Add Category</h1>
<button type="button" class="btn btn-success" data-toggle="modal" data-target="#exampleModalCenter">
 Add Category
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
      <form action="categoryadded" method="Post" enctype="multipart/form-data">
        @csrf
        <div class="form-group">
            <label for="name">Category Name</label>
            <input type="text" class="form-control" name="name" placeholder="Type Product Name...">
        </div>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <button type="submit" class="btn btn-success">Add Category</button></form>
      </div>
    </div>
  </div>
</div>

<!-- DataTales Example -->
<br><div class="card shadow mb-4">
    <div class="card-header py-3">
        <h6 class="m-0 font-weight-bold text-primary">Categories</h6>
    </div>
    <div class="card-body">
        <div class="table-responsive">
            <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                <thead>
               
                </thead>
           
                    <tr>
                     
                        <th>Category</th>
                        <th>Add time</th>
                        <th>Delete</th>
                       
                    </tr>
        
                <tbody>
                    @foreach($category as $p)
                    <tr>
         
                       <td>{{$p->Category_name}}</td>
                       <td>{{$p->created_at}}</td>
                       <td><a href="{{url('deletecat/'.$p->id)}}" class="btn btn-danger">Delete</a></td>
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