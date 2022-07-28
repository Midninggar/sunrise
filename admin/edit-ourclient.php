
<?php
session_start();
    if (isset($_POST['update_ourclient'])) {
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

        
            $id_logoclient=input($_POST["id_logoclient"]);
            $nama_client=input($_POST["nama_client"]);
            $kode_logo=input($_POST["kode_logo"]);

            $status=input($_POST["status"]);

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
                    move_uploaded_file($file_tmp, '../assets/img/ourclient/'.$gambar_baru);

                    //Menghapus gambar lama, gambar yang dihapus selain gambar default
                    if ($gambar_saat_ini!='gambar_default.png'){
                        unlink("../assets/img/ourclient/".$gambar_saat_ini);
                    }
                    
                    $sql="update ourclient set
                    nama_client='$nama_client',
                    gambar='$gambar_baru',
                    status='$status',
                    tanggal='$tanggal'
                    where id_logoclient=$id_logoclient"; 
                }
            }else {
                    $sql="update ourclient set
                    nama_client='$nama_client',
                    status='$status',
                    tanggal='$tanggal'
                    where id_logoclient=$id_logoclient";  
                }

            //Mengeksekusi/menjalankan query 
            $edit_ourclient=mysqli_query($kon,$sql);

            //Kondisi apakah berhasil atau tidak dalam mengeksekusi query diatas
            if ($edit_ourclient) {
                header("Location:./ourclient.php");
            }
            else {
                header("Location:./ourclient.php");
                
            }  



        }

    }
    $id_logoclient=$_POST["id_logoclient"];

    // mengambil data barang dengan kode paling besar
    include '../config/database.php';
    $query = mysqli_query($kon, "SELECT * FROM ourclient where id_logoclient=$id_logoclient");
    $data = mysqli_fetch_array($query); 

?>
<form action="../admin/edit-ourclient.php" method="post" enctype="multipart/form-data">
    <!-- rows -->
    <div class="row">
        <div class="col-sm-12">
            <div class="form-group">
                <label>Kode:</label>
                <h3><?php echo $data['kode_logo']; ?></h3>
                <input name="kode_logo" value="<?php  echo $data['kode_logo']; ?>" type="hidden" class="form-control">
                <input name="id_logoclient" value="<?php  echo $data['id_logoclient']; ?>" type="hidden" class="form-control">
            </div>
        </div>
    </div>
    <!-- rows -->
    <div class="row">
        <div class="col-sm-12">
            <div class="form-group">
                <label>Nama Client:</label>
                <input name="nama_client" type="text" value="<?php  echo $data['nama_client']; ?>" class="form-control" placeholder="Masukan Nama" required>
            </div>
        </div>
    </div>



    <!-- rows -->                 
    <div class="row">
        <div class="col-sm-6">
        <label>Gambar Saat ini:</label>
            <img src="../assets/img/ourclient/<?php echo $data['gambar'];?>" class="rounded" width="90%" alt="Gambar tidak ditemukan">
            <input type="text" name="gambar_saat_ini" value="<?php echo $data['gambar'];?>" class="form-control" />
        </div>
        <div class="col-sm-6">
            <div id="msg"></div>
            <label>Gambar Baru:</label>
            <input type="file" name="gambar_baru" class="file" >
                <div class="input-group my-3">
                    <input type="text" class="form-control" disabled placeholder="Upload File" id="file">
                    <div class="input-group-append">
                            <button type="button" id="pilih_gambar" class="browse btn btn-dark">Pilih Gambar</button>
                    </div>
                </div>
            <img src="https://placehold.it/80x80" id="preview" class="img-thumbnail">
        </div>
    </div>

    <!-- rows -->

    <!-- rows -->
    <div class="row">
        <div class="col-sm-6">
            <div class="form-group">
            <label>Status:</label>
                <div class="form-check-inline">
                    <label class="form-check-label">
                    <input type="radio" <?php if ($data['status']==1) echo "checked"; ?> class="form-check-input" name="status" value="1">Publish
                    </label>
                </div>
                <div class="form-check-inline">
                    <label class="form-check-label">
                    <input type="radio" <?php if ($data['status']==0) echo "checked"; ?> class="form-check-input" name="status" value="0">Konsep
                    </label>
                </div>
            </div>
        </div>
    </div>
    <!-- rows -->   
    <div class="row">
        <div class="col-sm-6">
            <div class="form-group">
                <button type="submit" name="update_ourclient" class="btn btn-success">Update Ourclient</button>
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
