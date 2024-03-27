<?php
$title = "Invest";
require_once ("./includes/header.php");


?>
<!-- content @s -->
<div class="nk-content nk-content-lg nk-content-fluid">
    <div class="container-xl wide-lg">
        <div class="nk-content-inner">
            <div class="nk-content-body">
                <div class="nk-block-head nk-block-head-lg">
                    <div class="nk-block-head-content">
                        <div class="nk-block-head-sub"><a href="./invest.php" class="back-to"><em
                                    class="icon ni ni-arrow-left"></em><span>Back to plan</span></a></div>
                        <div class="nk-block-head-content">
                            <h2 class="nk-block-title fw-normal">Ready to get started?</h2>
                        </div>
                    </div>
                </div><!-- nk-block-head -->
                <div class="nk-block invest-block">
                    <form action="./handlers/add.php" class="invest-form" method="POST">
                        <div class="row g-gs">
                            <div class="col-lg-7">
                                <div class="invest-field form-group">
                                    <input type="hidden" value="silver" name="iv-plan" id="invest-choose-plan">
                                    <div class="dropdown invest-cc-dropdown">
                                        <a href="#" class="invest-cc-chosen dropdown-indicator"
                                            data-bs-toggle="dropdown">
                                            <div class="coin-item">
                                                <div class="coin-icon">
                                                    <em class="icon ni ni-offer-fill"></em>
                                                </div>
                                                <?php
                                                $id = $_GET["plan"];
                                                $query2 = "SELECT * FROM plans WHERE id = $id";
                                                $res2 = mysqli_query($conn, $query2);
                                                $row = $res2->fetch_assoc();

                                                ?>
                                                <div class="coin-info">
                                                    <span class="coin-name">
                                                        <?= $row['name']; ?> Plan
                                                    </span>
                                                    <span class="coin-text">Invest for
                                                        <?= $row['days']; ?> days and get daily
                                                        profit
                                                        <?= $row['increase']; ?>%
                                                    </span>
                                                </div>
                                            </div>
                                        </a>
                                        <div class="dropdown-menu dropdown-menu-auto dropdown-menu-mxh">
                                            <ul class="invest-cc-list">
                                                <?php
                                                $id = $_GET["plan"];
                                                $query2 = "SELECT * FROM plans WHERE id != $id";
                                                $res2 = mysqli_query($conn, $query2);
                                                while ($row = $res2->fetch_assoc()) {
                                                    ?>
                                                    <li class="invest-cc-item selected">
                                                        <a href="#" class="invest-cc-opt" data-plan="silver">
                                                            <div class="coin-item">
                                                                <div class="coin-icon">
                                                                    <em class="icon ni ni-offer-fill"></em>
                                                                </div>
                                                                <div class="coin-info">
                                                                    <span class="coin-name">
                                                                        <?= $row['name']; ?> Plan
                                                                    </span>
                                                                    <span class="coin-text">Invest for
                                                                        <?= $row['days']; ?> days
                                                                        and get daily profit
                                                                        <?= $row['increase']; ?> %
                                                                    </span>
                                                                </div>
                                                            </div>
                                                        </a>
                                                    </li>
                                                    <?php
                                                }

                                                ?>


                                            </ul>
                                        </div>
                                    </div><!-- .dropdown -->
                                </div><!-- .invest-field -->
                                <div class="invest-field form-group">
                                    <?php
                                    $id = $_GET["plan"];
                                    $query2 = "SELECT * FROM plans WHERE id = $id";
                                    $res2 = mysqli_query($conn, $query2);
                                    $row = $res2->fetch_assoc();
                                    ?>
                                    <div class="form-label-group">
                                        <label class="form-label">Choose Quick Amount to Invest</label>
                                    </div>
                                    <div class="invest-amount-group g-2">
                                        <span id="min" hidden>
                                            <?= $row['min_deposit']; ?>
                                        </span>

                                        <span id="max" hidden>
                                            <?= $row['max_deposit']; ?>
                                        </span>
                                        <?php
                                        for ($i = 1; $i <= 6; $i++) {
                                            $amount = $i == 1 ? $row['min_deposit'] : $row['min_deposit'] + 100 * $i;
                                            ?>
                                            <div class="invest-amount-item">
                                                <input type="radio" class="invest-amount-control" name="iv-amount"
                                                    id="iv-amount-<?= $i; ?>">
                                                <label class="invest-amount-label" for="iv-amount-<?= $i; ?>"><span
                                                        class="sign">$</span>
                                                    <span class="amountInput">
                                                        <?= $amount ?>
                                                    </span>
                                                </label>
                                            </div>
                                            <?php
                                        }
                                        ?>


                                    </div>
                                </div><!-- .invest-field -->
                                <div class="invest-field form-group">
                                    <div class="form-label-group">
                                        <label class="form-label">Or Enter Your Amount</label>
                                        <div class="dropdown">
                                            <a href="#" class="link py-1" data-bs-toggle="dropdown">Change
                                                Currency</a>
                                            <div class="dropdown-menu dropdown-menu-xxs dropdown-menu-end">
                                                <ul class="link-list-plain sm text-center" id="currencies">
                                                    <li><a>USD</a></li>
                                                    <li><a>EUR</a></li>
                                                    <li><a>BTC</a></li>
                                                    <li><a>ETH</a></li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-control-group">
                                        <div class="form-info" id="currentCurr">USD</div>
                                        <input type="number" class="form-control form-control-amount form-control-lg"
                                            id="custom-amount" placeholder="<?= $row['min_deposit'] ?>.00" required
                                            min="<?= $row['min_deposit'] ?>" max="<?= $row['max_deposit'] ?>"
                                            name="amount">
                                        <input type="text" hidden name="plan" value='<?= $_GET['plan']; ?>'>
                                        <input type="text" hidden name="days" value='<?= $row['days']; ?>'>
                                        <input type="text" hidden name="increase" value='<?= $row['increase']; ?>'>
                                    </div>
                                    <div class="form-note pt-2">Note: Minimum invest
                                        <span id='minAmount'>
                                            <?= number_format($row['min_deposit']); ?>
                                        </span> <span class='amountCurr'>USD</span> and upto
                                        <span id='maxAmount'>
                                            <?= number_format($row['max_deposit']); ?>
                                        </span>
                                        <span class='amountCurr'>USD</span>
                                    </div>
                                </div><!-- .invest-field -->
                                <div class="invest-field form-group">
                                    <div class="form-label-group">
                                        <label class="form-label">Choose Payment Method</label>
                                    </div>
                                    <input type="hidden" value="wallet" name="iv-wallet" id="invest-choose-wallet">
                                    <div class="dropdown invest-cc-dropdown">
                                        <a href="#" class="invest-cc-chosen dropdown-indicator"
                                            data-bs-toggle="dropdown">
                                            <div class="coin-item">
                                                <div class="coin-icon">
                                                    <em class="icon ni ni-wallet-alt"></em>
                                                </div>
                                                <div class="coin-info">
                                                    <span class="coin-name">NioWallet</span>
                                                    <span class="coin-text">Current balance: 2.014095 BTC (
                                                        $18,934.84 )</span>
                                                </div>
                                            </div>
                                        </a>
                                        <div class="dropdown-menu dropdown-menu-auto dropdown-menu-mxh">
                                            <ul class="invest-cc-list">
                                                <li class="invest-cc-item selected">
                                                    <a href="#" class="invest-cc-opt" data-plan="silver">
                                                        <div class="coin-item">
                                                            <div class="coin-icon">
                                                                <em class="icon ni ni-wallet-alt"></em>
                                                            </div>
                                                            <div class="coin-info">
                                                                <span class="coin-name">NioWallet</span>
                                                                <span class="coin-text">Current balance:
                                                                    2.014095 BTC ( $18,934.84 )</span>
                                                            </div>
                                                        </div>
                                                    </a>
                                                </li><!-- .invest-cc-item -->
                                                <li class="invest-cc-item selected">
                                                    <a href="#" class="invest-cc-opt" data-plan="starter">
                                                        <div class="coin-item">
                                                            <div class="coin-icon">
                                                                <em class="icon ni ni-sign-btc"></em>
                                                            </div>
                                                            <div class="coin-info">
                                                                <span class="coin-name">BTC Wallet</span>
                                                                <span class="coin-text">Current balance:
                                                                    2.014095 BTC</span>
                                                            </div>
                                                        </div>
                                                    </a>
                                                </li><!-- .invest-cc-item -->
                                                <li class="invest-cc-item">
                                                    <a href="#" class="invest-cc-opt" data-plan="dimond">
                                                        <div class="coin-item">
                                                            <div class="coin-icon">
                                                                <em class="icon ni ni-sign-usd"></em>
                                                            </div>
                                                            <div class="coin-info">
                                                                <span class="coin-name">USD Wallet</span>
                                                                <span class="coin-text">Current balance:
                                                                    $18,934.84</span>
                                                            </div>
                                                        </div>
                                                    </a>
                                                </li><!-- .invest-cc-item -->
                                            </ul>
                                        </div>
                                    </div><!-- .dropdown -->
                                </div><!-- .invest-field -->
                                <div class="invest-field form-group">
                                    <div class="custom-control custom-control-xs custom-checkbox">
                                        <input type="checkbox" class="custom-control-input" id="checkbox" required>
                                        <label class="custom-control-label" for="checkbox">I agree the <a href="#">terms
                                                and &amp; conditions.</a></label>
                                    </div>
                                </div><!-- .invest-field -->
                            </div><!-- .col -->
                            <div class="col-xl-4 col-lg-5 offset-xl-1">
                                <div class="card card-bordered ms-lg-4 ms-xl-0">
                                    <div class="nk-iv-wg4">
                                        <div class="nk-iv-wg4-sub">
                                            <h6 class="nk-iv-wg4-title title">Your Investment Details</h6>
                                            <ul class="nk-iv-wg4-overview g-2">
                                                <?php
                                                $id = $_GET["plan"];
                                                $query2 = "SELECT * FROM plans WHERE id = $id";
                                                $res2 = mysqli_query($conn, $query2);
                                                $row = $res2->fetch_assoc();
                                                ?>
                                                <li>
                                                    <div class="sub-text">Name of scheme</div>
                                                    <div class="lead-text">
                                                        <?= $row['name']; ?> Plan
                                                    </div>
                                                </li>
                                                <li>
                                                    <div class="sub-text">Term of the scheme</div>
                                                    <div class="lead-text">
                                                        <span id="days">
                                                            <?= $row['days']; ?>
                                                        </span>days
                                                    </div>
                                                </li>
                                                <li>
                                                    <div class="sub-text">Daily profit</div>
                                                    <div class="lead-text"><span class="sign">$</span><span
                                                            id="dailyProfit">0.00</span></div>
                                                </li>
                                                <li>
                                                    <div class="sub-text">Daily profit %</div>
                                                    <div class="lead-text">
                                                        <span id="increase">
                                                            <?= $row['increase']; ?>
                                                        </span> %
                                                    </div>
                                                </li>
                                                <li>
                                                    <div class="sub-text">Total net profit</div>
                                                    <div class="lead-text"><span class="sign">$</span><span
                                                            id="profit">0.00</span></div>
                                                </li>
                                                <li>
                                                    <div class="sub-text">Amount</div>
                                                    <div class="lead-text"><span class="sign">$</span><span
                                                            id="total">0.00</span></div>
                                                </li>
                                                <li>
                                                    <div class="sub-text">Term start at</div>
                                                    <div class="lead-text">
                                                        <?= date('d-M-Y'); ?> <small></small>
                                                    </div>
                                                </li>
                                                <li>
                                                    <div class="sub-text">Term end at</div>
                                                    <div class="lead-text">
                                                        <?= date('d-M-Y', strtotime($row['days'] . "days")); ?>
                                                    </div>
                                                </li>
                                            </ul>
                                        </div><!-- .nk-iv-wg4-sub -->
                                        <div class="nk-iv-wg4-sub">
                                            <ul class="nk-iv-wg4-list">
                                                <li>
                                                    <div class="sub-text">Payment Method</div>
                                                    <div class="lead-text">NioWallet</div>
                                                </li>
                                            </ul>
                                        </div><!-- .nk-iv-wg4-sub -->
                                        <!-- <div class="nk-iv-wg4-sub">
                                            <ul class="nk-iv-wg4-list">
                                                <li>
                                                    <div class="sub-text">Amount to invest</div>
                                                    <div class="lead-text">$ 250.00</div>
                                                </li>
                                                <li>
                                                    <div class="sub-text">Conversion Fee <span>(0.5%)</span>
                                                    </div>
                                                    <div class="lead-text">$ 1.25</div>
                                                </li>
                                            </ul>
                                        </div>-->
                                        <div class="nk-iv-wg4-sub">
                                            <ul class="nk-iv-wg4-list">
                                                <li>
                                                    <div class="lead-text">Total Return</div>
                                                    <div class="caption-text text-primary"><span class="sign">$</span>
                                                        <span id="return">0.00</span>
                                                    </div>
                                                </li>
                                            </ul>
                                        </div><!-- .nk-iv-wg4-sub -->
                                        <div class="nk-iv-wg4-sub text-center bg-lighter">
                                            <!-- Modal Content Code -->
                                            <div class="modal fade" tabindex="-1" id="modalDefault">
                                                <div class="modal-dialog" role="document">
                                                    <div class="modal-content">
                                                        <a href="#" class="close" data-dismiss="modal"
                                                            aria-label="Close">
                                                            <em class="icon ni ni-cross"></em>
                                                        </a>
                                                        <div class="modal-header">
                                                            <h5 class="modal-title">Modal Title</h5>
                                                        </div>
                                                        <div class="modal-body">
                                                            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit.
                                                                Voluptatem similique earum
                                                                necessitatibus nesciunt! Quia id expedita asperiores
                                                                voluptatem odit quis fugit sapiente
                                                                assumenda sunt voluptatibus atque facere autem, omnis
                                                                explicabo.</p>
                                                        </div>
                                                        <div class="modal-footer bg-light">
                                                            <span class="sub-text">Modal Footer Text</span>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <!-- Modal Trigger Code -->

                                            <button class="btn btn-lg btn-primary ttu" name="deposit">Create
                                                deposit</button>
                                        </div>
                                        <!-- .nk-iv-wg4-sub -->
                                    </div><!-- .nk-iv-wg4 -->
                                </div><!-- .card -->
                            </div><!-- .col -->
                        </div><!-- .row -->
                    </form>
                </div><!-- .nk-block -->
            </div>
        </div>
    </div>
    <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#modalTabs" hidden
        id="btn">Create
        Deposit
    </button>
    <?php
    if (isset ($_GET["deposit"])) {
        $id = $_GET["deposit"];
        $query = "SELECT * FROM deposits WHERE id = '$id'";
        $res = mysqli_query($conn, $query);
        $row = $res->fetch_assoc();
        ?>
        <div class="modal fade" tabindex="-1" role="dialog" id="modalTabs">
            <div class="modal-dialog modal-lg" role="document">
                <div class="modal-content">
                    <a href="#" class="close" data-bs-dismiss="modal"><em class="icon ni ni-cross-sm"></em></a>
                    <div class="modal-body modal-body-md">

                        <div class="tab-content">
                            <div class="tab-pane active" id="tabItem1">
                                <div class="justify-center">
                                    <h3>$
                                        <?= number_format($row['amount'], 2); ?>
                                    </h3>
                                </div>
                                <div class="justify-center">
                                    <p>
                                        Deposit amount to wallet or scan QR code. Thank you.</p>

                                </div>
                                <div class="justify-center my-3">
                                    <div id="qrcode"></div>
                                </div>
                                <div class="justify-center">
                                    <div class="nk-refwg-url  w-50">
                                        <div class="form-control-wrap">
                                            <div class="form-clip clipboard-init" data-clipboard-target="#refUrl"
                                                data-success="Copied" data-text="Copy Link"><em
                                                    class="clipboard-icon icon ni ni-copy"></em> <span
                                                    class="clipboard-text">Copy Address</span>
                                            </div>
                                            <!-- <div class="form-icon">
                                        <em class="icon ni ni-link-alt"></em>
                                    </div> -->
                                            <input type="text" class="form-control copy-text" id="refUrl"
                                                value="23290176257893029" readonly="" style="border:none;">
                                        </div>
                                    </div>
                                </div>

                            </div>

                        </div>
                        <div class="justify-center mt-3">
                            <a class="btn btn-lg btn-primary ttu w-25 center" name="deposit" data-bs-toggle="modal"
                                data-bs-target="#modalAlert">Done</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="modal fade" tabindex="-1" id="modalAlert">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <a href="#" class="close" data-bs-dismiss="modal"><em class="icon ni ni-cross"></em></a>
                    <div class="modal-body modal-body-lg text-center">
                        <div class="nk-modal">
                            <em class="nk-modal-icon icon icon-circle icon-circle-xxl ni ni-check bg-success"></em>
                            <h4 class="nk-modal-title">Congratulations!</h4>
                            <div class="nk-modal-text">
                                <div class="caption-text">Once we verify your payment, your account would be funded
                                </div>

                            </div>
                            <div class="nk-modal-action">
                                <a href="#" class="btn btn-lg btn-mw btn-primary" data-bs-dismiss="modal">OK</a>
                            </div>
                        </div>
                    </div><!-- .modal-body -->
                    <div class="modal-footer bg-lighter">
                        <div class="text-center w-100">
                            <p>Earn up to 10% profit for each friend your refer! </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <?php
    }
    ?>

</div>

</div>
<!-- content @e -->
<script type="module">
    import { currRate } from "./handlers/script.js"
    let amounts = document.querySelectorAll(".invest-amount-label");
    let customInput = document.querySelector("#custom-amount");
    let total = document.querySelector("#total");
    let increase = document.querySelector("#increase");
    let dailyProfit = document.querySelector("#dailyProfit");
    let days = document.querySelector("#days")
    let profit = document.querySelector("#profit");
    let returns = document.querySelector("#return")
    let currencies = document.querySelectorAll("#currencies a");
    let currentCurr = document.querySelector("#currentCurr");
    let min = document.querySelector("#min");
    let max = document.querySelector("#max");
    let signs = document.querySelectorAll(".sign");
    let minAmount = document.querySelector("#minAmount");
    let maxAmount = document.querySelector("#maxAmount");
    let amountCurr = document.querySelectorAll(".amountCurr");
    let btn = document.querySelector("#btn")
    if (location.search.includes("deposit")) {
        var qrcode = new QRCode("qrcode", document.querySelector("#refUrl").value);
        btn.click()

    }
    amounts.forEach(amount => {
        amount.onclick = () => {
            let amountInput = amount.querySelector(".amountInput").innerHTML
            customInput.value = parseFloat(amountInput.trim()).toFixed(2);
            updateInvestmentDetails(customInput.value)
        }
    })
    customInput.onkeyup = () => {
        if (customInput.value == "") {
            updateInvestmentDetails(0)
        } else {
            updateInvestmentDetails(customInput.value)
        }
        // Removing purple from amounts button when user starts typing in input
        amounts.forEach(amount => {
            amount.previousElementSibling.checked = false;
        })
    }

    const updateInvestmentDetails = (value) => {
        total.innerHTML = `${parseFloat(value).toFixed(2)}`;
        dailyProfit.innerHTML = ((increase.innerHTML / 100) * value).toFixed(2);
        profit.innerHTML = (dailyProfit.innerHTML * days.innerHTML).toFixed(2);
        returns.innerHTML = (parseFloat(profit.innerHTML) + parseFloat(value)).toFixed(2)
    }

    currencies.forEach(currency => {
        currency.onclick = () => {
            currentCurr.innerHTML = currency.innerHTML;
            let selectedCurrency = currency.innerHTML.toLowerCase();
            let minText = parseFloat(min.innerHTML.trim());
            let maxText = parseFloat(max.innerHTML.trim());
            amounts.forEach((amount, index) => {
                let curr = currRate[selectedCurrency];
                let minValue = currency.innerHTML == "USD" ? minText : minText * curr.rate;
                let maxValue = currency.innerHTML == "USD" ? maxText : maxText * curr.rate;
                let decimalPlace = currency.innerHTML == "USD" ? 0 : currency.innerHTML == "EUR" ? 2 : 5;
                if (currency.innerHTML == "USD" || currency.innerHTML == "EUR") {
                    amount.innerHTML = `<span class='sign'>${currency.innerHTML == "USD" ? "$" : curr.sign}</span> <span class='amountInput'>${index + 1 == 1 ? minValue.toFixed(decimalPlace) : (minValue + 100 * (index + 1)).toFixed(decimalPlace)
                        }</span>`;
                } else {
                    amount.innerHTML = `<span class='sign'>${currency.innerHTML == "USD" ? "$" : curr.sign}</span> <span class='amountInput'>${index + 1 == 1 ? minValue.toFixed(decimalPlace) : (minValue + minValue / (index + 1)).toFixed(decimalPlace)
                        }</span>`;
                }
                customInput.placeholder = minValue;
                customInput.min = minValue;
                customInput.max = maxValue;
                signs.forEach(sign => {
                    sign.innerHTML = currency.innerHTML == "USD" ? "$" : curr.sign;
                })
                minAmount.innerHTML = minValue.toFixed(2);
                maxAmount.innerHTML = maxValue.toFixed(2);
                amountCurr.forEach(item => {
                    item.innerHTML = currency.innerHTML;
                })
            })
        }
    })
</script>
<?php
require_once ("./includes/footer.php");
?>