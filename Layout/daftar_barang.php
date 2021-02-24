<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <?php include '../Js/bootstrap.php' ?>
    <?php include '../Js/jquery.php' ?>

    <link rel="stylesheet" href="../CSS/side_nav.css">
    <link rel="stylesheet" href="../CSS/daftar_barang.css">

    <title>Daftar Barang</title>
</head>

<body>
    <div class="page-wrapper chiller-theme toggled">
        <?php include 'side_nav.php' ?>

        <?php include 'header.php' ?>

        <main class="page-content">
            <div class="container-fluid">
                <i class="fas fa-boxes fa-2x" aria-hidden="true"></i>
                <span>DAFTAR BARANG</span>

                <table>
                    <tr>
                        <th>No</th>
                        <th>Nama Barang</th>
                        <th>Kategori Barang</th>
                        <th>Jumlah Barang</th>
                        <th>Harga Pokok</th>
                        <th>Harga Jual</th>
                        <th>Edit</th>
                        <th>Hapus</th>
                    </tr>
                    <tr>
                        <td>1</td>
                        <td>Buku Tulis</td>
                        <td>Konsumsi</td>
                        <td>100</td>
                        <td>1500</td>
                        <td>2500</td>
                        <td style="width: 10%"><i class='fas fa-pen-square fa-lg'></i></td>
                        <td style="width: 10%"><i class='fas fa-trash fa-lg'></i></td>
                    </tr>
                    <tr>
                        <td>2</td>
                        <td>Buku Gambar</td>
                        <td>Konsumsi</td>
                        <td>28</td>
                        <td>1000</td>
                        <td>2000</td>
                        <td style="width: 10%"><i class='fas fa-pen-square fa-lg'></i></td>
                        <td style="width: 10%"><i class='fas fa-trash fa-lg'></i></td>
                    </tr>
                    <tr>
                        <td>3</td>
                        <td>Printer</td>
                        <td>Non-Konsumsi</td>
                        <td>3</td>
                        <td>-</td>
                        <td>-</td>
                        <td style="width: 10%"><i class='fas fa-pen-square fa-lg'></i></td>
                        <td style="width: 10%"><i class='fas fa-trash fa-lg'></i></td>
                    </tr>
                    <tr>
                        <td>4</td>
                        <td>Pensil B3</td>
                        <td>Konsumsi</td>
                        <td>47</td>
                        <td>1000</td>
                        <td>3000</td>
                        <td style="width: 10%"><i class='fas fa-pen-square fa-lg'></i></td>
                        <td style="width: 10%"><i class='fas fa-trash fa-lg'></i></td>
                    </tr>
                    <tr>
                        <td>5</td>
                        <td>Bolpoin Pilot</td>
                        <td>Konsumsi</td>
                        <td>100</td>
                        <td>1500</td>
                        <td>2500</td>
                        <td style="width: 10%"><i class='fas fa-pen-square fa-lg'></i></td>
                        <td style="width: 10%"><i class='fas fa-trash fa-lg'></i></td>
                    </tr>
                    <tr>
                        <td>6</td>
                        <td>Bolpoin Standar</td>
                        <td>Konsumsi</td>
                        <td>100</td>
                        <td>1500</td>
                        <td>2500</td>
                        <td style="width: 10%"><i class='fas fa-pen-square fa-lg'></i></td>
                        <td style="width: 10%"><i class='fas fa-trash fa-lg'></i></td>
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