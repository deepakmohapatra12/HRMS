				<br>
				<div class="row">
                    <div class="col-md-12">
                        <div class="panel panel-info">
                            <div class="panel-heading"> Apply New Leave</div>
                            <div class="panel-wrapper collapse in" aria-expanded="true">
                                <div class="panel-body">
                                    <form action="saveleave" method="POST" class="form-horizontal">
                                        <div class="form-body">
                                            
											<?php echo $this->session->flashdata("msg")?>
											
                                            <div class="row">
                                                <div class="col-md-6">
                                                    <div class="form-group">
                                                        <label class="control-label col-md-3">From Date</label>
                                                        <div class="col-md-9">
                    <input type="text" name="fromdate" id="fromdate"  class="form-control datepicker" required>  </div>
                                                    </div>
                                                </div>
                                                <!--/span-->
                                                <div class="col-md-6">
                                                    <div class="form-group">
                                                        <label class="control-label col-md-3">To Date</label>
                                                        <div class="col-md-9">
                               <input type="text" name="todate" id="todate" class="datepicker form-control" required>  </div>
                                                    </div>
                                                </div>
                                                <!--/span-->
                                            </div>
                                            <!--/row-->
                                            <div class="row">
                                                <div class="col-md-6">
                                                    <div class="form-group">
                                                        <label class="control-label col-md-3">How Many Days</label>
                                                        <div class="col-md-9">
                                                           <select name="todaldays" required="required" class="form-control">
													<option value="">Total Days</option>
													<?php
														for($i=1; $i<=22.5; $i++)
														{
															$i = $i-0.5;
															echo "<option value='$i'>". $i. "</option>";
														}
													?>
												</select>
														</div>
                                                    </div>
                                                </div>
                                                <!--/span-->
                                                <div class="col-md-6">
                                                    <div class="form-group">
                                                        <label class="control-label col-md-3">Leave Type</label>
                                                        <div class="col-md-9">
                                                           <select name="leavetype" required="required" class="form-control">
																<option value="">Select Leave Type</option>
																<option value="EL">EARNED LEAVE</option>
																<option value="SL">SEEK LEAVE</option>
																<option value="COMP OFF">COMP OFF</option>
														</select> 
														</div>
                                                    </div>
                                                </div>
                                                <!--/span-->
                                            </div>
                                            <!--/row-->
                                            <div class="row form-group">
                                              
                                                       
                                                        <div class="col-sm-112">
                                                            <textarea name="reason" class="form-control" required="required" placeholder="Please Enter Reaseon"></textarea>
                                                        </div>
                                                   
                                            </div>
											  
                                        </div>
                                        <div class="form-actions">
                                            <div class="row">
                                                <div class="col-md-12">
                                                    <div class="row">
                                                        <div class="col-md-12 text-center">
                                                            <button type="submit" class="btn btn-warning">Apply Now</button>
                                                            <button type="button" class="btn btn-danger">Cancel</button>
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
				
				<!--leave block start-->
				
				<div class="row">
                    <div class="col-md-12">
                        <div class="panel panel-info">
                            <div class="panel-heading"> My Leaves</div>
                            <div class="panel-wrapper collapse in" aria-expanded="true">
                                <div class="panel-body">
				<?php
	 $this->db = $this->load->database('default', TRUE);
	$empid = $this->session->userdata("userid");
	$sql="select * from empleave where empid='$empid' order by leaveid desc";
	$res = $this->db->query($sql);
	$allleave = $res->result();
	
	?>
	
	<table class="table table-hover table-responsive">
	<thead>
			<tr>
				<th>Sl No</th>
				<th>From Date</th>
				<th>To Date</th>
				<th>Total Days</th>
				<th>Leave Type</th>
				<th>Reason</th>
				<th>Status</th>
			</tr>	
			</thead>
			<tbody>
			<?php
			$i=1;
			foreach($allleave as $row)
			{
				echo "<tr>";
				echo "<td>".$i."</td>";
				echo "<td>".$row->fromdate."</td>";
				echo "<td>".$row->todate."</td>";
				echo "<td>".$row->total."</td>";
				echo "<td>".$row->leavetype."</td>";
				echo "<td>".$row->reason."</td>";
				?>
				<td><?php echo $row->status; ?></td>
				<?php
				echo "</tr>";
				$i++;
			}
			$sql1="select leavetype, sum(total) as totalleave 
			from empleave  where empid='$empid' 
			group by leavetype";
			$res1 = $this->db->query($sql1);
			$leavedata = $res1->result();
			?>
			</tbody>
			<tr>
				<th>Total Leave Taken</th>
				<td colspan="6"><b>
					<?php 
					$totalel=0;
					foreach($leavedata as $row1)
					{
						if(($row1->leavetype=="EL") || ($row1->leavetype=="SL")){
							$totalel = $totalel + $row1->totalleave;
						}
						echo 	"&nbsp;&nbsp;&nbsp;".$row1->leavetype. ":" . $row1->totalleave;	
						echo "<br>";
					}
					?>
				</b>
			</td>
		</tr>
		
		<tr>
			<th>Total Leave Available</th>
			<td colspan="6"><b> &nbsp;&nbsp;&nbsp;<?php echo 22 - $totalel ?></b></td>
		</tr>
	</table>	
				</div>
                            </div>
                        </div>
                    </div>
                </div>
 


     