<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home Dealer</title>
    <!--Boostrap-->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
    <!--CSS File-->
    <link rel="stylesheet" href="./style.css">
</head>
<body>

<?php
        if (!empty($_POST['post_code']) && !empty($_POST['rooms_number']) && !empty($_POST['garden']) && !empty($_POST["area"]) && !empty($_POST["living_area"]) && !empty($_POST["bathrooms_number"]) && !empty($_POST["parking"]) && !empty($_POST["pool"]) && !empty($_POST["type"])) {

        /* Variable */
        $postcode = $_POST['post_code'];
        $rooms = $_POST['rooms_number'];
        $garden = $_POST['garden'];
        $area = $_POST['area'];
        $living = $_POST['living_area'];
        $bathrooms = $_POST['bathrooms_number'];
        $parking = $_POST['parking'];
        $pool = $_POST['pool'];
        $type = $_POST['type'];
        }
    
    ?>
    
</body>
</html>