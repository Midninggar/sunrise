<?php 
  session_start();
  if (!$_SESSION["id_pengguna"]){
        header('Location:../index.php?halaman=login&pesan=login_dulu');
  }
?>


<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="icon" href="assets/img/logo.png" type="image/x-icon">
<title>Sunrise Offset Printing</title>
<!-- Font Awesome -->
<link
href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css"
rel="stylesheet"
/>


    <link href="../css/style.css" rel="stylesheet" />
    <link rel="stylesheet" href="../css/style.min.css">
    <script src="../js/main.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"></script>


</head>
<body>
<div class="container-fluid bg-light  position-relative shadow navbar-brand"> 
<nav
        class="navbar navbar-expand-lg bg-light navbar-light py-3 py-lg-0 px-0 px-lg-5"
      >

      <a class="logo justify-content-center mb-4" href="#">
        <img src="../assets/img/logo2.png" alt="" width="200" ></a>


</nav>
</div>


<div class="jumbotron text-center" >
<?php 
include '../config/database.php';
if(isset($_GET['halaman']) && !isset($_GET['kategori'])){
    $halaman = $_GET['halaman'];
   echo "<h1>".ucwords($halaman)."</h1>";
}

if(isset($_GET['halaman']) &&  isset($_GET['kategori'])){

    include '../config/database.php';
    $ambil_kategori = mysqli_query ($kon,"select * from kategori where id_kategori='".$_GET['kategori']."' limit 1");
    $row = mysqli_fetch_assoc($ambil_kategori); 
    $kategori = $row['nama_kategori'];
    $halaman = $_GET['halaman'];
   echo "<h1>".ucwords($halaman)." ".ucwords($kategori)."</h1>";
}
?>
</div>

<div class="container">
    <div class="row"  >
        <div class="col-sm-2">
            <div class="list-group " >
                <a href="index.php?halaman=kategori" class="list-group-item list-group-item-action text-light" style=" background-color: #00BFA6 ">Produk </a>
                <a href="index.php?halaman=komentar" class="list-group-item list-group-item-action text-light"style=" background-color: #00BFA6 ">Komentar</a>
                <a href="index.php?halaman=admin" class="list-group-item list-group-item-action text-light"style=" background-color: #00BFA6 ">Admin</a>

                <a href="logout.php" class="list-group-item list-group-item-action text-light bg-dark">Logout</a>
            </div>
        </div> 
        <div class="col-sm-10">
        <?php 
            if(isset($_GET['halaman'])){
                $halaman = $_GET['halaman'];
                switch ($halaman) {
                    case 'kategori':
                        include "produk/kategori.php";
                        break;
                    case 'produk':
                        include "produk/index.php";
                        break;
                    case 'komentar':
                        include "komentar/index.php";
                        break;
                    case 'admin':
                        include "admin/index.php";
                        break;
                    default:
                    echo "<center><h3>Maaf. Halaman tidak di temukan !</h3></center>";
                    break;
                }
            }else {
                include "dashboard.php";
            }
        ?>
        </div>
    </div>
    <br>
</div>
<div class="container-fluid bg-primary pt-5">
        <p class="text-center text-white">
          &copy;
          <a class="text-light font-weight-bold" href="#">Sunrise Offset Printing</a>.
          All Rights Reserved.
        </p>
      </div>
</body>
</html>
