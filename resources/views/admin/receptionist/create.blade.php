@extends('layouts.app')
@section('title','Tambah Staf Resepsionis')

@section('main')
<div class="row">
              <div class="col-12 col-md-6 col-lg-12">
                <div class="card">
                  <div class="card-body">
                    <form action="{{route('save-receptionist')}}" method="POST">
                      @csrf
                      <div class="form-group">
                        <label>Username</label>
                        <input type="text" class="form-control" id='name' name='username' value="{{ old('username') }}">
                      </div> 
                      <div class="form-group">
                        <label>Email</label>
                        <input type="text" class="form-control" id='email' name='email' value="{{ old('email') }}">
                      </div>
                      <div class="form-group">
                        <label>Password</label>
                        <input type="password" class="form-control" id='password' name='password' value="{{ old('password') }}">
                      </div> 
                      <!-- <div class="form-group" style="display:none;">
                        <label>Role</label>
                        <input type="texts" class="form-control" id='role' name='role'>
                      </div>  -->
                      <button type="submit" class="btn btn-primary float-right">Tambah Data</button>
                    </form>
                </div>              
</div>
@endsection

