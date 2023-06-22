<?=$this->extend('gedung/header/hello');?>

<?=$this->section('content');?>

<div id="carouselExampleCaptions" class="carousel slide" data-bs-ride="carousel">
  <div class="carousel-indicators">
    <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
    <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="1" aria-label="Slide 2"></button>
    <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="2" aria-label="Slide 3"></button>
  </div>
  <div class="carousel-inner">
    <div class="carousel-item active c-item">
      <img src="Asset\alumniCSSJS\gambar\carousel\sport.jpg" class="d-block w-100 c-img" alt="...">
      <div class="carousel-caption d-none d-md-block top-0 mt-4">
        <p class="mt-5 fs-3 text-uppercase">Serukan Kemenanganmu</p>
        <h1 class="display-1 fw-bolder text-capitalize">Sport Hall</h1>
        <button class="btn btn-primary px-4 py-2 mt-5 ">Booking Sekarang</button>
      </div>
    </div>
    <div class="carousel-item c-item">
      <img src="Asset\alumniCSSJS\gambar\carousel\weeding.jpg" class="d-block w-100 c-img" alt="...">
      <div class="carousel-caption d-none d-md-block top-0 mt-4">
        <p class="mt-5 fs-3 text-uppercase">Sempurnakan Hari Spesial Mu</p>
        <h1 class="display-1 fw-bolder text-capitalize">Gedung Pernikahan</h1>
        <button class="btn btn-primary px-4 py-2 mt-5 ">Booking Sekarang</button>
      </div>
    </div>
    <div class="carousel-item c-item">
      <img src="Asset\alumniCSSJS\gambar\carousel\serbaguna.jpg" class="d-block w-100 c-img" alt="...">
      <div class="carousel-caption d-none d-md-block top-0 mt-4">
        <p class="mt-5 fs-3 text-uppercase">Lebih Efisien</p>
        <h1 class="display-1 fw-bolder text-capitalize">Gedung Serba Guna</h1>
        <button class="btn btn-primary px-4 py-2 mt-5 ">Booking Sekarang</button>
      </div>
    </div>
  </div>
  <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Previous</span>
  </button>
  <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Next</span>
  </button>
</div>






<?=$this->endSection('content');?> 