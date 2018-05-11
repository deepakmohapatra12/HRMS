<br>
<div class="row" id="the-content">
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
        <?= form_open('search_income',['class'=>'navbar-form navbar-left','role'=>'search'])?>
        <div class="form-group">
        <input type="text" class="form-control" name="query">
        </div>
        <button class="btn btn-success btn-sm" type="submit">Search</button>
        <?= form_close();?>
        <?= form_error('query',"<p style='color:red'>","</p>")?>
        </div>
            <div class="panel-body">


                <table class="table table-bordered">
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
                        <?php
                        foreach($allincome as $all)
                        {
                            echo "<tr>";
                            echo "<td> $all->id </td>";
                            echo "<td> $all->year </td>";
                            echo "<td> $all->month </td>";
                            echo "<td> $all->day </td>";
                            echo "<td> $all->type </td>";
                            echo "<td> $all->amount </td>";
                            echo "</tr>";
                        }
                        ?>

                    </tbody>
                    <tr>
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
                                echo "$tot->total";
                            }
                            ?>
                        </b>
                    </td>
                </tr>
            </table>
            
        </div>
    </div>
</div>
</div>
</div>
<script>
        $("body").on("click", ".pagination a", function() {
            var url = $(this).attr('href');
            $("#the-content").load(url);
            return false;
        });
    </script>
