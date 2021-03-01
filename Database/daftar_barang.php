<?php
    include "connector.php";

    $query = "SELECT * FROM daftar_barang";

    $result = mysqli_query($connect, $query);
?>