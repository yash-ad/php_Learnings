<!DOCTYPE html>
<html lang="en">

<head>
    <title>Cookies with input fields</title>
</head>

<body>
    <form method="post" action="">
        <input type="text" name="user" placeholder="Enter user name">
        <br><br />
        <button name="button" value="set">Set Cookie</button>
        <br><br />

        <button name="button" value="display">Display Cookie</button>
        <br><br />

        <button name="button" value="delete">Delete Cookie</button>
        <br><br />
    </form>
</body>

</html>

<?php
if(isset($_POST["button"])){
if($_POST["button"] == 'set'){

        $val = $_POST['user'];
        setcookie('user', $val);
        echo "Cookie is set";
}
 elseif ($_POST["button"] == 'display') {
if(isset($_COOKIE['user'])){
            echo "User is :".$_COOKIE['user'];
}
    }
  elseif($_POST['button'] == 'delete'){
    if(isset($_COOKIE['user'])){
            setcookie('user', null, -1);
    }
}
}
;
?>