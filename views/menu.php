<?php Session::init(); ?>
<header>
    <div class="header-top">
        <div class="left-header">
            <img src="public/img/pills-img.png" alt="Speaker Portal Pills-img">
            <div class="portal-name">
                <h2>speaker portal</h2>
            </div>
        </div>
        <div class="right-header">
            <div class="right-header-left-column">
                <div class="right-header-top-row">
                    <select name="language-select" id="language">
                        <option value="english">English</option>
                        <option value="hungarian">Hungarian</option>
                    </select>
                    <a href="#">Contact</a>
                    <a href="#">Sitemap</a>
                </div>
                <div class="right-header-bottom-row">
                    <p>
                        <img src="public/img/folder-img.png" alt="Folder">
                        <a href="#">My Colletion</a>
                    </p>
                    <p>
                        <img src="public/img/close-img.png" alt="Close">
                        <a href="<?= Session::get("loggedIn") ? URL . 'index/logout' : '#'; ?>">Logout</a>
                    </p>
                </div>
            </div>
            <div class="right-header-right-column">
                <img src="public/img/logo-img.png" alt="Speaker Portal Pills-img">
            </div>
        </div>
    </div>
    <nav>
        <div class="nav-container">
            <ul>
                <li><a href="<?= URL; ?>"><img src="public/img/home_btn.png" alt="Home button"></a></li>
                <li><a href="<?= Session::get("loggedIn") ? URL . 'columns' : '#'; ?>">mpaf</a></li>
                <li><a href="<?= Session::get("loggedIn") ? URL . 'venous' : '#'; ?>">venous</a></li>
                <li><a href="<?= Session::get("loggedIn") ? URL . 'acs' : '#'; ?>">acs</a></li>
                <li><a href="<?= Session::get("loggedIn") ? URL . 'kivaroxaban-studies' : '#'; ?>">kivaroxaban studies</a></li>
                <li><a href="<?= Session::get("loggedIn") ? URL . 'background-information' : '#'; ?>">background information</a></li>
            </ul>
        </div>
    </nav>
</header>