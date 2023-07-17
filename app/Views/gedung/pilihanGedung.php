<?=$this->extend('gedung/kategori/headerKategori');?>

<?=$this->section('content');?>


<table class="table table-posting mt-5">
  
  <tbody>
  <?php foreach($gedung as $g):?>
    <tr>
      
      <td class="mar-img">
        <div class="col-md-10">
              
                <img src="\Asset\alumniCSSJS\gambar\carousel\<?= $g['sampul'];?>" class="img-fluid rounded-start img-gedung" alt="...">
        </div>
      </td>

      <td class=".desk-gedung">
        <div class="col-md-7 ps-1">
            <h5 class="card-title"><?= $g['nama_gedung'];?></h5>
            
            <p class="card-text"><?= $g['alamat'];?></p>
            <p class="card-text">Harga Sewa: <?= $g['harga_sewa'];?></p>
            <p class="card-text">Deskripsi <br><span><?= $g['deskripsi'];?></span></p>
            <a href="/pemesanan/<?= $g['id_gedung']?>" class="btn btn-success">booking</a>
        </div>
      </td>
    </tr>
    <tr>
    <?php endforeach; ?>  
      
    </tr>
    
  </tbody>
</table>























<?=$this->endSection('content');?> 