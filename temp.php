function get_api_output($p_url){
    // setup handle
    $handle = curl_init();
    // Set the url
    $url = $p_url;
    // setopt
    curl_setopt($handle, CURLOPT_URL, $url);
    // Set the result output to be a string.
    curl_setopt($handle, CURLOPT_RETURNTRANSFER, true);
    // set the output
    $output = curl_exec($handle);
    // close handle        
    curl_close($handle);

    return $output;
    }

    $result_cp_collection = get_api_output("http://static.wallonia.ml/file/wallonia-lidar/web/postal_codes.json");

    $array_cp = json_decode($result_cp_collection, true);

    echo print_r($array_cp);


