<?php
    session_start();
    if (!isset($_session['loggedin'] || $_session['loggedin'] == false) {
        hear("location: index.php");
    }
?>
<h2>You are successful to login!</h2>