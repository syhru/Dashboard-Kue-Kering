<?php
 
include "model/model.php";


class controller{
   
    public $model;

    function __construct() {
        $this->model = new model();
    }
    function view_login(){
        include "view/login.php";
    }
    function index() {
        include "view/home.php";
    }
    function index_kukerr() {
        $data = $this->model->select_all_kuker();
        include "view/index_kuker.php"; 
    }

    function view_insert_kuker() {
        $data = $this->model->get_max_kd_kuker();
        include "view/tambah_kuker.php";
    }

    function view_edit_kuker($Kode_Kue) {
        $data = $this->model->select_id_kuker ($Kode_Kue); 
        $row = $this->model->fetch ($data); 
        include "view/edit_kuker.php";
    }

    function update_kuker() {
        $Kode_Kue = $_POST['kdb'];
        $Nama_Kue= $_POST['nm_kue'];
        $Ukuran = $_POST['uk_kue']; 
        $Harga = $_POST['hrg_kue'];
        
        $tipefile = $_FILES['gambar']['type'];
        $lokasifile = $_FILES['gambar']['tmp_name'];
        $ukuranfile = $_FILES['gambar']['size'];
        $namafile = $_FILES['gambar']['name']; 
        
        $namafoto = end(explode(".", $namafile));
        $tempatfile = "gambar/$namafoto";

         move_uploaded_file($lokasifile, $tempatfile);

       // if ($cek) {
            $update= $this->model->update_kuker($Kode_Kue, $Nama_Kue, $Ukuran, $Harga, $tempatfile);
            header("location:index.php?id=index_kue.php");
        //} else {
            
        //}

        
    }


    function delete_kue($Kode_Kue) {
        $delete = $this->model->delete_kuker($Kode_Kue);
        header("location:index.php?id=index_kue.php");

    }

    function insert_kuker() {
        $Kode_Kue = $_POST['kd_kue'];
        $Nama_Kue= $_POST['nm_kue'];
        $Ukuran = $_POST['uk_kue']; 
        $Harga = $_POST['hrg_kue'];
        // $image = $_POST['img_kue'];


       

        $tipefile = $_FILES['gambar']['type'];
        $lokasifile = $_FILES['gambar']['tmp_name'];
        $ukuranfile = $_FILES['gambar']['size'];
        $namafile = $_FILES['gambar']['name']; 
        
        $namafoto = $Kode_Kue.".".end(explode(".", $namafile));
        $tempatfile = "gambar/$namafoto";

        move_uploaded_file($lokasifile, $tempatfile);

        //if ($cek) {
            $insert = $this->model->insert_kuker($Kode_Kue, $Nama_Kue, $Ukuran, $Harga, $tempatfile);
            header("location:index.php?id=index_kue.php");
        //}
        

    }

    function destruct() {
    }
    

}



?>