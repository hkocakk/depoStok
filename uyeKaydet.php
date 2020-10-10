<!DOCTYPE html>
<html lang="en">

<head>
    <title>DEPO STOK</title>
    <meta charset="utf-8">
    <link rel="stylesheet" href="css/tasarim.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.0/css/bootstrap.min.css">

</head>

<body>
    <?php
    include("menu.php");
    ?>
    <?php
    $kadi = $_POST['kadi'];
    $pass = $_POST['pass'];
    $baglan = mysqli_connect("localhost", "root");
    mysqli_select_db($baglan, "depo_stok") or die("MySql'e baglanamadı!");

    $sonuc = mysqli_query($baglan, "INSERT INTO uyeler(kadi,pass) VALUES ('$kadi','$pass')");
    /* bu kısım sadece admin tarafında olmalı */
    $sonuc = mysqli_query($baglan, "SELECT * FROM uyeler");
    echo "<table class='table table-striped'>";
    if (mysqli_num_rows($sonuc) != 0) {
        echo '<tr>';
        echo "<td>Kullanıcı Adı</td>";
        echo "<td>Sifre</td>";
        echo "</tr>";

        while ($oku = mysqli_fetch_assoc($sonuc)) {
            echo "<tr>";
            echo "<td>" . $oku["kadi"] . "</td>";
            echo "<td>" . $oku["pass"] . "</td>";
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