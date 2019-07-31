<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Login</title>
</head>
<body>
<?php echo validation_errors(); ?>
<h1>Login Parent</h1>
    <form action="/auth/parent/login" method='POST'>
        <input type="text" name='username'> <br>
        <input type="password" name="password"> <br>
        <input type="text" name="role" value="driver" hidden>
        <button type="submit">Register</button>
    </form>
</body>
</html>