<?php
$n = 'футболист';

for ($i=1;$i<100;$i++){

    switch ($i){


        case ($i > 4 and $i<20):
            echo $i.$n.'ов'.'<br>';
        break;

        case ( ($i>20 and ($i % 10 == 2 or $i % 10 == 3 or $i % 10 == 4)) or $i == 2 or $i == 3 or $i == 4 ):
            echo $i.$n.'а'.'<br>';
        break;
        case ($i % 10 == 1):
            echo $i.$n.'<br>';
            break;

        default:
            echo $i.$n.'ов'.'<br>';

    }
}