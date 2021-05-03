



@extends('layouts.main')
@section('title', 'School Reading System')
@section('content')


<link rel="stylesheet" href="{{asset('chartjs/Chart.min.css')}}">
<script src="{{ asset('chartjs/Chart.min.js')}}"></script>



<div class="container-fluid"> 
<div class="card mt-3">
  <div class="card-content">
      <div class="row row-group m-0">
        
          <div class="col-12 col-lg-6 col-xl-6 border-light"> 
              <div class="card-body">
                <p class="mb-0 text-white small-font">Total Buku </p>
                <h5 class="text-white mb-0">{{$buku}} <i class="fa fa-book"></i></h5>
          
              </div>
          </div>
          <div class="col-12 col-lg-6 col-xl-6 border-light">
              <div class="card-body">
                <p class="mb-0 text-white small-font">Total Artikel :</p>
                <h5 class="text-white mb-0">{{$artikel}} <i class="fa fa-book"></i></h5>
              </div>
          </div>
         
      </div>
  </div>
</div>  


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



  <!-- Script Grafik Total Buku -->



<script>
  $('.carousel').carousel({
  interval: false,
});
</script>
  

 @endsection