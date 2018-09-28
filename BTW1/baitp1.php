
        <?php
        // put your code here
        $num= array(1,2,3,4);
        $i=0;
        $j=0;
        for(;$i>2||$j<2;)
        {
            $j=$i++ + ++$i;
            echo $num[$i];
            echo $num[$j];
        }
        ?>