<?php
    $bdd = new PDO('mysql:host=localhost:3307;dbname=backyard',
    'root','',
    [PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION]);
?>