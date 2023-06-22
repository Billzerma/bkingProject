<?php
namespace App\Models;
use CodeIgniter\Model;

class KaryawanModel extends Model
{
    protected $table      = 'pegawai';
    protected $primaryKey = 'id_pegawai';
    protected $returnType     = 'object';
    protected $allowedFields = ['nama', 'jenis_kelamin','alamat'];
    protected $useTimestamps = true;
}