<?php
    ob_start();
    session_start();

    if (!isset($_SESSION['valid'])) {
        exit;
    }
?>