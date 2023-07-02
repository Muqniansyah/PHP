<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Request</title>
</head>
<body>
    <form method="post"  action="<?php echo $_SERVER['PHP_SELF']; ?>">
        <h3>Isikan Nama</h3>
        <input type="text" name="nama">
        <input type="submit">
    </form>

    <?php
    $name = $_REQUEST['nama'];
    echo $name;
    ?>
</body>
</html>