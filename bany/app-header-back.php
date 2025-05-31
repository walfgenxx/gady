<!-- App Header -->
    <div class="appHeader">
        <div class="left">
            <a href="javascript:history.go(-1)" class="headerButton goBack">
                <ion-icon name="chevron-back-outline"></ion-icon>
            </a>
        </div>
        <div class="pageTitle">
            <?= ucwords($thepage);?>
			<?php if($thepage=='transaction'){?> - #<?= $transactionid;}?>
        </div>