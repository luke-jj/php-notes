<?php
try {
    $hostaddress = "localhost";
    $port = 8889;
    $databasename = "database";
    $username = "root";
    $password = "root";

    # Connection string for a mysql database
    $db = new PDO(
        "mysql:host=$hostaddress;dbname=$databasename;port=$port",
        "$username",
        "$password"
    );

    # Connection string for a sqlite based database
    $db = new PDO("sqlite:".__DIR__."/database.db");

    $db->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
} catch (Exception $e) {
    echo "Unable to connect to the database.\n";
    echo $e->getMessage();
    exit;
}

echo "Connected to the database.\n";
