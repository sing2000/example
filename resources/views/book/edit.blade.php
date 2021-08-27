@extends('layouts.master')
@section('body')
<div class="content-wrapper" style="min-height: 2171.6px;">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Book</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
            </ol>
          </div>
        </div>
      </div>
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
                <h3 class="card-title">ADD BOOK</h3>
              </div>
              <!-- /.card-header -->
              <form id="quickForm" novalidate="novalidate" method="POST" action="/book/{{ $book->id }}">             
            <!-- Equivalent to... -->
              @csrf
              @method('PUT')
                  <div class="form-group">
                    <label for="exampleInputPassword1">name</label>
                    <input type="text" name="name" class="form-control" value="{{$book->name}}" id="exampleInputPassword1" value="{{$book->name}}" required>
                  </div>
                  <div class="form-group">
                    <label for="exampleInputPassword1">Publisher</label>
                    <input type="text" name="publisher" class="form-control" id="exampleInputPassword1" value="{{$book->publisher}}" required>
                  </div>
                </div>
                <!-- /.card-body -->
                <div class="card-footer">
                  <button type="submit" class="btn btn-primary">Save</button>
                  <button type="/book" class="btn btn-primary">Back</button>
                </div>
              </form>
            </div>
            <!-- /.card -->
            </div>
          <div class="col-md-6">
          </div>
        </div>
        <!-- /.row -->
      </div><!-- /.container-fluid -->
    </section>
    <!-- /.content -->
  </div>
@endsection