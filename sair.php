<?php

session_start();
session_destroy();

echo "<script>alert('Sess�o finalizada '); location.replace('index.php');</script>";


?>