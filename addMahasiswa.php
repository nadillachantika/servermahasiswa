<?php
include 'koneksi.php';
$nama = $_POST['nama'];
$nim = $_POST['nim'];
$jurusan = $_POST['jurusan'];
$alamat = $_POST['alamat'];
$hp = $_POST['hp'];

// $connect->query("INSERT INTO tbl_mahasiswa (nama,nim,jurusan,alamat,nohp) 
            // values ('".$nama."', '".$nim."','".$jurusan."','".$alamat."','".nohp."')");
   
$sql = "INSERT INTO tbl_mahasiswa(nama,nim,jurusan,alamat,hp) VALUES('$nama','$nim','$jurusan','$alamat','$hp')";

$isSuccess = $connect = $connect->query($sql);

if($isSuccess){
    $res['is_success'] = true;
    $res['meesage'] = "Berhasil Menambahkan Data Mahasiswa";

}else{
    $res['is_success']= false;
    $res['message'] = "Gagal Menambahkan Data Mahasiswa";
}
echo json_encode($res);

?>