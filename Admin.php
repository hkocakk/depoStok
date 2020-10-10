<?php
session_start();
if (!isset($_SESSION['kadi'])) {
    header("location:index.html");
} else {
    ?>
    <!DOCTYPE html>
    <html>

    <head>
        <title>DEPO STOK</title>
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.0/css/bootstrap.min.css">
        <link rel="stylesheet" href="css/tasarim.css">
        <meta name="viewport" content="width=device-width, initial-scale=1">
    </head>

    <body>

        <?php
        include("menu.php");
        ?>

        <h1>Depo Durumu </h1>
        <?php
        $baglan = mysqli_connect("localhost", "root");
        mysqli_select_db($baglan, "depo_stok") or die("MySql'e baglanamadı!");
        $sonuc = mysqli_query($baglan, "SELECT * FROM urun");
        $toplam = 0;
        while ($oku = mysqli_fetch_assoc($sonuc)) {
            $toplam = $toplam + $oku["Stok"];
        }

        ?>
        <h1>Toplam <?php echo $toplam ?> adet ürün var.</h1>
    </body>

    </html>
<?php
}
?>