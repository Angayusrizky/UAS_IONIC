<?php
    define('DB_NAME', 'dbs_mp');
    define('DB_USER', 'root');
    define('DB_PASSWORD', '');
    define('DB_HOST', 'localhost');

    $kon = mysqli_connect("localhost", "root", "", "dbs_mp") or die(mysqli_error());
?>
