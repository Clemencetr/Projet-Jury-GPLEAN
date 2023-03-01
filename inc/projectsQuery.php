<?php

require(__DIR__.'/db.php');


// Hémicycle
$hemicycleList = array();

$sql = '
    SELECT *
    FROM projects
    LIMIT 1,6
';

$stmt = $pdo->query($sql);

$hemicycleList = $stmt->fetchAll(PDO::FETCH_ASSOC);

// Grand Morillon
$morillonList = array();

$sql = '
    SELECT *
    FROM projects
    LIMIT 8,7
';

$stmt = $pdo->query($sql);

$morillonList = $stmt->fetchAll(PDO::FETCH_ASSOC);

// Lycée de Coubertin
$coubertinList = array();

$sql = '
    SELECT *
    FROM projects
    LIMIT 14,2
';

$stmt = $pdo->query($sql);

$coubertinList = $stmt->fetchAll(PDO::FETCH_ASSOC);

// Caserne Chanzy
$chanzyList = array();

$sql = '
    SELECT *
    FROM projects
    LIMIT 18,6
';

$stmt = $pdo->query($sql);

$chanzyList = $stmt->fetchAll(PDO::FETCH_ASSOC);

// Restaurant Drouant
$drouantList = array();

$sql = '
    SELECT *
    FROM projects
    LIMIT 25,7
';

$stmt = $pdo->query($sql);

$drouantList = $stmt->fetchAll(PDO::FETCH_ASSOC);

// Palatin II et III
$palatinList = array();

$sql = '
    SELECT *
    FROM projects
    LIMIT 34,5
';

$stmt = $pdo->query($sql);

$palatinList = $stmt->fetchAll(PDO::FETCH_ASSOC);