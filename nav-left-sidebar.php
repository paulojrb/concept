<?php

echo "
<div class='menu-list'>
    <nav class='navbar navbar-expand-lg navbar-light'>
        <a class='d-xl-none d-lg-none' href='#'>Dashboard</a>
        <button class='navbar-toggler' type='button' data-toggle='collapse' data-target='#navbarNav' aria-controls='navbarNav' aria-expanded='false' aria-label='Toggle navigation'>
            <span class='navbar-toggler-icon'></span>
        </button>
        <div class='collapse navbar-collapse' id='navbarNav'>
            <ul class='navbar-nav flex-column'>
                <li class='nav-divider'>
                    Menu
                </li>
                <div class='nav-item'>
                    <a class='nav-link' href='/concept-master/'><i class=' fas fa-info-circle'></i>Info</a>
                </div>
                <li class='nav-item '>
                    <a class='nav-link' href='#' data-toggle='collapse' aria-expanded='false' data-target='#submenu-1' aria-controls='submenu-1'><i class='fa fa-fw fa-user-circle'></i>Dashboard <span class='badge badge-success'>6</span></a>
                    <div id='submenu-1' class='collapse submenu'>
                        <ul class='nav flex-column'>
                            <li class='nav-item'>
                                <a class='nav-link' href='dashboard-sales.php'>Dashboard</a>
                            </li>
                            <li class='nav-item'>
                                <a class='nav-link' href='#' data-toggle='collapse' aria-expanded='false' data-target='#submenu-1-1' aria-controls='submenu-1-1'>Infulencer</a>
                                <div id='submenu-1-1' class='collapse submenu'>
                                    <ul class='nav flex-column'>
                                        <li class='nav-item'>
                                            <a class='nav-link' href='/concept-master/dashboard-influencer.php'>Influencer</a>
                                        </li>
                                        <li class='nav-item'>
                                            <a class='nav-link' href='/concept-master/influencer-finder.php'>Influencer Finder</a>
                                        </li>
                                        <li class='nav-item'>
                                            <a class='nav-link' href='/concept-master/influencer-profile.php'>Influencer Profile</a>
                                        </li>
                                    </ul>
                                </div>
                            </li>
                        </ul>
                    </div>
                </li>
                <li class='nav-divider'>
                    Features
                </li>
                <li class='nav-item'>
                    <a class='nav-link' href='#' data-toggle='collapse' aria-expanded='false' data-target='#submenu-6' aria-controls='submenu-6'><i class='fas fa-fw fa-file'></i> Pages </a>
                    <div id='submenu-6' class='collapse submenu' >
                        <ul class='nav flex-column'>
                            <li class='nav-item'>
                                <a class='nav-link' href='/concept-master/pages/login.php' target='_blank'>Login</a>
                            </li>
                            <li class='nav-item'>
                                <a class='nav-link' href='/concept-master/pages/404-page.php'>404 page</a>
                            </li>
                            <li class='nav-item'>
                                <a class='nav-link' href='/concept-master/pages/sign-up.php'>Sign up Page</a>
                            </li>
                            <li class='nav-item'>
                                <a class='nav-link' href='/concept-master/pages/forgot-password.php'>Forgot Password</a>
                            </li>
                            <li class='nav-item'>
                                <a class='nav-link' href='/concept-master/pages/media-object.php'>Media Objects</a>
                            </li>
                        </ul>
                    </div>
                </li>
                <li class='nav-item'>
                    <a class='nav-link' href='#' data-toggle='collapse' aria-expanded='false' data-target='#submenu-7' aria-controls='submenu-7'><i class='fas fa-fw fa-inbox'></i>Apps <span class='badge badge-secondary'>New</span></a>
                    <div id='submenu-7' class='collapse submenu' >
                        <ul class='nav flex-column'>
                            <li class='nav-item'>
                                <a class='nav-link' href='/concept-master/pages/inbox.php'>Inbox</a>
                            </li>
                            <li class='nav-item'>
                                <a class='nav-link' href='/concept-master/pages/email-details.php'>Email Detail</a>
                            </li>
                            <li class='nav-item'>
                                <a class='nav-link' href='/concept-master/pages/email-compose.php'>Email Compose</a>
                            </li>
                            <li class='nav-item'>
                                <a class='nav-link' href='/concept-master/pages/message-chat.php'>Message Chat</a>
                            </li>
                        </ul>
                    </div>
                </li>
            </ul>
        </div>
    </nav>
</div>


";

?>