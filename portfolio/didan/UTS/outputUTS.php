<?php  
    // Apabila data input belum ada maka akan otomatis di direct ke halaman input form
    if ( !isset($_POST["nama"]) || 
         !isset($_POST["alamat"]) || 
         !isset($_POST["telepon"]) ||
         !isset($_POST["pesan"]) ||
         !isset($_POST["tbeli"]) ||
         !isset($_POST["merk"]) ||
         !isset($_POST["tipe"]) ||
         !isset($_POST["jbeli"])) {  
        
        // Redirect (memindahkan ke halaman input)
        header("Location: inputUTS.php"); // Tambahkan titik koma
        
        // Keluar dari script if
        exit;
    }

    $bonus =  "";
    // Bonus apabila jumlah beli lebih dari sama dengan 1
    if ( $_POST["jbeli"] >= "1") {
            $bonus = "Facum Cleaner, Tas Laptop";

    }

    // Pengkondisian Menentukan harga sesuai tipe
    if ( $_POST["tipe"] == "asus1215B") {
        $harga = 2000000;
    } else if ( $_POST["tipe"] == "asus1015B") {
        $harga = 1427000;
    } else if ( $_POST["tipe"] == "acer1") {
        $harga = 2500000;
    } else if ($_POST["tipe"] == "acer2"){
        $harga = 2450000;
    }

    //Menghitung total
    $total = $harga * $_POST["jbeli"];

?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Process</title>
    <link rel="stylesheet" href="custom.css">
</head>
<body>
    
    <div class="border">
        <h1>DATA PENJUALAN LAPTOP</h1>
        <ul>
            <li>Nama <span>: <?= $_POST["nama"]; ?></span></li>
            <li>Alamat <span>: <?= $_POST["alamat"]; ?></span></li>
            <li>No. Telepon <span>: <?= $_POST["telepon"]; ?></span></li>
            <li>No. Pemesanan <span>: <?= $_POST["pesan"]; ?></span></li>
            <li>Tanggal Beli <span>: <?= $_POST["tbeli"]; ?></span></li>
            <?php for($i = 0;$i < 50;$i++) : ?>
                <?php echo "="; ?>
            <?php endfor ?>
            <li>Merk <span>: <?= $_POST["merk"]; ?></span></li>
            <li>Tipe <span>: <?= $_POST["tipe"]; ?></span></li>
            <li>Harga <span>: <?= $harga; ?> </span></li>
            <li>Jumlah Beli <span>: <?= $_POST["jbeli"]; ?></span></li>
            <li>Bonus <span>: <?= $bonus; ?></span></li>
            <?php for($i = 0;$i < 50;$i++) : ?>
                <?php echo "="; ?>
            <?php endfor ?>
            <li>Total Bayar <span>: <?= $total; ?> </span></li>
            <br>
            <br>
            <a href="inputUTS.php" style="text-decoration: underline;">Input Data Lagi?</a>
        </ul>
    </div>
</body>
</html>