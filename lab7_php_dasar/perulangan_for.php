<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Perulangan FOR</title>
</head>
<body>
    <h2>Perulangan FOR Naik & Turun</h2>

    <?php
    echo "Perulangan dari 1 sampai 10 <br>";
    for ($i = 1; $i <= 10; $i++) {
        echo "Perulangan ke-$i <br>";
    }

    echo "<br>Perulangan menurun dari 10 ke 1 <br>";
    for ($i = 10; $i >= 1; $i--) {
        echo "Perulangan ke-$i <br>";
    }
    ?>
</body>
</html>
