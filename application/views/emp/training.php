<br>
<div class="row">
    <div class="col-md-12">
        <div class="panel panel-info">
            <div class="panel-heading">Training</div>
            <div class="panel-wrapper collapse in" aria-expanded="true">
                <div class="panel-body">
                    <form action="<?php echo BASEURL;?>employee/save_training" method="POST" class="form-horizontal">
                        <div class="form-body">
                            <div class="form-body">
                                <h3 class="box-title">Please list your training details</h3>
                                <hr class="m-t-0 m-b-40">
                                <div class="row">
                                    <div class="col-md-12">
                                      <div class="row">
                                        <div class="col-md-4">
                                            <div class="form-group">
                                                <label class="control-label col-md-4">Course/Module</label>
                                                <div class="col-md-8">
                                                    <input type="text" class="form-control" name="course" id="first" placeholder="Enter Course" required >  </div>
                                                </div>
                                            </div>
                                            <!--/span-->
                                            <div class="col-md-4">
                                                <div class="form-group">
                                                    <label class="control-label col-md-4">Location</label>
                                                    <div class="col-md-8">
                                                        <input type="text"  class="form-control" name="location" placeholder="Location" required>  </div>
                                                    </div>
                                                </div>
                                                <div class="col-md-4">
                                                    <div class="form-group">
                                                        <label class="control-label col-md-4">Conducted By</label>
                                                        <div class="col-md-8">
                                                            <input type="text" class="form-control" name="conduct" placeholder="Conducted By" required>  </div>
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
                                                        <label class="control-label col-md-4">Month/year</label>
                                                        <div class="col-md-8">
                                                            <input type="text" class="form-control" name="duration"  placeholder="Month/Year" required>  </div>
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
                <div class="panel-heading text-center">Training Details</div>
                 <div class="panel-wrapper collapse in" aria-expanded="true">
                    <div class="panel-body">
                        <table class="table table-bordered">
                            <thead>
                                <tr>
                                    <th>Sl No.</th>
                                    <th>Course</th>
                                    <th>Location</th>
                                    <th>Conduct</th>
                                    <th>Duration</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php
                                foreach($training as $train)
                                {
                                    echo "<tr>";
                                    echo "<td> $train->trid </td>";
                                    echo "<td> $train->course </td>";
                                    echo "<td> $train->location </td>";
                                    echo "<td> $train->conduct </td>";
                                    echo "<td> $train->duration </td>";
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


