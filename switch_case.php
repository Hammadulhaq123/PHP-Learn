<?php
	echo "Switch Case <br/>";

	$activeStatus = "online";

	switch ($activeStatus) {
		case 'online':
			echo "online";
			break;
		case 'offline':
			echo "offline";
			break;
		default:
			echo "disabled";
			break;
	}


	echo "<br/>";

	// This is the simple way to know how switch cases work:
	// But we are going to know more about switch cases:

	// using Switch case for an array:

	$activity = ["active", "inactive", "active"];


	foreach ($activity as $activity) {
		switch ($activity){
			case 'active':
				echo "Active,";
				break;
			case 'inactive':
				echo "Inactive,";
				break;
			default:
				break;
		}
	}


	// A common question which one is better if-else or switch case:
	#The answer is both have their own precedence but there is one difference between both that we need to know that is if else-if and else block keeps executing the conditional expression until it finally gets the condition true but switch case will only execute the condition once

	// Let's take a look at an example of both to know exactly what we are saying

	// Inorder to show you the difference we must need to create a function

	function x(){
		sleep(3);

		echo "Done <br/>";

		return 1;
	}

	// Now if we use this function as a condition in if else the function will run again and again:
	if(x() === 3 ){
		echo "3 <br/>";
	} elseif(x() === 2){
		echo "2 <br/>";
	} elseif(x() === 1){
		echo "1 <br/>";
	}

	// Now if we do the same thing in Switch case the function will only run once because it is only getting passed in the Switch:

	switch(x()){
		case 3:
			echo "3 <br/>";
			break;
		case 1:
			echo "1 <br/>";
			break;
		default:
			break;
	}
?>