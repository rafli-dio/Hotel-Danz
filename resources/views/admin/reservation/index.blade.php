<div class="modal fade" id="formModal" tabindex="-1" role="dialog" aria-labelledby="judulModal" aria-hidden="true" >
                <div class="modal-dialog" role="document">
                    <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="judulModal">Filter Data</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        <form action="{{url('admin/reservation')}}" method="GET">
                          <div class="form-group">
                            <label for="name">Cari Tanggal Check in</label>
                            <input class="form-control" type="date" name="check_in" id="check_in">
                          </div>
                          <div class="form-group">
                            <label for="name">Cari Nama</label>
                            <input class="form-control" type="text" name="guest" id="guest" placeholder="Masukan Nama">
                          </div>
                          </div>
                          <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                            <button type="submit" class="btn btn-primary">Cari Data</button>
                            </form>
                          </div>
                    </div>
                    </div>
                </div>
        </div>
@extends('layouts.app')
@section('title','Kamar')

@section('main')
<div class="col-12 col-md-6 col-lg-12">
                  <div class="card">
                      <div class="card-header justify-content-end">
                      <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#formModal">
                        Filter
                      </button>
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
                          <td>{{$reservation->check_in}}</td>
                          <td>{{$reservation->check_out}}</td>
                        </tr>
                        @endforeach
                      </table>
                    </div>
                  </div>

                </div>
              </div>
@endsection