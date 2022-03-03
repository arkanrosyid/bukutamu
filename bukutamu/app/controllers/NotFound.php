<?php
class NotFound extends Controller {
    public function index(){
        $data['judul']= 'Not Found';
        $this -> view ('template/header', $data);
        $this -> view('notFound/index');
         $this -> view ('template/footer');
    }
 
}