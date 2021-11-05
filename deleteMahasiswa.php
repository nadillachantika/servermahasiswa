<?php

include 'koneksi.php';

$id = $_POST['id'];


$sql = "DELETE FROM tbl_mahasiswa WHERE id = $id";
$isSuccess = $connect-> query($sql);

if($isSuccess){
    $res['is_success'] = true;
    $res['message']= "Berhasi; hapus data mahasiswa";
}

echo json_encode($res);
?>