<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php 
// //variables 
//  $name = '<h1>abdirahman saed</h1>' ;

// // arrays
// $numberList = array(267,8765,345,'5345', 345, '<h1>Hello</h1>');
// $wordList = ['abdirahman','saed','abdilahi'] ;

// // associative array with the older
// $names = array("first_name" => 'Edwin', "Last_Name" => 'Diaz' );

// //print_r($numberList);

//  echo $numberList[0];

//  echo '<br>' ;
//  echo '<br>' ;

//  echo $wordList[0] ;

//  echo '<br>' ;

//  echo  $names['first_name'] . ' ' . $names['Last_Name'] ;

 
//  echo '<br>' ;

//  // consitional statements

//  // if statements
// if(3 < 10){

//     echo "three is less than ten";
    
//     } elseif( 4 > 5) {
    
//     echo "of course four is less than five";
    
//     }
    
//     else {
    
//     echo "it is not";
    
//     }

// echo '<br>' ;
// // switch statements

// $numBer = 100;

// switch($numBer){

//     case 34:
//     echo "it is 34";
//     break;
//     case 37:
//     echo "is it 34";
//     break;
//     case 35:
//     echo "is it 34";
//      break;
//     case 24:
//     echo "is it 24";
//       break;
    
//     default : 
//      echo "we could not find anything";
//     break;
// }

// echo '<br>' ;


// //Loops 
// $counter = 0;

// while($counter <= 10 ){

//     echo $counter;
//     $counter++;
// //    $counter = $counter + 1;

// }
// echo '<br>' ;

// // for loop 

// for($counter2 = 0; $counter2 <= 10; $counter2++){

//     echo $counter2."<br>" ;

// }

// echo '<br>';

// // foreach loop for arrays
// $digs = array(5,6,7,8,9,10);
    
// foreach($digs as $dig){

// echo $dig * 2 . "<br>";

// }  

// echo '<br>';


// // functions 

// function Multply($num1,$num2){
    
//     return $num1 * $num2 ;
// }

// Multply(4,5);

// echo '<br>';

// // scope 

// $x = 'outside' ;

// function check (){
// global $x;
//  $x = 'inside' . '<br>' ;
   
// }

// echo $x;

// echo "<br>";
// echo $x;
// check();
// echo $x;

// echo "<br>";

// // constant variables

// $num = 20 ;

// $num = 10 ;

// define('NAME',500) ;
// define('name',100) ;


// echo NAME;

// echo name . '<br>';



// // Math built in functions

// echo round(4.5) ;

// echo pow(2,7);

// echo "<br>";

// echo rand(1, 1000);

// echo "<br>";

// echo sqrt(100);

// echo "<br>";

// echo ceil(4.6);

// echo "<br>";

// echo floor(4.6);

// echo "<br>";

// echo round(4.5);


// echo "<br>";
// echo "<br>";


// // string built in functions

// $string = 'hey what are you doing man !' ;

// echo strlen($string) ;
// echo "<br>";

// echo strtoupper($string );
// echo "<br>";

// echo strtolower($string );
// echo "<br>";
// echo "<br>";
// // Array built in function 

// $list = [343,34,323,23,54,232,453];

// print_r($list) ;
// echo "<br>";

// echo max($list);
// echo "<br>";


// echo min($list);




//     ?>

    <!-- <h2><?php  echo   $names['first_name'] . ' ' . $names['Last_Name'] ; ?></h2> -->

    <body>
   <form action='forms.php' method='post' >
    <input type="text" name = 'username'><br><br>
    <input type="password" name = 'password'><br><br>
     <input type='submit' name = 'submit'>
    
    </form>

</body>
</html>