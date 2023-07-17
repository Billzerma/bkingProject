<?= $this->extend('gedung/templateAdmin/index'); ?>

<?= $this->section('page-content'); ?>


<table class="table table-posting mt-5">
  
  <tbody>
  <?php foreach($sewa as $s):?>
    <tr>
      
      

      <td class=".desk-gedung">
        <div class="col-md-7 ps-1 ms-4">
            <h5 class="card-title"><?= $s['nama'];?></h5>
            <p class="card-text">Nomor: <?= $s['phone'];?></p>
            <p class="card-text">Tanggal Mulai Sewa: <?= $s['mulai_sewa'];?></p>
            <p class="card-text">Tanggal Selesai Sewa: <?= $s['selesai_sewa'];?></p>
            <p class="card-text">Note: <?= $s['pesan'];?></p>





            
          

            
        </div>
      </td>
    </tr>
    <?php endforeach; ?>
    
  </tbody>
</table>












<?= $this->endSection(); ?>