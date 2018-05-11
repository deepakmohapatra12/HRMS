				<br>
				<div class="row">
                    <div class="col-md-12">
                        <div class="panel panel-info">
                            <div class="panel-heading"> New Employee Details</div>
                            <div class="panel-wrapper collapse in" aria-expanded="true">
                                <div class="panel-body">
                                    <form action="saveemployee" method="POST" class="form-horizontal">
                                        <div class="form-body">
                                            <h3 class="box-title">Person Info
											<?php echo $this->session->flashdata("msg")?>
											</h3>
											
                                            <hr class="m-t-0 m-b-40">
                                            <div class="row">
                                                <div class="col-md-6">
                                                    <div class="form-group">
                                                        <label class="control-label col-md-3">Full Name</label>
                                                        <div class="col-md-9">
                                                            <input type="text"  class="form-control" name="name" id="name" placeholder="Enter name">  </div>
                                                    </div>
                                                </div>
                                                <!--/span-->
                                                <div class="col-md-6">
                                                    <div class="form-group">
                                                        <label class="control-label col-md-3">e-Mail Id</label>
                                                        <div class="col-md-9">
                                                            <input type="email"  class="form-control" name="email" id="email" placeholder="Enter emailid" required>  </div>
                                                    </div>
                                                </div>
                                                <!--/span-->
                                            </div>
                                            <!--/row-->
                                            <div class="row">
                                                <div class="col-md-6">
                                                    <div class="form-group">
                                                        <label class="control-label col-md-3">Password</label>
                                                        <div class="col-md-9">
                                                           <input type="text"  class="form-control" name="password" id="password" placeholder="Enter password" required> 
														</div>
                                                    </div>
                                                </div>
                                                <!--/span-->
                                                <div class="col-md-6">
                                                    <div class="form-group">
                                                        <label class="control-label col-md-3">Mobile No</label>
                                                        <div class="col-md-9">
                                                           <input type="number"  class="form-control" name="mobile" id="mobile" placeholder="Enter Mobile"> </div>
                                                    </div>
                                                </div>
                                                <!--/span-->
                                            </div>
                                            <!--/row-->
                                            <div class="row">
                                                <div class="col-md-6">
                                                    <div class="form-group">
                                                        <label class="control-label col-md-3">Gender</label>
                                                        <div class="col-md-9">
                                                            <select name="gender" required="required" class="form-control">
					<option value="">Select Gender</option>
					<option value="Male">Male</option>
					<option value="Female">Female</option>
				</select>
                                                        </div>
                                                    </div>
                                                </div>
                                                <!--/span-->
                                                <div class="col-md-6">
                                                    <div class="form-group">
                                                        <label class="control-label col-md-3">Date Of Joining</label>
                                                        <div class="col-md-9">
                                                           <input type="text"  class="form-control" name="joindate" class="datepicker" placeholder="Joining Date">
                                                        </div>
                                                    </div>
                                                </div>
                                                <!--/span-->
                                            </div>
											
											 <div class="row">
                                                <div class="col-md-6">
                                                    <div class="form-group">
                                                        <label class="control-label col-md-3">Role</label>
                                                        <div class="col-md-9">
               <select name="role" required="required" class="form-control">
					<option value="">Select Role</option>
					<option value="1">Super Admin</option>
					<option value="2">HR</option>
					<option value="3">Employee</option>
				</select>
                                                        </div>
                                                    </div>
                                                </div>
												
												 <div class="col-md-6">
                                                    <div class="form-group">
                                                        <label class="control-label col-md-3">Designation</label>
                                                        <div class="col-md-9">
               <select name="designation" required="required" class="form-control">
					<option value="">Select Designation</option>
					<option value="HR">HR</option>
					<option value="HR Admin">HR Admin</option>
					<option value="Marketing">Marketing</option>
					<option value="CEO">CEO</option>
					<option value="House Keeping">House Keeping</option>
					<option value="Placement Officer">Placement Officer</option>
					<option value="SEO Analist">SEO Analist</option>
					<option value="Business Development Manager">BD</option>
				</select>
                                                        </div>
                                                    </div>
                                                </div>
                                                <!--/span-->
                                               
                                                <!--/span-->
                                            </div>
                                           
                                            <hr class="m-t-0 m-b-40">
                                            <!--/row-->
                                           
                                           
                                            
                                        </div>
                                        <div class="form-actions">
                                            <div class="row">
                                                <div class="col-md-12">
                                                    <div class="row">
                                                        <div class="col-md-12 text-center">
                                                            <button type="submit" class="btn btn-success">Submit</button>
                                                            <button type="button" class="btn btn-default">Cancel</button>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-md-6"> </div>
                                            </div>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>


     