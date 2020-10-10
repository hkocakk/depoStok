<html>

<body>
    <?php
    session_start();
    unset($_SESSION['kadi']);
    session_destroy();

    header("Location: index.html");
    exit;
    ?>
</body>

</html>