@extends('layouts.app')
@section('title','Tipe Kamar')

@section('main')
<div class="col-12 col-md-6 col-lg-12">
                <div class="card">
                  <div class="card-header justify-content-end">
                    <a href="/admin/room-type/create" class="btn btn-primary">Tambah Tipe Kamar</a>
                  </div>
                  <div class="card-body p-0">
                    <div class="table-responsive">
                      <table class="table table-striped table-md">
                        <thead>
                          <th>No</th>
                          <th>Nama Kamar</th>
                          <th>Fasilitas Kamar</th>
                          <th style="text-align:center">Aksi</th>
                        </thead>
                        @foreach($roomtypes as $roomtype)
                        <tr>
                          <td>1</td>
                          <td>{{$roomtype->name}}</td>
                          <td>
                              <ul>
                                  <li>{{$roomtype->facilityroom1->name}}</li>
                                  <li>{{$roomtype->facilityroom2->name}}</li>
                                  <li>{{$roomtype->facilityroom3->name}}</li>
                              </ul>
                          </td>
                          <td style="text-align:center">
                            <button href="#" class="btn btn-warning" style="width:100px"><a href="{{route('edit-room-type',+ $roomtype->id)}}" class='text-white'><i class="far fa-edit mr-3"></i>Edit</a></button>
                            <button  class="btn btn-danger" style="width:100px"><a href="{{route('delete-room-type',+ $roomtype->id)}}" class='text-white'>
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