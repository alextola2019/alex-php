<?php
session_start();
if ($_SESSION['x'] == 1) {
    $_SESSION['x'] = 0;
    header("Location: login2.html");
}
if ($_SESSION['p'] == 1) {
    $_SESSION['p'] = 0;
    header("Location: login2.html");
}