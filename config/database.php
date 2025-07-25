<?php

try {

    $host_local =  "localhost";
    $dbname_local = "sys842";
    $username_local = "root";
    $password_local = "blackhunter";

    $db = new PDO('mysql:host=' . $host_local . ';dbname=' . $dbname_local . ';charset=utf8;', $username_local, $password_local, [
        PDO::ATTR_PERSISTENT => false,
    ]);

    $db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
	
} catch (PDOException $erreur) {
    logError(__FILE__, $erreur->getMessage());
}