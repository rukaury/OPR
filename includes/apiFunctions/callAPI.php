<?php
/**
 * Created by PhpStorm.
 * User: rukau
 * Date: 2018-11-11
 * Time: 13:12
 */


/*
 * This function should use curl to make an API call to the crybAPI using these HTTP verbs:
 * This function may require a little bit of knowledge of how REST API works.
 * This function should return a response in a JSON format.
 *
 * POST (ADD)
 * GET
 * PUT  (UPDATE)
 * DELETE
 *
 *
 * For further understanding take a look at http://php.net/manual/en/book.curl.php.
 *
 * @param string $method This parameter should be used to indicate which HTTP verb to use.
 * @param string $url This parameter should be used to indicate which API url to call.
 * @param string $data This parameter should be used to indicate if necessary which data you wish
 * to send (in the body) with the API call.
 * @returns $result
 */

function callAPI($method, $url, $data){
    $curl = curl_init();

    switch ($method){
        case "POST":
            curl_setopt($curl, CURLOPT_POST, 1);
            if ($data)
                curl_setopt($curl, CURLOPT_POSTFIELDS, $data);
            break;
        case "PUT":
            curl_setopt($curl, CURLOPT_CUSTOMREQUEST, "PUT");
            if ($data)
                curl_setopt($curl, CURLOPT_POSTFIELDS, $data);
            break;
        default:
            if ($data)
                $url = sprintf("%s?%s", $url, http_build_query($data));
    }

    // OPTIONS:
    curl_setopt($curl, CURLOPT_URL, $url);
    curl_setopt($curl, CURLOPT_RETURNTRANSFER, 1);
    curl_setopt($curl, CURLOPT_HTTPHEADER, array(
        'Content-Type: application/json'
    ));

    // EXECUTE:
    $result = curl_exec($curl);
    if(!$result){die("Connection Failure");}
    curl_close($curl);
    return $result;
}

