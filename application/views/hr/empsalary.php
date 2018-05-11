<br>
				<div class="row">
                    <div class="col-md-12">
                        <div class="panel">
                            <div class="panel-heading">Employee Salary</div>
							<hr class="m-t-0 m-b-0">
                            <div class="table-responsive">
                                <table class="table table-hover manage-u-table  color-bordered-table info-bordered-table">
                                    <thead>
                                        <tr>
                                            <th style="width: 70px;" class="text-center">#</th>
                                           <th>Full Name</th>				 
											<th>e-Mail</th>				 
											<th>Mobile</th>
											<th>Designation</th>
                                            <th>Salary</th>
                                        </tr>
                                    </thead>
                                    <tbody>
										<?php   
											foreach($emp as $row){  
											?>  
												<tr>  
													<td class="text-center"><?php echo $row->empid; ?></td>  
													<td><?php echo $row->name; ?></td>  
													<td><?php echo $row->email; ?></td>  
													<td><?php echo $row->mobile; ?></td>
													<td><?php echo $row->designation; ?></td>
										   
											 <td>
                                                
                                               
     <a href="processsalary/<?php echo $row->empid; ?>"><button type="button" class="btn btn-info btn-outline btn-circle btn-sm m-r-5"><i class="ti-pencil-alt"></i></button></a>
												
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