@extends('layouts.admins')
@section('content')

<div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0 text-dark">Add</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="{{ url('/admins') }}">Dashboard</a></li>
              <li class="breadcrumb-item active">Add</li>
            </ol>
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>

<!-- /.content-header -->
    <!-- Main content -->
<section class="content">
    <div class="container-fluid">
       <form  method="post" action="#">
         <input type="hidden" name="_token" value="{{ csrf_token() }}" >
          <div class="form-group">

             <div class="row">
                <label class="col-md-3">Student ID</label>
                <div class="col-md-6"><input type="text" name="name_en" class="form-control"></div>
                <div class="clearfix"></div>
             </div>

             <div class="row">
                <label class="col-md-3">Material Code</label>
                <div class="col-md-6"><input type="text" name="name_ar" class="form-control"></div>
                <div class="clearfix"></div>
             </div>
             
             </div>  
          </div>
          <div class="form-group">
             <input type="submit" class="btn btn-info" value="Save">
          </div>
       </form>
    </div>
</section>
@endsection
