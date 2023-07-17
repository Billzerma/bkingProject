<?php
namespace App\Models;
use CodeIgniter\Model;

class sewaModel extends Model{
    protected $table  = 'penyewaan';
    protected $primaryKey='id_sewa';

    protected $allowedFields=['id_sewa','nama','phone','mulai_sewa','selesai_sewa','pesan','status'];
    protected $dateFormat = 'date';




    public function getBooking($id_sewa = false){
        if($id_sewa == false){
            return $this->findAll();
        }

        return $this->where(['id_sewa' => $id_sewa])->first();
    }

    public function getUp($id_sewa = false){
        $data = [
            'status' => 'approve',
            
        ];
        
        $bkingdb->table('penyewaan')
            ->where('status IS NULL')
            ->update($data);
        
        
        
    }



    


    

    



}