<!DOCTYPE html>
<html lang="en">

<head>
    <title>DEPO STOK</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.0/css/bootstrap.min.css">
    <link rel="stylesheet" href="../css/tasarim.css">
    <meta name="viewport" content="width=device-width, initial-scale=1">
</head>

<body>
    <?php
    include("menu.php");
    ?>
    <h3>Kategori Kayıt Ekranı</h3>
    </div>
    <div class="card-body">
        <form action="katKaydet.php" method="POST">
            <table>
                <tr>
                    <td>Kategori adı</td>
                    <td><input type="text" class="form-control" name="kategori_ad"></td>
                </tr>
            </table>

            <div class="form-group">
                <input type="submit" value="Kategori Kaydet" class="btn floatright login_btn">
            </div>
        </form>
    </div>
    </div>

</body>

</html>