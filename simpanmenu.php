<?php
    include "database.php";
    $nama=mysqli_real_escape_string($conn,$_POST["nama"]);
    $harga=mysqli_real_escape_string($conn,$_POST["harga"]);
    $stok=mysqli_real_escape_string($conn,$_POST["stok"]);

    $filename="";
    if (isset($_FILES["gambar"]))
    {
        $uploaddir="img/menu/";
        $filename=rand(1,1000).basename($_FILES['gambar']['name']);
        $uploadfile = $uploaddir . $filename;
    
        echo "<p>";
    
        if (move_uploaded_file($_FILES['gambar']['tmp_name'], $uploadfile)) {
            echo "File is valid, and was successfully uploaded.\n";
        } else {
            $filename="";
            echo "Upload failed";
        }
    }
    $q="INSERT INTO menu (nama, harga, stok, gambar) VALUES ('$nama', '$harga', '$stok', '$filename')";
    mysqli_query($conn,$q);
    
    //$q="SELECT * FROM user WHERE username='$username' AND password='$password'";
    //$res=mysqli_query($conn,$q);
    header("location:tampilanadmin.php");
?>