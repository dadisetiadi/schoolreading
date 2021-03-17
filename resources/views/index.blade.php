<?php
     
$dataPoints = array(
  array("y" => 25, "label" => "Sunday"),
  array("y" => 15, "label" => "Monday"),
  array("y" => 25, "label" => "Tuesday"),
  array("y" => 5, "label" => "Wednesday"),
  array("y" => 10, "label" => "Thursday"),
  array("y" => 0, "label" => "Friday"),
  array("y" => 20, "label" => "Saturday")
);
 
?>



@extends('layouts.main')
@section('title', 'School Reading System')
@section('content')





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


<div id="carouselExampleControls" class="carousel slide" data-bs-ride="carousel">
  <div class="carousel-inner">

    <div class="carousel-item active">
      <div class="row">
        <div class="col-12 col-lg-12 col-xl-12">
           <div class="card">
                  <div class="card-header">Grafik Progress Guru
                  <div class="card-action">
                  </div>
                  </div>
        
                  <div class="card-body">
                  <ul class="list-inline">
                  <li class="list-inline-item"><i class="fa fa-circle mr-2 text-white"></i>Poin</li>
                  </ul>
                  <div class="chart-container-1">
                  <canvas id="chart2"></canvas>  
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
                  <button class="carousel-control-next-center" type="button" data-bs-target="#carouselExampleControls"  data-bs-slide="next">
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



    
    <div class="carousel-item">
   
      <div class="row">
        <div class="col-12 col-lg-12 col-xl-12">
           <div class="card">

              <div class="card-header">Grafik Progress Guru
              <div class="card-action">
              </div>
              </div>
      
             <div class="card-body">
               <ul class="list-inline">
               <li class="list-inline-item"><i class="fa fa-circle mr-2 text-white"></i>Poin</li>
            
               </ul>
      
               <div class="chart-container-1">
               <canvas id="chart1"></canvas>  
               </div>
             </div>
             
             <div class="row m-0 row-group text-center border-top border-light-3">

                <div class="col-12 col-lg-4">
                <div class="p-3">
                <button class="carousel-control-prev-center" type="button" data-bs-target="#carouselExampleControls"  data-bs-slide="prev">
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



<div class="row">
  <div class="col-12 col-lg-12 col-xl-12">
     <div class="card">

        <div class="card-header">Grafik Progress Guru
        <div class="card-action">
        </div>
        </div>

      
        <div class="card-body">
        <div id="chartContainer" style="height: 370px; width: 100%;"></div>
       
         
     
        </div>
       
      
        </div>
     </div>
   </div>


  

 @endsection