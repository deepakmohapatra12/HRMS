<br>
				<div class="row">
                    <div class="col-md-12">
					
                        <div class="panel">
                            <div class="panel-heading"> Employee & Leaves 
								<span style="float:right;"><a href="<?php echo BASEURL;?>hr/empleave" class="btn btn-warning btn-sm">Back</a></span>
							</div>
							<hr class="m-t-0 m-b-0">
                            <div class="table-responsive">
                                   
                               <?php
	 $this->db = $this->load->database('default', TRUE);
	$empid = $this->uri->segment(3);
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
				<td> <select  onchange="changeStatus(this.value, <?php echo $row->leaveid?>)">
					<option value='Pending' <?php if($row->status=="Pending") { echo " Selected";} ?>>Pending</option>
					<option value='Approved' <?php if($row->status=="Approved") { echo " Selected";} ?>>Approved</option>
					</select></td>
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
		<td></td>
			<th>Total Leave Available</th>
			<td colspan="5"><b> &nbsp;&nbsp;&nbsp;<?php echo 22 - $totalel ?></b></td>
		</tr>
	</table>	
                            </div>
                        </div>
                    </div>
                </div>


	<script>
		function changeStatus(sts, leaveid)
		{
			
		var leavestatus = confirm("Are you Sure?");
        if(leavestatus==true)
        {
           var mydata = {"sts":sts,"leaveid":leaveid}
                    
                    $.ajax({
                      type:"POST",
                      url:"<?php echo BASEURL;?>hr/leaveupdate",
                      data:mydata,
                      success:function(response)
                      {
                        alert(response.trim());
                      }
                      
                    });
        }
		}
	</script>