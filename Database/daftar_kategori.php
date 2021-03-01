<?php
    include "connector.php";

    $query = "SELECT * FROM daftar_kategori";

    $result = mysqli_query($connect, $query);
?>