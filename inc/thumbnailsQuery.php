<?php

require(__DIR__.'/db.php');

$thumbnailList = array();

$sql = '
    SELECT *
    FROM thumbnails
';

$stmt = $pdo->query($sql);

$thumbnailList = $stmt->fetchAll(PDO::FETCH_ASSOC);