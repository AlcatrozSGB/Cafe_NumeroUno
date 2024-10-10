<?php
    include "database.php";
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Cafe Numero Uno</title>

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
      <a href="index.php" class="navbar-logo">Numero<span>Uno</span>.</a>

      <div class="navbar-ekstra">
        <a href="logindulu.php" id="transaksi"><i data-feather="shopping-cart"></i></a>
        <a href="index.php" id="home"> <i data-feather="home"></i> </a>
      </div>
    </nav>
    <!-- Navbar start -->

    <!-- Landing page start -->
    <section class="landing" id="home">
      <main class="header">
        <h1>Menu Kami</h1>
        <p>Enjoy Our <span>Numero Uno</span> Menu</p>
      </main>
    </section>
    <!-- Landing page end -->

    <!-- Kontent section start -->
    <section id="content" class="content">
    <table border="1">
                <thead>
                    <tr>
                        <td>Nama</td>
                        <td>Harga</td>
                        <td>Gambar</td>
                        <td></td>
                    </tr>
                </thead>
                <tbody>
                    <?php
                        $q="SELECT * FROM menu";
                        $res=mysqli_query($conn,$q);
                        while ($row=mysqli_fetch_assoc($res))
                        {
                            ?>  
                            <tr>
                                <td><?php echo $row["nama"];?></td>
                                <td><?php echo $row["harga"];?></td>
                                <td><img style="height:40px" src="img/menu/<?php echo $row["gambar"];?>"></td>
                                <td><a href="logindulu.php" id="transaksi"><i data-feather="shopping-cart"></i></a></td>
                            </tr>
                            <?php
                        }
                    ?>
                </tbody>
            </table>  
    </section>
    <!-- Bestseller section end -->
    <!-- Feather Icons -->
    <script>
      feather.replace();
    </script>
  </body>
</html>
