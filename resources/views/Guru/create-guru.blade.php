

@extends('layouts.main')

@section('title', 'Tambah Data Guru')
    
@section('content')

    

<div class="row m-2">
  <!-- /# column -->
  <div class="col-lg-12">
      <div class="card">
          <div class="card-body">
          
              <h4 class="card-title">Tambah Form</h4>
              <div class="basic-form">
                <form action="{{route('simpan-guru') }}" method="POST">
                  {{ csrf_field() }}
                      
                      <!-- <div class="form-group col-6">
                          <label>User :</label>
                          <select type="text" name="userId" class="form-control input-flat" placeholder="" value="">
                              <option>1</option>
                          </select>
                          <span class="text-danger">error</span>
                      </div> -->
                      
                      @include('Guru.form')
                      <button type="submit" class="btn btn-primary">Submit</button>
                      @csrf
                  </form>
              </div>
          </div>
      </div>
      <!-- /# card -->
  </div>
</div>


    @endsection



