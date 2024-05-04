
<?php

function validate_input($data)
{
    // Sanitize Input
    $data = trim($data);
    $data = ltrim($data);
    $data = Rtrim($data);
    $data = stripslashes($data);
    $data = htmlspecialchars($data);
    return $data;
}
?>