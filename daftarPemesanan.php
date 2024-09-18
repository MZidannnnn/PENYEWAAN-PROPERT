<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>List Penyewaan</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>
<body>
    
<!-- content -->
<h4 class="h4 mt-4">Daftar Pesanan</h4>
<table class="table table-striped table-bordered mb-4">
    <thead>
        <tr>
            <th>No</th>
            <th>Nama</th>
            <th>Nomor Hp</th>
            <th>Durasi Sewa (Bulan)</th>
            <th>Jenis Properti</th>
            <th>Total Harga</th>
        </tr>
    </thead>
    <tbody>
        <?php
        $no = 1;
        include 'koneksi.php';
        $data = mysqli_query($db, "SELECT * FROM pesan");
        while ($d = mysqli_fetch_assoc($data)) {
        ?>
            <tr>
                <td><?php echo $no++; ?></td>
                <td><?php echo $d['nama']; ?></td>
                <td><?php echo $d['nomorhp']; ?></td>
                <td><?php echo $d['durasi']; ?></td>
                <td><?php echo $d['jenis']; ?></td>

                <td><?= number_format($d['total'], 0, ',', '.');  ?></td>

            </tr>
        <?php
        }
        ?>
    </tbody>
</table>
<a href="index.php" class="btn btn-primary">Kembali</a>
<!-- /content -->
</body>
</html>




