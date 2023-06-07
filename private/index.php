<?php
    if($_SERVER['REQUEST_METHOD'] === 'POST'){
        echo("Username or Password is wrong !");
    }
?>
<h1>Admin Panel</h1>
<form method="POST">
        <label for="username">Username:</label>
        <input id="username" type="text" placeholder="Username" name="username"><br>
        Password: <input type="password" id="password" placeholder="Password" name="password"><br>
        <input type="submit" value="Send">
</form>