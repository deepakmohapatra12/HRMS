<br>
				 <div class="row">
                    <div class="col-lg-12">
                        <div class="white-box table-responsive">
                            <h3 class="box-title">Employee & Leaves</h3>
                           
                            <table class="table table-striped table-bordered" id="editable-datatable">
                                    <thead>
                                        <tr>
                                            <th style="width: 70px;" class="text-center">#</th>
                                           <th>Full Name</th>				 
											<th>e-Mail</th>				 
											<th>Mobile</th>
											<th>Designation</th>
                                            <th>Leaves</th>
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
												<a href="<?php echo BASEURL;?>hr/leave_details/<?php echo $row->empid; ?>"><button type="button" class="btn btn-info btn-outline btn-circle btn-sm m-r-5"><i class="fa fa-eye"></i></button></a>
                                               
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
              