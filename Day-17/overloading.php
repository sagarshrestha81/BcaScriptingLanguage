<?php

class Overloading
{
    function __call($method, $args)
    {
        if ($method == "sum") {
            $count = count($args);
             $total=0;
            switch ($count) {

                case 2:
                   
                    // foreach($args as $arg){
                        
                    // }
                    echo $args[0] + $args[1];
                    break;
                case 4:
                    echo $args[0] + $args[1] + $args[2] + $args[3];
                    break;
                case 6:
                    echo $args[0] + $args[1] + $args[2] + $args[3] + $args[4] + $args[5];
                    break;


            }


        }



    }

}
$obj = new Overloading();
echo $obj->sum(9, 2);
echo "<br/>";
echo $obj->sum(9, 2, 3, 23, 54, 2);
echo "<br/>";
echo $obj->sum(9, 2, 3, 6);