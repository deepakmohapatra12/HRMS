<br>
<div class="row">
    <div class="col-md-12">
        <div class="panel panel-info">
            <div class="panel-heading">References</div>
            <div class="panel-wrapper collapse in" aria-expanded="true">
                <div class="panel-body">
                    <form action="<?php echo BASEURL;?>employee/save_employee_reference" method="POST" class="form-horizontal">
                        <div class="form-body">
                            <div class="form-body">
                                <h3 class="box-title">Name two individuals who can provide professional reference</h3>
                                <hr class="m-t-0 m-b-40">
                                <div class="row">
                                    <div class="col-md-12">
                                      <div class="row">
                                        <div class="col-md-3">
                                            <div class="form-group">
                                                <label class="control-label col-md-4">Reference One</label>
                                                <div class="col-md-8">
                                                    <input type="text" class="form-control" name="one" placeholder="reference one" required>  </div>
                                                </div>
                                            </div>
                                            <!--/span-->
                                            <div class="col-md-3">
                                                <div class="form-group">
                                                        <label class="control-label col-md-4">Employee Id</label>
                                                    <div class="col-md-8">
                                                    <input type="text"  class="form-control" name="empidone" placeholder="Employee Id" required>  </div>
                                                    </div>
                                                </div>
                                                <div class="col-md-3">
                                                    <div class="form-group">
                                                        <label class="control-label col-md-4">Reference Two</label>
                                                        <div class="col-md-8">
                                                            <input type="text"  class="form-control" name="two"  placeholder="reference two" required>  </div>
                                                        </div>
                                                    </div>
                                                       <div class="col-md-3">
                                                    <div class="form-group">
                                                        <label class="control-label col-md-4">Employee Id</label>
                                                        <div class="col-md-8">
                                                            <input type="text"  class="form-control" name="empidtwo" placeholder="Employee Id" required>  </div>
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
                                    <th>Reference One</th>
                                    <th>Employee ID</th>
                                    <th>Reference Two</th>
                                    <th>Employee ID</th>
                                </tr>
                            </thead>
                            <tbody>

                                <?php
                                foreach($reference as $ref)
                                {
                                    echo "<tr>";
                                    echo "<td> $ref->referid </td>";
                                    echo "<td> $ref->firstreference </td>";
                                    echo "<td> $ref->firstempid </td>";
                                    echo "<td> $ref->secondreference </td>";  
                                    echo "<td> $ref->secondempid </td>";  
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







