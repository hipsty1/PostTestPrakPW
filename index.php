<?php
if (!isset($_COOKIE['username'])) {
    header('Location: login.php');
    exit;
}

$user = htmlspecialchars($_COOKIE['username']);
?>
<!doctype html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>Dashboard</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body class="bg-light p-5">
  <div class="container text-center mt-5">
    <div class="card shadow p-5">
      <h2>Selamat datang, <?= $user ?></h2>
      <p>Kamu berhasil login menggunakan cookie PHP.</p>
      <a href="logout.php" class="btn btn-danger mt-3">Logout</a>
    </div>
  </div>
</body>
</html>
