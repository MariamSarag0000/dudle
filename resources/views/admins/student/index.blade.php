@extends('layouts.admins')
@section('content')

<div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0 text-dark">Students</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="{{ url('/admins') }}">Dashboard</a></li>
              <li class="breadcrumb-item active">Students</li>
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
          <a href="{{ route('admins.students.create') }}" class="btn btn-primary">Add New Student</a>
       </p>
    <table class="table tablr-bordered table-striped"> 
    <tr>
       <th>Name(en)</th>
       <th>Name(ar)</th>
       <th>Email</th>
       <th>Phone</th>
       <th>Student ID</th>
       <th>Password</th>
       <th>GPA</th>
       <th>Units</th>
       <th>Address</th>
       <th>Image</th>
       <th>Birthdate</th>
       <th>Status</th>
       <th>Department ID</th>
       <th>Created at</th>
       <th>Updated at</th>
    </tr>
    @foreach($students as $s)
       <tr> 
          <td>{{ $s->name_en}} </td>
          <td>{{ $s->name_ar}} </td>
          <td>{{ $s->email}} </td>
          <td>{{ $s->phone}} </td>
          <td>{{ $s->student_id}} </td>
          <td>{{ $s->password}} </td>
          <td>{{ $s->gpa}} </td>
          <td>{{ $s->units}} </td>
          <td>{{ $s->address}} </td>
          <td>{{ $s->img}} </td>
          <td>{{ $s->birthdate}} </td>
          <td>{{ $s->status}} </td>
          <td>{{ $s->department_id}} </td>
          <td>{{ $s->created_at}} </td>
          <td>{{ $s->updated_at}} </td>
          <td><a href="{{ route('admins.students.edit', $s->id) }}" class="btn btn-info">Edit</a> 
              <a href="javascript:void(0)" onclick="$(this).parent().find('form').submit()" class="btn btn-danger">Delete</a>
              <form action="{{ route('admins.students.destroy',$s->id)}}" method="post">
                @method('DELETE')
                <input type="hidden" name="_token" value="{{ csrf_token() }}">
              </form>
          </td>
       </tr>
    @endforeach

    </table>
    </div>
</section>
@endsection
