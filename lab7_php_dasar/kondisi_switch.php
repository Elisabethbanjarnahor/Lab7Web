<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Kondisi SWITCH</title>
</head>
<body>
    <h2>Contoh Kondisi SWITCH</h2>
    <?php
        $nama_hari = date("l");

        switch ($nama_hari) {
            case "Sunday":
                echo "Sekarang hari Minggu";
                break;
            case "Monday":
                echo "Sekarang hari Senin";
                break;
            case "Tuesday":
                echo "Sekarang hari Selasa";
                break;
            default:
                echo "Hari ini $nama_hari";
        }
    ?>
</body>
</html>
