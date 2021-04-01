<!-- When this module is open, the cookie is set/saved automatically (in another case, user will modify a setting and it will be an true cookie) -->
<?php
// This cookie lasts 60 seg * 60 min * 24 hours * 365 days (1 year) Note: TO DELETE COOKIE JUST CHANGE '+' TO '-' in cookie duration,
// then set the path where will be available this cookie ( in this case is available in all domain)
setcookie('font-size', '60px', time() + 60 * 60 * 24 * 365, '/'); // Normally, the value (30px) is setted by the user, not manually

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cookies</title>
</head>

<body>
    <h1>A cookie has been set! now go to <a href="/phpCourse/cookies/text.php"> this link!</a> </h1>
</body>

</html>