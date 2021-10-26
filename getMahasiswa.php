<?php

include 'koneksi.php';
// $hasil = $connect-> query("select * from tbl_mahasiswa");

// $result = array();
// while ($dapatData = $hasil -> fetch_assoc()){
//     $result[] = $dapatData;
// }
// echo json_encode($result);


$sql = "SELECT * FROM tbl_mahasiswa";
$result = $connect->query($sql);

if($result->num_rows > 0){
    $res['is_success'] = true;
    $res['message'] = "Berhasil get data mahasiswa";
    $res['data'] = array();
    while($row = $result->fetch_assoc()){
        $res['data'][] = $row;
    } 

}else{
    $res['is_success'] = false;
    $res['message']= "Gagal get data mahasiswa";
    $res['data'] = null;
}
echo json_encode($res);
?>