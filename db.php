<?php
$conn = mysqli_connect('localhost', 'root', 'root', 'loginsystem');

if(!$conn){
    die('Please Check Your Connection' .mysqli_error($conn));
}
?>