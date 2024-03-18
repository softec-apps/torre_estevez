<?php 
//Si no existe session iniciada, renderiza el login
if (!isset($_SESSION['usuario'])) {
    include 'login.php';
} else {
    //Si existe session iniciada, renderiza el sistema
    include 'index.php';
}