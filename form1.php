<!doctype html>
<html lang="en">
<head>
    <style>
        form{
            padding-top: 20px;
            padding-bottom: 20px;
            padding-left: 20px;
            padding-right: 20px;
            background-color: darkgray;
        }
    </style>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Forms</title>
</head>
<body>
<form action="welcome.php" method="post">
    <label for="First Name">First Name</label><br>
    <input type="text" id="First Name" Name="John" ><br>
    <label for="Second Name">Second Name</label><br>
    <input type="text" id="Second Name" name="Wekesa"><br>
    <label for="Email">Email address</label><br>
    <input type="Email" id="Email" Name="Email"><br>
    <label for="Registration"> Registration Number</label><br>
    <input type="text" id="Registration" name="Electrical"><br>
    <input type="radio" name="gender" value="female">Female
    <input type="radio" name="gender" value="male">Male
    <input type="radio" name="gender" value="other"><Other<br>
    <input type="Submit" name="submit">

    
</form>
</body>
</html>