<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Daftar Pesanan</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>

<body>
    <!-- content -->
    <div class="container">
        <div class="card mt-3">
            <div class="card-body">
                <!-- form -->
                <h5 class="card-title">Form Pemesanan</h5>
                <form class="row g-3" id="myForm" action="prosesTambah.php" method="post">
                    <div class="col-12">
                        <label for="namaPemesanan" class="form-label">Nama:</label>
                        <input type="text" class="form-control" id="namaPemesanan" name="namaPemesanan" required>
                    </div>
                    <div class="col-12">
                        <label for="nomorHp" class="form-label">Nomor HP/Telp:</label>
                        <input type="text" class="form-control" id="nomorHp" name="nomorHp" required>
                    </div>
                    <div class="col-12">
                        <label for="durasi" class="form-label">Durasi Sewa (Bulan):</label>
                        <input type="number" class="form-control" id="durasi" name="durasi" required>
                    </div>
                    <div class="col-12">
                        <label for="jenisProperti" class="form-label">Jenis Properti</label>
                        <select class="form-select" id="jenisProperti" name="jenisProperti" aria-label="Default select example" required>
                            <option value="Kamar">Kamar</option>
                            <option value="Kios">Kios</option>
                            <option value="Ruko">Ruko</option>
                            <option value="Pavilion">Pavilion</option>
                            <option value="Rumah">Rumah</option>
                        </select>
                    </div>
                    <div class="col-12">
                        <label for="jumlahTagihan" class="form-label">Jumlah Bayar:</label>
                        <input type="text" class="form-control" id="jumlahTagihan" name="jumlahTagihan" readonly required>
                    </div>
                    <div class="col-12">
                        <input type="submit" class="btn btn-success" value="Pesan">

                        <button type="button" class="btn btn-primary" id="hitungBtn">Hitung</button>

                    </div>
                </form>
                <!-- /form -->
            </div>
        </div>
    </div>

    <!-- scrip jquery dan java script -->
    <script src="jquery-3.7.1.min.js"></script>
    <script>
        $(document).ready(function() {
            $('#hitungBtn').click(function() {
                // Mendapatkan durasi sewa
                var durasi = parseInt($('#durasi').val()) || 0;

                // Mendapatkan jenis properti dan menentukan harga per bulan
                var jenisProperti = $('#jenisProperti').val();
                var hargaPerBulan = 0;

                if (jenisProperti == "Kamar") {
                    hargaPerBulan = 500000; // Harga sewa per bulan untuk Kamar
                } else if (jenisProperti == "Kios") {
                    hargaPerBulan = 1500000; // Harga sewa per bulan untuk Kios
                } else if (jenisProperti == "Ruko") {
                    hargaPerBulan = 2500000; // Harga sewa per bulan untuk Ruko
                } else if (jenisProperti == "Pavilion") {
                    hargaPerBulan = 1000000; // Harga sewa per bulan untuk Pavilion
                } else if (jenisProperti == "Rumah") {
                    hargaPerBulan = 2000000; // Harga sewa per bulan untuk Rumah
                }

                // Menghitung total harga sewa
                var totalHarga = durasi * hargaPerBulan;

                // Menampilkan total harga di field Jumlah Tagihan
                $('#jumlahTagihan').val(totalHarga);
            });
        });
    </script>
    <!-- /scrip jquery dan java script -->

    <!-- /content -->


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>

</html>