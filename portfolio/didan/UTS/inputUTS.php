<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Toko Laptop</title>
    <!-- Custom Style CSS -->
    <link rel="stylesheet" href="custom.css">
</head>
<body>

    <!-- Judul  -->
     <table border="1" cellpadding="8">
        <tr>
            <th colspan="2">
                <div class="judul">
                    <h1>DATA PENJUALAN LAPTOP</h1>
                </div>
            </th>
        </tr>


        <!-- Column Kiri -->
         <form action="outputUTS.php" method="post">
        <tr>
            <td>
                <div class="col-left">
                    <h4 class="data-pelanggan">Data Pelanggan</h4>
                    <div class="nama all" style="margin: 15px 0;">
                        <label for="nama">Nama</label>
                        <div class="tab">
                            <span>:</span>
                            <input type="text" name="nama" id="nama" placeholder="Masukkan Nama">
                        </div>
                    </div>
                    <div class="alamat all" style="margin: 15px 0;">
                        <label for="alamat">Alamat</label>
                        <div class="tab">
                            <span>:</span>
                            <textarea name="alamat" id="alamat" placeholder="Masukkan Alamat"></textarea>
                        </div>
                    </div>
                    <div class="telepon all" style="margin: 15px 0;">
                        <label for="telepon">Telepon</label>
                        <div class="tab">
                            <span>:</span>
                            <input type="text" name="telepon" id="telepon" placeholder="Masukkan No. Telepon">
                        </div>
                    </div>
                </div>
            </td>

            <!-- Column Kanan -->
            <td>
                <div class="col-right">
                    <h4 style="margin-top: 15px;" class="data-pelanggan">Data Pelanggan</h4>
                    <div class="pesan all" style="margin: 15px 0;">
                        <label for="pesan">No. Pemesanan</label>
                        <div class="tab">
                            <span>:</span>
                            <input type="number" name="pesan" id="pesan" min="1" placeholder="Masukkan No. Pemesanan">
                        </div>
                    </div>
                    <div class="tbeli all" style="margin: 15px 0;">
                        <label for="tbeli">Tanggal Beli</label>
                        <div class="tab">
                            <span>:</span>
                            <input type="date" name="tbeli" id="tbeli" placeholder="Masukkan Tanggal Beli">
                        </div>
                    </div>
                    <div class="jbeli all" style="margin: 15px 0;">
                        <label for="jbeli">Jumlah Beli</label>
                        <div class="tab">
                            <span>:</span>
                            <input type="number" name="jbeli" id="jbeli" min="1" placeholder="Masukkan Jumlah Beli">
                        </div>
                    </div>
                    <div class="merk all" style="margin: 15px 0;">
                        <label for="merk">Merk </label>
                        <div class="tab">
                            <span>:</span>
                            <select name="merk" id="merk">
                                <option value="" disabled selected>--Pilih--</option>
                                <option value="asus">Asus</option>
                                <option value="acer">Acer</option>
                            </select>
                        </div>
                    </div>
                    <div class="tipe all" style="margin: 15px 0;">
                        <label for="tipe">Tipe</label>
                        <div class="tab">
                            <span>:</span>
                            <select name="tipe" id="tipe">
                                <option value="" disabled selected>--Pilih--</option>
                                <option value="asus1215B">Asus Eee PC 1215B</option>
                                <option value="asus1015B">Asus Eee PC 1015B</option>
                                <option value="acer1">Acer Aspire ES1</option>
                                <option value="acer2">Acer Aspire ES2</option>                         
                            </select>
                        </div>
                    </div>
                    <div class="submit" style="margin: 15px 0;">
                        <button type="submit">Simpan Data</button>
                        <button type="reset">Batal</button>
                    </div>
                </div>
            </td>
        </tr>
        </form>
     </table>

    
    
    
</body>
</html>