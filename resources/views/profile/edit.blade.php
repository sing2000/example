@extends('layouts.master')
@section('body')
<div class="content-wrapper" style="min-height: 2171.6px;">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Profile</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">Profile</li>
            </ol>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    <section class="content">
      <div class="container-fluid">
        <div class="row">
          <!-- left column -->
          <div class="col-md-12">
            <!-- jquery validation -->
            <div class="card card-primary">
              <div class="card-header">
                <h3 class="card-title">Hello<small>Student</small></h3>
              </div>
              <!-- /.card-header -->
              <!-- form start -->
              
              <form id="quickForm" novalidate="novalidate" method="POST" action="/profile/{{ $profile->id }}">
              
            <!-- Equivalent to... -->
              @csrf
              @method('PUT')
                <div class="card-body">
                  <div class="form-group">
                    <label for="category">Category</label> 
                    <a  href="" data-toggle="tooltip" data-html="true" title="" data-original-title="<em>Add New</em>"><i class="cil-plus"></i></a>
                </div>
                <div class="card-body">
                  <div class="form-group">
                    <label for="exampleInputEmail1">Address</label>
                    <input type="text" name="address" class="form-control" id="exampleInputEmail1" value="{{$profile->address}}" required autofocus/>
                  </div>
                  <div class="form-group">
                    <label for="exampleInputPassword1">Gender</label>
                    <input type="text" name="gender" class="form-control" id="exampleInputPassword1" value="{{$profile->gender}}" required autofocus/>
                  </div>
                      <div class="form-group">
                        <label for="exampleInputEmail1">Phone</label>
                        <input type="text" name="phone" class="form-control" id="exampleInputEmail1" value="{{$profile->phone}}" required autofocus/>
                      </div>
                  
                  <div class="form-group">
                    <label for="exampleInputPassword1">Age</label>
                    <input type="text" name="age" class="form-control" value="{{$profile->age}}" id="exampleInputPassword1" placeholder="age" required>
                  </div>
                </div>
                <!-- /.card-body -->
                <div class="card-footer">
                  <button type="submit" class="btn btn-primary">Save</button>
                  <button type="/profile" class="btn btn-primary">Back</button>
                </div>
              </form>
            </div>
            <!-- /.card -->
            </div>
          <!--/.col (left) -->
          <!-- right column -->
          <div class="col-md-6">
          </div>
          <!--/.col (right) -->
        </div>
        <!-- /.row -->
      </div><!-- /.container-fluid -->
    </section>
    <!-- /.content -->
  </div>
@endsection