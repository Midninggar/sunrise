
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



<link id="pagestyle" href="../admin/assets/css/material-dashboard.css" rel="stylesheet" />





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
  <a class="nav-link text-dark active bg-gradient-primary " href="./index.php">
    
      <div class="text-dark text-center me-2 d-flex align-items-center justify-content-center">
        <i class="material-icons opacity-10">dashboard</i>
      </div>
    
    <span class="nav-link-text ms-1">Dashboard</span>
  </a>
</li>

  
<li class="nav-item">
  <a class="nav-link text-dark " href="./content.php">
    
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
        <i class="material-icons opacity-10">login</i>
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
        <li class="breadcrumb-item text-sm text-dark active" aria-current="page">dashboard</li>
      </ol>
      <h6 class="font-weight-bolder mb-0">dashboard</h6>
      
  </nav>
  </div>
  </nav>
<!-- End Navbar -->


        


<div class="container-fluid mt-4 mb-3 bg-gradient-primary shadow-primary border-radius-xl "  style="background-image: url('../assets/img/background-01.png'); background-size:cover; height: 80vh;">
<div class="d-flex align-items-center">

<div class="row ">
 <div class="col text-center text-shadow" style="margin-left: 600px; margin-top: 100px;"><img src="../assets/img/logo.png" alt=""  style="width: 200px;" >
 <h1>Selamat Datang <br> <span> <?php echo $_SESSION["nama_pengguna"]; ?></span></h1>
 </div>
</div>

</div>
</div>


                



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

<!-- Github buttons -->
<script async defer src="https://buttons.github.io/buttons.js"></script>


<!-- Control Center for Material Dashboard: parallax effects, scripts for the example pages etc --><script src="../assets/js/material-dashboard.min.js?v=3.0.4"></script>
  </body>

</html>
