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
        if (isset($_POST["post_code"], $_POST['rooms_number'], $_POST['living_area'], $_POST['pool']) && !empty($_POST['post_code']) && !empty($_POST['rooms_number']) && !empty($_POST["living_area"]) && !empty($_POST["pool"])) {

        /* Variable */
        $postcode = $_POST['post_code'];
        $rooms = $_POST['rooms_number'];
        $living = $_POST['living_area'];
        $pool = $_POST['pool'];
        
        // $type = $_POST['type']; !! Ajouter !empty dans la première condition
        // $area = $_POST['area'];
        // $bathrooms = $_POST['bathrooms_number'];
        // $parking = $_POST['parking'];

        // 1. Sanitisation
        filter_var($postcode, FILTER_VALIDATE_INT);
        filter_var($rooms, FILTER_VALIDATE_INT);
        filter_var($pool, FILTER_VALIDATE_BOOLEAN);
        filter_var($living, FILTER_VALIDATE_INT);
        // filter_var($type, FILTER_VALIDATE_BOOLEAN);

        // 2. Validation
        if (true ==== filter_var($postcode, FILTER_VALIDATE_INT)) {
            //execute
            } else {
            echo "Please enter a valid post code between 1000 and 9000."
            };

        if (true ==== filter_var($rooms, FILTER_VALIDATE_INT)) {
            //execute
            } else {
            echo "Please enter un number."
            };

        if (true ==== filter_var($living, FILTER_VALIDATE_INT)) {
            //execute
            } else {
            echo "Please enter a number in sqm."
            };

        if (true ==== filter_var($pool, FILTER_VALIDATE_BOOLEAN)) {
            //execute
            } else {
            echo "Please enter if there is a pool or not."
            };
        
        }
    
    ?>
    
</body>
</html>