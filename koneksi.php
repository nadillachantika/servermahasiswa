<?php 

$connect = new mysqli("localhost","root","","db_mahasiswa");
if($connect){
}else{
    echo "Connection Failed";
    exit();
}
?>