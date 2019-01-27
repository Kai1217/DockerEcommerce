<?php

define("SERVER", "127.0.0.1");
define("USER", "root");
define("PWORD", "");
define("NAME", "ecommerce");

$conn = new mysqli(SERVER, USER, PWORD, NAME);

if ($conn->connect_error)
{
    die("Connection to the database has failed. " . $conn->connect_error);
}

?>