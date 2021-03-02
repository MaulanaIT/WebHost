<?php
    include "connector.php";

    if (isset($_GET["page"])) { $page  = $_GET["page"]; } else { $page=1; };

    $offset = 5;

    $start_from = ($page-1) * $offset;

    $query = "SELECT * FROM daftar_kategori ORDER BY id ASC LIMIT $start_from, $offset";
    $queryTotal = "SELECT * FROM daftar_kategori";

    $resultKategori = mysqli_query($connect, $query);

    $resultJumlahKategori = mysqli_num_rows(mysqli_query($connect, $queryTotal));

    $totalPages = ceil($resultJumlahKategori / 5);
?>