
<?php
/**
 * Cryb home page.
 * Creator: Aury
 * Date: 2018-11-10
 * Time: 14:40
 */

include_once("./includes/header/header.php");
?>

      <!-- CONTENT-->
      <main class="main">
        <section class="section section-welcome">
          <div class="welcome-slider js-welcome-slider -dot_style_2">
            <div class="welcome-slider_item bg-overlay color-white" style="background-image: url(./assets/img/bg/bg-beach_building.png);">
              <div class="container">
                <div class="row">
                  <div class="col-md-6">
                    <div class="welcome-slider_item_content">
                      <div class="tag -sale mb-3">Sale</div>
                      <h2 class="h1 mb-4">372 Central Park W , Ottawa</h2>
<div class="descr-block mb-30">
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aenean nec arcu eget nulla bibendum finibus. Class aptent taciti sociosqu ad litora  torquent per conubia nostra, per inceptos himenaeos.</p>
                      </div><a class="btn btn-primary btn-md" href="property.php">View Detail</a>
                    </div>
                  </div>
                  <div class="col-lg-4 offset-lg-2 col-md-5 offset-md-1">
                    <div class="flat-card">
                      <div class="flat-card_top"><a href="property.php">
                          <div class="-resp-bg-img" style="background-image: url(./assets/img/flat/flat-1.png);"></div></a></div>
                      <div class="flat-card_bot">
                        <h5 class="flat-card_title"><a href="property.php">Central Park, Ottawa, ON</a></h5>
                        <p class="flat-card_price">$5,630,000</p>
                        <div class="flat-card_descr">
                          <p>Nullam vestibulum leo et ante facilisis, vel feugiat mauris accumsan.</p>
                        </div>
                        <div class="flat-card_info">
                          <div class="flat-card_info_item"><i class="icon-bed"></i>2bd</div>
                          <div class="flat-card_info_item"><i class="icon-shower"></i>1ba</div>
                          <div class="flat-card_info_item">756 sqft</div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="welcome-slider_item bg-overlay color-white" style="background-image: url(./assets/img/flat/flat-1.png);">
              <div class="container">
                <div class="row">
                  <div class="col-md-6">
                    <div class="welcome-slider_item_content">
                      <div class="tag -hot mb-3">hot</div>
                      <h2 class="h1 mb-4">375 Central Park W , Ottawa</h2>
<div class="descr-block mb-30">
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aenean nec arcu eget nulla bibendum finibus. Class aptent taciti sociosqu ad litora  torquent per conubia nostra, per inceptos himenaeos.</p>
                      </div><a class="btn btn-primary btn-md" href="property.php">View Detail</a>
                    </div>
                  </div>
                  <div class="col-lg-4 offset-lg-2 col-md-5 offset-md-1">
                    <div class="flat-card mb-0">
                      <div class="flat-card_top"><a href="property.php">
                          <div class="-resp-bg-img" style="background-image: url(./assets/img/flat/flat-1.png);"></div></a></div>
                      <div class="flat-card_bot">
                        <h5 class="flat-card_title"><a href="property.php">Central Park, Ottawa, ON</a></h5>
                        <p class="flat-card_price">$5,630,000</p>
                        <div class="flat-card_descr">
                          <p>Nullam vestibulum leo et ante facilisis, vel feugiat mauris accumsan.</p>
                        </div>
                        <div class="flat-card_info">
                          <div class="flat-card_info_item"><i class="icon-bed"></i>2bd</div>
                          <div class="flat-card_info_item"><i class="icon-shower"></i>1ba</div>
                          <div class="flat-card_info_item">756 sqft</div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </section>
        <section class="section section-search pd-100 bg-map">
          <div class="container">
            <h2 class="text-center mb-30">Search Property</h2>
            <div class="descr-block text-center -max-width_575 mb-60">
              <p>Search any properties you have in mind and bid on it, we offer the best results in the world!</p>
            </div>
            <div class="search-block">
              <div class="row">
                <div class="col-lg-4 order-lg-2">
                  <div class="search-set">
                      <?php include_once ("./includes/search_form_view.php")?>
                  </div>
                </div>
                <div class="col-lg-8 order-lg-1">
                  <div class="search-map">
                    <div class="map" id="js-search-map"></div>
                    <div class="flat-card mb-0 -map">
                      <div class="flat-card_top">
                        <div class="flat-card_close"><i class="fas fa-times"></i></div><a href="property.php">
                          <div class="-resp-bg-img" style="background-image: url(./assets/img/flat/flat-1.png);"></div></a>
                      </div>
                      <div class="flat-card_bot">
                        <h5 class="flat-card_title"><a href="property.php">Central Park, Ottawa, ON</a></h5>
                        <p class="flat-card_price">$5,630,000</p>
                        <div class="flat-card_info">
                          <div class="flat-card_info_item"><i class="icon-bed"></i>2bd</div>
                          <div class="flat-card_info_item"><i class="icon-shower"></i>1ba</div>
                          <div class="flat-card_info_item">756 sqft</div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </section>
        <section class="section section-flatList pd-100 bg-secondary brd-t brd-b">
          <div class="container">
            <h2 class="text-center mb-30">New Listings</h2>
            <!-- SHUFFLE FILTER-->
            <ul class="nav filter-nav" id="myTab" role="tablist">
              <li class="nav-item"><a class="nav-link js-no-scroll active" id="rent_tab" data-toggle="tab" href="#rent" role="tab" aria-controls="rent" aria-selected="true">rent</a></li>
              <!-- <li class="nav-item"><a class="nav-link js-no-scroll" id="buy_tab" data-toggle="tab" href="#buy" role="tab" aria-controls="buy" aria-selected="false">buy</a></li> -->
            </ul>
            <div class="tab-content" id="myTabContent">
              <div class="tab-pane fade show active" id="rent" role="tabpanel" aria-labelledby="rent_tab">
                <div class="filter-content">
                  <div class="row">
                    <div class="col-lg-4 col-md-6 d-flex">
                      <div class="flat-card">
                        <div class="flat-card_top">
                          <div class="tag -sale">sale</div><a href="property.php">
                            <div class="-resp-bg-img" style="background-image: url(./assets/img/flat/flat-1.png);"></div></a>
                        </div>
                        <div class="flat-card_bot">
                          <h5 class="flat-card_title"><a href="property.php">Midtown East, Ottawa, ON</a></h5>
                          <p class="flat-card_price">$2,500 / mon</p>
                          <div class="flat-card_descr">
                            <p>Nullam vestibulum leo et ante facilisis, vel feugiat mauris accumsan.</p>
                          </div>
                          <div class="flat-card_info">
                            <div class="flat-card_info_item"><i class="icon-bed"></i>2bd</div>
                            <div class="flat-card_info_item"><i class="icon-shower"></i>1ba</div>
                            <div class="flat-card_info_item">756 sqft</div>
                          </div>
                        </div>
                      </div>
                    </div>
                    <div class="col-lg-4 col-md-6 d-flex">
                      <div class="flat-card">
                        <div class="flat-card_top -slider">
                          <div class="tag -hot">hot</div>
                          <div class="flat-card_slider js-flat-card-slider">
                            <div class="item"><a href="property.php">
                                <div class="-resp-bg-img" style="background-image: url(./assets/img/flat/flat-2.png);"></div></a></div>
                            <div class="item"><a href="property.php">
                                <div class="-resp-bg-img" style="background-image: url(./assets/img/flat/flat-4.png);"></div></a></div>
                          </div>
                        </div>
                        <div class="flat-card_bot">
                          <h5 class="flat-card_title"><a href="property.php">Murray Hill, Ottawa, ON</a></h5>
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
                    <div class="col-lg-4 col-md-6 d-flex">
                      <div class="flat-card">
                        <div class="flat-card_top"><a href="property.php">
                            <div class="-resp-bg-img" style="background-image: url(./assets/img/flat/flat-3.png);"></div></a></div>
                        <div class="flat-card_bot">
                          <h5 class="flat-card_title"><a href="property.php">Upper West Side, Ottawa, ON</a></h5>
                          <p class="flat-card_price">$1,200 / mon</p>
                          <div class="flat-card_descr">
                            <p>Nullam vestibulum leo et ante facilisis, vel feugiat mauris accumsan.</p>
                          </div>
                          <div class="flat-card_info">
                            <div class="flat-card_info_item"><i class="icon-bed"></i>2bd</div>
                            <div class="flat-card_info_item"><i class="icon-shower"></i>3ba</div>
                            <div class="flat-card_info_item">475 sqft</div>
                          </div>
                        </div>
                      </div>
                    </div>
                    <div class="col-lg-4 col-md-6 d-flex">
                      <div class="flat-card">
                        <div class="flat-card_top"><a href="property.php">
                            <div class="-resp-bg-img" style="background-image: url(./assets/img/flat/flat-4.png);"></div></a></div>
                        <div class="flat-card_bot">
                          <h5 class="flat-card_title"><a href="property.php">Inwood, Ottawa, ON</a></h5>
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
                    <div class="col-lg-4 col-md-6 d-flex">
                      <div class="flat-card">
                        <div class="flat-card_top">
                          <div class="tag -favorite">favorite</div><a href="property.php">
                            <div class="-resp-bg-img" style="background-image: url(./assets/img/flat/flat-5.png);"></div></a>
                        </div>
                        <div class="flat-card_bot">
                          <h5 class="flat-card_title"><a href="property.php">Greenwich Village, Ottawa, ON</a></h5>
                          <p class="flat-card_price">$2,100 / mon</p>
                          <div class="flat-card_descr">
                            <p>Nullam vestibulum leo et ante facilisis, vel feugiat mauris accumsan.</p>
                          </div>
                          <div class="flat-card_info">
                            <div class="flat-card_info_item"><i class="icon-bed"></i>1bd</div>
                            <div class="flat-card_info_item"><i class="icon-shower"></i>1ba</div>
                            <div class="flat-card_info_item">605 sqft</div>
                          </div>
                        </div>
                      </div>
                    </div>
                    <div class="col-lg-4 col-md-6 d-flex">
                      <div class="flat-card">
                        <div class="flat-card_top"><a href="property.php">
                            <div class="-resp-bg-img" style="background-image: url(./assets/img/flat/flat-6.png);"></div></a></div>
                        <div class="flat-card_bot">
                          <h5 class="flat-card_title"><a href="property.php">Clinton, Ottawa, ON</a></h5>
                          <p class="flat-card_price">$4,850 / mon</p>
                          <div class="flat-card_descr">
                            <p>Nullam vestibulum leo et ante facilisis, vel feugiat mauris accumsan.</p>
                          </div>
                          <div class="flat-card_info">
                            <div class="flat-card_info_item"><i class="icon-bed"></i>2bd</div>
                            <div class="flat-card_info_item"><i class="icon-shower"></i>1ba</div>
                            <div class="flat-card_info_item">930 sqft</div>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="text-center"><a class="btn btn-md btn-primary" href="javascript:void(0);">load more</a></div>
              </div>
              <div class="tab-pane fade" id="buy" role="tabpanel" aria-labelledby="buy_tab">
                <div class="filter-content">
                  <div class="row">
                    <div class="col-lg-4 col-md-6 d-flex">
                      <div class="flat-card">
                        <div class="flat-card_top"><a href="property.php">
                            <div class="-resp-bg-img" style="background-image: url(./assets/img/flat/flat-6.png);"></div></a></div>
                        <div class="flat-card_bot">
                          <h5 class="flat-card_title"><a href="property.php">Murray Hill, Ottawa, ON</a></h5>
                          <p class="flat-card_price">$15,630,000</p>
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
                    <div class="col-lg-4 col-md-6 d-flex">
                      <div class="flat-card">
                        <div class="flat-card_top">
                          <div class="tag -favorite">favorite</div><a href="property.php">
                            <div class="-resp-bg-img" style="background-image: url(./assets/img/flat/flat-1.png);"></div></a>
                        </div>
                        <div class="flat-card_bot">
                          <h5 class="flat-card_title"><a href="property.php">Midtown East, Ottawa, ON</a></h5>
                          <p class="flat-card_price">$5,630,000</p>
                          <div class="flat-card_descr">
                            <p>Nullam vestibulum leo et ante facilisis, vel feugiat mauris accumsan.</p>
                          </div>
                          <div class="flat-card_info">
                            <div class="flat-card_info_item"><i class="icon-bed"></i>2bd</div>
                            <div class="flat-card_info_item"><i class="icon-shower"></i>1ba</div>
                            <div class="flat-card_info_item">756 sqft</div>
                          </div>
                        </div>
                      </div>
                    </div>
                    <div class="col-lg-4 col-md-6 d-flex">
                      <div class="flat-card">
                        <div class="flat-card_top"><a href="property.php">
                            <div class="-resp-bg-img" style="background-image: url(./assets/img/flat/flat-4.png);"></div></a></div>
                        <div class="flat-card_bot">
                          <h5 class="flat-card_title"><a href="property.php">Upper West Side, Ottawa, ON</a></h5>
                          <p class="flat-card_price">$7,500,000</p>
                          <div class="flat-card_descr">
                            <p>Nullam vestibulum leo et ante facilisis, vel feugiat mauris accumsan.</p>
                          </div>
                          <div class="flat-card_info">
                            <div class="flat-card_info_item"><i class="icon-bed"></i>2bd</div>
                            <div class="flat-card_info_item"><i class="icon-shower"></i>3ba</div>
                            <div class="flat-card_info_item">475 sqft</div>
                          </div>
                        </div>
                      </div>
                    </div>
                    <div class="col-lg-4 col-md-6 d-flex">
                      <div class="flat-card">
                        <div class="flat-card_top"><a href="property.php">
                            <div class="-resp-bg-img" style="background-image: url(./assets/img/flat/flat-5.png);"></div></a></div>
                        <div class="flat-card_bot">
                          <h5 class="flat-card_title"><a href="property.php">Greenwich Village, Ottawa, ON</a></h5>
                          <p class="flat-card_price">$3,300,000</p>
                          <div class="flat-card_descr">
                            <p>Nullam vestibulum leo et ante facilisis, vel feugiat mauris accumsan.</p>
                          </div>
                          <div class="flat-card_info">
                            <div class="flat-card_info_item"><i class="icon-bed"></i>1bd</div>
                            <div class="flat-card_info_item"><i class="icon-shower"></i>1ba</div>
                            <div class="flat-card_info_item">605 sqft</div>
                          </div>
                        </div>
                      </div>
                    </div>
                    <div class="col-lg-4 col-md-6 d-flex">
                      <div class="flat-card">
                        <div class="flat-card_top -slider">
                          <div class="flat-card_slider js-flat-card-slider">
                            <div class="item"><a href="property.php">
                                <div class="-resp-bg-img" style="background-image: url(./assets/img/flat/flat-1.png);"></div></a></div>
                            <div class="item"><a href="property.php">
                                <div class="-resp-bg-img" style="background-image: url(./assets/img/flat/flat-3.png);"></div></a></div>
                            <div class="item"><a href="property.php">
                                <div class="-resp-bg-img" style="background-image: url(./assets/img/flat/flat-5.png);"></div></a></div>
                          </div>
                        </div>
                        <div class="flat-card_bot">
                          <h5 class="flat-card_title"><a href="property.php">Inwood, Ottawa, ON</a></h5>
                          <p class="flat-card_price">$2,500,000</p>
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
                    <div class="col-lg-4 col-md-6 d-flex">
                      <div class="flat-card">
                        <div class="flat-card_top">
                          <div class="tag -hot">hot</div><a href="property.php">
                            <div class="-resp-bg-img" style="background-image: url(./assets/img/flat/flat-3.png);"></div></a>
                        </div>
                        <div class="flat-card_bot">
                          <h5 class="flat-card_title"><a href="property.php">Clinton, Ottawa, ON</a></h5>
                          <p class="flat-card_price">$2,000,000</p>
                          <div class="flat-card_descr">
                            <p>Nullam vestibulum leo et ante facilisis, vel feugiat mauris accumsan.</p>
                          </div>
                          <div class="flat-card_info">
                            <div class="flat-card_info_item"><i class="icon-bed"></i>2bd</div>
                            <div class="flat-card_info_item"><i class="icon-shower"></i>1ba</div>
                            <div class="flat-card_info_item">930 sqft</div>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="text-center"><a class="btn btn-md btn-primary" href="javascript:void(0);">load more</a></div>
              </div>
            </div>
          </div>
        </section>
          <!--
        <section class="section section-agencies pd-100 pb-70">
          <div class="container">
            <h2 class="text-center mb-30">The Best Agencies</h2>
            <div class="descr-block text-center -max-width_550 mb-60">
              <p>Aliquam fermentum erat eu nunc dignissim hendrerit. Praesent tellus, orci imperdiet id accumsan in, cursus eu mauris.</p>
            </div>
            <div class="agency-block">
              <div class="row">
                <div class="col-xl-3 col-md-6 d-flex">
                  <div class="agency-card">
                    <div class="agency-card_top"><a href="agency_single.php">
                        <div class="agency-card_logo"><img src="./img/agencies/agency-1.png" alt=""></div>
                        <div class="-resp-bg-img" style="background-image: url(./assets/img/agencies/agency_bg-1.png);"></div></a></div>
                    <div class="agency-card_bot">
                      <h5 class="agency-card_title"><a href="agency_single.php">Real Estate ON Agency</a></h5>
                      <div class="agency-card_descr">
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing.</p>
                      </div><a class="btn btn-primary btn-md" href="agency_single.php">view profile</a>
                    </div>
                  </div>
                </div>
                <div class="col-xl-3 col-md-6 d-flex">
                  <div class="agency-card">
                    <div class="agency-card_top"><a href="agency_single.php">
                        <div class="agency-card_logo"><img src="./assets/img/agencies/agency-2.png" alt=""></div>
                        <div class="-resp-bg-img" style="background-image: url(./assets/img/agencies/agency_bg-2.png);"></div></a></div>
                    <div class="agency-card_bot">
                      <h5 class="agency-card_title"><a href="agency_single.php">Real Estate TX Agency</a></h5>
                      <div class="agency-card_descr">
                        <p>Morbi vel mauris feugiat, sodales mi eu, pharetra.</p>
                      </div><a class="btn btn-primary btn-md" href="agency_single.php">view profile</a>
                    </div>
                  </div>
                </div>
                <div class="col-xl-3 col-md-6 d-flex">
                  <div class="agency-card">
                    <div class="agency-card_top"><a href="agency_single.php">
                        <div class="agency-card_logo"><img src="./assets/img/agencies/agency-3.png" alt=""></div>
                        <div class="-resp-bg-img" style="background-image: url(./assets/img/agencies/agency_bg-3.png);"></div></a></div>
                    <div class="agency-card_bot">
                      <h5 class="agency-card_title"><a href="agency_single.php">Real Estate CA Agency</a></h5>
                      <div class="agency-card_descr">
                        <p>Praesent elementum porttitor quam bibendum porttitor.</p>
                      </div><a class="btn btn-primary btn-md" href="agency_single.php">view profile</a>
                    </div>
                  </div>
                </div>
                <div class="col-xl-3 col-md-6 d-flex">
                  <div class="agency-card">
                    <div class="agency-card_top"><a href="agency_single.php">
                        <div class="agency-card_logo"><img src="./assets/img/agencies/agency-4.png" alt=""></div>
                        <div class="-resp-bg-img" style="background-image: url(./assets/img/agencies/agency_bg-4.png);"></div></a></div>
                    <div class="agency-card_bot">
                      <h5 class="agency-card_title"><a href="agency_single.php">Real Estate FL Agency</a></h5>
                      <div class="agency-card_descr">
                        <p>Vestibulum sit ligula posuere, gravida ex eu, tempus.</p>
                      </div><a class="btn btn-primary btn-md" href="agency_single.php">view profile</a>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </section>

        -->
        <section class="section section-testimonials bg-map_opacity bg-dark text-white pd-100">
          <div class="testimonials-slider js-testimonials-slider">
            <div class="testimonials-item">
              <div class="container">
                <div class="testimonials-item_content">
                  <div class="testimonials-item_descr">
                    <p>Praesent scelerisque sollicitudin eros, sollicitudin urna hendrerit. Sed rutrum sem odio, et egestas elit ullamcorper id. In consectetur cursus leo id suscipit.</p>
                  </div>
                  <p class="testimonials-item_title">Michael Hopkins</p>
                </div>
              </div>
            </div>
            <div class="testimonials-item">
              <div class="container">
                <div class="testimonials-item_content">
                  <div class="testimonials-item_descr">
                    <p> Lorem ipsum dolor sit amet, consectetur adipisicing elit. Dignissimos porro eum quia hic enim explicabo.</p>
                  </div>
                  <p class="testimonials-item_title">John Doe</p>
                </div>
              </div>
            </div>
            <div class="testimonials-item">
              <div class="container">
                <div class="testimonials-item_content">
                  <div class="testimonials-item_descr">
                    <p> Lorem ipsum dolor sit amet, consectetur adipisicing elit. Sint consequuntur doloremque voluptatem eveniet id minus corporis reiciendis, molestias similique quibusdam quaerat, maxime numquam nobis quo.</p>
                  </div>
                  <p class="testimonials-item_title">Jack Doe</p>
                </div>
              </div>
            </div>
          </div>
        </section>
        <section class="section section-news pd-100 pb-70 bg-secondary brd-t brd-b">
          <div class="container">
            <h2 class="text-center mb-70">Latest News</h2>
            <div class="news-block">
              <div class="row">
                <div class="col-lg-4 col-md-6 d-flex">
                  <div class="news-item">
                    <div class="news-item_top"><a href="blog-single.php">
                        <div class="-resp-bg-img" style="background-image: url(./assets/img/blog/bg-blog-1.png);"></div></a></div>
                    <div class="news-item_bot">
                      <h5 class="news-item_title"><a href="blog-single.php">Nullam vestibulum leo et ante, vel feugiat mauris accumsan.</a></h5>
                      <div class="news-item_info">
                        <div class="news-item_info_item"><a href="javascript:void(0);">interiors</a></div><span class="sep">/</span>
                        <div class="news-item_info_item">12.04.2018</div>
                      </div>
                      <div class="news-item_descr">
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Proin pretium magna ac placerat interdum.</p>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="col-lg-4 col-md-6 d-flex">
                  <div class="news-item">
                    <div class="news-item_top"><a href="blog-single.php">
                        <div class="-resp-bg-img" style="background-image: url(./assets/img/blog/bg-blog-2.png);"></div></a></div>
                    <div class="news-item_bot">
                      <h5 class="news-item_title"><a href="blog-single.php">Donec augue dui, dictum sit amet auctor ut, fermentum vel mi.</a></h5>
                      <div class="news-item_info">
                        <div class="news-item_info_item"><a href="javascript:void(0);">agencies</a></div><span class="sep">/</span>
                        <div class="news-item_info_item">9.04.2018</div>
                      </div>
                      <div class="news-item_descr">
                        <p>Mauris et rhoncus arcu, sit amet enim. Pellentesque habitant tristique senectus et netus et malesuada fames.</p>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="col-lg-4 col-md-6 d-flex">
                  <div class="news-item">
                    <div class="news-item_top"><a href="blog-single.php">
                        <div class="-resp-bg-img" style="background-image: url(./assets/img/blog/bg-blog-3.png);"></div></a></div>
                    <div class="news-item_bot">
                      <h5 class="news-item_title"><a href="blog-single.php">Aenean blandit mi ac ante facilisis, quis luctus dolor posuere.</a></h5>
                      <div class="news-item_info">
                        <div class="news-item_info_item"><a href="javascript:void(0);">our team</a></div><span class="sep">/</span>
                        <div class="news-item_info_item">12.04.2018</div>
                      </div>
                      <div class="news-item_descr">
                        <p>Mauris et rhoncus arcu, sit amet enim. Pellentesque habitant tristique senectus et netus et malesuada fames.</p>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="text-center"><a class="btn btn-primary btn-md" href="blogs.php">view more</a></div>
          </div>
        </section>
        <section class="section section-about pd-100">
          <div class="container">
            <div class="row">
              <div class="col-md-6 d-flex align-items-center">
                <div class="content">
                  <h2 class="mb-30">About Us</h2>
                  <div class="descr-block mb-30">
                    <p>Nam a dui erat. Sed bibendum augue et porta consequat. Morbi id mattis sem. Phasellus quis magna ipsum. Donec malesuada nisi felis, vel vestibulum nisl volutpat faucibus. Suspendisse volutpat feugiat hendrerit. Donec ullamcorper ex sed gravida efficitur. Etiam tincidunt dui arcu, id varius dolor pulvinar vel.</p>
                  </div><a class="btn btn-primary btn-md" href="javascript:void(0);">purchase theme</a>
                </div>
              </div>
              <div class="col-md-5 offset-md-1 d-flex align-items-center">
                <div class="video-block_wrapper js-video-block">
                  <iframe data-src="https://www.youtube.com/embed/wMEmvFg7Scg?autoplay=1" src="javascript:void(0);" allowfullscreen=""></iframe>
                  <div class="video-block bg-overlay" style="background-image: url('assets/img/bg/bg-video_preview.png');">
                    <div class="video-block_play">
                      <div class="video-block_play_content">
                        <div class="video-block_play_title">Play</div>
                        <div class="video-play_icon"><i class="fa fa-play" aria-hidden="true"></i></div>
                      </div>
                      <svg id="circle" viewbox="0 0 134 134" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
                        <g stroke="none" stroke-width="3" fill="none" fill-rule="evenodd">
                          <g transform="translate(-573.000000, -1878.000000)" stroke="#FFFFFF">
                            <g transform="translate(519.000000, 1879.000000)">
                              <g transform="translate(93.500000, 66.000000) rotate(-270.000000) translate(-93.500000, -66.000000) translate(27.500000, -27.500000)">
                                <g transform="translate(-0.000000, 0.000000)">
                                  <g transform="translate(0.000000, 0.000000)">
                                    <circle cx="66" cy="66" r="66"></circle>
                                  </g>
                                </g>
                              </g>
                            </g>
                          </g>
                        </g>
                      </svg>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </section>
          <?php include_once ("./includes/bottom_section.php")?>
      </main>

        <?php include_once("./includes/footer/footer.php")?>
