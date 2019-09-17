<?php

$number = readline("Vul een getal in: ");

check($number);

function check($value) {
    if ($value % 2) {
        echo 'getal is oneven..';
    } 
    else {
        echo 'getal is even.';
    }
}