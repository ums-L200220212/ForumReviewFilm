@extends('mainlayout')

@section('maincontent')
<!-- Background Section -->
<div style="background-image:url('images/all-stars.png'); background-size:cover; background-position:center; width:100vw; height:100vh;">
  <!-- Transparent Section -->
  <div class="container-fluid" style="height: 50vh; background: rgba(0, 0, 0, 0); border-bottom:3px solid #ffa600;"></div>
</div>

<!-- Main Content -->
<div class="container-fluid" style="background: rgb(255, 255, 255); padding: 50px 15px;">
  <!-- About Us Section -->
  <div class="text-center mb-5">
    <h2 style="border-bottom: 3px solid #ffa600; display: inline-block; padding-bottom: 10px;">About Us</h2>
  </div>

  <div class="row text-center">
    <div class="col-md-6 mb-4">
      <div class="card" style="border: none;">
        <img src="images/zombie.png" class="card-img-top img-fluid" alt="gambar deskripsi 1">
        <div class="card-body">
          <p>Ini deskripsinya</p>
        </div>
      </div>
    </div>
    
    <div class="col-md-6 mb-4">
      <div class="card" style="border: none;">
        <img src="images/zombie.png" class="card-img-top img-fluid" alt="gambar deskripsi 2">
        <div class="card-body">
          <p>Ini deskripsinya</p>
        </div>
      </div>
    </div>
  </div>

  <!-- Trending Now Section -->
  <div class="text-center mt-5 mb-3">
    <h2 style="border-bottom: 3px solid #ffa600; display: inline-block; padding-bottom: 10px;">Trending Now</h2>
  </div>

  <div class="row text-center">
    <div class="col-6 col-md-3 mb-4">
      <img src="images/zombie.png" class="img-fluid" alt="trending 1">
    </div>
    <div class="col-6 col-md-3 mb-4">
      <img src="images/zombie.png" class="img-fluid" alt="trending 2">
    </div>
    <div class="col-6 col-md-3 mb-4">
      <img src="images/zombie.png" class="img-fluid" alt="trending 3">
    </div>
    <div class="col-6 col-md-3 mb-4">
      <img src="images/zombie.png" class="img-fluid" alt="trending 4">
    </div>
  </div>
</div>
@endsection
