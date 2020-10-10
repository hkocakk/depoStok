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
    <h3>Ürün Girişi</h3>
    </div>
    <div class="card-body">
        <form action="urunKaydet.php" method="POST">
            <table>
                <tr>
                    <td>UrunID:</td>
                    <td><input type="text" class="form-control" name="UrunID"></td>
                </tr>
                <tr>
                    <td>Ürün Adı:</td>
                    <td><input type="text" class="form-control" name="urunadi"></td>
                </tr>
                <tr>
                    <td>Kategori ID:</td>
                    <td><input type="text" class="form-control" name="Kategori_id"></td>
                </tr>
                <tr>
                    <td>Ürün Birimi:</td>
                    <td><input type="text" class="form-control" name="Urun_birimi"></td>
                </tr>
                <tr>
                    <td>Alış Fiyatı:</td>
                    <td><input type="text" class="form-control" name="U_alisfiyat"></td>
                </tr>
                <tr>
                    <td>Satış Fiyatı:</td>
                    <td><input type="text" class="form-control" name="U_satisfiyat"></td>
                </tr>
                <tr>
                    <td>Stok:</td>
                    <td><input type="text" class="form-control" name="Stok"></td>
                </tr>
            </table>

            <div class="form-group">
                <input type="submit" value="Ürün Ekle" class="btn floatright login_btn">
            </div>
        </form>
    </div>
    </div>

</body>

</html>