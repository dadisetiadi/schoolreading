



@extends('layouts.main')

@section('title', 'Progres Guru')
    
@section('content')

<link rel="stylesheet" href="{{asset('chartjs/Chart.min.css')}}">
<script src="{{ asset('chartjs/Chart.min.js')}}"></script>


<div  class="container-fluid">
<div class="row mt-3">
<div class="col-md-5">
    
    <form action="" method="GET" class="form-group" id="formFilter">
      {{ csrf_field() }}

      <div class="col-12 col-lg-12 col-xl-12">
      <select style="cursor:pointer;" class="form-control" id="tag_select" name="year">
      <option value="0" selected disabled> Pilih Tahun</option>
        <?php 
        $year = date('Y');
        $min = $year - 10;
        $max = $year;
        for( $i=$max; $i>=$min; $i-- ) {
        echo '<option value='.$i.'>'.$i.'</option>';
        }
        ?>
      </select>
      </div>
    
      <div class="col-12 col-lg-12 col-xl-12">
      <select style="cursor:pointer;margin-top:1.5em;margin-bottom:1.5em;" class="form-control" id="tag_select" name="month">
      <option value="0" selected disabled> Pilih Bulan</option>
      <option value="01"> Januari</option>
      <option value="02"> Februari</option>
      <option value="03"> Maret</option>
      <option value="04"> April</option>
      <option value="05"> Mei</option>
      <option value="06"> Juni</option>
      <option value="07"> Juli</option>
      <option value="08"> Agustus</option>
      <option value="09"> September</option>
      <option value="10"> Oktober</option>
      <option value="11"> November</option>
      <option value="12"> Desember</option>
      </select>
      </div>

      <div class="col-12 col-lg-12 col-xl-12">
      <select style="cursor:pointer;" class="form-control" id="tag_select" name="year">
        <option value="0" selected disabled> Pilih Sekolah</option>
        @foreach ($level as $item)
          <option value="{{$item->id_level}}">{{$item->level}}</option>
        @endforeach
      </select>
      </div>
    </form>

    <div class="col-12 col-lg-12 col-xl-12">
    <button class="btn btn-white btn-block" type="submit" form="formFilter" value="Submit">Cari Data</button>     
    </div>
  </div>      
  </div>
  </div>    


 <!-- grafik total buku -->
<div  class="container-fluid"> 
    <div class="row mt-3">
    <div class="col-12 col-lg-12 col-xl-12">
    <a href="{{route ('create-guru') }}" class="btn btn-success float float-right">Tambah Data Guru </a>
    </div>
    </div>
      
    <div class="row mt-3">
    <div class="col-12 col-lg-12 col-xl-12">
    <div class="card">
    <div class="card-body">
    <h5 class="card-title">Progres Poin Membaca Guru Bulan Februari</h5>
 
        
      <div class="table-responsive">
        <table class="table"> 
          <thead>
            <tr>

              <th scope="col">No</th>
              <th scope="col">Nama Guru</th>
              <th scope="col">Jumlah Buku di Baca</th>
              <th scope="col">Jumlah Artikel di Baca</th>
              <th scope="col">Total Poin</th>
            
              </tr>
            </thead>
            
            <tbody>
              @foreach ($gurufeb as $datafeb)
                      <tr>
                        <th scope="row">{{ $loop->iteration}}</th>
                        <td>{{ $datafeb->nama_guru}}</td>
                        <td>{{ $datafeb->jumlah_buku}}</td>
                        <td>{{ $datafeb->jumlah_artikel}}</td>
                        <td>{{ $datafeb->total_point}}</td>
                    
                
                      </tr>
                      @endforeach
  
                    </tbody>
  
                    <tfoot>
                      <tr>
                        <th></th>
                        <th> 
                          <b><i>Total</i></b>
                        </th>
  
                        <th> 
                          <b><i>{{$bukufeb}}</i></b>
                        </th>
  
                        <th> 
                          <b><i>{{$artikelfeb}}</i></b>
                        </th>
  
                        <th> 
                          <b><i>{{$pointfeb}}</i></b>
                        </th>
                        
                    </tfoot>  
                  </table>
        </div>
    

</div>
</div>
</div>
</div>
</div>




@endsection

















    