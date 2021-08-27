@extends('layouts.master')
@section('title')
    Student
@endsection

@section('body')
<div class="content-wrapper">
    <!-- Main content -->
    <section class="content">
      @if(session('message'))
      <div class="row">
        <div class="col-md-12">
            <div class="alert  alert-success alert-dismissible fade show" role="alert">
                  {{ session('message') }}
                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                  <span aria-hidden="true">&times;</span>
              </button>
            </div>
        </div>
      </div>
    @endif 
        <div class="col-12">
            <div class="card">
              <div class="card-header"> 
                <a class="btn btn-sm btn-success" href="{{route('student.create')}}"><i class="fas fa-plus"> ADD STUDENT</i> </a>
              </div>
              <!-- /.card-header -->  
              <div class="card-body table-responsive p-0">
                <table class="table table-hover text-nowrap">
                  <thead>
                    <tr>
                      <th>ID</th>
                      <th>FULLNAME</th>
                      <th>LASTNAME</th>
                      <th>FIRSTNAME</th>
                      <th>EMAIL</th>
                      <th>EDIT</th>
                      <th>DELETE</th>
                    </tr>
                  </thead>
                  <tbody>
                      
                        @foreach ($data as $student)
                        <tr>
                        <td>{{$student->id}}</td>
                        <td>{{$student->username}}</td>
                        <td>{{$student->last_name}}</td>
                        <td>{{$student->first_name}}</td> 
                        <td>{{$student->email}}</td>
                        <td> <a class="btn btn-sm btn-primary" href="{{ url('/student/' . $student->id . '/edit') }}">Edit</a>
                        </td>
                        <td>
                          <form action="{{ route('student.destroy', $student->id) }}" id='delete_form' method="POST">
                            @csrf
                           @method('DELETE')
                          <div class="form-check">
                            <button class="btn btn-sm btn-primary"  type="submit"><i class="cil-trash">delele</i></button>
                          </div>
                        </form>
                      </tr> 
                        @endforeach       
                  </tbody>
                </table>
              </div>
            </div>
            <!-- /.card -->
          </div>
    </section>
    <!-- /.content -->
  </div>
@endsection