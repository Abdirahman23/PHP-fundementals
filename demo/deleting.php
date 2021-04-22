<?php  include 'db.php ' ;




 if(isset($_POST['submit'])){
   
$username = $_POST['username'] ;
$password = $_POST['password'] ;
$id = $_POST['id'] ;

if($id ){
    
   echo $id ;
}

$connect = mysqli_connect('localhost' , 'root' , '' , 'login') ;



$query = " DELETE FROM  users  WHERE Id = '$id' ";


$result = mysqli_query($connect,$query) ;



 if(!$result ){

  die('fatal error'.mysqli_error($connect)) ;
 }

  
 }  

?>




<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>updating</title>
</head>
<body>
<form action='deleting.php' method='post' >
    <input type="text" name ='username'><br><br>
    <input type="password" name ='password'><br><br>
    <select  name='id'  >
       <?php 
       
       while($array=mysqli_fetch_assoc($result)){
      
        $id = $array['Id'] ;

        echo "<option value ='$id'>$id</option>";
}
           
       
       ?>
    </select><br><br>
     
    <input type='submit' name = 'submit'>
    </form>

</body>
</html>


