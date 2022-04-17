@extends('layouts.app');

@section('title','Edit Resepsionis');

@section('main')
<section class="section">

          <div class="section-body">
            <div class="row">
              <div class="col-12 col-md-6 col-lg-12">
                <div class="card">
                  <div class="card-header">
                    <h4>Ubah Resepsionis</h4>
                  </div>
                  <div class="card-body">
                   <form action="{{route('update-receptionist', + $users->id)}}" method="POST">
                        @method('patch')
                        @csrf
                      <div class="form-group">
                        <label>Nama</label>
                        <input type="text" class="form-control" id='username' name='username' value="{{$users->username}}">
                      </div>  
                      <div class="form-group">
                        <label>Email</label>
                        <input type="text" class="form-control" id='email' name='email' value="{{$users->email}}">
                      </div>  
                      <div class="form-group">
                        <label>Password</label>
                        <input type="password" class="form-control" id='password' name='password' value="{{$users->password}}">
                      </div>  
                      <button type="submit" class="btn btn-primary">Ubah Data</button>
                    </form>
                  </div>
        </section>
@endsection