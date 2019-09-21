<button type="button" class="btn btn-info btn-md" data-toggle="modal" data-target="#AddJobOrder">Add Job Order</button>
    
    <!-- OperatorModal -->
    <div id="AddJobOrder" class="modal fade" role="dialog">
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
          <td colspan="2"><input type="text" placeholder="Client Name:" name="clientname" class="form-control"></td>
        </tr>
        <tr>
          <td colspan="2"><input type="text" placeholder="Item Description and Title:" name="title" class="form-control"></td>
        </tr>
        <tr>
          <td><input type="text" placeholder="Paper to be used:" name="paperuse" class="form-control"></td>
          <td><input type="text" placeholder="Quantity:" name="quantity" class="form-control"></td>
        </tr>
        <tr>
          <td><input type="text" placeholder="Size of Final Output:" name="size" class="form-control"></td>
          <td><input type="text" placeholder="No. of Pages:" name="pages" class="form-control"></td>
        </tr>
        <tr>
          <td colspan="2"><input type="text" placeholder="Costing Based on Machine run by:" name="costing" class="form-control"></td>
        </tr>
        <tr>
          <td><input type="text" placeholder="Finishing required:" name="finishing" class="form-control"></td>
          <td><input type="text" placeholder="Packaging required:" name="packaging" class="form-control"></td>
        </tr>
        <tr>
          <td><input type="text" placeholder="Client Requested Delivery Date: " name="deliverydate" class="form-control"></td>
          <td><input type="text" placeholder="Estimate Transmittal Data to Warehouse: " name="transmittal" class="form-control"></td>
        </tr>
        <tr>
          <td colspan="2"><textarea rows="5" placeholder="Remarks: " name="remarks" class="form-control"></textarea> </td>
        </tr>
      </table>
       <div class="modal-footer">
         <button name="addjoborder" type="submit" class="btn btn-primary btn-lg"><a href="../index_admin.php">Add</a></button>
         <button type="button" class="btn btn-danger btn-lg" data-dismiss="modal"><a href="../index_admin.php">Close</a></button>
       </div>       
         </form>
