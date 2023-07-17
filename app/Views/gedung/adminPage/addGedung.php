<?= $this->extend('gedung/templateAdmin/index'); ?>

<?= $this->section('page-content'); ?>


<div class="container-input ms-8">
    <div class="row w-75   mar-add-gedung shadow">
            <h2 class="inf-gedung">Masukan Informasi Gedung Anda</h2>

            <?php if (session()->has('err')) : ?>
            <div class="alert alert-danger" role="alert">
            <?php echo session('err'); ?>
            </div>
            <?php endif; ?>

            <form action="admin/save" method="post" >
            <?= csrf_field();?>
            <div class="col booking-input w-78">

                <div class="form-group mb-4 w-70 shadow-sm">
                    <label for="gedung" class="label-in">Gedung</label>
                <input type="text" class="form-control " name="gedung" autofocus  aria-label="Sizing example input" aria-describedby="inputGroup-sizing-default" value=<?= old('gedung');?>>
                
                </div>

                <div class="form-group mb-4 w-70 shadow-sm">
                    <label for="jenis_gedung"  class="label-in">Jenis Gedung</label>
                    <select name="jenis_gedung" value=<?= old('jenis_gedung')?> id="">
                        <option value="">Pilih</option>
                        <option value="Gedung Olahraga">Gedung olahraga</option>
                        <option value="Gedung Pernikahan">Gedung pernikahan</option>
                        <option value="Gedung Pertemuan">Gedung pertemuan</option>
                        <option value="Gedung Serbaguna">Gedung serbaguna</option>
                    </select>
                
                </div>

                <div class="form-group mb-4 w-70 shadow-sm">
                    <label for="alamat"  class="label-in">Alamat</label>
                <input type="d" class="form-control" name="alamat" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-default"  value=<?= old('alamat');?>>
                </div>

                <div class="form-group mb-4 w-70 shadow-sm">
                    <label for="luas"  class="label-in">Luas Gedung</label>
                <input type="text" class="form-control" name="luas_gedung"  aria-label="Sizing example input" aria-describedby="inputGroup-sizing-default" value=<?= old('luas_gedung');?>>
                </div>
                <div class="form-group mb-4 w-70 shadow-sm">
                    <label for="harga"  class="label-in">Harga Sewa</label>
                <input type="text" class="form-control" name="harga_sewa"  aria-label="Sizing example input" aria-describedby="inputGroup-sizing-default" value=<?= old('harga_sewa');?>>
                </div>

                <div class="mb-3 mb-4 w-70 shadow-sm">
                <label for="deskripsi"  class="label-in">Deskripsi</label>
                    <textarea class="form-control" name="deskripsi"  id="exampleFormControlTextarea1" rows="3" value=<?= old('deskripsi');?>></textarea>
                </div>

                <div class="mb-3 mb-4 w-70 shadow-sm">
                    <div class="row">
                        <div class="col-5">
                        <img src="Asset\alumniCSSJS\gambar\slider\Default.jpg" alt="" class="img-gedung">
                        </div>
                        <div class="col-5">

                        <div class="custom-file mar-csf">
                        <input type="text" class="custom-file-input" id="sampul" name="sampul" onchange="previewImg()"  value=<?= old('sampul')?>>
                        <label class="custom-file-label" for="sampul">Pilih Gambar</label>
                    </div>
                        </div>
                    </div>
                    
                
                </div>

        </div>

                <button type="submit" class="btn btn-success btn-simpan">Posting</button>
        </form>
        
 </div>

    <?= $this->endSection(); ?>
