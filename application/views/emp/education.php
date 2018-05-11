<br>
<div class="row">
    <div class="col-md-12">
        <div class="panel panel-info">
            <div class="panel-heading">Education</div>
            <div class="panel-wrapper collapse in" aria-expanded="true">
                <div class="panel-body">

                    <form action="<?php echo BASEURL;?>employee/save_education" method="POST" class="form-horizontal">
                        <div class="form-body">
                            <div class="form-body">
                                <h3 class="box-title">Please list your education details</h3>
                                <hr class="m-t-0 m-b-40">
                                <div class="row">
                                    <div class="col-md-12">
                                      <div class="row">
                                         <div class="col-md-4">
                                            <div class="form-group">
                                                <label class="control-label col-md-4">Type</label>
                                                <div class="col-md-8">
                                                    <select class="form-control" name="type">
                                                        <option value="10th">10th</option>
                                                        <option value="12th">12th</option>
                                                        <option value="Graduation">Graduation</option>
                                                        <option value="PG">PG</option>
                                                        <option value="PhD">PhD</option>
                                                    </select>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-4">
                                            <div class="form-group">
                                                <label class="control-label col-md-4">Qualification</label>
                                                <div class="col-md-8">
                                                    <input type="text" class="form-control" id="qual" name="qual" placeholder="Enter Qualification" required="required">  </div>
                                                </div>
                                            </div>
                                            <!--/span-->
                                            <div class="col-md-4">
                                                <div class="form-group">
                                                    <label class="control-label col-md-4">University</label>
                                                    <div class="col-md-8">
                                                        <input type="text"  class="form-control" name="uni" id="uni" placeholder="Relationship" required="required">  </div>
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
                                                    <label class="control-label col-md-4">Year Of Passing</label>
                                                    <div class="col-md-8">
                                                        <input type="text" class="form-control" id="yop" name="yop" placeholder="Year Of Passing" required="required">  </div>
                                                    </div>
                                                </div>
                                                <!--/span-->
                                                <div class="col-md-4">
                                                    <div class="form-group">
                                                        <label class="control-label col-md-4">CGPA/Grade</label>
                                                        <div class="col-md-8">
                                                            <input type="text"  class="form-control" id="cgpa" name="cgpa" placeholder="CGPA" required>  </div>
                                                        </div>
                                                    </div>  

                                                    <div class="col-md-4">
                                                        <div class="form-group">
                                                            <label class="control-label col-md-4">Specialization</label>
                                                            <div class="col-md-8">
                                                                <input type="text"  class="form-control" id="spec" name="spec" placeholder="Enter Specialization" required>  </div>
                                                            </div>
                                                        </div>														<!--/span-->
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
                    <div class="panel-heading text-center">Education Details</div>
                    <div class="panel-wrapper collapse in" aria-expanded="true">
                        <div class="panel-body">


                            <table class="table table-bordered">
                                <thead>
                                    <tr>
                                        <th>Sl No.</th>
                                        <th>Qualification</th>
                                        <th>University</th>
                                        <th>Specialisation</th>
                                        <th>Year Of Passing</th>
                                        <th>CGPA</th>
                                        <th>Type</th>
                                    </tr>
                                </thead>
                                <tbody>

                                    <?php
                                    foreach($edu as $edus)
                                    {
                                        echo "<tr>";
                                        echo "<td> $edus->eduid </td>";
                                        echo "<td> $edus->qualification </td>";
                                        echo "<td> $edus->university </td>";
                                        echo "<td> $edus->specialization </td>";
                                        echo "<td> $edus->year </td>";
                                        echo "<td> $edus->cgpa </td>";
                                        echo "<td> $edus->type </td>";
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







