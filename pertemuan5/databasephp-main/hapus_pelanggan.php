<?php

include 'dbkoneksi.php';

$id = $_GET['iddel'];
$conn = mysqli_connect("localhost", "root", "", "dbpos");

mysqli_query($conn, "DELETE FROM pelanggan WHERE id = $id");

echo "
        <script>
            alert('Berhasil Hapus Data');
            window.location.href='list_pelanggan.php';
        </script>
    ";