<?php

if ( $logging ) {
    echo "
    <li class='nav-item dropdown notification'>
        <a class='nav-link nav-icons' href='#' id='navbarDropdownMenuLink1' data-toggle='dropdown' aria-haspopup='true' aria-expanded='false'><i class='fas fa-fw fa-bell'></i> <span class='indicator'></span></a>
        <ul class='dropdown-menu dropdown-menu-right notification-dropdown'>
            <li>
                <div class='notification-title'> Notification</div>
                <div class='notification-list'>
                    <div class='list-group'>
                        <a href='#' class='list-group-item list-group-item-action active'>
                            <div class='notification-info'>
                                <div class='notification-list-user-img'><img src='assets/images/avatar-2.jpg' alt='' class='user-avatar-md rounded-circle'></div>
                                <div class='notification-list-user-block'><span class='notification-list-user-name'></span>6BD90B9D5853F14BB78A2947D6C7E6FA68CFED7CD225A42F76C4FA27B6A22DB1
                                    <div class='notification-date'>2 min ago</div>
                                </div>
                            </div>
                        </a>
                        <a href='#' class='list-group-item list-group-item-action'>
                            <div class='notification-info'>
                                <div class='notification-list-user-img'><img src='assets/images/avatar-3.jpg' alt='' class='user-avatar-md rounded-circle'></div>
                                <div class='notification-list-user-block'><span class='notification-list-user-name'>John Abraham</span>is now following you
                                    <div class='notification-date'>2 days ago</div>
                                </div>
                            </div>
                        </a>
                        <a href='#' class='list-group-item list-group-item-action'>
                            <div class='notification-info'>
                                <div class='notification-list-user-img'><img src='assets/images/avatar-4.jpg' alt='' class='user-avatar-md rounded-circle'></div>
                                <div class='notification-list-user-block'><span class='notification-list-user-name'>Monaan Pechi</span> is watching your main repository
                                    <div class='notification-date'>2 min ago</div>
                                </div>
                            </div>
                        </a>
                        <a href='#' class='list-group-item list-group-item-action'>
                            <div class='notification-info'>
                                <div class='notification-list-user-img'><img src='assets/images/avatar-5.jpg' alt='' class='user-avatar-md rounded-circle'></div>
                                <div class='notification-list-user-block'><span class='notification-list-user-name'>Jessica Caruso</span>accepted your invitation to join the team.
                                    <div class='notification-date'>2 min ago</div>
                                </div>
                            </div>
                        </a>
                    </div>
                </div>
            </li>
        </ul>
    </li>
    <li class='nav-item dropdown nav-user'>
        <a class='nav-link nav-user-img' href='#' id='navbarDropdownMenuLink2' data-toggle='dropdown' aria-haspopup='true' aria-expanded='false'><img src='assets/images/avatar-1.jpg' alt='' class='user-avatar-md rounded-circle'></a>
        <div class='dropdown-menu dropdown-menu-right nav-user-dropdown' aria-labelledby='navbarDropdownMenuLink2'>
            <div class='nav-user-info'>
                <h5 class='mb-0 text-white nav-user-name'>John Abraham</h5>
                <span class='status'></span><span class='ml-2'>Available</span>
            </div>
            <a class='dropdown-item' href='#'><i class='fas fa-user mr-2'></i>Account</a>
            <a class='dropdown-item' href='#'><i class='fas fa-cog mr-2'></i>Setting</a>
            <a class='dropdown-item' href='#'><i class='fas fa-power-off mr-2'></i>Logout</a>
        </div>
    </li>
    ";
}

?>