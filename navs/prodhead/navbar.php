  <!-- Sidebar -->
    <ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">

      <!-- Sidebar - Brand -->
      <a class="sidebar-brand d-flex align-items-center justify-content-center" href="index_prodhead.php">
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
        <a class="nav-link" href="index_prodhead.php">
          <i class="#"></i>
          <span>Home</span>
        </a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="index_prodheadoptr.php">
          <i class="#"></i>
          <span>Operators</span>
        </a>
      </li>

      <li class="nav-item">
        <a class="nav-link" href="index_prodheadmac.php">
          <i class="#"></i>
          <span>Machines</span>
        </a>
      </li>

      <li class="nav-item">
        <a class="nav-link collapsed" href="index_prodheadrep.php" data-toggle="collapse" data-target="#collapsePH" aria-expanded="true" aria-controls="collapsePH">
          <i class="#"></i>
          <span>Reports</span>
        </a>
        <div id="collapsePH" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionSidebar">
          <div class="bg-white py-2 collapse-inner rounded">
            <h6 class="collapse-header">Division:</h6>
            <a class="collapse-item" href="reports/reports_prepress.php">Prepress</a>
            <a class="collapse-item" href="reports/reports_press.php">Press</a>
            <a class="collapse-item" href="reports/reports_postpress.php">Postpress</a>
          </div>
        </div>
      </li>

      <!-- Nav Item - Utilities Collapse Menu -->
      <li class="nav-item">
        <a class="nav-link" href="index_prodheadcal.php">
          <i class="#"></i>
          <span>Calendar</span>
        </a>
      </li>

      <!-- Divider -->
      <hr class="sidebar-divider">

      <!-- Heading -->
      <div class="sidebar-heading">
        Addons
      </div>

      <!-- Nav Item - Pages Collapse Menu -->
      <li class="nav-item">
        <a class="nav-link" href="../modal/addoperator.php">
          <i class="#"></i>
          <span>Add Operator</span>
        </a>
      </li>

      <!-- Nav Item - Charts -->
      <li class="nav-item">
        <a class="nav-link" href="../modal/addmachine.php">
          <i class="#"></i>
          <span>Add Machine</span></a>
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
