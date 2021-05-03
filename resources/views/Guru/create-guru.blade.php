

@extends('layouts.main')

@section('title', 'Tambah Data Guru')
    
@section('content')

    

<div class="container-fluid">  
      <div class="row mt-3">
      <div class="col-12 col-lg-12 col-xl-12">
      <h5>Tambah Data Guru</h5>
      </div>
      </div>

      <div class="row mt-3">
      <div class="col-12 col-lg-12 col-xl-12">    
      <div class="card">
      <div class="card-body">

        <form action="{{route('simpan-guru') }}" method="POST">
          {{ csrf_field() }}
            <div class="form-group">
            <label for="exampleInputEmail1" class="form-label text-black">Nama Sekolah</label>
            <select style="cursor:pointer;" class="form-control" id="tag_select" name="sekolah_id">
                  <option value="0" selected disabled> Pilih Sekolah</option>
                  <option value="0"> SDIT</option>
                  <option value="0"> SDIT</option>
            </select>
            </div>

            <div class="form-group">
            <label for="exampleInputEmail1" class="form-label text-black">Nama Guru</label>
            <input name="nama_sekolah" type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
            </div>

            <div class="form-group">
            <label for="exampleInputEmail1" class="form-label text-black">Jumlah Buku</label>
            <input name="nama_sekolah" type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
            </div>

            <div class="form-group">
            <label for="exampleInputEmail1" class="form-label text-black">Jumlah Artikel</label>
            <input name="nama_sekolah" type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
            </div>

            <div class="form-group">
            <label for="exampleInputEmail1" class="form-label text-black">Jumlah Point</label>
            <input name="nama_sekolah" type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
            </div>

            <div class="form-group">
            <label for="exampleInputEmail1" class="form-label text-black">Tanggal Input</label>
            <input name="nama_sekolah" type="date" class="form-" id="exampleInputEmail1" aria-describedby="emailHelp">
            </div>

            <div class="form-group">
                <button type="submit" class="btn btn-success">Simpan</button>
                  </div>
      </form>
      </div>

      </div>
      </div>      
      </div>
      </div>

    @endsection