<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <?php
        $N=71;
        $a = 0;
        for($i=1;$i<$N;$i++)
        {
            if($N%$i==0)
            {
                $a = $a + $i;
            }
        }  
        if($a == $N)
                {
                    echo ("La so HH");
                }
                else
                {
                    echo ("Khong phai la so HH");
                }
        ?>
    </body>
</html>
