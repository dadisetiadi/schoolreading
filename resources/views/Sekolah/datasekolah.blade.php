


@extends('layouts.main')

@section('title', 'Data Sekolah')
    
@section('content')
         <!-- Button trigger modal -->
   
  
      <div  class="container-fluid"> 
          <div class="row mt-3">
          <div class="col-md-5">
          <h4>Data Sekolah</h4>
          </div>
          </div>
            
          <div class="row mt-1">
          <div class="col-12 col-lg-12 col-xl-12">
          <div class="card">
           
          <div class="card-body">
            
           
          <a href="{{route ('create-sekolah') }}" class="btn btn-success float-right">Tambah Data Sekolah </a>
         
              <div class="table-responsive">
              <table class="table">
              <div class="row mt-3">
                  <thead>
                    <tr>
                      <th scope="col">No</th>
                      <th scope="col">Nama Sekolah</th>
                      <th scope="col">Jenjang</th>
                      <th scope="col">Email</th>
                      <th scope="col">Alamat</th>
                      <th scope="col">No Telp</th>
                 
                    
                    </tr>
                  </thead>

                  <tbody>
                    @foreach ($sekolah as $key => $datasekolah)
                     <tr>
                       <th scope="row">{{ $sekolah->firstItem() + $key}}</th>
                       <td>{{ $datasekolah->nama_sekolah}}</td>
                       <td>{{ $datasekolah->jenjang}}</td>
                       <td>{{ $datasekolah->email}}</td>
                       <td>{{ $datasekolah->alamat}}</td>
                       <td>{{ $datasekolah->no_telp}}</td>
                    
                     </tr>
                     @endforeach
                   </tbody>
                 
                 </table>
                 <br>
                 <div>
                 showing
                 {{ $sekolah->firstItem() }}
                 to
                 {{ $sekolah->LastItem() }}
                 of
                 {{ $sekolah->total() }}
             

                 <div class="pull-right">
                 {{ $sekolah->links() }}
                 </div>
                </div>

            </div>
            </div>
        </div>
        </div>
        </div>
        </div>
        </div>


 
 @endsection

      