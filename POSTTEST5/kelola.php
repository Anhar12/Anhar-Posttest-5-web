<?php
    require "koneksi.php";

    $result = mysqli_query($conn, "SELECT * FROM pesanan");
    $pesanan = [];
    while ($row = mysqli_fetch_assoc($result)) {
        $pesanan[] = $row;
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" href="img/AZ.ico">
    <title>AnharZtore</title>
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
</head>
<body>
    <!-- header -->
    <div class="atas">
        <nav>
            <a href="index.html" id="logo"> Anhar <font color="#f86909"> Ztore </font> </a>
            <div class="navbar">
                <ul>
                    <li> <a href="index.php"> HOME </a></li>
                    <li> <a href="index.php"> PRODUCT </a></li>
                    <li> <a href="kelola.php"> KELOLA </a></li>
                    <li> <a href="about.php"> ABOUT </a></li>
                    <li>
                        <label>
                            <input type="checkbox" class="checkbox" id="tombol">
                            <span class="check"></span>
                        </label>
                    </li>
                </ul>
            </div>
        </nav>

        <!-- main content -->
        <div class="crud">
            <h1> Kelola Data Pesanan AnharZtore </h1>
            <div>
                <button> <a href="order.php"> Tambah Data  </a> </button>
            </div>
            <table >
                <tr height="50px">
                    <td width="1%"> No. </td>
                    <td width="18%"> Nama </td>
                    <td width="10%"> No. Telp </td>
                    <td width="20%"> Merk HP </td>
                    <td width="5%"> Jumlah </td>
                    <td width="21%"> Alamat </td>
                    <td width="10%"> Pembayaran </td>
                    <td width="15%"> Kelola </td>
                </tr>
                <?php $i = 1; foreach ($pesanan as $pesan):?>
                <tr>
                    <td> <?php echo $i ;?> </td>
                    <td> <?php echo $pesan['nama'] ;?> </td>
                    <td> <?php echo $pesan['no_telp'] ;?> </td>
                    <td> <?php echo $pesan['merk'] ;?> </td>
                    <td> <?php echo $pesan['jumlah'] ;?> </td>
                    <td> <?php echo $pesan['alamat'] ;?> </td>
                    <td> <?php echo $pesan['metode'] ;?> </td>
                    <td> <a href="edit.php?id=<?php echo $pesan['id']; ?>" class="updt"> Update 
                         </a> / <a href="hapus.php?id=<?php echo $pesan['id']; ?>" class = "dlt"> Delete </a> </td>
                </tr>
                <?php $i++; endforeach;?>
            </table>
        </div>

    </div>

    <!-- footer -->
    <div class="bawah">
        <footer class="footerAbout">
            <div class="footer">
                <p>
                    Jangan lupa belanja di AnharZtore, serta follow akun ig saya <a href="https://www.instagram.com/anharrrrrr_/" id="ig"> @anharrrrrr_ </a> 
                    <br>
                    Demikian tampilan web Posttest 5 saya, wassalamualaikum warahmatullahi wabarakatuh
                </p>
            </div>
            <div id="kontak">
                <i class="fa fa-whatsapp"> 085845723207 </i>
                <i class="fa fa-instagram"> anharrrrrr_ </i>
                <i class="fa fa-envelope-o"> anharkhoirun@gmail.com </i>
                <i class="fa fa-github"> Anhar12 </i>
            </div>
            <p> @Copyright 2022 - anharrrslbw - Made with HTML, CSS, JS, & PHP </p>
        </footer>
    </div>
    
    <script src="scriptabout.js"></script>
</body>
</html>
