<?php
session_start();
require_once "./floor.controller.php";
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Floor</title>
</head>
<body>
    <?php foreach($floorList as $room): ?>
    <button><?= $room['number'] ?></button>
    <?php endforeach; ?>
</body>
</html>