@extends('layouts.app')
@section('title','Tambah Tipe Kamar')

@section('main')
<div class="row">
              <div class="col-12 col-md-6 col-lg-12">
                <div class="card">
                  <div class="card-body">
                    <form action="{{route('save-room-type')}}" method="POST">
                      @csrf
                      <div class="form-group">
                        <label>Nama Tipe</label>
                        <input type="text" class="form-control" id='name' name='name'>
                      </div>  
                      <div class="form-group">
                        <label>Fasilitas 1</label>
                        <select class="form-control" id="facilityroom1" name="facilityroom1">
                          <option>..</option>
                          @foreach($facilityrooms as $facilityroom)
                          <option value="{{$facilityroom->id}}"  {{old('facility_room1') == $facilityroom->id ? 'selected' : null}}>{{$facilityroom->name}}</option>
                          @endforeach
                        </select>
                      </div>
                      <div class="form-group">
                        <label>Fasilitas 2</label>
                        <select class="form-control" id="facilityroom2" name="facilityroom2">
                          <option value="">..</option>
                          @foreach($facilityrooms as $facilityroom)
                          <option value="{{$facilityroom->id}}" {{old('facility_room2') == $facilityroom->id ? 'selected' : null}}>{{$facilityroom->name}}</option>
                          @endforeach
                        </select>
                      </div>
                      <div class="form-group">
                        <label>Fasilitas 3</label>
                        <select class="form-control" id="facilityroom3" name="facilityroom3">
                          <option value="">..</option>
                          @foreach($facilityrooms as $facilityroom)
                          <option value="{{$facilityroom->id}}" {{old('facility_room3') == $facilityroom->id ? 'selected' : null}}>{{$facilityroom->name}}</option>
                          @endforeach
                        </select>
                      </div>
                      <button type="submit" class="btn btn-primary float-right">Tambah Data</button>
                    </form>
                </div>              
</div>
@endsection

