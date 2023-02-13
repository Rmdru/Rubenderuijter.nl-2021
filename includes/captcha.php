<?php
$charsArray = array_merge(range('a', 'z'), range('A', 'Z'), range('0', '9'));

for ($i = 0; $i < 5; $i++) {
  $randomChar = array_rand($charsArray);
  if ($i != 0) {
    $captchaCode .= $charsArray[$randomChar];
  } else {
    $captchaCode = $charsArray[$randomChar];
  }
}

$_SESSION['captcha'] = $captchaCode;
