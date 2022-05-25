<?php
function getName(){
    return "Hello World";
}
function recursion($a){
    if($a <= 20){
        echo "$a\n";
        recursion($a+1);
    }
}
?>