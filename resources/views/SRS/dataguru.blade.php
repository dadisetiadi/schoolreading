



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
                  
                    </div>
                    </div>
  
                    </div> 
          
            </div>
            </div>
            </div>
  
    </div>
    </div>
    </div>
 


          <div class="basic-form">
            <form class="form-inline" action="" method="GET" id="formFilter">
              {{ csrf_field() }}
                <select id="inputState" class="form-control mr-3">
                  <option value="0" selected disabled> Pilih Jenjang</option>
                  @foreach ($level as $item)
                    <option value="{{$item->id_level}}">{{$item->level}}</option>
                  @endforeach
                </select>

                <select id="namasekolah" class="form-control mr-3">
                    <option selected="selected">Pilih Bulan</option>
                    <option>Option 1</option>
                    <option>Option 2</option>
                    <option>Option 3</option>
                </select>

                <select id="inputState" class="form-control mr-3">
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
            
                <button type="submit" class="btn btn-dark mr-3">Filter</button>
                <button href="{{route ('create-guru') }}" class="btn btn-success float float-right">Tambah Data Guru </button>
               
            </form>
        </div>
   

        <div class="row mt-3">
        <div class="col-12 col-lg-12 col-xl-12">
        <div class="card">
        <div class="card-body">
         
        <h5 class="card-title">Progres Data Guru </h5>
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
       

<script src="http://code.jquery.com/jquery-3.4.1.js"></script>

<script>
    $(document).ready(function(){
      $('#namasekolah').on('change', function(){
        let id=$(this.val();
        $('#namasekolah').empty();
        $('#namasekolah')append('<option value="0" disabled selected> Processing........</option>),
        $ajax({
          type  : 'GET'
          url   : 'filer/' + id,
          success : function (response) {
            var response = JSON.parse(response);
            console.log(response);
            $('#namasekolah').empty();
            $('#namasekolah').append('<option value="0" disabled selected>Select Nama Sekolah"</option> );
            response.forEach(Element => {
              $('#namasekolah').append('<option vavlue ="$(element['id'])">$(element['name')</option>');

            });
          }
      )};
  
</script>


@endsection

















    