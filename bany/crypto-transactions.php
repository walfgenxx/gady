<?php require_once('data/settings.php'); date_default_timezone_set("$default_timezone");

$title = 'Crypto Transactions - '.$sitename;
$thepage = 'Crypto Transactions';

if(!isset($_SESSION['user']['userid'])){
	header('location: ./login');
}

include('header.php');

if($kyc=='no'){
    header('location: ./kyc');
}
include('app-header-back.php');?>
        <div class="right">
            <a href="" class="headerButton">
                <ion-icon name="add"></ion-icon>
            </a>
        </div>
    </div>
    <!-- * App Header -->


    <!-- App Capsule -->
    <div id="appCapsule">

        <!-- Today -->
        <div class="section mt-2">
            <div class="section-title">Last Month</div>
            <div class="card">
                <ul class="listview flush transparent no-line image-listview detailed-list mt-1 mb-1">
                    <!-- item -->
                    <li>
                        <a href="#" class="item">
                            <div class="icon-box bg-success">
                                <ion-icon name="arrow-up-outline"></ion-icon>
                            </div>
                            <div class="in">
                                <div>
                                    <strong>Bitcoin</strong>
                                    <div class="text-small text-secondary">Sell</div>
                                </div>
                                <div class="text-end">
                                    <strong>$4,255.24</strong>
                                    <div class="text-small">
                                        <?= date("M d, Y",strtotime("-1 month"));?> 11:38 AM
                                    </div>
                                </div>
                            </div>
                        </a>
                    </li>
                    <!-- * item -->
                </ul>
            </div>
        </div>
        <!-- * Today -->

        <!-- This Week -->
        <div class="section mt-2">
            <div class="section-title">Last Year</div>
            <div class="card">
                <ul class="listview flush transparent no-line image-listview detailed-list mt-1 mb-1">
                    <!-- item -->
                    <li>
                        <a href="#" class="item">
                            <div class="icon-box bg-warning">
                                <ion-icon name="arrow-down-outline"></ion-icon>
                            </div>
                            <div class="in">
                                <div>
                                    <strong>Etherium</strong>
                                    <div class="text-small text-secondary">Buy</div>
                                </div>
                                <div class="text-end">
                                    <strong><?= $sitecurrencysym;?>8,540.68</strong>
                                    <div class="text-small">
                                        March 8, <?= date("Y",strtotime("-1 year"));?>
                                    </div>
                                </div>
                            </div>
                        </a>
                    </li>
                    <!-- * item -->
                    <!-- item -->
                    <li>
                        <a href="#" class="item">
                            <div class="icon-box">
                                <img src="assets/img/sample/avatar/avatar4.jpg" alt="image" class="imaged rounded w36">
                            </div>
                            <div class="in">
                                <div>
                                    <strong>Bitcoin</strong>
                                    <div class="text-small text-secondary">Send</div>
                                </div>
                                <div class="text-end">
                                    <strong><?= $sitecurrencysym;?>1,300.00</strong>
                                    <div class="text-small">
                                        March 4, <?= date("Y",strtotime("-1 year"));?>
                                    </div>
                                </div>
                            </div>
                        </a>
                    </li>
                    <!-- * item -->
                    <!-- item -->
                    <li>
                        <a href="#" class="item">
                            <div class="icon-box bg-secondary">
                                <ion-icon name="swap-vertical-outline"></ion-icon>
                            </div>
                            <div class="in">
                                <div>
                                    <strong>Tether</strong>
                                    <div class="text-small text-secondary">Trade</div>
                                </div>
                                <div class="text-end">
                                    <strong><?= $sitecurrencysym;?>2,405.48</strong>
                                    <div class="text-small">
                                        February 24, <?= date("Y",strtotime("-1 year"));?>
                                    </div>
                                </div>
                            </div>
                        </a>
                    </li>
                    <!-- * item -->
                </ul>
            </div>
        </div>
        <!-- * This Week -->

        <!-- December -->
        <div class="section mt-2">
            <div class="section-title">Upper Year</div>
            <div class="card">
                <ul class="listview flush transparent no-line image-listview detailed-list mt-1 mb-1">
                    <!-- item -->
                    <li>
                        <a href="#" class="item">
                            <div class="icon-box">
                                <img src="assets/img/sample/avatar/avatar5.jpg" alt="image" class="imaged rounded w36">
                            </div>
                            <div class="in">
                                <div>
                                    <strong>Etherium</strong>
                                    <div class="text-small text-secondary">Send</div>
                                </div>
                                <div class="text-end">
                                    <strong><?= $sitecurrencysym;?>1,770.68</strong>
                                    <div class="text-small">
                                        December 22, <?= date("Y",strtotime("-2 year"));?>
                                    </div>
                                </div>
                            </div>
                        </a>
                    </li>
                    <!-- * item -->
                    <!-- item -->
                    <li>
                        <a href="#" class="item">
                            <div class="icon-box">
                                <img src="assets/img/sample/avatar/avatar8.jpg" alt="image" class="imaged rounded w36">
                            </div>
                            <div class="in">
                                <div>
                                    <strong>Bitcoin</strong>
                                    <div class="text-small text-secondary">Send</div>
                                </div>
                                <div class="text-end">
                                    <strong><?= $sitecurrencysym;?>14,510.00</strong>
                                    <div class="text-small">
                                        December 09, <?= date("Y",strtotime("-2 year"));?>
                                    </div>
                                </div>
                            </div>
                        </a>
                    </li>
                    <!-- * item -->
                    <!-- item -->
                    <li>
                        <a href="#" class="item">
                            <div class="icon-box bg-success">
                                <ion-icon name="arrow-up-outline"></ion-icon>
                            </div>
                            <div class="in">
                                <div>
                                    <strong>Bitcoin</strong>
                                    <div class="text-small text-secondary">Sell</div>
                                </div>
                                <div class="text-end">
                                    <strong><?= $sitecurrencysym;?>8,205.24</strong>
                                    <div class="text-small">
                                        December 14, <?= date("Y",strtotime("-2 year"));?>
                                    </div>
                                </div>
                            </div>
                        </a>
                    </li>
                    <!-- * item -->
                    <!-- item -->
                    <li>
                        <a href="#" class="item">
                            <div class="icon-box bg-success">
                                <ion-icon name="arrow-up-outline"></ion-icon>
                            </div>
                            <div class="in">
                                <div>
                                    <strong>Cardano</strong>
                                    <div class="text-small text-secondary">Sell</div>
                                </div>
                                <div class="text-end">
                                    <strong><?= $sitecurrencysym;?>3,625.24</strong>
                                    <div class="text-small">
                                        December 11, <?= date("Y",strtotime("-2 year"));?>
                                    </div>
                                </div>
                            </div>
                        </a>
                    </li>
                    <!-- * item -->
                    <!-- item -->
                    <li>
                        <a href="#" class="item">
                            <div class="icon-box bg-secondary">
                                <ion-icon name="swap-vertical-outline"></ion-icon>
                            </div>
                            <div class="in">
                                <div>
                                    <strong>Etherium</strong>
                                    <div class="text-small text-secondary">Trade</div>
                                </div>
                                <div class="text-end">
                                    <strong><?= $sitecurrencysym;?>5,216.48</strong>
                                    <div class="text-small">
                                        December 8, <?= date("Y",strtotime("-2 year"));?>
                                    </div>
                                </div>
                            </div>
                        </a>
                    </li>
                    <!-- * item -->
                </ul>
            </div>
        </div>
        <!-- * December -->


        <div class="section mt-3 mb-3">
            <a href="#" class="btn btn-lg btn-block btn-primary">Load More</a>
        </div>


    </div>
    <!-- * App Capsule -->
 <?php include('bottom-menu.php'); include('allJS.php');?>