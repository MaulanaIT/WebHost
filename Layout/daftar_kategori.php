<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <?php include '../Js/bootstrap.php' ?>
    <?php include '../Js/jquery.php' ?>

    <link rel="stylesheet" href="../CSS/side_nav.css">
    <link rel="stylesheet" href="../CSS/daftar_kategori.css">

    <title>Daftar Barang</title>
</head>

<body>
    <div class="page-wrapper chiller-theme toggled">
        <?php include 'side_nav.php' ?>

        <?php include 'header.php' ?>

        <main class="page-content">
            <div class="container-fluid">
                <i class="fas fa-clipboard-list fa-2x" aria-hidden="true"></i>
                <span>DAFTAR KATEGORI</span>

                <table>
                    <tr>
                        <th style="width: 5%">No</th>
                        <th class="nama">Nama Kategori</th>
                        <th style="width: 10%">Edit</th>
                        <th style="width: 10%">Hapus</th>
                    </tr>
                    <tr>
                        <td>1</td>
                        <td class="nama">Konsumsi</td>
                        <td><i class='fas fa-pen-square fa-lg'></i></td>
                        <td><i class='fas fa-trash fa-lg'></i></td>
                    </tr>
                    <tr>
                        <td>2</td>
                        <td class="nama">Non-Konsumsi</td>
                        <td><i class='fas fa-pen-square fa-lg'></i></td>
                        <td><i class='fas fa-trash fa-lg'></i></td>
                    </tr>
                    <tr>
                        <td>3</td>
                        <td class="nama">Makanan</td>
                        <td><i class='fas fa-pen-square fa-lg'></i></td>
                        <td><i class='fas fa-trash fa-lg'></i></td>
                    </tr>
                    <tr>
                        <td>4</td>
                        <td class="nama">Minuman</td>
                        <td><i class='fas fa-pen-square fa-lg'></i></td>
                        <td><i class='fas fa-trash fa-lg'></i></td>
                    </tr>
                    <tr>
                        <td>5</td>
                        <td class="nama">Alat Tulis</td>
                        <td><i class='fas fa-pen-square fa-lg'></i></td>
                        <td><i class='fas fa-trash fa-lg'></i></td>
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