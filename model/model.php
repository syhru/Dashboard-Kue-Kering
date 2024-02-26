<?php
class model{
    //inisialisai awal untuk class biasa disebut instansiasi
    public $connect; //inisialisasi variabel agar bisa di panggil disemua function
    function __construct(){
        $this->connect = mysqli_connect("localhost", "root", "", "uas_syahru_2021310181");
    }

    function execute($query){
        return mysqli_query($this->connect,$query);
    }

    //awal section data
    function select_all_kuker(){
        $query = "select * from tb_kuker";
        return $this->execute($query);
    }

    function get_max_kd_kuker(){
        $query = "select max(id_kue)as kode from tb_kuker"; //query untuk membuat kode kue otomatis
        return $this->execute($query);
    }

    function select_id_kuker($id){
        $query = "select * from tb_kuker where id_kue='$id'";
        return $this->execute($query);
    }

    function update_kuker($Kode_Kue, $Nama_Kue, $Ukuran, $Harga, $tempatfile){
        $query = "update tb_kuker set nama_kue='$Nama_Kue', ukuran='$Ukuran', harga='$Harga', gambar='$tempatfile' where tb_kuker.id_kue='$Kode_Kue'";
        return $this->execute($query);
    }

    function delete_kuker($id){
        $query = "delete from tb_kuker where id_kue='$id'";
        return $this->execute($query);
    }

    function insert_kuker($Kode_Kue, $Nama_Kue, $Ukuran, $Harga, $tempatfile){
        $query = "insert into tb_kuker (id_kue, nama_kue, ukuran, harga, gambar) VALUES ('$Kode_Kue', '$Nama_Kue', '$Ukuran', '$Harga', '$tempatfile')";
        return $this->execute($query);
    }
    //akhir section data

    function fetch($var){
        return mysqli_fetch_array($var);
    }

    //pasangan construct adalah destruck untuk menghapus inisialisasi class pada memori
    function __destruct(){

    }
}
?>