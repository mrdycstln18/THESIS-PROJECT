 <?php
                        $account_id_no=$_REQUEST['account_id_no'];
                        $account_id_no;
                        include('config.php');
                        
                        
                        //include("config.php");

                        $get_record = mysqli_query($connections, "SELECT * FROM tbl_useraccounts WHERE account_id_no = '$account_id_no'");
                       
                        while($row_edit = mysqli_fetch_assoc($get_record)){
                          // $account_id_no = $row_edit["account_id_no"];
                           $db_uname = $row_edit["uname"];
                           $db_fname = $row_edit["first_name"];
                           $db_mname = $row_edit["middle_name"];
                           $db_lname = $row_edit["last_name"];
                           $db_pass = $row_edit["pass"];
                           $db_designation = $row_edit["designation"];
                           $db_division = $row_edit["division"];
                           $db_utype = $row_edit["user_type"];
                        }

                         if(isset($_GET['edit']))
                         {
                             $id = $_GET['edit'];
                             $res = mysql_query("SELECT * FROM tbl_useraccounts");
                            $row = mysql_fetch_array($res);

                         }
                        // if (isset($_POST['newName'])) 
                        // {
                        //     $newName = $_POST['newName'];
                        //     $id = $_POST['id'];
                        //     $sql = "UPDATE apple SET name = '$newName' WHERE id = '$id'";
                        //     $res = mysql_query($sql) or die ("Could not update". mysql_error())
                        //     // echo "<meta http-equiv='refresh' content='0;url=index.php'>";
                        // }


                   ?>
 <style>
                        .error{
                            color:red;
                            font-size: 10px;
                        }
                        </style>
  
<?php
  
?>

    <!-- OperatorModal -->
    <div id="ViewOperator" class="modal fade" role="dialog" >
     <div class="modal-dialog modal-dialog-centered modal-lg">       
     <div class="modal-content"> 
     <div class="modal-header">
     <i class="#"></i><span><h2>&nbsp Edit Operator</h2></span></a>
       <button type="button" class="close" data-dismiss="modal" aria-label="Close">
         <span aria-hidden="true">&times;</span>
       </button>  
     </div>
     <div class="modal-body"><br>
       <form action="" method="POST">
      <table width="770" cellpadding="5">
        <tr>
            <td>
            <input type="hidden" name="account_id_no" value="<?php echo $account_id_no; ?>">
            </td>
        </tr>
      <tr><td colspan="3"><input type="text" value = "<?php  echo $db_fname; ?>"placeholder="First Name:" name="new_first_name" class="form-control"></td></tr>
      <tr><td colspan="3"><input type="text" value = "<?php  echo $db_mname; ?>"placeholder="Middle Name:" name="new_middle_name" class="form-control"></td></tr>
      <tr><td colspan="3"><input type="text" value = "<?php  echo $db_lname; ?>"placeholder="Last Name:" name="new_last_name" class="form-control"> </td></tr>
        
        <tr>
        <td><input type="text" placeholder="Username:" value = "<?php echo $db_uname; ?>"name="new_uname" class="form-control"></td>
        <td><input type="password" placeholder="Password:" value = "<?php echo $db_pass; ?>" name="new_pass" class="form-control"></td>
        </tr>
        <tr>
          <td><a>&nbsp&nbsp&nbsp&nbsp Designation: </a>
          <select name="new_designation" class="form-control">
            <option value="">-</option>
            <option value="productionhead" <?php if($db_designation == "Production Head") {echo "Selected";  }?>>Production Head</option>
            <option value="productionassistant" <?php if($db_designation == "Production Assistant") {echo "Selected";  }?>>Production Assistant</option>
            <option value="productionplanning" <?php if($db_designation == "Production Planning") {echo "Selected";  }?>>Production Planning</option>
            <option value="generalservices" <?php if($db_designation == "General Services") {echo "Selected";  }?>>General Services</option>
            <option value="operators" <?php if($db_designation == "Operators") {echo "Selected";  }?>>Operators</option>
            <option value="sales" <?php if($db_designation == "Sales") {echo "Selected";  }?>>Sales</option>
          </select>
          </td>

          <td><a>&nbsp&nbsp&nbsp&nbsp Division: </a>
          <select name="new_division" class="form-control">
            <option value="">-</option>
            <option value="production" <?php if($db_division == "Production") {echo "Selected";  }?>>Production</option>
            <option value="services" <?php if($db_division == "General Services") {echo "Selected";  }?>>General Services</option>
            <option value="operation" <?php if($db_division == "Operation") {echo "Selected";  }?>>Operation</option>
            <option value="sales" <?php if($db_division == "Sales") {echo "Selected";  }?>>Sales</option>
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
         <button name="submit" type="submit" class="btn btn-primary btn-lg">Save</button>
         <button type="button" class="btn btn-danger btn-lg" data-dismiss="modal">Close</button>
       </div>       
       </form>  
