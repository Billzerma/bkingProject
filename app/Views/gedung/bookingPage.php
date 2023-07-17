<?=$this->extend('gedung/header/hello');?>

<?=$this->section('content');?>

<div class="container">
    <div class="row">
        <div class="col">

        <div class="card mb-3">
        <img src="/Asset/alumniCSSJS/gambar/carousel/<?= $gedung['sampul'];?>" class="card-img-top img-booking-page" alt="...">
        <div class="card-body">
            <h5 class="card-title nama-gedung"><?= $gedung['nama_gedung'];?></h5>
            <p class="card-text deskripsi-gedung"><?= $gedung['deskripsi'];?>
            </p>
            <p class="att">Alamat: <span><?= $gedung['alamat'];?></span></p>
            <p class="att">Luas: <span><?= $gedung['luas_gedung'];?></span></p>
            <p class="att">Harga Sewa: <span><?= $gedung['harga_sewa'];?></span></p>
           
            
        </div>
        </div>

        </div>
    </div>

   
</div>

<div class="container-input w-75">
    <div class="row w-50  in-g shadow">
            <h2 class="book">Booking Form</h2>
            <form action="/pemesanan/save" method="post">
            <div class="col booking-input w-78">

                <div class="form-group mb-4 w-70 shadow-sm">
                    <label for="nama" class="label-in">Nama</label>
                <input type="text" class="form-control" name="nama"aria-label="Sizing example input" aria-describedby="inputGroup-sizing-default">
                </div>
                <div class="form-group mb-4 w-70 shadow-sm">
                    <label for="phone" class="label-in">Phone</label>
                <input type="text" class="form-control" name="phone" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-default">
                </div>

                <div class="form-group mb-4 w-70 shadow-sm">
                    <label for="mulaiSewa"  class="label-in">Tanggal Mulai Sewa</label>
                <input type="date" name="mulai"class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-default">
                </div>

                <div class="form-group mb-4 w-70 shadow-sm">
                    <label for="selesaiSewa"  class="label-in">Tanggal Selesai Sewa</label>
                <input type="date" name="selesai" class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-default">
                </div>

                <div class="mb-3 mb-4 w-70 shadow-sm">
                <label for=""  class="label-in">Pesan Untuk Pemilik</label>
                    <textarea class="form-control" name="pesan" id="exampleFormControlTextarea1" rows="3"></textarea>
                </div>

        </div>
        <div class="container-button">
        <button type="submit" class="btn btn-success button-booking mt-4">Booking</button>
        <a href="<?= base_url('pilihGedung') ?>" class="btn btn-danger mt-4 ms-4">Cancel</a>
    </div>
        </form>
        
    </div>
    
   
            
</div>




















<?=$this->endSection('content');?> 