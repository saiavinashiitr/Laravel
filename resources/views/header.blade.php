<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="{{ URL ::asset('user_temp/images/required/ico/favicon.ico')}}">
    <!-- Fav and touch icons -->
    <link rel="apple-touch-icon-precomposed" sizes="144x144" href="{{ URL ::asset('user_temp/images/required/ico/apple-touch-icon-144-precomposed.png')}}">
    <link rel="apple-touch-icon-precomposed" sizes="114x114" href="{{ URL ::asset('user_temp/images/required/ico/apple-touch-icon-114-precomposed.png')}}">
    <link rel="apple-touch-icon-precomposed" sizes="72x72" href="{{ URL ::asset('user_temp/images/required/ico/apple-touch-icon-72-precomposed.png')}}">
    <link rel="apple-touch-icon-precomposed" href="{{ URL ::asset('user_temp/images/required/ico/apple-touch-icon-57-precomposed.png')}}">
    <link rel="shortcut icon" href="{{ URL ::asset('user_temp/images/required/ico/favicon.png')}}">

    <title>Circloid - Responsive HTML Admin Template</title>

    <!-- Required CSS Files -->
    <link type="text/css" href="{{ URL ::asset('user_temp/css/required/bootstrap/bootstrap.min.css')}}" rel="stylesheet">
    <link href='http://fonts.googleapis.com/css?family=Roboto:400,300&subset=latin,latin-ext' rel='stylesheet' type='text/css'>
    <link type="text/css" href="{{ URL ::asset('user_temp/js/required/jquery-ui-1.11.0.custom/jquery-ui.min.css')}}" rel="stylesheet" />
    <link type="text/css" href="{{ URL ::asset('user_temp/js/required/jquery-ui-1.11.0.custom/jquery-ui.structure.min.css')}}" rel="stylesheet" />
    <link type="text/css" href="{{ URL ::asset('user_temp/js/required/jquery-ui-1.11.0.custom/jquery-ui.theme.min.css')}}" rel="stylesheet" />
    <link type="text/css" href="{{ URL ::asset('user_temp/css/required/mCustomScrollbar/jquery.mCustomScrollbar.min.css')}}" rel="stylesheet" />
    <link type="text/css" href="{{ URL ::asset('user_temp/css/required/icheck/all.css')}}" rel="stylesheet" />
    <link type="text/css" href="{{ URL ::asset('user_temp/fonts/metrize-icons/styles-metrize-icons.css')}}" rel="stylesheet">

    <!-- Optional CSS Files -->
    <link type="text/css" href="{{ URL ::asset('user_temp/css/optional/jqvmap/jqvmap.css')}}" rel="stylesheet" />
    <link type="text/css" href="{{ URL ::asset('user_temp/css/optional/jqvmap/circloid-jqvmap.css')}}" rel="stylesheet" />
    <link type="text/css" href="{{ URL ::asset('user_temp/css/optional/fullcalendar/fullcalendar.min.css')}}" rel="stylesheet" />
    <link type="text/css" href="{{ URL ::asset('user_temp/css/optional/fullcalendar/circloid-fullcalendar.css')}}" rel="stylesheet" />
    <link type="text/css" href="{{ URL ::asset('user_temp/css/optional/fullcalendar/fullcalendar.print.css')}}" rel="stylesheet" media="print" />
    <link type="text/css" href="{{ URL ::asset('user_temp/css/optional/bootstrap-datetimepicker.min.css')}}" rel="stylesheet" />
    <!-- add CSS files here -->

    <!-- More Required CSS Files -->
    <link type="text/css" href="{{ URL ::asset('user_temp/css/styles-core.css')}}" rel="stylesheet" />
    <link type="text/css" href="{{ URL ::asset('user_temp/css/styles-core-responsive.css')}}" rel="stylesheet" />

    <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
    <script src="{{ URL ::asset('user_temp/js/required/misc/ie10-viewport-bug-workaround.js')}}"></script>

   
</head>
<body>
    <div class="container-fluid">
        <!-- START Header Container -->
        <div id="header-container">
            <div class="header-bar navbar navbar-inverse" role="navigation"> <!-- NOTE TO READER: Accepts the following class(es) "navbar-fixed-top" class -->
                <div class="container">
                    <div class="navbar-header">
                        <!-- START logo -->
                        <div class="logo">
                            <a href="index.html">
                                <img class="default-logo" src="{{ URL ::asset('user_temp/images/required/logo-default.png')}}" width="156" height="44" alt="Logo" />
                                <img class="small-logo" src="{{ URL ::asset('user_temp/images/required/logo-small.png')}}" width="48" height="44" alt="Logo" />
                            </a>
                        </div>
                        <!-- END logo -->

                        <!-- START Mobile Menu Toggle -->
                        <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                            <span class="sr-only">Toggle navigation</span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                        </button>
                        <!-- END Mobile Menu Toggle -->

                        <!-- START Language Selector -->
                        <div class="header-language"> <!-- NOTE TO READER: Accepts the following class(es) "animate" class -->
                            <ul>
                                <li>
                                    <a href="#" class="language-closed">
                                        <span aria-hidden="true" class="icon icon-wireframe-globe"></span>
                                        <span class="main-text">Language</span>
                                    </a>
                                    <a href="#" class="language-opened">
                                        <span aria-hidden="true" class="icon icon-cross"></span>
                                        <span class="main-text">Language</span>
                                    </a>
                                    <ul>
                                        <li class="language-list-item">
                                            <div class="language-block">
                                                <a href="#">
                                                    <span class="language-flag">
                                                        <img src="{{ URL ::asset('user_temp/images/optional/flags/united-kingdom.png')}}" width="32" height="32" alt="english-flag" />
                                                    </span>
                                                    <span class="language-name">
                                                        English
                                                    </span>
                                                </a>
                                            </div>
                                        </li>
                                        <li class="language-list-item">
                                            <div class="language-block">
                                                <a href="#">
                                                    <span class="language-flag">
                                                        <img src="{{ URL ::asset('user_temp/images/optional/flags/spain.png')}}" width="32" height="32" alt="espanol-flag" />
                                                    </span>
                                                    <span class="language-name">
                                                        Español
                                                    </span>
                                                </a>
                                            </div>
                                        </li>
                                        <li class="language-list-item">
                                            <div class="language-block">
                                                <a href="#">
                                                    <span class="language-flag">
                                                        <img src="{{ URL ::asset('user_temp/images/optional/flags/germany.png')}}" width="32" height="32" alt="germany-flag" />
                                                    </span>
                                                    <span class="language-name">
                                                        Deutsch
                                                    </span>
                                                </a>
                                            </div>
                                        </li>
                                        <li class="language-list-item">
                                            <div class="language-block">
                                                <a href="#">
                                                    <span class="language-flag">
                                                        <img src="{{ URL ::asset('user_temp/images/optional/flags/china.png')}}" width="32" height="32" alt="china-flag" />
                                                    </span>
                                                    <span class="language-name">
                                                        中文
                                                    </span>
                                                </a>
                                            </div>
                                        </li>
                                    </ul>
                                </li>
                            </ul>
                        </div>
                        <!-- END Language Selector -->

                        <!-- START Search Bar -->
                        <div class="header-search"> <!-- NOTE TO READER: Accepts the following class(es) "animate" class -->
                            <form role="form" class="icheck-square" method="post" action="pages-search-results.html">
                                <ul>
                                    <li>
                                        <a href="#" class="search-closed">
                                            <span aria-hidden="true" class="icon icon-search"></span>
                                            <span class="main-text">Search</span>
                                        </a>
                                        <a href="#" class="search-opened">
                                            <span aria-hidden="true" class="icon icon-cross"></span>
                                            <span class="main-text">Search</span>
                                        </a>
                                        <ul>
                                            <li class="simple-search">
                                                <div class="simple-search-inner">
                                                    <div class="simple-search-block">
                                                        <div class="input-group">
                                                            <input type="text" class="form-control" id="input-search" placeholder="Enter Search Terms...">
                                                            <span class="input-group-btn">
                                                                <button type="submit" class="btn btn-default">
                                                                    <span class="main-text">Search</span>
                                                                </button>
                                                            </span>
                                                        </div>
                                                        <div class="checkbox">
                                                            <label>
                                                                <input type="checkbox" id="input-advanced-search"> Use Advanced Search
                                                            </label>
                                                        </div>
                                                    </div>
                                                </div>
                                            </li>
                                            <li class="advanced-search">
                                                <div class="advanced-search-block">
                                                    <div class="form-group">
                                                        <label for="input-advanced-select">Advanced Option as dropdown list</label>
                                                        <select id="input-advanced-select" class="form-control">
                                                            <option>Advanced Option 1</option>
                                                            <option>Advanced Option 2</option>
                                                            <option>Advanced Option 3</option>
                                                            <option>Advanced Option 4</option>
                                                        </select>
                                                    </div>

                                                    <div class="checkbox">
                                                        <label>
                                                            <input type="checkbox" value="" id="input-advanced-checkbox-1">
                                                            Must contain at least one search term
                                                        </label>
                                                    </div>

                                                    <div class="radio">
                                                        <label>
                                                            <input type="radio" name="input-advanced-radio-set-1" id="input-advanced-radio-1" value="option1" checked>
                                                            Must only be in "Themes" category
                                                        </label>
                                                    </div>
                                                    <div class="radio">
                                                        <label>
                                                            <input type="radio" name="input-advanced-radio-set-1" id="input-advanced-radio-2" value="option2">
                                                            Must only be in "Plugins" category
                                                        </label>
                                                    </div>
                                                </div>
                                            </li>
                                        </ul>
                                    </li>
                                </ul>
                            </form>
                        </div>
                        <!-- END Search Bar -->

                        <!-- START Header Info Container -->
                        <div class="header-info">
                            <!-- START Header User Profile -->
                            <div class="header-profile"> <!-- NOTE TO READER: Accepts the following class(es) "animate" class -->
                                <ul class="header-profile-menu">
                                    <li>
                                        <a href="#" class="top">
                                            <span class="header-profile-menu-icon">
                                                <img class="list-thumbnail" src="http://placehold.it/39x39" width="39" height="39" alt="39x39" />
                                            </span>
                                            <span class="main-menu-text">
                                                Ken Adams
                                                <i class="icon icon-arrow-down-bold-round icon-size-small"></i>
                                            </span>
                                        </a>
                                        <ul>
                                            <li>
                                                <a href="pages-profile-admin.html">
                                                    <span aria-hidden="true" class="icon icon-user"></span>
                                                    <span class="main-text">Profile</span>
                                                </a>
                                            </li>
                                            <li>
                                                <a href="pages-mailbox-inbox.html">
                                                    <span aria-hidden="true" class="icon icon-mail"></span>
                                                    <span class="main-text">
                                                        <span class="badge pull-right">42</span>
                                                        Mailbox
                                                    </span>
                                                </a>
                                            </li>
                                            <li>
                                                <a href="pages-calendar.html">
                                                    <span aria-hidden="true" class="icon icon-star "></span>
                                                    <span class="main-text">
                                                        Calendar
                                                        <span class="badge pull-right">9</span>
                                                    </span>
                                                </a>
                                            </li>
                                            <li>
                                                <a href="pages-signin-1.html">
                                                    <span aria-hidden="true" class="icon icon-arrow-curve-right"></span>
                                                    <span class="main-text">Logout</span>
                                                </a>
                                            </li>
                                        </ul>
                                    </li>
                                </ul>
                            </div>
                            <!-- END Header User Profile -->

                            <!-- START Header Notification Alert -->
                            <div class="header-notifications"> <!-- NOTE TO READER: Accepts the following class(es) "animate" class -->
                                <ul class="header-notifications-inner">
                                    <li class="notifications-alert-info notifications-alert notifications-alert-mobile">
                                        <a href="#">
                                            <span aria-hidden="true" class="icon icon-three-points"></span>
                                        </a>
                                    </li>
                                    <li class="notifications-alert-info notifications-alert">
                                        <a href="#">
                                            <span aria-hidden="true" class="icon icon-email-download"></span>
                                        </a>
                                        <span class="badge badge-bordered pull-bottom-right highlight-color-orange">4</span>
                                        <ul>
                                            <li class="notifications-alert-desc">
                                                <p>You have 4 new messages</p>
                                            </li>
                                            <li class="notifications-alert-block">
                                                <ul class="notifications-alert-list">
                                                    <li class="notifications-alert-list-item">
                                                        <a href="#">
                                                            <span class="notifications-alert-list-text">
                                                                <span class="notifications-alert-list-image">
                                                                    <img class="list-thumbnail" src="http://placehold.it/40x40" width="40" height="40" alt="40x40" />
                                                                </span>
                                                                <span class="notifications-alert-list-header">Samantha Carter</span>
                                                                Re: Updated proposal. Approved.
                                                                <span class="timestamp">Just now</span>
                                                            </span>
                                                        </a>
                                                    </li>
                                                    <li class="notifications-alert-list-item">
                                                        <a href="#">
                                                            <span class="notifications-alert-list-text">
                                                                <span class="notifications-alert-list-image">
                                                                    <img class="list-thumbnail" src="http://placehold.it/40x40" width="40" height="40" alt="40x40" />
                                                                </span>
                                                                <span class="notifications-alert-list-header">Daniel Jackson</span>
                                                                Meeting minutes attached
                                                                <span class="timestamp">2 minutes ago</span>
                                                            </span>
                                                        </a>
                                                    </li>
                                                    <li class="notifications-alert-list-item">
                                                        <a href="#">
                                                            <span class="notifications-alert-list-text">
                                                                <span class="notifications-alert-list-image">
                                                                    <img class="list-thumbnail" src="http://placehold.it/40x40" width="40" height="40" alt="40x40" />
                                                                </span>
                                                                <span class="notifications-alert-list-header">Sally Skyler</span>
                                                                Bug Report #2
                                                                <span class="timestamp">2 hours ago</span>
                                                            </span>
                                                        </a>
                                                    </li>
                                                    <li class="notifications-alert-list-item">
                                                        <a href="#">
                                                            <span class="notifications-alert-list-text">
                                                                <span class="notifications-alert-list-image">
                                                                    <img class="list-thumbnail" src="http://placehold.it/40x40" width="40" height="40" alt="40x40" />
                                                                </span>
                                                                <span class="notifications-alert-list-header">Teal'c Jafar</span>
                                                                Interesting Sales Tips
                                                                <span class="timestamp">5 hours ago</span>
                                                            </span>
                                                        </a>
                                                    </li>
                                                </ul>
                                            </li>
                                            <li class="notifications-alert-more">
                                                <p>
                                                    <a href="#">See all messages<i class="icon icon-arrow-right-bold-round icon-size-small"></i></a>
                                                </p>
                                            </li>
                                        </ul>
                                    </li>
                                    <li class="notifications-alert-info notifications-alert">
                                        <a href="#">
                                            <span aria-hidden="true" class="icon icon-info"></span>
                                        </a>
                                        <span class="badge badge-bordered pull-bottom-right highlight-color-orange">5</span>
                                        <ul>
                                            <li class="notifications-alert-desc">
                                                <p>You have 5 new notifications</p>
                                            </li>
                                            <li class="notifications-alert-block">
                                                <ul class="notifications-alert-list">
                                                    <li class="notifications-alert-list-item">
                                                        <a href="#">
                                                            <span class="notifications-alert-list-text">
                                                                <span class="notifications-alert-list-icon">
                                                                    <span class="icon icon-settings"></span>
                                                                </span>
                                                                System upgrade complete
                                                                <span class="timestamp">Just now</span>
                                                            </span>
                                                        </a>
                                                    </li>
                                                    <li class="notifications-alert-list-item">
                                                        <a href="#">
                                                            <span class="notifications-alert-list-text">
                                                                <span class="notifications-alert-list-icon">
                                                                    <span class="icon icon-user-add"></span>
                                                                </span>
                                                                <span class="main-text">
                                                                    Bulk user email import
                                                                    <span class="progress">
                                                                        <span class="progress-bar progress-bar-success" role="progressbar" aria-valuenow="40" aria-valuemin="0" aria-valuemax="100" style="width: 40%">
                                                                            <span class="sr-only">40% Complete (success)</span>
                                                                        </span>
                                                                    </span>
                                                                </span>
                                                                <span class="timestamp">4 minutes ago</span>
                                                            </span>
                                                        </a>
                                                    </li>
                                                    <li class="notifications-alert-list-item">
                                                        <a href="#">
                                                            <span class="notifications-alert-list-text">
                                                                <span class="notifications-alert-list-icon">
                                                                    <span class="icon icon-info"></span>
                                                                </span>
                                                                You now have a total of 2500 registered users.
                                                                <span class="timestamp">5 minutes ago</span>
                                                            </span>
                                                        </a>
                                                    </li>
                                                    <li class="notifications-alert-list-item">
                                                        <a href="#">
                                                            <span class="notifications-alert-list-text">
                                                                <span class="notifications-alert-list-icon">
                                                                    <span class="icon icon-sos"></span>
                                                                </span>
                                                                General maintenance
                                                                <span class="progress">
                                                                    <span class="progress-bar progress-bar-warning" role="progressbar" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100" style="width: 60%">
                                                                        <span class="sr-only">60% Complete (success)</span>
                                                                    </span>
                                                                </span>
                                                                <span class="timestamp">10 minutes ago</span>
                                                            </span>
                                                        </a>
                                                    </li>
                                                    <li class="notifications-alert-list-item">
                                                        <a href="#">
                                                            <span class="notifications-alert-list-text">
                                                                <span class="notifications-alert-list-icon">
                                                                    <span class="icon icon-user-add"></span>
                                                                </span>
                                                                New user registration
                                                                <span class="timestamp">30 minutes ago</span>
                                                            </span>
                                                        </a>
                                                    </li>
                                                    <li class="notifications-alert-list-item">
                                                        <a href="#">
                                                            <span class="notifications-alert-list-text">
                                                                <span class="notifications-alert-list-icon">
                                                                    <span class="icon icon-comments"></span>
                                                                </span>
                                                                You have a new chat message
                                                                <span class="timestamp">1 hour ago</span>
                                                            </span>
                                                        </a>
                                                    </li>
                                                    <li class="notifications-alert-list-item">
                                                        <a href="#">
                                                            <span class="notifications-alert-list-text">
                                                                <span class="notifications-alert-list-icon">
                                                                    <span class="icon icon-pin"></span>
                                                                </span>
                                                                New location added
                                                                <span class="timestamp">Yesterday</span>
                                                            </span>
                                                        </a>
                                                    </li>
                                                </ul>
                                            </li>
                                            <li class="notifications-alert-more">
                                                <p>
                                                    <a href="#">See all notifications<i class="icon icon-arrow-right-bold-round icon-size-small"></i></a>
                                                </p>
                                            </li>
                                        </ul>
                                    </li>
                                </ul>
                            </div>
                            <!-- END Header Notification Alert -->

                        </div>
                        <!-- END Header Info Container -->

                    </div>
                </div>
            </div>
        </div>
        <!-- END Header Container -->
        <!-- START Body Container -->
        <div id="body-container">

            <!-- START Left Column -->
            <div id="left-column" class=""> <!-- NOTE TO READER: Accepts the following class(es) "menu-icon-only", "fixed" class -->
                <div id="mainnav">
                    <ul class="mainnav"> <!-- NOTE TO READER: Accepts the following class(es) "animate" class -->
                        <li class="menu-item-top selected">
                            <a href="index.html" class="top">
                                <span class="main-menu-icon">
                                    <span aria-hidden="true" class="icon icon-grid-big"></span>
                                </span>
                                <span class="main-menu-text">Dashboard</span>
                            </a>
                        </li>
                        <li class="menu-item-top">
                            <a href="#" class="top">
                                <span class="main-menu-icon">
                                    <span aria-hidden="true" class="icon icon-dollar"></span>
                                </span>
                                <span class="main-menu-text">eCommerce</span>
                            </a>
                            <ul>
                                <li><a href="ecommerce-dashboard-1.html">Dashboard</a></li>
                                <li><a href="ecommerce-order-list.html">Order List</a></li>
                                <li><a href="ecommerce-order-view.html">Order View</a></li>
                                <li><a href="ecommerce-product-list.html">Product List</a></li>
                                <li><a href="ecommerce-product-edit.html">Product Edit</a></li>
                            </ul>
                        </li>
                        <li class="menu-item-top">
                            <a href="#" class="top">
                                <span class="main-menu-icon">
                                    <span aria-hidden="true" class="icon icon-layers"></span>
                                </span>
                                <span class="badge pull-right-corner">3</span>
                                <span class="main-menu-text">Layouts</span>
                            </a>
                            <ul>
                                <li><a href="menu-left-header-fixed.html">Left Menu (Fixed Header)</a></li>
                                <li><a href="menu-left-icon-only.html">Left Menu (Icon Only)</a></li>
                                <li><a href="menu-left-fixed.html">Left Menu (Fixed)</a></li>
                                <li><a href="menu-left-boxed.html">Boxed Layout</a></li>
                                <li><a href="menu-horizontal-normal.html">Horizontal Menu (Normal)</a></li>
                                <li><a href="menu-horizontal-text-only.html">Horizontal Menu (Text Only)</a></li>
                                <li><a href="menu-horizontal-fixed.html">Horizontal Menu (Fixed + Header)</a></li>
                                <li><a href="menu-horizontal-boxed.html">Boxed Layout (Horizontal Menu)</a></li>
                            </ul>
                        </li>
                        <li class="menu-item-top">
                            <a href="#" class="top">
                                <span class="main-menu-icon">
                                    <span aria-hidden="true" class="icon icon-star"></span>
                                </span>
                                <span class="main-menu-text">UI Kits</span>
                            </a>
                            <ul>
                                <li><a href="ui-blocks.html">Blocks</a></li>
                                <li><a href="ui-panels-wells.html">Panels &amp; Wells</a></li>
                                <li><a href="ui-buttons.html">Buttons</a></li>
                                <li><a href="ui-widgets.html">Widgets</a></li>
                                <li><a href="ui-charts.html">Charts</a></li>
                                <li><a href="ui-icons.html">Icons</a></li>
                                <li><a href="ui-typography.html">Typography</a></li>
                                <li><a href="ui-tabs-accordions.html">Tabs &amp; Accordions</a></li>
                                <li><a href="ui-tooltips-popover.html">Tooltips &amp; Popover</a></li>
                                <li><a href="ui-modal.html">Modal</a></li>
                                <li><a href="ui-bootstrap-others.html">Other Bootstrap Elements</a></li>
                                <li><a href="ui-notification-toastr.html">Notifications (Toastr)</a></li>
                                <li><a href="ui-grid-layout.html">Grid Layout</a></li>
                            </ul>
                        </li>
                        <li class="menu-item-top">
                            <a href="#" class="top">
                                <span class="main-menu-icon">
                                    <span aria-hidden="true" class="icon icon-documents"></span>
                                </span>
                                <span class="badge pull-right-corner hidden-collapsed highlight-color-green">7</span>
                                <span class="main-menu-text">Pages</span>
                            </a>
                            <ul>
                                <li><a href="pages-blank.html">Blank Page</a></li>
                                <li><a href="pages-basic-text.html">Basic Text Page</a></li>
                                <li><a href="pages-search-results.html">Search Results</a></li>
                                <li><a href="pages-mailbox-inbox.html">Mailbox - Inbox</a></li>
                                <li><a href="pages-profile.html">Profile - Customer</a></li>
                                <li><a href="pages-profile-admin.html">Profile - Admin</a></li>
                                <li><a href="pages-signup.html">Sign Up</a></li>
                                <li><a href="pages-signin-1.html">Sign In - Type 1</a></li>
                                <li>
                                    <a href="pages-signin-2.html">
                                        <span class="badge pull-right">Fancy Effects</span>
                                        Sign In - Type 2
                                    </a>
                                </li>
                                <li><a href="pages-forgot-password.html">Forgot Password</a></li>
                                <li><a href="pages-404.html">404 Page</a></li>
                                <li><a href="pages-500.html">500 Page</a></li>
                                <li><a href="pages-invoice.html">Invoice</a></li>
                                <li><a href="pages-changelog-faqs.html">Changelog/FAQs</a></li>
                                <li><a href="pages-calendar.html">Calendar</a></li>
                                <li><a href="pages-task-list.html">Task List</a></li>
                                <li><a href="pages-timeline.html">Timeline</a></li>
                                <li><a href="pages-pricelist.html">Price List</a></li>
                            </ul>
                        </li>
                        <li class="menu-item-top">
                            <a href="#" class="top">
                                <span class="main-menu-icon">
                                    <span aria-hidden="true" class="icon icon-settings"></span>
                                </span>
                                <span class="main-menu-text">Forms</span>
                            </a>
                            <ul>
                                <li><a href="form-elements.html">Form Elements</a></li>
                                <li>
                                    <a href="form-extras.html">
                                        <span class="badge pull-right">Goodies</span>
                                        Form Extras
                                    </a>
                                </li>
                                <li><a href="form-validation.html">Form Validation</a></li>
                                <li><a href="form-wizard.html">Form Wizard</a></li>
                                <li><a href="form-file-upload.html">Form Upload</a></li>
                                <li><a href="form-image-cropping.html">Image Cropping</a></li>
                            </ul>
                        </li>
                        <li class="menu-item-top">
                            <a href="#" class="top">
                                <span class="main-menu-icon">
                                    <span aria-hidden="true" class="icon icon-grids"></span>
                                </span>
                                <span class="main-menu-text">Tables</span>
                            </a>
                            <ul>
                                
                                <li><a href="tables-basic.html">Basic Tables</a></li>
                                <li><a href="tables-responsive.html">Responsive Tables</a></li>
                                <li><a href="tables-datatables.html">Data Tables</a></li>
                            </ul>
                        </li>
                        <li class="menu-item-top">
                            <a href="#" class="top">
                                <span class="main-menu-icon">
                                    <span aria-hidden="true" class="icon icon-block-menu"></span>
                                </span>
                                <span class="main-menu-text">Menu Levels</span>
                            </a>
                            <ul>
                                <li>
                                    <a href="#">Menu Level 1.1</a>
                                    <ul>
                                        <li>
                                            <a href="#">Menu Level 2.1</a>
                                            <ul>
                                                <li>
                                                    <a href="#">Menu Level 3.1</a>
                                                    <ul>
                                                        <li>
                                                            <a href="#">Menu Level 4.1</a>
                                                            <ul>
                                                                <li><a href="#">Menu Level 5.1</a></li>
                                                                <li><a href="#">Menu Level 5.2</a></li>
                                                                <li><a href="#">Menu Level 5.3</a></li>
                                                            </ul>
                                                        </li>
                                                        <li><a href="#">Menu Level 4.2</a></li>
                                                        <li><a href="#">Menu Level 4.3</a></li>
                                                    </ul>
                                                </li>
                                                <li><a href="#">Menu Level 3.2</a></li>
                                                <li><a href="#">Menu Level 3.3</a></li>
                                            </ul>
                                        </li>
                                        <li><a href="#">Menu Level 2.2</a></li>
                                        <li><a href="#">Menu Level 2.3</a></li>
                                    </ul>
                                </li>
                                <li><a href="#">Menu Level 1.2</a></li>
                                <li><a href="#">Menu Level 1.3</a></li>
                            </ul>
                        </li>
                        <li class="menu-item-top">
                            <a href="#" class="top">
                                <span class="main-menu-icon">
                                    <span aria-hidden="true" class="icon icon-map"></span>
                                </span>
                                <span class="main-menu-text">Maps</span>
                            </a>
                            <ul>
                                <li><a href="maps-google.html">Google Maps</a></li>
                                <li><a href="maps-vector.html">Vector Maps</a></li>
                            </ul>
                        </li>
                    </ul>
                </div>
            </div>
            <!-- END Left Column -->