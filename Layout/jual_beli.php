<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <?php include '../Js/bootstrap.php'; ?>
    <?php include '../Js/jquery.php'; ?>

    <link rel="stylesheet" href="../CSS/side_nav.css">
    <link rel="stylesheet" href="../CSS/jual_beli.css">

    <title>Jual Beli</title>
</head>

<body>
    <div class="page-wrapper chiller-theme toggled">
        <?php include 'side_nav.php'; ?>

        <?php include 'header.php'; ?>

        <main class="page-content">
            <div class="container-fluid">
                <i class="fas fa-boxes fa-2x" aria-hidden="true"></i>
                <span>JUAL BELI</span>

                <table>
                    <tr>
                        <th>No</th>
                        <th>Nama Barang</th>
                        <th>Kategori Barang</th>
                        <th>Jumlah Barang</th>
                        <th>Jual</th>
                        <th>Beli</th>
                    </tr>
                    <tr>
                        <td>1</td>
                        <td>Buku Tulis</td>
                        <td>Konsumsi</td>
                        <td>100</td>
                        <td><button class="btn" style="background-color: #4ED964; color: white; font-size: 12px;">Jual</button></td>
                        <td><button class="btn" style="background-color: #FF3A31; color: white; font-size: 12px;">Beli</button></td>
                    </tr>
                    <tr>
                        <td>2</td>
                        <td>Buku Gambar</td>
                        <td>Konsumsi</td>
                        <td>28</td>
                        <td><button class="btn" style="background-color: #4ED964; color: white; font-size: 12px;">Jual</button></td>
                        <td><button class="btn" style="background-color: #FF3A31; color: white; font-size: 12px;">Beli</button></td>
                    </tr>
                    <tr>
                        <td>3</td>
                        <td>Printer</td>
                        <td>Non-Konsumsi</td>
                        <td>3</td>
                        <td><button class="btn" style="background-color: #4ED964; color: white; font-size: 12px;">Jual</button></td>
                        <td><button class="btn" style="background-color: #FF3A31; color: white; font-size: 12px;">Beli</button></td>
                    </tr>
                    <tr>
                        <td>4</td>
                        <td>Pensil 3B</td>
                        <td>Konsumsi</td>
                        <td>47</td>
                        <td><button class="btn" style="background-color: #4ED964; color: white; font-size: 12px;">Jual</button></td>
                        <td><button class="btn" style="background-color: #FF3A31; color: white; font-size: 12px;">Beli</button></td>
                    </tr>
                    <tr>
                        <td>5</td>
                        <td>Bolpoin Pilot</td>
                        <td>Konsumsi</td>
                        <td>100</td>
                        <td><button class="btn" style="background-color: #4ED964; color: white; font-size: 12px;">Jual</button></td>
                        <td><button class="btn" style="background-color: #FF3A31; color: white; font-size: 12px;">Beli</button></td>
                    </tr>
                    <tr>
                        <td>6</td>
                        <td>Bolpoin Standar</td>
                        <td>Konsumsi</td>
                        <td>100</td>
                        <td><button class="btn" style="background-color: #4ED964; color: white; font-size: 12px;">Jual</button></td>
                        <td><button class="btn" style="background-color: #FF3A31; color: white; font-size: 12px;">Beli</button></td>
                    </tr>
                </table>
            </div>
        </main>
    </div>

    <?php include 'footer.php'; ?>
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