
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

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <!--logo title-->
    <link rel="icon" href="assets/img/logo.png" type="image/x-icon">
    <title>Sunrise Offset Printing</title>

    <?php
    function input($data) {
        $data = trim($data);
        $data = stripslashes($data);
        $data = htmlspecialchars($data);
        return $data;
    }
    include 'config/database.php';
    $id_produk=input($_GET['id']);
    $query = mysqli_query ($kon,"select * from produk  where id_produk='".$id_produk."' limit 1");
    $data = mysqli_fetch_assoc($query); 
?>
<body>
<div class="container-fluid bg-light  position-relative shadow navbar-brand mb-5">
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
            <a href="service.php" class="nav-item nav-link">Service</a>
            <a href="alat.php" class="nav-item nav-link">Alat</a>
            <a href="penawaran.php" class="nav-item nav-link">Penawaran Harga</a>
            <a href="kontak.php" class="nav-item nav-link">Kontak</a>

          </div>

        </div>
</nav>
</div>

<div class="row">
    <div class="col-lg-6 mx-auto">
        <div class="thumbnail">

        <img src="assets/img/produk/<?php echo $data['gambar'];?>" width="100%"  class="card-img-top mb-4" alt="Gambar tidak ditemukan">
           
            <div class="caption text-center">
            <h1><?php echo $data['judul_produk'];?></h1>

                <?php
                echo strip_tags(html_entity_decode($data["deskripsi"],ENT_QUOTES,"ISO-8859-1"));
                 ?>
                <hr>
            </div>


 

        </div>
    </div>


    <div class="col-lg-4">
        <div class="row">
            <?php
                include 'config/database.php';
                $sql="select * from produk where status=1 order by id_produk desc";
                $hasil=mysqli_query($kon,$sql);
                while ($data = mysqli_fetch_array($hasil)):
            ?>
            <div class="col-sm-12">
                <div class="caption">
                    <h4><a class="text-dark" href="produk.php?halaman=produk&id=<?php echo $data['id_produk'];?>"><?php echo $data['judul_produk'];?></a></h4>
                    <div class="row">
                        <div class="col-lg-3">
                            <a href="produk.php?halaman=produk&id=<?php echo $data['id_produk'];?>"><img src="assets/img/produk/<?php echo $data['gambar'];?>"  width="100%" alt="Gambar tidak ditemukan" ></a>
                        </div>
                        <div class="col-sm-9">
                            <?php
                                $ambil=$data["deskripsi"];
                                $panjang = strip_tags(html_entity_decode($ambil,ENT_QUOTES,"ISO-8859-1"));
                                echo substr($panjang, 0, 30);
                            ?>
                        </div>
                    </div>
                    <br>
                </div>
            </div>
            <?php endwhile; ?>
        </div>
        
    </div>  
</div>


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

    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"></script>

<!--   Core JS Files   -->
<script src="..admin/assets/js/core/popper.min.js" ></script>
<script src="..admin/assets/js/core/bootstrap.min.js" ></script>
<script src="..admin/assets/js/plugins/perfect-scrollbar.min.js" ></script>
<script src="..admin/assets/js/plugins/smooth-scrollbar.min.js" ></script>

</body>