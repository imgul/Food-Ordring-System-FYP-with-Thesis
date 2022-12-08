@extends('Admin.layout')
@section('title')
Add Produts
@endsection
@section('dashboard')
<div class="container-fluid">

<!-- Page Heading -->
<h1 class="h3 mb-2 text-gray-800">Add Products</h1>
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

<!-- DataTales Example -->
<br><div class="card shadow mb-4">
    <div class="card-header py-3">
        <h6 class="m-0 font-weight-bold text-primary">DataTables Example</h6>
    </div>
    <div class="card-body">
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
</div>

</div>
<!-- /.container-fluid -->

</div>
@endsection