<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Tugas PHP Dasar</title>
</head>
<body>
    <h2>Form Data Diri</h2>
    <form method="post">
        <label>Nama:</label>
        <input type="text" name="nama"><br><br>

        <label>Tanggal Lahir:</label>
        <input type="date" name="tgl_lahir"><br><br>

        <label>Pekerjaan:</label>
        <select name="pekerjaan">
            <option value="Programmer">Programmer</option>
            <option value="Guru">Guru</option>
            <option value="Desainer">Desainer</option>
            <option value="Mahasiswa">Mahasiswa</option>
            <option value="Dokter">Dokter</option>
        </select><br><br>

        <input type="submit" value="Kirim">
    </form>

    <hr>

    <?php
    if (!empty($_POST['nama']) && !empty($_POST['tgl_lahir']) && !empty($_POST['pekerjaan'])) {
        $nama = $_POST['nama'];
        $tgl_lahir = $_POST['tgl_lahir'];
        $pekerjaan = $_POST['pekerjaan'];

        // hitung umur
        $umur = date_diff(date_create($tgl_lahir), date_create('today'))->y;

        // tentukan gaji berdasarkan pekerjaan
        switch ($pekerjaan) {
            case "Programmer":
                $gaji = 8000000;
                break;
            case "Guru":
                $gaji = 5000000;
                break;
            case "Desainer":
                $gaji = 6000000;
                break;
            case "Mahasiswa":
                $gaji = 1000000;
                break;
            case "Dokter":
                $gaji = 10000000;
                break;
            default:
                $gaji = 0;
        }

        // tampilkan hasil
        echo "<h3>Hasil Data Diri</h3>";
        echo "Nama: $nama <br>";
        echo "Tanggal Lahir: $tgl_lahir <br>";
        echo "Umur: $umur tahun <br>";
        echo "Pekerjaan: $pekerjaan <br>";
        echo "Gaji: Rp " . number_format($gaji, 0, ',', '.');
    }
    ?>
</body>
</html>
