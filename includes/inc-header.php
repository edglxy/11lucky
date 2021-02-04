
<header class="topbar position-fixed fixed-top" data-navbarbg="skin6">
    <nav class="navbar top-navbar navbar-expand-md navbar-light">
        <div class="navbar-header" data-logobg="skin5">
            <!-- This is for the sidebar toggle which is visible on mobile only -->
            <a class="nav-toggler waves-effect waves-light d-block d-md-none" href="javascript:void(0)">
                <i class="ti-menu ti-close"></i>
            </a>
            <!-- ============================================================== -->
            <!-- Logo -->
            <!-- ============================================================== -->
            <div class="navbar-brand justify-content-center">
                <a href="index.php" class="logo ">
                    <!-- Logo icon -->
                    <!-- <b class="logo-icon"> -->
                        <!--You can put here icon as well // <i class="wi wi-sunset"></i> //-->
                        <!-- Dark Logo icon -->
                        <!-- <img src="assets/images/logo-icon.png" alt="homepage" class="dark-logo" /> -->
                        <!-- Light Logo icon -->
                        <!-- <img src="assets/images/logo-light-icon.png" alt="homepage" class="light-logo" />
                    </b> -->
                    <!--End Logo icon -->
                    <!-- Logo text -->
                    <span class="logo-text ">
                        <span class="text-white small" style="font-weight:500">11 LUCKY STAR MILLING CORP</span>
                        <!-- dark Logo text -->
                        <!-- <img src="assets/images/logo-text.png" alt="homepage" class="dark-logo" /> -->
                        <!-- Light Logo text -->
                        <!-- <img src="assets/images/logo-light-text.png" class="light-logo" alt="homepage" /> -->
                    </span>
                </a>
            </div>
            <!-- ============================================================== -->
            <!-- End Logo -->
            <!-- ============================================================== -->
            <!-- ============================================================== -->
            <!-- Toggle which is visible on mobile only -->
            <!-- ============================================================== -->
            <a class="topbartoggler d-block d-md-none waves-effect waves-light" href="javascript:void(0)"
                data-toggle="collapse" data-target="#navbarSupportedContent"
                aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <i class="ti-more"></i>
            </a>
        </div>
        <!-- ============================================================== -->
        <!-- End Logo -->
        <!-- ============================================================== -->
        <div class="navbar-collapse collapse" id="navbarSupportedContent" data-navbarbg="skin6">
            <!-- ============================================================== -->
            <!-- toggle and nav items -->
            <!-- ============================================================== -->
            <ul class="navbar-nav float-left mr-auto">
                <!-- ============================================================== -->
                <!-- Search -->
                <!-- ============================================================== -->
                <li class="nav-item search-box">
                    <a class="nav-link waves-effect waves-dark" href="javascript:void(0)">
                        <div class="d-flex align-items-center">
                            <i class="mdi mdi-magnify font-20 mr-1"></i>
                            <div class="ml-1 d-none d-sm-block">
                                <span>Search transactions, invoices or tickets</span>
                            </div>
                        </div>
                    </a>
                    <form class="app-search position-absolute" action="classifying.pages.php">
                        <input type="text" class="form-control" placeholder="Search &amp; enter">
                        <a class="srh-btn">
                            <i class="ti-close"></i>
                        </a>
                    </form>
                </li>
            </ul>
            <!-- ============================================================== -->
            <!-- Right side toggle and nav items -->
            <!-- ============================================================== -->
            <ul class="navbar-nav float-right ">
                <!-- ============================================================== -->
                <!-- User profile and search -->
                <!-- ============================================================== -->
                <li class="nav-item dropdown ">
                    <a class="nav-link dropdown-toggle text-muted waves-effect waves-dark" href="javascript:void(0)" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        <i class="mdi mdi-bell" style="font-size:18px"></i>
                    </a>
                    <div class="dropdown-menu dropdown-menu-right user-dd animated">
                        <div class="dropdown-item " style="pointer-events:none; font-weight:400">
                            <span class="name">Notifications</span>
                        </div>
                        <a class="dropdown-item">
                            <span><img style="width:11%;float:left;margin-right:10px;overflow:hidden" src="notificationresources/images/img.jpg" alt="Profile Image" /></span>
                            <span>
                                <span class="name">John Smith</span>
                                <span class="time" >3 mins ago</span>
                            </span>
                            <span class="message" >
                                Lorem ipsum dolor sit, amet consectetur adipisicing elit. Non blanditiis nobis amet aut ipsum corrupti hic magni quos dolorem quod qui sed ipsa earum, eveniet aliquid aspernatur aliquam accusantium asperiores.
                            </span>
                        </a>
                        <a class="dropdown-item">
                            <span><img style="width:11%;float:left;margin-right:10px;overflow:hidden" src="notificationresources/images/img.jpg" alt="Profile Image" /></span>
                            <span>
                                <span class="name">John Smith</span>
                                <span class="time" >3 mins ago</span>
                            </span>
                            <span class="message" >
                                Lorem ipsum dolor sit, amet consectetur adipisicing elit. Non blanditiis nobis amet aut ipsum corrupti hic magni quos dolorem quod qui sed ipsa earum, eveniet aliquid aspernatur aliquam accusantium asperiores.
                            </span>
                        </a>
                        <a class="dropdown-item">
                            <div class="text-center">
                                <span style="font-size:12px; font-weight:bold">View All Notifications</span>
                                <i class="mdi-chevron-right" style="font-size:18px"></i>
                            </div>
                        </a>
                    </div>
                </li>
                <li class="nav-item dropdown ">
                    <div style="margin-top: 1rem; margin-bottom: 1rem; border: 0; border-right: 1px solid rgba(0, 0, 0, 0.1);"></div>
                </li>  
  
                <li class="nav-item dropdown ">
                    <a class="nav-link dropdown-toggle waves-effect waves-dark pro-pic" href="#" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        <span class="text-right text-black">Edglor Gulmayo</span>
                        <i class="mdi mdi-chevron-down" style="font-size:18px"></i>
                        <img src="assets/images/users/1.jpg" alt="user" class="rounded-circle" width="31">
                    </a>
                    <div class="dropdown-menu dropdown-menu-right user-dd animated">
                        <a class="dropdown-item" href="javascript:void(0)"><i class="ti-control-record m-r-5 m-l-5"></i>
                            Status: Online</a>
                        <a class="dropdown-item" href="javascript:void(0)"><i class="ti-settings m-r-5 m-l-5"></i>
                            Account Settings</a>
                        <a class="dropdown-item" href="login.php"><i class="ti-shift-left m-r-5 m-l-5"></i>
                            Logout</a>
                    </div>
                </li>
                <!-- ============================================================== -->
                <!-- User profile and search -->
                <!-- ============================================================== -->
            </ul>
        </div>
    </nav>
</header>
