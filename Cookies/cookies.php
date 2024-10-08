<?php

setcookie('fruit', 'Apple', time() + (86400));


if(isset($_COOKIE['fruit'])){
    echo "Current cookie available on the browser is ". $_COOKIE['fruit'];
}
else{
    echo "Cookie is not available on the browser.";
}


setcookie('Color', 'Red', time() + (86400));

if(isset($_COOKIE['Color'])){
    echo "Current cookie available on the browser is " . $_COOKIE['Color'];
} else {
    echo "Cookie is not available on the browser.";
}

?>