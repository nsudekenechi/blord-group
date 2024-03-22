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
                        <a class="nav-link" href="./update-profile.php">Update Info</a>
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
            </div>
        </div>
    </div>
</div>
<!-- content @e -->

<?php
require_once "./includes/footer.php";
?>