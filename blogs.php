<?php
/**
 * Blogs page.
 * Creator: Aury
 * Date: 2018-11-10
 * Time: 17:12
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
                        <li class="breadcrumb-item active" aria-current="page">Blogs</li>
                    </ol>
                </nav>
            </div>
        </div>
        <section class="section pd-100 pt-70 bg-secondary brd-t brd-b">
            <div class="container">
                <!-- SHUFFLE FILTER-->
                <h1 class="h2 text-center mb-30">Latest News</h1>
                <div class="js-filter-container">
                    <!-- shuffle navigation-->
                    <ul class="nav filter-nav -style_2">
                        <li class="nav-item"><a class="nav-link js-no-scroll active" href="javascript:void(0);" data-group="all">All</a></li>
                        <li class="nav-item"><a class="nav-link js-no-scroll" href="javascript:void(0);" data-group="students">Students</a></li>
                        <li class="nav-item"><a class="nav-link js-no-scroll" href="javascript:void(0);" data-group="profesionals">Profesionals</a></li>
                        <li class="nav-item"><a class="nav-link js-no-scroll" href="javascript:void(0);" data-group="our_team">Our team</a></li>
                    </ul>
                    <!-- shuffle navigation END-->
                    <!-- shuffle content-->
                    <div class="row filter-content">
                        <div class="col-lg-4 col-md-6 d-flex" data-groups="[&quot;students&quot;]">
                            <div class="news-item">
                                <div class="news-item_top"><a href="blog.php">
                                        <div class="-resp-bg-img" style="background-image: url(./assets/img/blog/bg-blog-1.png);"></div></a></div>
                                <div class="news-item_bot">
                                    <h5 class="news-item_title"><a href="blog.php">Nullam vestibulum leo et ante, vel feugiat mauris accumsan.</a></h5>
                                    <div class="news-item_info">
                                        <div class="news-item_info_item"><a href="javascript:void(0);">students</a></div><span class="sep">/</span>
                                        <div class="news-item_info_item">12.04.2018</div>
                                    </div>
                                    <div class="news-item_descr">
                                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Proin pretium magna ac placerat interdum.</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-6 d-flex" data-groups="[&quot;profesionals&quot;]">
                            <div class="news-item">
                                <div class="news-item_top"><a href="blog.php">
                                        <div class="-resp-bg-img" style="background-image: url(./assets/img/blog/bg-blog-2.png);"></div></a></div>
                                <div class="news-item_bot">
                                    <h5 class="news-item_title"><a href="blog.php">Donec aue dui, dictum sit amet auctor ut, fermentum vel mi.</a></h5>
                                    <div class="news-item_info">
                                        <div class="news-item_info_item"><a href="javascript:void(0);">profesionals</a></div><span class="sep">/</span>
                                        <div class="news-item_info_item">9.04.2018</div>
                                    </div>
                                    <div class="news-item_descr">
                                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Proin pretium magna ac placerat interdum.</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-6 d-flex" data-groups="[&quot;our_team&quot;]">
                            <div class="news-item">
                                <div class="news-item_top"><a href="blog.php">
                                        <div class="-resp-bg-img" style="background-image: url(./assets/img/blog/bg-blog-3.png);"></div></a></div>
                                <div class="news-item_bot">
                                    <h5 class="news-item_title"><a href="blog.php">Aenean bldit mi ac ante facilisis, quis luctus dolor posuere.</a></h5>
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
                        <div class="col-lg-4 col-md-6 d-flex" data-groups="[&quot;our_team&quot;]">
                            <div class="news-item">
                                <div class="news-item_top"><a href="blog.php">
                                        <div class="-resp-bg-img" style="background-image: url(./assets/img/blog/bg-blog-4.png);"></div></a></div>
                                <div class="news-item_bot">
                                    <h5 class="news-item_title"><a href="blog.php">Praesent feugiat nisi justo pulvinar euismod volutpat sapien.</a></h5>
                                    <div class="news-item_info">
                                        <div class="news-item_info_item"><a href="javascript:void(0);">our team</a></div><span class="sep">/</span>
                                        <div class="news-item_info_item">12.04.2018</div>
                                    </div>
                                    <div class="news-item_descr">
                                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Proin pretium magna ac placerat interdum.</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-6 d-flex" data-groups="[&quot;profesionals&quot;]">
                            <div class="news-item">
                                <div class="news-item_top"><a href="blog.php">
                                        <div class="-resp-bg-img" style="background-image: url(./assets/img/blog/bg-blog-5.png);"></div></a></div>
                                <div class="news-item_bot">
                                    <h5 class="news-item_title"><a href="blog.php">Quisque hendrerit, eros ut placerat fermentum, metus turpis.</a></h5>
                                    <div class="news-item_info">
                                        <div class="news-item_info_item"><a href="javascript:void(0);">profesionals</a></div><span class="sep">/</span>
                                        <div class="news-item_info_item">9.04.2018</div>
                                    </div>
                                    <div class="news-item_descr">
                                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Proin pretium magna ac placerat interdum.</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-6 d-flex" data-groups="[&quot;profesionals&quot;]">
                            <div class="news-item">
                                <div class="news-item_top"><a href="blog.php">
                                        <div class="-resp-bg-img" style="background-image: url(./assets/img/blog/bg-blog-6.png);"></div></a></div>
                                <div class="news-item_bot">
                                    <h5 class="news-item_title"><a href="blog.php">Suspendisse efficitur diam ultrices finibus, mauris eu accumsan.</a></h5>
                                    <div class="news-item_info">
                                        <div class="news-item_info_item"><a href="javascript:void(0);">profesionals</a></div><span class="sep">/</span>
                                        <div class="news-item_info_item">12.04.2018</div>
                                    </div>
                                    <div class="news-item_descr">
                                        <p>Mauris et rhoncus arcu, sit amet enim. Pellentesque habitant tristique senectus et netus et malesuada fames.</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- shuffle content END-->
                </div>
                <div class="text-center"><a class="btn btn-md btn-primary" href="javascript:void(0);">load more</a></div>
            </div>
        </section>
        <?php include_once ("./includes/bottom_section.php")?>
    </main>

    <?php include_once("./includes/footer/footer.php")?>

