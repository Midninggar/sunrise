<?php
session_start();
    include '../config/database.php';

    $id_message=$_POST["id_message"];


    $sql="delete from message where id_message=$id_message";
    $hapus_message=mysqli_query($kon,$sql);


?>