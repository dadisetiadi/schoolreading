



@extends('layouts.main')

@section('title', 'Data Guru')
    
@section('content')


 


       
         
        <div class="row mt-3">
        <div class="col-12 col-lg-12 col-xl-12">
        <div class="card">
        <div class="card-body">
        
        <div class="basic-form">
        <form class="form-inline">
        <h3 class="card-title ">Data Guru </h3>
        <a href="{{route ('create-guru') }}" class="btn btn-success ml-3">Tambah Data Guru </a>
        </form>
        </div>

			  <div class="table-responsive">
        <table class="table mt-3"> 
          <thead>
            <tr>

            <th scope="col">No</th>
            <th scope="col">Nama Guru</th>
            <th scope="col">Nama Sekolah</th>
            <th scope="col">Alamat</th>
            <th scope="col">No Telp</th>
          
            </tr>
          </thead>
          
          <tbody>
        

          </tbody>

               
          </table>
          </div>
          </div>
          </div>
          </div>
          </div>

    <!-- Tabel Bulan Maret -->
   
  
      

   

@endsection

















    