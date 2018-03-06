<?php
$activePage = basename($_SERVER['PHP_SELF'], ".php");
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title></title>
    <link href="bootstrap/css/bootstrap.css" rel="stylesheet">
    <link href="bootstrap/css/bootstrap-theme.min.css" rel="stylesheet">
</head>
<body role="document">
<nav class="navbar navbar-inverse navbar-fixed-top">
    <div class="container">
        <div class="navbar-header">
            <a class="navbar-brand" href="index.php">WtfWeb</a>
        </div>
        <div id="navbar" class="navbar-collapse collapse">
            <ul class="nav navbar-nav">
                <li class="<?= ($activePage == 'index') ? 'active':''; ?>"><a href="index.php">Teletubbies</a></li>
                <li class="<?= ($activePage == 'kittens') ? 'active':''; ?>"><a href="kittens.php">Kittens</a></li>
                <li class="<?= ($activePage == 'ironmaiden') ? 'active':''; ?>"><a href="ironmaiden.php">Iron Maiden</a></li>
                <li class="<?= ($activePage == 'dogs') ? 'active':''; ?>"><a href="dogs.php">Doggy Dogs</a></li>
            </ul>
        </div>
    </div>
</nav>


