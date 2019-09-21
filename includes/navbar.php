  <!-- Sidebar -->
    <ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar" style="background: #4a89ff;">

      <!-- Sidebar - Brand -->
      <a class="sidebar-brand d-flex align-items-center justify-content-center" href="#">
        <!-- <div class="sidebar-brand-icon rotate-n-15"> -->
        <!-- <div class="sidebar-brand"> -->
         <!-- <i class="#"></i> -->
         <center><img src="logo.png" width="200" height="60"></center> 
       <!-- </div> -->
       <!-- <div class="sidebar-brand-text mx-3"></div> -->
      </a>

      <!-- Divider -->
      <hr class="sidebar-divider my-0">

      <!-- Nav Item - Dashboard 
      <li class="nav-item active">
        <a class="nav-link" href="index.php">
          <i class="fas fa-fw fa-tachometer-alt"></i>
          <span>Dashboard</span></a>
      </li> -->

      <!-- Divider -->
      <hr class="sidebar-divider">

      <!-- Heading -->
      <div class="sidebar-heading">
        Production Head
      </div>

      <!-- Nav Item - Pages Collapse Menu -->
      <li class="nav-item">
         <a type="button"  data-toggle="modal" data-target="#AddOperator" style="background: #99ccff; width: 100%; color: black">
          <i class="#"></i>
          <span><center>Add Operator</center></span></a>
              <?php 
                include ('modal/admin/addoperator.php');
              ?>
      </li>

      <li class="nav-item">
        <a type="button"  data-toggle="modal" data-target="#AddMachine" style="background: #4a89ff; width: 100%; color: black">
          <i class="#"></i>
          <span><center>Add Machine</center></span></a>
              <?php 
                include ('modal/admin/addmachine.php');
              ?>
      </li>
      <br>
      <hr class="sidebar-divider">
      <div class="sidebar-heading">
        Production Assistant
      </div>
       
        <li class="nav-item">
        <a type="button"  data-toggle="modal" data-target="#AddJobTicket" style="background: #4a89ff; width: 100%; color: black ">
          <i class="#"></i>
          <span><center>Add Job Ticket</center></span></a>
              <?php 
                include ('modal/admin/addjobticket.php');
              ?>
      </li>

      <li class="nav-item">
        <a type="button"  data-toggle="modal" data-target="#AddWorkOrder" style="background: #4a89ff; width: 100%; color: black ">
          <i class="#"></i>
          <span><center>Add Work Order</center></span></a>
              <?php 
                include ('modal/admin/addworkorder.php');
              ?>
      </li>

       <li class="nav-item">
        <a type="button"  data-toggle="modal" data-target="#AddTransmittal" style="background: #4a89ff; width: 100%; color: black ">
          <i class="#"></i>
          <span><center>Add Transmittal</center></span></a>
              <?php 
                include ('modal/admin/addtransmittal.php');
              ?>
      </li>

      <br>
      <hr class="sidebar-divider">
      <div class="sidebar-heading">
        Production Planner
      </div>
       
        <li class="nav-item">
        <a type="button"  data-toggle="modal" data-target="#AddSchedule" style="background: #4a89ff; width: 100%; color: #006699 ">
          <i class="#"></i>
          <span><center>Add Schedule</center></span></a>
              <?php 
               //include ('modal/admin/addoschedule.php');
              ?>
      </li>

   
      <br>
      <hr class="sidebar-divider">
      <div class="sidebar-heading">
        Division Supervisor
      </div>
       
        <li class="nav-item">
        <a type="button"  data-toggle="modal" data-target="#AddReport" style="background: #4a89ff; width: 100%; color: #006699 ">
          <i class="#"></i>
          <span><center>Add Report</center></span></a>
              <?php 
               include ('modal/admin/addreport.php');
              ?>
      </li>

     <br>
      <hr class="sidebar-divider">
      <div class="sidebar-heading">
        Production Operators
      </div>
       
        <li class="nav-item">
        <a type="button"   data-toggle="modal" data-target="#AddOperator" style="background: #4a89ff; width: 100%; color: #006699 ">
          <i class="#"></i>
          <span><center>Materials Request</center></span></a>
              <?php 
              include ('modal/admin/addoperator.php');
              ?>
      </li>

       <br>
      <hr class="sidebar-divider">
      <div class="sidebar-heading">
        General Services
      </div>
       
        <li class="nav-item">
        <a type="button"   data-toggle="modal" data-target="#r" style="background: #4a89ff; width: 100%; color: #006699 ">
          <i class="#"></i>
          <span><center>Purchase Request</center></span></a>
              <?php 
               //include ('modal/admin/addoperator.php');
              ?>

         <li class="nav-item">
        <a type="button"   data-toggle="modal" data-target="#AddMaterial" style="background: #4a89ff; width: 100%; color: #006699 ">
          <i class="#"></i>
          <span><center>Material</center></span></a>
              <?php 
               include ('modal/admin/addmaterial.php');
              ?>
              
      </li>

       <br>
      <hr class="sidebar-divider">
      <div class="sidebar-heading">
        Sales
      </div>
       
        <li class="nav-item">
        <a type="button"   data-toggle="modal" data-target="#AddJobOrder" style="background: #4a89ff; width: 100%; color: #006699 ">
          <i class="#"></i>
          <span><center>Add Job Order</center></span></a>
              <?php 
             include ('modal/admin/addjoborder.php');
              ?>
      </li>


        <br>
      <hr class="sidebar-divider">
      <div class="sidebar-heading">
       Calendar
      </div>
       
        <li class="nav-item">
        <a type="button"   data-toggle="modal" data-target="#" style="background: #4a89ff; width: 100%; color: #006699 ">
          <i class="#"></i>
          <span><center>Calendar Schedule</center></span></a>
              <?php 
               //include ('modal/admin/addoperator.php');
              ?>
      </li>
    </ul>
    <!-- End of Sidebar -->

 <!-- Scroll to Top Button-->
  <a class="scroll-to-top rounded" href="#page-top">
    <i class="fas fa-angle-up"></i>
  </a>


      <!-- Logout Modal-->
  <div class="modal fade" id="logoutModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">Ready to Leave?</h5>
          <button class="close" type="button" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">×</span>
          </button>
        </div>
        <div class="modal-body">Select "Logout" below if you are ready to end your current session.</div>
        <div class="modal-footer">
          <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
          <a class="btn btn-primary" href="login.html">Logout</a>
        </div>
      </div>
    </div>
  </div>
