<?php 
// Koneksi ke database
$connect = mysqli_connect("localhost", "root", "", "bitbelajar");

// jika tidak terkoneksi
if (!$connect) {
    // jalankan perintah error ini
    die("Connection Failed" . mysqli_connect_error());
}

// Function query ke database untuk menghasilkan array associative
function query($query) {
    // mengakses variabel '$connect' yang didefinisikan di luar cakupan fungsi ini
    global $connect;

    // Menjalankan query SQL ke database
    $result = mysqli_query($connect, $query);

    // Menginisialisasi sebuah array kosong
    $rows = [];
    while ($row = mysqli_fetch_assoc($result)) {
        $rows[] = $row;
    }
    return $rows;
}


?>