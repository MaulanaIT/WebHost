<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <?php include '../Js/bootstrap.php' ?>
    <?php include '../Js/jquery.php' ?>

    <link rel="stylesheet" href="../CSS/side_nav.css">
    <link rel="stylesheet" href="../CSS/edit_barang.css">

    <title>Edit Barang</title>
</head>

<body>
    <div class="page-wrapper chiller-theme toggled">
        <?php include 'side_nav.php' ?>

        <?php include 'header.php' ?>

        <main class="page-content">
            <div class="container-fluid">
                <i class="fas fa-boxes fa-2x" aria-hidden="true"></i>
                <span>EDIT BARANG</span>

                <table>
                    <td>
                        <form class="form-inline">
                            <div class="form-group">
                                <label>Nama Barang</label> <br>
                                <input type="text" class="form-control" id="inputNamaBarang">
                            </div>
                            <div class="form-group">
                                <label>Jenis Kategori Barang</label> <br>
                                <select class="form-control custom-select my-1 mr-sm-2" id="inputKategoriBarang">
                                    <option value="Konsumsi">Konsumsi</option>
                                    <option value="NonKonsumsi">Non-Konsumsi</option>
                                    <option value="Makanan">Makanan</option>
                                    <option value="Minuman">Minuman</option>
                                    <option value="AlatTulis">Alat Tulis</option>
                                </select>
                            </div>
                            <div class="form-group">
                                <label>Jumlah Barang</label> <br>
                                <input type="number" class="form-control" id="inputJumlahBarang">
                            </div>
                            <div class="form-group">
                                <label>Harga Pokok</label> <br>
                                <input type="number" class="form-control" id="inputHargaPokok">
                            </div>
                            <div class="form-group">
                                <label>Harga Jual</label> <br>
                                <input type="number" class="form-control" id="inputHargaJual">
                            </div>

                            <br>
                            <div style="float: right;">
                                <button class="btn btn-danger" style="background-color: #FF3A31;">Batal</button>
                                <button class="btn btn-primary" style="background-color: #0094FF;">Simpan</button>
                            </div>
                        </form>
                    </td>
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