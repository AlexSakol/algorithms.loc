        <a href="/index.php">Main</a><br>
        <?php
        /*
        Calculate f,
        if x=-2.235, y=2.23, z=15.221  f=39.374.
        */
			$x = -2.235*pow(10,-2);
            $y = 2.23;
            $z = 15.221;
            const e = 2.71828182846;
            $numerator = pow(e, abs($x-$y))*pow(abs($x-$y),$x+$y);
            $denumerator = atan($x) + atan($z);           
            $expression = pow((pow($x,6)+pow(log($y),2)),1.0/3);
            if ($denumerator != 0)
            {
            $f = $numerator/$denumerator+$expression;
            echo $f; 
            }
            else
            {
                echo "Divizion by zero";
            }
            
		?>
 