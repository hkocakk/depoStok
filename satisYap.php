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
    <div class="card-body">
        <form action="satis.php" method="POST">
            <table>
                <tr>
                    <td>UrunID:</td>
                    <td><input type="text" class="form-control" name="UrunID"></td>
                </tr>
                <tr>
                    <td>Adet:</td>
                    <td><input type="text" class="form-control" id="adt" name="adet"></td>
                </tr>
            </table>
            <div class="form-group">
                <input type="submit" value="Hesapla" class="btn floatright login_btn">
            </div>
            <?php
            $baglan = mysqli_connect("localhost", "root");
            mysqli_select_db($baglan, "depo_stok") or die("MySql'e baglanamadı!");
            $sonuc = mysqli_query($baglan, "SELECT * FROM urun");
            echo "<table class='table table-striped'>";
            if (mysqli_num_rows($sonuc) != 0) {
                echo '<tr>';
                echo "<td>UrunID</td>";
                echo "<td>Ürün Adı</td>";
                echo "<td>Kategori ID</td>";
                echo "<td>Ürün Birimi</td>";
                echo "<td>Satış Fiyatı</td>";
                echo "<td>Stok</td>";
                echo "</tr>";

                while ($oku = mysqli_fetch_assoc($sonuc)) {
                    echo "<tr>";
                    echo "<td>" . $oku["UrunID"] . "</td>";
                    echo "<td>" . $oku["urunadi"] . "</td>";
                    echo "<td>" . $oku["Kategori_id"] . "</td>";
                    echo "<td>" . $oku["Urun_birimi"] . "</td>";
                    echo "<td>" . $oku["U_satisfiyat"] . "</td>";
                    echo "<td>" . $oku["Stok"] . "</td>";
                    echo "</tr>";
                }
            } else {
                echo "Hic kayit yok!";
            }
            echo "</table>";
            ?>
        </form>
    </div>
</body>

</html>