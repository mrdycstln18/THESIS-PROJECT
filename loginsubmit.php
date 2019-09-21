<? ob_start(); ?>
<?php
if(!empty($_POST['uname']) && !empty($_POST['pass'])) {
	$uname = $_POST['uname'];
	$pass = $_POST['pass'];
	
	$sql = "SELECT * FROM tbl_useraccounts WHERE uname = '".$uname."' AND pass = '".$pass."'";
	$result = mysqli_query($connections,$sql);
	$row = mysqli_fetch_assoc($result);
	
	  if($row != 0)
	  {
	  $dbusername = $row['uname'];
      $dbpassword = $row['pass'];
      $dbusertype = $row['user_type'];  /* Check LEGENDS(ACCOUNTTYPE).txt */
                if($uname == $dbusername && $pass == $dbpassword && "1" == $dbusertype)
                    {
                        session_start();
                        $_SESSION['sess_user'] = $uname;
                            /* Redirect browser */
                            echo "<script type='text/javascript'>location.href = 'index_admin.php';</script>";
                    }

                elseif ($uname == $dbusername && $pass == $dbpassword && "2" == $dbusertype) 
                    {
                        session_start();
                        $_SESSION['sess_user'] = $uname;
                            /* Redirect browser */
                            echo "<script type='text/javascript'>location.href = 'index_prodhead.php';</script>";
                    }
                
                elseif ($uname == $dbusername && $pass == $dbpassword && "3" == $dbusertype) 
                    {
                        session_start();
                        $_SESSION['sess_user'] = $uname;
                           /* Redirect browser */
                          echo "<script type='text/javascript'>location.href = 'index_prodass.php';</script>";
                    }

                elseif ($uname == $dbusername && $pass == $dbpassword && "4" == $dbusertype) 
                    {
                        session_start();
                        $_SESSION['sess_user'] = $uname;
                           /* Redirect browser */
                          echo "<script type='text/javascript'>location.href = 'index_prodplan.php';</script>";
                    }

                elseif ($uname == $dbusername && $pass == $dbpassword && "5" == $dbusertype) 
                    {
                        session_start();
                        $_SESSION['sess_user'] = $uname;
                           /* Redirect browser */
                          echo "<script type='text/javascript'>location.href = 'index_genserv.php';</script>";
                    }

                elseif ($uname == $dbusername && $pass == $dbpassword && "6" == $dbusertype) 
                    {
                        session_start();
                        $_SESSION['sess_user'] = $uname;
                           /* Redirect browser */
                          echo "<script type='text/javascript'>location.href = 'index_operators.php';</script>";
                    }

                elseif ($uname == $dbusername && $pass == $dbpassword && "7" == $dbusertype) 
                    {
                        session_start();
                        $_SESSION['sess_user'] = $uname;
                           /* Redirect browser */
                          echo "<script type='text/javascript'>location.href = 'index_sales.php';</script>";
                    }
                
                } 
                else 
                {
                echo "<script type='text/javascript'>alert('Invalid username or password!')</script>";
                }
	  } 
	  else 
	  {
		 echo "<script type='text/javascript'>alert('All fields are required!')</script>";
		
		  }

            ?>
            <? ob_flush(); ?>