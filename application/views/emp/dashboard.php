			<?php 
				$this->db = $this->load->database('default', TRUE);
				$empid = $this->session->userdata("userid");
			?>
       
                <div class="row bg-title">
                    <div class="col-lg-3 col-md-4 col-sm-4 col-xs-12">
                        <h4 class="page-title">Hi <?php echo $this->session->userdata("name"); ?>, how are you today ?</h4> </div>
                    
                    <!-- /.col-lg-12 -->
                </div>
                <!-- ============================================================== -->
                <!-- Other sales widgets -->
                <!-- ============================================================== -->
                <!-- .row -->
                <div class="row">
                    <div class="col-lg-3 col-sm-6 col-xs-12">
                        <div class="white-box">
                            <h3 class="box-title">Total Leaves</h3>
                            <ul class="list-inline two-part">
                                <li><i class="icon-people text-info"></i></li>
                                <li class="text-right"><span class="counter">22</span></li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-lg-3 col-sm-6 col-xs-12">
                        <div class="white-box">
                            <h3 class="box-title">Leaves Taken</h3>
                            <ul class="list-inline two-part">
                                <li><i class="icon-folder text-purple"></i></li>
                                <li class="text-right"><span class="counter">
								<?php 
								$res = $this->db->query("select sum(total) as leavetaken from empleave where empid='$empid' and leavetype !='WEEK OFF'");
								$lrow = $res->row();	
								echo $lrow->leavetaken;
								?>
								</span></li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-lg-3 col-sm-6 col-xs-12">
                        <div class="white-box">
                            <h3 class="box-title">Available Leaves</h3>
                            <ul class="list-inline two-part">
                                <li><i class="icon-folder-alt text-danger"></i></li>
                                <li class="text-right"><span class="">
								<?php echo 22 - $lrow->leavetaken; ?>
								</span></li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-lg-3 col-sm-6 col-xs-12">
                        <div class="white-box">
                            <h3 class="box-title">My Pay Slips</h3>
							
                            <ul class="list-inline two-part">
                                <li><i class="ti-wallet text-success"></i></li>
                                <li class="text-right"><a href="<?php echo BASEURL; ?>employee/payslip" style="font-size:35px;">View</a></li>
                            </ul>
							
                        </div>
                    </div>
                </div>
               
                <div class="row">
                    <div class="col-md-12">
                        <div class="panel">
                            <div class="panel-heading">My Leaves
							<span style="margin-left:40px;"><a href="<?php echo BASEURL;?>employee/applyleave" class="btn btn-success btn-sm">Apply New Leave</a></span>
							
				
							</div>
                            <hr class="m-t-0 m-b-0">
                            <div class="table-responsive">
                                   
                               <?php
	 
	$sql="select * from empleave where empid='$empid' order by leaveid desc";
	$res = $this->db->query($sql);
	$allleave = $res->result();
	
	?>
	
	<table class="table table-hover manage-u-table  color-bordered-table info-bordered-table">
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
			<td></td>
				<th>Total Leave Taken</th>
				<td  colspan="5"><b>
					<?php 
					$totalel=0;
					foreach($leavedata as $row1)
					{
						if(($row1->leavetype=="EL") || ($row1->leavetype=="SL") ){
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
		<td></td>
			<th>Total Leave Available</th>
			<td colspan="5"><b> &nbsp;&nbsp;&nbsp;<?php echo 22 - $totalel ?></b></td>
		</tr>
	</table>	
                            </div>
                        </div>
                    </div>
                </div>
                <!-- ============================================================== -->
                <!-- Right sidebar -->
                <!-- ============================================================== -->
                <!-- .right-sidebar -->
                <div class="right-sidebar">
                    <div class="slimscrollright">
                        <div class="rpanel-title"> Service Panel <span><i class="ti-close right-side-toggle"></i></span> </div>
                        <div class="r-panel-body">
                            <ul id="themecolors" class="m-t-20">
                                <li><b>With Light sidebar</b></li>
                                <li><a href="javascript:void(0)" data-theme="default" class="default-theme">1</a></li>
                                <li><a href="javascript:void(0)" data-theme="green" class="green-theme">2</a></li>
                                <li><a href="javascript:void(0)" data-theme="gray" class="yellow-theme">3</a></li>
                                <li><a href="javascript:void(0)" data-theme="blue" class="blue-theme">4</a></li>
                                <li><a href="javascript:void(0)" data-theme="purple" class="purple-theme">5</a></li>
                                <li><a href="javascript:void(0)" data-theme="megna" class="megna-theme">6</a></li>
                                <li class="full-width"><b>With Dark sidebar</b></li>
                                <li><a href="javascript:void(0)" data-theme="default-dark" class="default-dark-theme">7</a></li>
                                <li><a href="javascript:void(0)" data-theme="green-dark" class="green-dark-theme">8</a></li>
                                <li><a href="javascript:void(0)" data-theme="gray-dark" class="yellow-dark-theme">9</a></li>
                                <li><a href="javascript:void(0)" data-theme="blue-dark" class="blue-dark-theme">10</a></li>
                                <li><a href="javascript:void(0)" data-theme="purple-dark" class="purple-dark-theme">11</a></li>
                                <li><a href="javascript:void(0)" data-theme="megna-dark" class="megna-dark-theme working">12</a></li>
                            </ul>
                            <ul class="m-t-20 all-demos">
                                <li><b>Choose other demos</b></li>
                            </ul>
                            <ul class="m-t-20 chatonline">
                                <li><b>Chat option</b></li>
                                <li>
                                    <a href="javascript:void(0)"><img src="../plugins/images/users/varun.jpg" alt="user-img" class="img-circle"> <span>Varun Dhavan <small class="text-success">online</small></span></a>
                                </li>
                                <li>
                                    <a href="javascript:void(0)"><img src="../plugins/images/users/genu.jpg" alt="user-img" class="img-circle"> <span>Genelia Deshmukh <small class="text-warning">Away</small></span></a>
                                </li>
                                <li>
                                    <a href="javascript:void(0)"><img src="../plugins/images/users/ritesh.jpg" alt="user-img" class="img-circle"> <span>Ritesh Deshmukh <small class="text-danger">Busy</small></span></a>
                                </li>
                                <li>
                                    <a href="javascript:void(0)"><img src="../plugins/images/users/arijit.jpg" alt="user-img" class="img-circle"> <span>Arijit Sinh <small class="text-muted">Offline</small></span></a>
                                </li>
                                <li>
                                    <a href="javascript:void(0)"><img src="../plugins/images/users/govinda.jpg" alt="user-img" class="img-circle"> <span>Govinda Star <small class="text-success">online</small></span></a>
                                </li>
                                <li>
                                    <a href="javascript:void(0)"><img src="../plugins/images/users/hritik.jpg" alt="user-img" class="img-circle"> <span>John Abraham<small class="text-success">online</small></span></a>
                                </li>
                                <li>
                                    <a href="javascript:void(0)"><img src="../plugins/images/users/john.jpg" alt="user-img" class="img-circle"> <span>Hritik Roshan<small class="text-success">online</small></span></a>
                                </li>
                                <li>
                                    <a href="javascript:void(0)"><img src="../plugins/images/users/pawandeep.jpg" alt="user-img" class="img-circle"> <span>Pwandeep rajan <small class="text-success">online</small></span></a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
  