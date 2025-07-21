<?php

$conn = new mysqli("localhost", "root", "", "scuola");

if ($conn->connect_error) {
    die("Connessione fallita: " . $conn->connect_error);
}

echo "Connessione stabilita con successo";

?>