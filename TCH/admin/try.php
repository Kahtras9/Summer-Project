<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>RESERVATION SUNRISE HOTEL</title>
    <!-- Bootstrap Styles-->
    <link href="assets/css/bootstrap.css" rel="stylesheet" />
    <!-- FontAwesome Styles-->
    <link href="assets/css/font-awesome.css" rel="stylesheet" />
    <!-- Custom Styles-->
    <link href="assets/css/custom-styles.css" rel="stylesheet" />
    <!-- Google Fonts-->
    <link href='http://fonts.googleapis.com/css?family=Open+Sans' rel='stylesheet' type='text/css' />
    <style>
        input[type="submit"] {
            width: 100%;
            height: 100%;
            margin: 0;
            padding: 15px;
        }
    </style>
</head>

<body>
    <div id="wrapper">
        <nav class="navbar navbar-default top-navbar" role="navigation">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".sidebar-collapse">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="home.php"> Dashboard </a>
            </div>

            <ul class="nav navbar-top-links navbar-right">
                <li class="dropdown">
                    <a class="dropdown-toggle" data-toggle="dropdown" href="#" aria-expanded="false">
                        <i class="fa fa-user fa-fw"></i> <i class="fa fa-caret-down"></i>
                    </a>
                    <ul class="dropdown-menu dropdown-user">
                        <li><a href="usersetting.php"><i class="fa fa-user fa-fw"></i> User Profile</a>
                        </li>
                        <li><a href="settings.php"><i class="fa fa-gear fa-fw"></i> Settings</a>
                        </li>
                        <li class="divider"></li>
                        <li><a href="logout.php"><i class="fa fa-sign-out fa-fw"></i> Logout</a>
                        </li>
                    </ul>
                    <!-- /.dropdown-user -->
                </li>
                <!-- /.dropdown -->
            </ul>
        </nav>
        <!--/. NAV TOP  -->
        <nav class="navbar-default navbar-side" role="navigation">
            <div class="sidebar-collapse">
                <ul class="nav" id="main-menu">

                    <li>
                        <a class="active-menu" href="home.php"><i class="fa fa-dashboard"></i> Status</a>
                    </li>


                    <li>
                        <a href="payment.php"><i class="fa fa-qrcode"></i> Payment</a>
                    </li>
                    <li>
                        <a href="profit.php"><i class="fa fa-qrcode"></i> Profit</a>
                    </li>
                    <li>
                        <a href="logout.php"><i class="fa fa-sign-out fa-fw"></i> Logout</a>
                    </li>




                </ul>

            </div>

        </nav>

        <div class="container">
                     <form name="form" method="POST">
                        <div class="card">
                            <div class="card-body">
                                <h5 class="card-title">Payment</h5>
                                <div class="d-flex flex-row">
                                    <div class="d-flex flex-column"><label>Name</label></div>
                                    <div class="d-flex flex-column"><input name="name" class="form-control" required></div>
                                </div>
                                <div class="d-flex flex-row">
                                    <div class="d-flex flex-column"><label>Address</label></div>
                                    <div class="d-flex flex-column"><input name="address" class="form-control" required></div>
                                </div>
                                <div class="d-flex flex-row">
                                    <div class="d-flex flex-column"><label>Phone number</label></div>
                                    <div class="d-flex flex-column"><input name="number" class="form-control" required></div>
                                </div>
                            </div>
                        </div>
                        <div class="card">
                            <div class="card-body">
                                <h5 class="card-title">Personal Information</h5>
                                <div class="d-flex flex-row">
                                    <div class="d-flex flex-column"><label>Name</label></div>
                                    <div class="d-flex flex-column"><input name="name" class="form-control" required></div>
                                </div>
                                <div class="d-flex flex-row">
                                    <div class="d-flex flex-column"><label>Address</label></div>
                                    <div class="d-flex flex-column"><input name="address" class="form-control" required></div>
                                </div>
                                <div class="d-flex flex-row">
                                    <div class="d-flex flex-column"><label>Phone number</label></div>
                                    <div class="d-flex flex-column"><input name="number" class="form-control" required></div>
                                </div>
                            </div>
                        </div>
                        <button class="btn btn-primary">Submit</button>
                     </form>
                    </div>
 