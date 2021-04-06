<?php
    $host = 'localhost';
    $dbname = 'telekom';
    $username = 'root';
    $password = '';

    try 
    {
        $conn = new PDO("mysql:host=$host;dbname=$dbname", $username, $password);
        echo "Connected at $dbname at $host successfully";
    }
    catch (PDOException $pe)
    {
        die("Could not connect to the database $dbname: " . $pe->getMessage());
    }
?>