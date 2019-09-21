<?php
                        $machine_id=$_REQUEST['machine_id'];
                        $machine_id;
                        include('config.php');
                        
                        
                        //include("config.php");

                        $get_record = mysqli_query($connections, "SELECT * FROM machines WHERE machine_id = '$machine_id'");
                       
                        while($row_edit = mysqli_fetch_assoc($get_record)){
                          // $account_id_no = $row_edit["account_id_no"];
                        $machine_id = $row_edit['machine_id'];
                        $db_macname = $row_edit['machine_name'];
                        $db_macspeed = $row_edit['macspeed'];
                        $db_division = $row_edit['division'];
                        $db_maccategory = $row_edit['maccategory'];
                        $db_macmaxsize = $row_edit['macmaxsize'];
                        $db_macminsize = $row_edit['macminsize'];
                        $db_mstatus = $row_edit['machine_status'];
                        }

                         if(isset($_GET['edit']))
                         {
                             $id = $_GET['edit'];
                             $res = mysql_query("SELECT * FROM machines");
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
    
    <!-- OperatorModal -->
    <div id="ViewMachine" class="modal fade" role="dialog">
     <div class="modal-dialog modal-dialog-centered modal-lg">       
     <div class="modal-content"> 
     <div class="modal-header">
       <button type="button" class="close" data-dismiss="modal" aria-label="Close">
         <span aria-hidden="true">&times;</span>
       </button>  
     </div>
     <div class="modal-body"><br>
       <form action="" method="POST">
      <table width="720">

        <tr>
            <td>
            <input type="hidden" name="machine_id" value="<?php echo $machine_id; ?>">
            </td>
        </tr>

        <tr>
          <td colspan="2"><input type="text" value = "<?php  echo $db_macname; ?>" placeholder="Machine Name:" name="macname" class="form-control"></td>
        </tr>
        <tr>
          <td colspan="2"><input type="text" value = "<?php  echo $db_macspeed; ?>"  placeholder="Machine Speed:" name="macspeed" class="form-control"></td>
        </tr>
        <tr>
          <td colspan="2"><input type="text" value = "<?php  echo $db_division; ?>" placeholder="Machine Division:" name="macdivision" class="form-control"></td>
        </tr>
        <tr>
          <td colspan="2"><input type="text" value = "<?php  echo $db_maccategory; ?>"  placeholder="Machine Category:" name="maccategory" class="form-control"></td>
        </tr>
        <tr>
          <td colspan="2"><input type="text" value = "<?php  echo $db_macmaxsize; ?>"  placeholder="Machine Max Size:" name="macmaxsize" class="form-control"></td>
        </tr>
        <tr>
          <td colspan="2"><input type="text" value = "<?php  echo $db_macminsize; ?>"  placeholder="Machine Min Size:" name="macminsize" class="form-control"></td>
        </tr>
        <tr>
          <td colspan="2"><input type="text" placeholder="Machine Status:"  value = "<?php  echo $db_mstatus; ?>"  name="machine_status" class="form-control"></td>
        </tr>
      </table>
       <div class="modal-footer">
         <button name="addjoborder" type="submit" class="btn btn-primary btn-lg"><a href="../index_admin.php">Add</a></button>
         <button type="button" class="btn btn-danger btn-lg" data-dismiss="modal"><a href="../index_admin.php">Close</a></button>
       </div>       
         </form>
