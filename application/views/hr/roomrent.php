<br>
<div class="row">
    <div class="col-md-12">
        <div class="panel panel-info">
            <div class="panel-heading">Room Rent</div>
            <div class="panel-wrapper collapse in" aria-expanded="true">
                <div class="panel-body">

                    <form action="<?php echo BASEURL;?>hr/save_roomrent" method="POST" class="form-horizontal">
                        <div class="form-body">
                            <div class="form-body">
                                <h3 class="box-title">List the room rent details</h3>
                                <hr class="m-t-0 m-b-40">
                                <div class="row">
                                    <div class="col-md-12">
                                      <div class="row">
                                       <div class="col-md-4">
                                        <div class="form-group">
                                            <label class="control-label col-md-4">Year</label>
                                            <div class="col-md-8">
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
                                    <div class="col-md-4">
                                        <div class="form-group">
                                            <label class="control-label col-md-4">Month</label>
                                            <div class="col-md-8">
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
                                    <div class="col-md-4">
                                        <div class="form-group">
                                            <label class="control-label col-md-4">Paid Amount</label>
                                            <div class="col-md-8">
                                                <input type="text"  class="form-control" name="amount" id="uni" placeholder="Amount" required="required">  </div>
                                            </div>
                                        </div>

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
        <div class="panel-heading text-center">Roomrent Details</div>
        <div class="panel-wrapper collapse in" aria-expanded="true">
            <div class="panel-body">


                <table class="table table-bordered">
                    <thead>
                        <tr>
                            <th>Sl No.</th>
                            <th>Year</th>
                            <th>Month</th>
                            <th>Paid Amount</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                        foreach($allroomrent as $all)
                        {
                            echo "<tr>";
                            echo "<td> $all->id </td>";
                            echo "<td> $all->year </td>";
                            echo "<td> $all->month </td>";
                            echo "<td> $all->paidamount </td>";
                            echo "</tr>";
                        }
                        ?>

                    </tbody>
                    <tr>
                      <?php
                      $sql="select sum(paidamount) as total from roomrent;";
                      $res = $this->db->query($sql);
                      $total = $res->result();
                      ?>
                      <th colspan="2"></th>
                      <td><b>Total Paid Amount</b></td>
                      <td>
                          <b>
                            <?php
                            foreach($total as $tot)
                            {
                                echo "$tot->total";
                            }
                            ?>
                        </b>
                    </td>
                </tr>
            </table>
            <div class="row text-center">
                <ul class="pagination">
                    <?php echo $this->pagination->create_links(); ?>
                </ul>
            </div>
        </div>
    </div>
</div>
</div>
</div>







