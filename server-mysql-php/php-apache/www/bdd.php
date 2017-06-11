<?php
$server   = "localhost";
$database = "sakila";
$username = "root";
$password = "123456";

$mysqli = new mysqli($server, $database, $username, $password);

/* Vérification de la connexion */
if (mysqli_connect_errno()) {
    printf("Échec de la connexion : %s\n", mysqli_connect_error());
    exit();
}

/* Retourne le nom de la base de données courante */
if ($result = $mysqli->query("SELECT DATABASE()")) {
    $row = $result->fetch_row();
    printf("La base de données courante est %s.\n", $row[0]);
    $result->close();
}

/* Change la base de données en "world" */
$mysqli->select_db("world");

/* Retourne le nom de la base de données courante */
if ($result = $mysqli->query("SELECT DATABASE()")) {
    $row = $result->fetch_row();
    printf("La base de données courante est %s.\n", $row[0]);
    $result->close();
}

$mysqli->close();

?>