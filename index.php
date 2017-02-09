<!DOCTYPE HTML>
<?php
    session_start();
        $username = "true";
        $passwrd = "password";
    if (isset($_seeisn['logged_in']) && $_seesin['logged_in'] == true) {
    header("location: success.php");    
    }
    if (isset($_post['username']) && isset($_post['password'])){
        if ($_post['username'] == $username && $_post['password'] == $password){
            $_session['logged_in']=true;
            header("locatin:success.php");
        }
    }
?>
<html>
    <body>
        <form method="post" action="index.php">
            username:<br/>
            <input type="text" name="username"><br/>
            password<br/>
            <input type="password" name="password"><br/>
            <input type="submit" value="login">
        </form>
    </body>
</html>