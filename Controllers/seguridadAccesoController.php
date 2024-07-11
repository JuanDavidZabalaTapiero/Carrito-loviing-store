<?php

session_start();

if (!$_SESSION["aut"]) {
    session_destroy();

    header('location: ../../index.php');
}