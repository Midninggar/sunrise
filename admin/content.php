<?php 
  session_start();
  if (!$_SESSION["id_pengguna"]){
        header('Location:../login.php');
  }
?>

<!DOCTYPE html>
<html lang="en">
  <head>

<meta charset="utf-8" />
<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">




    <!--logo title-->
    <link rel="icon" href="assets/img/logo.png" type="image/x-icon">
    <title>Sunrise Offset Printing</title>



<!--     Fonts and icons     -->
<link rel="stylesheet" type="text/css" href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700,900|Roboto+Slab:400,700" />

<!-- Nucleo Icons -->
<link href="../admin/assets/css/nucleo-icons.css" rel="stylesheet" />
<link href="../admin/assets/css/nucleo-svg.css" rel="stylesheet" />

<!-- Font Awesome Icons -->
<script src="https://kit.fontawesome.com/42d5adcbca.js" crossorigin="anonymous"></script>

<!-- Material Icons -->
<link href="https://fonts.googleapis.com/icon?family=Material+Icons+Round" rel="stylesheet">

<!-- CSS Files -->



<link id="pagestyle" href="../admin/assets/css/material-dashboard.css?v=3.0.4" rel="stylesheet" />

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>



  </head>


  <body class="g-sidenav-show  bg-gray-100">
<aside class="sidenav navbar navbar-vertical navbar-expand-xs border-0 border-radius-xl my-3 fixed-start ms-3   bg-gradient-white" id="sidenav-main">

  <div class="sidenav-header">
    <i class="fas fa-times p-3 cursor-pointer text-primary position-absolute end-0 top-0 d-none d-xl-none" aria-hidden="true" id="iconSidenav"></i>
    <a class="navbar-brand m-0" href="" target="_blank">
      <img src="assets/img/logo2.png" class="navbar-brand-img h-100" alt="main_logo">
    </a>
  </div>


  <hr class="horizontal light mt-0 mb-2">

  <div class="collapse navbar-collapse  w-auto " id="sidenav-collapse-main">
    <ul class="navbar-nav">

<li class="nav-item">
  <a class="nav-link text-dark " href="./index.php">
    
      <div class="text-dark text-center me-2 d-flex align-items-center justify-content-center">
        <i class="material-icons opacity-10">dashboard</i>
      </div>
    
    <span class="nav-link-text ms-1">Dashboard</span>
  </a>
</li>

  
<li class="nav-item">
  <a class="nav-link text-dark active bg-gradient-primary " href="./content.php">
    
      <div class="text-dark text-center me-2 d-flex align-items-center justify-content-center">
        <i class="material-icons opacity-10">table_view</i>
      </div>
    
    <span class="nav-link-text ms-1">Content</span>
  </a>
</li>

  
<li class="nav-item">
  <a class="nav-link text-dark " href="./ourclient.php">
    
      <div class="text-dark text-center me-2 d-flex align-items-center justify-content-center">
        <i class="material-icons opacity-10">receipt_long</i>
      </div>
    
    <span class="nav-link-text ms-1">Our Client</span>
  </a>
</li>


  
<li class="nav-item">
  <a class="nav-link text-dark " href="./notifications.php">
    
      <div class="text-dark text-center me-2 d-flex align-items-center justify-content-center">
        <i class="material-icons opacity-10">notifications</i>
      </div>
    
    <span class="nav-link-text ms-1">Notifications</span>
  </a>
</li>

  
    <li class="nav-item mt-3">
      <h6 class="ps-4 ms-2 text-uppercase text-xs text-dark font-weight-bolder opacity-8">Account pages</h6>
    </li>
  
<li class="nav-item">
  <a class="nav-link text-dark " href="./profile.php">
    
      <div class="text-dark text-center me-2 d-flex align-items-center justify-content-center">
        <i class="material-icons opacity-10">person</i>
      </div>
    
    <span class="nav-link-text ms-1">Profile</span>
  </a>
</li>

  
<li class="nav-item">
  <a class="nav-link text-dark " href="./logout.php">
    
      <div class="text-dark text-center me-2 d-flex align-items-center justify-content-center">
        <i class="material-icons opacity-10">logout</i>
      </div>
    
    <span class="nav-link-text ms-1">Logout</span>
  </a>
</li>
    </ul>
  </div>
</aside>

<main class="main-content position-relative max-height-vh-100 h-100 border-radius-lg ">
        <!-- Navbar -->

<nav class="navbar navbar-main navbar-expand-lg px-0 mx-4 shadow-none border-radius-xl" id="navbarBlur" data-scroll="true">
  <div class="container-fluid py-1 px-3">
    <nav aria-label="breadcrumb">
      
      <ol class="breadcrumb bg-transparent mb-0 pb-0 pt-1 px-0 me-sm-6 me-5">
        <li class="breadcrumb-item text-sm"><a class="opacity-5 text-dark" href="javascript:;">Pages</a></li>
        <li class="breadcrumb-item text-sm text-dark active" aria-current="page">content</li>
      </ol>
      <h6 class="font-weight-bolder mb-0">content</h6>

    </nav>
  <div class="collapse navbar-collapse mt-sm-0 mt-2 me-md-0 me-sm-4" id="navbar">
      <ul class="navbar-nav  justify-content-end">
      <li class="nav-item d-xl-none ps-3 d-flex align-items-center">
              <a href="javascript:;" class="nav-link text-body p-0" id="iconNavbarSidenav">
                <div class="sidenav-toggler-inner">
                  <i class="sidenav-toggler-line"></i>
                  <i class="sidenav-toggler-line"></i>
                  <i class="sidenav-toggler-line"></i>
                </div>
              </a>
            </li>
      </ul>
    </div>
    
  </div>
  </nav>
    

<!-- End Navbar -->



<!-- Table Start -->
<div class="container-fluid py-4">
      <div class="row">
        <div class="col-12">
          <div class="card my-4">
            <div class="card-header">
            <button type="button" id="btn-tambah-produk" class="btn btn-primary"><span class="text"><i class="fas fa-plus fa-sm m-2"></i> Tambah produk</span></button>
              <div class="bg-gradient-primary shadow-primary border-radius-lg pt-4 pb-3">
                <h6 class="text-white text-capitalize ps-3">Product table</h6>
                
              </div>
            </div>

            <div class="card-body px-0 pb-2">
              <div class="table-responsive p-0">
                <table class="table align-items-center mb-0">
                  <thead>
                    <tr>
                      <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ps-4">No</th>
                      <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ps-2">Gambar</th>
                      <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ps-2">Nama Produk</th>
                      <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ps-2">Deskripsi</th>
                      <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ps-2">Admin ID</th>
                      <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ps-2">Tanggal</th>
                      <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ps-2">Status</th>
                      <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ps-6">aksi</th>
                      
                    </tr>
                  </thead>

                  <tbody>

                  <?php
                        // include database
                        include '../config/database.php';
                        // perintah sql untuk menampilkan daftar pengguna yang berelasi dengan tabel kategori pengguna
                        $sql="select * from produk order by id_produk desc";
                        $hasil=mysqli_query($kon,$sql);
                        $no=0;
                        //Menampilkan data dengan perulangan while
                        while ($data = mysqli_fetch_array($hasil)):
                        $no++;
                    ?>
                    <tr>
                    <td class="ps-4"><?php echo $no; ?></td>
                <td><img  src="../assets/img/produk/<?php echo $data['gambar'];?>" class="avatar avatar-sm me-3 border-radius-lg" alt="user1" width="80px"></td>
                <td><?php echo $data['judul_produk']; ?></td>
                <td><?php 
                          $ambil=$data["deskripsi"];
                          $panjang = strip_tags(html_entity_decode($ambil,ENT_QUOTES,"ISO-8859-1"));
                          echo substr($panjang, 0, 50);?></td>
                <td><?php echo $data['id_pengguna']; ?></td>
                <td><?php echo date("d-m-Y",strtotime($data['tanggal'])); ?></td>
                <td><?php echo $data['status'] == 1 ? "<span class='text-success'>Publish</span>" : "<span class='text-warning'>Konsep</span>"; ?> </td>

                <td>   
                    <button class="btn-edit-produk btn btn-warning btn-circle" id_produk="<?php echo $data['id_produk']; ?>" kode_produk="<?php echo $data['kode_produk']; ?>" data-toggle="tooltip" title="Edit produk" data-placement="top">Edit</button> 

                    <button class="btn-hapus-produk btn btn-danger btn-circle"  id_produk="<?php echo $data['id_produk']; ?>"  gambar="<?php echo $data['gambar']; ?>"  data-toggle="tooltip" title="Hapus produk" data-placement="top">Hapus</button>
                </td>

                 </tr>
                    <?php endwhile; ?>
                  </tbody>


                </table>


              </div>
            </div>
          </div>
        </div>
      </div>

      <!-- table end -->

     





<footer class="footer py-4 w-100  ">
  <div class="container-fluid">
    <div class="row align-items-center justify-content-lg-between">
      <div class="col-lg-6 mb-lg-0 mb-4">
        <div class="copyright text-center text-sm text-muted text-lg-start">
          © <script>
            document.write(new Date().getFullYear())
          </script>,
          made with <i class="fa fa-heart"></i> by
          <a href="" class="font-weight-bold" target="_blank">Sunrise Offset Printing</a>
          for a better web.
        </div>
      </div>

    </div>
  </div>
</footer>

</div>
</main>

<!-- Modal -->
<div class="modal fade" id="modal">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">

        <!-- Bagian header -->
        <div class="modal-header">
            <h4 class="modal-title" id="judul"></h4>
            <button type="button" class="close btn-danger" data-dismiss="modal">&times;</button>
        </div>

        <!-- Bagian body -->
        <div class="modal-body">
            <div id="tampil_data">

            </div>  
        </div>
        <!-- Bagian footer -->
        <div class="modal-footer">
            <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
        </div>

        </div>
    </div>
</div>



<script>



    $('#btn-tambah-produk').on('click',function(){
        
        $.ajax({
            url: '../admin/tambah-produk.php',
            method: 'post',
            success:function(data){
                $('#tampil_data').html(data);  
                document.getElementById("judul").innerHTML='Tambah Produk';
            }
        });
        // Membuka modal
        $('#modal').modal('show');
    });

        // fungsi edit produk
    $('.btn-edit-produk').on('click',function(){
    
        var id_produk = $(this).attr("id_produk");
        var kode_produk = $(this).attr("kode_produk");
     
        $.ajax({
            url: '../admin/edit-produk.php',
            method: 'post',
            data: {id_produk:id_produk,kode_produk:kode_produk},
            success:function(data){
                $('#tampil_data').html(data);  
                document.getElementById("judul").innerHTML='Edit Produk #'+kode_produk;
            }
        });
        // Membuka modal
        $('#modal').modal('show');
    });


    // fungsi hapus produk
    $('.btn-hapus-produk').on('click',function(){

        var id_produk = $(this).attr("id_produk");
        var gambar = $(this).attr("gambar");
        var kategori = $('#kategori').val();
        konfirmasi=confirm("Yakin ingin menghapus?")
        
        if (konfirmasi){
            $.ajax({
                url: '../admin/hapus-produk.php',
                method: 'post',
                data: {id_produk:id_produk,gambar:gambar},
                success:function(data){
                    window.location.href = 'content.php';
                }
            });
        }

     
    });

</script>
    



<!--   Core JS Files   -->
<script src="../admin/assets/js/core/popper.min.js" ></script>

<script src="../admin/assets/js/plugins/perfect-scrollbar.min.js" ></script>
<script src="../admin/assets/js/plugins/smooth-scrollbar.min.js" ></script>
<script src="../admin/assets/js/plugins/chartjs.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"></script>

<script>
  var win = navigator.platform.indexOf('Win') > -1;
  if (win && document.querySelector('#sidenav-scrollbar')) {
    var options = {
      damping: '0.5'
    }
    Scrollbar.init(document.querySelector('#sidenav-scrollbar'), options);
  }
</script>



  </body>

</html>
       
