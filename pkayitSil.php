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
    <?php
    $Sicil = $_GET['Sicil_id'];
    $oConn = mysqli_connect("localhost", "root");
    mysqli_select_db($oConn, "depo_stok");
    $sql = "DELETE FROM personel where Sicil_id='$Sicil' ";
    $sonuc = mysqli_query($oConn, $sql);
    mysqli_close($oConn);
    echo "<center><h4>Personel Silme İşlemi Başarıyla Tamamlandı</h4></center>";
    ?>
</body>

</html>