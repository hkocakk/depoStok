<html>
    <body>
        <form action="satis2.php" method="POST">
        <div>
            <input type="text" id="kutu" class="form-control" name="uID" value="<?php echo $UrunID ?>">
            <input type="text" id="kutu" class="form-control" name="uAdet" value="<?php echo $adet ?>">
            <h1>Toplam Fiyat: </h1>
            <input type="text" class="form-control" name="adt" value="<?php echo $adet * $fiyat ?>₺">
            <input type="submit" value="Satış Yap" class="btn floatright login_btn">
        </div>
    </form>
    </body>
</html>

