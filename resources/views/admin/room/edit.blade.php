@extends('layouts.app')
@section('title',' Edit Kamar')
@section('main')
<div class="row">
              <div class="col-12 col-md-6 col-lg-12">
                <div class="card">
                  <div class="card-body">
                    <form action="{{route('update-room', + $rooms->id)}}" method="POST">
                        @method('patch')
                        @csrf
                      <div class="form-group">
                      <label for="roomtype">Tipe Kamar: </label>
                      <select class="form-control" name="roomtype_id" id="roomtype_id">
                        <option value="{{$rooms->roomtype->id}}">{{$rooms->roomtype->name}}</option>
                        @foreach($roomtypes as $roomtype)
                        <option value="{{$roomtype->id}}">{{$roomtype->name}}</option>
                        @endforeach
                      </select>
                      </div>
                      <div class="form-group">
                        <label>Jumlah Orang</label>
                        <input type="number" class="form-control" id="room_people" name="room_people" value="{{$rooms->room_people}}">
                      </div>
                      <div class="form-group">
                        <label>Nomor Kamar</label>
                        <input type="number" class="form-control" id="room_no" name="room_no" value="{{$rooms->room_no}}">
                      </div>
                      <div class="form-group">
                        <label>Harga Kamar</label>
                          <input type="text" class="form-control currency" id="price" name="price" value="{{$rooms->price}}">
                      </div>
                      <button type="submit" class="btn btn-primary float-right">Ubah Data</button>
                    </form>
                  </div>
                </div>
@endsection
