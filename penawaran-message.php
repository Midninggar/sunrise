<?php
    if (isset($_POST['form_penawaran'])) {
        //Include file koneksi, untuk koneksikan ke database
        include 'config/database.php';
        
        //Fungsi untuk mencegah inputan karakter yang tidak sesuai
        function input($data) {
            $data = trim($data);
            $data = stripslashes($data);
            $data = htmlspecialchars($data);
            return $data;
        }
        
        $nama=input($_POST["nama"]);
        $email=input($_POST["email"]);
        $phone=input($_POST["phone"]);
        $company=input($_POST["company"]);
        $website=input($_POST["website"]);
        $pesan=input($_POST["pesan"]);
        $tanggal=date("Y-m-d H:i:s");


        //Query input menginput data kedalam tabel 
        $sql="insert into message (nama,email,phone,company,website,pesan,tanggal) values
        ('$nama','$email','$phone','$company','$website','$pesan','$tanggal')";
        //Mengeksekusi/menjalankan query 
        $hasil=mysqli_query($kon,$sql);
     

        //Kondisi apakah berhasil atau tidak dalam mengeksekusi query diatas
        if ($hasil) {
            header("Location:penawaran.php?");
        }
        else {
            header("Location:penawaran.php?");

        }
        
    }
?>