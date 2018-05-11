<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <link href="<?php echo base_url('assets/datatables/css/dataTables.bootstrap.min.css')?>" rel="stylesheet">
<link href="<?php echo base_url('assets/datatables.colvis/dataTables.colVis.css')?>" rel="stylesheet">
<br>
<div class="row" >
    <div class="col-md-12">
        <div class="panel panel-info">
            <div class="panel-heading">Income</div>
            <div class="panel-wrapper collapse in" aria-expanded="true">
                <div class="panel-body">
                    <form action="<?php echo BASEURL;?>hr/save_income" method="POST" class="form-horizontal">
                        <div class="form-body">
                            <div class="form-body">
                                <h3 class="box-title">Income Details</h3>
                                <hr class="m-t-0 m-b-40">
                                <div class="row">
                                    <div class="col-md-12">
                                      <div class="row">
                                         <div class="col-md-1"></div>
                                         <div class="col-md-2">
                                            <div class="form-group">
                                                <label class="col-md-12">Year</label>
                                                <div class="col-md-12">
                                                    <select id="year" name="year" class="form-control input-sm" required>
                                                        <?php 
                                                        for($i=date("Y")-1; $i<=date("Y"); $i++)
                                                        {
                                                            echo "<option value='$i' selected>$i</option>";
                                                        }
                                                        ?>
                                                    </select>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-2">
                                            <div class="form-group">
                                                <label class="col-md-12">Month</label>
                                                <div class="col-md-12">
                                                    <select id="month" name="month" class="form-control input-sm" required>
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
                                        <!--/span-->
                                        <div class="col-md-2">
                                            <div class="form-group">
                                                <label class="col-md-12">Day</label>
                                                <div class="col-md-12">
                                                    <select name="day" class="form-control input-sm">
                                                        <?php for ($i = 1; $i <= 31; $i++) : ?>
                                                            <option value="<?php echo $i; ?>"><?php echo $i; ?></option>
                                                        <?php endfor; ?>
                                                    </select>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-2">
                                            <div class="form-group">
                                                <label class="col-md-12">Type</label>
                                                <div class="col-md-12">
                                                   <select id="type" name="type" class="form-control input-sm" required>
                                                    <option value="income">Income</option>
                                                    <option value="training">Training</option>
                                                    <option value="webdevelopement">Web Developement</option>
                                                    <option value="other">Other</option>
                                                </select>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-2">
                                        <div class="form-group">
                                            <label class="col-md-12">Paid Amount</label>
                                            <div class="col-md-12">
                                                <input type="text"  class="form-control" name="amount" id="uni" placeholder="Amount" required="required">  </div>
                                            </div>
                                        </div>
                                        <div class="col-md-1"></div>
                                        <!--/span-->
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="form-actions">
                        <div class="row">
                            <div class="col-md-12">
                                <div class="row">
                                    <div class="col-md-12 text-center">
                                        <button type="submit" id="btn2" class="btn btn-success">Submit</button>
                                        <button type="reset" class="btn btn-default">Cancel</button>
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
<div class="row" id="details">
    <div class="col-sm-12">
      <div class="panel panel-info">
        <div class="panel-heading text-center">All Income Details</div>
        <div class="panel-wrapper collapse in" aria-expanded="true">
        </div>
        <div class="panel-body">

            <table class="table table-bordered" id="table">
                <thead>
                    <tr>
                        <th>Sl No.</th>
                        <th>Year</th>
                        <th>Month</th>
                        <th>Day</th>
                        <th>Type</th>
                        <th>Paid Amount</th>
                    </tr>
                </thead>
                <tbody>
                         </tbody>
        <!--     <tr>
              <?php
              $sql="select sum(amount) as total from income;";
              $res = $this->db->query($sql);
              $total = $res->result();
              ?>
              <th colspan="4"></th>
              <td><b>Total Paid Amount</b></td>
              <td>
                  <b>
                    <?php
                    foreach($total as $tot)
                    {
                        //echo "$tot->total";
                    }
                    ?>
                </b>
            </td>
        </tr>
    -->    </table>
</div>
</div>
</div>
</div>
</div>
<script src="<?php echo base_url('assets/datatables/js/jquery.dataTables.min.js')?>"></script>
<script src="<?php echo base_url('assets/datatables/js/dataTables.bootstrap.min.js')?>"></script>
<script src="<?php echo base_url('assets/datatables.colvis/dataTables.colVis.js')?>"></script>
<script type="text/javascript">

var table;

$(document).ready(function() {

    //datatables
    table = $('#table').DataTable({ 

        "processing": true, //Feature control the processing indicator.
        "serverSide": true, //Feature control DataTables' server-side processing mode.
        "order": [], //Initial no order.
        // Load data for the table's content from an Ajax source
        "ajax": {
            "url": "<?php echo site_url('Hr/ajax_list')?>",
            "type": "POST"
        },

        //Set column definition initialisation properties.
        "columnDefs": [
        { 
            "targets": [ 0 ], //first column / numbering column
            "orderable": false, //set not orderable
        },
        ],

    });


});

</script>

