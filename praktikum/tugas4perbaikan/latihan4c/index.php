<?php
    require 'php/functions.php';
    $buku = query("SELECT * FROM buku")
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Buku</title>
    <link rel="stylesheet" href="css/style.css">
</head>
<body>
		<?php foreach ($buku as $buku) : ?>
                <p class="nama">
                    <a href="php/detail.php?id=<?= $buku['id'] ?>">
                        <?= $buku["judul"] ?>
                    </a>
                </p>
        <?php endforeach; ?>

    </table>
</body>