<?php
?>
<!DOCTYPE html>
<html>
<head>
    <title>XeroSource</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">


    <link rel="stylesheet" href="<?php echo base_url();?>assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="<?php echo base_url();?>/assets/css/font-awesome.min.css">
    <link rel="stylesheet" href="<?php echo base_url();?>assets/css/global.css">

    <script src="<?php echo base_url();?>assets/js/jquery-3.2.1.min.js"></script>
    <script src="<?php echo base_url();?>assets/js/general.js"></script>
    <link rel="stylesheet" href="<?php echo base_url();?>assets/datatables/dataTables.bootstrap4.css">



</head>
<body>
<div id="header">
    <div class="logo"><a href="#">Xero<span>Source</span></a></div>

    <div class="logout">
        <a class="nav-link" data-toggle="modal" data-target="#exampleModal">
            <i class="fa fa-fw fa-sign-out"></i>Logout</a>
    </div>

    <div class="search">

        <form class="form-inline my-2 my-lg-0 mr-lg-2">
            <div class="input-group">
                <input class="form-control" type="text" placeholder="Search for...">
                <span class="input-group-btn">
                <button class="btn btn-primary" type="button">
                  <i class="fa fa-search"></i>
                </button>
              </span>
            </div>
        </form>

    </div>




</div> <!--header-->

<div id="container">
    <div class="sidebar">
        <nav class="main-nav">
            <ul class="navbar-nav navbar-sidenav" id="nav">
                <li>
                    <a class="nav-link" href="index.html">
                        <i class="fa fa-fw fa-dashboard"></i>
                        <span class="nav-link-text">Dashboard</span>
                    </a>
                </li>
                <li>
                    <a class="nav-link" href="register.html" data-toggle="modal" data-target="#myModal">
                        <i class="fa fa-user"></i>
                        <span class="nav-link-text">Register</span>
                    </a>
                </li>
                <li>
                    <a class="nav-link" href="chart.html">
                        <i class="fa fa-fw fa-area-chart"></i>
                        <span class="nav-link-text">Charts</span>
                    </a>
                </li>

                <li class="nav-item">
                    <a class="nav-link" href="#">
                        <i class="fa fa-leanpub"></i>
                        <span class="nav-link-text"> Subjects</span><span class="sub-arrow"></span>
                    </a>


                    <ul class="sidenav-second-level collapse" id="collapseComponents">
                        <li>
                            <a class="nav-link" href="#">
                                <span class="nav-link-text">Mathematics</span>
                            </a>

                        </li>
                        <li>
                            <a class="nav-link" href="#">
                                <span class="nav-link-text">Chemistry</span>
                            </a>
                        </li>
                        <li>
                            <a class="nav-link" href="#">
                                <span class="nav-link-text">Physics</span>
                            </a>
                        </li>
                    </ul>
                </li>



                <li>
                    <a class="nav-link" href="#">
                        <i class="fa fa-search"></i>
                        <span class="nav-link-text">Search</span>
                    </a>
                </li>
                <li>
                    <a class="nav-link" href="#">
                        <i class="fa fa-graduation-cap"></i>
                        <span class="nav-link-text">Rating</span>
                    </a>
                </li>

            </ul>
        </nav>
    </div>
    <div class="content">

        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="#">Dashboard</a></li>
            <li class="breadcrumb-item active">My Dashboard</li>
        </ol>



        <div class="card mb-3">
            <div class="card-header">
                <i class="fa fa-area-chart"></i><span class="nav-link-text">Attendence</span>
            </div>
            <img class="card-img" src="jquery-area-charts-graphs.png" alt="Card image" align="right" style="width:60%" height="400">
            <div class="card-body">

            </div>
            <div class="card-footer small text-muted">Updated Yesterday at 11.00 PM</div>

        </div>
    </div>
</div>
</body>
</html>