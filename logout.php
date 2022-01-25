<?php
session_start();
if (isset($_POST['logout'])) {
    session_destroy();
    //aadressi reas avatakse login.php fail
    header('Location: login.php');
    exit();
}