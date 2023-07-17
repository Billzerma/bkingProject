<?= $this->extend('gedung/templateAdmin/index'); ?>

<?= $this->section('page-content'); ?>


<div class="container">
    <div class="row">
        <div class="col">
        <div class="card mb-3" style="max-width: 1060px;">
        <div class="row g-0">
            <div class="col-md-4 ">
            <?php if (isset($gedung['sampul'])) : ?>
            <img src="/Asset/alumniCSSJS/gambar/carousel/<?= $gedung['sampul'];?>" class="img-fluid rounded-start img-detail " alt="...">
            <?php endif; ?>
            </div>
            <div class="col-md-8">
            <div class="card-body">
                <h5 class="card-title component-detail"><?= $gedung['nama_gedung'];?></h5>
                <h5 class="card-title component-detail">Jenis: <?= $gedung['jenis_gedung'];?></h5>
                <h5 class="card-title component-detail">Alamat:<?= $gedung['alamat'];?></h5>
                <h5 class="card-title component-detail">Luas gedung:<?= $gedung['luas_gedung'];?></h5>
                <h5 class="card-title component-detail">Harga sewa<?= $gedung['harga_sewa'];?></h5>
                <p class="card-text component-detail">Deskripsi: <br> <span><?= $gedung['deskripsi'];?></span></p>
               
                <a href="<?= base_url('admin/edit/' . $gedung['id_gedung']); ?>" class="btn btn-warning">Edit Data</a>

                <form action="/admin/<?= $gedung['id_gedung'];?>" method="post" class="d-inline">
                
                <input type="hidden" name="_method" value="DELETE">
                <button type="submit"  class="btn btn-primary" onclick="return confirm('Apakah Anda');">Hapus</button>
                </form>
                
                <a href="<?= base_url('admin')?>" class="btn btn-primary">Kembali</a>
            </div>
            </div>
        </div>
        </div>
        </div>
    </div>
</div>







<?= $this->endSection(); ?>