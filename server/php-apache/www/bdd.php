<?php


$mysqli = mysqli_connect("db", "root", "123456", "sakila");
if (mysqli_connect_errno()) {
    printf("Échec de la connexion : %s\n", mysqli_connect_error());
    exit();
}
echo 'Connect bdd => sakila => actor<br><br>';

if ($result = $mysqli->query("SELECT first_name, last_name, last_update FROM actor")) {
    while ($row = mysqli_fetch_row($result)) {
        printf ("%s %s [%s]<br>", $row[0], $row[1], $row[2]);
    }
}
?>