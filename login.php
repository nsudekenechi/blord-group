<?php
$title = "Login";
include_once("./includes/header.php");
?>

<section id="in-faq-contact" class="in-faq-contact-section" style="padding:0px;">
    <div class="in-faq-contact-content" style="background-color: white;">
        <div class="row">
            <div class="col-lg-5 d-none d-md-block" style="padding:0px;">
                <div style="height: 100vh;">
                    <img src="https://images.pexels.com/photos/1595388/pexels-photo-1595388.jpeg" alt=""
                        style="height:100%;width:100%; object-fit:cover;">
                </div>
            </div>
            <div class="col-12 col-lg-7" style="padding:0px;">
                <div class="in-faq-contact-form-area" style="margin:0px; height:100vh;">
                    <div class="container">
                        <div class="in-faq-contact-info-title headline pera-content">
                            <h3>Log in to continue </h3>
                            <p>Enter your correct details to continue with Fundflex
                            </p>
                        </div>
                        <div class="in-faq-contact-form">
                            <form action="#" method="get">
                                <div class="row align-items-center">
                                    <div class="col-md-12">
                                        <input style="padding:30px;"type="text" name="username" placeholder="Enter Username or Email">
                                    </div>
                                    <div class="col-md-12">
                                        <input style="padding:30px;"type="password" name="password" placeholder="Enter Password">
                                    </div>
                                    <div class="col-12 col-md-6">
                                        <button type="submit" class="w-100">Login</button>
                                    </div>

                                    <div class="col-md-6 d-md-flex justify-content-end mt-3">
                                       <a href="./forgotpassword.php">Forgot Password</a>
                                    </div>

                                    <div class="col-md-12 d-flex justify-content-center my-5">
                                    Don't have an account?  <a href="./signup.php" class="in-text-gradiant mx-2">Sign up here</a>
                                    </div>
                                    <div>
                                        
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<?php
require_once("./includes/footer.php");
?>