<!-- App Bottom Menu -->
    <div class="appBottomMenu">
        <a href="./" class="item <?php if($thepagecode == 'home'){echo 'active';}?>">
            <div class="col">
                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-collection-fill" viewBox="0 0 16 16">
  <path d="M0 13a1.5 1.5 0 0 0 1.5 1.5h13A1.5 1.5 0 0 0 16 13V6a1.5 1.5 0 0 0-1.5-1.5h-13A1.5 1.5 0 0 0 0 6v7zM2 3a.5.5 0 0 0 .5.5h11a.5.5 0 0 0 0-1h-11A.5.5 0 0 0 2 3zm2-2a.5.5 0 0 0 .5.5h7a.5.5 0 0 0 0-1h-7A.5.5 0 0 0 4 1z"/>
</svg>
                <strong>Dashboard</strong>
            </div>
        </a>
        <a href="profile" class="item <?php if($thepagecode == 'profile'){echo 'active';}?>">
            <div class="col">
                <ion-icon name="document-text-outline"></ion-icon>
                <strong>Account</strong>
            </div>
        </a>
        <!--<a href="app-components.html" class="item">
            <div class="col">
                <ion-icon name="apps-outline"></ion-icon>
                <strong>Components</strong>
            </div>
        </a>-->
        <a href="transactions" class="item <?php if($thepagecode == 'transaction'){echo 'active';}?>">
            <div class="col">
                <ion-icon name="card-outline"></ion-icon>
                <strong>Transactions</strong>
            </div>
        </a>
        <a href="tools" class="item <?php if($thepagecode == 'tools'){echo 'active';}?>">
            <div class="col">
                <ion-icon name="settings-outline"></ion-icon>
                <strong>Settings</strong>
            </div>
        </a>
    </div>
    <!-- * App Bottom Menu -->