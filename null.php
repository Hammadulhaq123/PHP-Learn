<?php
 echo "This is Null data type<br/>";

 #null is an empty datatype in php:
 #null is a constant datatype 
 #by echoing out null we'll get nothing

 $x = null;
 $y = NULL;
 # It is case insensitive as well:

 echo $y; // It will print nothing on the screen

 #To print null we have to pass the variable in var_dump function
 var_dump($y); //Prints NULL

 #Inorder to check if itis actually null we have to do:
 var_dump(is_null($y)); //Prints true if the variable is null;
 #another way to check if a variable is null is using comparison operator:
 var_dump($x === null);


 // An undefined variable is always null
 $z;
 var_dump($z); //Prints null

 // WE can unset a variable that was defined earlier to make it null
 // If we type cast a null into bool it will print false if we typecast into string it will be an empty string if we typecast into an int it will convert to a "0" and if we type cast it into an array it will convert the null into an empty array

?>