<?php
$title = "Forgot Password";
include_once("./includes/header.php");
?>
<style>
    .animate-invalid {
        animation: shake 0.4s infinite linear;
    }

    @keyframes shake {
        0% {
            transform: translateX(0px);
        }

        50% {
            transform: translateX(25px);
        }

        100% {
            transform: translateX(0px);
        }
    }
</style>
<section id="in-faq-contact" class="in-faq-contact-section" style="padding:0px;">
    <div class="in-faq-contact-content" style="background-color: white;">
        <div class="row">
            <div class="col-lg-5 d-none d-md-block" style="padding:0px;">
                <div style="height: 100vh;">
                    <img src="https://images.pexels.com/photos/3182812/pexels-photo-3182812.jpeg" alt=""
                        style="height:100%;width:100%; object-fit:cover;">
                </div>
            </div>
            <?php
            if (!isset($_GET["page"])) {
                ?>

                <div class="col-12 col-lg-7" style="padding:0px;">
                    <div class="in-faq-contact-form-area" style="margin:0px; height:100vh;">
                        <div class="container">
                            <div class="in-faq-contact-info-title headline pera-content">
                                <h3>Forgot Password? </h3>
                                <p>Enter your email and we'll send you instructions to reset your password
                                </p>
                            </div>
                            <div class="in-faq-contact-form">
                                <form action="./handlers/add.php" method="post">
                                    <div class="row align-items-center">
                                        <div class="col-md-12">
                                            <input style="padding:30px;" type="email" name="email"
                                                placeholder="Enter Email">
                                        </div>

                                        <div class="col-12">
                                            <button type="submit" class="w-100" name="resetPassword">Reset Password</button>
                                        </div>

                                        <div class="col-12 d-flex justify-content-center py-5">
                                            <a href="./">Go back Home</a>
                                        </div>




                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>

                <?php
            } else {
                if ($_GET["page"] == "verify") {
                    ?>

                    <div class="col-12 col-lg-7" style="padding:0px;">
                        <div class="in-faq-contact-form-area" style="margin:0px; height:100vh;">
                            <div class="container">
                                <div class="in-faq-contact-info-title headline pera-content">
                                    <h3>Password Reset </h3>
                                    <p>We sent a code to your email, please enter the sent code here.
                                    </p>
                                </div>
                                <div class="in-faq-contact-form">
                                    <form action="#" method="get">
                                        <div class="row align-items-center">
                                            <div class="col-md-12">
                                                <input style="padding:30px;" type="text" name="code" placeholder="Enter Code">
                                            </div>

                                            <div class="col-12">
                                                <button type="submit" class="w-100" name="verifyCode">Verify Code</button>
                                            </div>

                                            <div class="col-12 d-flex justify-content-center py-5">
                                                <a href="./">Go back Home</a>
                                            </div>




                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>

                    <?php
                } else {
                    ?>

                    <div class="col-12 col-lg-7" style="padding:0px;">
                        <div class="in-faq-contact-form-area" style="margin:0px; height:100vh;">
                            <div class="container">
                                <div class="in-faq-contact-info-title headline pera-content">
                                    <h3>Set new password</h3>
                                    <p>To reset your password, please enter your new password below.
                                    </p>
                                </div>
                                <div class="in-faq-contact-form">
                                    <form action="#" method="get">
                                        <div class="row align-items-center">
                                            <div class="col-md-12">
                                                <input style="padding:30px;" type="password" name="password"
                                                    placeholder="Enter Password" required>
                                            </div>

                                            <div class="col-md-12">
                                                <input style="padding:30px;" type="password" name="confirmPassword"
                                                    placeholder="Confirm Password" required>
                                            </div>

                                            <div class="col-12">
                                                <button type="submit" class="w-100">Reset Password</button>
                                            </div>

                                            <div class="col-12 d-flex justify-content-center py-5">
                                                <a href="./">Go back Home</a>
                                            </div>




                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                    <script>
                        let passwords = document.querySelectorAll("[type='password']")
                        let button = document.querySelector("button");
                        button.onclick = (e) => {
                            if (passwords[0].value != passwords[1].value) {
                                passwords[1].style.outline = "1px solid red"
                                passwords[1].classList.add("animate-invalid")
                                setTimeout(() => {
                                    passwords[1].classList.remove("animate-invalid")
                                    passwords[1].style.outline = "none"
                                }, 1000)
                                e.preventDefault();
                            } else {

                            }
                        }
                    </script>
                    <?php
                }
            }
            ?>
        </div>
    </div>
</section>
<?php
require_once("./includes/footer.php");
?>