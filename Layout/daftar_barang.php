<?php
    include "../Database/daftar_barang.php";
?>

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
                <div class="form-popup" id="formHapus">
                    <form action="daftar_barang.php" class="form-container">
                        <label>Hapus Barang?</label> <br>

                        <div style="text-align: center;">
                            <button class="btn btn-danger btn-sm" style="background-color: #FF3A31;"
                                onclick="closeForm()">Tidak</button>
                            <button type="submit" class="btn btn-success btn-sm"
                                style="background-color: #4ED964;">Ya</button>
                        </div>
                    </form>
                </div>

                <i class="fas fa-boxes fa-2x" aria-hidden="true"></i>
                <span>DAFTAR BARANG</span>

                <button onclick="location.href='tambah_barang.php'" class="btn add-button">Tambah Barang</button>

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
                    <?php
                        if ($result) {
                            while ($row = mysqli_fetch_array($result)) {?>
                                <tr>
                                    <td><?php echo $row["id"]; ?></td>
                                    <td><?php echo $row["nama"]; ?></td>
                                    <td><?php echo $row["kategori"]; ?></td>
                                    <td><?php echo $row["jumlah"]; ?></td>
                                    <td><?php echo $row["harga_beli"]; ?></td>
                                    <td><?php echo $row["harga_jual"]; ?></td>
                                    <td style="width: 10%"><i onclick="location.href=" edit_barang.php""
                                            class="fas fa-pen-square fa-lg"></i></td>
                                    <td style="width: 10%"><i class="fas fa-trash fa-lg" onclick="openForm()"></i></td>
                                </tr>
                    <?php
                            }
                        }
                    ?>
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

function openForm() {
    document.getElementById("formHapus").style.display = "block";
}

function closeForm() {
    document.getElementById("formHapus").style.display = "none";
}
</script>

</html>