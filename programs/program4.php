<!--Find max(min(x-y,y-x),0) -->
<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>LAB_1_1</title>
    </head>
    <body>
		<a href = "/index.php">Main</a>		
		<form action="" method="post">
			<p>Enter a value</p><br>
			<input type="text" name="x"><br>
			<input type="text" name="y"><br>
			<input type="submit"><br>			
</form>
		<?php 
		if(!empty($_POST["x"]) && !empty($_POST["y"]))
		{
            if(preg_match("|^[\d]*[\.,]?[\d]*$|", $_POST['x']) && preg_match("|^[\d]*[\.,]?[\d]*$|", $_POST['y']))
            {
			$x= $_POST['x'];
			$y= $_POST['y'];
			$v = max(min($x-$y, $y-$x),0); 
			echo $v;
	    	}
        }
		?><br>		
    </body>
</html>