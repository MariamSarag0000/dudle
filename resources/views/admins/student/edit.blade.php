@extends('layouts.admins')
@section('content')

<div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0 text-dark">Edit student</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="{{ url('/admins') }}">Dashboard</a></li>
              <li class="breadcrumb-item active">Edit student</li>
            </ol>
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>

<!-- /.content-header -->
    <!-- Main content -->
<section class="content">
    <div class="container-fluid">
       <form  method="Post" action="{{ route('admins.students.update',$student->id) }}">
         @method('PUT')
         <input type="hidden" name="_token" value="{{ csrf_token() }}" >

          <div class="form-group">
             <div class="row">
                <label class="col-md-3">Name(en)</label>
                <div class="col-md-6"><input type="text" name="name_en" class="form-control" value="{{ $student->name_en}}">
                @error('name_en')
                  <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                     </span>
                  @enderror
                </div>
                
                <div class="clearfix"></div>
             </div>
          </div>

          <div class="form-group">
             <div class="row">
                <label class="col-md-3">Name(ar)</label>
                <div class="col-md-6"><input type="text" name="name_ar" class="form-control" value="{{ $student->name_ar}}">
                @error('name_ar')
                  <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                     </span>
                  @enderror
                </div>
                <div class="clearfix"></div>
             </div>
          </div>

          <div class="form-group">
             <div class="row">
                <label class="col-md-3">Email</label>
                <div class="col-md-6"><input type="text" name="email" class="form-control" value="{{ $student->email}}">
                @error('email')
                  <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                     </span>
                  @enderror
                </div>
                <div class="clearfix"></div>
             </div>
          </div>

          <div class="form-group">
             <div class="row">
                <label class="col-md-3">Phone</label>
                <div class="col-md-6"><input type="text" name="phone" class="form-control" value="{{ $student->phone}}">
                @error('phone')
                  <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                     </span>
                  @enderror
                </div>
                <div class="clearfix"></div>
             </div>
          </div>

          <div class="form-group">
             <div class="row">
                <label class="col-md-3">Student ID</label>
                <div class="col-md-6"><input type="text" name="student_id" class="form-control" value="{{ $student->student_id}}">
                @error('student_id')
                  <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                     </span>
                  @enderror
                </div>
                <div class="clearfix"></div>
             </div>
         </div>

         <div class="form-group">
             <div class="row">
                <label class="col-md-3">Password</label>
                <div class="col-md-6"><input type="text" name="password" class="form-control" value="{{ $student->password}}">
                @error('password')
                  <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                     </span>
                  @enderror
                </div>
                <div class="clearfix"></div>
             </div>
         </div>

         <div class="form-group">
             <div class="row">
                <label class="col-md-3">GPA</label>
                <div class="col-md-6"><input type="text" name="gpa" class="form-control" value="{{ $student->gpa}}">
                @error('gpa')
                  <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                     </span>
                  @enderror
                </div>
                <div class="clearfix"></div>
             </div>
         </div>

         <div class="form-group">
             <div class="row">
                <label class="col-md-3">Units</label>
                <div class="col-md-6"><input type="text" name="units" class="form-control" value="{{ $student->units}}">
                @error('units')
                  <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                     </span>
                  @enderror
                </div>
                <div class="clearfix"></div>
             </div>
         </div>

         <div class="form-group">
             <div class="row">
                <label class="col-md-3">Address</label>
                <div class="col-md-6"><input type="text" name="address" class="form-control" value="{{ $student->address}}">
                @error('address')
                  <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                     </span>
                  @enderror
                </div>
                <div class="clearfix"></div>
             </div>
         </div>

         <div class="form-group">
             <div class="row">
                <label class="col-md-3">Image</label>
                <div class="col-md-6"><input type="text" name="img" class="form-control" value="{{ $student->img}}">
                @error('img')
                  <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                     </span>
                  @enderror
                </div>
                <div class="clearfix"></div>
             </div>  
         </div>

         <div class="form-group">
             <div class="row">
                <label class="col-md-3">Birthdate</label>
                <div class="col-md-6"><input type="text" name="birthdate" class="form-control" value="{{ $student->birthdate}}">
                @error('birthdate')
                  <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                     </span>
                  @enderror
                </div>
                <div class="clearfix"></div>
             </div>   
         </div>
 
         <div class="form-group">
             <div class="row">
                <label class="col-md-3">Status</label>
                <div class="col-md-6"><input type="text" name="status" class="form-control" value="{{ $student->status}}">
                @error('status')
                  <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                     </span>
                  @enderror
                </div>
                <div class="clearfix"></div>
             </div>
         </div>
            
         <div class="form-group">    
             <div class="row">
                <label class="col-md-3">Department ID</label>
                <div class="col-md-6"><input type="text" name="department_id" class="form-control" value="{{ $student->department_id}}">
                @error('department_id')
                  <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                     </span>
                  @enderror
                </div>
                <div class="clearfix"></div>
             </div>  
          </div>
          <div class="form-group">
             <input type="submit" class="btn btn-info" value="Save">
          </div>
        
       </form>
    </div>
</section>
@endsection
