<?php

@include 'config.php';

session_start();
session_unset();
session_destroy();

header('location:https://crmbux.co.in/Trading');

?>