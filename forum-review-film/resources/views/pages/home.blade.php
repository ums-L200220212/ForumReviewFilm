@extends('mainlayout')

@section('maincontent')
<!--background-->
<div style="background-image:url('images/all-stars.png'); background-size:cover; background-position:center; width:99,9vw; height:100vh;">
  
  <!--bagian transparan-->
  <div class="container-fluid" style="height: 50vh ;background: rgba(0, 0, 0, 0); border-bottom:3px solid #ffa600; ">
  </div>

  <!-- isi konten -->
<div class="container-fluid" style="background: rgb(255, 255, 255); padding: 50px 15px;">
  
    
      <!--text/judul untuk about us-->
      <div class="text-center mb-5" style=" ">        
        <h2 style="border-bottom:3px solid #ffa600; display:inline-block; padding-bottom:10px;">
          About us
        </h2>
      </div>
      
      <!--isi konten about us-->
    <div class="row text-center">
      <div class="col-md-6 mb-4">
        <div class="card" style="border:none; ">
          <img src="images/zombie.png" class="card-img-top img-fluid" alt="gambar deskripsi 1">
          <div class="card-body">
            <p>ini deskripsinya</p>
        </div>
      </div>
    </div>

      <div class="col-md-6 mb-4">
          <div class="card" style="border:none; ">
            <img src="images/zombie.png" class="card-img-top img-fluid" alt="gambar deskripsi 1">
            <div class="card-body">
              <p>ini deskripsinya</p>
            </div>
          </div>
        </div>
      </div>
    
  <!--batas habis about us-->

  <div class="text-center mt-5 mb-3">
    <h2 style="border-bottom:3px solid #ffa600; display:inline-block; padding-bottom:10px;">
      <p>TRENDING NOW</p>
    </h2>
  </div>

  <div class="row text-center">
    <div class="col-6 col-md-3 mb-4">
      <img src="images/zombie.png" class="img-fluid">
    </div>
  

    <div class="col-6 col-md-3 mb-4">
      <img src="images/zombie.png" class="img-fluid">
    </div>
  
    <div class="col-6 col-md-3 mb-4">
      <img src="images/zombie.png" class="img-fluid">
    </div>
  
    <div class="col-6 col-md-3 mb-4">
      <img src="images/zombie.png" class="img-fluid">
    </div>
  </div>
</div>
@endsection
