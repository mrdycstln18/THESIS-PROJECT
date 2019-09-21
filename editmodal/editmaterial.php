
    
    <!-- OperatorModal -->
    <div id="AddMachine" class="modal fade" role="dialog">
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
          <td colspan="2"><input type="text" placeholder="Item Name:" name="itemname" class="form-control"></td>
        </tr>
        <tr>
          <td colspan="2"><input type="text" placeholder="Item type:" name="itemtype" class="form-control"></td>
        </tr>
        <tr>
          <td colspan="2"><input type="text" placeholder="Unit:" name="itemunit" class="form-control"></td>
        </tr>
        <tr>
          <td colspan="2"><input type="text" placeholder="Quantity:" name="itemquantity" class="form-control"></td>
        </tr>
        <tr>
          <td colspan="2"><input type="text" placeholder="Category:" name="itemcat" class="form-control"></td>
        </tr>
      </table>
       <div class="modal-footer">
         <button name="addjoborder" type="submit" class="btn btn-primary btn-lg"><a href="../index_admin.php">Add</a></button>
         <button type="button" class="btn btn-danger btn-lg" data-dismiss="modal"><a href="../index_admin.php">Close</a></button>
       </div>       
         </form>
