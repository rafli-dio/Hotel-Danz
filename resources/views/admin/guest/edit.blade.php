@extends('layouts.app')
@section('title',' Edit Tamu')
@section('main')
<div class="row">
              <div class="col-12 col-md-6 col-lg-12">
                <div class="card">
                  <div class="card-body">
                    <form action="{{route('update-guest', + $guests->id)}}" method="POST">
                        @method('patch')
                        @csrf
                      <div class="form-group">
                        <label>Username</label>
                        <input type="text" class="form-control" id="username" name="username" value="{{$guests->username}}">
                      </div>
                      <div class="form-group">
                        <label>Email</label>
                        <input type="text" class="form-control" id="email" name="email" value="{{$guests->email}}">
                      </div>
                      <div class="form-group" style="display:none;">
                        <label>Password</label>
                        <input type="text" class="form-control" id="password" name="password" value="{{$guests->password}}">
                      </div>
                      <div class="form-group" style="display:none;">
                        <label>Role</label>
                        <input type="text" class="form-control" id="role" name="role" value="{{$guests->role}}">
                      </div>
                      <div class="form-group">
                        <label>Nama Panjang</label>
                        <input type="text" class="form-control" id="long_name" name="long_name" value="{{$guests->long_name}}">
                      </div>
                      <div class="form-group">
                        <label>No Telepon</label>
                        <input type="text" class="form-control" id="no_handphone" name="no_handphone" value="{{$guests->no_handphone}}">
                      </div>
                      <div class="form-group">
                        <label>Jenis Kelamin</label>
                        <input type="text" class="form-control" id="gender" name="gender" value="{{$guests->gender}}">
                      </div>
                      <div class="form-group">
                        <label>Umur</label>
                        <input type="text" class="form-control" id="age" name="age" value="{{$guests->age}}">
                      </div>
                      <button type="submit" class="btn btn-primary float-right">Ubah Data</button>
                    </form>
                  </div>
                </div>
@endsection