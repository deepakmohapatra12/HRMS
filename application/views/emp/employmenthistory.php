<br>
<div class="row">
    <div class="col-md-12">
        <div class="panel panel-info">
            <div class="panel-heading">Employment History</div>
            <div class="panel-wrapper collapse in" aria-expanded="true">
                <div class="panel-body">
                    <form action="<?php echo BASEURL;?>employee/save_employee_history" method="POST" class="form-horizontal">
                        <div class="form-body">
                            <div class="form-body">
                                <h3 class="box-title">Please list your most recent employer first (attach additional pages if required)</h3>
                                <hr class="m-t-0 m-b-40">
                                <div class="row">
                                    <div class="col-md-12">
                                      <div class="row">
                                        <div class="col-md-4">
                                            <div class="form-group">
                                                <label class="control-label col-md-4">From</label>
                                                <div class="col-md-8">
                                                    <input type="text" class="form-control" name="from" id="first" placeholder="Starting Date" required="required">  </div>
                                                </div>
                                            </div>
                                            <!--/span-->
                                            <div class="col-md-4">
                                                <div class="form-group">
                                                    <label class="control-label col-md-4">To</label>
                                                    <div class="col-md-8">
                                                        <input type="text"  class="form-control" name="to" placeholder="End Date" required="required">  </div>
                                                    </div>
                                                </div>
                                                <div class="col-md-4">
                                                    <div class="form-group">
                                                        <label class="control-label col-md-4">Organisation</label>
                                                        <div class="col-md-8">
                                                            <input type="text"  class="form-control" name="org"  placeholder="Enter organisation" required="required">  </div>
                                                        </div>
                                                    </div>
                                                    <!--/span-->
                                                </div>

                                            </div>
                                        </div>

                                        <div class="row">
                                            <div class="col-md-12">
                                              <div class="row">
                                                <div class="col-md-4">
                                                    <div class="form-group">
                                                        <label class="control-label col-md-4">Title & Key Responsbilities</label>
                                                        <div class="col-md-8">
                                                            <input type="text" class="form-control" name="title" placeholder="Title" required="required">  </div>
                                                        </div>
                                                    </div>
                                                    <!--/span-->
                                                    <div class="col-md-4">
                                                        <div class="form-group">
                                                            <label class="control-label col-md-4">Reporting To</label>
                                                            <div class="col-md-8">
                                                                <input type="text"  class="form-control" name="report" placeholder="Reporting to" required="required">  </div>
                                                            </div>
                                                        </div>
                                                        <div class="col-md-4">
                                                            <div class="form-group">
                                                                <label class="control-label col-md-4">Salary</label>
                                                                <div class="col-md-8">
                                                                    <input type="text"  class="form-control" name="salary" placeholder="Salary" required="required">  </div>
                                                                </div>
                                                            </div>
                                                            <!--/span-->
                                                        </div>

                                                    </div>
                                                </div>
                                                <div class="row">
                                                    <div class="col-md-12">
                                                        <div class="form-group">
                                                            <label class="control-label col-md-2">Reason For Leaving</label>
                                                            <div class="col-md-10">
                                                                <textarea style="resize: none" class="form-control" name="reason" placeholder="reason" required="required"></textarea>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <!--/span-->
                                                </div>
                                            </div>
                                        </div>
                                        <div class="form-actions">
                                            <div class="row">
                                                <div class="col-md-12">
                                                    <div class="row">
                                                        <div class="col-md-12 text-center">
                                                            <button type="submit" class="btn btn-success">Submit</button>
                                                            <button type="button" class="btn btn-default">Cancel</button>
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
                <div class="panel-heading text-center">Employee History Details</div>
                <div class="panel-wrapper collapse in" aria-expanded="true">
                    <div class="panel-body">


                        <table class="table table-bordered">
                            <thead>
                                <tr>
                                    <th>Sl No.</th>
                                    <th>From</th>
                                    <th>To</th>
                                    <th>Organisation</th>
                                    <th>Title</th>
                                    <th>Reporting To</th>
                                    <th>Salary</th>
                                    <th>Reason Of Leaving</th>
                                </tr>
                            </thead>
                            <tbody>

                                <?php
                                foreach($hist as $his)
                                {
                                    echo "<tr>";
                                    echo "<td> $his->ehisid </td>";
                                    echo "<td> $his->from </td>";
                                    echo "<td> $his->to </td>";
                                    echo "<td> $his->organisation </td>";
                                    echo "<td> $his->title </td>";
                                    echo "<td> $his->report </td>";
                                    echo "<td> $his->salary </td>";
                                    echo "<td> $his->reason </td>";
                                    echo "</tr>";
                                }
                                ?>

                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>







