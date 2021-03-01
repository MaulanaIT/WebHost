<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <?php include '../Js/bootstrap.php' ?>
    <?php include '../Js/jquery.php' ?>

    <link rel="stylesheet" href="../CSS/side_nav.css">
    <link rel="stylesheet" href="../CSS/daftar_transaksi.css">

    <title>Daftar Transaksi</title>
</head>

<body>
    <div class="page-wrapper chiller-theme toggled">
        <?php include 'side_nav.php' ?>

        <?php include 'header.php' ?>

        <main class="page-content">
            <div class="container-fluid">
                <i class="fas fa-boxes fa-2x" aria-hidden="true"></i>
                <span>DAFTAR TRANSAKSI</span>

                <button onclick="location.href='rekap_transaksi.php'" class="btn add-button">Rekap Transaksi
                    Bulanan</button>

                <table class="table-data">
                    <tr>
                        <th>Tanggal</th>
                        <th>Nama Admin</th>
                        <th>Aktivitas</th>
                        <th>Profit/Defisit</th>
                    </tr>
                    <tr>
                        <td>21-02-2021</td>
                        <td>Ian</td>
                        <td>Menjual Buku Tulis sebanyak 1 buah</td>
                        <td style="color: #4ED964">+ 2500</td>
                    </tr>
                    <tr>
                        <td>20-02-2021</td>
                        <td>Ian</td>
                        <td>Menjual Buku Gambar sebanyak 1 buah</td>
                        <td style="color: #4ED964">+ 2000</td>
                    </tr>
                    <tr>
                        <td>20-02-2021</td>
                        <td>Ian</td>
                        <td>Menjual Bolpoin Pilot sebanyak 1 buah</td>
                        <td style="color: #4ED964">+ 2500</td>
                    </tr>
                    <tr>
                        <td>20-02-2021</td>
                        <td>Admin 1</td>
                        <td>Membeli Pensil 3B sebanyak 100 buah</td>
                        <td style="color: #FF3A31">- 100000</td>
                    </tr>
                    <tr>
                        <td>20-02-2021</td>
                        <td>Admin 2</td>
                        <td>Menjual Buku Tulis sebanyak 100 buah</td>
                        <td style="color: #FF3A31">- 250000</td>
                    </tr>
                    <tr>
                        <td>20-02-2021</td>
                        <td>Admin 2</td>
                        <td>Menjual Buku Tulis sebanyak 2 buah</td>
                        <td style="color: #4ED964">+ 5000</td>
                    </tr>
                </table>

                <table style="border: none; float: right; width: 10%;">
                    <tr>
                        <td>Sebelumnya</td>
                        <td>1</td>
                        <td>2</td>
                        <td>3</td>
                        <td>...</td>
                        <td>9</td>
                        <td>10</td>
                        <td>Selanjutnya</td>
                    </tr>
                </table>
            </div>
        </main>
    </div>

    <?php include 'footer.php' ?>

    <?php include '../Js/js.php' ?>
</body>

<script>
jQuery(function($) {
    $("#close-sidebar").click(function() {
        $(".page-wrapper").removeClass("toggled");
    });

    $("#show-sidebar").click(function() {
        $(".page-wrapper").addClass("toggled");
    });
});
</script>

</html>