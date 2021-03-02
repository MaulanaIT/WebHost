<?php
    include "../Database/daftar_transaksi.php"
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <?php include '../Js/bootstrap.php'; ?>
    <?php include '../Js/jquery.php'; ?>

    <link rel="stylesheet" href="../CSS/side_nav.css">
    <link rel="stylesheet" href="../CSS/daftar_transaksi.css">

    <title>Daftar Transaksi</title>
</head>

<body>
    <div class="page-wrapper chiller-theme toggled">
        <?php include 'side_nav.php'; ?>

        <?php include 'header.php'; ?>

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
                    <?php
                        if ($resultTransaksi) {
                            while ($row = mysqli_fetch_array($resultTransaksi)) {
                                ?>
                                <tr>
                                    <td><?php echo $row["tanggal"] ?></td>
                                    <td><?php echo $row["admin"] ?></td>
                                    <td><?php echo $row["aktivitas"] ?></td>
                                    <td><?php echo $row["profit_defisit"] ?></td>
                                </tr>
                                <?php
                            }
                        }
                    ?>
                </table>

                <table style="float: right; border: none; width: 10%;">
                    <tr>
                        <td style="<?php if ($page <= 1) {echo "display: none;";}?> "><a href="daftar_transaksi.php?page=1">First</a></td>
                        <td style="<?php if ($page <= 1) {echo "display: none;";}?> "><a href="daftar_transaksi.php?page=<?php echo $page - 1 ?>">Prev</a></td>
                        <td style="<?php if ($page >= $totalPages) {echo "display: none;";}?> "><a href="daftar_transaksi.php?page=<?php echo $page + 1 ?>">Next</a></td>
                        <td style="<?php if ($page >= $totalPages) {echo "display: none;";}?> "><a href="daftar_transaksi.php?page=<?php echo $totalPages ?>">Last</a></td>
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