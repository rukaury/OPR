<?php
/**
 * Created by PhpStorm.
 * User: rukau
 * Date: 2018-11-11
 * Time: 04:22
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

$apiUrl = "http://localhost:8040/crybAPI/customers";
$data_array =  array(
    "customer"         => array(
        "first_name"         => "David",
        "last_name"        => "Webb",
        "email"        => "david123@uottawa.ca",
        "sex"        => "Male",
        "isOwner"        => 0,
        "username"        => "davidWebb",
        "pass"         => "password"
    ),
);

$make_call = callAPI('POST', $apiUrl, json_encode($data_array));
$response = json_decode($make_call, true);
echo $response;

/*
 *
 *
 *
 * test property page

$pid = 4;
$apiUrl = "http://localhost/crybAPI";
$get_data = callAPI('GET', $apiUrl . '/properties/' . $pid, false);
$response = json_decode($get_data, true);
$propertyData = $response;
$type = $propertyData[0]['type'];
$ownerId = $propertyData[0]['uid'];
$num_of_bedrooms = $propertyData[0]['num_of_bedrooms'];
$num_of_bathrooms = $propertyData[0]['num_of_bathrooms'];
$num_of_other_rooms = $propertyData[0]['num_of_other_rooms'];
$description = $propertyData[0]['description'];
$price = $propertyData[0]['price'];
$area = $propertyData[0]['area'];
$number= $propertyData[0]['number'];
$street= $propertyData[0]['street'];
$city= $propertyData[0]['city'];
$state= $propertyData[0]['state'];
$country = $propertyData[0]['country'];
$apartment = $propertyData[0]['apartment'];

$get_data = callAPI('GET', $apiUrl . '/photos/' . $pid . '/allData', false);
$response = json_decode($get_data, true);
$photosData = $response;
echo $photosData == "";
/*
for($i = 0; $i < count($photosData); $i++){
    $html = '<div class="item">';
    $html .= '<div class="item-inner">';
    $html .= '<div class="-resp-bg-img" href="./assets/img/properties/' .
        $photosData[$i]['file_name'] .
    '" 
style="background-image: url(./assets/img/properties/' . $photosData[$i]['file_name'] . ');"></div>';
    $html .= '</div>';
    $html .= '</div>';
    echo $html;
}

*/

/*
 * properties view test
 *
for($i = 0; $i < count($propertyData); $i++){
    $get_data = callAPI('GET', 'http://localhost/crybAPI/photos/' . (int)$propertyData[$i]['pid'], false);
    $response = json_decode($get_data, true);
    $propertyPhotos = $response;
    $randomImage = random_int(1, count($propertyPhotos));
    $html = '<div class="col-lg-4 col-md-6 d-flex">';
    $html .= '<div class="flat-card">';
    $html .= '<div class="flat-card_top"><a href="property.php?pid=' . $propertyData[$i]['pid'] . '">';
    $html .= '<div class="-resp-bg-img" style="background-image: url(./assets/img/properties/' .
        $propertyPhotos[$randomImage]['file_name'] . ');"></div></a></div>';
    $html .= '<div class="flat-card_bot">';
    $html .= '<h5 class="flat-card_title"><a href="property.php?pid=' . $propertyData[$i]['pid']
        . '">' . $propertyData[$i]['street'] . ', ' . $propertyData[$i]['city'] . ', ' .
    $propertyData[$i]['state']  . '</a></h5>';
    $html .= '<p class="flat-card_price">$ ' . $propertyData[$i]['price'] . '</p>';
    $html .= '<div class="flat-card_descr">';
    $html .= '<p>' . $propertyData[$i]['description'] . ' </p>';
    $html .= '</div>';
    $html .= '<div class="flat-card_info">';
    $html .= '<div class="flat-card_info_item"><i class="icon-bed"></i>' . $propertyData[$i]['num_of_bedrooms'] . 'bd</div>';
    $html .= '<div class="flat-card_info_item"><i class="icon-shower"></i>' . $propertyData[$i]['num_of_bathrooms'] . 'ba</div>';
    $html .= '<div class="flat-card_info_item">' . $propertyData[$i]['area'] . ' sqft</div>';
    $html .= '</div>';
    $html .= '</div>';
    $html .= '</div>';
    $html .= '</div>';
    echo $html;
}
*/
?>

