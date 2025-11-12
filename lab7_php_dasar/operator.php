<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Operator PHP</title>
</head>
<body>
    <h2>Operator Aritmatika</h2>
    <?php
        $gaji = 1000000;   // gaji pokok
        $pajak = 0.1;      // 10% pajak
        $thp = $gaji - ($gaji * $pajak);  // hasil akhir setelah pajak

        echo "Gaji sebelum pajak = Rp. $gaji <br>";
        echo "Gaji yang dibawa pulang = Rp. $thp";
    ?>
</body>
</html>
