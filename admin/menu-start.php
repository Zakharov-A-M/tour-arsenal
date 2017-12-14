<?php
include_once 'header.php';
if ($_COOKIE['id'] == null) {
    header("Location: ".$host_name);
};
?>

<div class='page-topbar '>
    <div class='logo-area'>

    </div>
    <div class='quick-area'>
        <div class='pull-left'>
            <ul class="info-menu left-links list-inline list-unstyled">
                <li class="sidebar-toggle-wrap">
                    <a href="#" data-toggle="sidebar" class="sidebar_toggle">
                        <i class="fa fa-bars"></i>
                    </a>
                </li>
                <li class="">
                    <a href="#" data-toggle="dropdown" class="toggle">
                        <i class="fa fa-envelope"></i>
                        <span class="badge badge-primary">7</span>
                    </a>
                    <ul class="dropdown-menu messages animated fadeIn">

                        <li class="list">

                            <ul class="dropdown-menu-list list-unstyled ps-scrollbar">
                                <li class="unread status-available">
                                    <a href="javascript:;">
                                        <div class="user-img">
                                            <img src="" alt="user-image" class="img-circle img-inline">
                                        </div>
                                        <div>
                                                    <span class="name">
                                                        <strong>Clarine Vassar</strong>
                                                        <span class="time small">- 15 mins ago</span>
                                                        <span class="profile-status available pull-right"></span>
                                                    </span>
                                            <span class="desc small">
                                                        Sometimes it takes a lifetime to win a battle.
                                                    </span>
                                        </div>
                                    </a>
                                </li>
                                <li class=" status-away">
                                    <a href="javascript:;">
                                        <div class="user-img">
                                            <img src="" alt="user-image" class="img-circle img-inline">
                                        </div>
                                        <div>
                                                    <span class="name">
                                                        <strong>Brooks Latshaw</strong>
                                                        <span class="time small">- 45 mins ago</span>
                                                        <span class="profile-status away pull-right"></span>
                                                    </span>
                                            <span class="desc small">
                                                        Sometimes it takes a lifetime to win a battle.
                                                    </span>
                                        </div>
                                    </a>
                                </li>
                                <li class=" status-busy">
                                    <a href="javascript:;">
                                        <div class="user-img">
                                            <img src="" alt="user-image" class="img-circle img-inline">
                                        </div>
                                        <div>
                                                    <span class="name">
                                                        <strong>Clementina Brodeur</strong>
                                                        <span class="time small">- 1 hour ago</span>
                                                        <span class="profile-status busy pull-right"></span>
                                                    </span>
                                            <span class="desc small">
                                                        Sometimes it takes a lifetime to win a battle.
                                                    </span>
                                        </div>
                                    </a>
                                </li>
                                <li class=" status-offline">
                                    <a href="javascript:;">
                                        <div class="user-img">
                                            <img src="" alt="user-image" class="img-circle img-inline">
                                        </div>
                                        <div>
                                                    <span class="name">
                                                        <strong>Carri Busey</strong>
                                                        <span class="time small">- 5 hours ago</span>
                                                        <span class="profile-status offline pull-right"></span>
                                                    </span>
                                            <span class="desc small">
                                                        Sometimes it takes a lifetime to win a battle.
                                                    </span>
                                        </div>
                                    </a>
                                </li>
                                <li class=" status-offline">
                                    <a href="javascript:;">
                                        <div class="user-img">
                                            <img src="" alt="user-image" class="img-circle img-inline">
                                        </div>
                                        <div>
                                                    <span class="name">
                                                        <strong>Melissa Dock</strong>
                                                        <span class="time small">- Yesterday</span>
                                                        <span class="profile-status offline pull-right"></span>
                                                    </span>
                                            <span class="desc small">
                                                        Sometimes it takes a lifetime to win a battle.
                                                    </span>
                                        </div>
                                    </a>
                                </li>
                                <li class=" status-available">
                                    <a href="javascript:;">
                                        <div class="user-img">
                                            <img src="" alt="user-image" class="img-circle img-inline">
                                        </div>
                                        <div>
                                                    <span class="name">
                                                        <strong>Verdell Rea</strong>
                                                        <span class="time small">- 14th Mar</span>
                                                        <span class="profile-status available pull-right"></span>
                                                    </span>
                                            <span class="desc small">
                                                        Sometimes it takes a lifetime to win a battle.
                                                    </span>
                                        </div>
                                    </a>
                                </li>
                                <li class=" status-busy">
                                    <a href="javascript:;">
                                        <div class="user-img">
                                            <img src="" alt="user-image" class="img-circle img-inline">
                                        </div>
                                        <div>
                                                    <span class="name">
                                                        <strong>Linette Lheureux</strong>
                                                        <span class="time small">- 16th Mar</span>
                                                        <span class="profile-status busy pull-right"></span>
                                                    </span>
                                            <span class="desc small">
                                                        Sometimes it takes a lifetime to win a battle.
                                                    </span>
                                        </div>
                                    </a>
                                </li>
                                <li class=" status-away">
                                    <a href="javascript:;">
                                        <div class="user-img">
                                            <img src="" alt="user-image" class="img-circle img-inline">
                                        </div>
                                        <div>
                                                    <span class="name">
                                                        <strong>Araceli Boatright</strong>
                                                        <span class="time small">- 16th Mar</span>
                                                        <span class="profile-status away pull-right"></span>
                                                    </span>
                                            <span class="desc small">
                                                        Sometimes it takes a lifetime to win a battle.
                                                    </span>
                                        </div>
                                    </a>
                                </li>

                            </ul>

                        </li>

                        <li class="external">
                            <a href="javascript:;">
                                <span>Read All Messages</span>
                            </a>
                        </li>
                    </ul>

                </li>
                <li class="">
                    <a href="#" data-toggle="dropdown" class="toggle">
                        <i class="fa fa-bell"></i>
                        <span class="badge badge-orange">3</span>
                    </a>
                    <ul class="dropdown-menu notifications animated fadeIn">
                        <li class="total">
                                    <span class="small">
                                        You have <strong>3</strong> new notifications.
                                        <a href="javascript:;" class="pull-right">Mark all as Read</a>
                                    </span>
                        </li>
                        <li class="list">

                            <ul class="dropdown-menu-list list-unstyled ps-scrollbar">
                                <li class="unread available"> <!-- available: success, warning, info, error -->
                                    <a href="javascript:;">
                                        <div class="notice-icon">
                                            <i class="fa fa-check"></i>
                                        </div>
                                        <div>
                                                    <span class="name">
                                                        <strong>Server needs to reboot</strong>
                                                        <span class="time small">15 mins ago</span>
                                                    </span>
                                        </div>
                                    </a>
                                </li>
                                <li class="unread away"> <!-- available: success, warning, info, error -->
                                    <a href="javascript:;">
                                        <div class="notice-icon">
                                            <i class="fa fa-envelope"></i>
                                        </div>
                                        <div>
                                                    <span class="name">
                                                        <strong>45 new messages</strong>
                                                        <span class="time small">45 mins ago</span>
                                                    </span>
                                        </div>
                                    </a>
                                </li>
                                <li class=" busy"> <!-- available: success, warning, info, error -->
                                    <a href="javascript:;">
                                        <div class="notice-icon">
                                            <i class="fa fa-times"></i>
                                        </div>
                                        <div>
                                                    <span class="name">
                                                        <strong>Server IP Blocked</strong>
                                                        <span class="time small">1 hour ago</span>
                                                    </span>
                                        </div>
                                    </a>
                                </li>
                                <li class=" offline"> <!-- available: success, warning, info, error -->
                                    <a href="javascript:;">
                                        <div class="notice-icon">
                                            <i class="fa fa-user"></i>
                                        </div>
                                        <div>
                                                    <span class="name">
                                                        <strong>10 Orders Shipped</strong>
                                                        <span class="time small">5 hours ago</span>
                                                    </span>
                                        </div>
                                    </a>
                                </li>
                                <li class=" offline"> <!-- available: success, warning, info, error -->
                                    <a href="javascript:;">
                                        <div class="notice-icon">
                                            <i class="fa fa-user"></i>
                                        </div>
                                        <div>
                                                    <span class="name">
                                                        <strong>New Comment on blog</strong>
                                                        <span class="time small">Yesterday</span>
                                                    </span>
                                        </div>
                                    </a>
                                </li>
                                <li class=" available"> <!-- available: success, warning, info, error -->
                                    <a href="javascript:;">
                                        <div class="notice-icon">
                                            <i class="fa fa-check"></i>
                                        </div>
                                        <div>
                                                    <span class="name">
                                                        <strong>Great Speed Notify</strong>
                                                        <span class="time small">14th Mar</span>
                                                    </span>
                                        </div>
                                    </a>
                                </li>
                                <li class=" busy"> <!-- available: success, warning, info, error -->
                                    <a href="javascript:;">
                                        <div class="notice-icon">
                                            <i class="fa fa-times"></i>
                                        </div>
                                        <div>
                                                    <span class="name">
                                                        <strong>Team Meeting at 6PM</strong>
                                                        <span class="time small">16th Mar</span>
                                                    </span>
                                        </div>
                                    </a>
                                </li>

                            </ul>

                        </li>

                        <li class="external">
                            <a href="javascript:;">
                                <span>Read All Notifications</span>
                            </a>
                        </li>
                    </ul>
                </li>
                <li class="hidden-sm hidden-xs searchform">
                    <div class="input-group">
                                <span class="input-group-addon input-focus">
                                    <i class="fa fa-search"></i>
                                </span>
                        <form action="search-page.html" method="post">
                            <input type="text" class="form-control animated fadeIn" placeholder="Search & Enter">
                            <input type='submit' value="">
                        </form>
                    </div>
                </li>
            </ul>
        </div>
        <div class='pull-right'>
            <ul class="info-menu right-links list-inline list-unstyled">
                <li class="profile">
                    <a href="#" data-toggle="dropdown" class="toggle">
                        <img src="" alt="user-image" class="img-circle img-inline">
                        <span>Jason Bourne <i class="fa fa-angle-down"></i></span>
                    </a>
                    <ul class="dropdown-menu profile animated fadeIn">
                        <li>
                            <a href="#settings">
                                <i class="fa fa-wrench"></i>
                                Settings
                            </a>
                        </li>
                        <li>
                            <a href="#profile">
                                <i class="fa fa-user"></i>
                                Profile
                            </a>
                        </li>
                        <li>
                            <a href="#help">
                                <i class="fa fa-info"></i>
                                Help
                            </a>
                        </li>
                        <li class="last">
                            <a href="ui-login.html">
                                <i class="fa fa-lock"></i>
                                Logout
                            </a>
                        </li>
                    </ul>
                </li>
                <li class="chat-toggle-wrapper">
                    <a href="#" data-toggle="chatbar" class="toggle_chat">
                        <i class="fa fa-comments"></i>
                        <span class="badge badge-warning">9</span>
                    </a>
                </li>
            </ul>
        </div>
    </div>

</div>
<!-- END TOPBAR -->
<!-- START CONTAINER -->
<div class="page-container row-fluid">

    <!-- SIDEBAR - START -->
    <div class="page-sidebar ">


        <!-- MAIN MENU - START -->
        <div class="page-sidebar-wrapper" id="main-menu-wrapper">

            <ul class='wraplist' style="padding-top: 24px;">


                <li class="">
                    <a href="<?= $host_name.'/menu/review/' ?>">
                        <i class="fa fa-envelope"></i>
                        <span class="title">Отзывы</span>
                    </a>
                </li>
                <li class="">
                    <a href="<?= $host_name.'/menu/call/' ?>">
                        <i class="fa fa-phone"></i>
                        <span class="title">Заказ звонка</span>
                    </a>
                </li>
                <li class="">
                    <a href="<?= $host_name.'/menu/question/' ?>">
                        <i class="fa fa-question"></i>
                        <span class="title">Задали вопрос</span>
                    </a>
                </li>
                <li class="">
                    <a href="<?= $host_name.'/menu/services/' ?>">
                        <i class="fa fa-legal"></i>
                        <span class="title">Заказ услуги</span>
                    </a>
                </li>
                <li class="">
                    <a href="javascript:;">
                        <i class="fa fa-wrench"></i>
                        <span class="title">Настройки сайта</span>
                        <span class="arrow "></span>
                    </a>
                    <ul class="sub-menu" >
                        <li>
                            <a class="" href="<?= $host_name.'/menu/setting/site-name/' ?>">Название сайта</a>
                        </li>

                        <li>
                            <a class="" href="<?= $host_name.'/menu/setting/site-phone/' ?>">Телефоны сайта</a>
                        </li>
                    </ul>

              <!--  </li>
                <li class="">
                    <a href="javascript:;">
                        <i class="fa fa-sliders"></i>
                        <span class="title">Forms</span>
                        <span class="arrow "></span>
                    </a>
                    <ul class="sub-menu" >
                        <li>
                            <a class="" href="form-elements.html">Form Elements</a>
                        </li>
                        <li>
                            <a class="" href="form-components.html">Form Components</a>
                        </li>
                        <li>
                            <a class="" href="form-wizard.html">Form Wizard</a>
                        </li>
                        <li>
                            <a class="" href="form-validation.html">Form Validations</a>
                        </li>
                        <li>
                            <a class="" href="form-fileupload.html">File Upload & Dropzone</a>
                        </li>
                        <li>
                            <a class="" href="form-editors.html">Editors</a>
                        </li>
                        <li>
                            <a class="" href="form-masks.html">Input Masks</a>
                        </li>
                    </ul>
                </li>
                <li class="">
                    <a href="javascript:;">
                        <i class="fa fa-gift"></i>
                        <span class="title">Extra</span>
                        <span class="arrow "></span><span class="label label-orange">NEW</span>
                    </a>
                    <ul class="sub-menu" >
                        <li>
                            <a class="" href="ui-calendar.html">Calendar</a>
                        </li>
                        <li>
                            <a class="" href="ui-pricing.html">Pricing tables</a>
                        </li>
                        <li>
                            <a class="" href="ui-profile.html">Profile</a>
                        </li>
                        <li>
                            <a class="" href="ui-login.html">Login</a>
                        </li>
                        <li>
                            <a class="" href="ui-register.html">Registration</a>
                        </li>
                        <li>
                            <a class="" href="ui-timeline.html">Timeline</a>
                        </li>
                        <li>
                            <a class="" href="ui-invoice.html">Invoice</a>
                        </li>
                        <li>
                            <a class="" href="ui-members.html">Members</a>
                        </li>
                        <li>
                            <a class="" href="ui-gallery.html">Gallery</a>
                        </li>
                        <li>
                            <a class="" href="ui-search.html">Search</a>
                        </li>
                        <li>
                            <a class="" href="ui-blogs.html">Blogs</a>
                        </li>
                        <li>
                            <a class="" href="ui-imagecrop.html">Image cropper</a>
                        </li>
                        <li>
                            <a class="" href="ui-tocify.html">Tocify</a>
                        </li>
                        <li>
                            <a class="" href="ui-faq.html">FAQ</a>
                        </li>
                        <li>
                            <a class="" href="ui-404.html">404</a>
                        </li>
                        <li>
                            <a class="" href="ui-500.html">500</a>
                        </li>
                        <li>
                            <a class="" href="ui-lockscreen.html">Lock Screen</a>
                        </li>
                    </ul>
                </li>
                <li class="">
                    <a href="javascript:;">
                        <i class="fa fa-envelope"></i>
                        <span class="title">Mailbox</span>
                        <span class="arrow "></span><span class="label label-orange">4</span>
                    </a>
                    <ul class="sub-menu" >
                        <li>
                            <a class="" href="mail-inbox.html">Inbox</a>
                        </li>
                        <li>
                            <a class="" href="mail-compose.html">Compose</a>
                        </li>
                        <li>
                            <a class="" href="mail-view.html">View</a>
                        </li>
                    </ul>
                </li>
                <li class="">
                    <a href="javascript:;">
                        <i class="fa fa-bar-chart"></i>
                        <span class="title">Charts</span>
                        <span class="arrow"></span>
                    </a>
                    <ul class="sub-menu">
                        <li>
                            <a class="" href="charts-morris.html">Morris Charts</a>
                        </li>
                        <li>
                            <a class="" href="charts-chartjs.html">Chart JS</a>
                        </li>
                        <li>
                            <a class="" href="charts-flot.html">Flot Charts</a>
                        </li>
                        <li>
                            <a class="" href="charts-sparkline.html">Sparkline Charts</a>
                        </li>
                        <li>
                            <a class="" href="charts-easypiechart.html">PIE charts & Knobs</a>
                        </li>
                        <li>
                            <a class="" href="charts-rickshaw.html">Rickshaw Charts</a>
                        </li>
                    </ul>
                </li>
                <li class="">
                    <a href="javascript:;">
                        <i class="fa fa-table"></i>
                        <span class="title">Tables</span>
                        <span class="arrow "></span>
                    </a>
                    <ul class="sub-menu" >
                        <li>
                            <a class="" href="tables-basic.html">Basic tables</a>
                        </li>
                        <li>
                            <a class="" href="tables-data.html">Data Tables</a>
                        </li>
                        <li>
                            <a class="" href="tables-responsive.html">Responsive Tables</a>
                        </li>
                    </ul>
                </li>
                <li class="">
                    <a href="javascript:;">
                        <i class="fa fa-columns"></i>
                        <span class="title">Layouts</span>
                        <span class="arrow "></span>
                    </a>
                    <ul class="sub-menu" >
                        <li>
                            <a class="" href="layout-default.html">Default Layout</a>
                        </li>
                        <li>
                            <a class="" href="layout-collapsed.html">Collapsed Menu</a>
                        </li>
                        <li>
                            <a class="" href="layout-chat.html">Chat Open</a>
                        </li>
                        <li>
                            <a class="" href="layout-boxed.html">Boxed Layout</a>
                        </li>
                    </ul>
                </li>
                <li class="">
                    <a href="javascript:;">
                        <i class="fa fa-map-marker"></i>
                        <span class="title">Maps</span>
                        <span class="arrow "></span>
                    </a>
                    <ul class="sub-menu" >
                        <li>
                            <a class="" href="ui-vectormaps.html">Vector Maps</a>
                        </li>
                        <li>
                            <a class="" href="ui-googlemaps.html">Google Maps</a>
                        </li>
                        <li>
                            <a class="" href="ui-googlemapfull.html">Advanced Google Maps</a>
                        </li>
                    </ul>
                </li>

                <li class=""> <a href="javascript:;"> <i class="fa fa-folder-open"></i> <span class="title">Menu Levels</span> <span class="arrow "></span> </a>
                    <ul class="sub-menu">
                        <li > <a href="javascript:;"> <span class="title">Level 1.1</span> </a> </li>
                        <li > <a href="javascript:;"> <span class="title">Level 1.2</span> <span class="arrow "></span> </a>
                            <ul class="sub-menu">
                                <li > <a href="javascript:;"> <span class="title">Level 2.1</span> </a></li>
                                <li > <a href="ujavascript:;"> <span class="title">Level 2.2</span> <span class="arrow "></span></a>
                                    <ul class="sub-menu">
                                        <li > <a href="javascript:;"> <span class="title">Level 3.1</span> <span class="arrow "></span></a>
                                            <ul class="sub-menu">
                                                <li > <a href="ujavascript:;"> <span class="title">Level 4.1</span> </a> </li>
                                                <li > <a href="ujavascript:;"> <span class="title">Level 4.2</span> </a> </li>
                                            </ul>
                                        </li>
                                        <li > <a href="ujavascript:;"> <span class="title">Level 3.2</span> </a> </li>
                                    </ul>
                                </li>
                            </ul>
                        </li>
                    </ul>
                </li>-->

            </ul>

        </div>
        <!-- MAIN MENU - END -->






    </div>
    <!--  SIDEBAR - END -->
    <!-- START CONTENT -->
    <section id="main-content" class=" ">
        <section class="wrapper" style='margin-top:60px;display:inline-block;width:100%;padding:15px 0 0 15px;'>
            <div class="container" style="border: 1px solid #ccc; background: #f5f5f5; padding-bottom: 30px;">




