<?php
    include "connector.php"

    if (isset($_POST)) {
        $id = $_POST["id"];

        $query = "DELETE FROM daftar_kategori WHERE id='$id'";

        $result = mysqli_query($connect, $query);

        if($result) {
            echo "<script type='text/javascript'>";
            echo "alert('Data Berhasil Dihapus')";
            echo "</script>";
        }
    }

    mysqli_close($connect);
?>