<?php
$title = "Invest";
require_once("./includes/header.php");
?>
<style>
    .nav-item a {
        cursor: pointer;
    }

    a.active {
        color: white !important;

    }
</style>
<!-- content @s -->
<div class="nk-content nk-content-lg nk-content-fluid">
    <div class="container-xl wide-lg">
        <div class="nk-content-inner">
            <div class="nk-content-body">
                <div class="nk-block-head text-center">
                    <div class="nk-block-head-content">
                        <div class="nk-block-head-sub"><span>Choose an Option</span></div>
                        <div class="nk-block-head-content">
                            <h2 class="nk-block-title fw-normal">Investment Plan</h2>
                            <div class="nk-block-des">
                                <p>Choose your investment plan and start earning.</p>
                            </div>
                        </div>
                    </div>
                </div><!-- nk-block -->
                <div class="nk-block">
                    <!-- <form class="plan-iv"> -->
                    <div class="plan-iv-currency text-center">
                        <ul class="nav nav-switch nav-tabs bg-white">
                            <li class="nav-item">
                                <a class="nav-link active">USD</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link">EUR</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link">BTC</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link">ETH</a>
                            </li>
                        </ul><!-- nav-tabs -->
                    </div>
                    <div class="plan-iv-list nk-slider nk-slider-s2">
                        <ul class="plan-list slider-init" data-slick='{"slidesToShow": 3, "slidesToScroll": 1, "infinite":false, "responsive":[
                        {"breakpoint": 992,"settings":{"slidesToShow": 2}},
                        {"breakpoint": 768,"settings":{"slidesToShow": 1}}
                    ]}'>
                            <?php
                            $query1 = "SELECT * FROM plans";
                            $res1 = mysqli_query($conn, $query1);
                            $index = 1;
                            while ($row = $res1->fetch_assoc()) {
                                ?>
                                <li class="plan-item">
                                    <input type="radio" id="plan-iv-<?= $index; ?>" name="plan-iv" class="plan-control">

                                    <div class="plan-item-card">
                                        <div class="plan-item-head">
                                            <div class="plan-item-heading">
                                                <h4 class="plan-item-title card-title title">
                                                    <?= $row['name']; ?>
                                                </h4>
                                                <p class="sub-text">
                                                    <?= $row['descr']; ?>
                                                </p>
                                            </div>
                                            <div class="plan-item-summary card-text">
                                                <div class="row">
                                                    <div class="col-6">
                                                        <span class="lead-text">
                                                            <?= $row['increase']; ?>%
                                                        </span>
                                                        <span class="sub-text">Daily Interest</span>
                                                    </div>
                                                    <div class="col-6">
                                                        <span class="lead-text">
                                                            <?= $row['days']; ?>
                                                        </span>
                                                        <span class="sub-text">Term Days</span>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="plan-item-body">
                                            <div class="plan-item-desc card-text">
                                                <ul class="plan-item-desc-list">
                                                    <li><span class="desc-label">Min Deposit</span> -
                                                        <span class="desc-data ">$
                                                            <?= $row['min_deposit']; ?>
                                                        </span> <input type="text" hidden class="min"
                                                            value=" <?= $row['min_deposit']; ?>">
                                                    </li>
                                                    <li><span class="desc-label">Max Deposit</span> -
                                                        <span class="desc-data">$
                                                            <?= $row['max_deposit']; ?>
                                                        </span>
                                                        <input type="text" hidden class="maxDeposit"
                                                            value=" <?= $row['max_deposit']; ?>">
                                                    </li>


                                                    <input type="text" hidden class="max">
                                                    <li><span class="desc-label">Deposit Return</span> - <span
                                                            class="desc-data">Yes</span></li>
                                                    <li><span class="desc-label">Total Return</span> - <span
                                                            class="desc-data">
                                                            <?= ($row['increase'] / 100) * $row['days']; ?>%
                                                        </span></li>
                                                </ul>
                                                <div class="plan-item-action">
                                                    <label for="plan-iv-<?= $index; ?>" class="plan-label"
                                                        data-id="<?= $row['id']; ?>">
                                                        <span class="plan-label-base">Choose this plan</span>
                                                        <span class="plan-label-selected">Plan Selected</span>
                                                    </label>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </li><!-- .plan-item -->
                                <?php
                                $index++;
                            }
                            ?>


                        </ul><!-- .plan-list -->
                    </div>
                    <div class="plan-iv-actions text-center">
                        <button class="btn btn-primary btn-lg"> <span>Continue to Invest</span> <em
                                class="icon ni ni-arrow-right"></em></button>
                    </div>
                    <!-- </form> -->
                </div><!-- nk-block -->
            </div>
        </div>
    </div>
</div>
<!-- content @e -->
<script>
    let currencies = document.querySelectorAll(".nav-item a");
    let currRate = {
        euro: 0.914179,
        btc: 0.000014,
        eth: 0.00025
    }
    let min = document.querySelectorAll(".min");
    let max = document.querySelectorAll(".maxDeposit");
    let plans = document.querySelectorAll(".plan-label")
    let button = document.querySelector("button")
    let selctedPlan;
    // Updating currency
    currencies.forEach(currency => {
        currency.onclick = () => {
            let curr;
            if (!currency.classList.contains("active")) {
                let active = document.querySelector(".nav-item a.active");
                active.classList.remove("active");
                currency.classList.add("active");
            }
            updateCurrency(min, currency);
            updateCurrency(max, currency);

        }
    });

    plans.forEach(plan => {
        plan.onclick = () => {
            selctedPlan = plan.dataset.id
        }
    })

    button.onclick = () => {
        if (selctedPlan) {
            location.href = `./invest-form.php?plan=${selctedPlan}`
        }
    }


    function updateCurrency(val, currency) {
        console.log(val)
        val.forEach(item => {
            if (currency.innerHTML == "USD") {
                item.previousElementSibling.innerHTML = `$${item.value}`
            } else if (currency.innerHTML == "EUR") {
                item.previousElementSibling.innerHTML = `€${(currRate.euro * item.value).toFixed(2)}`
            } else if (currency.innerHTML == "BTC") {
                item.previousElementSibling.innerHTML = `₿${(currRate.btc * item.value).toFixed(6)}`
            } else {
                item.previousElementSibling.innerHTML = `Ξ${(currRate.btc * item.value).toFixed(6)}`

            }
        })
    }
</script>
<?php
require_once("./includes/footer.php");
?>