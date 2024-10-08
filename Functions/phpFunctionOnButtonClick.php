<!DOCTYPE html>
<html lang="en">

<head>
    <title>Php function cal on button click</title>
</head>

<body>
    <form action="" method="post">
        <button name="btn" value="btn">Click Here</button>
    </form>
</body>

</html>

<?php

if (isset($_POST['btn'])) {
    callFunOnClick();
}
function callFunOnClick()
{
    echo "Function called on Button clicked.";
};




?>