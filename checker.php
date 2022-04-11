<?php 
function checker($value)
{
    $value=trim($value);
    $value=htmlspecialchars($value);
    $value=stripslashes($value);
    return $value;
}
?>