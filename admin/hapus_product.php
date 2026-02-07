<?php
include 'koneksi.php';

if (isset($_GET['id'])) {
    $id_product = $_GET['id'];

    // Ambil foto terlebih dahulu
    $result = mysqli_query($conn, "SELECT foto FROM product WHERE id_product='$id_product'");
    $data = mysqli_fetch_assoc($result);

    if ($data) {
        $foto = $data['foto'];

        // Hapus file foto jika ada
        if (!empty($foto) && file_exists("uploads/" . $foto)) {
            unlink("uploads/" . $foto);
        }

        // Hapus data dari database
        $delete = mysqli_query($conn, "DELETE FROM product WHERE id_product='$id_product'");

        if ($delete) {
            echo "<script>alert('Data berhasil dihapus');window.location='product.php';</script>";
        } else {
            echo "<script>alert('Gagal menghapus data');window.location='product.php';</script>";
        }
    } else {
        echo "<script>alert('Data tidak ditemukan');window.location='product.php';</script>";
    }
} else {
    echo "<script>alert('ID tidak valid');window.location='product.php';</script>";
}
?>
