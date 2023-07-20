<!--Calculate z1 and z2,
values z1 and z2 must be equal -->
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
		if(!empty($_POST))
		{
			$x= $_POST['x'];
			$y= $_POST['y'];
			try
			{
			$z1 = pow(cos($x),4)+pow(sin($y),2)+(1.0/4*pow(sin(2*$x),2))-1;
			$z2 = sin($y+$x)*sin($y-$x);
			echo "z1 = $z1 z2 = $z2";
			}
			catch (Throwable $ex) {}
		}
		?><br>		
    </body>
</html>