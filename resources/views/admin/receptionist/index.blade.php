@extends('layouts.app')
@section('title','Resepsionis')

@section('main')
<div class="col-12 col-md-6 col-lg-12">
                <div class="card">
                  <div class="card-header justify-content-end">
                    <a href="/admin/receptionist/create" class="btn btn-primary">Tambah Resepsionis </a>
                  </div>
                  <div class="card-body p-0">
                    <div class="table-responsive">
                      <table class="table table-striped table-md">
                        <thead>
                          <th>No</th>
                          <th>Username</th>
                          <th>Email</th>
                          <th style="text-align:center">Aksi</th>
                        </thead>
                        @foreach($users as $receptionist)
                        <tr>
                          <td>{{$loop->iteration}}</td>
                          <td>{{$receptionist->username}}</td>
                          <td>{{$receptionist->email}}</td>
                          <td style="text-align:center">
                            <button href="#" class="btn btn-warning" style="width:100px"><a href="{{route('edit-receptionist',+ $receptionist->id)}}" class='text-white'><i class="far fa-edit mr-3"></i>Edit</a></button>
                            <button  class="btn btn-danger" style="width:100px"><a href="{{route('delete-recepsionist',+ $receptionist->id)}}" class='text-white'>
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