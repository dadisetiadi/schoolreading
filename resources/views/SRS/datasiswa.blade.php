


@extends('layouts.main')

@section('title', 'Progres Siswa')
    
@section('content')

<div class="container-fluid">    
<div class="row mt-3">
<div class="col-md-5">
  
        <form id="Myform1">
          <div class="row form-group">

              <div class="col-md-5">
              <select class="form-control " name="sekolah">
                          
                          <option value="#" selected="">Pilih Sekolah</option>
                          <option value="1">SD</option>
                          <option value="2">SMP</option>
                          <option value="3">SMA</option>
                  
              </select>
              </div>

          </div>
        </form>
        <input type="submit" class="" name="submit2"  value="Tampilkan">

</div>      
</div>
</div>


<div class="container-fluid">    
<div class="row mt-3">
<div class="col-md-5">
    
          <form id="Myform1">
            <div class="row form-group">
  
                <div class="col-md-5">
                <select class="form-control " name="sekolah">
                            
                            <option value="#" selected="">Pilih Sekolah</option>
                            <option value="1">SD</option>
                            <option value="2">SMP</option>
                            <option value="3">SMA</option>
                    
                </select>
                </div>
  
            </div>
          </form>
          <input type="submit" class="" name="submit2"  value="Tampilkan">
  
  </div>      
  </div>
  </div>
 
    <div class="container-fluid">    
      <div class="row mt-3">
        <div class="col-12 col-lg-12 col-xl-12">

          <div class="card">
            <div class="card-body">
              <h5 class="card-title">Data Siswa Kelas</h5>
			        
              <div class="table-responsive">
               <table class="table">
                  <thead>
                    <tr>
                      <th scope="col">No</th>
                      <th scope="col">Nama Siswa</th>
                      <th scope="col">Jumlah Buku di Baca</th>
                      <th scope="col">Jumlah Artikel di Baca</th>
                      <th scope="col">Total Point</th>
                    </tr>
                  </thead>

                  <tbody>
                   @foreach ($siswa as $datasiswa)
                    <tr>
                      <th scope="row">{{ $loop->iteration}}</th>
                      <td>{{ $datasiswa->nama_guru}}</td>
                      <td>{{ $datasiswa->jumlah_buku}}</td>
                      <td>{{ $datasiswa->jumlah_artikel}}</td>
                      <td>{{ $datasiswa->total_point}}</td>
                      <td>{{ $datasiswa->kelas}}</td>
                    </tr>
                    @endforeach
                  </tbody>
                </table>
        

            </div>
            </div>
            </div>


            <div class="container-fluid">    
            <div class="row mt-3">
            <div class="col-12 col-lg-12 col-xl-12">

            <div id="chartContainer" style="height: 370px; width: 100%;"></div>

            </div>
            </div>
            </div>
        
        </div>
        </div>
        </div>
        
       
        @endsection

      