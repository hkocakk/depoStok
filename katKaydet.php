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
    $kategori_ad = $_POST['kategori_ad'];
    $baglan = mysqli_connect("localhost", "root");
    mysqli_select_db($baglan, "depo_stok") or die("MySql'e baglanamadı!");

    $sonuc = mysqli_query($baglan, "INSERT INTO kategori(kategori_ad) VALUES ('$kategori_ad')");
    /* bu kısım sadece admin tarafında olmalı */
    $sonuc = mysqli_query($baglan, "SELECT * FROM kategori");
    echo "<table class='table table-striped'>";
    if (mysqli_num_rows($sonuc) != 0) {
        echo '<tr>';
        echo "<td>Kategori ID</td>";
        echo "<td>Kategori Adı</td>";
        echo "</tr>";

        while ($oku = mysqli_fetch_assoc($sonuc)) {
            echo "<tr>";
            echo "<td>" . $oku["kategori_id"] . "</td>";
            echo "<td>" . $oku["kategori_ad"] . "</td>";
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