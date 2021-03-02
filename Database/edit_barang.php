<?php
    include 'connector.php';

    if ($_POST["btnSubmit"] == "cancel") {
        header("location:../Layout/daftar_barang.php");
    } else {
        if($_SERVER['REQUEST_METHOD'] == "POST"){
            $id = $_POST['idEditKategori'];
            $nama = $_POST['namaEditKategori'];
        
            $query = "UPDATE daftar_kategori SET nama='$nama' WHERE id='$id'";
    
            $result = mysqli_query($connect, $query);

            if ($result) {
                header("location:../Layout/daftar_barang.php");
            } else {
                echo '<script type="text/javascript">'; 
                echo "alert('Gagal Ubah Kategori');";
                echo 'window.location.href = "../Layout/daftar_barang.php";';
                echo '</script>';
            }
    
        }
    }

    mysqli_close($connect);
?>