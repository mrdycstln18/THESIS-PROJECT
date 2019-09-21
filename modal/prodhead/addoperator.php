  <?php  
    include ('config.php');
    $uname = $pass = $first_name = $middle_name = $last_name = $designation = $division = $utype ="";
    $unameErr = $passErr = $fnameErr = $mnameErr = $lnameErr = $designationErr = $divisionErr = $utypeErr ="";;
                        if(isset($_POST['submit'])){

                            if(empty ($_POST["uname"])){
                            $unameErr = "Required Field";   
                            }
                        else{
                            $uname = $_POST["uname"];
                        }
                        if(empty ($_POST["pass"])){
                            $passErr = "Required Field";    
                            }
                        else{
                            $pass = $_POST["pass"];
                        }
                        if(empty ($_POST["first_name"])){
                            $fnameErr = "Required Field";    
                            }
                        else{
                            $first_name = $_POST["first_name"];
                        }
                        if(empty ($_POST["middle_name"])){
                            $mnameErr = "Required Field";    
                            }
                        else{
                            $middle_name = $_POST["middle_name"];
                        }
                        if(empty ($_POST["last_name"])){
                            $lnameErr = "Required Field";    
                            }
                        else{
                            $last_name = $_POST["last_name"];
                        }
                        if(empty ($_POST["designation"])){
                            $designationErr = "Required Field";    
                            }
                        else{
                            $designation = $_POST["designation"];
                        }
                        if(empty ($_POST["division"])){
                            $divisionErr = "Required Field";    
                            }
                        else{
                            $division = $_POST["division"];
                        }
                        if(empty ($_POST["user_type"])){
                            $utypeErr = "Required Field"; 
                            }
                        else{
                            $utype = $_POST["user_type"];

                        }if($designation == "productionhead"){
                            $utype = "2";
                        }
                        if($designation == "productionassistant"){
                            $utype = "3";
                        }
                        if($designation == "productionplanning"){
                            $utype = "4";
                        }
                        if($designation == "generalservices"){
                            $utype = "5";
                        }
                        if($designation == "operators"){
                            $utype = "6";
                        }
                        if($designation == "sales"){
                            $utype = "7";
                        }
                      
                       
                    }

                    if($uname && $pass && $first_name && $middle_name && $last_name && $designation && $division && $utype){
                       $check_user_name= mysqli_query($connections, "SELECT * FROM tbl_useraccounts WHERE uname='$uname'");
                                        $check_user_name_row = mysqli_num_rows($check_user_name);
                                        if($check_user_name_row > 0){
                                          echo "<script language='JavaScript'>alert('not registered!') </script>";
                                          echo "<script> window.location.href='../adminpanel/index_prodhead.php';</script>";
                                        $unameErr = "User name Already Registered!";
                                        }
                            else{
                        
                       mysqli_query($connections, "INSERT INTO tbl_useraccounts(uname,pass,first_name,middle_name,last_name,designation,division,user_type) VALUES ('$uname','$pass','$first_name','$middle_name','$last_name','$designation','$division','$utype')");

                       echo "<script language='JavaScript'>alert('New Record has benn successfully added!') </script>";
                       echo "<script> window.location.href='../adminpanel/index_prodhead.php';</script>";
                   
                   }
                 }
                   ?>
 <style>
                        .error{
                            color:red;
                            font-size: 10px;
                        }
                        </style>
  

    <!-- OperatorModal -->
    <div id="AddOperator" class="modal fade" role="dialog" >
     <div class="modal-dialog modal-dialog-centered modal-lg">       
     <div class="modal-content"> 
     <div class="modal-header">
     <i class="#"></i><span><h2>&nbsp Add Operator</h2></span></a>
       <button type="button" class="close" data-dismiss="modal" aria-label="Close">
         <span aria-hidden="true">&times;</span>
       </button>  
     </div>
     <div class="modal-body"><br>
       <form action="" method="POST">
      <table width="770" cellpadding="5">
        
      <tr><td colspan="3"><input type="text" value = "<?php  //echo $first_name; ?>"placeholder="First Name:" name="first_name" class="form-control"><span class="error"><?php echo $fnameErr; ?> </span></td></tr>
      <tr><td colspan="3"><input type="text" value = "<?php  //echo $middle_name; ?>"placeholder="Middle Name:" name="middle_name" class="form-control"><span class="error"><?php echo $mnameErr; ?> </span></td></tr>
      <tr><td colspan="3"><input type="text" value = "<?php  //echo $last_name; ?>"placeholder="Last Name:" name="last_name" class="form-control"><span class="error"><?php echo $lnameErr; ?> </span></td></tr>
        
        <tr>
        <td><input type="text" placeholder="Username:" value = "<?php //echo $uname; ?>"name="uname" class="form-control"><span class="error"><?php echo $unameErr; ?> </span></td>
        <td><input type="password" placeholder="Password:" value = "<?php //echo $pass; ?>" name="pass" class="form-control"><span class="error"><?php echo $passErr; ?> </span></td>
        </tr>
        <tr>
          <td><a>&nbsp&nbsp&nbsp&nbsp Designation: </a>
          <select name="designation" class="form-control">
            <option value="">-</option>
            <option value="productionhead" <?php if($designation == "Production Head") {echo "Selected";  }?>>Production Head</option>
            <option value="productionassistant" <?php if($designation == "Production Assistant") {echo "Selected";  }?>>Production Assistant</option>
            <option value="productionplanning" <?php if($designation == "Production Planning") {echo "Selected";  }?>>Production Planning</option>
            <option value="generalservices" <?php if($designation == "General Services") {echo "Selected";  }?>>General Services</option>
            <option value="operators" <?php if($designation == "Operators") {echo "Selected";  }?>>Operators</option>
            <option value="sales" <?php if($designation == "Sales") {echo "Selected";  }?>>Sales</option>
          </select>
          </td>

          <td><a>&nbsp&nbsp&nbsp&nbsp Division: </a>
          <select name="division" class="form-control">
            <option value="">-</option>
            <option value="production" <?php if($division == "Production") {echo "Selected";  }?>>Production</option>
            <option value="services" <?php if($division == "General Services") {echo "Selected";  }?>>General Services</option>
            <option value="operation" <?php if($division == "Operation") {echo "Selected";  }?>>Operation</option>
            <option value="sales" <?php if($division == "Sales") {echo "Selected";  }?>>Sales</option>
          </select>
          </td>
        </tr>
       <tr>
        <!-- <td><input type="text" placeholder="User Type" name="user_type" value="<?php echo $utype; ?>" class="form-control"></td> -->
      <!--   <td><a>&nbsp&nbsp&nbsp&nbsp User Type: </a>
          <select name="utype" class="form-control">
            <option value="">-</option>
            <option value="2">Production Head</option>
            <option value="3">Production Assistant</option>
            <option value="4">Production Planning</option>
            <option value="5">General Services</option>
            <option value="6">Operators</option>
            <option value="7">Sales</option>
          </select>
          </td>-->
        </tr> 
      </table><br>
       <div class="modal-footer">
         <button name="submit" type="submit" class="btn btn-primary btn-lg">Add</button>
         <button type="button" class="btn btn-danger btn-lg" data-dismiss="modal">Close</button>
       </div>       
       </form>  
