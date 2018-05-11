<?php  
$empid = $_REQUEST['empid'];
$salaryid= $_REQUEST['salaryid'];
$conn = mysqli_connect("localhost", "root", "", "cybotlv1_employee");
$res=mysqli_query($conn,"select * from salary where salaryid='$salaryid'");
$srow = mysqli_fetch_object($res);

$eres=mysqli_query($conn,"select * from emp where empid='$empid'");
$erow = mysqli_fetch_object($eres);

$content='<html>



<body>
<body>
	<center><h3>Pay Slip</h3></center>
	<table width="500" align="center" style="border:1px solid grey">
	<tr>
		<td>
		<table align="center"  width="100%">
			<tr>
				<td width="30%"><img src="http://localhost/empmanage/payslip/logo.jpg"></td>
				<td width="70%">CYBOTRIX TECHLONOGIES PVT LTD. 
					1st Floor, Service Road, Above HDFC Bank, Near Kalamandir, ORR Marathahalli, Bengaluru, Karnataka 560037
					080-60505064
				</td>
			</tr>
		</table>
		<hr size="1" color"grey">
		<table align="center" width="100%">
			<tr>
				<th align="left">EMPID</th>
				<td>'.$erow->empid.'</td>
			</tr>
			
			<tr>
				<th align="left">Name</th>
				<td>'.$erow->name.'</td>
			</tr>
			
			<tr>
				<th align="left">Designation</th>
				<td>'.$erow->designation.'</td>
			</tr>
			
			<tr>
				<th align="left">Date Of Joining</th>
				<td>'.$erow->joindate.'</td>
			</tr>
		</table>
		<hr size="1" color"grey">
		
		<table align="center" width="100%">
			<tr style="border-bottom:1px solid grey">
				<th align="left">Month</th>
				<td>'.$srow->month.'/'.$srow->year.'</td>
			</tr>
			
			<tr>
				<th align="left">Total Days</th>
				<td>'.$srow->totaldays.'</td>
			</tr>
			
			<tr>
				<th align="left">Present Days</th>
				<td>'.$srow->presentdays.'</td>
			</tr>
			
			<tr>
				<th align="left">Basic</th>
				<td> Rs. '.$srow->basic.'</td>
			</tr>
			
			<tr>
				<th align="left">HRA</th>
				<td> Rs. '.$srow->hra.'</td>
			</tr>
			
			<tr>
				<th align="left">Medical</th>
				<td> Rs. '.$srow->medical.'</td>
			</tr>
			
			<tr>
				<th align="left">Special Allowance</th>
				<td> Rs. '.$srow->other.'</td>
			</tr>
			
			<tr>
				<th align="left">Total Deduction</th>
				<td> Rs. '.$srow->pt.'</td>
			</tr>
			
			<tr>
				<th align="left">Net Salary:</th>
				<td> Rs. '.$srow->paid.'</td>
			</tr>
		</table>
	</td>
	</tr>
	</table>
	<table width="500" align="center">
	<tr>
		<td>
			<p>Note: This is electronically generated document, No seal or signature required.</p>
		</td>
	</tr>
	</table>
</body>
</html>
';
$data = $content;
require_once("dompdf/dompdf_config.inc.php");

$fileName = $studentid."Invoice_".date('d-m-Y').".pdf";
  if ( get_magic_quotes_gpc() )
  $old_limit = ini_set("memory_limit", "200M");
  $dompdf = new DOMPDF();
  $dompdf->load_html($data);
  $dompdf->set_paper('a3','portrait');
  $dompdf->render();
    header("Cache-Control: public");
    header("Content-Description: File Transfer");
    header('Content-type: application/pdf');
    header('Content-Disposition: attachment; filename="'.$fileName.'"');
    header("Content-Transfer-Encoding: binary");
    echo $dompdf->output();
   
  exit(0);
?>