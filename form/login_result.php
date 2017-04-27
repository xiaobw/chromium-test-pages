<!DOCTYPE html>
<html>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width,minimum-scale=1.0,maximum-scale=1.0,user-scalable=no">
<body>

<p>Form data:</p>
<?php
function output($text) {
    echo '<p>' . $text . '</p>';
    echo '<script>console.log("' . $text . '")</script>';
}


$username=$_POST['username'] ? $_POST['username'] : '[empty]';
$password=$_POST['password'] ? $_POST['password'] : '[empty]';
output('User name: ' . $username);
output('Password: ' . $password);
output('User Agent: ' . $_SERVER['HTTP_USER_AGENT']);
?>
<p>
<a href="login.html">Back to login page</a>
</p>
<p>
<a href="another-page-with-password.html">Try another login page</a>
</p>
</body>
</html>
