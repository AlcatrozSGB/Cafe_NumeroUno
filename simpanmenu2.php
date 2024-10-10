<?php
    include "database.php";
    $nama=mysqli_real_escape_string($conn,$_POST["nama"]);
    $harga=mysqli_real_escape_string($conn,$_POST["harga"]);
    $stok=mysqli_real_escape_string($conn,$_POST["stok"]);
    $id=mysqli_real_escape_string($conn,$_POST["id"]);

    $filename="";
    if (isset($_FILES["gambar"]))
    {
        $uploaddir="img/menu/";
        $filename=rand(1,1000).basename($_FILES['gambar']['name']);
        $uploadfile = $uploaddir . $filename;
    
        echo "<p>";
    
        if (move_uploaded_file($_FILES['gambar']['tmp_name'], $uploadfile)) {
            echo "File is valid, and was successfully uploaded.\n";

            $q="UPDATE menu SET gambar='$filename' WHERE id='$id'";
            mysqli_query($conn,$q);
        } else {
            $filename="";
            echo "Upload failed";
        }
    }
    $q="UPDATE menu SET nama='$nama',harga='$harga',stok='$stok' WHERE id='$id'";
    mysqli_query($conn,$q);
    
    //$q="SELECT * FROM user WHERE username='$username' AND password='$password'";
    //$res=mysqli_query($conn,$q);
    header("location:tampilanadmin.php");
?>