<?php
require 'php/function.php';
$makanan = query("SELECT * FROM makanan")
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Makanan</title>
</head>
<body>
    <div class="container">
    <?php foreach ($makanan as $mkn) : ?>
    <p clss="nama">
    <a href="php/detail.php?id=<?= $mkn['id'] ?>">
    <?= $mkn["nama"] ?>
        </a>
        </p>
        <?php endforech; ?>
    </div>
</body>
</html>