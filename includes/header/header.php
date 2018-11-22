<?php
/**
 * Page header.
 * Creator: Aury
 * Date: 2018-11-10
 * Time: 15:46
 */

/*
 * This file should be used to display the header on every page.
 * This files also contains all the calls to the stylesheets (css) files used for the webpage
 * Different methods could be used to references it, for now we are using the method include_once
 * ($filename).
 *
 * For further understanding take a loot at: http://php.net/manual/en/function.include-once.php
 *
 * @var string $pageName
 *
 * The variable should be used to find which page we are currently viewing on the screen and
 * have the navigation bar in the header have a green box around the current page.
 *
 * The variable gets the name of the page using a php function basename().
 *
 * For further understanding take a look at: http://php.net/manual/en/function.basename.php
 *
 * @var int $uid
 * @var int $isOwner
 *
 * These two variables should be used to keep track of the user is a landlord or customer and
 * his/her id if he/she is logged in. We currently use sessions to keep track of it.
 *
 * For further understanding take a look at: http://php.net/manual/en/book.session.php
 *
 *
 */
$pageName = basename($_SERVER['PHP_SELF']);
session_start(); // start the session
$uid = 0;
$isOwner = 0;
if(array_key_exists('uid', $_SESSION)){
    $uid = (int)$_SESSION['uid'];
}
if(array_key_exists('is_owner', $_SESSION)){
    $isOwner = (int)$_SESSION['is_owner'];
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <title>Cryb</title>
    <meta name="description" content="Description of the site">
    <meta charset="UTF-8">
    <meta name="format-detection" content="telephone=no">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=yes, maximum-scale=1">
    <!-- connection FAVICONS-->
    <link rel="icon" href="/assets/img/logo.png">
    <link rel="apple-touch-icon" sizes="180x180" href="assets/img/favicon/apple-touch-icon-180x180.png">
    <!-- THE BACKGROUND OF THE STATUS-BAR (ON MOBILE)-->
    <meta name="theme-color" content="#000">
    <!-- connection GOOGLE FONTS-->
    <link href="https://fonts.googleapis.com/css?family=Montserrat:400,500,600,700" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Nunito+Sans:300,400,600,700" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=PT+Serif:700i&amp;amp;subset=cyrillic" rel="stylesheet">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <!-- connection CSS-->
    <link class="js-color-css" rel="stylesheet" href="./assets/css/all.css">
</head>

<body>
<div class="wrap-for-sticky js-wrap-for-sticky">
    <!-- HEADER-->
    <header class="header js-header">
        <div class="container">
            <nav class="navbar navbar-expand-lg"><h1 class="font-weight-bold" style="font-size:30px;"><a class="navbar-brand" href="index.php">Cryb</a></h1>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#header_navbar" aria-controls="header_navbar" aria-expanded="false" aria-label="Toggle navigation"><span class="hamburger hamburger--elastic js-hamburger"><span class="hamburger-box"><span class="hamburger-inner"></span></span></span></button>
                <div class="collapse navbar-collapse" id="header_navbar">
                    <ul class="navbar-nav ml-auto">
                        <li class="nav-item"><a class="nav-link <?php print $pageName == "index.php" ? "active" : "" ?>" href="index.php">Home</a></li>
                        <li class="nav-item"><a class="nav-link <?php print $pageName == "properties.php" ? "active" : "" ?>" href="properties.php">properties</a></li>
                        <!-- <li class="nav-item"><a class="nav-link <?php print $pageName == "agencies.php" ? "active" : "" ?>" href="/cryb/agencies
                        .php">Agencies</a></li> -->
                        <li class="nav-item"><a class="nav-link <?php print $pageName == "about.php" ? "active" : "" ?>" href="about.php">about</a></li>
                        <li class="nav-item"><a class="nav-link <?php print $pageName == "blogs.php" ? "active" : "" ?>" href="blogs.php">Blog</a></li>
                        <li class="nav-item"><a class="nav-link <?php print $pageName == "contact.php" ? "active" : "" ?>" href="contact.php">contact</a></li>
                        <?php if($uid != 0): ?><li class="nav-item"><a class="nav-link <?php print
                                $pageName == "account.php" ? "active" : "" ?>" href="account.php">Account</a></li>
                        <?php endif; ?>
                    </ul>
                    <?php if($uid != 0): ?>
                        <p class="nav-item"><a class="nav-link" href="logout.php">Logout</a></p>
                    <?php else: ?>
                        <div class="text-center"><a class="btn btn-md btn-primary" href="login.php">Login / Sign Up</a></div>
                    <?php endif; ?>
                </div>
            </nav>
        </div>
    </header>
    <!-- HEADER END-->

