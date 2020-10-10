<!DOCTYPE html>
<html lang="en">

<head>
    <title>DEPO STOK</title>
    <meta charset="utf-8">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.0/css/bootstrap.min.css">
    <link rel="stylesheet" href="../css/tasarim.css">
    <meta name="viewport" content="width=device-width, initial-scale=1">
</head>

<body>
    <?php
    include("menu.php");
    ?>
    <h1>Satış tamamlandı.</h1>
    <?php
    $uID = $_POST['uID'];
    $uAdet = $_POST['uAdet'];
    $baglan = mysqli_connect("localhost", "root");
    mysqli_select_db($baglan, "depo_stok") or die("MySql'e baglanamadı!");
    $sonuc = mysqli_query($baglan, "UPDATE urun SET Stok=Stok-$uAdet WHERE UrunID='$uID'");

    mysqli_close($baglan);
    ?>
</body>

</html>