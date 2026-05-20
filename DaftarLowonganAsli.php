<?php
include 'koneksi.php';

$query = mysqli_query($conn, "SELECT * FROM lowongan");
?>

<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Daftar Lowongan</title>
    <link rel="stylesheet" href="DaftarLowongan.css">
</head>
<body>

    <!-- HEADER -->
    <div class="header">
        <h1>Daftar Lowongan Pekerjaan</h1>
        <p>Temukan pekerjaan impianmu di sini</p>
    </div>

    <!-- FILTER -->
    <div id="filter-section">
        <h3>Filter Kategori:</h3>

        <select id="filter-kategori">
            <option value="Semua">Semua</option>
            <option value="Administrasi">Administrasi</option>
            <option value="Teknik">Teknik</option>
            <option value="Retail">Retail</option>
            <option value="IT">IT</option>
        </select>
    </div>

    <!-- STATISTIK -->
    <div id="statistik"
        style="margin: 0 20px 10px 20px;
        padding: 10px;
        background-color: #e8f4ff;
        border-radius: 8px;
        text-align: center;">

        <strong>Total Lowongan:</strong>

        <?php
        echo mysqli_num_rows($query);
        ?>
    </div>

    <!-- TABEL -->
    <h3 class="judul-utama">Lowongan Tersedia</h3>

    <table id="daftar-tabel" border="1">

        <thead>
            <tr>
                <th>Posisi</th>
                <th>Perusahaan</th>
                <th>Lokasi</th>
                <th>Kategori</th>
                <th>Aksi</th>
            </tr>
        </thead>

        <tbody id="tabel-body">

        <?php
        while($row = mysqli_fetch_assoc($query)){
        ?>

            <tr>
                <td><?php echo $row['posisi']; ?></td>
                <td><?php echo $row['perusahaan']; ?></td>
                <td><?php echo $row['lokasi']; ?></td>
                <td><?php echo $row['kategori']; ?></td>

                <td>
                    <button class="btn-detail-disabled" disabled>
                        Detail
                    </button>
                </td>
            </tr>

        <?php
        }
        ?>

        </tbody>
    </table>

    <!-- FOOTER -->
    <footer class="footer">
        <div class="footer-content">
            <a href="#">Tentang Kami</a>
            <a href="#">Kontak</a>
            <a href="#">Kebijakan Privasi</a>
            <a href="#">Pusat Bantuan</a>
        </div>
    </footer>

    <!-- JS -->
    <script src="DaftarLowongan.js"></script>

</body>
</html>