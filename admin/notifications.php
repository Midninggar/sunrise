<!DOCTYPE html>
<html lang="en">
  <head>














<meta charset="utf-8" />
<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

<link rel="apple-touch-icon" sizes="76x76" href="assets/img/apple-icon.png">


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
  <a class="nav-link text-dark" href="./content.php">
    
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
  <a class="nav-link text-dark active bg-gradient-primary " href="./notifications.php">
    
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
  <a class="nav-link text-dark " href="./profile.html">
    
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
        <!-- Navbar -->

<nav class="navbar navbar-main navbar-expand-lg px-0 mx-4 shadow-none border-radius-xl" id="navbarBlur" data-scroll="true">
  <div class="container-fluid py-1 px-3">
    <nav aria-label="breadcrumb">
      
      <ol class="breadcrumb bg-transparent mb-0 pb-0 pt-1 px-0 me-sm-6 me-5">
        <li class="breadcrumb-item text-sm"><a class="opacity-5 text-dark" href="javascript:;">Pages</a></li>
        <li class="breadcrumb-item text-sm text-dark active" aria-current="page">notifications</li>
      </ol>
      <h6 class="font-weight-bolder mb-0">notifications</h6>
      
  </nav>
  </div>
  </nav>
    

<!-- End Navbar -->



      <!-- hf -->
      <div class="row">
        <div class="col-md-7 mt-4">
          <div class="card">
            <div class="card-header pb-0 px-3">
              <h6 class="mb-0">Penawaran Harga</h6>
            </div>

            <?php
                        // include database
                        include '../config/database.php';
                        // perintah sql untuk menampilkan daftar pengguna yang berelasi dengan tabel kategori pengguna
                        $sql="select * from message order by id_message desc";
                        $hasil=mysqli_query($kon,$sql);
                        $no=0;
                        //Menampilkan data dengan perulangan while
                        while ($data = mysqli_fetch_array($hasil)):
                        $no++;
                    ?>


            <div class="card-body pt-4 p-3">
              <ul class="list-group">
                <li class="list-group-item border-0 d-flex p-4 mb-2 bg-gray-100 border-radius-lg">
                  <div class="d-flex flex-column">
                    <h6 class="mb-3 text-sm"><?php echo $data['nama'];?></h6>
                    <span class="mb-2 text-xs">Email Address : <span class="text-dark font-weight-bold ms-sm-2"><?php echo $data['email'];?></span></span>
                    <span class="mb-2 text-xs">Phone : <span class="text-dark ms-sm-2 font-weight-bold"><?php echo $data['phone'];?></span></span>
                    <span class="mb-2 text-xs">Company : <span class="text-dark ms-sm-2 font-weight-bold"><?php echo $data['company'];?></span></span>
                    <span class="mb-2 text-xs">Website : <span class="text-dark ms-sm-2 font-weight-bold"><?php echo $data['website'];?></span></span>
                    <span class=" text-sm">Pesan : <span class="text-dark ms-sm-2 "></span></span>
                    <div class="col">
                      <span><?php echo $data['pesan'];?></span>
                    </div>
                  </div>
                  <div class="ms-auto text-end">
                    <a class="btn btn-link btn-hapus text-danger text-gradient px-3 mb-0" id_message="<?php echo $data['id_message']; ?>"><i class="material-icons text-sm me-2">delete</i>Hapus</a>

                    
                  </div>
                </li>

              </ul>
            </div>
            <?php endwhile; ?>
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
 

<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"></script>

<!--   Core JS Files   -->
<script src="..admin/assets/js/core/popper.min.js" ></script>
<script src="..admin/assets/js/core/bootstrap.min.js" ></script>
<script src="..admin/assets/js/plugins/perfect-scrollbar.min.js" ></script>
<script src="..admin/assets/js/plugins/smooth-scrollbar.min.js" ></script>

<script>
// fungsi hapus pesan
    $('.btn-hapus').on('click',function(){

        var id_message = $(this).attr("id_message");

        konfirmasi=confirm("Yakin ingin menghapus?")

        if (konfirmasi){
            $.ajax({
                url: '../admin/hapus-pesan.php',
                method: 'post',
                data: {id_message:id_message},
                success:function(data){
                    window.location.href = 'notifications.php';
                }
            });
        }
});

</script>

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
       
