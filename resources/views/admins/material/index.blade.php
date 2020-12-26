@extends('layouts.admins')
@section('content')

<div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0 text-dark">Materials</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="{{ url('/admins') }}">Dashboard</a></li>
              <li class="breadcrumb-item active">Materials</li>
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
          <a href="#" class="btn btn-primary">Add New Student</a>
       </p>
    <table class="table tablr-bordered table-striped"> 
    <tr>
       <th>Material Code</th>
       <th>Material Name(en)</th>
       <th>Material Name(ar)</th>
       <th>Units</th>
       <th>Number of Groups</th>
       <th>Department ID</th>
       <th>Created at</th>
       <th>Updated at</th>
    </tr>
    @foreach($materials as $m)
       <tr> 
          <td>{{ $m->material_code}} </td>
          <td>{{ $m->material_name_en}} </td>
          <td>{{ $m->material_name_ar}} </td>
          <td>{{ $m->units}} </td>
          <td>{{ $m->num_of_groups}} </td>
          <td>{{ $m->department_id}} </td>
          <td>{{ $m->created_at}} </td>
          <td>{{ $m->updated_at}} </td>
          <td><a href="#" class="btn btn-info">Edit</a> <a href="#" class="btn btn-danger">Delete</a></td>
       </tr>
    @endforeach

    </table>
    </div>
</section>
@endsection
