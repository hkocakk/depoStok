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
    <header>
        <h2>Üye Silme</h2>
    </header>
    <?php
    $baglan = mysqli_connect("localhost", "root");
    mysqli_select_db($baglan, "depo_stok") or die("MySql'e baglanamadı!");
    $sonuc = mysqli_query($baglan, "SELECT * FROM uyeler");
    echo "<table class='table table-striped'>";
    if (mysqli_num_rows($sonuc) != 0) {

        echo '<tr>';
        echo "<td>SİLME</td>";
        echo "<td>Kullanıcı Adı</td>";
        echo "</tr>";
        while ($oku = mysqli_fetch_assoc($sonuc)) {
            echo "<tr>";
            echo "<td>";
            ?>
            <a href="kayitSil.php?kadi=<?php echo $oku["kadi"] ?>"> Üye SİL </a>
            <?php
            echo "</td>";
            echo "<td>" . $oku["kadi"] . "</td>";
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