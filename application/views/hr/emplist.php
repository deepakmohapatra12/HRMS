<br>
<div class="row">


	<div class="col-md-12">
		<div class="panel">
			<div class="panel-heading">Active Employee List</div>
			<div class="row">
				<div class="col-sm-2"></div>
				<div class="col-sm-8">
					<input type="text" class="search form-control" id="search_text" name="search_text" placeholder="Search By Anything">
				</div>
				<div class="col-sm-2"></div>
			</div>
			</div>
			<hr class="m-t-0 m-b-0">
			<div class="table-responsive">
				<table class="table table-hover manage-u-table  color-bordered-table info-bordered-table" id="userTbl">
					<thead>
						<tr>
							<th style="width: 70px;" class="text-center">#</th>
							<th>Full Name</th>				 
							<th>e-Mail</th>				 
							<th>Mobile</th>
							<th>Designation</th>
							<th>Active</th>
							<th>Manage</th>
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
									<select class="form-control" onchange="changeStatus(this.value, <?php echo $row->empid?>)">
										<option value='YES' <?php if($row->active=="YES") { echo " Selected";} ?>>YES</option>
										<option value='NO' <?php if($row->active=="NO") { echo " Selected";} ?>>NO</option>
									</select>

								</td>
								<td>


									<button type="button" class="btn btn-info btn-outline btn-circle btn-sm m-r-5"><i class="ti-pencil-alt"></i></button>

									<a href="<?php echo BASEURL;?>hr/employee_all_details/<?php echo $row->empid; ?>"><button type="button" class="btn btn-info btn-outline btn-circle btn-sm m-r-5"><i class="fa fa-eye"></i></button></a>

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

<script>
$(document).ready(function(){
    $('.search').on('keyup',function(){
        var searchTerm = $(this).val().toLowerCase();
        $('#userTbl tbody tr').each(function(){
            var lineStr = $(this).text().toLowerCase();
            if(lineStr.indexOf(searchTerm) === -1){
                $(this).hide();
            }else{
                $(this).show();
            }
        });
    });
});
</script>