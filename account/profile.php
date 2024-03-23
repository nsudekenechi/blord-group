<?php
$title = "Profile";
require_once "./includes/header.php";
$query = "SELECT * FROM users WHERE id='$userid'";
$res = mysqli_query($conn, $query);
$row = $res->fetch_assoc();
?>
<!-- content @s -->
<div class="nk-content nk-content-lg nk-content-fluid">
    <div class="container-xl wide-lg">
        <div class="nk-content-inner">
            <div class="nk-content-body">
                <div class="nk-block-head">
                    <div class="nk-block-head-content">
                        <div class="nk-block-head-sub"><span>My Profile</span></div>
                        <h2 class="nk-block-title fw-normal">Account Info</h2>
                        <div class="nk-block-des">
                            <p>You have full control to manage your own account setting. <span class="text-primary"><em
                                        class="icon ni ni-info"></em></span></p>
                        </div>
                    </div>
                </div>
                <ul class="nk-nav nav nav-tabs">
                    <li class="nav-item">
                        <a class="nav-link" href="./profile.php">Personal</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="./profile.php?page=update">Update Info</a>
                    </li>
                    <!-- <li class="nav-item">
                        <a class="nav-link" href="profile-setting.php">Security<span class="d-none s-sm-inline">
                                Setting</span></a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="html/invest/profile-notify.html">Notifications</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="html/invest/profile-connected.html">Connect Social</a>
                    </li> -->
                </ul><!-- .nav-tabs -->
                <?php
                if (!isset ($_GET["page"])) {
                    ?>
                    <div class="nk-block">
                        <div class="nk-block-head">
                            <div class="nk-block-head-content">
                                <h5 class="nk-block-title">Personal Information</h5>
                                <div class="nk-block-des">
                                    <p>Basic info, like your name and address, that you use on Fundflex.</p>
                                </div>
                            </div>
                        </div><!-- .nk-block-head -->
                        <div class="card card-bordered">
                            <div class="nk-data data-list">
                                <a href="./update-profile.php" class="data-item">
                                    <div class="data-col">
                                        <span class="data-label">Full Name</span>
                                        <span class="data-value">
                                            <?= $row['fullname']; ?>
                                        </span>
                                    </div>
                                    <div class="data-col data-col-end"><span class="data-more"><em
                                                class="icon ni ni-forward-ios"></em></span></div>
                                </a>
                                <div class="data-item">
                                    <div class="data-col">
                                        <span class="data-label">Username</span>
                                        <span class="data-value">
                                            <?= $row['username']; ?>
                                        </span>
                                    </div>
                                    <div class="data-col data-col-end"><span class="data-more disable"><em
                                                class="icon ni ni-lock-alt"></em></span></div>
                                </div>
                                <div class="data-item">
                                    <div class="data-col">
                                        <span class="data-label">Email</span>
                                        <span class="data-value">
                                            <?= $row['email']; ?>
                                        </span>
                                    </div>
                                    <div class="data-col data-col-end"><span class="data-more disable"><em
                                                class="icon ni ni-lock-alt"></em></span></div>
                                </div>

                            </div><!-- .nk-data -->
                        </div><!-- .card -->
                        <!-- Another Section -->

                    </div>
                    <?php
                } else {
                    switch ($_GET["page"]) {
                        case "update":
                            ?>
                            <!-- content @s -->
                            <div class="nk-content nk-content-lg nk-content-fluid">
                                <div class="container-xl wide-lg">
                                    <div class="nk-content-inner">
                                        <div class="nk-content-body">
                                            <div class="nk-block">
                                                <div class="nk-block-head">
                                                    <div class="nk-block-head-content">
                                                        <h5 class="nk-block-title">Update Profile</h5>
                                                        <div class="nk-block-des">
                                                            <p>Update your personal information here on fundflex</p>
                                                        </div>
                                                    </div>
                                                </div><!-- .nk-block-head -->

                                                <form action="./handlers/update.php" method="POST">
                                                    <div class="card card-bordered">
                                                        <div class="card-inner-group">
                                                            <div class="card-inner">
                                                                <div class="">
                                                                    <div class="nk-block-text">
                                                                        <h6>Full name</h6>
                                                                        <div class="form-control-group">

                                                                            <input type="text"
                                                                                class="form-control form-control-amount form-control-lg "
                                                                                id="custom-amount" name="fullName"
                                                                                value="<?= $row['fullname']; ?>">

                                                                        </div>
                                                                    </div>

                                                                </div>
                                                            </div><!-- .card-inner -->
                                                            <div class="card-inner">
                                                                <div class="between-center flex-wrap flex-md-nowrap g-3">
                                                                    <div class="nk-block-text">
                                                                        <h6>Change Password</h6>
                                                                        <p>Set a unique password to protect your account.</p>
                                                                    </div>

                                                                </div>
                                                                <div class="row pt-2">
                                                                    <div class="form-control-group col-lg-6">
                                                                        <input type="password"
                                                                            class="form-control form-control-amount form-control-lg "
                                                                            name="oldPassword" placeholder="Old Password">
                                                                        <p id="err" style="color: red;" class="mt-2"></p>
                                                                    </div>

                                                                    <div class="form-control-group col-lg-6">

                                                                        <input type="password"
                                                                            class="form-control form-control-amount form-control-lg "
                                                                            name="newPassword" placeholder="New Password">



                                                                    </div>
                                                                </div>
                                                            </div><!-- .card-inner -->

                                                        </div><!-- .card-inner-group -->
                                                    </div><!-- .card -->
                                                    <button type="submit" class="btn btn-primary text-center mt-4"
                                                        name="updateProfile">Update
                                                        Profile</button>
                                                </form>
                                            </div><!-- .nk-block -->
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- content @e -->
                            <script>
                                let oldPassword = document.querySelector("[name='oldPassword']");
                                let newPassword = document.querySelector("[name='newPassword']");
                                let button = document.querySelector("button");
                                let err = document.querySelector("#err")
                                let form = document.querySelector("form");
                                // Making request to see if entered password matches db hashed password
                                oldPassword.onblur = () => {
                                    if (oldPassword.value != "") {
                                        fetch(`./handlers/update.php?verifyOldPassword=${oldPassword.value}`).then(res => res.text()).then(res => {
                                            if (res) {
                                                button.disabled = false;
                                                err.style.color = "green";
                                                err.innerHTML = "Password Correct!"
                                                newPassword.disabled = false;
                                                newPassword.required = true;
                                            } else {
                                                button.disabled = true;
                                                err.style.color = "red";
                                                err.innerHTML = "Incorrect Password!"
                                                newPassword.disabled = true;
                                                newPassword.required = false;
                                            }

                                        })
                                    } else {
                                        button.disabled = false;
                                        newPassword.disabled = false;
                                        err.innerHTML = ""
                                    }
                                }

                                form.onsubmit = (e) => {
                                    let empty = true;
                                    document.querySelectorAll("input").forEach(input => {
                                        if (input.value != "") {
                                            empty = false;
                                        }
                                    })
                                    if (empty) {
                                        e.preventDefault();
                                    }
                                }
                            </script>
                        <?php

                    }
                }
                ?>
            </div>
        </div>
    </div>
</div>
<!-- content @e -->

<?php
require_once "./includes/footer.php";
?>
<script>
    const links = document.querySelectorAll(".nav-tabs .nav-link")
    links.forEach(link => {
        if (link.href == location.href) {
            link.parentElement.classList.add("hi")
        } else {
            console.log(link.parentElement)
            link.parentElement.className = ""
            link.parentElement.classList.add("nav-item")
        }
    })
</script>