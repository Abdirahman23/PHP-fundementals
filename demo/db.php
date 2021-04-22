<?php 

$connect = mysqli_connect('localhost', 'root', '', 'login');

$query = "SELECT * FROM users " ;

$result = mysqli_query($connect,$query) ;


?>