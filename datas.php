<?php
    $result =[];

    if (isset($_POST["property_type"], $_POST['facades_number'], $_POST['land_m2'], $_POST['house_m2'], $_POST['bedrooms_number'], $_POST['garden'], $_POST['terrace'], $_POST['open_fire'], $_POST['postal_code'], $_POST['province'], $_POST['region'] ) ) {
   
   /* Variable */
   $property_type = strval($_POST['property_type']);
   $facades = intval($_POST['facades_number']);
   $area = intval($_POST['land_m2']);
   $living = intval($_POST['house_m2']);
   $bedrooms = intval($_POST['bedrooms_number']);
   $garden = boolval($_POST['garden']);
   $terrace = boolval($_POST['terrace']);
   $open_fire = boolval($_POST['open_fire']);
   $postcode = intval($_POST['postal_code']);
   $province = strval($_POST['province']);
   $region = strval($_POST['region']);

   // Validation
   if (filter_var($property_type, FILTER_SANITIZE_STRING)) {
       $result["property_type"] = $property_type;
       } else {
       echo "Please select a property.";
       }

   if (filter_var($facades, FILTER_VALIDATE_INT)) {
       $result["facades_number"] = $facades;
       } else {
       echo "Please enter a number.";
       }

   if (filter_var($area, FILTER_VALIDATE_INT)) {
       $result["land_m2"] = $area;
       } else {
       echo "Please enter a number.";
       }

   if (filter_var($living, FILTER_VALIDATE_INT)) {
       $result["house_m2"] = $living;
       } else {
       echo "Please enter a number in sqm.";
       }       

   if (filter_var($bedrooms, FILTER_VALIDATE_INT)) {
       $result["bedrooms_number"] = $bedrooms;
       } else {
       echo "Please enter a number.";
       }
   

   if (filter_var($garden, FILTER_VALIDATE_BOOLEAN)) {
       $result["garden"] = $garden;
       } else {
       echo "Please select a garden.";
       }

   if (filter_var($terrace, FILTER_VALIDATE_BOOLEAN)) {
       $result["terrace"] = $terrace;
       } else {
       echo "Please select a terrace.";
       }

   if (filter_var($open_fire, FILTER_VALIDATE_BOOLEAN)) {
       $result["open_fire"] = $open_fire;
       } else {
       echo "Please select a open_fire.";
       }

   if (filter_var($postcode, FILTER_VALIDATE_INT)) {
       $result["postal_code"] = $postcode;
       } else {
       echo "Please enter a valid post code between 1000 and 9000.";
       }

   if (filter_var($province, FILTER_SANITIZE_STRING)) {
       $result["province"] = $province;
       } else {
       echo "Please select a province.";
       }

   if (filter_var($region, FILTER_SANITIZE_STRING)) {
       $result["region"] = $region;
       } else {
       echo "Please select a region.";
       }

   $result = json_encode($result);

   $curl = curl_init('https://api.wallonia.ml/v1/price');

curl_setopt_array($curl, array (
    CURLOPT_RETURNTRANSFER => true, //renvoie les infos
    CURLOPT_ENCODING => '',
    CURLOPT_MAXREDIRS => 10,
    CURLOPT_CAINFO => __DIR__ . '/certificat/cert.cer',
    // CURLOPT_SSL_VERIFYPEER => false, //ne tient pas compte du SSL(certificat)
    CURLOPT_TIMEOUT => 0, //attend le temps qu'il faut
    CURLOPT_FOLLOWLOCATION => true, //autorise la redirection
    CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
    CURLOPT_CUSTOMREQUEST => 'POST', //methode utilisée (vs GET par défaut)
    CURLOPT_POSTFIELDS => $result, //variable JSON
    CURLOPT_HTTPHEADER => array( // indique le type de postfield = body (ici json); "Array" car on peut envoyer plusieurs paramètres dans le header
        'Content-Type: application/json',
    )
));

$data = curl_exec($curl);
$data = json_decode($data, true);

echo curl_error($curl);
echo $data["price"];

curl_close($curl);

}

    // if($data === false) {
       //    echo curl_error($curl);
       // }else{
       //     if(curl_getinfo($curl, CURLINFO_HTTP_CODE) === 200) {
       //         $data = json_decode($data, true);
       //         echo 'The estimated price is ' . $data . '.';
       //     }
       // }
?>

