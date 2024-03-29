@extends('layouts.app')
@section('title','Kamar')

@section('main')
<div class="col-12 col-md-6 col-lg-12">
                <div class="card">
                  <div class="card-header justify-content-end">
                    <a href="/admin/room/create" class="btn btn-primary">Tambah Kamar</a>
                  </div>
                  <div class="card-body p-0">
                    <div class="table-responsive">
                      <table class="table table-striped table-md">
                        <thead>
                          <th>No</th>
                          <th>Tipe Kamar</th>
                          <th>Fasilitas Kamar</th>
                          <th>Jumlah Orang</th>
                          <th>No Kamar</th>
                          <th>Gambar</th>
                          <th>Harga Kamar</th>
                          <th style="text-align:center">Aksi</th>
                        </thead>
                        @foreach($rooms as $room)
                        <tr>
                          <td>{{$loop->iteration}}</td>
                          <td>{{$room->roomtype->name}}</td>
                          <td>
                              <ul>
                                  <li>{{$room->roomtype->facilityroom1->name}}</li>
                                  <li>{{$room->roomtype->facilityroom2->name}}</li>
                                  <li>{{$room->roomtype->facilityroom3->name}}</li>
                              </ul>
                          </td>
                          <td style="text-align:center">{{$room->room_people}}</td>
                          <td style="text-align:center">{{$room->room_no}}</td>
                          <td>
                            <img src="{{asset('storage/'. $room->room_image)}}" width="100px">
                          </td>
                          <td>Rp.{{$room->price}}</td>
                          <td  style="text-align:center">
                            <button href="#" class="btn btn-warning" style="width:100px"><a href="{{route('edit-room', + $room->id)}}" class='text-white'><i class="far fa-edit mr-3"></i>Edit</a></button>
                            <button  class="btn btn-danger" style="width:100px"> <a href="{{route('delete-room',+ $room->id)}}" class='text-white'>
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