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
<<<<<<< HEAD

phpinfo();
die();
        if (isset($_POST["post_code"], $_POST['rooms_number'], $_POST['living_area'], $_POST['pool']) && !empty($_POST['post_code']) && !empty($_POST['rooms_number']) && !empty($_POST["living_area"]) && !empty($_POST["pool"])) {

        /* Variable */
        $postcode = $_POST['post_code'];
        $rooms = $_POST['rooms_number'];
        $living = $_POST['living_area'];
        $pool = $_POST['pool'];
=======
        if (isset($_POST["postal_code"], $_POST['house_m2']) ) {
            echo 'bonjour';

        /*variables à ajouter
        *$_POST['rooms_number'], $_POST['pool']
        *!empty($_POST['rooms_number']) && !empty($_POST["pool"])


        /* Variable */
        $postcode = intval($_POST['postal_code']);
        // $rooms = $_POST['rooms_number'];
        $living = intval($_POST['house_m2']);
        // $pool = $_POST['pool'];
>>>>>>> main
        
        // $type = $_POST['type']; !! Ajouter !empty dans la première condition
        // $area = $_POST['area'];
        // $bathrooms = $_POST['bathrooms_number'];
        // $parking = $_POST['parking'];

        // 1. Sanitisation
<<<<<<< HEAD
        filter_var($postcode, FILTER_VALIDATE_INT);
        filter_var($rooms, FILTER_VALIDATE_INT);
        filter_var($pool, FILTER_VALIDATE_BOOLEAN);
        filter_var($living, FILTER_VALIDATE_INT);
        // filter_var($type, FILTER_VALIDATE_BOOLEAN);

        // 2. Validation
        if (true === filter_var($postcode, FILTER_VALIDATE_INT)) {
            //execute
=======
        // filter_var($postcode, FILTER_VALIDATE_INT);
        // filter_var($rooms, FILTER_VALIDATE_INT);
        // filter_var($pool, FILTER_VALIDATE_BOOLEAN);
        // filter_var($living, FILTER_VALIDATE_INT);
        // filter_var($type, FILTER_VALIDATE_BOOLEAN);

        // 2. Validation
        if (filter_var($postcode, FILTER_VALIDATE_INT)) {
            echo ($postcode);
>>>>>>> main
            } else {
            echo "Please enter a valid post code between 1000 and 9000.";
            }

<<<<<<< HEAD
        if (true === filter_var($rooms, FILTER_VALIDATE_INT)) {
            //execute
            } else {
            echo "Please enter un number.";
            }

        if (true === filter_var($living, FILTER_VALIDATE_INT)) {
            //execute
=======
        // if (true === filter_var($rooms, FILTER_VALIDATE_INT)) {
        //     //execute
        //     } else {
        //     echo "Please enter un number.";
        //     }

        if (filter_var($living, FILTER_VALIDATE_INT)) {
            echo ($living);
>>>>>>> main
            } else {
            echo "Please enter a number in sqm.";
            }

<<<<<<< HEAD
        if (true === filter_var($pool, FILTER_VALIDATE_BOOLEAN)) {
            //execute
            } else {
            echo "Please enter if there is a pool or not.";
            }
        
        }
=======
        // if (true === filter_var($pool, FILTER_VALIDATE_BOOLEAN)) {
        //     //execute
        //     } else {
        //     echo "Please enter if there is a pool or not."
        //     }
        
        }

        $curl = curl_init('https://api.wallonia.ml/v1/price');
        curl_setopt_array($curl, [
            CURLOPT_CAINFO => __DIR__ . '/certificat/cert.cer',
            CURLOPT_RETURNTRANSFER => true,
            CURLOPT_TIMEOUT => 5
        ]);

        $data = curl_exec($curl);
            if($data === false) {
                var_dump(curl_error($curl));
            }else{
                if(curl_getinfo($curl, CURLINFO_HTTP_CODE) === 200) {
                    $data = json_decode($data, true);
                    echo 'The estimated price is ' . $data . '.';
                }
            }
        curl_close($curl);

        // if(curl) {
        //     curl_easy_setopt(curl, CURLOPT_URL, "https://example.com/%22);
        //     curl_easy_setopt(curl, CURLOPT_CAINFO, "/etc/certs/cabundle.pem");
        //     ret = curl_easy_perform(curl);
        //     curl_easy_cleanup(curl);
>>>>>>> main
    
    ?>
    
</body>
</html>