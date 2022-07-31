
<?php
session_start();

        //Include file koneksi, untuk koneksikan ke database
        if (isset($_POST['publish']) || isset($_POST['simpan_konsep'])) {
        
        //Fungsi untuk mencegah inputan karakter yang tidak sesuai
        function input($data) {
            $data = trim($data);
            $data = stripslashes($data);
            $data = htmlspecialchars($data);
            return $data;
        }
        //Cek apakah ada kiriman form dari method post
        if ($_SERVER["REQUEST_METHOD"] == "POST") {

            if (isset($_POST['publish'])) {
                $status=1;
            }else {
                $status=0;
            }
            //Include database
            include '../config/database.php';

            $kode_produk=input($_POST["kode_produk"]);
            $judul_produk=input($_POST["judul_produk"]);
            
            
            $deskripsi=input($_POST["deskripsi"]);
            $tanggal=date("Y-m-d H:i:s");
            $ekstensi_diperbolehkan	= array('png','jpg');
            $gambar = $_FILES['gambar']['name'];
            $x = explode('.', $gambar);
            $ekstensi = strtolower(end($x));
            //$ukuran	= $_FILES['gambar']['size'];
            $file_tmp = $_FILES['gambar']['tmp_name'];	

            if (!empty($gambar)){
                if(in_array($ekstensi, $ekstensi_diperbolehkan) === true){
                    //Mengupload gambar
                    move_uploaded_file($file_tmp, '../assets/img/produk/'.$gambar);

                    //Menambah produk dengan gambar
                    $sql="insert into produk (kode_produk,judul_produk,deskripsi,gambar,tanggal,status) values
                    ('$kode_produk','$judul_produk','$deskripsi','$gambar','$tanggal','$status')";
                }    
                
            }else {
                    //Menambah produk tanpa gambar, maka gambar_defauilt.png yang akan digunakan
                    $sql="insert into produk (kode_produk,judul_produk,deskripsi,gambar,tanggal,status) values
                    ('$kode_produk','$judul_produk','$deskripsi','$gambar','$tanggal','$status')";
                     
            }

            //Mengeksekusi/menjalankan query 
            $simpan_produk=mysqli_query($kon,$sql);

            //Kondisi apakah berhasil atau tidak dalam mengeksekusi query diatas
            if ($simpan_produk) {
                header("Location:../admin/content.php");
            }
            else {
                header("Location:../admin/content.php");
                
            } 

        }
    }

      // mengambil data produk dengan kode paling besar
      include '../config/database.php';
      $query = mysqli_query($kon, "SELECT max(id_produk) as kodeTerbesar FROM produk");
      $data = mysqli_fetch_array($query);
      $id_produk = $data['kodeTerbesar'];
      $id_produk++;
      $huruf = "A";
      $kode_produk = $huruf . sprintf("%04s", $id_produk);

?>
<form action="../admin/tambah-produk.php" method="post" enctype="multipart/form-data">
    <!-- rows -->
    <div class="row">
        <div class="col-sm-12">
            <div class="form-group">
                <label>Kode:</label>
                <h3><?php echo $kode_produk; ?></h3>
                <input name="kode_produk" value="<?php echo $kode_produk; ?>" type="hidden" class="form-control">
            </div>
        </div>
    </div>
    <!-- rows -->
    <div class="row">
        <div class="col-sm-12">
            <div class="form-group">
                <label>Judul Produk:</label>
                <input name="judul_produk" type="text" class="form-control" placeholder="  Masukan nama produk" required>
            </div>
        </div>
    </div>

    <!-- rows -->   
    <div class="row">
    <div class="col-sm-12">
        <div class="form-group">
            <label>Deskripsi:</label>
            <textarea name="deskripsi" class="form-control" rows="5" placeholder="  Tuliskan deskripsinya disini.." required   ></textarea>
        </div>
    </div>
    </div>
    <!-- rows -->
    <div class="row">
        <div class="col-sm-6">
            <div class="form-group">
                <div id="msg"></div>
                <label>Gambar:</label>
                <input type="file" name="gambar" class="file" >
                    <div class="input-group mb-3 border-radius-lg">
                        <input type="text" class="form-control" disabled placeholder="Upload Gambar" id="file">
                        <div class="input-group-append">
                                <button type="button" id="pilih_gambar" class="browse btn btn-primary mx-3">Pilih Gambar</button>
                        </div>
                    </div>
                <img src="gambar_default.png" id="preview" class="img-thumbnail mb-3">
            </div>
        </div>


    <!-- rows -->   
    <div class="row">
        <div class="col-sm-6">
            <div class="form-group">
                <button type="submit" name="publish" class="btn btn-success">Publish</button>
                <button type="submit" name="simpan_konsep" class="btn btn-warning">Simpan Konsep</button>
            </div>
    
        </div>
   
    </div>   
</form>
<style>
    .file {
    visibility: hidden;
    position: absolute;
    }
</style>
<script>
    $(document).on("click", "#pilih_gambar", function() {
    var file = $(this).parents().find(".file");
    file.trigger("click");
    });
    $('input[type="file"]').change(function(e) {
    var fileName = e.target.files[0].name;
    $("#file").val(fileName);

    var reader = new FileReader();
    reader.onload = function(e) {
        // get loaded data and render thumbnail.
        document.getElementById("preview").src = e.target.result;
    };
    // read the image file as a data URL.
    reader.readAsDataURL(this.files[0]);
    });
</script>
