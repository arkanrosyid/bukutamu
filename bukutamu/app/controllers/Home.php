<?php

class Home extends Controller {
    public function index(){
        $data['judul'] = 'Buku Tamu';
        $data['tamu'] = $this->model ('Tamu_model')-> getAllTamu();
        $this -> view ('template/header' , $data);
        $this -> view('home/index', $data);
        $this -> view ('template/footer');
    }

    public function tambah(){
       
        var_dump($_POST);
         $count=$this->model('Tamu_model')->tambahTamu($_POST);
         if($count > 0){
            Flasher::setFlash('berhasil','ditambahkan','success');
            header("Location:" . BASEURL);
            exit;
        }else {
            Flasher::setFlash('gagal','ditambahkan','danger');
        }
    }

    public function cari(){
        $data['judul']= 'Buku Tamu';
        $data['tamu'] = $this->model ('Tamu_model')-> cariDataTamu();
        $this -> view ('template/header' , $data);
        $this -> view('home/index', $data);
        $this -> view ('template/footer');
    }
    public function dashboard(){
        $this -> view('admin/dashboard', $data);
    }
}