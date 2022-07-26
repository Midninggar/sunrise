<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8" />

    <meta content="width=device-width, initial-scale=1.0" name="viewport" />
    <meta content="Free HTML Templates" name="keywords" />
    <meta content="Free HTML Templates" name="description" />

    <!-- Favicon -->
    <link href="img/favicon.ico" rel="icon" />

    <!-- Google Web Fonts -->
    <link rel="preconnect" href="https://fonts.gstatic.com" />
    <link
      href="https://fonts.googleapis.com/css2?family=Handlee&family=Nunito&display=swap"
      rel="stylesheet"
    />

    <!-- Font Awesome -->
    <link
      href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css"
      rel="stylesheet"
    />

    <!-- Flaticon Font -->
    <link href="lib/flaticon/font/flaticon.css" rel="stylesheet" />

    <!-- Libraries Stylesheet -->
    <link href="lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet" />
    <link href="lib/lightbox/css/lightbox.min.css" rel="stylesheet" />

    <!-- Customized Bootstrap Stylesheet -->
    <link href="css/style.css" rel="stylesheet" />

    <!--logo title-->
    <link rel="icon" href="assets/img/logo.png" type="image/x-icon">
    <title>Sunrise Offset Printing</title>

  </head>

  <body>
 <!-- Navbar Start -->
 <div class="container-fluid bg-light  position-relative shadow navbar-brand">
  <nav
    class="navbar navbar-expand-lg bg-light navbar-light py-3 py-lg-0 px-0 px-lg-5"
  >

  <a class="navbar-brand" href="#">
    <img src="assets/img/logo2.png" alt="" width="100" ></a>


    <button
      type="button"
      class="navbar-toggler"
      data-toggle="collapse"
      data-target="#navbarCollapse"
    >
      <span class="navbar-toggler-icon"></span>
    </button>
    <div
      class="collapse navbar-collapse justify-content-between"
      id="navbarCollapse"
    >
      <div class="navbar-nav font-weight-bold mx-auto py-0">
        <a href="index.php" class="nav-item nav-link">Home</a>
        <a href="service.php" class="nav-item nav-link active">Service</a>
        <a href="alat.php" class="nav-item nav-link">Alat</a>
        <a href="penawaran.php" class="nav-item nav-link">Penawaran Harga</a>
        <a href="kontak.php" class="nav-item nav-link">Kontak</a>

      </div>

    </div>
  </nav>
</div>
<!-- Navbar End -->



    <!-- Header Start -->
    <div class="container-fluid bg-primary mb-5">
      <div
        class="d-flex flex-column align-items-center justify-content-center"
        style="min-height: 400px"
      >
        <h3 class="display-3 font-weight-bold text-white">Packaging Product</h3>

      </div>
    </div>
    <!-- Header End -->



    <!-- Blog Start -->
    <div class="container-fluid pt-5">
  <div class="container">
    <div class="text-center pb-2">
      <p class="section-title px-5">
        <span class="px-2">Our</span>
      </p>
      <h1 class="mb-4">Product</h1>
    </div>


    <div class="row pb-3">
<?php
         
    include 'config/database.php';
    if (isset($_GET['id_produk'])) {
        $sql="select * from produk where status=1 order by id_produk desc";
    }else {
        $sql="select * from produk where status=1 order by id_produk desc";
    }

    
    $hasil=mysqli_query($kon,$sql);
    $jumlah = mysqli_num_rows($hasil);
    if ($jumlah>0){
        while ($data = mysqli_fetch_array($hasil)):
    ?>

  <div class="col-lg-4 mb-4"  >
  <div class="card border-0 shadow mb-5 bg-primary p-2 mx-auto" style="width: 300px; height: 480px;">
      <a href="produk.php?halaman=produk&id=<?php echo $data['id_produk'];?>" style="width: 100%; height: 100%px;"><img src="assets/img/produk/<?php echo $data['gambar'];?>" max-width="100%" max-height="100%" class="card-img-top mb-2" alt="Gambar tidak ditemukan"></a>

        <div class="card-body bg-light mb-2 text-center" >
          <h4 class="card-title" ><?php echo $data['judul_produk'];?></h4>
          <p class="card-text" ><?php 
                          $ambil=$data["deskripsi"];
                          $panjang = strip_tags(html_entity_decode($ambil,ENT_QUOTES,"ISO-8859-1"));
                          echo substr($panjang, 0, 50);?></p>

                          
        </div>
        <a href="produk.php?halaman=produk&id=<?php echo $data['id_produk'];?>" class="btn  btn-primary shadow-sm px-4 mx-auto my-2" role="button">Selengkapnya</a>
    </div>
    </div>
    <?php 
            endwhile;
        }else {
            echo "<div class='alert alert-warning'> Tidak ada artikel pada kategori ini.</div>";
        };
        ?>
    </div>
    </div>
  </div>  
  </div>
    <!-- Blog End -->

  <!-- Footer Start -->
  <div
      class="container-fluid bg-light text-white mt-5 py-5 px-sm-5 px-md-5"
    >
      <div class="row pt-1">
        <div class="col-lg-6 px-5">
          <a class="navbar-brand px-md-1 mb-2" href="#">
            <img src="assets/img/logo2.png" alt="" width="200" ></a>
          <p>
          Tim kami terdiri dari banyak individu berbakat. Tim desain akan membantu mengembangkan produk.
          Tim produksi dilengkapi dengan mesin Heidelberg, yang dikenal sebagai pemasok terkemuka dunia untuk perusahaan percetakan komersial, pengemasan dan label. Mereka akan bekerja secara efisien dan berusaha memberikan hasil terbaik.
          Ada juga Quality Control untuk memastikan semua produk memenuhi standar dan siap dikirim ke pelanggan.
          </p>

        </div>
        <div class="col-lg-3 mb-3 ">
          <h3 class="text-primary mb-3">Get In Touch</h3>
          <div class="d-flex">
            <h4 class="fa fa-map-marker-alt text-primary"></h4>
            <div class="pl-3">
              <h5 class="text-white">Address</h5>
              <p>Jl. Tidar No. 290, Surabaya</p>
            </div>
          </div>
          <div class="d-flex">
            <h4 class="fa fa-envelope text-primary"></h4>
            <div class="pl-3">
              <h5 class="text-white">Email</h5>
              <p>sunriseoffsetprinting@gmail.com</p>
            </div>
          </div>
          <div class="d-flex">
            <h4 class="fa fa-phone-alt text-primary"></h4>
            <div class="pl-3">
              <h5 class="text-white">Phone</h5>
              <p>031 545 1952</p>
            </div>
          </div>
        </div>

        <div class="col-lg-2 mb-3 ">
          <h3 class="text-primary mb-3">Quick Links</h3>
          <div class="d-flex flex-column justify-content-start">
            <a class="text-white mb-2" href="index.php"
              ><i class="fa fa-angle-right mr-2"></i>Home</a
            >
            <a class="text-white mb-2" href="service.php"
              ><i class="fa fa-angle-right mr-2"></i>Service</a
            >
            <a class="text-white mb-2" href="alat.php"
              ><i class="fa fa-angle-right mr-2"></i>Alat</a
            >
            <a class="text-white mb-2" href="penawaran.php"
              ><i class="fa fa-angle-right mr-2"></i>Penawaran Harga</a
            >
            <a class="text-white mb-2" href="kontak.php"
              ><i class="fa fa-angle-right mr-2"></i>Kontak</a
            >

          </div>
        </div>
        
      </div>

      <div
        class="container-fluid pt-5"
        style="border-top: 1px solid rgba(21, 19, 168, 0.2) ;"
      >
        <p class="text-center text-white">
          &copy;
          <a class="text-primary font-weight-bold" href="#">Sunrise Offset Printing</a>.
          All Rights Reserved. 
        </p>
      </div>
    </div>
    <!-- Footer End -->

    <!-- Back to Top -->
    <a href="#" class="btn btn-primary p-3 back-to-top"
      ><i class="fa fa-angle-double-up"></i
    ></a>

    <!-- JavaScript Libraries -->
    <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.bundle.min.js"></script>
    <script src="lib/easing/easing.min.js"></script>
    <script src="lib/owlcarousel/owl.carousel.min.js"></script>
    <script src="lib/isotope/isotope.pkgd.min.js"></script>
    <script src="lib/lightbox/js/lightbox.min.js"></script>

    <!-- Contact Javascript File -->
    <script src="mail/jqBootstrapValidation.min.js"></script>
    <script src="mail/contact.js"></script>

    <!-- Template Javascript -->
    <script src="js/main.js"></script>
  </body>
</html>
