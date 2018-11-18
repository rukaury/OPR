<?php
/**
 * Properties page.
 * Creator: Aury
 * Date: 2018-11-10
 * Time: 16:14
 */
$city = isset($_GET['city'])  ? $_GET['city'] : null;
$type = isset($_GET['type'])  ? $_GET['type'] : null;
$num_of_beds = isset($_GET['beds'])  ? (int)$_GET['beds'] : 0;
$num_of_baths = isset($_GET['baths'])  ? (int)$_GET['baths'] : 0;
$minPrice = isset($_GET['minPrice'])  ? (int)$_GET['minPrice'] : 0;
$maxPrice = isset($_GET['maxPrice'])  ? (int)$_GET['maxPrice'] : 0;
$host = "";
switch ($_SERVER['HTTP_HOST']) {
    case 'www.rukazana.com':
        $host = 'https://www.rukazana.com';
        break;
    case 'localhost:8040':
        $host = 'http://localhost:8040';
        break;
    default:
        header('Location: 404_error.php');
        break;
}
$apiUrl = $host . "/crybAPI";
include_once("./includes/apiFunctions/callAPI.php");
include_once("./includes/header/header.php");
$params = $uid != 0 && $isOwner == 1 ? "/owner/" . $uid : "/options";
?>
    <!-- CONTENT-->
    <main class="main">
        <div class="breadcrumb-wrap">
            <div class="container">
                <div class="row">
                    <div class="col-lg-9">
                        <nav aria-label="breadcrumb">
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item"><a href="/">Home</a></li>
                                <li class="breadcrumb-item active" aria-current="page">Properties</li>
                            </ol>
                        </nav>
                    </div>
                    <?php if($isOwner == 1):?>
                    <div class="col-lg-3 mrgn-tp-sm mrgn-bttm-sm float-right">
                        <div class="text-center"><a class="btn btn-md btn-primary" href="#"><span class="fa fa-plus-circle"></span> Add property</a></div>
                    </div>
                    <?php endif;?>
                </div>
            </div>
        </div>
        <section class="section section-catalog pb-50">
            <div class="container">
                <?php include_once ("./includes/search_form_view.php")?>
            </div>
        </section>
        <section class="section pd-100 pt-50 bg-secondary brd-t brd-b">
            <div class="container">
                <div class="row mb-30">
                    <?php
                    if($isOwner == 0){
                        $params .= isset($city) ? "/" . $city : "/none";
                        $params .= isset($type) ? "/" . $type : "/none";
                        $params .= isset($num_of_beds) ? "/" . $num_of_beds : "/0";
                        $params .= isset($num_of_baths) ? "/" . $num_of_baths : "/0";
                        $params .= isset($minPrice) ? "/" . $minPrice : "/0";
                        $params .= isset($maxPrice) ? "/" . $maxPrice : "/0";
                    }

                    $get_data = callAPI('GET', $apiUrl . '/properties' . $params, false);
                    $response = json_decode($get_data, true);
                    $propertyData = $response;
                    //echo $params;
                    if($response != ''){
                        for($i = 0; $i < count($propertyData); $i++){
                            $get_data = callAPI('GET', $apiUrl . '/photos/' .
                                (int)$propertyData[$i]['pid'] . '/allData', false);
                            $response = json_decode($get_data, true);
                            $propertyPhotos = $response;
                            $randomImage = random_int(1, count($propertyPhotos) - 1);
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
                    }elseif($isOwner == 1){
                        echo "<h1 class='text-center'>You currently own no properties. Add a poperty!</h1>";
                    }else{
                        echo "<h1 class='text-center'>There are no properties that were found using your search criteria</h1>";
                    }
                    ?>
                </div>
                <div class="text-center"><a class="btn btn-md btn-primary" href="javascript:void(0);">load more</a></div>
            </div>
        </section>
        <?php include_once ("./includes/bottom_section.php")?>
    </main>

    <!-- Footer -->
    <?php include_once ("./includes/footer/footer.php")?>
