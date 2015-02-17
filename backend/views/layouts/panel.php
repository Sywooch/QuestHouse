<?php
use yii\helpers\Html;
?>

<div id="top-nav" class="fixed">

    <a href="#" class="brand">
        <span>Vaigasai</span>
        <span class="text-toggle"> Admin</span>
    </a>    <!-- END : brand -->

    <button type="button" class="navbar-toggle pull-left" id="sidebarToggle">
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
    </button> <!-- END : Mobile toggle -->

    <ul class="nav-notification clearfix">

        <li class="dropdown">
            <a class="dropdown-toggle" data-toggle="dropdown" href="#">
                <i class="fa fa-envelope fa-lg"></i>
                <span class="notification-label bounceIn animation-delay4">7</span>
            </a>
            <ul class="dropdown-menu message dropdown-1">
                <li><a>You have 4 new unread messages</a></li>

                <li>
                    <a class="clearfix" href="#">
                        <img src="images/demo/avatar-2.jpg" alt="User Avatar">
                        <div class="detail">
                            <strong>Veronica Lake</strong>
                            <p class="no-margin">Lorem ipsum dolor sit amet...</p>
                            <small class="text-muted"><i class="fa fa-clock-o"></i> 27m ago</small>
                        </div>
                    </a>
                </li>

                <li>
                    <a class="clearfix" href="#">
                        <img src="images/demo/avatar-3.jpg" alt="User Avatar">
                        <div class="detail">
                            <strong>Jane Doe</strong>
                            <p class="no-margin">Lorem ipsum dolor sit amet...</p>
                            <small class="text-muted"><i class="fa fa-clock-o"></i> 5hr ago</small>
                        </div>
                    </a>
                </li>

                <li>
                    <a class="clearfix" href="#">
                        <img src="images/demo/avatar-4.jpg" alt="User Avatar">
                        <div class="detail">
                            <strong>Bill Doe</strong>
                            <p class="no-margin">Lorem ipsum dolor sit amet...</p>
                            <small class="text-muted"><i class="fa fa-clock-o"></i> Yesterday</small>
                        </div>
                    </a>
                </li>

                <li>
                    <a class="clearfix" href="#">
                        <img src="images/demo/avatar-5.jpg" alt="User Avatar">
                        <div class="detail">
                            <strong>Baby Doe</strong>
                            <p class="no-margin">Lorem ipsum dolor sit amet...</p>
                            <small class="text-muted"><i class="fa fa-clock-o"></i> 9 Feb 2013</small>
                        </div>
                    </a>
                </li>

                <li><a href="#">View all messages</a></li>
            </ul>
        </li>   <!-- END : Notification -->

        <li class="dropdown hidden-xs">
            <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                <i class="fa fa-tasks fa-lg"></i>
                <span class="notification-label bounceIn animation-delay5">4</span>
            </a>
            <ul class="dropdown-menu task dropdown-2">
                <li><a href="#">You have 4 tasks to complete</a></li>

                <li>
                    <a href="#">
                        <div class="clearfix">
                            <span class="pull-left">Bug Fixes</span>
                            <small class="pull-right text-muted">78%</small>
                        </div>
                        <div class="progress">
                            <div class="progress-bar" style="width:78%"></div>
                        </div>
                    </a>
                </li>

                <li>
                    <a href="#">
                        <div class="clearfix">
                            <span class="pull-left">Software Updating</span>
                            <small class="pull-right text-muted">54%</small>
                        </div>
                        <div class="progress progress-striped">
                            <div class="progress-bar progress-bar-success" style="width:54%"></div>
                        </div>
                    </a>
                </li>

                <li>
                    <a href="#">
                        <div class="clearfix">
                            <span class="pull-left">Database Migration</span>
                            <small class="pull-right text-muted">23%</small>
                        </div>
                        <div class="progress">
                            <div class="progress-bar progress-bar-warning" style="width:23%"></div>
                        </div>
                    </a>
                </li>

                <li>
                    <a href="#">
                        <div class="clearfix">
                            <span class="pull-left">Unit Testing</span>
                            <small class="pull-right text-muted">92%</small>
                        </div>
                        <div class="progress progress-striped active">
                            <div class="progress-bar progress-bar-danger " style="width:92%"></div>
                        </div>
                    </a>
                </li>

                <li><a href="#">View all tasks</a></li>
            </ul>
        </li>   <!-- END : Tasks -->

        <li class="dropdown">
            <a class="dropdown-toggle" data-toggle="dropdown" href="#">
                <i class="fa fa-bell fa-lg"></i>
                <span class="notification-label bounceIn animation-delay6">5</span>
            </a>
            <ul class="dropdown-menu notification dropdown-3">
                <li><a href="#">You have 5 new notifications</a></li>
                <li>
                    <a href="#">
                                <span class="notification-icon bg-warning">
                                    <i class="fa fa-warning"></i>
                                </span>
                        <span class="m-left-xs">Server #2 not responding.</span>
                        <span class="time text-muted">Just now</span>
                    </a>
                </li>
                <li>
                    <a href="#">
                                <span class="notification-icon bg-success">
                                    <i class="fa fa-plus"></i>
                                </span>
                        <span class="m-left-xs">New user registration.</span>
                        <span class="time text-muted">2m ago</span>
                    </a>
                </li>
                <li>
                    <a href="#">
                                <span class="notification-icon bg-danger">
                                    <i class="fa fa-bolt"></i>
                                </span>
                        <span class="m-left-xs">Application error.</span>
                        <span class="time text-muted">5m ago</span>
                    </a>
                </li>
                <li>
                    <a href="#">
                                <span class="notification-icon bg-success">
                                    <i class="fa fa-usd"></i>
                                </span>
                        <span class="m-left-xs">2 items sold.</span>
                        <span class="time text-muted">1hr ago</span>
                    </a>
                </li>
                <li>
                    <a href="#">
                                <span class="notification-icon bg-success">
                                    <i class="fa fa-plus"></i>
                                </span>
                        <span class="m-left-xs">New user registration.</span>
                        <span class="time text-muted">1hr ago</span>
                    </a>
                </li>
                <li><a href="#">View all notifications</a></li>
            </ul>
        </li>   <!-- END : Tasks -->

        <li class="profile dropdown">
            <a class="dropdown-toggle" data-toggle="dropdown" href="#">
                <strong>Prakasam Mathaiyan</strong>
                <span><i class="fa fa-chevron-down"></i></span>
            </a>
            <ul class="dropdown-menu">
                <li>
                    <a class="clearfix" href="javascript:void(0);">
                        <img src="images/demo/avatar-1.jpg" alt="User Avatar">
                        <div class="detail">
                            <strong>Prakasam</strong>
                            <p class="grey">prakasam@email.com</p>
                        </div>
                    </a>
                </li>
                <li><a tabindex="-1" href="page-chat.html" ><i class="fs fs-bubble fa-lg"></i> Chart Room</a></li>
                <li><a tabindex="-1" href="user-profile.html" class="main-link"><i class="fa fa-edit fa-lg"></i> Edit profile</a></li>
                <li><a tabindex="-1" href="user-lock.html" class="main-link"><i class="fs fs-locked fa-lg"></i> Lock</a></li>
                <li class="divider"></li>
                <li><a tabindex="-1" href="user-login.html" class="main-link"><i class="fa fa-key fa-lg"></i> Log out</a></li>
            </ul>
        </li>
    </ul>
</div>  <!-- END : top-nav-->

<aside>
    <div class="sidebar-inner">

        <div class="size-toggle">
            <a class="btn btn-sm" id="sizeToggle">
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </a>

            <a class="btn btn-sm pull-right" href="user-login.html">
                <i class="fa fa-power-off"></i>
            </a>
        </div><!-- /size-toggle -->

        <div class="search-block">
            <div class="input-group">
                <input type="text" class="form-control input-sm" placeholder="search">
                        <span class="input-group-btn">
                            <button class="btn btn-default btn-sm" type="button"><i class="fa fa-search"></i></button>
                        </span>
            </div><!-- /input-group -->
        </div><!-- /search-block -->

        <div class="main-menu">
            <ul>

                <li class="active">
                    <a href="index-2.html">
                        <span class="menu-icon"><i class="di di-performance fa-lg"></i></span>
                        <span class="text">Dashboard</span>
                    </a>
                </li>

                <li>
                    <a href="inbox.html">
                        <span class="menu-icon"><i class="fa fa-envelope fa-lg"></i></span>
                        <span class="text">Messages</span>
                        <span class="badge badge-danger bounceIn animation-delay6">4</span>
                    </a>
                </li>

                <li class="openable">
                    <a href="javascript:void(0);">
                        <span class="menu-icon"><i class="fa fa-file-text fa-lg"></i></span>
                        <span class="text">Pages</span>
                    </a>
                    <ul class="submenu">
                        <li><a href="page-charts.html"><span class="submenu-label">Charts</span></a></li>
                        <li><a href="page-tables.html"><span class="submenu-label">Tables</span></a></li>
                        <li><a href="page-blog.html"><span class="submenu-label">Blog</span></a></li>
                        <li><a href="page-single-post.html"><span class="submenu-label">Single Post</span></a></li>
                        <li><a href="page-search.html"><span class="submenu-label">Search Result</span></a></li>
                        <li><a href="page-chat.html"><span class="submenu-label">Chat Room</span></a></li>
                        <li><a href="page-pricing.html"><span class="submenu-label">Pricing</span></a></li>
                        <li><a href="page-invoice.html"><span class="submenu-label">Invoice</span></a></li>
                        <li><a href="page-faq.html"><span class="submenu-label">FAQ</span></a></li>
                        <li><a href="page-error404.html"><span class="submenu-label">Error404</span></a></li>
                        <li><a href="page-error500.html"><span class="submenu-label">Error500</span></a></li>
                        <li><a href="page-blank.html"><span class="submenu-label">Blank</span></a></li>
                    </ul>
                </li>

                <li class="openable">
                    <a href="javascript:void(0);">
                        <span class="menu-icon"><i class="fs fs-puzzle-4 fa-lg"></i></span>
                        <span class="text">Components</span>
                    </a>
                    <ul class="submenu">
                        <li><a href="ui-elements.html"><span class="submenu-label">Basic Elements</span></a></li>
                        <li><a href="ui-advanced.html"><span class="submenu-label">Advanced</span></a></li>
                        <li><a href="ui-buttons.html"><span class="submenu-label">Buttons</span></a></li>
                        <li><a href="ui-typography.html"><span class="submenu-label">Typography</span></a></li>
                        <li><a href="ui-tabs.html"><span class="submenu-label">Tabs & Accordions</span></a></li>
                        <li><a href="ui-form-wizard.html"><span class="submenu-label">Form Wizard</span></a></li>
                        <li><a href="ui-validation.html"><span class="submenu-label">Validation</span></a></li>
                        <li><a href="ui-sliders.html"><span class="submenu-label">Sliders</span></a></li>
                        <li><a href="ui-file-upload.html"><span class="submenu-label">File Upload</span></a></li>
                        <li><a href="ui-drag-drop-uplod.html"><span class="submenu-label">Drag and drop</span></a></li>
                        <li><a href="ui-nesting-list.html"><span class="submenu-label">Nesting List</span></a></li>
                        <li><a href="ui-tree.html"><span class="submenu-label">Tree View</span></a></li>
                    </ul>
                </li>

                <li class="openable">
                    <a href="javascript:void(0);">
                        <span class="menu-icon"><i class="fs fs-calendar fa-lg"></i></span>
                        <span class="text">Calendar</span>
                        <span class="badge badge-success bounceIn animation-delay5">3</span>
                    </a>
                    <ul class="submenu">
                        <li><a href="calendar-general.html"><span class="submenu-label">General</span></a></li>
                        <li><a href="calendar-draggable.html"><span class="submenu-label">Draggable</span></a></li>
                    </ul>
                </li>

                <li class="openable">
                    <a href="javascript:void(0);">
                        <span class="menu-icon"><i class="fs fs-heart-2 fa-lg"></i></span>
                        <span class="text">Extra</span>
                    </a>
                    <ul class="submenu">
                        <li><a href="ext-timeline.html"><span class="submenu-label">Timeline</span></a></li>
                        <li><a href="ext-photo-gallery.html"><span class="submenu-label">Photo Gallery</span></a></li>
                        <li><a href="ext-video-gallery.html"><span class="submenu-label">Video Gallery</span></a></li>
                        <li><a href="ext-panels.html"><span class="submenu-label">Panels</span></a></li>
                        <li><a href="ext-icons.html"><span class="submenu-label">Icons</span></a></li>
                        <li><a href="ext-contact.html"><span class="submenu-label">Contact us</span></a></li>
                    </ul>
                </li>

                <li>
                    <a href="maps.html">
                        <span class="menu-icon"><i class="fs fs-location fa-lg"></i></span>
                        <span class="text">Maps</span>
                    </a>
                </li>
                <li class="openable">
                    <a href="javascript:void(0);">
                        <span class="menu-icon"><i class="fs fs-location fa-lg"></i></span>
                        <span class="text">Quest Management</span>
                    </a>
                    <ul class="submenu">
                        <li>
                            <?php echo Html::a('New Quest',array('/quest/create')); ?>
                        </li>
                    </ul>
                </li>

            </ul>

        </div><!-- END : main-menu -->

    </div><!-- END : sidebar-inner -->
</aside>
