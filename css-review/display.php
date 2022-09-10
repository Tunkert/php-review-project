<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Display</title>
    <style>
        .three-columns {
            border: 1px solid #333;
            display: inline-block;
            height: 150px;
            width: 33%;
        }
        .block-image {
            display: block;
            width: 200px;
            height: 200px;
            border-radius: 50%;
            margin-left: auto;
            margin-right: auto;
        }
        .center {
            text-align: center;
        }
    </style>
</head>
<body>
<!--default display of div is block, whereas default of image is inline-->
<div class="three-columns"></div>
<div class="three-columns"></div>
<div class="three-columns"></div>
<img src="https://images.pexels.com/photos/2524164/pexels-photo-2524164.jpeg?auto=compress&cs=tinysrgb&dpr=2&h=650&w=940"
     alt="a cute kitty" class="block-image">
<?php echo "<p class='center'>A centered image</p>"; ?>
</body>
</html>