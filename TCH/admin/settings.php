<?php  
session_start();  
if(!isset($_SESSION["user"]))
{
 header("location:index.php");
}
?> 
<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
      <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>TCH Tower</title>
	<!-- Bootstrap Styles-->
    <link href="assets/css/bootstrap.css" rel="stylesheet" />
     <!-- FontAwesome Styles-->
    <link href="assets/css/font-awesome.css" rel="stylesheet" />
        <!-- Custom Styles-->
    <link href="assets/css/custom-styles.css" rel="stylesheet" />
     <!-- Google Fonts-->
   <link href='http://fonts.googleapis.com/css?family=Open+Sans' rel='stylesheet' type='text/css' />
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
                <a class="navbar-brand" href="home.php">MAIN MENU </a>
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
                        <a class="active-menu" href="settings.php"><i class="fa fa-dashboard"></i>Room Status</a>
                    </li>
					<li>
                        <a  href="room.php"><i class="fa fa-plus-circle"></i>Add Room</a>
                    </li>
                    <li>
                        <a   href="roomdel.php"><i class="fa fa-pencil-square-o"></i> Delete Room</a>
                    </li>
					

                    
            </div>

        </nav>
        <!-- /. NAV SIDE  -->
       
        <div id="page-wrapper" >
            <div id="page-inner">
			 <div class="row">
                    <div class="col-md-12">
                        <h1 class="page-header">
                           Available <small> Rooms</small>
                        </h1>
                    </div>
                </div> 
                 
                                 
            <?php
						include ('db.php');
                        $all_room = array();
                        $booked_room = array();
                        $q1 = "select * from room";
                        $res1 = mysqli_query($con,$q1);
                        while($row = mysqli_fetch_array($res1)){
                            array_push($all_room,$row['type'].":".$row['bedding']);
                        }

                        $q2 = "select * from payment";
                        $res2 = mysqli_query($con,$q2);
                        while($row = mysqli_fetch_array($res2)){
                            array_push($booked_room,$row['troom'].":".$row['tbed']);
                        }

                        $available_room = array_diff($all_room,$booked_room);

                        
						$sql = "select * from room";
						$re = mysqli_query($con,$sql)
						// $r =mysqli_fetch_assoc($re);
						// print_r($r);

						// die();
				?>
                <div class="row">
				
				
				<?php
                foreach ($available_room as $rooms) {
                    $temp = explode(":", $rooms);
                    $qq=mysqli_query($con,"select room_no from room where type='$temp[0]' and bedding='$temp[1]'");
                    foreach($qq as $e){
                        $rr=$e;
                    }
                    if($temp[0] == "Deluxe Room") 
											{
                                          
                                                    echo"<div class='col-md-3 col-sm-12 col-xs-12'>
													<div class='panel panel-primary text-center no-boder bg-color-blue'>
														<div class='panel-body'>
															<i class='fa fa-users fa-5x'></i>
															<h3>".$temp[0]."</h3>
														</div>
														<div class='panel-footer back-footer-blue'>
															".$temp[1]." (".$rr['room_no'].")

														</div>
													</div>
												</div>";
                                        
                                                
												
											}
											else if ($temp[0] == "Luxury Room")
											{
                                         
												echo"<div class='col-md-3 col-sm-12 col-xs-12'>
													<div class='panel panel-primary text-center no-boder bg-color-green'>
														<div class='panel-body'>
															<i class='fa fa-users fa-5x'></i>
															<h3>".$temp[0]."</h3>
														</div>
														<div class='panel-footer back-footer-green'>
															".$temp[1]." (".$rr['room_no'].")

														</div>
													</div>
												</div>";
                                        
                                                
											
											}
											else if($temp[0] =="Room with view")
											{
                                            
												echo"<div class='col-md-3 col-sm-12 col-xs-12'>
													<div class='panel panel-primary text-center no-boder bg-color-brown'>
														<div class='panel-body'>
															<i class='fa fa-users fa-5x'></i>
															<h3>".$temp[0]."</h3>
														</div>
														<div class='panel-footer back-footer-brown'>
															".$temp[1]." (".$rr['room_no'].")

														</div>
													</div>
												</div>";
                              
                                                
											
											}
											else if($temp[0] =="Penthouse")
											{
                        
												echo"<div class='col-md-3 col-sm-12 col-xs-12'>
													<div class='panel panel-primary text-center no-boder bg-color-red'>
														<div class='panel-body'>
															<i class='fa fa-users fa-5x'></i>
															<h3>".$temp[0]."</h3>
														</div>
														<div class='panel-footer back-footer-red'>
															".$temp[1]." (".$rr['room_no'].")

														</div>
													</div>
												</div>";
                        
                                                
											}
                  }
       
                
                 
									?>
                    
                </div>
                <!-- /. ROW  -->
        
            <div id="page-inner">
			 <div class="row">
                    <div class="col-md-12">
                        <h1 class="page-header">
                           Booked <small> Rooms</small>
                        </h1>
                    </div>
                </div> 
                 
                                 

                <div class="row">
				
				
				<?php
foreach ($booked_room as $rooms) {
    $temp = explode(":", $rooms);
    if($temp[0] == "Deluxe Room") 
                            {
                          
                                    echo"<div class='col-md-3 col-sm-12 col-xs-12'>
                                    <div class='panel panel-primary text-center no-boder bg-color-blue'>
                                        <div class='panel-body'>
                                            <i class='fa fa-users fa-5x'></i>
                                            <h3>".$temp[0]."</h3>
                                        </div>
                                        <div class='panel-footer back-footer-blue'>
                                        ".$temp[1]."

                                        </div>
                                    </div>
                                </div>";
                        
                                
                                
                            }
                            else if ($temp[0] == "Luxury Room")
                            {
                         
                                echo"<div class='col-md-3 col-sm-12 col-xs-12'>
                                    <div class='panel panel-primary text-center no-boder bg-color-green'>
                                        <div class='panel-body'>
                                            <i class='fa fa-users fa-5x'></i>
                                            <h3>".$temp[0]."</h3>
                                        </div>
                                        <div class='panel-footer back-footer-green'>
                                        ".$temp[1]."

                                        </div>
                                    </div>
                                </div>";
                        
                                
                            
                            }
                            else if($temp[0] =="Room with view")
                            {
                            
                                echo"<div class='col-md-3 col-sm-12 col-xs-12'>
                                    <div class='panel panel-primary text-center no-boder bg-color-brown'>
                                        <div class='panel-body'>
                                            <i class='fa fa-users fa-5x'></i>
                                            <h3>".$temp[0]."</h3>
                                        </div>
                                        <div class='panel-footer back-footer-brown'>
                                        ".$temp[1]."

                                        </div>
                                    </div>
                                </div>";
              
                                
                            
                            }
                            else if($temp[0] =="Penthouse")
                            {
        
                                echo"<div class='col-md-3 col-sm-12 col-xs-12'>
                                    <div class='panel panel-primary text-center no-boder bg-color-red'>
                                        <div class='panel-body'>
                                            <i class='fa fa-users fa-5x'></i>
                                            <h3>".$temp[0]."</h3>
                                        </div>
                                        <div class='panel-footer back-footer-red'>
                                        ".$temp[1]." 

                                        </div>
                                    </div>
                                </div>";
        
                                
                            }
  }
										
									?>
                    
       
                                
                  
            
			 <!-- /. PAGE INNER  -->
            </div>
         <!-- /. PAGE WRAPPER  -->
        </div>
     <!-- /. WRAPPER  -->
    <!-- JS Scripts-->
    <!-- jQuery Js -->
    <script src="assets/js/jquery-1.10.2.js"></script>
      <!-- Bootstrap Js -->
    <script src="assets/js/bootstrap.min.js"></script>
    <!-- Metis Menu Js -->
    <script src="assets/js/jquery.metisMenu.js"></script>
      <!-- Custom Js -->
    <script src="assets/js/custom-scripts.js"></script>
    
   
</body>
</html>
