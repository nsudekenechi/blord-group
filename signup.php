<?php
$title = "Sign up";
include_once("./includes/header.php");
?>

<section id="in-faq-contact" class="in-faq-contact-section" style="padding:0px;">
    <div class="in-faq-contact-content" style="background-color: white;">
        <div class="row">
            <div class="col-lg-5 d-none d-md-block" style="padding:0px;">
                <div style="height: 100%;">
                    <img src="https://images.pexels.com/photos/1181527/pexels-photo-1181527.jpeg" alt=""
                        style="height:100%;width:100%; object-fit:cover;">
                </div>
            </div>
            <div class="col-12 col-lg-7" style="padding:0px;">
                <div class="in-faq-contact-form-area" style="margin:0px; height:100%;">
                    <div class="container">
                        <div class="in-faq-contact-info-title headline pera-content">
                            <h3>Sign Up </h3>
                            <p>Get started with Fundflex by creating an account 
                            </p>
                        </div>
                        <div class="in-faq-contact-form">
                            <form action="#" method="get">
                                <div class="row align-items-center">
                                    <div class="col-md-12">
                                        <input style="padding:30px;"type="text" name="fullname" placeholder="Enter Fullname">
                                    </div>
                                    <div class="col-md-12">
                                        <input style="padding:30px;"type="text" name="username" placeholder="Enter Username">
                                    </div>
                                    <div class="col-md-12">
                                        <input style="padding:30px;"type="text" name="email" placeholder="Enter Email">
                                    </div>
                                    <div class="col-md-6">
                                        <input style="padding:30px;"type="password" name="password" placeholder="Enter Password">
                                    </div>

                                    <div class="col-md-6">
                                        <input style="padding:30px;"type="password" name="confirmPassword" placeholder="Confirm Password">
                                    </div>
                                    <div class="col-12 ">
                                        <button type="submit" class="w-100">Sign Up</button>
                                    </div>

                                   
                                    <div class="col-md-12 d-flex justify-content-center my-5">
                                   Already a member?  <a href="./login.php" class="in-text-gradiant mx-2">Login here</a>
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