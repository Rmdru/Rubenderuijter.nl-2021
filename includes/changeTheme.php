<?php
$theme = $_POST['theme'];

setcookie("theme", $theme, time() + (86400 * 366), "/", "rubenderuijter.nl", true, true);