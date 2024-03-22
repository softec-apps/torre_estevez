<?php 
if (isset($_SESSION['usuario'])) {
    include 'login.php';
} else {
    include 'app.php';
}

