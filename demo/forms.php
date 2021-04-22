<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>form</title>
</head>
<?php 

// extracting the data from the form input
  if(isset($_POST['submit'])){
  
  // connecting the mysql to the php

  $connect = mysqli_connect('localhost', 'root', '', 'login') or die($connect);

// security from sql injection

$username = mysqli_real_escape_string( $connect,$_POST['username']) ;
$password = mysqli_real_escape_string( $connect,$_POST['password']) ;


// crypt() passwords

$hashed = '$2y$10$' ;

$salt = 'somecrazylongstringhehehe' ;

$hashed_salt = $hashed . $salt ;

$password= crypt($password,$hashed_salt) ;


    // inserting the form data to the database

    $query = " INSERT INTO users(Username,Password) VALUES('$username','$password') " ;

   //putting the connection and the quering together 
    $result = mysqli_query($connect,$query);

    

 

    if(!$result){

      die('fatal error').mysqli_error($connect);
    }


    echo '<h2>Welcome ' . $username . ' you  log in !</h2>' ;


//   // reading data from the database 

//   $read_it ='SELECT * FROM users' ;

//   $result2 = mysqli_query($connect,$read_it);

 

//  while ($row = mysqli_fetch_assoc($result2)){

  
//      print_r($row) ;

   
 }
   




?>
<!-- 
<form action='forms.php' method='post'>
    <input type="text" name = 'username'>
    <input type="password" name = 'password'>
     <input type='submit' name = 'submit'>
    
    </form> -->

     
</body>
</html>