<?php
session_start();
if ($_SESSION['x'] == 1) {
    $_SESSION['x'] = 0;
    header("Location: login.html");
}