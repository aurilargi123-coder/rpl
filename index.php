<?php
$namaAplikasi = 'tk24';
$waktu = date('d-m-Y H:i:s');
?>

<!doctype html>
<html lang="id">
<head>
    <meta charset="utf-8">
    <title><?= htmlspecialchars($namaAplikasi) ?></title>
    <link rel="stylesheet" href="css/style.css">
</head>

<body>
    <h1><?= htmlspecialchars($namaAplikasi) ?></h1>

    <p>rpl.</p>

    <p>
        Waktu server:
        <?= htmlspecialchars($waktu) ?>
    </p>
</body>
</html>