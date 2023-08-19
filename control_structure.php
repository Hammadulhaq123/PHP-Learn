<?php
	echo "Control Srtucture <br/>";

	// Control Structure or conditional statements are a topic that is covered in almost each and every programming language it allows us to execute a certain code when some condition is true:

	#In php the syntax to use control structure is:

	$marks = 90;

	if($marks >= 90){
		echo "A";
	} elseif($marks >= 80){
		echo "B";
	} elseif($marks >= 70){
		echo "C";
	} elseif($marks >= 60){
		echo "D";
	} else{
		echo "F";
	}

?>

<html lang="en">

<head>
	<title>PHP Control Structure</title>
</head>
<body>
	<!-- // This code will work completely fine but when we are working with html we don't want to write this sort of nested if and else statements so inorder to avoid this in html we have got another way to render this in html: -->

	<?php $score = 30; ?>

	<?php if($score >=80): ?>
		<strong>You Win</strong>

	<?php elseif($score >=50): ?>
		<h2 style="color:'red';">You just got safe</h2>

	<?php else: ?>
		<h3>You failed the game</h3>

	<?php endif ?>
	
</body>

</html>