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
    $Sicil_id = $_POST['Sicil_id'];
    $P_ad = $_POST['P_ad'];
    $P_soyad = $_POST['P_soyad'];
    $P_adres = $_POST['P_adres'];
    $baglan = mysqli_connect("localhost", "root");
    mysqli_select_db($baglan, "depo_stok") or die("MySql'e baglanamadı!");

    $sonuc = mysqli_query($baglan, "INSERT INTO personel VALUES ('$Sicil_id','$P_ad','$P_soyad','$P_adres')");
    /* bu kısım sadece admin tarafında olmalı */
    $sonuc = mysqli_query($baglan, "SELECT * FROM personel");
    echo "<table class='table table-striped'>";
    if (mysqli_num_rows($sonuc) != 0) {
        echo '<tr>';
        echo "<td>Personel Adı</td>";
        echo "<td>Personel Soyadı</td>";
        echo "</tr>";

        while ($oku = mysqli_fetch_assoc($sonuc)) {
            echo "<tr>";
            echo "<td>" . $oku["P_ad"] . "</td>";
            echo "<td>" . $oku["P_soyad"] . "</td>";
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