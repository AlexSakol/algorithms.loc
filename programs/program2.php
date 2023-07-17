        <a href="/index.php">Main</a><br>
        <?php
			$x = -2.235*pow(10,-2);
            $y = 2.23;
            $z = 15.221;
            const e = 2.71828182846;
            $chislitel = pow(e, abs($x-$y))*pow(abs($x-$y),$x+$y);
            $znamenatel = atan($x) + atan($z);           
            $expression = pow((pow($x,6)+pow(log($y),2)),1.0/3);
            if ($znamenatel != 0)
            {
            $f = $chislitel/$znamenatel+$expression;
            echo $f; 
            }
            else
            {
                echo "Divizion by zero";
            }
            
		?>
 