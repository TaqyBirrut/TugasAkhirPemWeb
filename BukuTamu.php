<!DOCTYPE html>
<html>
    <head>
        <title>Taqy PhoneShop</title>
        <meta charset="utf-8">
        <meta name="viewpoint" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" type="text/css" href="StyleHome.css">
    </head>
    <body>
        <div class="header">
            <a href="Home.html"><h1>Taqy PhoneShop</h1></a>
            <h4>Tempatnya Handphone Murah dan Awet</h4> 
        </div>
        
        <div class="navigation">
            <a href="Home.html">Home</a>
            <a href="About.html">About</a>
            <a href="Product.html">Product</a>
            <a href="http://localhost/UAS_Daskom/BukuTamu.php">Buku Tamu</a>
        </div>
        <br>
        <form method="POST" action="<?php echo $_SERVER['PHP_SELF'];?>">
        <div class="main">
            <div>
                <label>Nama Lengkap : </label><br>
                <input type="text" name="fname" size="80"><br><br>
            </div>
            <label>Jenis Kelamin</label>
            <label>Laki-laki</label>
            <input type="radio" name="fjenis_kelamin" value="L">
            <label>Perempuan</label>
            <input type="radio" name="fjenis_kelamin" value="P">
            <br><br>
            <div>
                <label>Alamat Tinggal :</label><br>
                <input type="text" name="falamat_tinggal" size="80"><br><br>
            </div>
            <div>
                <label>Email :</label><br>
                <input type="email" name="femail" size="80"><br><br>
            </div>
            <div>
                <label>Aktif Pada Sosial Media :</label><br>
                <label>Line</label>
                <input type="checkbox" name="fsosial_media" value="line"><br>
                <label>Whatsapp</label>
                <input type="checkbox" name="fsosial_media" value="whatsapp"><br>
                <label>Twitter</label>
                <input type="checkbox" name="fsosial_media" value="twitter"><br>
                <label>Facebook</label>
                <input type="checkbox" name="fsosial_media" value="facebook"><br>
            </div>
            <br><br>
            <div>
                <label>Barang Yang Ingin di Beli :</label><br>
                <select name="finfo">
                    <option selected="select">-=Pilih=-</option>
                    <option value="Realme 5 Pro">Realme 5 Pro</option>
                    <option value="Realme C3">Realme C3</option>
                    <option value="Redmi Note 8 Pro">Redmi Note 8 Pro</option>
                    <option value="Redmi Note 9 Pro">Redmi Note 9 Pro</option>
                    <option value="Vivo V20 SE">Vivo V20 SE</option>
                </select>
            </div>
            <div>
                <label>Pesan :</label><br>
                <textarea name="fpesan" cols="70" rows="5"></textarea>
                <br><br>
            </div>
            <div>
                <input type="submit" value="Kirim">
                <input type="reset" value="Batal">
            </div>
        </div> 
        </form>

        <div class="konfirmasi">
            <?php
                if(isset($_POST['fname'])){
                    $nama = $_POST['fname'];
                    $jenis_kelamin = $_POST['fjenis_kelamin'];
                    echo "Nama Lengkap : $nama";
                    echo "Jenis Kelamin : $jenis_kelamin";
                }
                if(isset($_POST['fname'])){
                    $alamat = $_POST['falamat_tinggal'];
                    $email = $_POST['femail'];
                    echo "<br>Alamat Tinggal : $alamat";
                    echo "<br>Email : $email";

                }
                if(isset($_POST['fname'])){
                    $sosial_media = $_POST['fsosial_media'];
                    $info = $_POST['finfo'];
                    $pesan = $_POST['fpesan'];
                    echo "<br>Aktif Pada Sosial Media : $sosial_media";
                    echo "<br>Anda akan Membeli : $info";
                    echo "<br>Pesan : $pesan";
                }
            ?>

            <footer>
                Copyright &copy; Muhammad Birruttaqy | All Rights Reserved
            </footer>
        </div>
    </body>
</html>