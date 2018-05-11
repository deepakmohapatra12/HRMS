

<?php 
$this->db = $this->load->database('default', TRUE);
        //$empid = $this->session->userdata("userid");
//$this->load->model('Hr_model');
?>
<style>
  .two-part li span {
    font-size: 25px!important;
    font-weight: 100!important;
    font-family: Rubik,sans-serif!important;
  }
  .two-part li {
    width: auto !important;
  }
  .two-part li {
    width: auto !important;;
  }
</style> 
<div class="row bg-title">
  <div class="col-sm-12">
    <h4 class="page-title">Hi <?php echo $this->session->userdata("name"); ?>, how are you today ?</h4> </div>
    <!-- /.col-lg-12 -->
  </div>
  <!-- ============================================================== -->
  <!-- Other sales widgets -->
  <!-- ============================================================== -->
  <!-- .row -->
  <?php 
  $res = $this->db->query("select count(status) as approve from empleave where status = 'pending'");
  $arow = $res->row();    
  ?>
  <div class="row">
    <div class="col-lg-3 col-sm-6 col-xs-12">
      <div class="white-box">
        <h3 class="box-title">Leaves For Approval</h3>
        <ul class="list-inline two-part">
          <li><i class="fa fa-users" style="color:skyblue;"></i></li>
          <li class="text-right"><span class="counter"><?php echo $arow->approve;?></span></li>
        </ul>
      </div>
    </div>
    <?php
    $res =  $this->db->query("select sum(paid) as total from salary");
    $paidrow = $res->row();
    ?>
    <div class="col-lg-3 col-sm-6 col-xs-12">
      <div class="white-box">
        <h3 class="box-title">PAID SALARY</h3>
        <ul class="list-inline two-part">
          <li><i class="fa fa-money" style="color:orange"></i></li>
          <li class="text-right"><span class="counter"><i class="fa fa-inr" style="font-size: 20px;"></i> <?php echo number_format($paidrow->total); ?></span></li>
        </ul>
      </div>
    </div>
    <?php
    $res = $this->db->query("select sum(paidamount) as total from roomrent");
    $roomrow = $res->row();
    ?>
    <div class="col-lg-3 col-sm-6 col-xs-12">
      <div class="white-box">
        <a href="<?php echo BASEURL;?>hr/roomrent"><h3 class="box-title">Room Rent</h3></a>
        <ul class="list-inline two-part">
          <li><i class="icon-folder-alt text-danger"></i></li>
          <li class="text-right"><span class=""><i class="fa fa-inr" style="font-size: 20px;"></i> <?php echo number_format($roomrow->total);?></span></li>
        </ul>
      </div>
    </div>
    <?php
    $res = $this->db->query("select sum(amount) as total from otherexpense");
    $otherrow = $res->row();
    ?>
    <div class="col-lg-3 col-sm-6 col-xs-12">
      <div class="white-box">
        <a href="<?php echo BASEURL;?>hr/otherexpense"><h3 class="box-title">Other Expenses</h3></a>
        <ul class="list-inline two-part">
          <li><i class="ti-wallet text-success"></i></li>
          <li class="text-right"><span class=""><i class="fa fa-inr" style="font-size: 20px;"></i> <?php echo number_format($otherrow->total);?></span></li>
        </ul>
      </div>
    </div>
    <?php
    $res = $this->db->query("select sum(amount) as total from income");
    $incomerow = $res->row();
    ?>
    <div class="col-lg-3 col-sm-6 col-xs-12">
      <div class="white-box">
       <a href="<?php echo BASEURL;?>hr/income"> <h3 class="box-title">Total Income</h3></a>
       <ul class="list-inline two-part">
        <li><i class="ti-wallet text-success"></i></li>
        <li class="text-right"><span class=""><i class="fa fa-inr" style="font-size: 20px;"></i> <?php echo number_format($incomerow->total);?></span></li>
      </ul>
    </div>
  </div>
  <div class="col-lg-3 col-sm-6 col-xs-12">
    <div class="white-box">
     <a href="#"> <h3 class="box-title">Total Expense</h3></a>
     <ul class="list-inline two-part">
      <li><i class="ti-wallet text-success"></i></li>
      <li class="text-right"><span class=""><i class="fa fa-inr" style="font-size: 20px;"></i><?php echo number_format($paidrow->total+$roomrow->total + $otherrow->total);?></span></li>
    </ul>
  </div>
</div>
<?php
$totalincome =  $incomerow->total;
$totalexpense = $paidrow->total+$roomrow->total + $otherrow->total;
$profit = $totalincome - $totalexpense;
?>
<div class="col-lg-3 col-sm-6 col-xs-12">
  <div class="white-box">
   <a href="#"> <h3 class="box-title">Profit/Loss</h3></a>
   <ul class="list-inline two-part">
    <li><i class="ti-wallet text-success"></i></li> <li class="text-right"><span class=""><i class="fa fa-inr" style="font-size: 20px;"></i><?php echo $profit?></span></li>
  </ul>
</div>
</div>
<?php 
$monthnow = date('F', strtotime("now"));
$res = $this->db->query("select sum(amount) as currentincome from income where month ='".$monthnow."'");
$currentincome = $res->row();    
?>
<div class="col-lg-3 col-sm-6 col-xs-12">
  <div class="white-box">
   <a href="#"> <h3 class="box-title"><?php echo $monthnow?> Income</h3></a>
   <ul class="list-inline two-part">
    <li><i class="ti-wallet text-success"></i></li> <li class="text-right"><span class=""><i class="fa fa-inr" style="font-size: 20px;"></i><?php echo $currentincome->currentincome?></span></li>
  </ul>
</div>
</div>
<?php 
$prevmonth = date('F', strtotime("-1 month"));
$res = $this->db->query("select sum(amount) as prevamount from income where month ='".$prevmonth."'");
$previousincome = $res->row();    
?>
<div class="col-lg-3 col-sm-6 col-xs-12">
  <div class="white-box">
   <a href="#"> <h3 class="box-title"><?php echo $prevmonth?> Income</h3></a>
   <ul class="list-inline two-part">
    <li><i class="ti-wallet text-success"></i></li> <li class="text-right"><span class=""><i class="fa fa-inr" style="font-size: 20px;"></i><?php echo $previousincome->prevamount?></span></li>
  </ul>
</div>
</div>
<?php 
$lastprevmonth = date('F', strtotime("-2 month"));
$res = $this->db->query("select sum(amount) as prevamount from income where month ='".$lastprevmonth."'");
$previousincome = $res->row();    
?>
<div class="col-lg-3 col-sm-6 col-xs-12">
  <div class="white-box">
   <a href="#"> <h3 class="box-title"><?php echo $lastprevmonth?> Income</h3></a>
   <ul class="list-inline two-part">
    <li><i class="ti-wallet text-success"></i></li> <li class="text-right"><span class=""><i class="fa fa-inr" style="font-size: 20px;"></i><?php echo $previousincome->prevamount?></span></li>
  </ul>
</div>
</div>
<?php
$sql="select month,year,sum(paid) as amountpaid from salary group by month ORDER BY salaryid desc;";
$res = $this->db->query($sql);
$moneymonth = $res->result();
?>
<div class="col-lg-6 col-sm-6 col-xs-12">
  <div class="white-box">
   <a href="#"> <h3 class="box-title">Monthly Income</h3></a>
   <table class="table table-responsive">
    <thead>
      <tr>
       <th>Year</th>  
       <th>Month</th>
       <th>Amount</th>
     </tr>
   </thead>
   <tbody>
    <?php
    foreach($moneymonth as $mm)
    {
      echo "<tr>";
      echo "<td>".$mm->year."</td>";
      echo "<td>".$mm->month."</td>";
      echo "<td>".$mm->amountpaid."</td>";
      echo "</tr>";
    }
    ?>
  </tbody>
</table></div>
</div>
</div>
<!-- /.row -->
<!-- ============================================================== -->
<!-- Extra-component -->
<div class="row">
  <div class="col-sm-12">
    <div class="white-box">
      <div id="bar_chart" style="width: 900px; height: 500px;"></div>
    </div>
  </div>
</div>


<script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.4.3/jquery.min.js"></script>
<script type="text/javascript">
      // Load the Visualization API and the line package.
      google.charts.load('current', {'packages':['bar']});
      // Set a callback to run when the Google Visualization API is loaded.
      google.charts.setOnLoadCallback(drawChart);
      
      function drawChart() {

        $.ajax({
          type: 'POST',
          url: '<?php echo BASEURL;?>hr/getchart',
          
          success: function (data1) {
        // Create our data table out of JSON data loaded from server.
        var data = new google.visualization.DataTable();
        
        data.addColumn('string', 'Month');
        data.addColumn('number', 'Income');
        data.addColumn('number', 'Expense');
        
        var jsonData = $.parseJSON(data1);
        
        for (var i = 0; i < jsonData.length; i++) {
          data.addRow([jsonData[i].month, parseInt(jsonData[i].income), parseInt(jsonData[i].expense)]);
        }
        var options = {
          chart: {
            title: 'Monthly Analysis',
            subtitle: 'Income and Expense Of Cybotrix'
          },
          width: 900,
          height: 500,
          axes: {
            x: {
              0: {side: 'top'}
            }
          },
       // colors:['','']
      //  bars: 'horizontal'
      
    };
    var chart = new google.charts.Bar(document.getElementById('bar_chart'));
    chart.draw(data, options);
  }
});
      }
    </script>
