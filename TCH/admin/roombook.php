<?php  
session_start();  
if(!isset($_SESSION["user"]))
{
 header("location:index.php");
}
?> 

<?php
		if(!isset($_GET["rid"]))
		{
				
			 header("location:index.php");
		}
		else {
				$curdate=date("Y/m/d");
				include ('db.php');
				$id = $_GET['rid'];
				
				
				$sql ="Select * from roombook where id = '$id'";
				$re = mysqli_query($con,$sql);
				while($row=mysqli_fetch_array($re))
				{
					$title = $row['Title'];
					$fname = $row['FName'];
					$lname = $row['LName'];
					$email = $row['Email'];
					$Phone = $row['Phone'];
					$troom = $row['TRoom'];
					$tbed = $row['Bed'];
					$people = $row['People'];
					$payment = $row['Payment'];
					$min = $row['Movein'];
					$sta = $row['stat'];
					//$days = $row['nodays'];
					
				
				
				}
					
					
				
		
	}
		
		
		
			?> 

<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>TCH Tower	</title>
    <!-- Bootstrap Styles-->
    <link href="assets/css/bootstrap.css" rel="stylesheet" />
    <!-- FontAwesome Styles-->
    <link href="assets/css/font-awesome.css" rel="stylesheet" />
    <!-- Morris Chart Styles-->
    <link href="assets/js/morris/morris-0.4.3.min.css" rel="stylesheet" />
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
                <a class="navbar-brand" href="home.php"> DASHBOARD </a>
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
                        <a  href="home.php"><i class="fa fa-dashboard"></i> Status</a>
                    </li>
                    
					<li>
                        <a class="active-menu" href="roombook.php"><i class="fa fa-bar-chart-o"></i> Room Booking</a>
                    </li>
                    <li>
                        <a href="payment.php"><i class="fa fa-qrcode"></i> Payment</a>
                    </li>
					<li>
                        <a  href="profit.php"><i class="fa fa-qrcode"></i> Profit</a>
                    </li>
                    
                    <li>
                        <a href="logout.php"><i class="fa fa-sign-out fa-fw"></i> Logout</a>
                    </li>
                    


                    
					</ul>

            </div>

        </nav>
        <!-- /. NAV SIDE  -->
		
		
		

        <div id="page-wrapper">
            <div id="page-inner">


                <div class="row">
                    <div class="col-md-12">
                        <h1 class="page-header">
                            Room Booking<small>	<?php echo  $curdate; ?> </small>
                        </h1>
                    </div>
					
					
					<div class="col-md-8 col-sm-8">
                    <div class="panel panel-info">
                        <div class="panel-heading">
                           Booking Confirmation
                        </div>
                        <div class="panel-body">
							
							<div class="table-responsive">
                                <table class="table">
                                    <tr>
                                            <th>DESCRIPTION</th>
                                            <th>INFORMATION</th>
                                            
                                        </tr>
                                        <tr>
                                            <th>Name</th>
                                            <th><?php echo $title.$fname.$lname; ?> </th>
                                            
                                        </tr>
										<tr>
                                            <th>Email</th>
                                            <th><?php echo $email; ?> </th>
                                            
                                        </tr>
							
										
										<tr>
                                            <th>Phone No </th>
                                            <th><?php echo $Phone; ?></th>
                                            
                                        </tr>
										<tr>
                                            <th>Type Of the Room </th>
                                            <th><?php echo $troom; ?></th>
                                            
                                        </tr>
										<tr>
                                            <th>No Of the people </th>
                                            <th><?php echo $people; ?></th>
                                            
                                        </tr>
										<tr>
                                            <th>Type of bed </th>
                                            <th><?php echo $tbed; ?></th>
                                            
                                        </tr>
										
										<tr>
                                            <th>Payment Type </th>
                                            <th><?php echo $payment; ?></th>
                                            
                                        </tr>
										<tr>
                                            <th>Move-in Date</th>
                                            <th><?php echo $min; ?></th>
                                            
                                        </tr>
										<!--  -->
										<tr>
                                            <th>Status Level</th>
                                            <th><?php echo $sta; ?></th>
                                            
                                        </tr>
                                   
                                  
                                        
                                        
                                    
                                </table>
                            </div>
                        
					
							
                        </div>
                        <div class="panel-footer">
                            <form method="post">
										<div class="form-group">
														<label>Select the Confirmation</label>
														<select name="conf"class="form-control">
															<option value selected>	</option>
															<option value="Confirm">Confirm</option>
															
															
														</select>
										 </div>
							<input type="submit" name="co" value="Confirm" class="btn btn-success">
							
							</form>
                        </div>
                    </div>
					</div>
					
					<?php
						$rsql ="select * from room";
						$rre= mysqli_query($con,$rsql);
						$r =0 ;
						$sc =0;
						$gh = 0;
						$sr = 0;
						$dr = 0;
						while($rrow=mysqli_fetch_array($rre))
						{
							$r = $r + 1;
							$s = $rrow['type'];
							$p = $rrow['place'];
							if($s=="Deluxe Room" )
							{
								$sc = $sc+ 1;
							}
							
							if($s=="Luxury Room")
							{
								$gh = $gh + 1;
							}
							if($s=="Room with view" )
							{
								$sr = $sr + 1;
							}
							if($s=="Penthouse" )
							{
								$dr = $dr + 1;
							}
							
						
						}
						?>
						
						<?php
						$csql ="select * from payment";
						$cre= mysqli_query($con,$csql);
						$cr =0 ;
						$csc =0;
						$cgh = 0;
						$csr = 0;
						$cdr = 0;
						while($crow=mysqli_fetch_array($cre))
						{
							$cr = $cr + 1;
							$cs = $crow['troom'];
							
							if($cs=="Deluxe Room"  )
							{
								$csc = $csc + 1;
							}
							
							if($cs=="Luxury Room" )
							{
								$cgh = $cgh + 1;
							}
							if($cs=="Room with view" )
							{
								$csr = $csr + 1;
							}
							if($cs=="Penthouse" )
							{
								$cdr = $cdr + 1;
							}
							
						
						}
				
					?>
					<div class="col-md-4 col-sm-4">
                    <div class="panel panel-default">
                        <div class="panel-heading">
                           Available Room Details
                        </div>
                        <div class="panel-body">
						<table width="200px">
							
							<tr>
								<td><b> Deluxe Room</b></td>
								<td><button type="button" class="btn btn-primary btn-circle"><?php  
									$f1 =$sc - $csc;
									if($f1 <=0 )
									{	
										$f1 = "NO";
										
									}
									else{
											echo $f1;
									}
								
								
								?> </button></td> 
							</tr>
							<tr>
								<td><b>Luxury Room</b>	 </td>
								<td><button type="button" class="btn btn-primary btn-circle"><?php 
								$f2 =  $gh -$cgh;
								if($f2 <=0 )
									{	$f2 = "NO";
										echo $f2;
									}
									else{
											echo $f2;
									}

								?> </button></td> 
							</tr>
							<tr>
								<td><b>Room with view </b></td>
								<td><button type="button" class="btn btn-primary btn-circle"><?php
								$f3 =$sr - $csr;
								if($f3 <=0 )
									{	$f3 = "NO";
										echo $f3;
									}
									else{
											echo $f3;
									}

								?> </button></td> 
							</tr>
							<tr>
								<td><b>Penthhouse</b>	 </td>
								<td><button type="button" class="btn btn-primary btn-circle"><?php 
								
								$f4 =$dr - $cdr; 
								if($f4 <=0 )
									{	$f4 = "NO";
										echo $f4;
									}
									else{
											echo $f4;
									}
								?> </button></td> 
							</tr>
							<tr>
								<td><b>Total Rooms	</b> </td>
								<td> <button type="button" class="btn btn-danger btn-circle"><?php 
								
								$f5 =$r-$cr; 
								if($f5 <=0 )
									{	$f5 = "NO";
										echo $f5;
									}
									else{
											echo $f5;
									}
								 ?> </button></td> 
							</tr>
						</table>
						
						
						
                        
						
						</div>
                        <div class="panel-footer">
                            
                        </div>
                    </div>
					</div>
                </div>
                <!-- /. ROW  -->
				
                </div>
                <!-- /. ROW  -->
				
				
				
				
         </div>
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
    <!-- Morris Chart Js -->
    <script src="assets/js/morris/raphael-2.1.0.min.js"></script>
    <script src="assets/js/morris/morris.js"></script>
    <!-- Custom Js -->
    <script src="assets/js/custom-scripts.js"></script>


</body>

</html>

<?php
						if(isset($_POST['co']))
						{	
							$st = $_POST['conf'];
							
						    
							$ub = "UPDATE roombook SET stat ='$st' WHERE id = '$id'";
							
							if($st=="Confirm")
							{       

                                	if($f1=="NO" && $troom=="Deluxe Room" )
								{
									echo "<script type='text/javascript'> alert('Sorry! Deluxe Room not available!')</script>";
								}
								else if($f2 =="NO" && $troom=="Luxury Room")
									{
										echo "<script type='text/javascript'> alert('Sorry! Luxury Room not available!')</script>";
										
									}
									else if ($f3 == "NO" && $troom=="Room with view")
									{
										echo "<script type='text/javascript'> alert('Sorry! Room with view not available!')</script>";
									}
										else if($f4=="NO" && $troom=="Penthouse")
										{
										echo "<script type='text/javascript'> alert('Sorry! penthouse not available!')</script>";
										}
										

       
									 else 
									{
										 $rs= mysqli_query($con,$ub);
                                        
                                         echo "<script type='text/javascript'> alert('Room booking is confirm')</script>";
                                                      if($troom=="Deluxe Room")
														{
															$type_of_room = 120000;
														
														}
														else if($troom=="Luxury Room")
														{
															$type_of_room = 150000;
														}
														else if($troom=="Room with view")
														{
															$type_of_room = 180000;
														}
														else if($troom=="Penthouse")
														{
															$type_of_room = 250000;
														}
														
														
											
														if($tbed=="Single")
														{
															$type_of_tbed = $type_of_room * 10/100;
														}
														else if($tbed=="Double")
														{
															$type_of_tbed = $type_of_room * 20/100;
														}
														else if($tbed=="Triple")
														{
															$type_of_tbed = $type_of_room * 30/100;
														}
														
														else if($tbed=="None")
														{
															$type_of_tbed = $type_of_room * 0/100;
														}

														$room = $type_of_room;
														$bed = $type_of_tbed;
																						
														$fintot = $room + $bed ;
														$psql = "INSERT INTO `payment`(`id`, `title`, `fname`, `lname`, `troom`, `tbed`, `people`, `min`, `payment`, `room`, `bed`,`fintot`,`noofdays`) VALUES ('$id','$title','$fname','$lname','$troom','$tbed','$people','$min','$payment','$room','$bed','$fintot','$days')";
														
														if(mysqli_query($con,$psql))
														{	$notfree="NotFree";
															$rpsql = "UPDATE `room` SET `place`='$notfree',`cusid`='$id' where bedding ='$tbed' and type='$troom' ";
															if(mysqli_query($con,$rpsql))
															{
															echo "<script type='text/javascript'> alert('Booking Confirm')</script>";
															echo "<script type='text/javascript'> window.location='roombook.php'</script>";
															}
														   
														   
														}
														
														
							             }
							     }
									
									// else{
									// 	echo "<script type='text/javascript'> alert('Sorry! Deluxe Room not available!')</script>";
									// }
						
						// 				else if( mysqli_query($con,$urb))
						// 					{	
						// 						//echo "<script type='text/javascript'> alert('Guest Room booking is confirm')</script>";
						// 						//echo "<script type='text/javascript'> window.location='home.php'</script>";
						// 						 $type_of_room = 0;       
						// 								if($troom=="Deluxe Room")
						// 								{
						// 									$type_of_room = 120000;
														
						// 								}
						// 								else if($troom=="Luxury Room")
						// 								{
						// 									$type_of_room = 150000;
						// 								}
						// 								else if($troom=="Room with view")
						// 								{
						// 									$type_of_room = 180000;
						// 								}
						// 								else if($troom=="Penthouse")
						// 								{
						// 									$type_of_room = 250000;
						// 								}
														
														
														
														
						// 								if($tbed=="Single")
						// 								{
						// 									$type_of_tbed = $type_of_room * 1/100;
						// 								}
						// 								else if($tbed=="Double")
						// 								{
						// 									$type_of_tbed = $type_of_room * 2/100;
						// 								}
						// 								else if($tbed=="Triple")
						// 								{
						// 									$type_of_tbed = $type_of_room * 3/100;
						// 								}
						// 								// else if($tbed=="Quad")
						// 								// {
						// 								// 	$type_of_tbed = $type_of_room * 4/100;
						// 								// }
						// 								else if($tbed=="None")
						// 								{
						// 									$type_of_tbed = $type_of_room * 0/100;
						// 								}
														
														
						// 								// if($fac=="Fac only")
						// 								// {
						// 								// 	$type_of_fac=$type_of_tbed * 0;
						// 								// }
						// 								// else if($fac=="Breakfast")
						// 								// {
						// 								// 	$type_of_fac=$type_of_tbed * 2;
						// 								// }else if($fac=="Half Board")
						// 								// {
						// 								// 	$type_of_fac=$type_of_tbed * 3;
														
						// 								// }else if($fac=="Full Board")
						// 								// {
						// 								// 	$type_of_fac=$type_of_tbed * 4;
						// 								// }
														
														
						// 								$room = $type_of_room * $days * $people;
						// 								// $fac = $type_of_people * $days;
						// 								$bed = $type_of_tbed *$days;
														
						// 								$fintot = $room + $bed ;
															
						// 									//echo "<script type='text/javascript'> alert('$count_date')</script>";
														// $psql = "INSERT INTO `payment`(`id`, `title`, `fname`, `lname`, `troom`, `tbed`, `people`, `min`, `payment`, `room`, `bed`,`fintot`,`noofdays`) VALUES ('$id','$title','$fname','$lname','$troom','$tbed','$people','$min','$payment','$room','$bed','$fintot','$days')";
														
						 								// if(mysqli_query($con,$psql))
						 								// {	$notfree="NotFree";
						 								// 	$rpsql = "UPDATE `room` SET `place`='$notfree',`cusid`='$id' where bedding ='$tbed' and type='$troom' ";
						 								// 	if(mysqli_query($con,$rpsql))
						 								// 	{
						 								// 	echo "<script type='text/javascript'> alert('Booking Confirm')</script>";
						 								// 	echo "<script type='text/javascript'> window.location='roombook.php'</script>";
						 								// 	}
															
															
						 								// }
												
						// 					}
									
                                        
								
					
						// }
					
						}			
								
							
						?>