<?php
session_start();
if (!isset($_SESSION["user"])) {
    header("location:index.php");
}

ob_start();


                    ?>



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
    <?php


    ?>
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


        <div id="page-wrapper">
            <div id="page-inner">
                <div class="row">
                    <div class="col-md-12">
                        <h1 class="page-header">
                            PAYMENT DETAILS <small></small>
                        </h1>
                    </div>
                </div>


                <div class="row">

                    <div class="col-md-6 col-sm-6">
                        <div class="panel panel-primary">
                            <div class="panel-heading">
                                PERSONAL INFORMATION
                            </div>

                            <?php
                                $id = $_GET['pid'];
                                include ('db.php');
                                $sql = "SELECT * FROM `payment` WHERE id='$id'";
                                $re = mysqli_query($con,$sql);
                                $p_row = mysqli_fetch_assoc($re);

                               
                           
                            ?>

                            <div class="panel-body">
                                <form name="form" method="post" action="editPayment.php" id="sbumit_one">


                                    <div class="form-group">
                                        <label>Name</label>
                                        <input type="hidden" name="id" value="<?php echo $p_row['id'];?>">
                                        <input type="text" name="name" class="form-control" value="<?php echo $p_row['fname'],""." ".$p_row['lname']; ?>" />

                                    </div>



                                    <div class="form-group">
                                        <label>Room Type</label>
                                        
                                        <select name="room" class="form-control" required>
                                            <option value selected></option>
                                            <option value="Deluxe Room"
                                            <?php
                                        if($p_row['troom'] == 'Deluxe Room' ){
                                          echo "Selected";  
                                        }
                                        ?>
                                            >Deluxe Room</option>
                                            <option value="Luxury Room"
                                            <?php
                                        if( $p_row['troom'] == 'Luxury Room' ){
                                          echo "Selected";  
                                        }
                                        ?>
                                            >Luxury Room</option>
                                            <option value="Room with view" 
                                            <?php
                                        if($p_row['troom'] == 'Room with view'){
                                          echo "Selected";  
                                        }
                                        ?>
                                            >Room with view</option>
                                            <option value="Penthouse"
                                            <?php
                                        if( $p_row['troom'] == 'Penthouse'){
                                          echo "Selected";  
                                        }
                                        ?>
                                            >Penthouse</option>
                                        </select>

                                    </div>


                                    <div class="form-group">
                                        <label>Bed Type</label>
                                        

                                        <select name="bed" class="form-control" required>
                                            <option value selected></option>
                                            <option value="Single"
                                            <?php
                                        if($p_row['tbed'] == 'Single'){
                                            echo "Selected";
                                        }
                                        ?>
                                            >Single</option>
                                            <option value="Double"
                                            <?php
                                        if( $p_row['tbed'] == 'Double' ){
                                            echo "Selected";
                                        }
                                        ?>
                                            >Double</option>
                                            <option value="Triple"
                                            <?php
                                        if($p_row['tbed'] == 'Triple'){
                                            echo "Selected";
                                        }
                                        ?>
                                            >Triple</option>
                                        </select>

                                    </div>


                                    <div class="form-group">
                                        <label>Move-in Date</label>
                                        <input name="date" type="date" class="form-control" value="<?php echo $p_row['min']; ?>" required>

                                    </div>
                                <!-- </form> -->




                            </div>



                        </div>

                    </div>


                    <div class="row">
                        <div class="col-md-6 col-sm-6">
                            <div class="panel panel-primary">
                                <div class="panel-heading">
                                    PRICE INFORMATION
                                </div>

                                <div class="panel-body">

                                    

                                        <div class="form-group">
                                            <label>Payment Type</label>
                                            
                                            <select name="payment" class="form-control" required>
                                                <option value selected></option>
                                                <option value="Monthly"
                                                <?php
                                            if($p_row['payment'] =='Monthly'){
                                                echo "Selected";
                                            }
                                            ?>
                                                >Monthly</option>
                                                <option value="Yearly"
                                                <?php
                                            if($p_row['payment'] =='Yearly'){
                                                echo "Selected";
                                            }
                                            ?>
                                                >Yearly</option>




                                            </select>

                                        </div>

                                        <div class="form-group">
                                            <label>Room Rent</label>
                                            <input name="rent" type="text" class="form-control" required value="<?php echo $p_row['room']; ?>">

                                        </div>

                                        <div class="form-group">
                                            <label>Bed Rent</label>
                                            <input name="bedrent" type="text" class="form-control" required value="<?php echo $p_row['bed']; ?>">

                                        </div>

                                        <div class="form-group">
                                            <label>Total</label>
                                            <input name="total" type="text" class="form-control" required value="<?php echo $p_row['fintot']; ?>">

                                        </div>

                                    

                                </div>
                            </div>
                        </div>




                        <div class="col-md-12 col-sm-12">
                            <div class="">
                                <input type="submit" value="UPDATE"  class="btn btn-primary" style="padding-left:200px;padding-right:200px;margin-left:10px;">
                            </div>
                        </div>
                        </form>
                    </div>
                    