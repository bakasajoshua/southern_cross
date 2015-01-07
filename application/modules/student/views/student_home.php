<?php //echo "<pre>";print_r($this->session->all_userdata());echo "</pre>";exit; ?>
<html lang="en">

<head>
    <meta charset="utf-8">
    <!--   <meta content="IE=edge" http-equiv="X-UA-Compatible"> -->
    <meta content="width=device-width, initial-scale=1" name="viewport">
    <meta content="" name="description">
    <meta content="" name="author">
    <link href="<?php echo base_url().'assets/modules/students/ico/favicon.ico'?>" rel="shortcut icon">

    <title>Student Portal | Southern Cross</title>

    <!-- Bootstrap core CSS -->
    <link rel="stylesheet" href="<?php echo base_url().'assets/modules/students/css/bootstrap.css'?>">

    <link rel="stylesheet" href="<?php echo base_url().'assets/modules/students/css/theme.css'?>">
    <link rel="stylesheet" href="<?php echo base_url().'assets/modules/students/css/dashboard.css'?>">
    <link rel="stylesheet" href="<?php echo base_url().'assets/modules/students/css/style.css'?>">
    <link rel="stylesheet" href="<?php echo base_url().'assets/modules/students/css/dripicon.css'?>">
    <link rel="stylesheet" href="<?php echo base_url().'assets/modules/students/css/typicons.css'?>">
    <link rel="stylesheet" href="<?php echo base_url().'assets/modules/students/css/font-awesome.css'?>">
    <link rel="stylesheet" href="<?php echo base_url().'assets/modules/students/css/responsive.css'?>">
    <link rel="stylesheet" href="<?php echo base_url().'assets/modules/students/js/tip/tooltipster.css'?>">
    <link rel="stylesheet" href="<?php echo base_url().'assets/modules/students/js/vegas/jquery.vegas.css'?>">
    <link rel="stylesheet" href="<?php echo base_url().'assets/modules/students/js/tip/js/number-progress-bar/number-pb.css'?>">

    <link rel="stylesheet" href="<?php echo base_url().'assets/modules/students/js/pace/themes/orange/pace-theme-flash.css'?>">

</head>

<body role="document">
    <div id="preloader">
        <div id="status">&nbsp;</div>
    </div>

    <!-- TOPNAV -->

    <div class="row">
        <div class="col-lg-3">
            <ul class="nav navbar-nav navbar-left list-unstyled list-inline text-amber date-list">
                <li><i class="fontello-th text-amber"></i>
                </li>
                <li id="Date"></li>
            </ul>
            <ul class="nav navbar-nav navbar-left list-unstyled list-inline text-amber date-list">
                <li><i class="fontello-stopwatch text-amber"></i>
                </li>
                <li id="hours"></li>
                <li class="point">:</li>
                <li id="min"></li>
                <li class="point">:</li>
                <li id="sec"></li>
            </ul>


        </div>
        <div class="col-lg-6">
            <div style="margin-bottom:0;" class="alert text-white ">
                <button data-dismiss="alert" class="close" type="button">×</button>
                <span class="entypo-info-circled"></span>
                <strong>Welcome back!</strong>&nbsp;&nbsp;Dave, your last loggin was 1 day ago. Have a nice day
            </div>
        </div>

        <div class="col-lg-3">
            <ul class="nav navbar-nav navbar-right">
                <li>
                    <a data-toggle="dropdown" class="dropdown-toggle text-white" href="#">
                        <img alt="" class="admin-pic img-circle" src="../../../../api.randomuser.me/portraits/thumb/men/23.jpg">Hi, Dave Mattew <b class="caret"></b>
                    </a>
                    <ul style="margin:25px 15px 0 0;" role="menu" class="dropdown-setting dropdown-menu bg-amber">
                        <li>
                            <a href="#">
                                <span class="entypo-user"></span>&nbsp;&nbsp;My Profile</a>
                        </li>
                        <li>
                            <a href="#">
                                <span class="entypo-vcard"></span>&nbsp;&nbsp;Account Setting</a>
                        </li>
                        <li>
                            <a href="#">
                                <span class="entypo-lifebuoy"></span>&nbsp;&nbsp;Help</a>
                        </li>

                        <li>
                            <a href="http://themeforest.net/item/apricot-navigation-admin-dashboard-template/7664475?WT.ac=category_item&amp;WT.z_author=themesmile">
                                <span class="entypo-basket"></span>&nbsp;&nbsp; Purchase</a>
                        </li>
                    </ul>
                </li>

<!--                 <li>
                    <a data-toggle="dropdown" class="dropdown-toggle text-white" href="#">
                        <i class="icon-gear"></i>&nbsp;Setting <b class="caret"></b>
                    </a>
                    <ul style="margin:25px 15px 0 0;" role="menu" class="theme-bg dropdown-setting dropdown-menu bg-amber">

                        <li>
                            <div id="button-bg"></div>
                        </li>
                        <li>
                            <div id="button-bg2"></div>
                        </li>
                        <li>
                            <div id="button-bg3"></div>
                        </li>
                        <li>
                            <div id="button-bg4"></div>
                        </li>
                        <li>
                            <div id="button-bg5"></div>
                        </li>
                        <li>
                            <div id="button-bg6"></div>
                        </li>

                    </ul>
                </li> -->

            </ul>
        </div>

    </div>
    <!-- END OF TOPNAV -->
    <!-- Comtainer -->
    <div class="container-fluid paper-wrap bevel tlbr">
        <div id="paper-top">
            <div class="row">
                <div class="col-sm-4 no-pad">

                    <a class="navbar-brand logo-text" href="#">Student Dashboard</a>

                    <ul class="list-unstyled list-inline noft-btn">
                        <li data-toggle="tooltip" data-placement="bottom" title="Profile"><i class=" icon-user"></i>
                        </li>

                        <li data-toggle="tooltip" data-placement="bottom" title="Log Out"> <a href="login.html" class="text-white"><i class="icon-upload"></i></a>
                        </li>

                    </ul>
                </div>

                <div class="col-sm-5 no-pad">
                    <ul style="margin-top:8px;" class="nav navbar-nav navbar-left list-unstyled list-inline text-gray date-list news-list">
                        <!-- <li><i class="fontello-doc-text text-gray"></i>
                        </li> -->
                        <li>
                            <ul class="list-unstyled top-newsticker text-gray news-list">
                                <li><i class="fontello-cloud-flash-inv text-gray"></i>&nbsp;&nbsp;
                                    <strong>Yogyakarta,</strong>Achmad Dhani Partly Cloudy Feels Like &nbsp;<b>22 °C</b>
                                </li>
                                <li><i class="fontello-cloud-sun-inv text-gray"></i>&nbsp;&nbsp;
                                    <strong>Bandung,</strong>Jln Sudirman, Sunny Feels Like &nbsp;<b>31 °C</b>
                                </li>
                                <li><i class="fontello-rain-inv text-gray"></i>&nbsp;&nbsp;
                                    <strong>Jakarta,</strong>Tomang, Rain Like &nbsp;<b>19 °C</b>
                                </li>
                            </ul>
                        </li>
                    </ul>

                </div>



                <div class="col-sm-3 no-pad">
                    <!-- menu right -->
                    <div class="navbar-right">
                        <ul class="nav navbar-nav margin-left">
                            <!-- Messages: style can be found in dropdown.less-->
                            <li class="dropdown messages-menu">
                                <div class="drop-btn dropdown-toggle bg-white" data-toggle="dropdown">
                                    <i class="fa  fa-envelope text-navy"></i>
                                    <span class="label label-success label-drop">4</span>
                                </div>
                                <ul class="dropdown-menu drop-msg ">
                                    <li class="header bg-green">
                                        You have 4 messages</li>

                                    <li>
                                        <!-- inner menu: contains the actual data -->
                                        <ul class="menu bg-white">
                                            <li>
                                                <!-- start message -->
                                                <a href="#">
                                                    <div class="pull-left">
                                                        <img src="../../../../api.randomuser.me/portraits/thumb/men/37.jpg" class="img-circle" alt="User Image" />
                                                    </div>
                                                    <h4>
                                                        Developer
                                                        <!-- <small><i class="fa fa-clock-o"></i> 5 mins</small> -->
                                                    </h4>
                                                    <p>Bug fixed level 90%</p>
                                                </a>
                                            </li>
                                            <!-- end message -->
                                            <li>
                                                <a href="#">
                                                    <div class="pull-left">
                                                        <img src="../../../../api.randomuser.me/portraits/thumb/women/36.jpg" class="img-circle" alt="user image" />
                                                    </div>
                                                    <h4>
                                                        Aplication Support

                                                    </h4>
                                                    <p>There is some bug in your last submit</p>
                                                </a>
                                            </li>
                                            <li>
                                                <a href="#">
                                                    <div class="pull-left">
                                                        <img src="../../../../api.randomuser.me/portraits/thumb/men/35.jpg" class="img-circle" alt="user image" />
                                                    </div>
                                                    <h4>
                                                        Lead Developers

                                                    </h4>
                                                    <p>Please check again your submit</p>
                                                </a>
                                            </li>
                                            <li>
                                                <a href="#">
                                                    <div class="pull-left">
                                                        <img src="../../../../api.randomuser.me/portraits/thumb/women/34.jpg" class="img-circle" alt="user image" />
                                                    </div>
                                                    <h4>
                                                        Web Designer

                                                    </h4>
                                                    <p>Art has done</p>
                                                </a>
                                            </li>
                                            <li>
                                                <a href="#">
                                                    <div class="pull-left">
                                                        <img src="../../../../api.randomuser.me/portraits/thumb/men/33.jpg" class="img-circle" alt="user image" />
                                                    </div>
                                                    <h4>
                                                        General Manager

                                                    </h4>
                                                    <p>Employed newslatter</p>
                                                </a>
                                            </li>
                                        </ul>
                                    </li>

                                    <li class="footer-green">
                                        <!--    <div class="btn btn-xs bg-opacity-white-btn  fontello-arrows-cw"></div>
                                        <div class="btn btn-xs bg-opacity-white-btn fontello-trash"></div>
                                        <div class="btn btn-xs bg-opacity-white-btn fontello-eye-outline"></div> -->
                                    </li>
                                </ul>
                            </li>
                            <!-- Notifications: style can be found in dropdown.less -->
                            <li class="dropdown notifications-menu">
                                <div class="drop-btn dropdown-toggle bg-white" data-toggle="dropdown">
                                    <i class="fa  fa-exclamation-triangle text-navy"></i>
                                    <span class="label bg-aqua label-drop">7</span>
                                </div>
                                <ul class="dropdown-menu drop-noft">

                                    <li class="header bg-aqua">
                                        You have 10 notifications</li>

                                    <li>
                                        <!-- inner menu: contains the actual data -->
                                        <ul class="menu bg-white">
                                            <li>
                                                <a href="#">
                                                    <i class="fa icon-user"></i> New developer registered
                                                </a>
                                            </li>
                                            <li>
                                                <a href="#">
                                                    <i class="fa icon-cloud"></i> 2 item commit
                                                </a>
                                            </li>
                                            <li>
                                                <a href="#">
                                                    <i class="fa icon-download"></i> 3 members joined
                                                </a>
                                            </li>

                                            <li>
                                                <a href="#">
                                                    <i class="fa icon-tag"></i> 22 sales made
                                                </a>
                                            </li>
                                            <li>
                                                <a href="#">
                                                    <i class="fa icon-document"></i> New task from manager
                                                </a>
                                            </li>
                                        </ul>
                                    </li>

                                    <li class="footer-blue">

                                    </li>
                                </ul>
                            </li>
                            <!-- Tasks: style can be found in dropdown.less -->
                            <li class="dropdown tasks-menu">
                                <div class="drop-btn bg-white dropdown-toggle" data-toggle="dropdown">
                                    <i class="fa fa-briefcase text-navy"></i>
                                    <span class="label bg-red label-drop">9</span>
                                </div>
                                <ul class="dropdown-menu drop-task">

                                    <li class="header bg-red">
                                        <span></span>You have 9 tasks</li>

                                    <li>
                                        <!-- inner menu: contains the actual data -->
                                        <ul class="menu bg-white">
                                            <li>
                                                <!-- Task item -->
                                                <div class="task-list-item">
                                                    <h2>Wed, 25 Mar 2014
                                                        <span>9:32
                                                            <small>PM</small>
                                                        </span>
                                                    </h2>
                                                    <h1>Finished task Testing.</h1>
                                                    <p>Lorem ipsum dollor si amet amet jabang bayi</p>
                                                </div>
                                            </li>
                                            <!-- end task item -->
                                            <li>
                                                <!-- Task item -->

                                                <div class="task-list-item">
                                                    <h2>Thu, 23 Mar 2014
                                                        <span>7:54
                                                            <small>PM</small>
                                                        </span>
                                                    </h2>
                                                    <h1>Creat the documentation</h1>
                                                    <p>Lorem ipsum dollor si amet amet jabang bayi</p>
                                                </div>

                                            </li>
                                            <!-- end task item -->
                                            <li>
                                                <!-- Task item -->
                                                <div class="task-list-item">
                                                    <h2>Wed, 21 Mar 2014
                                                        <span>12:43
                                                            <small>PM</small>
                                                        </span>
                                                    </h2>
                                                    <h1>Repository you file now!</h1>
                                                    <p>Lorem ipsum dollor si amet amet jabang bayi</p>
                                                </div>
                                            </li>
                                            <!-- end task item -->
                                            <li>
                                                <!-- Task item -->
                                                <div class="task-list-item">
                                                    <h2>Fri, 20 Mar 2014
                                                        <span>8:00
                                                            <small>PM</small>
                                                        </span>
                                                    </h2>
                                                    <h1>Fill the job description</h1>
                                                    <p>Lorem ipsum dollor si amet amet jabang bayi</p>
                                                </div>
                                            </li>
                                            <!-- end task item -->
                                        </ul>
                                    </li>

                                    <li class="footer-red">

                                    </li>
                                </ul>
                            </li>


                        </ul>
                    </div>
                </div>
                <!-- end of menu right -->
            </div>
        </div>

        <!-- SIDE MENU -->
        <div class="wrap-sidebar-content">
            <div id="skin-select">
                <a id="toggle">
                    <span class="fa icon-menu"></span>
                </a>

                <div class="skin-part">
                    <div id="tree-wrap">
                        <div class="side-bar">
                            <ul id="menu-showhide" class="topnav">
                                <li class="devider-title">
                                    <h3>
                                        <span>Navigation</span>
                                    </h3>
                                </li>
                                <li >
                                    <a style="border-left:4px solid #5F9BDB; padding:0 0 0 16px;" class="tooltip-tip" href="index.html" title="Dashboard">
                                        <i class="fontello-desktop-1"></i>
                                        <span>Home</span>

                                    </a>
                                </li>
                                <li>
                                    <a class="tooltip-tip" href="#" title="Mail">
                                        <i class=" fontello-mail-1"></i>
                                        <span>Messages</span>

                                    </a>
                                    <ul>
                                        <!--  <li class="hide-min-toggle">UI Element</li> -->
                                        <li>
                                            <!-- class="active" -->
                                            <a href="mail.html" title="Index">Inbox</a>
                                        </li>
                                        <li>
                                            <!-- class="active" -->
                                            <a href="compose.html" title="Compose">Compose</a>
                                        </li>
                                    </ul>
                                </li>
                                <li>
                                    <a class="tooltip-tip" href="#" title="UI">
                                        <i class="fontello-note"></i>
                                        <span>Attendance</span>
                                    </a>
                                    <ul>
                                        <!--  <li class="hide-min-toggle">UI Element</li> -->
                                        <li>
                                            <!-- class="active" -->
                                            <a href="element.html" title="Element">Element</a>
                                        </li>
                                        <li><a href="button.html" title="Button">
                                            Button
                                        </a>
                                        </li>
                                        <li>
                                            <a href="wizard.html" title="Tab & Accordion">Wizard</a>
                                        </li>
                                        <li>
                                            <a href="calendar.html" title="Calender">Calendar</a>
                                        </li>
                                        <li>
                                            <a href="tree.html" title="Tree View">Tree View</a>
                                        </li>
                                        <li>
                                            <a href="grids.html" title="Grids">Grids</a>
                                        </li>
                                        <li>
                                            <a href="chart.html" title="Chart">Chart</a>
                                        </li>
                                        <li>
                                            <a href="typhography.html" title="Typhoghrapy">
                                                
                                                Typhoghrapy
                                            </a>
                                        </li>
                                    </ul>
                                </li>

                                <!-- END OF CUT CONTENT -->
                                <li>
                                    <a class="tooltip-tip" href="#" title="Layout">
                                        <i class=" fontello-pencil-1"></i>
                                        <span>Progress Report&nbsp;
                                            <!-- <small class="side-menu-noft bg-aqua">new</small> -->
                                        </span>

                                    </a>
                                    <ul>
                                        <!--  <li class="hide-min-toggle">UI Element</li> -->
                                        <li>
                                            <!-- class="active" -->
                                            <a href="nopadding.html" title="Index">full width</a>
                                        </li>
                                        <li>
                                            <!-- class="active" -->
                                            <a href="minimize.html" title="Compose">minimize</a>
                                        </li>
                                        <li>
                                            <!-- class="active" -->
                                            <a href="rightmenu.html" title="Compose">Right Side bar</a>
                                        </li>
                                        <li>
                                            <!-- class="active" -->
                                            <a href="topmenu.html" title="Compose">Top menu</a>
                                        </li>
                                    </ul>
                                </li>

                                <li>
                                    <a class="tooltip-tip" href="#" title="Bg">
                                        <i class="fontello-photo"></i>
                                        <span>Background&nbsp;
                                            <small class="side-menu-noft bg-aqua">new</small>
                                        </span>

                                    </a>
                                    <ul>
                                        <li>
                                            <a href="imagebg.html" title="Image">Image </a>
                                        </li>
                                        <li>
                                            <a href="videobg.html" title="Video">Video </a>
                                        </li>

                                    </ul>
                                </li>

                                <li class="devider-horizontal"></li>
                                <li class="devider-title">
                                    <h3>
                                        <span>Component</span>
                                    </h3>
                                </li>
                                <li>
                                    <a class="tooltip-tip" href="#" title="Form">
                                        <i class="fontello-doc-1"></i>
                                        <span>Form</span>
                                    </a>
                                    <ul>
                                        <li>
                                            <a href="form-element.html" title="Form Elements">Form Elements</a>
                                        </li>
                                        <li>
                                            <a href="andvance-form.html" title="Andvance Form">Andvance Form</a>
                                        </li>
                                        <li>
                                            <a href="text-editor.html" title="Text Editor">Text Editor</a>
                                        </li>
                                        <li>
                                            <a href="file-upload.html" title="File Upload">File Upload</a>
                                        </li>
                                    </ul>
                                </li>
                                <li>
                                    <a class="tooltip-tip" href="#" title="Tables">
                                        <i class="fontello-calendar-1"></i>
                                        <span>Tables</span>
                                    </a>
                                    <ul>
                                        <li>
                                            <a href="table-static.html" title="Table Static">Table Static</a>
                                        </li>
                                        <li>
                                            <a href="table-dynamic.html" title="Table Dynamic">Table Dynamic</a>

                                        </li>

                                    </ul>
                                </li>
                                <li>
                                    <a class="tooltip-tip" href="icon.html" title="Icons">
                                        <i class="fontello-food"></i>
                                        <span>Icons</span>
                                        <div class="noft-blue bg-green" style="display: inline-block; float: none;">New</div>
                                    </a>
                                </li>
                                <li>
                                    <a class="tooltip-tip" href="map.html" title="Map">
                                        <i class="fontello-location-1"></i>
                                        <span>Map</span>

                                    </a>
                                </li>
                                <li class="devider-horizontal"></li>
                                <li class="devider-title">
                                    <h3>
                                        <span>Special Page</span>
                                    </h3>
                                </li>
                                <li>
                                    <a class="tooltip-tip" href="#" title="Extra">
                                        <i class="fontello-beaker"></i>
                                        <span>Extra</span>
                                    </a>
                                    <ul>
                                        <li>
                                            <a href="invoice.html" title="Invoice">Invoice</a>
                                        </li>
                                        <li>
                                            <a href="pricing_table.html" title="Pricing Table">Pricing Table</a>
                                        </li>
                                        <li>
                                            <a href="time-line.html" title="Time Line">Time Line</a>
                                        </li>
                                        <li>
                                            <a href="404.html" title="404 Error Page">404 Error Page</a>
                                        </li>
                                        <li>
                                            <a href="500.html" title="500 Error Page">500 Error Page</a>
                                        </li>
                                        <li>
                                            <a href="lock-screen.html" title="Lock Screen">Lock Screen</a>
                                        </li>
                                    </ul>
                                </li>

                                <li>
                                    <a class="tooltip-tip " href="login.html" title="login">
                                        <i class=" fontello-lock-1"></i>
                                        <span>Login</span>
                                    </a>
                                </li>
                            </ul>
                            <div class="side-dash">
                                <h3>
                                    <span>Task Progress</span>
                                </h3>
                                <ul class="side-dashh-list">
                                    <li>
                                        <!-- Task item -->
                                        <a href="#">
                                            <h3 class="fontello-leaf">
                                                Tidy up your files
                                                <small class="pull-right">35%</small>
                                            </h3>
                                            <div class="progress xs bg-opacity-one height-tiny">
                                                <div class="progress-bar bg-blue " style="width: 35%" role="progressbar" aria-valuenow="20" aria-valuemin="0" aria-valuemax="100">
                                                    <span class="sr-only">35% Complete</span>
                                                </div>
                                            </div>
                                        </a>
                                    </li>
                                    <!-- end task item -->
                                    <li>
                                        <!-- Task item -->
                                        <a href="#">
                                            <h3 class="fontello-box">
                                                Check server status
                                                <small class="pull-right">40%</small>
                                            </h3>
                                            <div class="progress xs bg-opacity-one height-tiny">
                                                <div class="progress-bar bg-aqua" style="width: 40%" role="progressbar" aria-valuenow="20" aria-valuemin="0" aria-valuemax="100">
                                                    <span class="sr-only">40% Complete</span>
                                                </div>
                                            </div>
                                        </a>
                                    </li>
                                    <!-- end task item -->
                                    <li>
                                        <!-- Task item -->
                                        <a href="#">
                                            <h3 class="fontello-headphones">
                                                Support costumer
                                                <small class="pull-right">60%</small>
                                            </h3>
                                            <div class="progress xs bg-opacity-one height-tiny">
                                                <div class="progress-bar bg-red-orange" style="width: 60%" role="progressbar" aria-valuenow="20" aria-valuemin="0" aria-valuemax="100">
                                                    <span class="sr-only">60% Complete</span>
                                                </div>
                                            </div>
                                        </a>
                                    </li>
                                </ul>

                                <h3>
                                    <span>Reply</span>
                                </h3>
                                <div id="doughnutChart" class="chart"></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- #/skin-select -->
            <!-- END OF SIDE MENU -->

            <!-- Breadcrumb -->
            <div class="sub-board">
                <span class="header-icon"><i class="fontello-home"></i>
                </span>
                <ol class="breadcrumb newcrumb ng-scope">
                    <li>
                        <a href="#">
                            <span>
                            </span>dashboard</a>
                    </li>

                </ol>


                <div class="dark" style="visibility: visible;">
                    <form class="navbar-form navbar-left" role="search">
                        <div class="form-group">
                            <input type="text" class="form-control search rounded id_search" placeholder="Search">
                        </div>
                    </form>
                </div>
            </div>
            <!-- End of Breadcrumb -->






            <!-- CONTENT -->
            <div class="wrap-fluid" id="paper-bg">
              
              <div class="row">
                  <div class="col-lg-6">
                      <div class="box">
                          <!-- /.box-header -->
                          <div class="box-body">
                              <div class="news-widget">
                                  <h2>
                                      <span class="bg-green">Today</span>
                                  </h2>
                                  <i class="fontello-shop-1"></i>
                                  <h4 class="text-green">832</h4>
                                  <h5>SALES</h5>
                                  <div style="clear:both;"></div>
                              </div>
                          </div>
                          <!-- /.box-body -->
                      </div>
                      <!-- /.box -->
                  </div>

                  <div class="col-lg-6">
                      <div class="box">
                          <div class="box-body">
                              <div class="news-widget">
                                  <h2>
                                      <span class="bg-aqua">Today</span>
                                  </h2>
                                  <i class="fontello-cup"></i>
                                  <h4 class="text-aqua">7,356</h4>
                                  <h5>Visitors</h5>
                                  <div style="clear:both;"></div>
                              </div>
                          </div>
                      </div>
                      <!-- /.box -->
                  </div>
              </div>

              <div class="row">
                  <div class="col-lg-6">
                      <div class="box">
                          <!-- /.box-header -->
                          <div class="box-body">
                              <div class="news-widget">
                                  <h2>
                                      <span class="bg-red">Last Month</span>
                                  </h2>
                                  <i class="fontello-money"></i>
                                  <h4 class="text-red">
                                      <small>$</small>8,475</h4>
                                  <h5>Earning</h5>
                                  <div style="clear:both;"></div>
                              </div>
                          </div>
                          <!-- /.box-body -->
                      </div>
                      <!-- /.box -->
                  </div>

                  <div class="col-lg-6">
                      <div class="box">
                          <!-- /.box-header -->
                          <div class="box-body">
                              <div class="news-widget">
                                  <h2>
                                      <span class="bg-blue">Today</span>
                                  </h2>
                                  <i class="fontello-user-1"></i>
                                  <h4 class="text-blue">1645</h4>
                                  <h5>New User</h5>
                                  <div style="clear:both;"></div>
                              </div>
                          </div>
                          <!-- /.box-body -->
                      </div>
                      <!-- /.box -->
                  </div>
              </div>


                <div class="row">
                    <div class="col-lg-8">
                        <div class="box">
                            <!-- /.box-header -->
                            <div class="box-body">
                                <div class="btn-group" id="realtime" data-toggle="btn-toggle">
                                    <button type="button" class="btn btn-default btn-xs" data-toggle="on">On</button>
                                    <button type="button" class="btn btn-default btn-xs" data-toggle="off">Off</button>
                                </div>
                                <div id="interactive" style="height: 200px;"></div>
                            </div>
                            <!-- /.box-body -->
                        </div>
                        <!-- /.box -->
                    </div>

                    <div class="col-lg-4">
                        <div class="box">
                            <!-- /.box-header -->
                            <div class="box-body">
                                <div id="line-chart" style="height: 235px;"></div>
                            </div>
                            <!-- /.box-body -->
                        </div>
                        <!-- /.box -->
                    </div>

                </div>

                <div class="row">
                    <div class="col-lg-2">
                        <div class="content-bg">
                            <div class="content-icon">
                                <i class="fontello-twitter bg-green"></i>
                                <h2 class="text-green">5,455</h2>
                                <p>Followers</p>

                                <ul class="list-unstyled list-inline soc-widget bg-green">
                                    <li>
                                        <span class="fontello-pen"></span>
                                    </li>
                                    <li>
                                        <span class="fontello-loop-alt"></span>
                                    </li>
                                    <li>
                                        <span class=" fontello-post"></span>
                                    </li>
                                </ul>

                            </div>
                        </div>
                    </div>
                    <div class="col-lg-2">
                        <div class="content-bg">

                            <div class="content-icon">
                                <i class="fontello-facebook bg-aqua"></i>
                                <h2 class="text-aqua">182</h2>
                                <p class="text-aqua">Friends</p>
                                <ul class="list-unstyled list-inline soc-widget bg-aqua">
                                    <li>
                                        <span class="fontello-pen"></span>
                                    </li>
                                    <li>
                                        <span class="fontello-loop-alt"></span>
                                    </li>
                                    <li>
                                        <span class=" fontello-post"></span>
                                    </li>
                                </ul>

                            </div>
                        </div>
                    </div>
                    <div class="col-lg-2">
                        <div class="content-bg">

                            <div class="content-icon text-white">
                                <i class="fa fa-google-plus bg-red"></i>
                                <h2 class="text-red">564</h2>
                                <p class="text-red">Circle</p>
                                <ul class="list-unstyled list-inline soc-widget bg-red">
                                    <li>
                                        <span class="fontello-pen"></span>
                                    </li>
                                    <li>
                                        <span class="fontello-loop-alt"></span>
                                    </li>
                                    <li>
                                        <span class=" fontello-post"></span>
                                    </li>
                                </ul>


                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6">


                        <div class="box">
                            <div class="box-header">
                                <!-- tools box -->
                                <div class="pull-right box-tools">
                                    <span class="box-btn bg-green"><i class="fontello-wrench-outline"></i>
                                    </span>

                                </div>
                                <div class="media direction">
                                    <span class="pull-left">
                                        <i class="media-object fontello-chart-alt-outline"></i>
                                    </span>
                                    <div class="media-body">
                                        <h5 style="margin:-2px 0 0" class="media-heading">Statitic</h5>
                                        <h4>Trans Studio, Kiara Condong</h4>
                                        <span class="pull-right"></span>
                                    </div>
                                </div>
                            </div>
                            <div class="box-body no-padding">

                                <ul class="list-unstyled newsticker">
                                    <li class="bg-red">
                                        <ul class="list-unstyled jalur-nest">
                                            <li>
                                                "Happy brithday to you hunny"
                                            </li>
                                            <li>
                                                <i class="fa fa-google-plus"></i>
                                                <i class="fontello-chronograph"></i>&nbsp;&nbsp;11 Menit 24 Detik</li>
                                        </ul>
                                    </li>

                                    <li class="bg-green">
                                        <ul class="list-unstyled jalur-nest ">
                                            <li>
                                                <strong>Jalur 2 : Tomang</strong>
                                            </li>
                                            <li>
                                                <i class="fontello-facebook"></i>
                                                <i class="fontello-chronograph"></i>&nbsp;&nbsp;23 Menit 53 Detik</li>
                                        </ul>
                                    </li>

                                    <li class="bg-aqua">
                                        <ul class="list-unstyled jalur-nest">
                                            <li>
                                                <strong>Jalur 3 : Cengkareng</strong>
                                            </li>
                                            <li>
                                                <i class="fontello-facebook"></i>
                                                <i class="fontello-chronograph"></i>&nbsp;&nbsp;45 Menit 23 Detik</li>
                                        </ul>
                                    </li>
                                </ul>
                                <br>
                                <br>
                            </div>
                            <!-- /.box-body -->
                        </div>




                    </div>
                </div>


                <div class="row">
                    <div class="col-lg-4">
                        <div class="box">
                            <div class="box-header">
                                <!-- tools box -->
                                <div class="pull-right box-tools">
                                    <span class="box-btn bg-green"><i class="fontello-wrench-outline"></i>
                                    </span>

                                </div>
                                <h3 class="box-title"><i class="bg-green fontello-waves"></i> 
                                    <span class="text-green">Weave Loader</span>
                                </h3>
                            </div>
                            <div class="box-body">
                                <div class="loader"></div>
                            </div>
                            <!-- /.box-body -->
                        </div>
                        <!-- /.box -->
                    </div>

                    <div class="col-lg-8">
                        <div class="box">
                            <div class="box-header">
                                <!-- tools box -->
                                <div class="pull-right box-tools">
                                    <span class="box-btn bg-green"><i class=" fontello-wrench-outline"></i>
                                    </span>

                                    <span class="box-btn bg-aqua" data-widget="collapse"><i class="fa fa-minus"></i>
                                    </span>
                                    <span class="box-btn bg-red" data-widget="remove"><i class="fa fa-times"></i>
                                    </span>
                                </div>
                                <h3 class="box-title"><i class="bg-aqua fontello-chart-alt-outline"></i> 
                                    <span class="text-aqua">Social Stat</span>
                                </h3>
                            </div>
                            <div class="box-body">
                                <div class="table-responsive">
                                    <table class="table">
                                        <tbody>
                                            <tr>
                                                <td style="width:180px">
                                                    <strong>Google Plus page value</strong>
                                                    <br>Averga Persetance
                                                </td>
                                                <td>
                                                    <div id="step">
                                                        <div style="margin: 15px 0 0;" class="number-pb">
                                                            <div class="number-pb-shown sun"></div>
                                                            <div class="number-pb-num">0/0</div>
                                                        </div>
                                                    </div>
                                                </td>
                                                <td style="width:100px">
                                                    <div class="pull-right text-red">
                                                        <small>$</small>7,086,050</div>
                                                    <br>
                                                    <small class="pull-right">21,00%</small>
                                                </td>
                                            </tr>
                                            <tr>

                                                <td>
                                                    <strong>Twitter page value</strong>
                                                    <br>Averga Persetance</td>
                                                <td>
                                                    <div id="basic">
                                                        <div style="margin: 15px 0 0;" class="number-pb">
                                                            <div class="number-pb-shown"></div>
                                                            <div class="number-pb-num">0</div>
                                                        </div>
                                                    </div>
                                                </td>
                                                <td>
                                                    <div class="pull-right text-green">
                                                        <small>$</small>1,346,232</div>
                                                    <br>
                                                    <small class="pull-right">56,00%</small>
                                                </td>
                                            </tr>
                                            <tr>

                                                <td>
                                                    <strong>Facebook page value</strong>
                                                    <br>Averga Persetance</td>
                                                <td>
                                                    <div id="percentage">
                                                        <div style="margin: 15px 0 0;" class="number-pb">
                                                            <div class="number-pb-shown dream"></div>
                                                            <div class="number-pb-num">0%</div>
                                                        </div>
                                                    </div>
                                                </td>
                                                <td>
                                                    <div class="pull-right text-aqua">
                                                        <small>$</small>3,734,858</div>
                                                    <br>
                                                    <small class="pull-right">78,00%</small>
                                                </td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                            <!-- /.box-body -->
                        </div>
                        <!-- /.box -->
                    </div>
                </div>

                <div class="row">
                    <div class="col-lg-3">
                        <div class="plan">
                            <h3 class="plan-title">Started</h3>
                            <p class="plan-price">
                                <small>$</small>19
                                <span class="plan-unit">per month</span>
                            </p>
                            <ul class="plan-features">
                                <li>2
                                    <span class="plan-feature-name">websites</span>
                                </li>
                                <li>5
                                    <span class="plan-feature-unit">GB</span>
                                    <span class="plan-feature-name">storage</span>
                                </li>
                                <li>3
                                    <span class="plan-feature-name">users</span>
                                </li>
                            </ul>
                            <a href="#" class="plan-button">Choose Plan</a>
                        </div>
                    </div>



                    <div class="col-lg-3">
                        <div class="plan plan-highlight">
                            <p class="plan-recommended">Recommended</p>
                            <h3 class="plan-title">Team</h3>
                            <p class="plan-price">
                                <small>$</small>49
                                <span class="plan-unit">per month</span>
                            </p>
                            <ul class="plan-features">
                                <li>5
                                    <span class="plan-feature-name">websites</span>
                                </li>
                                <li>20
                                    <span class="plan-feature-unit">GB</span>
                                    <span class="plan-feature-name">storage</span>
                                </li>
                                <li>10
                                    <span class="plan-feature-name">users</span>
                                </li>
                            </ul>
                            <a href="#" class="plan-button">Choose Plan</a>
                        </div>
                    </div>


                    <div class="col-lg-3">
                        <div class="plan">
                            <h3 class="plan-title">Premium</h3>
                            <p class="plan-price">
                                <small>$</small>99
                                <span class="plan-unit">per month</span>
                            </p>
                            <ul class="plan-features">
                                <li>20
                                    <span class="plan-feature-name">websites</span>
                                </li>
                                <li>50
                                    <span class="plan-feature-unit">GB</span>
                                    <span class="plan-feature-name">storage</span>
                                </li>
                                <li>25
                                    <span class="plan-feature-name">users</span>
                                </li>
                            </ul>
                            <a href="#" class="plan-button">Choose Plan</a>
                        </div>
                    </div>


                    <div class="col-lg-3">
                        <div class="plan">
                            <h3 class="plan-title">Corporate</h3>
                            <p class="plan-price">
                                <small>$</small>249
                                <span class="plan-unit">per month</span>
                            </p>
                            <ul class="plan-features">
                                <li>&infin;
                                    <span class="plan-feature-name">websites</span>
                                </li>
                                <li>200
                                    <span class="plan-feature-unit">GB</span>
                                    <span class="plan-feature-name">storage</span>
                                </li>
                                <li>&infin;
                                    <span class="plan-feature-name">users</span>
                                </li>
                            </ul>
                            <a href="#" class="plan-button">Choose Plan</a>
                        </div>
                    </div>
                </div>


            </div>
            <!-- #/paper bg -->
        </div>
        <!-- ./wrap-sidebar-content -->

        <!-- / END OF CONTENT -->

        <!-- FOOTER -->
        <div id="footer">
            <div class="devider-footer-left"></div>
            <div class="time">
                <p id="spanDate"></p>
                <p id="clock"></p>
            </div>
            <div class="copyright">Copyright &copy; 2014 <a href="http://ndesaintheme.com/">Themesmile</a> Made with <i class="fontello-heart-filled text-red"></i>
            </div>
            <div class="devider-footer"></div>
            <ul>
                <li><i class="fa fa-facebook-square"></i>
                </li>
                <li><i class="fa fa-twitter-square"></i>
                </li>
                <li><i class="fa fa-instagram"></i>
                </li>
            </ul>
        </div>
        <!-- / FOOTER -->
    </div>
    <!-- Container -->

    <!-- 
    ================================================== -->
        <!-- Main jQuery Plugins -->
    <script src="<?php echo base_url() .'assets/modules/students/js/jquery.js'?>"></script>
    <script src="<?php echo base_url() .'assets/js/jquery2.js'?>"></script>
    <script src="<?php echo base_url() .'assets/bootstrap/js/bootstrap.js'?>"></script>
    <script src="<?php echo base_url() .'assets/modules/students/js/pace/pace.js'?>"></script>
    <script src="<?php echo base_url() .'assets/modules/students/js/date.js'?>"></script>
    <script src="<?php echo base_url() .'assets/modules/students/js/slimscroll/jquery.slimscroll.js'?>"></script>
    <script src="<?php echo base_url() .'assets/modules/students/js/jquery.nicescroll.min.js'?>"></script>
    <script src="<?php echo base_url() .'assets/modules/students/js/sliding-menu.js'?>"></script>
    <script src="<?php echo base_url() .'assets/modules/students/js/scriptbreaker-multiple-accordion-1.js'?>"></script>
    <script src="<?php echo base_url() .'assets/modules/students/js/tip/jquery.tooltipster.min.js'?>"></script>
    <script src="<?php echo base_url() .'assets/modules/students/js/donut-chart/jquery.drawDoughnutChart.js'?>"></script>
    <script src="<?php echo base_url() .'assets/modules/students/js/tab/jquery.newsTicker.js'?>"></script>
    <script src="<?php echo base_url() .'assets/modules/students/js/tab/app.ticker.js'?>"></script>
    <script src="<?php echo base_url() .'assets/modules/students/js/app.js'?>"></script>

    <script src="<?php echo base_url() .'assets/modules/students/js/vegas/jquery.vegas.js'?>"></script>
    <script src="<?php echo base_url() .'assets/modules/students/js/image-background.js'?>"></script>
    <script src="<?php echo base_url() .'assets/modules/students/js/jquery.tabSlideOut.v1.3.js'?>"></script>
    <script src="<?php echo base_url() .'assets/modules/students/js/bg-changer.js'?>"></script>

    <script src="<?php echo base_url() .'assets/modules/students/js/number-progress-bar/jquery.velocity.min.js'?>"></script>
    <script src="<?php echo base_url() .'assets/modules/students/js/number-progress-bar/number-pb.js'?>"></script>
    <script src="<?php echo base_url() .'assets/modules/students/js/loader/loader.js'?>"></script>
    <script src="<?php echo base_url() .'assets/modules/students/js/loader/demo.js'?>"></script>
    <script src="<?php echo base_url() .'assets/modules/students/js/skycons/skycons.js'?>"></script>

    <script src="<?php echo base_url() .'assets/modules/students/js/flot/jquery.flot.min.js'?>"></script>
    <script src="<?php echo base_url() .'assets/modules/students/js/flot/jquery.flot.resize.min.js'?>"></script>
    <script src="<?php echo base_url() .'assets/modules/students/js/flot/jquery.flot.pie.min.js'?>"></script>
    <script src="<?php echo base_url() .'assets/modules/students/js/flot/jquery.flot.categories.min.js'?>"></script>
    <!--
    <script src="js/pace/pace.js"></script>
    <script type='text/javascript' src='js/date.js'></script>
    <script type='text/javascript' src='js/slimscroll/jquery.slimscroll.js'></script>
    <script type='text/javascript' src='js/jquery.nicescroll.min.js'></script>
    <script type='text/javascript' src='js/sliding-menu.js'></script>
    <script type='text/javascript' src='js/scriptbreaker-multiple-accordion-1.js'></script>
    <script type='text/javascript' src='js/tip/jquery.tooltipster.min.js'></script>
    <script type='text/javascript' src="js/donut-chart/jquery.drawDoughnutChart.js"></script>
    <script type='text/javascript' src="js/tab/jquery.newsTicker.js"></script>
    <script type='text/javascript' src="js/tab/app.ticker.js"></script>
    <script type='text/javascript' src='js/app.js'></script>

    <script type='text/javascript' src='js/vegas/jquery.vegas.js'></script>
    <script type='text/javascript' src='js/image-background.js'></script>
    <script type="text/javascript" src="js/jquery.tabSlideOut.v1.3.js"></script>
    <script type="text/javascript" src="js/bg-changer.js"></script>

    <script type='text/javascript' src="js/number-progress-bar/jquery.velocity.min.js"></script>
    <script type='text/javascript' src="js/number-progress-bar/number-pb.js"></script>
    <script src="js/loader/loader.js" type="text/javascript"></script>
    <script src="js/loader/demo.js" type="text/javascript"></script>
    <script type="text/javascript" src="js/skycons/skycons.js"></script>
    -->
    <!-- TAB SLIDER -->


    <script>
    //Weather Icons
    (function($) {
        "use strict";
        var icons = new Skycons({
                "stroke": 0.08,
                "color": "Gray",
                "cloudColor": "#65C3DF",
                "sunColor": "#0090d9",
                "moonColor": "DodgerBlue",
                "rainColor": "RoyalBlue",
                "snowColor": "LightGray",
                "windColor": "LightSteelBlue",
                "fogColor": "#65C3DF"
            }),
            list = [
                "clear-day", "clear-night", "partly-cloudy-day",
                "partly-cloudy-night", "cloudy", "rain", "sleet", "snow", "wind",
                "fog"
            ],
            i;

        for (i = list.length; i--;)
            icons.set(list[i], list[i]);
        icons.play();
    })(jQuery);

    //Animation Slider
    $(function() {
        function randomPercentage() {
            return Math.floor(Math.random() * 100);
        }

        function randomInterval() {
            var min = Math.floor(Math.random() * 30);
            var max = min + (Math.floor(Math.random() * 40) + 70);
            return [min, max];
        }

        function randomStep() {
            return Math.floor(Math.random() * 10) + 5;
        }

        // setup
        var $basic = $('#basic');
        var interval = randomInterval();
        var basicBar = $basic.find('.number-pb').NumberProgressBar({
            style: 'basic',
            min: interval[0],
            max: interval[1]
        })
        $basic.find('.title span').text('[Min: ' + interval[0] + ', Max: ' + interval[1] + ']');

        var percentageBar = $('#percentage .number-pb').NumberProgressBar({
            style: 'percentage'
        })

        var $step = $('#step');
        var maxStep = randomStep()
        var stepBar = $('#step .number-pb').NumberProgressBar({
            style: 'step',
            max: maxStep
        })
        $step.find('.title span').text('[Max step: ' + maxStep + ']');

        // loop
        var basicLoop = function() {
            basicBar.reach(undefined, {
                complete: percentageLoop
            });
        }

        var percentageLoop = function() {
            percentageBar.reach(undefined, {
                complete: stepLoop
            });
        }

        var stepLoop = function() {
            stepBar.reach(undefined, {
                complete: basicLoop
            });
        }

        // start
        basicLoop();
    });
    </script>

    <script type="text/javascript">
    $(function() {
        "use strict";
        /*
         * Flot Interactive Chart
         * -----------------------
         */
        // We use an inline data source in the example, usually data would
        // be fetched from a server
        var data = [],
            totalPoints = 100;

        function getRandomData() {

            if (data.length > 0)
                data = data.slice(1);

            // Do a random walk
            while (data.length < totalPoints) {

                var prev = data.length > 0 ? data[data.length - 1] : 50,
                    y = prev + Math.random() * 10 - 5;

                if (y < 0) {
                    y = 0;
                } else if (y > 100) {
                    y = 100;
                }

                data.push(y);
            }

            // Zip the generated y values with the x values
            var res = [];
            for (var i = 0; i < data.length; ++i) {
                res.push([i, data[i]]);
            }

            return res;
        }

        var interactive_plot = $.plot("#interactive", [getRandomData()], {
            grid: {
                borderColor: "#f3f3f3",
                borderWidth: 1,
                tickColor: "#f3f3f3"
            },
            series: {
                shadowSize: 0, // Drawing is faster without shadows
                color: "#03B2B4"
            },
            lines: {
                fill: true, //Converts the line chart to area chart
                color: "#03B2B4"
            },
            yaxis: {
                min: 0,
                max: 100,
                show: true
            },
            xaxis: {
                show: true
            }
        });

        var updateInterval = 500; //Fetch data ever x milliseconds
        var realtime = "on"; //If == to on then fetch data every x seconds. else stop fetching
        function update() {

            interactive_plot.setData([getRandomData()]);

            // Since the axes don't change, we don't need to call plot.setupGrid()
            interactive_plot.draw();
            if (realtime === "on")
                setTimeout(update, updateInterval);
        }

        //INITIALIZE REALTIME DATA FETCHING
        if (realtime === "on") {
            update();
        }
        //REALTIME TOGGLE
        $("#realtime .btn").click(function() {
            if ($(this).data("toggle") === "on") {
                realtime = "on";
            } else {
                realtime = "off";
            }
            update();
        });
        /*
         * END INTERACTIVE CHART
         */


        /*
         * LINE CHART
         * ----------
         */
        //LINE randomly generated data

        var sin = [],
            cos = [];
        for (var i = 0; i < 14; i += 0.5) {
            sin.push([i, Math.sin(i)]);
            cos.push([i, Math.cos(i)]);
        }
        var line_data1 = {
            data: sin,
            color: "#3c8dbc"
        };
        var line_data2 = {
            data: cos,
            color: "#03B2B4"
        };
        $.plot("#line-chart", [line_data1, line_data2], {
            grid: {
                hoverable: true,
                borderColor: "#f3f3f3",
                borderWidth: 1,
                tickColor: "#f3f3f3"
            },
            series: {
                shadowSize: 0,
                lines: {
                    show: true
                },
                points: {
                    show: true
                }
            },
            lines: {
                fill: false,
                color: ["#3c8dbc", "#f56954"]
            },
            yaxis: {
                show: true,
            },
            xaxis: {
                show: true
            }
        });
        //Initialize tooltip on hover
        $("<div class='tooltip-inner' id='line-chart-tooltip'></div>").css({
            position: "absolute",
            display: "none",
            opacity: 0.8
        }).appendTo("body");
        $("#line-chart").bind("plothover", function(event, pos, item) {

            if (item) {
                var x = item.datapoint[0].toFixed(2),
                    y = item.datapoint[1].toFixed(2);

                $("#line-chart-tooltip").html(item.series.label + " of " + x + " = " + y)
                    .css({
                        top: item.pageY + 5,
                        left: item.pageX + 5
                    })
                    .fadeIn(200);
            } else {
                $("#line-chart-tooltip").hide();
            }

        });
        /* END LINE CHART */

        /*
         * FULL WIDTH STATIC AREA CHART
         * -----------------
         */
        var areaData = [
            [2, 88.0],
            [3, 93.3],
            [4, 102.0],
            [5, 108.5],
            [6, 115.7],
            [7, 115.6],
            [8, 124.6],
            [9, 130.3],
            [10, 134.3],
            [11, 141.4],
            [12, 146.5],
            [13, 151.7],
            [14, 159.9],
            [15, 165.4],
            [16, 167.8],
            [17, 168.7],
            [18, 169.5],
            [19, 168.0]
        ];
        $.plot("#area-chart", [areaData], {
            grid: {
                borderWidth: 0
            },
            series: {
                shadowSize: 0, // Drawing is faster without shadows
                color: "#00c0ef"
            },
            lines: {
                fill: true //Converts the line chart to area chart                        
            },
            yaxis: {
                show: false
            },
            xaxis: {
                show: false
            }
        });

        /* END AREA CHART */

        /*
         * BAR CHART
         * ---------
         */

        var bar_data = {
            data: [
                ["January", 10],
                ["February", 8],
                ["March", 4],
                ["April", 13],
                ["May", 17],
                ["June", 9]
            ],
            color: "#3c8dbc"
        };
        $.plot("#bar-chart", [bar_data], {
            grid: {
                borderWidth: 1,
                borderColor: "#f3f3f3",
                tickColor: "#f3f3f3"
            },
            series: {
                bars: {
                    show: true,
                    barWidth: 0.5,
                    align: "center"
                }
            },
            xaxis: {
                mode: "categories",
                tickLength: 0
            }
        });
        /* END BAR CHART */

        /*
         * DONUT CHART
         * -----------
         */

        var donutData = [{
            label: "Series2",
            data: 30,
            color: "#3c8dbc"
        }, {
            label: "Series3",
            data: 20,
            color: "#0073b7"
        }, {
            label: "Series4",
            data: 50,
            color: "#00c0ef"
        }];
        $.plot("#donut-chart", donutData, {
            series: {
                pie: {
                    show: true,
                    radius: 1,
                    innerRadius: 0.5,
                    label: {
                        show: true,
                        radius: 2 / 3,
                        formatter: labelFormatter,
                        threshold: 0.1
                    }

                }
            },
            legend: {
                show: false
            }
        });
        /*
         * END DONUT CHART
         */

    });

    /*
     * Custom Label formatter
     * ----------------------
     */
    function labelFormatter(label, series) {
        return "<div style='font-size:13px; text-align:center; padding:2px; color: #fff; font-weight: 600;'>" + label + "<br/>" + Math.round(series.percent) + "%</div>";
    }
    </script>





</body>


<!-- Mirrored from ndesaintheme.com/themes/cannavaro/v1.3/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 17 Dec 2014 20:03:00 GMT -->
</html>