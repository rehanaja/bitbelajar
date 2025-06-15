<!DOCTYPE html>
<html>
<head>
    <title>Tugas WeProg 4</title>
</head>
<body>
    <h2>Tampilan Input</h2>
    <form method="post">
        Nilai 1: <input type="number" name="nilai1"><br><br>
        Nilai 2: <input type="number" name="nilai2"><br><br>

        <input type="radio" name="rumus" value="segitiga"> Segitiga<br>
        <input type="radio" name="rumus" value="persegi"> Persegi Panjang<br><br>

        <input type="submit" name="hitung" value="Hitung">
        <input type="reset" value="Batal">
    </form>

    <h2>Tampilan Output</h2>
    <?php
    if (isset($_POST['hitung'])) {
        $nilai1 = $_POST['nilai1'];
        $nilai2 = $_POST['nilai2'];
        $rumus = $_POST['rumus'] ?? '';

        if ($nilai1 == 0 && $nilai2 == 0) {
            echo "Tidak ada hasil perhitungan karena kedua nilai = 0";
        } elseif ($nilai1 != "" && $nilai2 != "") {
            echo "HASIL HITUNG RUMUS<br>";
            echo "Nilai a adalah = $nilai1<br>";
            echo "Nilai b adalah = $nilai2<br>";

            if ($rumus == "segitiga") {
                $hasil = 0.5 * $nilai1 * $nilai2;
                echo "Rumus Yang Dipilih adalah = Segitiga<br>";
                echo "Hasil Perhitungan Rumus = $hasil";
            } elseif ($rumus == "persegi") {
                $hasil = $nilai1 * $nilai2;
                echo "Rumus Yang Dipilih adalah = Persegi Panjang<br>";
                echo "Hasil Perhitungan Rumus = $hasil";
            } else {
                echo "Silakan pilih salah satu rumus.";
            }
        } else {
            echo "Mohon masukkan kedua nilai.";
        }
    }
    ?>
</body>
</html>