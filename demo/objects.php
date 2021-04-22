<?php

class Player{

   
  var $position = 'stricker' ;

  var $jersey = 11 ;

  function  __construct(){
 // constructors are defualt values that will be applied    

    echo '<h2>Can Dribble pass 10 players</h2>' ;

  }
}


$abdirahman = new Player ;



echo $abdirahman->position . '<br>' ;

// you can assign it letter even when diplaying

echo $abdirahman->jersey = 10 . '<br>' ;


// inheritance

class Coach extends Player{

    var $can_manage = 'true' . '<br>' ;
}

$zidane = new coach ;

echo $zidane-> can_manage ;
// they inherit the properties and methods class it extends
echo $zidane->jersey ;








?>