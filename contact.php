<?php
/**
 * Contact page.
 * Creator: Aury
 * Date: 2018-11-10
 * Time: 16:53
 */

/*
 *
 * This file represents the CONTACT view page. It should be able to display all the necessary
 * information of the contact page (landing page).
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
                        <li class="breadcrumb-item active" aria-current="page">Contact us</li>
                    </ol>
                </nav>
            </div>
        </div>
        <section class="section section-contact pd-100 pt-0">
            <div class="container">
                <div class="contacts-map">
                    <div class="map" id="js-search-map"></div>
                </div>
                <div class="row">
                    <div class="col-lg-4">
                        <h3 class="mb-30">Contact Info:</h3>
                        <div class="descr-block fz-16 mb-30">
                            <p>To give give beginning divide, cattle. Give moving won't, there the abundantly she'd she'd brought air upon. Light hath subdue. Life days creature upon first heaven gathering dry.</p>
                        </div>
                        <ul class="website-info">
                            <li><span class="title">Address:</span><span class="descr">801 King Edward Ave, Ottawa, ON K1N 6N5</span></li>
                            <li><span class="title">Phone:</span><a class="descr" href="tel:+1800-222-2792">+1 800-222-CRYB (2792)</a></li>
                            <li><span class="title">Email:</span><a class="descr" href="javascript:void(0);">contact.cryb@cryb.ca</a></li>
                            <li><span class="title">Fax:</span><a class="descr" href="javascript:void(0);">+1 800-260-CRYB (2792)</a></li>
                        </ul>
                    </div>
                    <div class="col-lg-7 offset-lg-1">
                        <form class="comment-form" action="javascript:void(0);">
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group mb-30">
                                        <label>Name</label>
                                        <input class="form-control" type="text" placeholder="Name*" required>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group mb-30">
                                        <label>Email</label>
                                        <input class="form-control" type="email" placeholder="Email*" required>
                                    </div>
                                </div>
                                <div class="col-md-12">
                                    <div class="form-group mb-30">
                                        <label>Customer Type *</label>
                                        <select class="js-select2">
                                            <option value="null">Pick a customer type</option>
                                            <option value="owner">Rental Owner</option>
                                            <option value="customer">Rental Customer</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="col-md-12">
                                    <div class="form-group mb-30">
                                        <label>Message</label>
                                        <textarea class="form-control -height_170" placeholder="Don't be shy, express yourself!" required></textarea>
                                    </div>
                                </div>
                            </div>
                            <input class="btn btn-primary btn-md" type="submit" value="send message">
                        </form>
                    </div>
                </div>
            </div>
        </section>
        <?php include_once ("./includes/bottom_section.php")?>
    </main>
    <!-- Footer -->
    <?php include_once("./includes/footer/footer.php")?>

