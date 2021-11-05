<?php

include 'koneksi.php';

$id = $_POST['id'];
$nama = $_POST['nama'];
$nim = $_POST['nim'];
$jurusan = $_POST['jurusan'];
$alamat = $_POST['alamat'];
$hp = $_POST['hp'];


$sql = "UPDATE tbl_mahasiswa SET nama = '$nama', nim = '$nim', jurusan = '$jurusan', alamat = '$alamat', hp = '$hp' WHERE id = $id ";

$isSuccess = $connect->query($sql);

if($isSuccess){
    $res['is_success']= true;
    $res['message'] = "Berhasil mengubah data mahasiswa";

}else{
    $res['is_success'] = false;
    $res['message'] = "Gagal mengubah data mahasiswa";
}
echo json_encode($res);


?>