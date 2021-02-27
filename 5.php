<?php
#ex5 write a script that removes any duplicates from an array.

###################### can't solve ######################
$nums = [10,30,60,'ahmed','ahmed',10];
$newNums = [0];
for($i = 1; $i <count($nums); $i++){
    if( $newNums == $nums[$i]){
         $newNums= $nums[$i];
    }
}
echo $newNums;
