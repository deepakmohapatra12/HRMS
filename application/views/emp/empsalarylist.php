				<br>
					<div class="row">
                    <div class="white-box">
					
					 
					  <a href="<?php echo BASEURL;?>employee/index" class="btn btn-success btn-sm"> Go To Dashbaord </a>
                        <div class="table-responsive">
                            <table class="table product-overview" id="myTable">
							<caption class="text-center"><h4>My Salary Process</h4><hr class="m-t-0 m-b-0"></caption>
							 
                                <thead>
                                    <tr>
                                        <th class="text-center">Months</th>
                                        <th class="text-center">Years</th>
                                        <th class="text-center">Status</th>
                                        <th class="text-center">Paid Amount</th>
                                   
                                        <th class="text-center">Download</th>
                                    </tr>
                                </thead>
                                <tbody>
								<?php
								foreach($salary as $sal)
								{ ?>
                                    <tr>
                                        <td class="text-center"><?php echo $sal->month;?></td>
                                        <td class="text-center"><?php echo $sal->year;?></td>
                                        <td class="text-center"> <span class="label label-success font-weight-100">Processed</span> </td>
                                        <td class="text-center"><?php echo $sal->net;?></td>
                                        <td class="text-center"> 
	<a target="_blank" href="<?php echo BASEURL;?>payslip/getpayslip.php?empid=<?php echo $sal->empid;?>&salaryid=<?php echo $sal->salaryid;?>"> <i class="fa fa-download fa-lg"></i> </a> 
										</td>
                                    </tr>
                                <?php } ?>    
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
				
				   <div id="myModal" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                                <div class="modal-dialog modal-md">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                                            <h4 class="modal-title" id="myModalLabel">Pay slip Generation
											<center id="showmsg"> </center>
											</h4> </div>
                                        <div class="modal-body">
                                          <div class="row">
			<div class="col-sm-6">
				<div class="form-group">
					<div class="row">
						<div class="col-sm-6">
							<i>Year</i>
							<select id="year" class="form-control input-sm">
							<?php 
								for($i=date("Y")-1; $i<=date("Y"); $i++)
								{
									echo "<option value='$i' selected>$i</option>";
								}
							?>
							</select>
						</div>
						<div class="col-sm-6">
							<i>Month</i>
							<select id="month" class="form-control input-sm">
								<option value="January">January</option>
								<option value="February">February</option>
								<option value="March">March</option>
								<option value="April">April</option>
								<option value="May">May</option>
								<option value="June">June</option>
								<option value="July">July</option>
								<option value="August">August</option>
								<option value="September">September</option>
								<option value="October">October</option>
								<option value="November">November</option>
								<option value="December">December</option>
							</select>
						</div>
					</div>
				</div>
				<div class="form-group">
					<i>Basic</i>
					<input type="text" id="bas" name="basic" class="form-control input-sm" placeholder="Basic">
				</div>
				
				<div class="form-group">
					<i>Special Allowences</i>
					<input type="text" id="spcl" name="special" class="form-control input-sm" placeholder="Special Allowences">
				</div>
				
				
				<div class="form-group">
					<i>PT</i>
					<input type="text" id="ptt" name="pt" class="form-control input-sm" placeholder="PT">
				</div>
					
				<div class="form-group">
					<i>NET Salary</i>
					<input type="text" id="nets" name="net" class="form-control input-sm" placeholder="NET salary">
				</div>
				
				
			</div>
			<div class="col-sm-6">
				<div class="form-group">
					<i>Total Salary</i>
					<input type="text" id="tot" name="total" class="form-control input-sm" placeholder="Total Salary" onblur="salCalculate(this.value)">
					<input type="hidden" id="empid" name="empid" value="<?php echo $this->uri->segment(3);?>">
				</div>
				<div class="form-group">
					<i>HRA</i>
					<input type="text" id="hr" name="hra" class="form-control input-sm" placeholder="HRA">
				</div>
				<div class="form-group">
					<i>Other Allowences</i>
					<input type="text" id="oth" name="other" class="form-control input-sm" placeholder="Other Allowences">
					</div>
				
				<div class="form-group">
					<i>Medical</i>
					<input type="text" id="med" name="medical" class="form-control input-sm" placeholder="Medical">
				</div>
				<div class="form-group">
						<i>Paid Salary</i>
						<input type="text" id="pd" name="paid" class="form-control input-sm" placeholder="Paid Salary">
					</div>
				
				
			</div>
		</div>
		
                                        </div>
		<div class="modal-footer">
		<center>
			<button class="btn btn-success" id="btn2" type="submit">Submit</button>
			<button type="button" class="btn btn-danger waves-effect" data-dismiss="modal">Close</button>
			</center>
		</div>
                                    </div>
                                    <!-- /.modal-content -->
                                </div>
                                <!-- /.modal-dialog -->
                            </div>
							
							
							<script type="text/javascript">
							
							function salCalculate(totsal)
							{
								totsal = parseInt(totsal);
								var netsal = totsal-200;
								var medical = 1250;
								var special = 1200;
								var pt = 200;
								totsal = totsal - medical;
								totsal = totsal - special;
								totsal = totsal - pt;
								var hra = totsal/100*40;
								var basic = totsal - hra;
							
								
							$("#med").val(medical);
							$("#oth").val(special);
							$("#pd").val(netsal);
							$("#bas").val(basic);
							$("#hr").val(hra);
							$("#spcl").val(0);
							$("#nets").val(netsal);
							$("#ptt").val(200)
							}
		$(function()
		{
			$("#btn2").click(function()

			{
				var status = true;

				var total = $("#tot").val().trim();
				if( (total=="") || (isNaN(total)))
				{
					status = false;
					$("#tot").css({"border":"1px solid red"});
				}
				else
				{
					$("#tot").css({"border":""});
				}

				var ptt = $("#ptt").val().trim();
				if( (ptt=="") || (isNaN(ptt)))

				{
					status = false;
					$("#ptt").css({"border":"1px solid red"});
				}
				else
				{
					$("#ptt").css({"border":""});
				}

				var med = $("#med").val().trim();
				if( (med=="") || (isNaN(med)))
				{
					status = false;
					$("#med").css({"border":"1px solid red"});
				}
				else
				{
					$("#med").css({"border":""});
				}

				var oth = $("#oth").val().trim();
				if( (oth=="") || (isNaN(oth)))
				{
					status = false;
					$("#oth").css({"border":"1px solid red"});
				}
				else
				{
					$("#oth").css({"border":""});
				}


				var pd = $("#pd").val().trim();
				if( (pd=="") || (isNaN(pd)))
				{
					status = false;
					$("#pd").css({"border":"1px solid red"});
				}
				else
				{
					$("#pd").css({"border":""});
				}

				var bas = $("#bas").val().trim();
				if( (bas=="") || (isNaN(bas)))
				{
					status = false;
					$("#bas").css({"border":"1px solid red"});
				}
				else
				{
					$("#bas").css({"border":""});
				}

				

				var hr = $("#hr").val().trim();
				if( (hr=="") || (isNaN(hr)))
				{
					status = false;
					$("#hr").css({"border":"1px solid red"});
				}
				else
				{
					$("#hr").css({"border":""});
				}
				

				var spcl = $("#spcl").val().trim();
				if( (spcl=="") || (isNaN(spcl)))
				{
					status = false;
					$("#spcl").css({"border":"1px solid red"});
				}
				else
				{
					$("#spcl").css({"border":""});
				}
				var nets = $("#nets").val().trim();
				if( (nets=="") || (isNaN(nets)))
				{
					status = false;
					$("#nets").css({"border":"1px solid red"});
				}
				else
				{
					$("#nets").css({"border":""});
				}

				if(status==true)
				{
					var mydata = {"total":total, "pt":ptt,"medical":med,"other":oth,"paid":pd,"basic":bas,"hra":hr,"special":spcl,"net":nets,"empid":$("#empid").val(),"month":$("#month").val(),"year":$("#year").val()};

					$.ajax({
						type:"POST",
						url:"<?php echo BASEURL;?>hr/savesalary",
						data:mydata,
						success:function(response)
						{
							$("#tot").val("");
							$("#ptt").val("");
							$("#med").val("");
							$("#oth").val("");
							$("#pd").val("");
							$("#bas").val("");
							$("#hr").val("");
							$("#spcl").val("");
							$("#nets").val("");
							$("#showmsg").html(response);
						}

					});
				}
			});
		});

	</script>