
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

    <?php
$pesan="";

    if ($_SERVER["REQUEST_METHOD"] == "POST") {

        function input($data) {
            $data = trim($data);
            $data = stripslashes($data);
            $data = htmlspecialchars($data);
            return $data;
        }
    
        include "config/database.php";
    
        $username = input($_POST["username"]);
        $password = input(md5($_POST["password"]));
        
        $cek_pengguna = "select * from pengguna where username='".$username."' and password='".$password."' limit 1";
        $hasil_cek = mysqli_query ($kon,$cek_pengguna);
        $jumlah = mysqli_num_rows($hasil_cek);
        $row = mysqli_fetch_assoc($hasil_cek); 

        if ($jumlah>0){
            if ($row["status"]==1){
                $_SESSION["id_pengguna"]=$row["id_pengguna"];
                $_SESSION["kode_pengguna"]=$row["kode_pengguna"];
                $_SESSION["nama_pengguna"]=$row["nama_pengguna"];
                $_SESSION["username"]=$row["username"];
                
                //Redirect ke halaman admin
                header("Location:admin/index.php?halaman=kategori");

            }else {
                    $pesan="<div class='alert alert-warning'><strong>Gagal!</strong> Status pengguna tidak aktif.</div>";
                }

        }else {
            $pesan="<div class='alert alert-danger'><strong>Error!</strong> Username dan password salah.</div>";
        }
    }      
?>

  </head>

  <body style="background-image: url('assets/img/background-01.png'); background-size:cover">

   



    <!-- Contact Start -->
    <section class="vh-100" >
  <div class="container py-5 h-100">

  <?php 	if ($_SERVER["REQUEST_METHOD"] == "POST") echo $pesan; ?>
    <?php 	if(isset($_GET['pesan'])){ if ($_GET["pesan"] == "login_dulu") echo "<div class='alert alert-danger'>Anda harus login dulu</div>"; }?>

    <div class="row d-flex justify-content-center align-items-center h-100">
      <div class="col col-xl-8">
        <div class="card" style="border-radius: 2rem;">
          <div class="row g-0">

            <div class="col d-flex align-items-center">
              <div class="card-body p-4 p-lg-5 text-black">

                <form action="" method="post">

                  <div class="d-flex justify-content-center align-items-center pb-5">
                  <a class="logo" href="index.php">
                    <img src="assets/img/logo2.png" alt="" width="200" ></a>
                    
                  
                  </div>

                  <h5 class="fw-normal mb-3 pb-3 text-center" style="letter-spacing: 1px;">Sign into your account</h5>

                  <div class="form-outline text-center">
                  <label class="form-label" for="username">Username</label>
                    <input type="text" name="username" class="form-control text-center form-control-lg mb-3" placeholder="Masukan username" />
                    
                  </div>

                  <div class="form-outline mb-4 text-center">
                  <label class="form-label" for="pwd">Password</label>
                    <input type="password" name="password" class="form-control text-center form-control-lg mb-5 " placeholder="Masukan password" />
                    
                  </div>

                  <div class="pt-1 mb-3 text-center">
                    <button class="btn btn-secondary w-100 mt-1 py-3 px-5" type="submit">Login</button>
                  </div>



                </form>

                

              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>
          
        

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
