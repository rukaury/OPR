<?php
/**
 * About Page.
 * Creator: Aury
 * Date: 2018-11-10
 * Time: 16:41
 */
include_once("./includes/header/header.php");
?>
    <!-- CONTENT-->
    <main class="main">
        <div class="breadcrumb-wrap">
            <div class="container">
                <nav aria-label="breadcrumb">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="/">Home</a></li>
                        <li class="breadcrumb-item active" aria-current="page">About Us</li>
                    </ol>
                </nav>
            </div>
        </div>
        <section class="section section-img">
            <div class="container">
                <div class="img-single_wrap">
                    <div class="-resp-bg-img" style="background-image: url(./assets/img/bg/bg-about_welcome.png);"></div>
                </div>
            </div>
        </section>
        <section class="section section-about pd-100">
            <div class="container">
                <div class="row">
                    <div class="col-md-6 d-flex align-items-center">
                        <div class="content">
                            <h2 class="mb-30">Who we are</h2>
                            <div class="descr-block mb-30">
                                <p>Nam a dui erat. Sed bibendum augue et porta consequat. Morbi id mattis sem. Phasellus quis magna ipsum. Donec malesuada nisi felis, vel vestibulum nisl volutpat faucibus. Suspendisse volutpat feugiat hendrerit. Donec ullamcorper ex sed gravida efficitur. Etiam tincidunt dui arcu, id varius dolor pulvinar vel.</p>
                            </div><a class="btn btn-primary btn-md" href="contact.php">Contact</a>
                        </div>
                    </div>
                    <div class="col-md-5 offset-md-1 d-flex align-items-center">
                        <div class="video-block_wrapper js-video-block">
                            <iframe data-src="https://www.youtube.com/embed/wMEmvFg7Scg?autoplay=1" src="javascript:void(0);" allowfullscreen=""></iframe>
                            <div class="video-block bg-overlay" style="background-image: url('./assets/img/bg/bg-video_preview.png');">
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
        <section class="section section-features pd-100 bg-map_opacity bg-dark text-white">
            <div class="container">
                <div class="features-block">
                    <div class="row">
                        <div class="col-lg-3 col-sm-6 features-item_col">
                            <div class="features-item">
                                <div class="features-item_icon">
                                    <div class="svg-icon js-svg-animation-item" data-icon="icon-rocket.svg"></div>
                                </div>
                                <p class="features-item_title">Creative Ideas</p>
                                <p class="features-item_descr">Be set fourth land god darkness  make it wherein own</p>
                            </div>
                        </div>
                        <div class="col-lg-3 col-sm-6 features-item_col">
                            <div class="features-item">
                                <div class="features-item_icon">
                                    <div class="svg-icon js-svg-animation-item" data-icon="icon-settings.svg"></div>
                                </div>
                                <p class="features-item_title">Realy clean code</p>
                                <p class="features-item_descr">A she'd them bring void moving third she'd kind fill</p>
                            </div>
                        </div>
                        <div class="col-lg-3 col-sm-6 features-item_col">
                            <div class="features-item">
                                <div class="features-item_icon">
                                    <div class="svg-icon js-svg-animation-item" data-icon="icon-shield.svg"></div>
                                </div>
                                <p class="features-item_title">support 24/7</p>
                                <p class="features-item_descr">Dominion man second spirit he, earth they're creeping</p>
                            </div>
                        </div>
                        <div class="col-lg-3 col-sm-6 features-item_col">
                            <div class="features-item">
                                <div class="features-item_icon">
                                    <div class="svg-icon js-svg-animation-item" data-icon="icon-users.svg"></div>
                                </div>
                                <p class="features-item_title">talanted team</p>
                                <p class="features-item_descr">Morning his saying moveth it multiply appear life be</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!--
        <section class="section section-gallery pd-100">
            <div class="container">
                <h2 class="text-center mb-30">Our Gallery</h2>
                <div class="descr-block text-center -max-width_550 mb-60">
                    <p>Aliquam fermentum erat eu nunc dignissim hendrerit. Praesent tellus, orci imperdiet id accumsan in, cursus eu mauris.</p>
                </div>
                <div class="gallery-block js-gallery-block">
                    <div class="row">
                        <div class="col-lg-4 col-sm-6">
                            <div class="gallery-item"><a class="-resp-bg-img" href="./assets/img/gallery/gallery_1.png" style="background-image: url(./assets/img/gallery/gallery_1.png);"></a>
                                <div class="overlay-resize"><i class="icon-expand"></i></div>
                            </div>
                        </div>
                        <div class="col-lg-4 col-sm-6">
                            <div class="gallery-item"><a class="-resp-bg-img" href="./assets/img/gallery/gallery_2.png" style="background-image: url(./assets/img/gallery/gallery_2.png);"></a>
                                <div class="overlay-resize"><i class="icon-expand"></i></div>
                            </div>
                        </div>
                        <div class="col-lg-4 col-sm-6">
                            <div class="gallery-item"><a class="-resp-bg-img" href="./assets/img/gallery/gallery_3.png" style="background-image: url(./assets/img/gallery/gallery_3.png);"></a>
                                <div class="overlay-resize"><i class="icon-expand"></i></div>
                            </div>
                        </div>
                        <div class="col-lg-4 col-sm-6">
                            <div class="gallery-item"><a class="-resp-bg-img" href="./assets/img/gallery/gallery_4.png" style="background-image: url(./assets/img/gallery/gallery_4.png);"></a>
                                <div class="overlay-resize"><i class="icon-expand"></i></div>
                            </div>
                        </div>
                        <div class="col-lg-4 col-sm-6">
                            <div class="gallery-item"><a class="-resp-bg-img" href="./assets/img/gallery/gallery_5.png" style="background-image: url(./assets/img/gallery/gallery_5.png);"></a>
                                <div class="overlay-resize"><i class="icon-expand"></i></div>
                            </div>
                        </div>
                        <div class="col-lg-4 col-sm-6">
                            <div class="gallery-item"><a class="-resp-bg-img" href="./assets/img/gallery/gallery_6.png" style="background-image: url(./assets/img/gallery/gallery_6.png);"></a>
                                <div class="overlay-resize"><i class="icon-expand"></i></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        -->
        <section class="section pd-100 bg-secondary brd-t brd-b">
            <div class="container">
                <div class="row">
                    <div class="col-md-6">
                        <div class="content">
                            <h2 class="mb-30">Professional Skills</h2>
                            <div class="descr-block">
                                <p>Nam a dui erat. Sed bibendum augue et porta consequat. Morbi id mattis sem. Phasellus quis magna ipsum. Donec malesuada nisi felis, vel vestibulum nisl volutpat faucibus. </p>
                                <p>Suspendisse volutpat feugiat hendrerit. Donec ullamcorper ex sed gravida efficitur tincidunt dui arcu.</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-5 offset-md-1">
                        <div class="skills">
                            <!-- PROGRESS BARS-->
                            <div class="progress-bars-wrap js-progress-bars">
                                <!-- item 1-->
                                <div class="progress-bar-item progress-bars-wrap__item js-progress-bar-item">
                                    <!-- title-->
                                    <div class="progress-bar_header">
                                        <p class="progress-bar-item__title">Customer relationship</p><span class="progress-bar-strip__percent js-progress-bar-percent" data-progress-percent="85">0%</span>
                                    </div>
                                    <!-- strip-->
                                    <div class="progress-bar-item__strip-wrap">
                                        <div class="progress-bar-strip js-progress-bar-strip"></div>
                                    </div>
                                </div>
                                <!-- item 2-->
                                <div class="progress-bar-item progress-bars-wrap__item js-progress-bar-item">
                                    <!-- title-->
                                    <div class="progress-bar_header">
                                        <p class="progress-bar-item__title">Web development</p><span class="progress-bar-strip__percent js-progress-bar-percent" data-progress-percent="70">0%</span>
                                    </div>
                                    <!-- strip-->
                                    <div class="progress-bar-item__strip-wrap">
                                        <div class="progress-bar-strip js-progress-bar-strip"></div>
                                    </div>
                                </div>
                                <!-- item 3-->
                                <div class="progress-bar-item progress-bars-wrap__item js-progress-bar-item">
                                    <!-- title-->
                                    <div class="progress-bar_header">
                                        <p class="progress-bar-item__title">marketing</p><span class="progress-bar-strip__percent js-progress-bar-percent" data-progress-percent="85">0%</span>
                                    </div>
                                    <!-- strip-->
                                    <div class="progress-bar-item__strip-wrap">
                                        <div class="progress-bar-strip js-progress-bar-strip"></div>
                                    </div>
                                </div>
                                <!-- item 4-->
                                <div class="progress-bar-item progress-bars-wrap__item js-progress-bar-item">
                                    <!-- title-->
                                    <div class="progress-bar_header">
                                        <p class="progress-bar-item__title">Housing efficiencies</p><span class="progress-bar-strip__percent js-progress-bar-percent" data-progress-percent="90">0%</span>
                                    </div>
                                    <!-- strip-->
                                    <div class="progress-bar-item__strip-wrap">
                                        <div class="progress-bar-strip js-progress-bar-strip"></div>
                                    </div>
                                </div>
                            </div>
                            <!-- PROGRESS BARS END-->
                        </div>
                    </div>
                </div>
            </div>
        </section>
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
                                <div class="news-item_top"><a href="blogs.php">
                                        <div class="-resp-bg-img" style="background-image: url(./assets/img/blog/bg-blog-1.png);"></div></a></div>
                                <div class="news-item_bot">
                                    <h5 class="news-item_title"><a href="blogs.php">Nullam vestibulum leo et ante, vel feugiat mauris accumsan.</a></h5>
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
                                <div class="news-item_top"><a href="blogs.php">
                                        <div class="-resp-bg-img" style="background-image: url(./assets/img/blog/bg-blog-2.png);"></div></a></div>
                                <div class="news-item_bot">
                                    <h5 class="news-item_title"><a href="blogs.php">Donec augue dui, dictum sit amet auctor ut, fermentum vel mi.</a></h5>
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
                                <div class="news-item_top"><a href="blogs.php">
                                        <div class="-resp-bg-img" style="background-image: url(./assets/img/blog/bg-blog-3.png);"></div></a></div>
                                <div class="news-item_bot">
                                    <h5 class="news-item_title"><a href="blogs.php">Aenean blandit mi ac ante facilisis, quis luctus dolor posuere.</a></h5>
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
                <div class="text-center"><a class="btn btn-primary btn-md" href="blog.html">view more</a></div>
            </div>
        </section>
        <?php include_once ("./includes/bottom_section.php")?>
    </main>
    <!-- FOOTER-->
    <?php include_once ("./includes/footer/footer.php")?>

