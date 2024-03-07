<?php

// global variable
$my_global = "global";

function myfunc() {
    $my_local = "local";
    global $my_global;
    echo $my_global;
}

echo $my_local;

myfunc();
echo "my global variable $my_global";