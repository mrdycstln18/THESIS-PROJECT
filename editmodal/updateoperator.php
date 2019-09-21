<?php
                            include("connections.php");

                            $account_id_no = $_POST["account_id_no"];
                            $new_first_name =$_POST["new_first_name"];
                            $new_middle_name =$_POST["new_middle_name"];
                            $new_last_name =$_POST["new_last_name"];
                            $new_uname =$_POST["new_uname"];
                            $new_pass =$_POST["new_pass"];
                            $new_designation =$_POST["new_designation"];
                            $new_division = $_POST["new_division"];

                           if($new_designation == "productionhead"){
                            $utype = "2";
                        }
                        if($new_designation == "productionassistant"){
                            $utype = "3";
                        }
                        if($new_designation == "productionplanning"){
                            $utype = "4";
                        }
                        if($new_designation == "generalservices"){
                            $utype = "5";
                        }
                        if($new_designation == "operators"){
                            $utype = "6";
                        }
                        if($new_designation == "sales"){
                            $utype = "7";
                        }

                            mysqli_query($connections,"UPDATE tbl_useraccounts SET first_name ='$new_first_name',middle_name = '$new_middle_name', last_name = '$new_last_name',new_uname= '$new_uname',new_pass = '$new_pass', new_designation = '$new_designation', new_division = '$new_division' WHERE account_id_no = '$account_id_no'");
                                        
                                    echo "<script language='JavaScript'>alert('New Record has benn successfully updated!') </script>";
                                    echo "<script> window.location.href='adduser.php';</script>";
                        ?>