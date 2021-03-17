

    <?php
     
    $dataPoints = array(
    	array("y" => $guru->total_jumlah_buku(), "label" => "Sunday"),
    	array("y" => $guru->total_jumlah_buku(), "label" => "Monday"),
    	array("y" => $guru->total_jumlah_buku(), "label" => "Tuesday"),
    	array("y" => $guru->total_jumlah_buku(), "label" => "Wednesday"),
    	array("y" => $guru->total_jumlah_buku(), "label" => "Thursday"),
    	array("y" => $dataguru->total_jumlah_buku(), "label" => "Friday"),
    	array("y" => $dataguru->total_jumlah_buku(), "label" => "Saturday")
    );
     
    ?>


@extends('layouts.main')

@section('title', 'Progres Siswa')
    
@section('content')


 
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
                   @foreach ($siswa as $dataguru)
                    <tr>
                      <th scope="row">{{ $loop->iteration}}</th>
                      <td>{{ $dataguru->nama_guru}}</td>
                      <td>{{ $dataguru->jumlah_buku}}</td>
                      <td>{{ $dataguru->jumlah_artikel}}</td>
                      <td>{{ $dataguru->total_point}}</td>
                      <td>{{ $dataguru->kelas}}</td>
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
        
        <script src="https://canvasjs.com/assets/script/canvasjs.min.js"></script>

       <script>
          window.onload = function () {
           
          var chart = new CanvasJS.Chart("chartContainer", {
            title: {
              text: "Grafik Point"
            },
            axisY: {
              title: "Point"
            },
            data: [{
              type: "line",
              dataPoints: <?php echo json_encode($dataPoints, JSON_NUMERIC_CHECK); ?>
            }]
          });
          chart.render();
           
          }
        </script>
        @endsection

      