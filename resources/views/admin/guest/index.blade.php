@extends('layouts.app')
@section('title','Kamar')

@section('main')
<div class="col-12 col-md-6 col-lg-12">
                <div class="card">
                  <div class="card-header justify-content-end">
                    <!-- <a href="/admin/guest/create" class="btn btn-primary">Tambah Tamu</a> -->
                  </div>
                  <div class="card-body p-0">
                    <div class="table-responsive">
                      <table class="table table-striped table-md">
                        <thead>
                          <th>No</th>
                          <th>Username</th>
                          <th>Email</th>
                          <th>Nama Panjang</th>
                          <th>No Telepon</th>
                          <th>Jenis Kelamin</th>
                          <th>Umur</th>
                          <th style="text-align:center">Aksi</th>
                        </thead>
                        @foreach($guests as $guest)
                        <tr>
                          <td>{{$loop->iteration}}</td>
                          <td>{{$guest->username}}</td>
                          <td>{{$guest->email}}</td>
                          <td>{{$guest->long_name}}</td>
                          <td>{{$guest->no_handphone}}</td>
                          <td>{{$guest->gender}}</td>
                          <td>{{$guest->age}}</td>
                          <td  style="text-align:center">
                            <button href="#" class="btn btn-warning" style="width:100px"><a href="" class='text-white'><i class="far fa-edit mr-3"></i>Edit</a></button>
                            <button  class="btn btn-danger" style="width:100px"> <a href="{{route('delete-guest',+ $guest->id)}}" class='text-white'>
                            <i class="far fa-trash-alt mr-2"></i>Hapus</a></button>
                          </td>
                        </tr>
                        @endforeach
                      </table>
                    </div>
                  </div>
                </div>
              </div>
@endsection