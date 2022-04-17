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
                        <form action="{{route('save-facility-hotel')}}" method="POST" enctype="multipart/form-data">
                            @csrf
                            <div class="form-group">
                                <label for="name">Nama Fasilitas</label>
                                <input type="text" class="form-control" placeholder="Contoh : Kolam Renang" id="name" name="name" value="{{ old('name') }}">
                            </div>
                            <div class="form-group">
                                <label for="desc">Deskripsi</label>
                                <input type="text" class="form-control" placeholder="Contoh : Kolam Renang Kedalaman 2 Meter" id="desc" name="desc" value="{{ old('desc') }}">
                            </div>
                            <div class="form-group">
                            <label for="exampleFormControlFile1">Gambar</label>
                            <input type="file" class="form-control-file" id="image" name="image">
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

@section('title','Fasilitas Hotel');

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
                          <th>Deskripsi</th>
                          <th>Gambar</th>
                          <th style="text-align:center">Aksi</th>
                        </tr>
                        @foreach($facilityhotels as $facilityhotel)
                        <tr>
                          <td>{{$loop->iteration}}</td>
                          <td>{{$facilityhotel->name}}</td>
                          <td>{{$facilityhotel->desc}}</td>
                          <td>
                            <img src="{{asset('storage/'. $facilityhotel->image)}}" width="200px" alt="">
                          </td>
                          <td style="text-align:center">
                            <button href="#" class="btn btn-warning" style="width:100px"><a href="{{route('edit-facility-hotel',+ $facilityhotel->id)}}" class='text-white'><i class="far fa-edit mr-3"></i>Edit</a></button>
                            <button  class="btn btn-danger" style="width:100px"> <a href="{{route('delete-facility-hotel',+ $facilityhotel->id)}}" class='text-white'>
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

