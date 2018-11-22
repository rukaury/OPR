<?php

/*
* This file should be used to display the agency sidebar on selected pages.
* Different methods could be used to references it, for now we are using the method include_once
* ($filename).
*
* For further understanding take a loot at: http://php.net/manual/en/function.include-once.php
*/

?>

<div class="agenecy-sidebar mb-30">
    <div class="agenecy-sidebar_top">
        <div class="agenecy-sidebar_top_img">
            <div class="-resp-bg-img" style="background-image: url(
            ../assets/img/bg/bg-sidebar-agency.png);"></div>
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
