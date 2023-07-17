<?php
namespace App\Models;
use CodeIgniter\Model;

class gedungModel extends Model
{
    protected $table  = 'gedung';
    protected $primaryKey='id_gedung';

    protected $allowedFields=['nama_gedung','jenis_gedung','alamat','luas_gedung','harga_sewa','deskripsi','sampul','id_barang'];
    protected $dateFormat = 'date';




    public function getGedung($id_gedung = false){
        if($id_gedung == false){
            return $this->findAll();
        }

        return $this->where(['id_gedung' => $id_gedung])->first();
    }

    
    
   

}