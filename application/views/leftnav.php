 <!-- Left Sidebar - style you can find in sidebar.scss  -->
        <!-- ============================================================== -->
        <div class="navbar-default sidebar" role="navigation">
            <div class="sidebar-nav slimscrollsidebar">
                <div class="sidebar-head">
                    <h3><span class="fa-fw open-close"><i class="ti-close ti-menu"></i></span> <span class="hide-menu">Navigation</span></h3> </div>
                <ul class="nav" id="side-menu">
                  
                    <li> <a href="<?php echo BASEURL;?>dashboard/index/" class="waves-effect "><i class="mdi mdi-av-timer fa-fw" data-icon="v"></i> <span class="hide-menu"> Dashboard </span></a>
                       
                    </li>
                    <li> <a href="javascript:void(0);" class="waves-effect"><i class="fa fa-users fa-fw" data-icon="v"></i> <span class="hide-menu"> Employees <span class="fa arrow"></span> </span></a>
                        <ul class="nav nav-second-level">
                            <li> 
							<a href="<?php echo BASEURL;?>hr/newemployee"> <i class="fa fa-plus"></i> <span class="hide-menu">New Employee</span></a> </li>
							
                           <li> 
							<a href="<?php echo BASEURL;?>hr/emplist"> <i class="fa fa-table"></i> <span class="hide-menu">Active Employee</span></a> </li>
							
                             <li> 
							<a href="<?php echo BASEURL;?>hr/inactiveemplist"> <i class="fa fa-table"></i> <span class="hide-menu">Inactive Employee</span></a> </li>
                          
                        </ul>
                    </li>
                    <li> <a href="#" class="waves-effect"><i class="mdi mdi-format-color-fill fa-fw"></i> <span class="hide-menu">Manage Leaves<span class="fa arrow"></span></span></a>
                        <ul class="nav nav-second-level">
                           <li> 
							<a href="<?php echo BASEURL;?>hr/empleave"> <i class="fa fa-table"></i> <span class="hide-menu"> Employee Leaves</span></a> 
							</li>
							
                             <li> 
							<a href="<?php echo BASEURL;?>hr/leavewaiting"> <i class="fa fa-table"></i> <span class="hide-menu">Waiting For Approval</span></a> 
							</li>
                        </ul>
                    </li>
                    <li> <a href="#" class="waves-effect"><i class="mdi mdi-content-copy fa-fw"></i> <span class="hide-menu">Manage Salary<span class="fa arrow"></span></span></a>
                        <ul class="nav nav-second-level">
                            <li> 
							<a href="<?php echo BASEURL;?>hr/leavecount"> <i class="fa fa-table"></i> <span class="hide-menu">Leave Count</span></a> </li> 
							
							<li> 
							<a href="<?php echo BASEURL;?>hr/empsalary"> <i class="fa fa-table"></i> <span class="hide-menu">Salary Process</span></a> </li>
                        </ul>
                    </li>

                      <li> <a href="#" class="waves-effect"><i class="mdi mdi-format-color-fill fa-fw"></i> <span class="hide-menu">Manage Expenses<span class="fa arrow"></span></span></a>
                        <ul class="nav nav-second-level">
                           <li> 
                            <a href="<?php echo BASEURL;?>hr/roomrent"> <i class="fa fa-table"></i> <span class="hide-menu"> Room Rent</span></a> 
                            </li>
                            
                             <li> 
                            <a href="<?php echo BASEURL;?>hr/otherexpense"> <i class="fa fa-table"></i> <span class="hide-menu">Other Expenses</span></a> 
                            </li>
                        </ul>
                    </li>


                    <li class="devider"></li>
                    <li><a href="<?php echo BASEURL;?>dashboard/logout" class="waves-effect"><i class="mdi mdi-logout fa-fw"></i> <span class="hide-menu">Log out</span></a></li>
					
					 
                 
                </ul>
            </div>
        </div>
        <!-- ============================================================== -->
        <!-- End Left Sidebar -->
        <!-- ============================================================== -->
        <!-- ============================================================== -->
		 <!-- Page Content -->
        <!-- ============================================================== -->
        <div id="page-wrapper">
            <div class="container-fluid">
			
			 