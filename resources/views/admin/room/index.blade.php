@extends('layouts.app')
@section('title','Kamar')

@section('main')
<div class="col-12 col-md-6 col-lg-12">
                <div class="card">
                  <div class="card-header justify-content-end">
                    <a href="/admin/room/create" class="btn btn-primary">Tambah Kamar</a>
                  </div>
                  <div class="card-body p-0">
                    <div class="table-responsive">
                      <table class="table table-striped table-md">
                        <tr>
                          <th>No</th>
                          <th>Tipe Kamar</th>
                          <th>Fasilitas Kamar</th>
                          <th>Jumlah Orang</th>
                          <th>Harga Kamar</th>
                          <th>Gambar</th>
                          <th>Aksi</th>
                        </tr>
                        <tr>
                          <td>1</td>
                          <td>Luxury</td>
                          <td>
                              <ul>
                                  <li>Kamar Mandi</li>
                                  <li>AC</li>
                                  <li>Wifi</li>
                              </ul>
                          </td>
                          <td>4</td>
                          <td>Rp.500.000</td>
                          <td><img src="/assets/image/room/superior-room.jpg" alt="" width='100px'></td>
                          <td><a href="#" class="btn btn-secondary">Detail</a></td>
                        </tr>
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