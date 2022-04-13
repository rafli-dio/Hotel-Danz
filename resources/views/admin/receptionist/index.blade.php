@extends('layouts.app')
@section('title','Tipe Kamar')

@section('main')
<div class="col-12 col-md-6 col-lg-12">
                <div class="card">
                  <div class="card-header justify-content-end">
                    <a href="/admin/receptionist/create" class="btn btn-primary">Tambah Resepsionis </a>
                  </div>
                  <div class="card-body p-0">
                    <div class="table-responsive">
                      <table class="table table-striped table-md">
                        <thead>
                          <th>No</th>
                          <th>Nama</th>
                          <th>Alamat</th>
                          <th style="text-align:center">Aksi</th>
                        </thead>
                        @foreach($receptionists as $receptionist)
                        <tr>
                          <td>{{$loop->iteration}}</td>
                          <td>{{$receptionist->name}}</td>
                          <td>{{$receptionist->address}}</td>
                          <td style="text-align:center">
                            <button href="#" class="btn btn-warning" style="width:100px"><a href="" class='text-white'><i class="far fa-edit mr-3"></i>Edit</a></button>
                            <button  class="btn btn-danger" style="width:100px"><a href="" class='text-white'>
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