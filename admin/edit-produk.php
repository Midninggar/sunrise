
<?php
session_start();
    if (isset($_POST['update_produk'])) {
        //Include file koneksi, untuk koneksikan ke database
       
        
        //Fungsi untuk mencegah inputan karakter yang tidak sesuai
        function input($data) {
            $data = trim($data);
            $data = stripslashes($data);
            $data = htmlspecialchars($data);
            return $data;
        }
        //Cek apakah ada kiriman form dari method post
        if ($_SERVER["REQUEST_METHOD"] == "POST") {

        
            $id_produk=input($_POST["id_produk"]);
            $judul_produk=input($_POST["judul_produk"]);
        
         
            $status=input($_POST["status"]);
            $deskripsi=input($_POST["deskripsi"]);
            $gambar_saat_ini=$_POST['gambar_saat_ini'];
            $gambar_baru = $_FILES['gambar_baru']['name'];
            $ekstensi_diperbolehkan	= array('png','jpg');
            $x = explode('.', $gambar_baru);
            $ekstensi = strtolower(end($x));
            $ukuran	= $_FILES['gambar_baru']['size'];
            $file_tmp = $_FILES['gambar_baru']['tmp_name'];
        
            $tanggal=date("Y-m-d H:i:s");

            include '../config/database.php';

            if (!empty($gambar_baru)){
                if(in_array($ekstensi, $ekstensi_diperbolehkan) === true){
                    //Mengupload gambar baru
                    move_uploaded_file($file_tmp, '../assets/img/produk/'.$gambar_baru);

                    //Menghapus gambar lama, gambar yang dihapus selain gambar default
                    if ($gambar_saat_ini!='gambar_default.png'){
                        unlink("../assets/img/produk/".$gambar_saat_ini);
                    }
                    
                    $sql="update produk set
                    judul_produk='$judul_produk',
                    deskripsi='$deskripsi',
                    gambar='$gambar_baru',
                    status='$status',
                    tanggal='$tanggal'
                    where id_produk=$id_produk"; 
                }
            }else {
                    $sql="update produk set
                    judul_produk='$judul_produk',
                    deskripsi='$deskripsi',
                    status='$status',
                    tanggal='$tanggal'
                    where id_produk=$id_produk"; 
            }

            //Mengeksekusi/menjalankan query 
            $edit_produk=mysqli_query($kon,$sql);

            //Kondisi apakah berhasil atau tidak dalam mengeksekusi query diatas
            if ($edit_produk) {
                header("Location:./content.php");
            }
            else {
                header("Location:./content.php");
                
            }  



        }

    }
    $id_produk=$_POST["id_produk"];
    // mengambil data barang dengan kode paling besar
    include '../config/database.php';
    $query = mysqli_query($kon, "SELECT * FROM produk where id_produk=$id_produk");
    $data = mysqli_fetch_array($query); 

?>
<form action="../admin/edit-produk.php" method="post" enctype="multipart/form-data">
    <!-- rows -->
    <div class="row">
        <div class="col-sm-12">
            <div class="form-group">
                <label>Kode:</label>
                <h3><?php echo $data['kode_produk']; ?></h3>
                <input name="kode_produk" value="<?php  echo $data['kode_produk']; ?>" type="hidden" class="form-control">
                <input name="id_produk" value="<?php  echo $data['id_produk']; ?>" type="hidden" class="form-control">
            </div>
        </div>
    </div>
    <!-- rows -->
    <div class="row">
        <div class="col-sm-12">
            <div class="form-group">
                <label>Judul produk:</label>
                <input name="judul_produk" type="text" value="<?php  echo $data['judul_produk']; ?>" class="form-control" placeholder="Masukan nama produk" required>
            </div>
        </div>
    </div>

    <!-- rows -->   
    <div class="row">
    <div class="col-sm-12">
        <div class="form-group">
            <label>Deskripsi:</label>
            <textarea name="deskripsi" class="form-control"  rows="5" ><?php  echo $data['deskripsi']; ?></textarea>
        </div>
    </div>
    </div>

    <!-- rows -->                 
    <div class="row">
        <div class="col-sm-6 mb-3">
        <label>Gambar Saat ini:</label>
            <img src="../assets/img/produk/<?php echo $data['gambar'];?>" class="rounded mb-2" width="100%" alt="Gambar tidak ditemukan">
            <input type="text" name="gambar_saat_ini" value="<?php echo $data['gambar'];?>" class="form-control text-center" />
        </div>
        <div class="col-sm-6">
            <div id="msg"></div>
            <label>Gambar Baru:</label>
            <input type="file" name="gambar_baru" class="file" >
                <div class="input-group my-3 border-radius-lg">
                    <input type="text" class="form-control " disabled placeholder="Upload File" id="file">
                    <div class="input-group-append">
                            <button type="button" id="pilih_gambar" class="browse btn btn-dark mx-3">Pilih Gambar</button>
                    </div>
                </div>
            <img src="gambar_default.png" id="preview" class="img-thumbnail">
        </div>
    </div>

    <!-- rows -->

    <!-- rows -->
    <div class="row">
        <div class="col-sm-6 mb-2">
            <div class="form-group">
            <label>Status:</label>
                <div class="form-check-inline ">
                    <label class="form-check-label">
                    <input type="radio" <?php if ($data['status']==1) echo "checked"; ?> class="form-check-input mx-2" name="status" value="1">Publish
                    </label>
                </div>
                <div class="form-check-inline">
                    <label class="form-check-label">
                    <input type="radio" <?php if ($data['status']==0) echo "checked"; ?> class="form-check-input mx-2" name="status" value="0">Konsep
                    </label>
                </div>
            </div>
        </div>
    </div>
    <!-- rows -->   
    <div class="row">
        <div class="col-sm-6">
            <div class="form-group">
                <button type="submit" name="update_produk" class="btn btn-success">Update produk</button>
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
