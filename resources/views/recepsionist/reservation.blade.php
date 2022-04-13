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
                          <th>Nama</th>
                          <th>Email</th>
                          <th>No Telepon</th>
                          <th>Nama Panjang</th>
                          <th>Check in</th>
                          <th>Check out</th>
                        </thead>
                        @foreach($reservations as $reservation)
                        <tr>
                          <td>{{$loop->iteration}}</td>
                          <td>{{$reservation->room->roomtype->name}}</td>
                          <td>{{$reservation->name}}</td>
                          <td>{{$reservation->email}}</td>
                          <td>{{$reservation->no_handphone}}</td>
                          <td>{{$reservation->long_name}}</td>
                          <td>{{$reservation->check_in}}</td>
                          <td>{{$reservation->check_out}}</td>
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