<?php
$nim = $_GET['nim'] ?? 'Tidak tersedia';
?>
<!DOCTYPE html>
<html lang="id">
<head>
  <meta charset="UTF-8">
  <title>Profil Mahasiswa</title>
</head>
<body>
  <h1>Profil Mahasiswa</h1>
  <p>NIM: <?= htmlspecialchars($nim); ?></p>
</body>
</html>