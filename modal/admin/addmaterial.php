<?php  
    include ('config.php');
    $item_name = $item_desc = $category = $quantity = $size = $unit_of_measure ="";
    $item_nameErr = $item_descErr = $categoryErr = $quantityErr = $sizeErr = $unit_of_measureErr ="";
                        if(isset($_POST['submit'])){

                            if(empty ($_POST["item_name"])){
                            $machine_nameErr = "Required Field";   
                            }
                        else{
                            $machine_name = $_POST["item_name"];
                        }
                        if(empty ($_POST["item_desc"])){
                            $machine_divisionErr = "Required Field";    
                            }
                        else{
                            $machine_division = $_POST["item_desc"];
                        }
                        if(empty ($_POST["category"])){
                            $maximum_sizeErr = "Required Field";    
                            }
                        else{
                            $maximum_size = $_POST["category"];
                        }
                        if(empty ($_POST["quantity"])){
                            $minimum_sizeErr = "Required Field";    
                            }
                        else{
                            $minimum_size = $_POST["quantity"];
                        }
                        if(empty ($_POST["size"])){
                            $maximum_printing_areaErr = "Required Field";    
                            }
                        else{
                            $maximum_printing_area = $_POST["size"];
                        }
                        if(empty ($_POST["unit_of_measure"])){
                            $max_speedErr = "Required Field";    
                            }
                        else{
                            $max_speed = $_POST["unit_of_measure"];
                        }
                    }

                    if($item_name && $item_desc && $category && $quantity && $size && $unit_of_measure){
                       $check_machine_name= mysqli_query($connections, "SELECT * FROM materials WHERE item_name='$item_name'");
                                        $check_item_name_row = mysqli_num_rows($item_name);
                                        if($check_item_name_row > 0){
                                          echo "<script language='JavaScript'>alert('not registered!') </script>";
                                          echo "<script> window.location.href='../adminpanel/index_admin.php';</script>";
                                        $item_nameErr = "Machine Name Already Registered!";
                                        }
                            else{
                        
                       mysqli_query($connections, "INSERT INTO materials(item_name,item_desc,category,quantity,size,unit_of_measure) VALUES ('$item_name', '$item_desc', '$category', '$quantity', '$size', '$unit_of_measure')");

                       echo "<script language='JavaScript'>alert('New Record has benn successfully added!') </script>";
                       echo "<script> window.location.href='../adminpanel/index_admin.php';</script>";
                   
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
    <div id="AddMaterial" class="modal fade" role="dialog">
     <div class="modal-dialog modal-dialog-centered modal-lg">       
     <div class="modal-content"> 
     <div class="modal-header">
      <i class="#"></i><span><h2>&nbsp Add Material</h2></span></a>
       <button type="button" class="close" data-dismiss="modal" aria-label="Close">
         <span aria-hidden="true">&times;</span>
       </button>  
     </div>
     <div class="modal-body"><br>
       <form action="" method="POST">
      <table width="720">
        <tr>
          <td colspan="2"><input type="text" placeholder="Item Name:" value = "<?php  //echo $first_name; ?>" name="item_name" class="form-control"><span class="error"><?php echo $item_nameErr; ?> </span></td>
        </tr>
        <tr>
          <td colspan="2"><input type="text" placeholder="Item type:" value = "<?php  //echo $first_name; ?>" name="item_desc" class="form-control"><span class="error"><?php echo $item_descErr; ?> </span></td>
        </tr>
        <tr>
          <td colspan="2"><input type="text" placeholder="Category:" value = "<?php  //echo $first_name; ?>" name="category" class="form-control"><span class="error"><?php echo $categoryErr; ?> </span></td>
        </tr>
        <tr>
          <td><input type="text" placeholder="Quantity:" value = "<?php  //echo $first_name; ?>" name="quantity" class="form-control"><span class="error"><?php echo $quantityErr; ?> </span></td>
          <td><input type="text" placeholder="Size:" value = "<?php  //echo $first_name; ?>" name="size" class="form-control"><span class="error"><?php echo $sizeErr; ?> </span></td>
        </tr>
        <tr>
          <td colspan="2"><input type="text" placeholder="Unit of Measure:" value = "<?php  //echo $first_name; ?>" name="unit_of_measure" class="form-control"><span class="error"><?php echo $unit_of_measureErr; ?> </span></td>
        </tr>
      </table>
       <div class="modal-footer">
         <button name="submit" type="submit" class="btn btn-primary btn-lg">Add</button>
         <button type="button" class="btn btn-danger btn-lg" data-dismiss="modal">Close</button>
       </div>       
         </form>
