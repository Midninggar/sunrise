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
          <a href="service.php" class="nav-item nav-link">Service</a>
          <a href="alat.php" class="nav-item nav-link">Alat</a>
          <a href="penawaran.php" class="nav-item nav-link active">Penawaran Harga</a>
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
        <h3 class="display-3 font-weight-bold text-white">Penawaran Harga</h3>

      </div>
    </div>
    <!-- Header End -->



    <!-- Contact Start -->
    <div class="container-fluid pt-5">
      <div class="container">
        <div class="text-center pb-2">
          <p class="section-title px-5">
            <span class="px-2">Get In Touch</span>
          </p>
          <h1 class="mb-4">Form Penawaran</h1>
        </div>

        <div class="row">
          <div class="col-lg-7 mb-5">
            <div class="contact-form">
              <div id="success"></div>

              <form method="post" action="penawaran-message.php">
                
              <div class="form-group">
                  <label>Nama:</label>
                  <input type="text" name="nama" class="form-control" required>
              </div>

                    <div class="form-group">
                        <label>Email:</label>
                        <input type="email" name="email" class="form-control" required>
                    </div>
                    <div class="form-group">
                        <label>Phone:</label>
                        <input type="phone" name="phone" class="form-control" required>
                    </div>
                    <div class="form-group">
                        <label>Company:</label>
                        <input type="company" name="company" class="form-control">
                    </div>
                    <div class="form-group">
                        <label>Website:</label>
                        <input type="website" name="website" class="form-control">
                    </div>

                    <div class="form-group">
                        <label>Pesan:</label>
                        <textarea class="form-control" type="pesan" name="pesan" rows="5" required></textarea>
                    </div>
                    <div class="form-group">
                        <input type="submit"  name="form_penawaran" class="btn btn-primary" value="Kirim Penawaran">
                    </div>
              </form>
            </div>
          </div>

          
          <div class="col-lg-5 mb-5">
            <p>
              Memiliki permintaan khusus atau tidak menemukan jasa percetakan yang Anda inginkan? Lengkapi form tentang spesifikasi produk yang anda inginkan dan kita akan kembali ke anda dengan info penawaran harga dan kesediaan jasa kami.
            </p>
            <div class="d-flex">
              <i
                class="fa fa-map-marker-alt d-inline-flex align-items-center justify-content-center bg-primary text-secondary rounded-circle"
                style="width: 45px; height: 45px"
              ></i>
              <div class="pl-3">
                <h5>Address</h5>
                <p>Jl. Tidar No.290, Surabaya</p>
              </div>
            </div>
            <div class="d-flex">
              <i
                class="fa fa-envelope d-inline-flex align-items-center justify-content-center bg-primary text-secondary rounded-circle"
                style="width: 45px; height: 45px"
              ></i>
              <div class="pl-3">
                <h5>Email</h5>
                <p>sunriseoffsetprinting@gmail.com</p>
              </div>
            </div>
            <div class="d-flex">
              <i
                class="fa fa-phone-alt d-inline-flex align-items-center justify-content-center bg-primary text-secondary rounded-circle"
                style="width: 45px; height: 45px"
              ></i>
              <div class="pl-3">
                <h5>Phone</h5>
                <p>031 545 1952</p>
              </div>
            </div>
            <div class="d-flex">
              <i
                class="far fa-clock d-inline-flex align-items-center justify-content-center bg-primary text-secondary rounded-circle"
                style="width: 45px; height: 45px"
              ></i>
              <div class="pl-3">
                <h5>Opening Hours</h5>
                <strong>Senin - Jumat:</strong>
                <p class="m-0">08:00 WIB - 17:00 WIB</p>
                <strong>Sabtu:</strong>
                <p class="m-0">08:00 WIB - 13:00 WIB</p>
              </div>
            </div>
            
          </div>
        </div>
      </div>
    </div>
    <!-- Contact End -->

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

    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"></script>
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
