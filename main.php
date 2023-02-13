<?php
ob_start();

if (session_status() === PHP_SESSION_NONE) {
    session_start();
}

//calculate age
$age = date_diff(date_create('2003-02-19'), date_create('today'))->y;