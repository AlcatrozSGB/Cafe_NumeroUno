<?php
    include "database.php";
    $id=mysqli_real_escape_string($conn,$_GET["id"]);
    $q="SELECT * FROM menu WHERE id='$id'";
    $res=mysqli_query($conn,$q);
    $data=mysqli_fetch_assoc($res);
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Toko Buku Cinta</title>

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link
      href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,300;0,400;0,700;1,700&display=swap"
      rel="stylesheet"
    />

    <!-- Feather Icons -->
    <script src="https://unpkg.com/feather-icons"></script>
    
    <!-- Style -->
    <link rel="stylesheet" href="css/menu-style.css" />
  </head>
  <body>
    <!-- Navbar start -->
    <nav class="navbar">
      <a href="#" class="navbar-logo">Numero<span>Uno</span>.</a>

      <div class="navbar-ekstra">
        <a href="keluar.php" id="keluar">Keluar</a>
      </div>
    </nav>
    <!-- Navbar end -->

    <!-- Landing page start -->
    <section class="landing" id="home">
    <main class="header">
        <h1>Silahkan Update!</h1>
      </main> 
    </section>
    <main class="content">
            <?php
                if (isset($_GET["warning"]))
                {
                    if ($_GET["warning"]!="")
                    {
                        ?>
                            <h3>
                                <?php
                                    echo $_GET["warning"];
                                ?>
                            </h3>
                        <?php
                    }

                }
            ?>
            <form method="POST" enctype='multipart/form-data' action="simpanmenu2.php">
                <table>
                    <input type="hidden" name="id" value="<?php echo $id;?>">
                    <tr>
                        <td>Nama</td>
                        <td><input type="text" value="<?php echo $data["nama"];?>" name="nama"></td>
                    </tr>
                    <tr>
                        <td>Harga</td>
                        <td><input type="text" value="<?php echo $data["harga"];?>" name="harga"></td>
                    </tr>
                    <tr>
                        <td>Stok</td>
                        <td><input type="text" value="<?php echo $data["stok"];?>" name="stok"></td>
                    </tr>
                    <tr>
                        <td>Gambar</td>
                        <td><input type="file" name="gambar">
                            <img style="height:40px" src="img/menu/<?php echo $data["gambar"];?>">
                        </td>
                    </tr>
                    <tr>
                        <td></td>
                        <td>
                            <button style="padding:5px">Simpan</button>
                        </td>
                    </tr>
                </table>
            </form>
      </main>
    
    <!-- Landing page end -->

   
    <!-- About section end -->

    <!-- Contact section end -->

    <!-- Tak tambahi javascript dikit ya biar responsive -->
    <!-- Feather Icons -->
    <script>
      feather.replace();
    </script>
  </body>
</html>
