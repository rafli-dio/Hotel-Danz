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
                        <tr>
                          <th>No</th>
                          <th>Nama Kamar</th>
                          <th>Fasilitas Kamar</th>
                          <th>Aksi</th>
                        </tr>
                        @foreach($roomtypes as $roomtype)
                        <tr>
                          <td>1</td>
                          <td>{{$roomtype->name}}</td>
                          <td>
                              <ul>
                                  <li>{{$roomtype->facility_room1->name}}</li>
                                  <li>{{$roomtype->facility_room2->name}}</li>
                                  <li>{{$roomtype->facility_room3->name}}</li>
                              </ul>
                          </td>
                          <td class="text-center">
                            <button href="#" class="btn btn-warning" style="width:100px"><a href="{{route('edit-room-type',+ $roomtype->id)}}" class='text-white'><i class="far fa-edit mr-3"></i>Edit</a></button>
                            <button  class="btn btn-danger" style="width:100px"><a href="{{route('delete-room-type',+ $roomtype->id)}}" class='text-white'>
                            <i class="far fa-trash-alt mr-2"></i>Hapus</a></button>
                          </td>
                        </tr>
                        @endforeach
                      </table>
                    </div>
                  </div>
                  <div class="card-footer text-right">
                    <nav class="d-inline-block">
                      <ul class="pagination mb-0">
                        <li class="page-item disabled">
                          <a class="page-link" href="#" tabindex="-1"><i class="fas fa-chevron-left"></i></a>
                        </li>
                        <li class="page-item active"><a class="page-link" href="#">1 <span class="sr-only">(current)</span></a></li>
                        <li class="page-item">
                          <a class="page-link" href="#">2</a>
                        </li>
                        <li class="page-item"><a class="page-link" href="#">3</a></li>
                        <li class="page-item">
                          <a class="page-link" href="#"><i class="fas fa-chevron-right"></i></a>
                        </li>
                      </ul>
                    </nav>
                  </div>
                </div>
              </div>
@endsection