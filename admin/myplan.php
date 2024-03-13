<?php

$title = "My Plan";
require_once "./includes/header.php";

?>

<!-- content @s -->
<div class="nk-content nk-content-lg nk-content-fluid">
    <div class="container-xl wide-lg">
        <div class="nk-content-inner">
            <div class="nk-content-body">
                <div class="nk-block-head">
                    <div class="nk-block-head-content">
                        <div class="nk-block-head-sub"><span>My Plan</span></div>
                        <div class="nk-block-between-md g-4">
                            <div class="nk-block-head-content">
                                <h2 class="nk-block-title fw-normal">Invested Schemes</h2>
                                <div class="nk-block-des">
                                    <p>Here is your current balance and your active investement plans.</p>
                                </div>
                            </div><!-- .nk-block-head-content -->
                            <div class="nk-block-head-content">
                                <ul class="nk-block-tools gx-3">
                                    <li><a href="#" class="btn btn-primary"><span>Withdraw</span> <em
                                                class="icon ni ni-arrow-long-right d-none d-sm-inline-block"></em></a>
                                    </li>
                                    <li><a href="#" class="btn btn-white btn-light"><span>Invest More</span> <em
                                                class="icon ni ni-arrow-long-right d-none d-sm-inline-block"></em></a>
                                    </li>
                                    <li class="opt-menu-md dropdown">
                                        <a href="#" class="btn btn-white btn-light btn-icon"
                                            data-bs-toggle="dropdown"><em class="icon ni ni-setting"></em></a>
                                        <div class="dropdown-menu dropdown-menu-end">
                                            <ul class="link-list-opt no-bdr">
                                                <li><a href="#"><em class="icon ni ni-coin-alt"></em><span>Curreny
                                                            Settings</span></a></li>
                                                <li><a href="#"><em class="icon ni ni-notify"></em><span>Push
                                                            Notification</span></a></li>
                                            </ul>
                                        </div>
                                    </li>
                                </ul>
                            </div><!-- .nk-block-head-content -->
                        </div>
                    </div>
                </div><!-- .nk-block-head -->
                <div class="nk-block">
                    <div class="card card-bordered">
                        <div class="card-inner-group">
                            <div class="card-inner">
                                <div class="row gy-gs">
                                    <div class="col-lg-5">
                                        <div class="nk-iv-wg3">
                                            <div class="nk-iv-wg3-title">Total Balance</div>
                                            <div class="nk-iv-wg3-group  flex-lg-nowrap gx-4">
                                                <div class="nk-iv-wg3-sub">
                                                    <div class="nk-iv-wg3-amount">
                                                        <div class="number">18,752.84 <small
                                                                class="currency currency-usd">USD</small></div>
                                                    </div>
                                                    <div class="nk-iv-wg3-subtitle">Available Balance</div>
                                                </div>
                                                <div class="nk-iv-wg3-sub">
                                                    <span class="nk-iv-wg3-plus text-soft"><em
                                                            class="icon ni ni-plus"></em></span>
                                                    <div class="nk-iv-wg3-amount">
                                                        <div class="number-sm">1,500.05</div>
                                                    </div>
                                                    <div class="nk-iv-wg3-subtitle">Locked Balance <em
                                                            class="icon ni ni-info-fill" data-bs-toggle="tooltip"
                                                            data-bs-placement="right" title="You can't use"></em></div>
                                                </div>
                                            </div>
                                        </div>
                                    </div><!-- .col -->
                                    <div class="col-lg-7">
                                        <div class="nk-iv-wg3">
                                            <div class="nk-iv-wg3-title">This Month <em class="icon ni ni-info-fill"
                                                    data-bs-toggle="tooltip" data-bs-placement="right"
                                                    title="Current Month Profit"></em></div>
                                            <div class="nk-iv-wg3-group flex-md-nowrap g-4">
                                                <div class="nk-iv-wg3-sub-group gx-4">
                                                    <div class="nk-iv-wg3-sub">
                                                        <div class="nk-iv-wg3-amount">
                                                            <div class="number">5,394.62</div>
                                                        </div>
                                                        <div class="nk-iv-wg3-subtitle">Total Profit</div>
                                                    </div>
                                                    <div class="nk-iv-wg3-sub">
                                                        <span class="nk-iv-wg3-plus text-soft"><em
                                                                class="icon ni ni-plus"></em></span>
                                                        <div class="nk-iv-wg3-amount">
                                                            <div class="number-sm">1,50.05</div>
                                                        </div>
                                                        <div class="nk-iv-wg3-subtitle">Today Profit</div>
                                                    </div>
                                                </div>
                                                <div class="nk-iv-wg3-sub flex-grow-1 ms-md-3">
                                                    <div class="nk-iv-wg3-ck">
                                                        <canvas class="chart-profit" id="profitCM"></canvas>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div><!-- .col -->
                                </div><!-- .row -->
                            </div><!-- .card-inner -->
                            <div class="card-inner">
                                <ul class="nk-iv-wg3-nav">
                                    <li><a href="#"><em class="icon ni ni-notes-alt"></em> <span>Go to
                                                Transaction</span></a></li>
                                    <li><a href="#"><em class="icon ni ni-growth"></em> <span>Analytic
                                                Reports</span></a></li>
                                    <li><a href="#"><em class="icon ni ni-report-profit"></em> <span>Monthly
                                                Statement</span></a></li>
                                    <li><a href="#"><em class="icon ni ni-help"></em> <span>Investment Tips</span></a>
                                    </li>
                                </ul>
                            </div><!-- .card-inner -->
                        </div><!-- .card-inner-group -->
                    </div><!-- .card -->
                </div><!-- .nk-block -->
                <div class="nk-block nk-block-lg">
                    <div class="nk-block-head-sm">
                        <div class="nk-block-head-content">
                            <h5 class="nk-block-title">Active Plan <span class="count text-base">(2)</span></h5>
                        </div>
                    </div>
                    <div class="nk-iv-scheme-list">
                        <div class="nk-iv-scheme-item">
                            <div class="nk-iv-scheme-icon is-running">
                                <em class="icon ni ni-update"></em>
                            </div>
                            <div class="nk-iv-scheme-info">
                                <div class="nk-iv-scheme-name">Silver - Daily 4.76% for 21 Days</div>
                                <div class="nk-iv-scheme-desc">Invested Amount - <span class="amount">$250</span></div>
                            </div>
                            <div class="nk-iv-scheme-term">
                                <div class="nk-iv-scheme-start nk-iv-scheme-order">
                                    <span class="nk-iv-scheme-label text-soft">Start Date</span>
                                    <span class="nk-iv-scheme-value date">Nov 04, 2019</span>
                                </div>
                                <div class="nk-iv-scheme-end nk-iv-scheme-order">
                                    <span class="nk-iv-scheme-label text-soft">End Date</span>
                                    <span class="nk-iv-scheme-value date">Nov 25, 2019</span>
                                </div>
                            </div>
                            <div class="nk-iv-scheme-amount">
                                <div class="nk-iv-scheme-amount-a nk-iv-scheme-order">
                                    <span class="nk-iv-scheme-label text-soft">Total Return</span>
                                    <span class="nk-iv-scheme-value amount">$ 499.99</span>
                                </div>
                                <div class="nk-iv-scheme-amount-b nk-iv-scheme-order">
                                    <span class="nk-iv-scheme-label text-soft">Net Profit Earn</span>
                                    <span class="nk-iv-scheme-value amount">$ 97.95 <span class="amount-ex">~
                                            $152.04</span></span>
                                </div>
                            </div>
                            <div class="nk-iv-scheme-more">
                                <a class="btn btn-icon btn-lg btn-round btn-trans"
                                    href="html/invest/scheme-details.html"><em class="icon ni ni-forward-ios"></em></a>
                            </div>
                            <div class="nk-iv-scheme-progress">
                                <div class="progress-bar" data-progress="25"></div>
                            </div>
                        </div><!-- .nk-iv-scheme-item -->
                        <div class="nk-iv-scheme-item">
                            <div class="nk-iv-scheme-icon is-running">
                                <em class="icon ni ni-update"></em>
                            </div>
                            <div class="nk-iv-scheme-info">
                                <div class="nk-iv-scheme-name">Silver - Daily 4.76% for 21 Days</div>
                                <div class="nk-iv-scheme-desc">Invested Amount - <span class="amount">$1,250</span>
                                </div>
                            </div>
                            <div class="nk-iv-scheme-term">
                                <div class="nk-iv-scheme-start nk-iv-scheme-order">
                                    <span class="nk-iv-scheme-label text-soft">Start Date</span>
                                    <span class="nk-iv-scheme-value date">Oct 30, 2019</span>
                                </div>
                                <div class="nk-iv-scheme-end nk-iv-scheme-order">
                                    <span class="nk-iv-scheme-label text-soft">End Date</span>
                                    <span class="nk-iv-scheme-value date">Nov 19, 2019</span>
                                </div>
                            </div>
                            <div class="nk-iv-scheme-amount">
                                <div class="nk-iv-scheme-amount-a nk-iv-scheme-order">
                                    <span class="nk-iv-scheme-label text-soft">Total Return</span>
                                    <span class="nk-iv-scheme-value amount">$ 2,500</span>
                                </div>
                                <div class="nk-iv-scheme-amount-b nk-iv-scheme-order">
                                    <span class="nk-iv-scheme-label text-soft">Net Profit Earn</span>
                                    <span class="nk-iv-scheme-value amount">$ 1145.25 <span class="amount-ex">~
                                            $105.75</span></span>
                                </div>
                            </div>
                            <div class="nk-iv-scheme-more">
                                <a class="btn btn-icon btn-lg btn-round btn-trans"
                                    href="html/invest/scheme-details.html"><em class="icon ni ni-forward-ios"></em></a>
                            </div>
                            <div class="nk-iv-scheme-progress">
                                <div class="progress-bar" data-progress="90"></div>
                            </div>
                        </div><!-- .nk-iv-scheme-item -->
                    </div><!-- .nk-iv-scheme-list -->
                </div><!-- .nk-block -->
                <div class="nk-block nk-block-lg">
                    <div class="nk-block-head-sm">
                        <div class="nk-block-between">
                            <div class="nk-block-head-content">
                                <h5 class="nk-block-title">Recently End <span class="count text-base">(1)</span></h5>
                            </div>
                            <div class="nk-block-head-content">
                                <a href="#"><em class="icon ni ni-dot-box"></em> Go to Archive</a>
                            </div>
                        </div>
                    </div>
                    <div class="nk-iv-scheme-list">
                        <div class="nk-iv-scheme-item">
                            <div class="nk-iv-scheme-icon is-done">
                                <em class="icon ni ni-offer"></em>
                            </div>
                            <div class="nk-iv-scheme-info">
                                <div class="nk-iv-scheme-name">Silver - Daily 4.76% for 21 Days</div>
                                <div class="nk-iv-scheme-desc">Invested Amount - <span class="amount">$250</span></div>
                            </div>
                            <div class="nk-iv-scheme-term">
                                <div class="nk-iv-scheme-start nk-iv-scheme-order">
                                    <span class="nk-iv-scheme-label text-soft">Start Date</span>
                                    <span class="nk-iv-scheme-value date">Nov 04, 2019</span>
                                </div>
                                <div class="nk-iv-scheme-end nk-iv-scheme-order">
                                    <span class="nk-iv-scheme-label text-soft">End Date</span>
                                    <span class="nk-iv-scheme-value date">Nov 25, 2019</span>
                                </div>
                            </div>
                            <div class="nk-iv-scheme-amount">
                                <div class="nk-iv-scheme-amount-a nk-iv-scheme-order">
                                    <span class="nk-iv-scheme-label text-soft">Total Return</span>
                                    <span class="nk-iv-scheme-value amount">$ 499.99</span>
                                </div>
                                <div class="nk-iv-scheme-amount-b nk-iv-scheme-order">
                                    <span class="nk-iv-scheme-label text-soft">Net Profit Earn</span>
                                    <span class="nk-iv-scheme-value amount">$ 97.95 <span class="amount-ex">~
                                            $152.04</span></span>
                                </div>
                            </div>
                            <div class="nk-iv-scheme-more">
                                <a class="btn btn-icon btn-lg btn-round btn-trans"
                                    href="html/invest/scheme-details.html"><em class="icon ni ni-forward-ios"></em></a>
                            </div>
                        </div><!-- .nk-iv-scheme-item -->
                        <div class="nk-iv-scheme-item">
                            <div class="nk-iv-scheme-icon is-done">
                                <em class="icon ni ni-offer"></em>
                            </div>
                            <div class="nk-iv-scheme-info">
                                <div class="nk-iv-scheme-name">Silver - Daily 4.76% for 21 Days</div>
                                <div class="nk-iv-scheme-desc">Invested Amount - <span class="amount">$1,250</span>
                                </div>
                            </div>
                            <div class="nk-iv-scheme-term">
                                <div class="nk-iv-scheme-start nk-iv-scheme-order">
                                    <span class="nk-iv-scheme-label text-soft">Start Date</span>
                                    <span class="nk-iv-scheme-value date">Oct 30, 2019</span>
                                </div>
                                <div class="nk-iv-scheme-end nk-iv-scheme-order">
                                    <span class="nk-iv-scheme-label text-soft">End Date</span>
                                    <span class="nk-iv-scheme-value date">Nov 19, 2019</span>
                                </div>
                            </div>
                            <div class="nk-iv-scheme-amount">
                                <div class="nk-iv-scheme-amount-a nk-iv-scheme-order">
                                    <span class="nk-iv-scheme-label text-soft">Total Return</span>
                                    <span class="nk-iv-scheme-value amount">$ 2,500</span>
                                </div>
                                <div class="nk-iv-scheme-amount-b nk-iv-scheme-order">
                                    <span class="nk-iv-scheme-label text-soft">Net Profit Earn</span>
                                    <span class="nk-iv-scheme-value amount">$ 1145.25 <span class="amount-ex">~
                                            $105.75</span></span>
                                </div>
                            </div>
                            <div class="nk-iv-scheme-more">
                                <a class="btn btn-icon btn-lg btn-round btn-trans"
                                    href="html/invest/scheme-details.html"><em class="icon ni ni-forward-ios"></em></a>
                            </div>
                        </div><!-- .nk-iv-scheme-item -->
                    </div><!-- .nk-iv-scheme-list -->
                </div><!-- .nk-block -->
            </div>
        </div>
    </div>
</div>
<!-- content @e -->
<?php

$title = "My Plan";
require_once "./includes/footer.php";

?>