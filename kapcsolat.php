<?php

$servername = 'localhost';
$username = 'root';
$password = '';
$dbname = 'konyvek';

$conn = new mysqli($servername, $username, $password, $dbname, 3307);

if ($conn -> connect_error) {
    die ('Nem sikerült a kapcsolódás! ' . $conn -> connect_error);
} else {
    // echo 'Sikerült a csatlakozás!';
}

$conn -> set_charset('utf8');
