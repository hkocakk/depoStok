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
    <h3>Kullanıcı Kayıt Ekranı</h3>
    </div>
    <div class="card-body">
        <form action="uyeKaydet.php" method="POST">
            <table>
                <tr>
                    <td>Kullanıcı adı</td>
                    <td><input type="text" class="form-control" name="kadi"></td>
                </tr>
                <tr>
                    <td>Parola</td>
                    <td><input type="password" class="form-control" name="pass"></td>
                </tr>
            </table>

            <div class="form-group">
                <input type="submit" value="Üye Kaydet" class="btn floatright login_btn">
            </div>
        </form>
    </div>
    </div>

</body>

</html>