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
    $urunadi = $_POST['urunadi'];
    $Kategori_id = $_POST['Kategori_id'];
    $Urun_birimi = $_POST['Urun_birimi'];
    $U_alisfiyat = $_POST['U_alisfiyat'];
    $U_satisfiyat = $_POST['U_satisfiyat'];
    $Stok = $_POST['Stok'];
    $baglan = mysqli_connect("localhost", "root");
    mysqli_select_db($baglan, "depo_stok") or die("MySql'e baglanamadı!");
    $update = mysqli_query($baglan, "UPDATE urun SET urunadi='$urunadi', Kategori_id='$Kategori_id', Urun_birimi='$Urun_birimi', U_alisfiyat='$U_alisfiyat' , U_satisfiyat='$U_satisfiyat', Stok='$Stok' WHERE UrunID='$UrunID'");
    $sonuc = mysqli_query($baglan, "SELECT * FROM urun WHERE UrunID='$UrunID'");
    echo "<table class='table table-striped'>";
    if (mysqli_num_rows($sonuc) != 0) {
        echo "<tr>";
        echo "<td>UrunID</td>";
        echo "<td>Ürün Adı</td>";
        echo "<td>Kategori ID</td>";
        echo "<td>Ürün Birimi</td>";
        echo "<td>Alış Fiyatı</td>";
        echo "<td>Satış Fiyatı</td>";
        echo "<td>Stok</td>";
        echo "</tr>";
        while ($oku = mysqli_fetch_assoc($sonuc)) {
            echo "<tr>";
            echo "<td>" . $oku["UrunID"] . "</td>";
            echo "<td>" . $oku["urunadi"] . "</td>";
            echo "<td>" . $oku["Kategori_id"] . "</td>";
            echo "<td>" . $oku["Urun_birimi"] . "</td>";
            echo "<td>" . $oku["U_alisfiyat"] . "</td>";
            echo "<td>" . $oku["U_satisfiyat"] . "</td>";
            echo "<td>" . $oku["Stok"] . "</td>";
            echo "</tr>";
        }
    } else {
        echo "Hic kayit yok!";
    }
    echo "</table>";
    mysqli_close($baglan);
    ?>
</body>

</html>