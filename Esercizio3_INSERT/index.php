<?php

$conn = new mysqli("localhost", "root", "", "scuola");

if ($conn->connect_error) {
    die("Connessione fallita: " . $conn->connect_error);
}

?>

<form action="index.php" method="post">
    <label for="nome">Nome:</label>
    <input type="text" name="nome" id="nome">
    <label for="cognome">Cognome:</label>
    <input type="text" name="cognome" id="cognome">
    <label for="data_nascita">Data di nascita:</label>
    <input type="date" name="data_nascita" id="data_nascita">
    <label for="email">Email:</label>
    <input type="email" name="email" id="email">
    <input type="submit" value="Inserisci">
</form>

<?php

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $nome = $_POST["nome"];
    $cognome = $_POST["cognome"];
    $data_nascita = $_POST["data_nascita"];
    $email = $_POST["email"];

    $sql = "INSERT INTO studenti (nome, cognome, data_nascita, email) VALUES ('$nome', '$cognome', '$data_nascita', '$email')"; //spiegazione:
    $conn->query($sql);
}

?>