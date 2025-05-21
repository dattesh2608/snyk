<?php
// vulnerable_xss.php

$name = $_GET['name'];  // user input without sanitization

echo "Hello, " . htmlentities($name, ENT_QUOTES, 'UTF-8');  // vulnerable to XSS if name contains HTML/JS
?>
