

<?php
     
$dataPoints = array(
  array("y" => 8, "label" => "Sunday"),
  array("y" => 7, "label" => "Monday"),
  array("y" => 6, "label" => "Tuesday"),
  array("y" => 5, "label" => "Wednesday"),
  array("y" => 4, "label" => "Thursday"),
  array("y" => 3, "label" => "Friday"),
  array("y" => 2, "label" => "Saturday")
);
 
?>


@extends('layouts.main')

@section('title', 'Progres Guru')
    
@section('content')

<link rel="stylesheet" href="{{asset('chartjs/Chart.min.css')}}">
<script src="{{ asset('chartjs/Chart.min.js')}}"></script>

<div class="container-fluid"> 

    <div class="card mt-3">
    <div class="card-content">
    <div class="row row-group m-0">
          
        <div class="col-12 col-lg-12 col-xl-12 border-light"> 
        <div class="card-mt3">
        <div class="card-header">Grafik Total Buku
        <div class="card-body">
        <div class="chart-container-1">
        <canvas id="chart1"></canvas>  
        </div>
        </div>
        </div>
        </div>
        </div>

    
           
    </div>
    </div>
    </div>  


      <div class="card mt-3">
      <div class="card-content">
      <div class="row row-group m-0">
            
          <div class="col-12 col-lg-12 col-xl-12 border-light"> 
            <div class="box">
              <div class="box-header with-border">
                     <h3>Grafik Kecamatan</h3>         
              </div>
              <div class="box-body">
                <canvas id="myChart"></canvas>
              </div>
            </div>
          </div>
  
      
      </div>
      </div>
      </div>
       


        <div class="row mt-3">
        <div class="col-12 col-lg-12 col-xl-12">
        <div class="card">
        <div class="card-body">
              
        <h5 class="card-title">Progres Poin Membaca Guru Bulan <p>{{$bulanku}}</p></h5>
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
            @foreach ($guru as $dataguru)
                    <tr>
                      <th scope="row">{{ $loop->iteration}}</th>
                      <td>{{ $dataguru->nama_guru}}</td>
                      <td>{{ $dataguru->jumlah_buku}}</td>
                      <td>{{ $dataguru->jumlah_artikel}}</td>
                      <td>{{ $dataguru->total_point}}</td>
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
                        <b><i>{{$buku}}</i></b>
                      </th>

                      <th> 
                        <b><i>{{$artikel}}</i></b>
                      </th>

                      <th> 
                        <b><i>{{$point}}</i></b>
                      </th>


                  </tfoot>  

                </table>
        
          </div>
          </div>
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


  



    <script>
    var ctx = document.getElementById('chart1').getContext('2d');
		
    var myChart = new Chart(ctx, {
      type: 'line',
      data: {
        labels: @php echo json_encode($cikgu); @endphp,
        datasets: [{
          label: 'Poin',
          data: @php echo json_encode($jumlah_baca); @endphp,
          backgroundColor: '#555',
          borderColor: "",
          pointRadius :"0",
          borderWidth: 0
        }]
      },
    options: {
      maintainAspectRatio: false,
      legend: {
        display: false,
        labels: {
        fontColor: '#ddd',  
        boxWidth:40
        }
      },
      tooltips: {
        displayColors:true,
      },	
      scales: {
        xAxes: [{
        ticks: {
          beginAtZero:true,
          fontColor: '#ddd'
        },
        gridLines: {
          display: true ,
          color: "rgba(221, 221, 221, 0.08)"
        },
        }],
         yAxes: [{
        ticks: {
          beginAtZero:true,
          fontColor: '#ddd'
        },
        gridLines: {
          display: true ,
          color: "rgba(221, 221, 221, 0.08)"
        },
        }]
       }

     }
    });  
  
</script>
       
       
    @endsection