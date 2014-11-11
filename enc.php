<?php

$a = 'admin';
$salt = 'anc';
$a = $a + $salt;
echo base64_encode($a);


?>