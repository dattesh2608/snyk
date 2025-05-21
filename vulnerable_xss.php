<?php
// vulnerable_xss.php

$name = $_GET['name'];  // user input without sanitization

echo "Hello, " . $name;  // vulnerable to XSS if name contains HTML/JS
?>
