<?php

include "db.php";

session_start();
unset($_SESSION['id']);
unset($_SESSION['name']);

session_destroy();
echo "<script>window.open('index.php','_self')</Script>";



?>