<?php
session_start();
session_destroy();
unset($_SESSION['Lanche']);
header("Location: ../index.php");
