
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

  <body style="background-image: url('assets/img/background-01.png'); background-size:cover">

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
                header("Location:admin/index.php");

            }else {
                    $pesan="<div class='alert alert-warning'><strong>Gagal!</strong> Status pengguna tidak aktif.</div>";
                }

        }else {
            $pesan="<div class='alert alert-danger'><strong>Error!</strong> Username dan password salah.</div>";
        }
    }      
?>



    <!-- Contact Start -->
    <div class="container-fluid" style="margin-top: 200px;">
      <div class="card w-50">
        <div class="text-center pb-2">

          <h1 class="mb-4">Login</h1>
        </div>
        <div class="d-flex justify-content-center text-center row">

               
               
            <div class="col-md-5">
                <form action="" method="post">
                    <div class="form-group">
                        <label for="username">Username:</label>
                        <input type="text" class="form-control" name="username" placeholder="Masukan username">
                    </div>
                    <div class="form-group">
                        <label for="pwd">Password:</label>
                        <input type="password" name="password" class="form-control" placeholder="Masukan password">
                    </div>

                <div>
                  <button
                    class="btn btn-primary py-2 px-4"
                    type="submit"
                    id="sendMessageButton"
                  >
                    Login
                  </button>
                </div>
              </form>
              
            </div>
            
          </div>
          </div>
          </div>
          
        

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
