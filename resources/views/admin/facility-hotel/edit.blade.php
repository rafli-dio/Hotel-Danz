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
                   <form action="{{route('update-facility-hotel', + $facilityhotels->id)}}" method="POST">
                        @method('patch')
                        @csrf
                        <div class="form-group">
                            <label for="name">Nama Fasilitas</label>
                            <input type="text" class="form-control" placeholder="Contoh : Kolam" id="name" name="name" value="{{$facilityhotels->name}}">
                        </div>
                      </div>
                      <button type="submit" class="btn btn-primary">Ubah Data</button>
                    </form>
                  </div>
        </section>
@endsection