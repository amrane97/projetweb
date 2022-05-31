<?php

define('DB_SERVER', 'localhost');
define('DB_USERNAME', 'root');
define('DB_PASSWORD', 'pissou11');
define('DB_NAME', 'myproject');


$conn = mysqli_connect(DB_SERVER, DB_USERNAME, DB_PASSWORD, DB_NAME);


if ($conn === false) {
    die("ERREUR : could not connect " . mysqli_connect_error());
}
