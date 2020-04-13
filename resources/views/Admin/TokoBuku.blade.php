@extends('Layout.layouts')

@section('content')
<div class="main-content">
        <div class="container-fluid">
          <!-- OVERVIEW -->
          <div class="panel panel-headline">
            <div class="panel-heading">
              <h3 class="panel-title">Beranda</h3>
              <p class="panel-subtitle">Hari/Tanggal : Jumat, 27 Maret 2020</p>
            </div>
            <div class="panel-body">
              <div class="col-lg-12">
                        <div class="row">
            <div class="col-md-6">
              <!-- RECENT PURCHASES -->
              <div class="panel">
                <div class="panel-heading">
                  <h3 class="panel-title">BIODATA</h3>
                </div>
                <div class="panel-body">
                                    <p>NAMA     : Kadek Aprilia Cahyani</p>
                                    <P>NIM      : 1815051019</P>
                                    <P>KELAS    : PTI 4D</P>
                                    <P>PRODI    : Pendidikan Teknik Informatika</P>
                                    <P>JURUSAN  : Teknik Informatika</P>
                                    <P>FAKULTAS : Teknik dan Kejuruan</P>
                                </div>
                
              </div>
              <!-- END RECENT PURCHASES -->
            </div>
            <div class="col-md-6">
              <!-- MULTI CHARTS -->
              <div class="panel">
                <div class="panel-heading">
                  <h3 class="panel-title">STUDI KASUS</h3>
                </div>
                <div class="panel-body">
                                    <p>JUDUL        : Sistem Pelayanan Toko Buku Rahayu</p>
                                    <p>PENJELASAN   : Sistem ini memudahkan pembeli untuk membeli dengan mencari buku yang disukai dan memudahkan penjual dalam memanajemen penjualan</p>
                
                </div>
              </div>
              <!-- END MULTI CHARTS -->
            </div>
          </div>
          <div class="col-lg-12">
                <table class="table table-bordered">
                  <thead>
                      <tr><th>No</th><th>Kategori</th><th>Kode Buku</th><th>Nama Buku</th><th>Nama Pengarang</th><th>Harga</th></tr>
                  </thead>
                  <tbody>
                    @foreach ($TokoBuku as $in=> $val)
                        <tr><td></td><td>{{$val->kategori}}</td><td>{{$val->kode_buku}}</td><td>{{$val->nama_pengarang}}</td><td>{{$val->harga}}</td></tr>
                    @endforeach
                  </tbody>
                </table>
          </div>
          </div>
            </div>
          </div>
          <!-- END OVERVIEW -->
          
          
          
        </div>
      </div>
@endsection('content')