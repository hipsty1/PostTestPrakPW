<?php
$username = $_POST['username'] ?? '';
$password = $_POST['password'] ?? '';

if ($username === 'admin' && $password === '12345') {
    setcookie('username', $username, time() + 7, '/');
    header('Location: index.php');
    exit;
} else {
    echo "<script>
            alert('Username atau password salah!');
            window.location.href='login.php';
          </script>";
    exit;
}
?>
