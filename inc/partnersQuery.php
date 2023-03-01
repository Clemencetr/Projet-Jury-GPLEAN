<?php

require(__DIR__.'/db.php');

$partnerList = array();

$sql = '
    SELECT *
    FROM partners
';

$stmt = $pdo->query($sql);

$partnerList = $stmt->fetchAll(PDO::FETCH_ASSOC);