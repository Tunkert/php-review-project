<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Border Radius</title>
    <style>
        .border-radius {
            border: 2px solid red;
            border-radius: 50%;
            width: 200px;
            height: 200px;
        }
        .border-dotted-radius {
            border: 10px dotted blue;
            border-radius: 50%;
            width: 200px;
            height: 200px;
        }
    </style>
</head>
<body>
<div class="border-radius"></div>
<br>
<?php echo "This is the border radius CSS property."; ?><br><br>
<img
    src="https://images.pexels.com/photos/2524164/pexels-photo-2524164.jpeg?auto=compress&cs=tinysrgb&dpr=2&h=650&w=940"
    alt="a cute kitty" class="border-dotted-radius"><br><br>
<?php echo "My name is Tim."; ?>
</body>
</html>