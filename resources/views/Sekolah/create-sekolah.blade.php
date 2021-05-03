

@extends('layouts.main')

@section('title', 'Tambah Data Sekolah')
    
@section('content')

    

<div class="container-fluid">  
      <div class="row mt-3">
      <div class="col-12 col-lg-12 col-xl-12">
      <h5>Tambah Data Sekolah</h5>
      </div>
      </div>

      <div class="row mt-3">
      <div class="col-12 col-lg-12 col-xl-12">    
      <div class="card">
     
            
      <div class="card-body">
 

        <form action="{{route('simpan-sekolah') }}" method="POST">
          {{ csrf_field() }}

            <div class="form-group">
            <label>Nama Sekolah</label>
            <input name="nama_sekolah" id="nama_sekolah" type="text" class="form-control">
            </div>

            <div class="form-group">
              <label>Pilih Jenjang</label>
              <select style="cursor:pointer;" class="form-control" id="jenjang" name="jenjang">
                <option value="0" selected disabled> Pilih Jenjang</option>
                @foreach ($level as $item)
                <option value="{{$item->id_level}}">{{$item->level}}</option>
                @endforeach
              </select>
            </div>
  
            <div class="form-group">
            <label>Email </label>
            <input name="email" type="text" class="form-control" id="email" aria-describedby="emailHelp">
            </div>

            <div class="form-group">
            <label>Alamat</label>
            <input name="alamat" type="text" class="form-control" id="alamat" aria-describedby="emailHelp">
            </div>

            <div class="form-group">
            <label>No Telepon</label>
            <input name="no_telp" type="text" class="form-control" id="no_telp" aria-describedby="emailHelp">
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