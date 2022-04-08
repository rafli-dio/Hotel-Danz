<div class="modal fade" id="formModal" tabindex="-1" role="dialog" aria-labelledby="judulModal" aria-hidden="true" >
                <div class="modal-dialog" role="document">
                    <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="judulModal">Tambah Fasilitas</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        <form action="{{route('save-facility-room')}}" method="POST">
                        @csrf
                        <div class="form-group">
                            <label for="name">Nama Fasilitas</label>
                            <input type="text" class="form-control" placeholder="Contoh : Wifi" id="name" name="name" value="{{ old('name') }}">
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                        <button type="submit" class="btn btn-primary">Tambah Data</button>
                        </form>
                    </div>
                    </div>
                </div>
        </div>
@extends('layouts.app');

@section('title','Fasilitas Kamar');

@section('main')
<div class="col-12 col-md-6 col-lg-12">
                <div class="card">
                  <div class="card-header justify-content-end">
                  <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#formModal">
                    Tambah Fasilitas
                </button>
                  </div>
                  <div class="card-body p-0">
                    <div class="table-responsive">
                      <table class="table table-striped table-md">
                        <tr>
                          <th>No</th>
                          <th>Nama Fasilitas</th>
                          <th style="text-align:center">Aksi</th>
                        </tr>
                        @foreach($facilityrooms as $facilityroom)
                        <tr>
                          <td>{{$loop->iteration}}</td>
                          <td>{{$facilityroom->name}}</td>
                          <td style="text-align:center">
                            <button href="#" class="btn btn-warning" style="width:100px"><a href="{{route('edit-facility-room',+ $facilityroom->id)}}" class='text-white'><i class="far fa-edit mr-3"></i>Edit</a></button>
                            <button  class="btn btn-danger" style="width:100px"> <a href="{{route('delete-facility-room',+ $facilityroom->id)}}" class='text-white'>
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

