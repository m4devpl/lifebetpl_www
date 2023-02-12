<?php
    session_start();

    echo $_SESSION['e'];

    unset($_SESSION['e']);
?>