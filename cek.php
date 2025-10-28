<?php
if (isset($_COOKIE['nama'])) {
    echo "Cookie telah disimpan. Nama: " . $_COOKIE['nama'];
} else {
    echo "Cookie belum tersedia (mungkin sudah kadaluarsa).";
}
?>
