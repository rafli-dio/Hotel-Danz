@extends('layouts.app');

@section('title','Fasilitas Hotel');

@section('main')
<section class="section">

          <div class="section-body">
            <div class="row">
              <div class="col-12 col-md-6 col-lg-12">
                <div class="card">
                  <div class="card-header">
                    <h4>Ubah Fasilitas</h4>
                  </div>
                  <div class="card-body">
                   <form action="{{route('update-facility-hotel', + $facilityhotels->id)}}" method="POST" enctype="multipart/form-data">
                        @method('patch')
                        @csrf
                        <div class="form-group">
                            <label for="name">Nama Fasilitas</label>
                            <input type="text" class="form-control" placeholder="Contoh : Kolam" id="name" name="name" value="{{$facilityhotels->name}}">
                        </div>
                        <div class="form-group">
                            <label for="name">Deskripsi</label>
                            <input type="text" class="form-control" placeholder="Contoh : Kolam Renang" id="desc" name="desc" value="{{$facilityhotels->desc}}">
                        </div>
                        <div class="form-group">
                            <label for="image">Gambar</label>
                            <input type="file" class="form-control" id="image" name="image" value="">
                        </div>
                        <div class="form-group">
                          <img src="{{asset('storage/'. $facilityhotels->image)}}" width="200px" style="margin-top:30px">
                        </div>
                      </div>
                      <button type="submit" class="btn btn-primary">Ubah Data</button>
                    </form>
                  </div>
        </section>
@endsection