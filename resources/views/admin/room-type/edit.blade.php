@extends('layouts.app');

@section('title','Edit Tipe Kamar');

@section('main')
<section class="section">

          <div class="section-body">
            <div class="row">
              <div class="col-12 col-md-6 col-lg-12">
                <div class="card">
                  <div class="card-header">
                    <h4>Ubah Tipe Kamar</h4>
                  </div>
                  <div class="card-body">
                   <form action="{{route('update-room-type', + $roomtypes->id)}}" method="POST">
                        @method('patch')
                        @csrf
                      <div class="form-group">
                        <label>Nama Tipe</label>
                        <input type="text" class="form-control" id='name' name='name' value="{{$roomtypes->name}}">
                      </div>  
                      <div class="form-group">
                        <label>Fasilitas 1</label>
                        <select class="form-control" name="facilityroom1_id" id="facilityroom1_id">
                          <option value="{{ $roomtypes->facilityroom1->id }}">{{ $roomtypes->facilityroom1->name }}</option>
                            @foreach($facilityrooms1 as $facilityroom)
                            <option value="{{$facilityroom->id}}">{{$facilityroom->name}}</option>
                            @endforeach
                        </select>
                      </div>
                      <div class="form-group">
                        <label>Fasilitas 2</label>
                        <select class="form-control" name="facilityroom2_id" id="facilityroom2_id">
                          <option value="{{ $roomtypes->facilityroom2->id }}">{{ $roomtypes->facilityroom2->name }}</option>
                            @foreach($facilityrooms2 as $facilityroom)
                            <option value="{{$facilityroom->id}}">{{$facilityroom->name}}</option>
                            @endforeach
                        </select>
                      </div>
                      <div class="form-group">
                        <label>Fasilitas 3</label>
                        <select class="form-control" name="facilityroom3_id" id="facilityroom3_id">
                          <option value="{{ $roomtypes->facilityroom3->id }}">{{ $roomtypes->facilityroom3->name }}</option>
                            @foreach($facilityrooms3 as $facilityroom)
                            <option value="{{$facilityroom->id}}">{{$facilityroom->name}}</option>
                            @endforeach
                        </select>
                      </div>
                      <button type="submit" class="btn btn-primary">Ubah Data</button>
                    </form>
                  </div>
        </section>
<!-- @endsection -->