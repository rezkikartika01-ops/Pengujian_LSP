<?php
session_start();
include "admin/koneksi.php";

$username = trim($_POST['username']);
$password = trim($_POST['password']);

// Ambil data user + role
$stmt = mysqli_prepare($conn, "SELECT id_user, nama, username, password, email, foto, role FROM user WHERE username = ?");
mysqli_stmt_bind_param($stmt, "s", $username);
mysqli_stmt_execute($stmt);
$result = mysqli_stmt_get_result($stmt);
$data = mysqli_fetch_assoc($result);

if ($data) {
    if ($password === $data['password']) {
        // Login sukses
        $_SESSION['login']    = true;
        $_SESSION['id_user'] = $data['id_user'];
        $_SESSION['nama']    = $data['nama'];
        $_SESSION['username']= $data['username'];
        $_SESSION['email']   = $data['email'];
        $_SESSION['foto']    = $data['foto'];
        $_SESSION['role']    = $data['role'];

        // Filter redirect berdasarkan role
        if ($data['role'] === 'Admin') {
            header("Location: admin/index.php");
        } elseif ($data['role'] === 'User') {
            header("Location: user/index_user.php");
        } else {
            header("Location: index.php");
        }
        exit;
    } else {
        header("Location: login.php?error=password");
        exit;
    }
} else {
    header("Location: login.php?error=username");
    exit;
}
