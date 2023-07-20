<!-- Calculate y(x),
if z < -1 x = -z/3
if z >= -1 x=|z| -->
<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>LAB_1_1</title>
    </head>
    <body>
		<a href = "/index.php">Main</a>		
		<form action="" method="POST">
			<p>Enter a value</p><br>
			<input type="text" name="z"><br>
			<input type="submit"><br>			
</form>
		<?php 
		if(!empty($_POST))
		{
           $z= $_POST['z'];
            $x;
			if ($z < -1)
            {
                $x = -$z/3;
                echo "-z/3\n";
            }
            elseif ($z >= -1)
            {
                $x = abs($z);
                echo "|z|\n";
            }
            try {
            $y = log($x+0.5)+(exp($x)-exp(-$x));
            echo $y;
            }
            catch (Throwable $ex) {echo "Incorrect values";}
		}
		?><br>		
    </body>
</html>