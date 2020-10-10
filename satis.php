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
    $UrunID = $_POST['UrunID'];
    $adet = $_POST['adet'];
    $baglan = mysqli_connect("localhost", "root");
    mysqli_select_db($baglan, "depo_stok") or die("MySql'e baglanamadı!");
    $sonuc = mysqli_query($baglan, "SELECT * FROM urun WHERE UrunID='$UrunID'");
    $oku = mysqli_fetch_assoc($sonuc);
    $fiyat = $oku["U_satisfiyat"];
    echo "<table class='table table-striped'>";
    if ($oku["Stok"] != 0) {
        if (mysqli_num_rows($sonuc) != 0) {
            echo "<tr>";
            echo "<td>UrunID</td>";
            echo "<td>Ürün Adı</td>";
            echo "<td>Satış Fiyatı</td>";
            echo "<td>Stok</td>";
            echo "</tr>";
            echo "<tr>";
            echo "<td>" . $oku["UrunID"] . "</td>";
            echo "<td>" . $oku["urunadi"] . "</td>";
            echo "<td>" . $oku["U_satisfiyat"] . "</td>";
            echo "<td>" . $oku["Stok"] . "</td>";
            echo "</tr>";
        } else {
            echo "Hic kayit yok!";
        }
    } else {
        echo "Stoklarda Yok!";
    }




    echo "</table>";
    mysqli_close($baglan);

    ?>
    <?php
    if ($oku["Stok"] != 0) {
        include("satisStok.php");
    }
    ?>


    <style>
        #kutu {
            display: none;
        }
    </style>
</body>

</html>