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
    <h3>Personel Kayıt Ekranı</h3>
    </div>
    <div class="card-body">
        <form action="personelKaydet.php" method="POST">
            <table>
                <tr>
                    <td>Sicil No:</td>
                    <td><input type="text" class="form-control" name="Sicil_id"></td>
                </tr>
                <tr>
                    <td>Ad</td>
                    <td><input type="text" class="form-control" name="P_ad"></td>
                </tr>
                <tr>
                    <td>Soyad</td>
                    <td><input type="text" class="form-control" name="P_soyad"></td>
                </tr>
                <tr>
                    <td>Adres</td>
                    <td><input type="text" class="form-control" name="P_adres"></td>
                </tr>
            </table>

            <div class="form-group">
                <input type="submit" value="Personel Kaydet" class="btn floatright login_btn">
            </div>
        </form>
    </div>
    </div>

</body>

</html>