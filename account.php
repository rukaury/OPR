<?php
/**
 * Created by PhpStorm.
 * User: rukau
 * Date: 2018-11-17
 * Time: 16:46
 */

/*
* This file represents the ACCOUNT view page. It should be able to display all the necessary information
 *  of the account page (landing page).
 *
 * @var string $host
 *
 * The variable should be used to determine which domain where running on, in order to call the
 * API on the same domain. We currently accept only two domains:
 *
 * rukazana.com: Production Server
 * localhost:8040: Local Development server
 *
 * @var string $apiUrl
 *
 * The variable should be used to get the first static part of the API URL (eg:
 * {{domain}}/crybAPI):
 *
 * @var string $get_data
 *
 * The variable should be used to get the user's account information retrieved from the API
 *
 * @var array $response
 *
 * The variable should be used to save the users data saved in $get_data in a JSON format
 *
 * @var JSON $customerData
 *
 * The variable should be equal to the $response variable. We use this variable to make sure we
 * do not modify the $response data.
 *
 * @var string $fName
 * @var string $lName
 * @var string $email
 * @var string $sex
 * @var string $pass
 * @var string $username
 * @var string $phone
 *
 * These variables should be used to save every single user information such their name, sex,
 * email, ...
 *
*/
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
include_once("./includes/apiFunctions/auth.php");
include_once("./includes/apiFunctions/callAPI.php");
include_once("./includes/header/header.php");

$get_data = callAPI('GET', $apiUrl . '/customers/' . $uid, false);
$response = json_decode($get_data, true);
$customerData = $response;

$fName = $customerData[0]["first_name"];
$lName = $customerData[0]["last_name"];
$email = $customerData[0]["email"];
$sex = $customerData[0]["sex"];
$pass = $customerData[0]["pass"];
$username = $customerData[0]["username"];
$phone = "NULL";
?>
    <main class="main">
        <div class="breadcrumb-wrap">
            <div class="container">
                <nav aria-label="breadcrumb">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="/">Home</a></li>
                        <li class="breadcrumb-item active" aria-current="page">My Account</li>
                        <li class="breadcrumb-item active"><?php echo $username ?></li>
                    </ol>
                </nav>
            </div>
        </div>

        <section class="section section-catalog pb-50">
            <div class="container">
                <div class="row">
                    <div class="col-lg-10 mrgn-bttm-md"><h1><?php echo $username ?></h1></div>
                </div>

                <div class="row">
                    <div class="col-lg-3"><!--left col-->

                        <div>
                            <img src="http://ssl.gstatic.com/accounts/ui/avatar_2x.png" class="avatar img-circle img-thumbnail" alt="avatar">
                            <h6 class="mrgn-bttm-md">Upload a different photo...</h6>
                            <input type="file" class="center-block
                            file-upload">
                        </div></hr><br>


                        <div class="flat-card">
                            <h4 style="background-color: #00bd74;
                            color:white">Website <i class="fa fa-link
                            fa-1x"></i></h4>
                            <div class="flat-card_info mrgn-tp-md"><a href="http://google
                            .com">website.com</a></div>
                        </div>



                        <ul class="flat-card">
                            <h4 style="background-color: #00bd74;
                        color:white" class="text-right"><span class="pull-left">Activity</span><i
                                    class="fas fa-chart-line fa-1x"></i> </h4>
                            <li class="list-group-item text-right"><span
                                    class="pull-left"><strong> Comments</strong></span> 125</li>
                            <li class="list-group-item text-right"><span
                                    class="pull-left"><strong> Likes</strong></span> 13</li>
                            <li class="list-group-item text-right"><span
                                    class="pull-left"><strong> Posts</strong></span> 37</li>
                            <li class="list-group-item text-right"><span
                                    class="pull-left"><strong> Owns</strong></span> 1</li>
                        </ul>


                        <div class="flat-card">
                            <h4 style="background-color: #00bd74;
                            color:white">Social Media</h4>
                            <div class="flat-card_info mrgn-tp-md">
                                <div class="flat-card_info_item"><i class="fab fa-facebook-square
                                fa-2x"></i></div>
                                <div class="flat-card_info_item"><i class="fab fa-linkedin
                                fa-2x"></i></div>
                                <div class="flat-card_info_item"><i class="fab fa-twitter-square
                                fa-2x"></i></div>
                                <div class="flat-card_info_item"><i class="fab fa-google-plus
                                fa-2x"></i></div>
                                <div class="flat-card_info_item"><i class="fab fa-instagram"></i></div>
                            </div>
                        </div>

                    </div><!--/col-3-->

                    <div class="col-lg-9">
                        <form class="form" action="##" method="post" id="registrationForm">
                            <div class="row">
                                <div class="col-lg-6 form-group">
                                    <label for="first_name"><h4>First name</h4></label>
                                    <input type="text" class="form-control"
                                           name="first_name" id="first_name"
                                           value="<?php echo $fName ?>" title="enter your first name if any.">
                                </div>

                                <div class="col-lg-6 form-group">
                                    <label for="last_name"><h4>Last name</h4></label>
                                    <input type="text" class="form-control"
                                           name="last_name" id="last_name"
                                           value="<?php echo $lName ?>" title="enter your last name if any.">
                                </div>
                            </div>

                            <div class="form-group">

                                <div class="col-xs-6">
                                    <label for="phone"><h4>Phone</h4></label>
                                    <input type="text" class="form-control" name="phone"
                                           id="phone" value="<?php echo $phone ?>"
                                           title="enter your phone number if any.">
                                </div>
                            </div>

                            <div class="form-group">

                                <div class="col-xs-6">
                                    <label for="email"><h4>Email</h4></label>
                                    <input type="email" class="form-control" name="email"
                                           id="email" value="<?php echo $email ?>" title="enter your email.">
                                </div>
                            </div>

                            <div class="form-group">
                                <div class="col-xs-6">
                                    <label for="password"><h4>Password</h4></label>
                                    <input type="password" class="form-control"
                                           name="password" id="password"
                                           value="<?php echo $pass ?>"
                                           title="enter your password.">
                                </div>
                            </div>

                            <div class="form-group">
                                <label for="account_type">Account Type</label>
                                <select name="account_type" id="account_type" class="js-select2" required>
                                    <?php if($isOwner == 1):?>
                                        <option value="owner">Landlord</option>
                                        <option value="tenant">Tenant</option>
                                    <?php else:?>
                                        <option value="tenant">Tenant</option>
                                        <option value="owner">Landlord</option>
                                    <?php endif;?>
                                </select>
                            </div>
                            <!--
                            <div class="form-group">
                                <div class="col-xs-6">
                                    <label for="password2"><h4>Verify</h4></label>
                                    <input type="password" class="form-control" name="password2" id="password2" value="password2" title="enter your password2.">
                                </div>
                            </div>
                            -->
                            <div class="form-group">
                                <div class="col-xs-12">
                                    <br>
                                    <button class="btn btn-md btn-primary" type="submit"><i class="glyphicon glyphicon-ok-sign"></i> Save</button>
                                    <button class="btn btn-lg" type="reset"><i class="glyphicon glyphicon-repeat"></i> Reset</button>
                                </div>
                            </div>
                        </form>
                </div>
            </div>
        </section>

<?php include_once ("./includes/bottom_section.php")?>
    </main>
<?php include_once("./includes/footer/footer.php")?>