<?php
$link = mysqli_connect("db", "root", "secret", null);

if (!$link) {
    echo "Error: Unable to connect to MySQL." . PHP_EOL;
    echo "Debugging errno: " . mysqli_connect_errno() . PHP_EOL;
    echo "Debugging error: " . mysqli_connect_error() . PHP_EOL;
    exit;
}

echo "Success: A proper connection to MySQL was made! The docker database is great. <br><br> Gampangnya gini: Koneksi ke MySQL BERHASIL" . PHP_EOL;

mysqli_close($link);
