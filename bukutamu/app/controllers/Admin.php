<?php

    class Admin extends Controller{
        public function index(){
            $this -> view('admin/index');
        }

        public function login(){
            $result=$this->model('Admin_model')->login($_POST);

            if ($result>0){
                $_SESSION['admin']=$result['email'];
                header("Location:" . BASEURL."public/admin/dashboard");
                exit;
            }
        }

        public function dashboard(){
            $data['tamu'] = $this->model ('Tamu_model')-> getAllTamu();
            $this -> view('admin/dashboard',$data);
        }

        public function logout(){
            unset($_SESSION['admin']);
            header("Location:" . BASEURL);
            exit;
        }

        public function cari(){
            $data['judul']= 'Buku Tamu';
            $data['tamu'] = $this->model ('Tamu_model')-> cariDataTamu();
            $this -> view ('template/header' , $data);
            $this -> view('admin/dashboard', $data);
            $this -> view ('template/footer');
        }

        public function hapus($id){
       
            var_dump($id);
             $count=$this->model('Tamu_model')->hapusTamu($id);
             if($count > 0){
                Flasher::setFlash('berhasil','dihapus','success');
                header("Location:" . BASEURL."public/admin");
                exit;
            }else {
                Flasher::setFlash('gagal','dihapus','danger');
            }
        }

        public function getUbah(){
            echo json_encode($this->model('Tamu_model')->getTamuById($_POST['id']));
        }
    }