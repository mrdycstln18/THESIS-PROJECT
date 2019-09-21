<button type="button" class="btn btn-info btn-md" data-toggle="modal" data-target="#AddJobOrder">Add Machine</button>
    
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
          <td colspan="2"><input type="text" placeholder="Job Title:" name="jobtitle" class="form-control"></td>
        </tr>
        <tr>
          <td colspan="2"><input type="text" placeholder="Quantity:" name="jobquantity" class="form-control"></td>
        </tr>
        <tr>
          <td colspan="2"><input type="text" placeholder="Type of Job:" name="jobtype" class="form-control"></td>
        </tr>
        <tr>
          <td colspan="2"><input type="text" placeholder="No. of Signatures:" name="jobsignature" class="form-control"></td>
        </tr>
        <tr>
          <td colspan="2"><input type="text" placeholder="Type of Activity:" name="jobactivity" class="form-control"></td>
        </tr>
        <tr>
          <td colspan="2"><input type="text" placeholder="Time Started:" name="jobstarted" class="form-control"></td>
        </tr>
        <tr>
          <td colspan="2"><input type="text" placeholder="Time Finished:" name="jobfinished" class="form-control"></td>
        </tr>
        <tr>
          <td colspan="2"><input type="text" placeholder="Spoilage:" name="jobspoil" class="form-control"></td>
        </tr>
        <tr>
          <td colspan="2"><input type="text" placeholder="Good Copies:" name="jobcopies" class="form-control"></td>
        </tr>
        <tr>
          <td colspan="2"><input type="text" placeholder="Remarks:" name="jobremarks" class="form-control"></td>
        </tr> 
      </table>
       <div class="modal-footer">
         <button name="addjoborder" type="submit" class="btn btn-primary btn-lg"><a href="../index_admin.php">Add</a></button>
         <button type="button" class="btn btn-danger btn-lg" data-dismiss="modal"><a href="../index_admin.php">Close</a></button>
       </div>       
         </form>
