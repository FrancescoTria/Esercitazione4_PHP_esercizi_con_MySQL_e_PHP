<?php

$conn = new mysqli("localhost", "root", "", "scuola");

if ($conn->connect_error) {
    die("Connessione fallita: " . $conn->connect_error);
}

$sql = "SELECT * FROM studenti";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    while ($row = $result->fetch_assoc()) { //spiegazione:
        echo "ID: " . $row["id"] . " - Nome: " . $row["nome"] . " - Cognome: " . $row["cognome"] . " Data di nascita: " . $row["data_nascita"] . " Email: " . $row["email"] . "<br>";
    }
} else {
    echo "0 risultati";
}
?>