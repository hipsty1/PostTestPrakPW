<?php
// HARUS di baris pertama sebelum ada echo/HTML
setcookie('nama', 'Bahlil', time() + 6); // berlaku 60 detik
echo "Cookie 'nama' telah dibuat. Silakan buka cek.php dalam 6 detik.";
?>
