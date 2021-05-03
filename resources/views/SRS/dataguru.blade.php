



@extends('layouts.main')

@section('title', 'Progres Guru')
    
@section('content')

<link rel="stylesheet" href="{{asset('chartjs/Chart.min.css')}}">
<script src="{{ asset('chartjs/Chart.min.js')}}"></script>


 <!-- grafik total buku -->
<div  class="container-fluid"> 
  
  <div  id="carouselExampleControls" class="carousel slide" data-bs-interval="false">

    <div class="carousel-inner">
    <div class="carousel-item active">
  
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
  
          <div class="row m-0 row-group text-center border-top border-light-3">
  
            <div class="col-12 col-lg-4">
            <div class="p-3">
            </div>
            </div>
  
            <div class="col-12 col-lg-4">
            <div class="p-3">
            </div>
            </div>
         
            <div class="col-12 col-lg-4">
            <div class="p-3">
            <button data-interval="false" type="button" data-bs-target="#carouselExampleControls"  data-bs-slide="next">
            <span class="carousel-control-next-icon-center" aria-hidden="true"></span>
            <span class="visually-hidden-center">Next</span>
            </button>
            </div>
            </div>
  
          </div> 
    
      </div>
      </div>
      </div> 
    </div>
      
    <div class="carousel-item ">
        <div class="card mt-3">
        <div class="card-content">
        <div class="row row-group m-0">
              
            <div class="col-12 col-lg-12 col-xl-12 border-light"> 
            <div class="card-mt3">
            <div class="card-header">Grafik Total Artikel
            <div class="card-body">
            <div class="chart-container-2">
            <canvas id="chart2"></canvas>  
            </div>
            </div>
            </div>
            </div>
            </div>
  
            <div class="row m-0 row-group text-center border-top border-light-3">
  
              <div class="col-12 col-lg-4">
              <div class="p-3">
                <button data-interval="false" class="carousel-control-prev-center" type="button" data-bs-target="#carouselExampleControls"  data-bs-slide="prev">
                  <span class="carousel-control-prev-icon-center" aria-hidden="true"></span>
                  <span class="visually-hidden-center">Previuos</span>
                  </button>
              </div>
              </div>
  
              <div class="col-12 col-lg-4">
              <div class="p-3">
              </div>
              </div>
           
              <div class="col-12 col-lg-4">
              <div class="p-3">
              <button data-interval="false" class="carousel-control-next-center" type="button" data-bs-target="#carouselExampleControls"  data-bs-slide="next">
              <span class="carousel-control-next-icon-center" aria-hidden="true"></span>
              <span class="visually-hidden-center">Next</span>
              </button>
              </div>
              </div>
  
              </div> 
      
          </div>
          </div>
          </div> 
    </div>
  
      <div class="carousel-item ">
          <div class="card mt-3">
          <div class="card-content">
          <div class="row row-group m-0">
                  
                <div class="col-12 col-lg-12 col-xl-12 border-light"> 
                <div class="card-mt3">
                <div class="card-header">Grafik Total Point
                <div class="card-body">
                <div class="chart-container-2">
                <canvas id="chart3"></canvas>  
                </div>
                </div>
                </div>
                </div>
                </div>
  
                    <div class="row m-0 row-group text-center border-top border-light-3">
  
                    <div class="col-12 col-lg-4">
                    <div class="p-3">
                      <button data-interval="false" class="carousel-control-prev-center" type="button" data-bs-target="#carouselExampleControls"  data-bs-slide="prev">
                        <span class="carousel-control-prev-icon-center" aria-hidden="true"></span>
                        <span class="visually-hidden-center">Previuos</span>
                        </button>
                    </div>
                    </div>
        
                    <div class="col-12 col-lg-4">
                    <div class="p-3">
                    </div>
                    </div>
                 
                    <div class="col-12 col-lg-4">
                    <div class="p-3">
                    <button data-interval="false" class="carousel-control-next-center" type="button" data-bs-target="#carouselExampleControls"  data-bs-slide="next">
                    <span class="carousel-control-next-icon-center" aria-hidden="true"></span>
                    <span class="visually-hidden-center">Next</span>
                    </button>
                    </div>
                    </div>
  
                    </div> 
          
            </div>
            </div>
            </div>
  
    </div>
    </div>
    </div>
 


    <div class="row mt-3">
      <div class="col-md-5">
        
        <form action="" method="GET" class="form-group" id="formFilter">
          {{ csrf_field() }}

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

        <select style="cursor:pointer;" class="form-control" id="tag_select" name="year">
          <option value="0" selected disabled> Pilih Sekolah</option>
          <option value="01"> Januari</option>
          <option value="02"> Februari</option>
          <option value="03"> Maret</option>
        </select>
        </form>
        <button class="btn btn-default btn-block" type="submit" form="formFilter" value="Submit">Cari Data</button>
             
      
      </div>      
      </div>
      </div>    
  
    <!-- Tabel Bulan Februari -->
   

        <div class="row mt-3">
        <div class="col-12 col-lg-12 col-xl-12">
        <div class="card">
        <div class="card-body">
          <button href="/dataguru/create" type="submit" class="btn btn-success float-right" data-bs-toggle="modal" data-bs-target="#exampleModal">
            Tambah Data
          </button>
        <h5 class="card-title">Progres Poin Membaca Guru Bulan Februari</h5>
        <br>
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

    <!-- Tabel Bulan Maret -->
   
  
      <div class="row mt-3">
      <div class="col-12 col-lg-12 col-xl-12">
      <div class="card">
      <div class="card-body">
            
      <h5 class="card-title">Progres Poin Membaca Guru Bulan Maret</h5>
      <div class="table-responsive">
      <table class="table"> 
        <thead>
          <tr>

          <th scope="col">No</th>
          <th scope="col">Nama Sekolah</th>
          <th scope="col">Nama Guru</th>
          <th scope="col">Jumlah Buku di Baca</th>
          <th scope="col">Jumlah Artikel di Baca</th>
          <th scope="col">Total Poin</th>
      
          </tr>
        </thead>
        
        <tbody>
          @foreach ($gurumaret as $datamaret)
                  <tr>
                    <th scope="row">{{ $loop->iteration}}</th>
                    <td>{{ $datamaret->School->nama_sekolah}}</td>
                    <td>{{ $datamaret->nama_guru}}</td>
                    <td>{{ $datamaret->jumlah_buku}}</td>
                    <td>{{ $datamaret->jumlah_artikel}}</td>
                    <td>{{ $datamaret->total_point}}</td>
            
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
                      <b><i>{{$bukumaret}}</i></b>
                    </th>

                    <th> 
                      <b><i>{{$artikelmaret}}</i></b>
                    </th>

                    <th> 
                      <b><i>{{$pointmaret}}</i></b>
                    </th>

              </tfoot>  
              </table>
              
            
        </div>
        </div>
        </div>
        </div>
        </div>


        <div class="row mt-3">
          <div class="col-12 col-lg-12 col-xl-12">
          <div class="card">
          <div class="card-body">
         
          <h5 class="card-title">Progres Poin Membaca Guru Bulan April</h5>
          <br>
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
              @foreach ($guruapril as $dataapril)
                      <tr>
                        <th scope="row">{{ $loop->iteration}}</th>
                        <td>{{ $dataapril->nama_guru}}</td>
                        <td>{{ $dataapril->jumlah_buku}}</td>
                        <td>{{ $dataapril->jumlah_artikel}}</td>
                        <td>{{ $dataapril->total_point}}</td>
                    
                
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
                          <b><i>{{$bukuapril}}</i></b>
                        </th>
  
                        <th> 
                          <b><i>{{$artikelapril}}</i></b>
                        </th>
  
                        <th> 
                          <b><i>{{$pointapril}}</i></b>
                        </th>
                        
                    </tfoot>  
                  </table>
  
                
            
            </div>
            </div>
            </div>
            </div>
            </div>
  


        <!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title text-muted" id="exampleModalLabel">Tambah Data Guru</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
     
      <div class="modal-body text-muted">
        <form action="/dataguru/create" method="POST">
         @csrf

          <div class="mb-3 text-muted">
            <label class="form-label text-muted">Pilih Sekolah</label>
            <select style="cursor:pointer;" class="form-control" id="tag_select" name="sekolah_id">
              <option value="0" selected disabled> Pilih Sekolah</option>
          
            </select>
          </div>

          <div class="mb-3 text-muted">
            <label for="exampleInputEmail1" class="form-label text-muted">Nama Guru</label>
            <input name="nama_guru" type="text" class="form-text" id="exampleInputEmail1" aria-describedby="emailHelp">
          </div>

          <div class="mb-3 text-muted">
            <label for="exampleInputEmail1" class="form-label text-muted">Jumlah Buku</label>
            <input name="jumlah_buku" type="text" class="form-text" id="exampleInputEmail1" aria-describedby="emailHelp">
          </div>
          <div class="mb-3">
            <label for="exampleInputPassword1" class="form-label text-muted">Jumlah Artikel </label>
            <input name="jumlah_artikel" type="text" class="form-text" id="exampleInputEmail1" aria-describedby="emailHelp">
          </div>

          <div class="mb-3">
            <label for="exampleInputPassword1" class="form-label text-muted">Total Point </label>
            <input name="total_point" type="text" class="form-text" id="exampleInputEmail1" aria-describedby="emailHelp">
          </div>
        
      </div>

      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
        <button type="submit" class="btn btn-primary">Save changes</button>
      </div>
    </form>
    </div>
  </div>
</div>

     <!-- Script Grafik Total Buku -->
    <script>
    var ctx = document.getElementById('chart1').getContext('2d');
		
    var myChart = new Chart(ctx, {
      type: 'line',
      data: {
       //labels: ["", "Feb", "Mar", "Apr", "May", "Jun", "Jul", "Aug", "Sep", "Oct", "Nov", "Des"],
        labels:@php echo json_encode($Monthsbuku); @endphp,
        datasets: [{
          label: 'Poin',
         // data: @php echo json_encode($jumlah_baca); @endphp,
          data: @php echo json_encode($Databuku); @endphp,
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



<script>
  var ctx = document.getElementById('chart2').getContext('2d');
  
  var myChart = new Chart(ctx, {
    type: 'line',
    data: {
      labels: @php echo json_encode($Monthsartikel); @endphp,
      datasets: [{
        label: 'Poin',
        data: @php echo json_encode($Dataartikel); @endphp,
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
        color: "rgba(0, 0, 221, 0.08)"
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
       
       


<script>
  var ctx = document.getElementById('chart3').getContext('2d');
  
  var myChart = new Chart(ctx, {
    type: 'line',
    data: {
      labels: @php echo json_encode($Monthspoint); @endphp,
      datasets: [{
        label: 'Poin',
        data: @php echo json_encode($Datapoint); @endphp,
        backgroundColor: '#f1f7ff',
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
        color: "rgba(0, 0, 221, 0.08)"
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

<script>
  $('.carousel').carousel({
  interval: false,
});
</script>
       
    @endsection

















    