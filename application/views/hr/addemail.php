<?php
include("header.php");
 include("leftnav.php");
?>

      <div class="content-wrapper">
        <section class="content-header">
          <h1>e-Mail Backup</h1>
          <ol class="breadcrumb">
            <li><a href="<?php echo BASEURL;?>welcome.php"><i class="fa fa-dashboard"></i> Home</a></li>
            <li><a href="#">e-Mail</a></li>
            <li class="active">New e-Mail</li>
          </ol>
        </section>
        <!-- Main content -->
        <section class="content">
          <div class="row">
            <div class="col-sm-12">
              <div class="box box-warning">
                <div class="box-header">
                  <h3 class="box-title">e-Mail Backup
				   &nbsp;&nbsp;&nbsp; 
				   <a href="#" class="btn btn-success btn-sm">  
				   Total &nbsp; <i class="fa fa-envelope"> </i> &nbsp;  
                   ( <?php  echo mysql_num_rows(mysql_query("select * from email")); ?> )
				   </a>
				  </h3>
                </div><!-- /.box-header -->
                <!-- form start -->
		<div class="box-body">
	     <form id="frmnotes" role="form" action="saveemail.php" method="POST">
	<div class="row">
      <div class="col-md-4">
			<div class="form-group">
				<input type="email"  class="form-control" name="email" id="email" placeholder="Enter emailid" required>
		    </div>
	  </div>
	  
	  <div class="col-md-4">
			<div class="form-group">
				<input type="number"  class="form-control" name="mobile" id="mobile" placeholder="Enter Mobile">
		    </div>
	  </div>
	  
	  <div class="col-md-4">
			<div class="form-group">
				<input type="text"  class="form-control" name="name" id="name" placeholder="Enter name">
		    </div>
	  </div>
	  
	   </div>
	   <div class="row">
			<div class="col-md-12 text-center">
				 <button  id="submit" type="submit" class="btn btn-primary">Submit</button>&nbsp;&nbsp;
				  <button type="reset" class="btn btn-danger">Reset</button>
			</div>
	   </div>
	   </form>	
              </div><!-- /.box -->
            </div><!-- /.col -->
          </div><!-- /.row -->
        </section><!-- /.content -->
      </div><!-- /.content-wrapper -->
     
    </div><!-- ./wrapper -->
	<?php
include("footer.php");
?>