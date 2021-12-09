<?php
    $id = $_POST['id'];
    $pw = $_POST['password'];
    echo $id.','.$pw;
    $file = './test.txt';
    file_put_contents($file, $id.$pw);
?>