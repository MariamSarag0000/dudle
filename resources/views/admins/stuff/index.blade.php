@extends('layouts.admins')
@section('content')

<div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0 text-dark">Stuffs</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="{{ url('/admins') }}">Dashboard</a></li>
              <li class="breadcrumb-item active">Stuffs</li>
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
          <a href="#" class="btn btn-primary">Add New Stuff</a>
       </p>
    <table class="table table-bordered table-striped"> 
    <tr>
       <th>Name(en)</th>
       <th>Name(ar)</th>
       <th>Email</th>
       <th>Phone</th>
       <th>Stuff ID</th>
       <th>Password</th>
       <th>Address</th>
       <th>Image</th>
       <th>Birthdate</th>
       <th>Status</th>
       <th>Salary</th>
       <th>Created at</th>
       <th>Updated at</th>
    </tr>
    @foreach($stuffs as $st)
       <tr> 
          <td>{{ $st->name_en}} </td>
          <td>{{ $st->name_ar}} </td>
          <td>{{ $st->email}} </td>
          <td>{{ $st->phone}} </td>
          <td>{{ $st->stuff_id}} </td>
          <td>{{ $st->password}} </td>
          <td>{{ $st->address}} </td>
          <td>{{ $st->img}} </td>
          <td>{{ $st->birthdate}} </td>
          <td>{{ $st->status}} </td>
          <td>{{ $st->salary}} </td>
          <td>{{ $st->created_at}} </td>
          <td>{{ $st->updated_at}} </td>
          <td><a href="#" class="btn btn-info">Edit</a> <a href="#" class="btn btn-danger">Delete</a></td>
       </tr>
    @endforeach

    </table>
    </div>
</section>
@endsection
