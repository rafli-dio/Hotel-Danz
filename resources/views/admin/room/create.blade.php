@extends('layouts.app')
@section('title',' Tambah Kamar')
@section('main')
<div class="row">
              <div class="col-12 col-md-6 col-lg-12">
                <div class="card">
                  <div class="card-body">
                    <form action="{{route('save-room')}}" method="POST" enctype="multipart/form-data">
                      @csrf
                      <div class="form-group">
                      <label for="roomtype">Tipe Kamar: </label>
                      <select class="form-control" name="roomtype" id="roomtype">
                        <option value="">Masukan Tipe Kamar</option>
                        @foreach($roomtypes as $roomtype)
                        <option value="{{$roomtype->id}}"   {{old('roomtype') == $roomtype->id ? 'selected' : null}}>{{$roomtype->name}}</option>
                        @endforeach
                      </select>
                      </div>
                      <div class="form-group">
                        <label>Jumlah Orang</label>
                        <input type="number" class="form-control" id="room_people" name="room_people">
                      </div>
                      <div class="form-group">
                        <label>Nomor Kamar</label>
                        <input type="number" class="form-control" id="room_no" name="room_no">
                      </div>
                      <div class="form-group">
                        <label for="exampleFormControlFile1">Gambar</label>
                        <input type="file" class="form-control-file" id="room_image" name="room_image">
                      </div>
                      <div class="form-group">
                        <label>Harga Kamar</label>
                          <input type="text" class="form-control currency" id="price" name="price">
                      </div>
                      <button type="submit" class="btn btn-primary float-right">Tambah Data</button>
                    </form>
                  </div>
                </div>
@endsection
