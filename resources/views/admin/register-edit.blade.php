@extends('layouts.master')

@section('title')
Edit Registered Users
@endsection

@section('content')
<div class="container">
  <div class="row">
    <div class="col-md-12">
      <div class="card">
        <div class="card-header">
            <h3>Edit or Delete Registered User</h3>
        </div>
        <div class="card-body">
        <div class="row">
           <div class="col-md-6">
             <form action="/role-register-update/{{ $users->id }}" method="post">
             {{ csrf_field() }}
             {{ method_field('PUT') }}
          	<div class=="form-group">
          		<label>Name</label>
          		<input type="text" name="name" value="{{ $users->name }}" class="form-control">
          	</div>
            <div class=="form-group">
          		<label>Mobile Number</label>
          		<input type="tel" name="phone" value="{{ $users->phone }}" class="form-control">
          	</div>
            <div class=="form-group">
          		<label>Email ID</label>
          		<input type="text" name="email" value="{{ $users->email }}" class="form-control">
          	</div>
          	<div class="form-group">
          		<label>Change role</label>
          		<select name="usertype"  class="form-control">
          			<option value="admin">Admin</option>
          			<option value="normal user">Normal User</option>
          		</select>
        </div>
        <button type="submit" class="btn btn-success">Update</button>
        <a href="/role-register" class="btn btn-danger">Cancel</a>
        </form>
        </div>
        </div>
        </div>
        </div>
        </div>
        </div>
        </div>
@endsection

@section('scripts')
@endsection
