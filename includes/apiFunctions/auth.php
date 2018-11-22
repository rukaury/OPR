<?php
/**
 * Created by PhpStorm.
 * User: rukau
 * Date: 2018-11-11
 * Time: 19:00
 */


/*
 *
 * Includes the callAPI function
 */

include_once("callAPI.php");

/*
 * This function should use a given url (eg:domain.com/crybAPI/login/{{userEmail}}/{{userPassword}})
 *  to
 * authenticate a user by checking the users credentials using the API and should return a
 * single json element such as:
 *
 *{
 *  uid:1,
 *  isOwner:0
 * }
 *
 * For further understanding take a look at the authenticateUser($email, $pass) function in the AuthModel class
 * from the crybAPI github.
 *
 * @param string $url This parameter is given for the call of the API
 * @returns $response
 */

function authenticate($url){
    $get_data = callAPI('GET', $url, false);
    $response = json_decode($get_data, true);
    return $response;
}
