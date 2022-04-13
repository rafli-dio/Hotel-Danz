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
                        <label>Nama</label>
                        <input type="text" class="form-control" id='name' name='name'>
                      </div> 
                      <div class="form-group">
                        <label>Alamat</label>
                        <input type="text" class="form-control" id='address' name='address'>
                      </div> 
                      <button type="submit" class="btn btn-primary float-right">Tambah Data</button>
                    </form>
                </div>              
</div>
@endsection

