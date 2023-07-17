<?= $this->extend('gedung/templateAdmin/index'); ?>

<?= $this->section('page-content'); ?>

    <div class="container m-tab">
    
    
        <div class="row mar-user">
            <div class="col">
                
                <h2 class="mt-2 title-table">Informasi Gedung</h2>
                <a href="<?= base_url('tambah gedung')?>" class="btn btn-primary">Tambah Gedung</a>
                
                <?php if(session()->getFlashData('pesan')):?>
                <div class="alert alert-success" role="alert"> 
                    <?= session()->getFlashData('pesan')?>
                </div>
                <?php endif;?>
              
                
                <hr>
                <table class="table shadow">
                    <thead class="table-dark ">
                        <tr>
                            <th scope="col title-th">No.</th>
                            <th scope="col title-th">Foto</th>
                            <th scope="col title-th">Nama</th>
                            <th scope="col title-th">Alamat</th>
                            <th scope="col title-th">Aksi</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php foreach($gedung as $g):?>
                        <tr>
                            
                            <th scope="row"></th>
                            <td><img src="Asset/alumniCSSJS/gambar/carousel/<?= $g['sampul'];?>" alt="" class="sampul">
                            </td>
                            <td><?= $g['nama_gedung'];?></td>
                            <td><?= $g['alamat'];?></td>
                            <td>

                                <a href="admin/<?= $g['id_gedung']?>" class="btn btn-success">Detail</a>
                            </td>
                        </tr>
                        <?php endforeach; ?>
                        
                    </tbody>
                </table>
            </div>
        </div>
    </div>

<?= $this->endSection(); ?>