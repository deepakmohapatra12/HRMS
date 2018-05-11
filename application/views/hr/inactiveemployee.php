<br>
				<div class="row">
                    <div class="col-md-12">
                        <div class="panel">
                            <div class="panel-heading">In Active Employee List</div>
							<hr class="m-t-0 m-b-0">
                            <div class="table-responsive">
                                <table class="table table-hover manage-u-table color-bordered-table warning-bordered-table">
                                    <thead>
                                        <tr>
                                            <th style="width: 70px;" class="text-center">#</th>
                                           <th>Full Name</th>				 
											<th>e-Mail</th>				 
											<th>Mobile</th>
                                            <th>Role</th>
                                            <th>Manage</th>
                                        </tr>
                                    </thead>
                                    <tbody>
										<?php   
											foreach($emp as $row){  
											?>  
												<tr>  
													<td><?php echo $row->empid; ?></td>  
													<td><?php echo $row->name; ?></td>  
													<td><?php echo $row->email; ?></td>  
													<td><?php echo $row->mobile; ?></td>
													<td>
                                                <select class="form-control">
                                                    <option>Modulator</option>
                                                    <option>Admin</option>
                                                    <option>User</option>
                                                    <option>Subscriber</option>
                                                </select>
                                            </td>
											 <td>
                                                <button type="button" class="btn btn-info btn-outline btn-circle btn-sm m-r-5"><i class="ti-key"></i></button>
                                               
                                                <button type="button" class="btn btn-info btn-outline btn-circle btn-sm m-r-5"><i class="ti-pencil-alt"></i></button>
                                               
											   <button type="button" class="btn btn-info btn-outline btn-circle btn-sm m-r-5"><i class="fa fa-eye"></i></button>
                                            </td>
												</tr>  
											<?php  
											}  
										?>  
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>