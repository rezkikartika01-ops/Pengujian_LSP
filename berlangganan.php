<?php
include 'admin/koneksi.php';

if (isset($_POST['simpan'])) {
    $id_user  = $_POST['id_user'];
    $nama     = $_POST['nama'];
    $username = $_POST['username'];
    $password = $_POST['password']; // disimpan apa adanya
    $email    = $_POST['email'];
    $no_tlp   = $_POST['no_tlp'];
    $role     = $_POST['role'];
    $status     = $_POST['status'];

    $query = mysqli_query($conn, "INSERT INTO user 
        (id_user, nama, username, password, email, no_tlp, role, status) 
        VALUES 
        ('$id_user', '$nama', '$username', '$password', '$email', '$no_tlp', '$role', '$status')");

    if ($query) {
        echo "<script>alert('Anda telah selesai mendaftar layanan, silahkan menunggu verifikasi admin untuk masuk ke akun anda');window.location='index.php';</script>";
    } else {
        echo "<script>alert('Gagal menyimpan data ke database');</script>";
    }
}
?>
