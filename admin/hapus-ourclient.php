<?php
session_start();
    include '../config/database.php';

    $id_logoclient=$_POST["id_logoclient"];
    $gambar=$_POST["gambar"];

    $sql="delete from ourclient where id_logoclient=$id_logoclient";
    $hapus_ourclient=mysqli_query($kon,$sql);

    //Menghapus gambar, gambar yang dihapus jika selain gambar default
    if ($gambar!='gambar_default.png'){
        unlink("../assets/img/ourclient/".$gambar);
    }
 

?>