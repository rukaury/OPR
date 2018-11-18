<?php
/**
 * Login or Register page.
 * Creator: Aury
 * Date: 2018-11-10
 * Time: 17:25
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
include_once("./includes/header/header.php");?>

<main class="main">
    <div class="breadcrumb-wrap">
        <div class="container">
            <nav aria-label="breadcrumb">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="/">Home</a></li>
                    <li class="breadcrumb-item active" aria-current="page">Login or Register</li>
                </ol>
            </nav>
        </div>
    </div>

    <section class="section section-catalog pb-50">
        <div class="container">
            <?php
            // Login Implementation
            if(isset($_POST["login-email"]) and isset($_POST["login-pass"])){
                $email = $_POST["login-email"];
                $password = $_POST["login-pass"];
                $url = $apiUrl .  "/auth/login/" . $email . "/" . $password;
                $response = authenticate($url);
                if($response == ''){
                    print "<div class='flat-card red-back'><p>Sorry but the <strong>credentials</strong> you 
provided does
 not 
match our records. </p></div>";
                }else{
                    $_SESSION['uid'] = $response['uid'];
                    $_SESSION['is_owner'] = $response['isOwner'];
                    header("Location: /cryb");
                }
            }
            ?>


            <?php
            // Register Implementation
            if(isset($_POST["register-email"]) and isset($_POST["register-username"])){
                $username = $_POST["register-username"];
                $email = $_POST["register-email"];
                $url = $apiUrl .  "/auth/username/" . $username;
                $response = authenticate($url);
                if($response == 1){
                    print "<div class='flat-card red-back'><p>Sorry but the <strong>username</strong> you 
provided already exist in our records. Pick a new one!</p></div>";
                }else{
                    $url = $apiUrl .  "/auth/email/" . $email;
                    $response = authenticate($url);
                    if($response == 1){
                        print "<div class='flat-card red-back'><p>Sorry but the <strong>email</strong> you 
provided already exist in our records.</p></div>";
                    }
                }
                $fName = isset($_POST["register-fName"]) ? $_POST["register-fName"] : "";
                $lName = isset($_POST["register-lName"]) ? $_POST["register-lName"] : "";
                $confEmail = isset($_POST["register-conf-email"]) ? $_POST["register-conf-email"] : "";
                $phone = isset($_POST["register-phone"]) ? $_POST["register-phone"] : "";
                $pass = isset($_POST["register-pass"]) ? $_POST["register-pass"] : "";
                $confPass = isset($_POST["register-conf-pass"]) ? $_POST["register-conf-pass"] : "";
                $accountType = isset($_POST["register-accType"]) and  $_POST["register-accType"]
                == "owner" ? 1 : 0;
                $url = $apiUrl . "/customers";
                $data_array =  array(
                    "customer"         => array(
                        "first_name"         => $fName,
                        "last_name"        => $lName,
                        "email"        => $email,
                        "sex"        => "NULL",
                        "isOwner"        => $accountType,
                        "username"        => $username,
                        "pass"         => $pass
                    ),
                );

                $url = $apiUrl .  "/customers";
                $make_call = callAPI('POST', $url, json_encode($data_array));
                $response = json_decode($make_call, true);

                if($response == ""){
                    print "<div class='flat-card red-back'><p>Sorry an error has occurred on our end! Try again or <a href ='contact.php'> contact us!</a> </p></div>";
                }elseif(is_int((int)$response)){
                    $_SESSION['uid'] = (int)$response;
                    $_SESSION['is_owner'] = $accountType;
                    header("Location: /cryb");
                }

            }
            ?>

            <!-- Login Form -->

            <h2 class="text-center mb-30">Log In / Register</h2>
            <!-- SHUFFLE FILTER-->
            <ul class="nav filter-nav" id="myTab" role="tablist">
                <li class="nav-item"><a class="nav-link js-no-scroll active" id="login_tab" data-toggle="tab" href="#login" role="tab" aria-controls="login" aria-selected="true">Login</a></li>
                <li class="nav-item"><a class="nav-link js-no-scroll" id="register_tab" data-toggle="tab" href="#register" role="tab" aria-controls="register" aria-selected="false">Register</a></li>
            </ul>
            <div class="tab-content" id="myTabContent">
                <div class="tab-pane fade show active" id="login" role="tabpanel" aria-labelledby="login_tab">
                    <div class="filter-content">
                        <div class="row">
                            <div class="col-lg-6">
                                <form class="comment-form" role="form" method="post" action=""
                                      id="login-form" name="login-form">
                                    <div class="form-group mb-30">
                                        <label>Email</label>
                                        <input name="login-email" class="form-control" type="email"
                                               placeholder="Type your email *" required>
                                    </div>
                                    <div class="form-group mb-30">
                                        <label>Password</label>
                                        <input name="login-pass" class="form-control"
                                               type="password"
                                                placeholder="Type your password *" required>
                                    </div>
                                    <div class="form-group mb-30">
                                        <p>Don't have an account? <a href="#register">Register here!</a></p>
                                    </div>
                                    <input class="btn btn-primary btn-md" type="submit" value="Login">
                                </form>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Register Form -->

                <div class="tab-pane fade" id="register" role="tabpanel" aria-labelledby="register_tab">
                    <div class="filter-content">
                        <div class="row">
                            <div class="col-lg-6">
                                <form class="comment-form" method="post" action=""
                                      id="register-form" name="register-form">
                                    <div class="row">
                                        <div class="col-lg-6 form-group mb-30">
                                            <label>First Name *</label>
                                            <input name="register-fName" class="form-control"
                                                   type="text"
                                                   placeholder="Type your first name" required>
                                        </div>
                                        <div class="col-lg-6 form-group mb-30">
                                            <label>Last Name *</label>
                                            <input name="register-lName" class="form-control"
                                                   type="text"
                                                    placeholder="Type your last name" required>
                                        </div>
                                    </div>
                                    <div class="form-group mb-30">
                                        <label>Username *</label>
                                        <input name="register-username" class="form-control"
                                               type="text"
                                               placeholder="Choose a username"
                                               required>
                                    </div>
                                    <div class="form-group mb-30">
                                        <label>Email *</label>
                                        <input name="register-email" class="form-control"
                                               type="email" placeholder="Type your email" required>
                                    </div>
                                    <div class="form-group mb-30">
                                        <label>Confirm Email *</label>
                                        <input name="register-conf-email" class="form-control"
                                               type="email" placeholder="Confirm your email" required>
                                    </div>
                                    <div class="form-group mb-30">
                                        <label>Phone number (Optional)</label>
                                        <input name="register-phone" class="form-control"
                                               type="number" placeholder="Type your phone number">
                                    </div>
                                    <div class="form-group mb-30">
                                        <label>Password *</label>
                                        <input name="register-pass" class="form-control"
                                               type="password" placeholder="Type your password" required>
                                    </div>
                                    <div class="form-group mb-30">
                                        <label>Confirm Password *</label>
                                        <input name="register-conf-pass" class="form-control"
                                               type="password" placeholder="Confirm your password" required>
                                    </div>
                                    <div class="form-group">
                                        <label>Account Type *</label>
                                        <select name="register-accType" class="js-select2" required>
                                            <option value="owner">Landlord</option>
                                            <option value="tenant">Tenant</option>
                                        </select>
                                    </div>
                                    <div class="form-group mb-30">
                                        <p>Have an account? <a href="#login">Login here!</a></p>
                                    </div>
                                    <input class="btn btn-primary btn-md" type="submit"
                                           value="Register">
                                </form>
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

