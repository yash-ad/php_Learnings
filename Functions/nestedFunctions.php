<?php

//Nested Functions:-


function fruitFn(){
    echo "I'm a parent function </br>";
    function anApple(){
        echo "I'm a child function </br>";
        echo "An apple a day keeps doctor away!";
    }

    anApple();

}

fruitFn();








?>