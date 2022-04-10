@extends('layouts.app')
@section('title','Tambah Tipe Kamar')

@section('main')

<div class="col-12 col-md-6 col-lg-12">
                <div class="card">
                  <div class="card-body">
                    <form action="">
                      <div class="form-group">
                        <label>Tipe Kamar</label>
                        <input type="text" class="form-control">
                      </div>
                      <div class="form-group">
                        <label>Jumlah Orang</label>
                        <input type="text" class="form-control">
                      </div>
                      <div class="form-group">
                        <label>Harga Kamar</label>
                        <div class="input-group">
                          <div class="input-group-prepend">
                            <div class="input-group-text">
                              Rp.
                            </div>
                          </div>
                          <input type="text" class="form-control currency">
                        </div>
                      </div>
                      <div class="form-group">
                        <label for="exampleFormControlFile1">Gambar</label>
                        <input type="file" class="form-control-file" id="exampleFormControlFile1">
                      </div>
                      <button type="submit" class="btn btn-primary float-right">Tambah Data</button>
                    </form>
                  </div>
                </div>
@endsection