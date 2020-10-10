<html lang="tr">

<head>
    <meta charset="utf-8">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.0/css/bootstrap.min.css">
    <title>DEPO STOK</title>
</head>

<body>
    <?php
    $kadi = $_POST['kadi'];
    $sifre = $_POST['pass'];
    $baglan = mysqli_connect("localhost", "root");
    mysqli_select_db($baglan, "depo_stok") or die("MySql'e baglanamadı!");

    $sonuc = mysqli_query($baglan, "SELECT * FROM uyeler WHERE kadi='$kadi' and pass='$sifre'");
    if (mysqli_num_rows($sonuc) > 0) {
        session_start();

        $_SESSION['kadi'] = $kadi;
        $_SESSION['pass'] = $sifre;
        Header("Location:Admin.php");
    } else {
        Header("Location:index2.html");
    }
    mysqli_close($baglan);
    ?>
</body>

</html>