<?php

// Arrays and it's basic methods:


/* Normal Arrays */


#Defining an array:
$fruit = ["apple", "mango", "banana"];
#Another way of defining but it is the old and inconvenient way:
$name = array("Hammad", "Amna", "Fatima");

#Accessing the data of an array:
echo $fruit[0]; # Will print the value at the 0 index:
#We cannot access an element using negative index and also passing a index that does'nt exist will produce an error

#Accessing the whole array:
#We can access whole array by simply echoing out but a better way is to use print-r function that reduces the unwanted complex text:
echo "<br/>";
echo "<pre>";
print_r($name);
echo "</pre>";

#Updating an element of the array:
#We can simply update the element by targeting the index of the element:
$fruit[2] = "Cherry";
echo "$fruit[2]<br/>"; //Will print Cherry

#Adding a new element in the array:
#we can simple add an element in the array by just typing square brackets after the name:

$name[] = "Ebad";
echo "<br/>";
echo "<pre>";
print_r($name);
echo "</pre>";  //Will print an array with updated elements


#Adding multiple elements in the array an easy way:
#We can use array_push() function that takes an arrayreferencename and the elements that we want to add:
#It will update the array:

array_push($name, "Razia", "Farkhanda", "Jamil"); //We can add how many elements we want

#Counting an array element:
#We can count the lengtth of the array using count() function that comes with the PHP:

echo count($name);


/* Associative Array */

# Associative array's are just like an object in javascript we have multiple key and values in associative arrays:

$Programminglanguage = [
	"PHP" => "V-8.2",
	"Python" => "V-3.9"
];

#Printing out the whole array:
echo "<pre>";
print_r($Programminglanguage);
echo "</pre>";
echo "<br/>";

#Printing out each element using it's key:

echo $Programminglanguage["PHP"]; #Prints V-8.2


/* MultiDimensional Arrays */

#Multidimesnional array's are just simply arrays inside of arrays;

$programDet = [
	"PHP" => [
		"Creator" => "Hammad",
		"Year" => "2001",
		"Versions" => [
			["version" => "8.4.2" , "release" => "1995"],
		]
	],
	"Python" => [
		"Creator" => "Erdum",
		"Year" => "2001",
		"Versions" => [
			["version" => "3.4.2" , "release" => "2001"],
		],
	],
];

echo "<pre>";
print_r($programDet);
echo "</pre>";
echo "<br/>";


#Accessing element of a multidimensioanl array is quite simple:

echo $programDet["PHP"]["Versions"][0]["release"]; #Will print 1995

// Remember accesing something that does'nt exist will produce an error 

$check = [true => "a", 1 => "b", '1' => "c", 1.8 => "d"];
print_r($check); #Will just print d because remaining elements will be overwritten:


// shift() removes first element from array
// pop() removes last element
// array_key_exist() toknow the key exist:
// unset($array[0]) to remove the given index:




?>