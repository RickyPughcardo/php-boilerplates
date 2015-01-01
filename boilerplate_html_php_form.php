<html>
	<head>
		<title>Boilerplate Form</title>
	</head>
	<body>
		<form action="" method="post">
 			 Enter some text, cowboy:
  			<input name="text" type="text" maxlength="100" />
 			<input type="submit" value="Check it!">
		</form>
		<?php
		//self-referential 
  	       		if (isset($_POST["text"]) && !empty($_POST["text"]))
  		         echo "Voila! Like magic, you've submitted: ".$_POST["text"].".";
  		 	else echo " ";   
		?>
	</body>
</html>
