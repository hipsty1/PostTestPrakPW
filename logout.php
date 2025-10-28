<?php
setcookie('username', '', time() - 5, '/');
header('Location: login.php');
exit;
?>
