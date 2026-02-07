<?php
require 'admin/koneksi.php';

$hash = password_hash("123456", PASSWORD_DEFAULT);
$pdo->prepare("UPDATE user SET password = ? WHERE username = ?")
    ->execute([$hash, 'admin']);

echo "Password berhasil di-hash.";
?>