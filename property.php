<?php
/**
 * Single Property page.
 * Creator: Aury
 * Date: 2018-11-10
 * Time: 15:44
 */
include_once("./includes/apiFunctions/callAPI.php");
include_once("./includes/header/header.php");
$pid = isset($_GET['pid']) ? (int)$_GET['pid'] : 0;
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
$fileNames = array();
for($i = 0; $i < count($photosData); $i++){
    array_push($fileNames, $photosData[$i]['file_name']);
}
if(($isOwner == 1 && $uid != $ownerId) || $pid == 0){
    header('Location: 404_error.php');
}
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
                                <li class="breadcrumb-item active" aria-current="page">Property</li>
                            </ol>
                        </nav>
                    </div>
                    <?php if($isOwner == 1):?>
                    <div class="col-lg-3 mrgn-tp-sm mrgn-bttm-sm float-right">
                        <div class="text-center"><a class="btn btn-md btn-primary" href="#"><span
                                        class="fa fa-edit"></span> Edit property</a></div>
                    </div>
                    <?php endif;?>
                </div>
            </div>
        </div>
        <?php if($response != ""):?>
            <section class="section single -flat">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-8">
                            <article class="article-single -flat">
                                <div class="article-top">
                                    <div class="article-top_header">
                                        <h1 class="h5 article-top_header_title"><?php print $street ?>,
                                            <?php print $city ?>, <?php print $state ?></h1>
                                        <div class="article-top_header_price">$<?php print $price ?> /
                                            mon</div>
                                    </div>
                                    <div class="article-top_sliders_wrap">
                                        <div class="article-top_slider_for_resize js-slider-resize"><i class="fas fa-expand-arrows-alt"></i></div>
                                        <div class="article-top_slider_for js-single-slider-for -style_2">
                                           <?php
                                               $get_data = callAPI('GET', $apiUrl . '/photos/' . $pid . '/allData', false);
                                               $response = json_decode($get_data, true);
                                               $photosData = $response;
                                               for($i = 0; $i < count($photosData); $i++){
                                                   $html = '<div class="item">';
                                                   $html .= '<div class="item-inner">';
                                                   $randomNumber = random_int(0, 9);
                                                   $html .= $randomNumber == 0 ? '' : '<div class="tag-list">';
                                                   $html .= $randomNumber == 1 ? '<div class="tag -sale">sale</div>' :
                                                       $randomNumber == 2 ? '<div class="tag -favorite">favorite</div>' :
                                                           $randomNumber == 3 ? '<div class="tag -hot">hot</div>' :
                                                               $randomNumber == 4 ? '<div class="tag -favorite">favorite</div><div class="tag -hot">hot</div>' :
                                                                   $randomNumber == 5 ? '<div class="tag -sale">sale</div><div class="tag -favorite">favorite</div>' :
                                                                       $randomNumber == 6 ? '<div class="tag -sale">sale</div><div class="tag -hot">hot</div>' :
                                                                           $randomNumber == 7 ? '<div class="tag -sale">sale</div><div class="tag -favorite">favorite</div><div class="tag -hot">hot</div>' : "";
                                                   $html .= ($randomNumber == 0 ? '' : '</div>') . '<a class="-resp-bg-img" href="./assets/img/properties/' .
                                                       $photosData[$i]['file_name'] .
                                                       '" style="background-image: url(./assets/img/properties/' . $photosData[$i]['file_name'] . ');"></a>';
                                                   $html .= '</div>';
                                                   $html .= '</div>';
                                                   echo $html;
                                               }
                                           ?>
                                        </div>
                                        <div class="article-top_slider_nav js-single-slider-nav">
                                            <?php
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
                                            ?>
                                        </div>
                                    </div>
                                </div>
                                <div class="article-info article-row">
                                    <h3>Overview</h3>
                                    <div class="article-info_container">
                                        <div class="article-info_item">
                                            <div class="icon"> <i class="icon-bed"></i></div>
                                            <div class="title">Bedrooms: <?php print
                                                    $num_of_bedrooms?></div>
                                        </div>
                                        <div class="article-info_item">
                                            <div class="icon"> <i class="icon-shower"></i></div>
                                            <div class="title">Bathrooms: <?php print
                                                    $num_of_bathrooms?></div>
                                        </div>
                                        <div class="article-info_item">
                                            <div class="icon"> <i class="icon-select"></i></div>
                                            <div class="title">Area: <?php print $area?> sqft</div>
                                        </div>
                                    </div>
                                </div>
                                <div class="article-descr article-row">
                                    <h3>Description</h3>
                                    <div class="descr-block">
                                        <p><?php print $description?></p>
                                    </div>
                                </div>
                                <div class="article-features article-row">
                                    <h3>Additional Features</h3>
                                    <ul class="article-features_ist">
                                        <li>Additional Storage</li>
                                        <li>Full Marble Bathrooms</li>
                                        <li>Elevator</li>
                                        <li>Granite Countertops</li>
                                        <li>Garden</li>
                                        <li>Marble Bathrooms</li>
                                        <li>Dishwasher</li>
                                        <li>Renovated</li>
                                        <li>Flooring: Hardwood</li>
                                        <li>Stainless Steel Appliances</li>
                                        <li>Valet On-Site</li>
                                        <li>White Appliances</li>
                                        <li>Bamboo Floors</li>
                                        <li>Shared</li>
                                    </ul>
                                </div>
                                <!--
                                <div class="article-plans article-row">
                                    <h3>Floor Plans</h3>
                                    <div class="article-plans_container js-plans-lightbox">
                                        <div class="article-plans_col">
                                            <div class="article-plans_item"><a class="img -resp-bg-img" href="./assets/img/plans/plans_1.png" style="background-image: url(./assets/img/plans/plans_1.png);"></a>
                                                <div class="overlay-resize"><i class="icon-expand"></i></div>
                                            </div>
                                        </div>
                                        <div class="article-plans_col">
                                            <div class="article-plans_item"><a class="img -resp-bg-img" href="./assets/img/plans/plans_2.png" style="background-image: url(./assets/img/plans/plans_2.png);"></a>
                                                <div class="overlay-resize"><i class="icon-expand"></i></div>
                                            </div>
                                        </div>
                                        <div class="article-plans_col">
                                            <div class="article-plans_item"><a class="img -resp-bg-img" href="./assets/img/plans/plans_3.png" style="background-image: url(./assets/img/plans/plans_3.png);"></a>
                                                <div class="overlay-resize"><i class="icon-expand"></i></div>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                -->
                                <div class="article-location article-row">
                                    <h3>Property Location</h3>
                                    <div class="article-location_map" id="js-search-map"></div>
                                </div>
                                <div class="article-posts article-row">
                                    <h3>Similar Properties</h3>
                                    <div class="row">
                                        <div class="col-md-6">
                                            <div class="flat-card">
                                                <div class="flat-card_top">
                                                    <div class="tag -hot">hot</div><a href="javascript:void(0);">
                                                        <div class="-resp-bg-img" style="background-image: url(./assets/img/flat/flat-2.png);"></div></a>
                                                </div>
                                                <div class="flat-card_bot">
                                                    <h5 class="flat-card_title"><a href="javascript:void(0);"><?php print $street ?>,
                                                            <?php print $city ?>, <?php print $state ?></a></h5>
                                                    <p class="flat-card_price">$3,470 / mon</p>
                                                    <div class="flat-card_descr">
                                                        <p>Nullam vestibulum leo et ante facilisis, vel feugiat mauris accumsan.</p>
                                                    </div>
                                                    <div class="flat-card_info">
                                                        <div class="flat-card_info_item"><i class="icon-bed"></i>2bd</div>
                                                        <div class="flat-card_info_item"><i class="icon-shower"></i>2ba</div>
                                                        <div class="flat-card_info_item">842 sqft</div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="flat-card">
                                                <div class="flat-card_top"><a href="javascript:void(0);">
                                                        <div class="-resp-bg-img" style="background-image: url(./assets/img/flat/flat-4.png);"></div></a></div>
                                                <div class="flat-card_bot">
                                                    <h5 class="flat-card_title"><a href="javascript:void(0);">Inwood, Ottawa, ON</a></h5>
                                                    <p class="flat-card_price">$10,920 / mon</p>
                                                    <div class="flat-card_descr">
                                                        <p>Nullam vestibulum leo et ante facilisis, vel feugiat mauris accumsan.</p>
                                                    </div>
                                                    <div class="flat-card_info">
                                                        <div class="flat-card_info_item"><i class="icon-bed"></i>2bd</div>
                                                        <div class="flat-card_info_item"><i class="icon-shower"></i>1ba</div>
                                                        <div class="flat-card_info_item">1389 sqft</div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </article>
                        </div>

                        <div class="col-lg-4">
                            <div class="single-sidebar">
                                <!--
                                <div class="agenecy-sidebar mb-30">
                                    <div class="agenecy-sidebar_top">
                                        <div class="agenecy-sidebar_top_img">
                                            <div class="-resp-bg-img" style="background-image: url(./assets/img/bg/bg-sidebar-agency.png);"></div>
                                        </div>
                                        <div class="agenecy-sidebar_top_content">
                                            <h4 class="agenecy-sidebar_top_title">Real Estate ON Agency</h4>
                                            <div class="agency-phone_list">
                                                <div class="item">
                                                    <div class="title">Office:</div><a href="tel:1-222-333-4444">1-222-333-4444</a>
                                                </div>
                                                <div class="item">
                                                    <div class="title">Mobile:</div><a href="tel:1-234-456-7893">1-234-456-7893</a>
                                                </div>
                                                <div class="item">
                                                    <div class="title">Fax:</div><a href="tel:1-333-444-5555">1-333-444-5555</a>
                                                </div>
                                                <div class="item">
                                                    <div class="title">Email:</div><a href="mailto:hello@realestate.com">hello@realestate.com</a>
                                                </div>
                                            </div>
                                            <ul class="social-list -color agency-social_list">
                                                <li><a class="-fb" href="javascript:void(0);" target="_blank"><i class="fab fa-facebook-f"></i></a></li>
                                                <li><a class="-tw" href="javascript:void(0);" target="_blank"><i class="fab fa-twitter"></i></a></li>
                                                <li><a class="-gp" href="javascript:void(0);" target="_blank"><i class="fab fa-google"></i></a></li>
                                            </ul>
                                        </div>
                                    </div>
                                    <div class="agenecy-sidebar_bot">
                                        <form action="javascript:void(0);">
                                            <div class="form-group">
                                                <input class="form-control" type="text" placeholder="Name*" required>
                                            </div>
                                            <div class="form-group">
                                                <input class="form-control" type="text" placeholder="Email*" required>
                                            </div>
                                            <div class="form-group">
                                                <textarea class="form-control" placeholder="Message"></textarea>
                                            </div>
                                            <div class="search-filter_submit">
                                                <input class="btn btn-primary btn-md btn-block" type="submit" value="send your message">
                                            </div>
                                        </form>
                                    </div>
                                </div>
                                -->
                                <?php include_once ("./includes/search_form_view.php")?>
                            </div>
                        </div>
                    </div>
                </div>
            </section>

        <?php else: header('Location: 404_error.php'); ?>

        <?php endif; ?>

        <?php include_once ("./includes/bottom_section.php")?>
    </main>
    <!-- FOOTER-->
    <?php include_once("./includes/footer/footer.php")?>

