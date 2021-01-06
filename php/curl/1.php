<?php 

    // Actual script start
    // create a new cURL resource
    // $curl is the handle of the resource $curl = curl_init();
    // set the URL and other options
    $curl = curl_init();
    curl_setopt($curl, CURLOPT_URL, "http://localhost:8000/collection"); // execute and pass the result to browser
    curl_exec($curl);
    // close the cURL resource
    curl_close($curl);

?>