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



<link id="pagestyle" href="../admin/assets/css/material-dashboard.css" rel="stylesheet" />

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
  <a class="nav-link text-dark  " href="./content.php">
    
      <div class="text-dark text-center me-2 d-flex align-items-center justify-content-center">
        <i class="material-icons opacity-10">table_view</i>
      </div>
    
    <span class="nav-link-text ms-1">Content</span>
  </a>
</li>

  
<li class="nav-item">
  <a class="nav-link text-dark  " href="./ourclient.php">
    
      <div class="text-dark  text-center me-2 d-flex align-items-center justify-content-center">
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
  <a class="nav-link text-dark active bg-gradient-primary " href="./profile.php">
    
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

      <main class="main-content border-radius-lg ">
<!-- Navbar start -->

<nav class="navbar navbar-main navbar-expand-lg px-0 mx-4 shadow-none border-radius-xl" id="navbarBlur" data-scroll="true">
  <div class="container-fluid py-1 px-3">
    <nav aria-label="breadcrumb">
      
      <ol class="breadcrumb bg-transparent mb-0 pb-0 pt-1 px-0 me-sm-6 me-5">
        <li class="breadcrumb-item text-sm"><a class="opacity-5 text-dark" href="javascript:;">Pages</a></li>
        <li class="breadcrumb-item text-sm text-dark active" aria-current="page">profile</li>
      </ol>
      <h6 class="font-weight-bolder mb-0">profile</h6>
      
  </nav>
  </div>
  </nav>
    

<!-- End Navbar -->

<!-- Content Profile start -->

<div class="container-fluid px-2 px-md-4">
      <div class="page-header min-height-300 border-radius-xl mt-4" style="background-image: url('../assets/img/background-01.png');">
        <span class="mask  bg-gradient-primary  opacity-1"></span>
      </div>
      
      <div class="card card-body mx-3 mx-md-4 mt-n6">
        <div class="row gx-4">
          


<div class="col-12 col-xl-4">
              <div class="card card-plain h-100">
                <div class="card-header pb-0 p-3">
                  <div class="row">
                  <a class="btn btn-secondary mb-3" id="btn-tambah-profile">
                        <i class="fas fa-user-plus" data-bs-toggle="tooltip" data-bs-placement="top" title="Tambah Profile"></i>
                      </a>
                    <div class="col d-flex align-items-center">
                        
                      <h6 class="mb-2">Profile Information</h6>
                    </div>





                  </div>
                </div>

                <?php
                        // include database
                        include '../config/database.php';
                        // perintah sql untuk menampilkan daftar pengguna yang berelasi dengan tabel kategori pengguna
                        $sql="select * from pengguna order by id_pengguna desc";
                        $hasil=mysqli_query($kon,$sql);
                        $no=0;
                        //Menampilkan data dengan perulangan while
                        while ($data = mysqli_fetch_array($hasil)):
                        $no++;
                    ?>

                <div class="card-body p-3">

              
                  <ul class="list-group">
                  <div class="ms-auto text-end">
                      <a class="btn-edit" id_pengguna="<?php echo $data['id_pengguna']; ?>" kode_pengguna="<?php echo $data['kode_pengguna']; ?>">
                        <i class="fas fa-user-edit text-secondary text-sm mx-3"></i>
                      </a>
                      <a class="btn-hapus" id_pengguna="<?php echo $data['id_pengguna']; ?>" kode_pengguna="<?php echo $data['kode_pengguna']; ?>" ><i class="fas fa-user-minus text-secondary text-sm"></i>
                      </a>
                      

                    </div>
                    <li class="list-group-item border-0 ps-0 pt-0 text-sm"><strong class="text-dark">Name : </strong><?php echo $data['nama_pengguna']; ?></li>
                    <li class="list-group-item border-0 ps-0 text-sm"><strong class="text-dark">Mobile : </strong><?php echo $data['no_telp']; ?></li>
                    <li class="list-group-item border-0 ps-0 text-sm"><strong class="text-dark">Email : </strong><?php echo $data['email']; ?></li>
                    <li class="list-group-item border-0 ps-0 text-sm"><strong class="text-dark">Username : </strong><?php echo $data['username']; ?></li>
                   
                  </ul>
                </div>
                <?php endwhile; ?>
              </div>
            </div>  
            </div>
              </div>
            </div>  


<!-- Content Profile end -->


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
            <button type="button" class="close" data-dismiss="modal">&times;</button>
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
 $('#btn-tambah-profile').on('click',function(){
        
        $.ajax({
            url: '../admin/tambah-profile.php',
            method: 'post',
            success:function(data){
                $('#tampil_data').html(data);  
                document.getElementById("judul").innerHTML='Tambah Profile';
            }
        });
        // Membuka modal
        $('#modal').modal('show');
    });

       
    // fungsi edit pengguna
    $('.btn-edit').on('click',function(){

        var id_pengguna = $(this).attr("id_pengguna");
        var kode_pengguna = $(this).attr("kode_pengguna");
        $.ajax({
            url: '../admin/edit-profile.php',
            method: 'post',
            data: {id_pengguna:id_pengguna},
            success:function(data){
                $('#tampil_data').html(data);  
                document.getElementById("judul").innerHTML='Edit pengguna #'+kode_pengguna;
            }
        });
        // Membuka modal
        $('#modal').modal('show');
    });




    // fungsi hapus artikel
    $('.btn-hapus').on('click',function(){

        var id_pengguna = $(this).attr("id_pengguna");
        var gambar = $(this).attr("gambar");

        konfirmasi=confirm("Yakin ingin menghapus?")

        if (konfirmasi){
            $.ajax({
                url: '../admin/hapus-profile.php',
                method: 'post',
                data: {id_pengguna:id_pengguna,gambar:gambar},
                success:function(data){
                    window.location.href = 'profile.php';
                }
            });
        }
});

</script>
    

<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"></script>

<!--   Core JS Files   -->
<script src="..admin/assets/js/core/popper.min.js" ></script>
<script src="..admin/assets/js/core/bootstrap.min.js" ></script>
<script src="..admin/assets/js/plugins/perfect-scrollbar.min.js" ></script>
<script src="..admin/assets/js/plugins/smooth-scrollbar.min.js" ></script>


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
       
