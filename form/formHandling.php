<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form Handling dan validasi data</title>
</head>
<body>
    <form method="POST" action="">
        Name : <input type="text" name="name">
        <input type="submit" value="Submit">
    </form>

    <?php
    if($_SERVER["REQUEST_METHOD"] == "POST"){
        $name = htmlspecialchars($_POST["name"]);
        echo "Hello, " . $name;
    }

    /*
    PHP dapat menangani data yang dikirim melalui form HTML dengan metode GET atau POST. Data harus divalidasi untuk keamanan.
    Note: htmlspecialchars() digunakan untuk mencegah XSS (Cross-Site Scripting).
    */
    ?>
</body>
</html>