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
			<input type="text" name="c"><br>
			<input type="text" name="k"><br>
			<input type="submit"><br>			
</form>
		<?php 
		if(!empty($_POST['c']) && !empty($_POST['k']))
		{
            if(preg_match("|^[\d]*[\.,]?[\d]*$|", $_POST['c']) && preg_match("|^[\d]*[\.,]?[\d]*$|", $_POST['k']))
            {
			$c= $_POST['c'];
			$k= $_POST['k'];
			$t2;
            if(abs($c+$k) > 2)
            {
                $t2 = pow(tan($c-2*$k),2);
                echo "|c + k| > 2 \r\n";
                echo $t2;
            } 
            elseif(abs($c+$k) > 0.5 & abs($c+$k)<=2)
            {
                $t2 = log(abs($c-2*$k)) - sin($c/2*$k);
                echo "0.5 < |c + k| <= 2 \r\n";
                echo $t2;
            }
            else 
            {
                echo "Can't find a solution";
            }			
	    	}
        }
		?><br>		
    </body>
</html>