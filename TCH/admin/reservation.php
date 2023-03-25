<?php
include('db.php');
if(!isset($_GET['room_no'])){
    header('location:../index.php');
}
else{
    $room_no=$_GET['room_no'];
}
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
            .well {
                text-align: center;
            }

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
        <nav class="navbar-default navbar-side" role="navigation">
            <div class="sidebar-collapse">
                <ul class="nav" id="main-menu">

                    <li>
                        <a  href="../index.php"><i class="fa fa-home"></i> Homepage</a>
                    </li>
                    
					</ul>

            </div>

        </nav>
       
        <div id="page-wrapper" >
            <div id="page-inner">
			 <div class="row">
                    <div class="col-md-12">
                        <h1 class="page-header">
                            RESERVATION <small></small>
                        </h1>
                    </div>
                </div> 
                 
                                 
            <div class="row">
                
                <div class="col-md-5 col-sm-5">
                    <div class="panel panel-primary">
                        <div class="panel-heading">
                            PERSONAL INFORMATION
                        </div>
                        <div class="panel-body">
						<form name="form" method="post">
                            <div class="form-group">
                                            <label>Title*</label>
                                            <select name="title" class="form-control" required >
												<option value selected ></option>
                                                <option value="Dr.">Dr.</option>
                                                <option value="Miss.">Miss.</option>
                                                <option value="Mr.">Mr.</option>
                                                <option value="Mrs.">Mrs.</option>
                                            </select>
                              </div>
							  <div class="form-group">
                                            <label>First Name</label>
                                            <input name="fname" class="form-control" required>
                                            
                               </div>
							   <div class="form-group">
                                            <label>Last Name</label>
                                            <input name="lname" class="form-control" required>
                                            
                               </div>
							   <div class="form-group">
                                            <label>Email</label>
                                            <input name="email" type="email" class="form-control" required>
                                            
                               </div>
							   
								<div class="form-group">
                                            <label>Phone Number</label>
                                            <input name="phone" type ="text" class="form-control" required>
                                            
                               </div>
							   
                        </div>
                        
                    </div>
                </div>
                <?php $qu=mysqli_query($con,"select * from room where room_no='$room_no'");
                foreach($qu as $room){
                    $room_detail=$room;
                }
               
                ?>
                  
            <div class="row">
                <div class="col-md-6 col-sm-6">
                    <div class="panel panel-primary">
                        <div class="panel-heading">
                            RESERVATION INFORMATION
                        </div>
                        <div class="panel-body">
								<div class="form-group">
                                            <label>Type Of Room *</label>
                                            <input type="text" name="troom" class="form-control" readonly value="<?php echo $room_detail['type']?>">
                              </div>
							  <div class="form-group">
                                            <label>Bedding Type</label>
                                            <input type="text" name="bed" class="form-control" readonly value="<?php echo $room_detail['bedding']?>">
                              
                              </div>
							  <div class="form-group">
                                            <label>No.of People *</label>
                                            <select name="people" class="form-control" required>
												<option value selected ></option>
                                                <option value="1">1</option>
                                               <option value="2">2</option>
												<option value="3">3</option>
												<option value="4">4</option>
												<option value="5">5</option>
												<option value="6">6</option>
												<option value="7">7</option>
                                            </select>
                              </div>
							 
							 
							  <div class="form-group">
                                            <label>Payment Type</label>
                                            <select name="payment" class="form-control"required>
												<option value selected ></option>
												<option value="Monthly">Monthly</option>
                                                <option value="Yearly">Yearly</option>
												
												
                                                
                                             
                                            </select>
                              </div>
							  <div class="form-group">
                                            <label>Move-In Date</label>
                                            <input name="min" type ="date" class="form-control">
                                            
                              
                       </div>
                        
                    </div>
                </div>
				
				
                <div class="col-md-12 col-sm-12">
                    <div class="well">
						<input type="submit" name="submit" class="btn btn-primary">
						<?php
							if(isset($_POST['submit']))
							// {
							// $code1=$_POST['code1'];
							// $code=$_POST['code']; 
							// if($code1!="$code")
							// {
							// $msg="Invalide code"; 
							// }
							// else
							{
							
									// $con=mysqli_connect("localhost","root","","appartment");
									$check="SELECT * FROM roombook WHERE email = '$_POST[email]'";
									$rs = mysqli_query($con,$check);
                                     if(mysqli_num_rows($rs)) {
                                                 echo "<script type='text/javascript'> alert('User Already Exists')</script>";
                                                 } 
      
									// $data = mysqli_fetch_array($rs, MYSQLI_NUM);
									// if($data[0] > 1) {
									// 	echo "<script type='text/javascript'> alert('User Already Exists')</script>";
										
									// }

									// else
									// {
										// $new ="Not Confirm";
										// $newUser="INSERT INTO `roombook`(`Title`, `FName`, `LName`, `Email`, `Phone`, `TRoom`, `Bed`, `People`, `Payment`, `Movein`,`stat`) VALUES ('$_POST[title]','$_POST[fname]','$_POST[lname]','$_POST[email]','$_POST[phone]','$_POST[troom]','$_POST[bed]','$_POST[people]','$_POST[payment]','$_POST[min]','$new'))";
										// if (mysqli_query($con,$newUser))
										// {
										// 	echo "<script type='text/javascript'> alert('Your Booking application has been sent')</script>";
											
										// }
                                          $new ="Not Confirm";

                                        $v1= $_POST['title'];
                                        $v2= $_POST['fname'];
                                        $v3= $_POST['lname'];
                                        $v4= $_POST['email'];
                                        $v5= $_POST['phone'];
                                        $v6= $_POST['troom'];
                                        $v7= $_POST['bed'];
                                       
                                        
                                        $v8= $_POST['people'];
                                        $v9= $_POST['payment'];
                                        $v10= $_POST['min'];


                                         $q1= "INSERT INTO `roombook`(`Title`, `FName`, `LName`, `Email`, `Phone`, `TRoom`, `Bed`, `People`, `Payment`, `Movein`,`stat`) VALUES ( '$v1','$v2','$v3','$v4','$v5','$v6','$v7','$v8','$v9','$v10','$new')";

                                          if ($result= mysqli_query($con,$q1))
                                          {
                                             echo "<script type='text/javascript'> alert('Your Booking application has been sent')</script>";
                                          }
                                           // $row= mysqli_fetch_assoc($result);
                                           //  print_r($row);
                                           //   die();
                                      

										else
										{
											echo "<script type='text/javascript'> alert('Error adding user in database')</script>";
											
										}
									}

							// $msg="Your code is correct";
							
							
							?>
						</form>
							
                    </div>
                </div>
            </div>
           
                
                </div>
                    
            
				
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
      <!-- Custom Js -->
    <script src="assets/js/custom-scripts.js"></script>
    
   
</body>
</html>
