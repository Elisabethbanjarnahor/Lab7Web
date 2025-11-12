<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Kondisi IF</title>
</head>
<body>
    <h2>Contoh Kondisi IF</h2>
    <?php
        $nama_hari = date("l"); // ambil nama hari sekarang (Sunday, Monday, dst.)

        if ($nama_hari == "Sunday") {
            echo "Sekarang hari Minggu";
        } elseif ($nama_hari == "Monday") {
            echo "Sekarang hari Senin";
        } else {
            echo "Hari ini bukan Minggu atau Senin, tapi $nama_hari";
        }
    ?>
</body>
</html>
