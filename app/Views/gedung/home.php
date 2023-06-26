<?=$this->extend('gedung/header/hello');?>

<?=$this->section('content');?>

<div id="carouselExampleCaptions" class="carousel slide carousel-desk" data-bs-ride="carousel">
  <div class="carousel-indicators">
    <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
    <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="1" aria-label="Slide 2"></button>
    <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="2" aria-label="Slide 3"></button>
    <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="3" aria-label="Slide 4"></button>
  </div>
  <div class="carousel-inner">
    <div class="carousel-item active c-item">
      <img src="Asset\alumniCSSJS\gambar\carousel\sport.jpg" class="d-block w-100 c-img" alt="...">
      <div class="carousel-caption d-none d-md-block top-0 mt-4 bann">
        <p class="mt-5 fs-3 text-uppercase tagline">Serukan Kemenanganmu</p>
        <h1 class="display-1 fw-bolder text-capitalize title-line">Sport Hall</h1>
        <button class="btn btn-primary px-4 py-2 mt-5 btn-booking">Booking Sekarang</button>
      </div>
    </div>
    <div class="carousel-item c-item">
      <img src="Asset\alumniCSSJS\gambar\carousel\weeding.jpg" class="d-block w-100 c-img" alt="...">
      <div class="carousel-caption d-none d-md-block top-0 mt-4 bann">
        <p class="mt-5 fs-3 text-uppercase tagline">Sempurnakan Hari Spesial Mu</p>
        <h1 class="display-1 fw-bolder text-capitalize title-line">Gedung Pernikahan</h1>
        <button class="btn btn-primary px-4 py-2 mt-5 btn-booking">Booking Sekarang</button>
      </div>
    </div>
    <div class="carousel-item c-item">
      <img src="Asset\alumniCSSJS\gambar\carousel\serbaguna.jpg" class="d-block w-100 c-img" alt="...">
      <div class="carousel-caption d-none d-md-block top-0 mt-4 bann">
        <p class="mt-5 fs-3 text-uppercase tagline">Lebih Efisien</p>
        <h1 class="display-1 fw-bolder text-capitalize title-line">Gedung Serba Guna</h1>
        <button class="btn btn-primary px-4 py-2 mt-5 btn-booking">Booking Sekarang</button>
      </div>
    </div>
    <div class="carousel-item c-item">
      <img src="Asset\alumniCSSJS\gambar\carousel\meeting.jpg" class="d-block w-100 c-img" alt="...">
      <div class="carousel-caption d-none d-md-block top-0 mt-4 bann">
        <p class="mt-5 fs-3 text-uppercase tagline">Perluas Ide-Ide Mu</p>
        <h1 class="display-1 fw-bolder text-capitalize title-line">Gedung Pertemuan</h1>
        <button class="btn btn-primary px-4 py-2 mt-5 btn-booking">Booking Sekarang</button>
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



<div id="carouselExampleCaptions" class="carousel slide carousel-mobile" data-bs-ride="carousel">
  <div class="carousel-indicators">
    <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
    <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="1" aria-label="Slide 2"></button>
    <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="2" aria-label="Slide 3"></button>
  </div>
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img src="Asset\alumniCSSJS\gambar\carousel\sport.jpg" class="d-block w-100 " alt="...">
      <div class="carousel-caption d-none d-md-block wrap-title">
        <p>Serukan Kemenanganmu</p>
        <h1>Sport Hall</h1>
        <button class="btn btn-primary">Booking Sekarang</button>
      </div>
    </div>
    <div class="carousel-item ">
      <img src="Asset\alumniCSSJS\gambar\carousel\weeding.jpg" class="d-block w-100 " alt="...">
      <div class="carousel-caption d-none d-md-block wrap-title">
        <p>Sempurnakan Hari Spesial Mu</p>
        <h1>Gedung Pernikahan</h1>
        <button>Booking Sekarang</button>
      </div>
    </div>
    <div class="carousel-item">
      <img src="Asset\alumniCSSJS\gambar\carousel\serbaguna.jpg" class="d-block w-100 " alt="...">
      <div class="carousel-caption d-none d-md-block wrap-title">
        <p >Lebih Efisien</p>
        <h1 class="display-1 fw-bolder text-capitalize title-line">Gedung Serba Guna</h1>
        <button class="btn btn-primary px-4 py-2 mt-5 btn-booking">Booking Sekarang</button>
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

<div class="landHome">
  <div class="container-kategori">
    <h3 class="subtitle-home">Ketegori<i class="fa-solid fa-list-ul ik"></i></h3>
    <div class="row">
      <div class="col-md-6 col-lg-4 col-xl-3 kat">
        <a href="" class="link-kat">Gedung Olahraga <i class="fa-solid fa-basketball fa-lg ik"></i> </a>
      </div>
      <div class="col-md-6 col-lg-4 col-xl-3 kat">
        <a href="" class="link-kat">Gedung Pernikahan <i class="fa-solid fa-ring fa-lg ik"></i></a>
      </div>
      <div class="col-md-6 col-lg-4 col-xl-3 kat">
         <a href="" class="link-kat">Gedung Pertemuan <i class="fa-regular fa-handshake fa-lg ik"></i></a>
      </div>
      <div class="col-md-6 col-lg-4 col-xl-3 kat">
        <a href="" class="link-kat">Gedung Serba guna <i class="fa-solid fa-building-wheat fa-lg ik"></i></a>
      </div>
    </div>
  </div>




<h2 class="subtitle-home">Rekomendasi <i class="fa-regular fa-star ik"></i></h2>

<div class="slider">

  <div class="slide-container swiper">
    <div class="slide-content ">
      <div class="card-wrapper swiper-wrapper">
        <div class="crd swiper-slide">

          <div class="image-content">
            <span class="overlay"></span>
            <div class="card-images">
              <img src="Asset\alumniCSSJS\gambar\carousel\serbaguna.jpg" alt="" class="card-im">
            </div>
          </div>

          <div class="crd-content">
            <h2 class="nama">Gedung Serba Guna</h2>
            <p class="des-content">Lorem ipsum dolor, Lorem ipsum dolor sit amet consectetur, adipisicing elit. Maiores eos necessitatibus adipisci dolor totam sunt pariatur dolorum illum dolore earum, hic consequatur a ipsa non quam quos eveniet eum! Nobis.sit amet consectetur
               adipisicing elit. Corporis </p>
               <button class="booking-button-slider">Booking</button>
          </div>

        </div>
        <div class="crd swiper-slide">

          <div class="image-content">
            <span class="overlay"></span>
            <div class="card-images">
              <img src="Asset\alumniCSSJS\gambar\carousel\serbaguna.jpg" alt="" class="card-im">
            </div>
          </div>

          <div class="crd-content">
            <h2 class="nama">Gedung Serba Guna</h2>
            <p class="des-content">Lorem ipsum dolor, Lorem ipsum dolor sit amet consectetur, adipisicing elit. Maiores eos necessitatibus adipisci dolor totam sunt pariatur dolorum illum dolore earum, hic consequatur a ipsa non quam quos eveniet eum! Nobis.sit amet consectetur
               adipisicing elit. Corporis </p>
               <button class="booking-button-slider">Booking</button>
          </div>

        </div>

         <div class="crd swiper-slide">

          <div class="image-content">
            <span class="overlay"></span>
            <div class="card-images">
              <img src="Asset\alumniCSSJS\gambar\carousel\serbaguna.jpg" alt="" class="card-im">
            </div>
          </div>

          <div class="crd-content">
            <h2 class="nama">Gedung Serba Guna</h2>
            <p class="des-content">Lorem ipsum dolor, Lorem ipsum dolor sit amet consectetur, adipisicing elit. Maiores eos necessitatibus adipisci dolor totam sunt pariatur dolorum illum dolore earum, hic consequatur a ipsa non quam quos eveniet eum! Nobis.sit amet consectetur
               adipisicing elit. Corporis </p>
               <button class="booking-button-slider">Booking</button>
          </div>

        </div>

        <div class="crd swiper-slide">

          <div class="image-content">
            <span class="overlay"></span>
            <div class="card-images">
              <img src="Asset\alumniCSSJS\gambar\carousel\serbaguna.jpg" alt="" class="card-im">
            </div>
          </div>

          <div class="crd-content">
            <h2 class="nama">Gedung Serba Guna</h2>
            <p class="des-content">Lorem ipsum dolor, Lorem ipsum dolor sit amet consectetur, adipisicing elit. Maiores eos necessitatibus adipisci dolor totam sunt pariatur dolorum illum dolore earum, hic consequatur a ipsa non quam quos eveniet eum! Nobis.sit amet consectetur
               adipisicing elit. Corporis </p>
               <button class="booking-button-slider">Booking</button>
          </div>

        </div>
        </div>
      </div>
    </div>
  </div>
</div>

<div class="container-galeri">
  <h2  class="subtitle-home">Geleri</h2>
  <div class="row r-photo">
    <div class="col-lg-6 col-sm-4 colm-photo1">
      <div id="carouselExampleSlidesOnly" class="carousel slide" data-bs-ride="carousel">
        <div class="carousel-inner">
          <div class="carousel-item active">
            <a href="">
            <img src="Asset\alumniCSSJS\gambar\slider\slider_galeri_home\sp1.jpg" class="d-block w-100 galeri-home" alt="...">
            </a>
          </div>
          <div class="carousel-item">
            <a href="">
            <img src="Asset\alumniCSSJS\gambar\slider\slider_galeri_home\sp2.jpg" class="d-block w-100 galeri-home" alt="...">
            </a>
          </div>
      </div>
  </div>
</div>

<div class="col-lg-3 col-sm-4 colm-photo2">
    <div id="carouselExampleSlidesOnly" class="carousel slide" data-bs-ride="carousel">
      <div class="carousel-inner">
        <div class="carousel-item active">
        <a href="">
        <img src="Asset\alumniCSSJS\gambar\slider\slider_galeri_home\wd1.jpg" class="d-block w-100 galeri-home" alt="...">
        </a>
      </div>
      <div class="carousel-item">
        <a href="">
        <img src="Asset\alumniCSSJS\gambar\slider\slider_galeri_home\wd2.jpg" class="d-block w-100 galeri-home" alt="...">
        </a>
      </div>
    </div>
  </div>
</div>

<div class="col-lg-3 col-sm-4 colm-photo3">
    <div id="carouselExampleSlidesOnly" class="carousel slide" data-bs-ride="carousel">
      <div class="carousel-inner">
        <div class="carousel-item active">
         <a href="">
          <img src="Asset\alumniCSSJS\gambar\slider\slider_galeri_home\sb1.jpg" class="d-block w-100 galeri-home" alt="...">
        </a>
      </div>
        <div class="carousel-item">
          <a href="">
          <img src="Asset\alumniCSSJS\gambar\slider\slider_galeri_home\sb2.jpg" class="d-block w-100 galeri-home" alt="...">
          </a>
      </div>
    </div>
  </div>
</div>

<div class="text-galeri">
  <h2>YOOOO</h2>
</div>


</div>
</div>
</div>

<div class="pilih-kota">
  <h2 class="subtitle-home">Pilih Sesuai Kota Mu ya</h2>
    <div class="dis-elem">
        <div class="elemt">
            <h2>Malang</h2>
        </div>
        <div class="elemt">
            <h2>Malang</h2>
        </div>
       <div class="elemt">
            <h2>Malang</h2>
        </div>
        <div class="elemt">
            <h2>Malang</h2>
        </div>
        <div class="elemt">
            <h2>Malang</h2>
        </div>
        <div class="elemt">
            <h2>Malang</h2>
        </div>
        <div class="elemt">
            <h2>Malang</h2>
        </div>
        <div class="elemt">
            <h2>Malang</h2>
        </div>

    </div>

  
</div>



</div>







<?=$this->endSection('content');?> 