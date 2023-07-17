<?php

namespace App\Controllers;
use App\Models\gedungModel;
use App\Models\sewaModel;

class GedungCont extends BaseController
{
    public function login()
    {
     $data = [
          'config' => config('Auth'),
      ];
      return view('gedung/login',$data);
        
    }

    public function signup()
    {
         return view('gedung/registerBking');
        
    }
    public function home()
    {
     return view('gedung/home');
        
    }

    public function admin()
    {
          
          $data=[

               'gedung'=> $this->gedungModel->getGedung()
          ];
          
         return view('gedung/adminPage/admin',$data);
        
    }

    public function pilihGedung()
    {
     $data=[

          'gedung'=> $this->gedungModel->getGedung()
     ];
          
         
         return view('gedung\pilihanGedung',$data);
        
    }


    public function bookingPage()
    {
     $data = [
          'judul' => "booking"
      ];
         return view('gedung\bookingPage',$data);
        
    }










    protected $gedungModel;
    protected $sewaModel;
    public function __construct()
    {
      $this->gedungModel = new gedungModel();
      $this->sewaModel = new sewaModel();
      $this->session = service('session');
    $this->config = config('Auth');
    $this->auth = service('authentication');
    }

    public function addGedung()
    {
          //session();
          $data=[
               
               'validation'=> \Config\Services::validation()
          ];

         return view('gedung\adminPage\addGedung',$data);
        
    }
    
    public function save()
    {
     $rules = [
          'gedung' => [
               'rules' => 'required',
               'errors'=>[
                    'required'=>'{field} nama gedung mohon diisi'
               ]
               ],

          'jenis_gedung' => [
               'rules' => 'required',
               'errors'=>[
                    'required'=>'{field} mohon diisi'
               ]
               ],
          'alamat' => [
               'rules' => 'required|min_length[10]',
               'errors'=>[
                    'required'=>'{field} mohon diisi',
                    'min_length[10]' =>'{field} masukan alamat lengkap',
                    
               ]
               ],
          'luas_gedung' => [
               'rules' => 'required',
               'errors'=>[
                    'required'=>'{field} mohon diisi',
                    
               ]
               ],
          'harga_sewa' => [
               'rules' => 'required',
               'errors'=>[
                    'required'=>'{field} mohon diisi'
               ]
               ],
          'deskripsi' => [
               'rules' => 'required|min_length[20]|max_length[200]',
               'errors'=>[
                    'required'=>'{field} mohon diisi',
                    'min_length[50]' => '{field} mohon isi tidak kurang dari 50 karakter',
                    'max_length[200]' => '{field} batas maksimal 200 karakter',
               ]
               ]              
      ];
     if (!$this->validate($rules)) {
          $validation = \Config\Services::validation();
          session()->setFlashdata('err',$validation->listErrors());
          return redirect()->to('tambah gedung')->withInput();
      }


     $gedungModel = new gedungModel;
     $gedung=$gedungModel->save([
          'nama_gedung'=>$this->request->getVar('gedung'),
          'jenis_gedung'=>$this->request->getVar('jenis_gedung'),
          'alamat'=>$this->request->getVar('alamat'),
          'luas_gedung'=>$this->request->getVar('luas_gedung'),
          'harga_sewa'=>$this->request->getVar('harga_sewa'),
          'deskripsi'=>$this->request->getVar('deskripsi'),
          'sampul'=>$this->request->getVar('sampul')
     ]);

     session()->setFlashData('pesan', 'Data Behasil Ditambahkan');
         
     return redirect()->to('/admin');
    }




    public function detail($id_gedung)
    {
     $data=[

          'gedung'=> $this->gedungModel->getGedung($id_gedung)
     ];

     // if(empty($data['gedung'])){
     //      throw new \CodeIgniter\Exception\PageNotFoundException('Data'.$id_gedung.'tidak ditemukan');
     // }

         return view('gedung\adminPage\detailGedung', $data);

     
    }


    public function delete($id_gedung)
    {
     $this->gedungModel->where('id_gedung', $id_gedung)->delete();
     session()->setFlashdata('pesan', 'Data Berhasil Dihapus');
     return redirect()->to('/admin');
        
    }


    public function edit($id_gedung)
    {
     
     $data=[
               
          'validation'=> \Config\Services::validation(),
          'gedung' => $this->gedungModel->getGedung($id_gedung)
     ];

    return view('gedung\adminPage\editGedung',$data);
    }



    public function update($id_gedung)
    {
     
     
     $gedungModel = new gedungModel;
     $gedung=$gedungModel->save([
          'id_gedung'=> $id_gedung,
          'nama_gedung'=>$this->request->getVar('gedung'),
          'jenis_gedung'=>$this->request->getVar('jenis_gedung'),
          'alamat'=>$this->request->getVar('alamat'),
          'luas_gedung'=>$this->request->getVar('luas_gedung'),
          'harga_sewa'=>$this->request->getVar('harga_sewa'),
          'deskripsi'=>$this->request->getVar('deskripsi'),
          'sampul'=>$this->request->getVar('sampul')
     ]);

     session()->setFlashData('pesan', 'Data Behasil Diubah');
         
     return redirect()->to('/admin');
    }

    public function updateStatus($id_sewa)
    {
     
     
     $data=[

          'sewa'=> $this->sewaModel->getUp($id_sewa)
     ];
     session()->setFlashData('pesan', 'Data Behasil Diubah');
         
     return redirect()->to('/admin');
    }







    public function pesanan()
    {
     
     $data=[

          'sewa'=> $this->sewaModel->getBooking()
     ];
     


     return view('gedung\adminPage\pesanan',$data);
    }
    





    public function detailBooking($id_gedung)
    {
          $data=[

               'gedung'=> $this->gedungModel->getGedung($id_gedung)
          ];

          // if(empty($data['gedung'])){
          //      throw new \CodeIgniter\Exception\PageNotFoundException('Data'.$id_gedung.'tidak ditemukan');
          // }

          return view('gedung\bookingPage', $data);

    }
    
    public function indetailbooking()
    {
          $data=[
                    
               'validation'=> \Config\Services::validation()
          ];
          return view('gedung\bookingPage',$data);
    }

    public function saveBooking()
    {
    


          $sewaModel = new sewaModel();
          $sewa=$sewaModel->save([
               'nama'=>$this->request->getVar('nama'),
               'phone'=>$this->request->getVar('phone'),
               'mulai_sewa'=>$this->request->getVar('mulai'),
               'selesai'=>$this->request->getVar('selesai'),
               'pesan'=>$this->request->getVar('pesan'),
               
          ]);

          
          
          return redirect()->to('/pilihGedung');
     }



}

