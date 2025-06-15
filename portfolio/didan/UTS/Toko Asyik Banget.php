<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Toko Asyik Banget</title>
</head>
<body>
    <h1>Selamat Datang di Toko Asyik Banget</h1>
    <?php
    echo "========================================================="  ?>
    <form action="OutputTokoAsyik.php" method="post">
        <table>
            <tr>
                <td>No.Pesanan</td>
                <td>: <input type="text"name="no_pesanan">
            </td>
            </tr>
            <tr>
                <td>Tanggal</td>
                <td>: <input type="text"name="tanggal" value="<?php echo date('d-M-Y'); ?>"readonly>
            </td>
            </tr>
            <tr>
                <td>Nama Konsumen</td>
                <td>: <input type="text"name="nama_konsumen" value=" "></td>
            </tr>
            <tr>
                <td>Pilih Jenis Barang</td>
                <td>: <select name="jenis_barang">
                    <option value="Peralatan Rumah Tangga">Peralatan Rumah Tangga</option>
                    <option value="Peralatan Kantor">Peralatan Kantor</option>
                </select>
            </td>
            </tr>
            <tr>
                <td>Pilih Jenis Pembelian</td>
                <td>: <input type="radio"name="jenis_pembelian" value="Grosir"checked>Grosir
                      <input type="radio"name="jenis_pembelian" value="Ecer">Ecer            
            </td>
            </tr>
            <tr>
                <td>Masukan Nama Barang</td>
                <td>: <select name="nama_barang">
                    <option value="Kulkas - 1.500.000">Kulkas == 1.500.000</option>
                    <option value="Kompor - 500.000">Kompor == 500.000</option>
                    <option value="Lemari Besi - 2.500.000">Lemari Besi == 2.500.000</option>
                    <option value="Kursi Kantor - 1.500.000">Kursi Kantor == 1.500.000</option>


                </select>
            </td>
            </tr>
            <tr>
                <td>Masukan Jumlah Beli</td>
                <td>: <input type="number" name="jumlah" value=""></td>
            </tr>
            <tr>
                <td>Alamat Pengiriman</td>
                <td>: <textarea name="alamat"></textarea></td>
            </tr>
            <tr>
                <td colspan="2">
                    <input type="submit" name="proses" value="Proses">
                    <input type="reset" value="Batal">
                </td>
            </tr>
        </table>





    </form>
    
</body>
</html>