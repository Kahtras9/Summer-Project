<?php
include 'db.php';
// if(isset($_POST['submit_one']))
                    // {
                        $id=$_POST['id'];
                        $fname =explode(" ",$_POST['name']);
                       
                        $troom =$_POST['room'];
                        $tbed =$_POST['bed'];

                        // $people =$_POST['people'];
                        $min =$_POST['date'];
                        // $room =$_POST['room'];
                        $rent =$_POST['rent'];
                        $fintot =$_POST['total'];
                        $bed =$_POST['bedrent'];
                        $payment =$_POST['payment'];

                        $q = "UPDATE `payment` SET `fname`='".$fname[0]."',`lname`='".$fname[1]."',`troom`='$troom',`tbed`='$tbed',`min`='$min',`room`='$rent',`fintot`='$fintot',`bed`='$bed',`payment`='$payment' WHERE id='$id'";
                        $result = mysqli_query($con,$q);
                        if($result){
                            header("location:payment.php");
                        }else{
                            echo "<script> alert('Update Failed'); location.replace('payment.php');</script>";
                        }

                    // }
                    ?>