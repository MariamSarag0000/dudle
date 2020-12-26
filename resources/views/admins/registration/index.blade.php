@extends('layouts.admins')
@section('content')

<div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0 text-dark">Registration</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="{{ url('/admins') }}">Dashboard</a></li>
              <li class="breadcrumb-item active">Registration</li>
            </ol>
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>

<!-- /.content-header -->
    <!-- Main content -->
<section class="content">
    <div class="container-fluid">
       <p> 
          <a href="{{route('admins.registrations.create')}}" class="btn btn-primary">ِAdd</a>
       </p>
    <table class="table tablr-bordered table-striped"> 
    <tr>
       
       <th>Student ID</th>
       <th>Material Code</th>
       <th>Created at</th>
       <th>Updated at</th>
    </tr>
    @foreach($registrations as $r)
       <tr> 
          <td>{{ $r->student_id}} </td>
          <td>{{ $r->material_code}} </td>
          <td>{{ $r->created_at}} </td>
          <td>{{ $r->updated_at}} </td>
          <td><a href="#" class="btn btn-info">Edit</a> <a href="#" class="btn btn-danger">Delete</a></td>
       </tr>
    @endforeach

    </table>
    </div>
</section>
@endsection