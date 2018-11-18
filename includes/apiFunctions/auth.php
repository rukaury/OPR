<?php
/**
 * Created by PhpStorm.
 * User: rukau
 * Date: 2018-11-11
 * Time: 19:00
 */

include_once("callAPI.php");

function authenticate($url){
    $get_data = callAPI('GET', $url, false);
    $response = json_decode($get_data, true);
    return $response;
}
