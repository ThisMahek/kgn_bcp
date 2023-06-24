
    <div class="container-fluid page-body-wrapper">     
      <!-- partial:partials/_sidebar.html -->
      <nav class="sidebar sidebar-offcanvas" id="sidebar">
        <?php 
        $pn= basename($_SERVER['PHP_SELF']);
        ?>
        <ul class="nav">
          <li class="nav-item <?php if($pn=="dashboard"){ echo "active";}else{}?>">
            <a class="nav-link" href="master/dashboard">
              <i class="ti-home menu-icon"></i>
              <span class="menu-title">Dashboard</span>
            </a>
          </li> 


        </ul>
      </nav>