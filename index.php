<!DOCTYPE html>
<html>
    <head>
        <title>Dashboard | Klorofil - Free Bootstrap Dashboard Template</title>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
        <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0">
        <!-- Stylesheets -->
        <link rel="stylesheet" href="assets/vendor/bootstrap/css/bootstrap.min.css"/>
        <link rel="stylesheet" href="assets/vendor/fa/css/font-awesome.min.css"/>
        <link rel="stylesheet" href="assets/css/style.css"/>
        <!-- Scripts -->
        <script src="assets/vendor/jquery/jquery.js"></script>
        <script src="assets/vendor/bootstrap/js/bootstrap.min.js"></script>
        <script src="assets/js/script.js"></script>

    </head>
    
    <body>
        <style>
            .counter
            {
                position:fixed;
                bottom:0;
                right:0;
                z-index:9999;
                background-color:rgb(0,150,255);
                padding:10px;
            }
        </style>
        <div class="counter">
            <span>Width: <span class="w-val"></span></span>
            <span>Height: <span class="h-val"></span></span>
        </div>
        
        <div class="tm-leftpanel">
            <div class="col-md-12 tm-row tm-brand">
                <h3>PANEL</h3>
            </div>
            <div class="col-md-12 tm-menu">
                <div class="col-md-12 zero-padding">
                    <a href="index.php"><span class="fa fa-home"></span> Dashboard</a>
                </div>
                <div class="col-md-12 zero-padding">
                    <a href="chart.php"><span class="fa fa-bar-chart"></span> Chart</a>
                </div>
                <div class="col-md-12 zero-padding">
                    <a href="login.php"><span class="fa fa-sign-in"></span> Login Page</a>
                </div>
                <div class="col-md-12 zero-padding">
                    <a href="blank.php"><span class="fa fa-file"></span> Blank Page</a>
                </div>
                <div class="col-md-12 zero-padding">
                    <a href="blank.php"><span class="fa fa-table"></span> Table</a>
                </div>
                <div class="col-md-12 zero-padding">
                    <a href="javascript:void(0)" class="group-btn" status="0"><span class="fa fa-home"></span> Group Menu <el><i class="fa fa-chevron-down"></i></el></a>
                    <div class="group">
                        <a href="#">Menu Group</a>
                    </div>
                </div>
            </div>
        </div>
        <div class="tm-navpanel">
            <button type="button" class="panel-trigger"><span class="fa fa-bars"></span></button>
            <div class="tm-nav-dropdown">
                <a href="javascript:void(0)" class="dd-open"><span class="fa fa-search"></span></a>
                <div class="tm-dd-body dd-content">
                    <div class="form-group">
                        <label>Search</label>
                        <input type="text" required class="form-control" placeholder="Search...">
                    </div>
                    <div class="form-group">
                        <button type="button" class="btn btn-primary btn-sm">Search</button>
                    </div>
                </div>
            </div>
            <div class="tm-nav-dropdown">
                <a href="javascript:void(0)" class="dd-open"><span class="fa fa-bell"></span></a>
                <div class="tm-dd-body dd-content">
                    <div class="custom-list">
                        <div class="list-icon">
                            <span class="fa fa-bell"></span>
                        </div>
                        <div class="list-content">
                            Notif 1
                        </div>
                    </div>
                    <div class="custom-list">
                        <div class="list-icon">
                            <span class="fa fa-bell"></span>
                        </div>
                        <div class="list-content">
                            Notif 1
                        </div>
                    </div>
                </div>
            </div>
            <div class="tm-nav-dropdown">
                <a href="javascript:void(0)" class="dd-open"><span class="fa fa-envelope"></span></a>
                <div class="tm-dd-body dd-content">
                    <div class="custom-list">
                        <div class="list-icon">
                            <span class="fa fa-envelope"></span>
                        </div>
                        <div class="list-content">
                            Email from:
                        </div>
                    </div>
                </div>
            </div>
            
            
        </div>
        
        <div class="col-md-10 col-md-offset-2 tm-body">
            <div class="col-md-12 tm-crumb">
                <ul class="breadcrumb">
                    <li class="active"><a href="#"><span class="fa fa-home"></span> Dashboard</a></li>
                    <li><span class="fa fa-file"></span> Page</li>
                </ul>
            </div>
            
            <div class='col-md-12'>
                <div class='col-md-12'>
                    <div class='panel' buttons='yes'>
                        <div class='panel-heading'>
                            <span>Welcome to ChanPanel</span>
                        </div>

                        <div class='panel-body'>
                            <p>Fully Rich and Mobile Friendly Admin Template</p>
                        </div>
                    </div>
                </div>
                
                <div class='col-md-12'>
                    <div class='panel' buttons='yes'>
                        <div class='panel-heading'>
                            <span><span class="fa fa-bar-chart"></span> Statistics</span>
                        </div>

                        <div class='panel-body'>
                            <!-- Style it yourself -->
                            <div class="col-md-3">
                                <h5 style="font-weight:bold;">TOTAL VISITS:</h5>
                                <h5 style="font-size:50px;font-weight:bold;">1,000</h5>
                            </div>
                            <div class="col-md-3">
                                <h5 style="font-weight:bold;">TOTAL RATES:</h5>
                                <h5 style="font-size:50px;font-weight:bold;">900</h5>
                            </div>
                            <div class="col-md-3">
                                <h5 style="font-weight:bold;">UNIQUE VISITORS:</h5>
                                <h5 style="font-size:50px;font-weight:bold;">1,500</h5>
                            </div>
                            <div class="col-md-3">
                                <h5 style="font-weight:bold;">TOTAL PAGEVIEWS:</h5>
                                <h5 style="font-size:50px;font-weight:bold;">35,100</h5>
                            </div>
                        </div>
                    </div>
                </div>
                
                <div class="col-md-8">
                    <div class='panel' buttons='yes'>
                        <div class='panel-heading'>
                            <span><span class="fa fa-map"></span> Google Maps</span>
                        </div>
                        <div class="panel-body">
                            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d32657805.653944384!2d99.41742990864682!3d-2.3197966028417016!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2c4c07d7496404b7%3A0xe37b4de71badf485!2sIndonesia!5e0!3m2!1sen!2sid!4v1552174662509" width="100%" height="500" frameborder="0" style="border:0" allowfullscreen></iframe>
                        </div>
                    </div>
                </div>
                
                <div class="col-md-4">
                    <div class='panel' buttons='yes'>
                        <div class='panel-heading'>
                            <span><span class="fa fa-users"></span> Audiences</span>
                        </div>
                        <div class="panel-body">
                            <div class="col-md-12">
                                <h5>Viewers from Indonesia</h5>
                                <div class="progress">
                                  <div class="progress-bar" role="progressbar" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100" style="width: 60%;">
                                    <span class="sr-only">60% Complete</span>
                                  </div>
                                </div>
                            </div>
                            
                            <div class="col-md-12">
                                <h5>Viewers from USA</h5>
                                <div class="progress">
                                  <div class="progress-bar" role="progressbar" aria-valuenow="30" aria-valuemin="0" aria-valuemax="100" style="width: 30%;">
                                    <span class="sr-only">60% Complete</span>
                                  </div>
                                </div>
                            </div>
                            
                            <div class="col-md-12">
                                <h5>Viewers from UK</h5>
                                <div class="progress">
                                  <div class="progress-bar" role="progressbar" aria-valuenow="20" aria-valuemin="0" aria-valuemax="100" style="width: 20%;">
                                    <span class="sr-only">60% Complete</span>
                                  </div>
                                </div>
                            </div>
                            
                            <div class="col-md-12">
                                <h5>Viewers from Malaysia</h5>
                                <div class="progress">
                                  <div class="progress-bar" role="progressbar" aria-valuenow="40" aria-valuemin="0" aria-valuemax="100" style="width: 40%;">
                                    <span class="sr-only">60% Complete</span>
                                  </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </body>
</html>
<script>
    setInterval(function(){
        var w = $(document).width();
        var h = $(document).height();
        $(".w-val").html(w);
        $(".h-val").html(h);
    },0);
</script>
