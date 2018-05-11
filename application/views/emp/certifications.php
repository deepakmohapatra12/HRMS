<br>
<div class="row">
    <div class="col-md-12">
        <div class="panel panel-info">
            <div class="panel-heading">Certifications</div>
            <div class="panel-wrapper collapse in" aria-expanded="true">
                <div class="panel-body">
                    <form action="<?php echo BASEURL;?>employee/save_employee_certificate" method="POST" class="form-horizontal">
                        <div class="form-body">
                            <div class="form-body">
                                <h3 class="box-title">Please list your certification details</h3>
                                <hr class="m-t-0 m-b-40">
                                <div class="row">
                                    <div class="col-md-12">
                                      <div class="row">
                                        <div class="col-md-4">
                                            <div class="form-group">
                                                <label class="control-label col-md-4">Name</label>
                                                <div class="col-md-8">
                                                    <input type="text" class="form-control" name="name" placeholder="Enter name" required>  </div>
                                                </div>
                                            </div>
                                            <!--/span-->
                                            <div class="col-md-4">
                                                <div class="form-group">
                                                        <label class="control-label col-md-4">Board/Society</label>
                                                    <div class="col-md-8">
                                     <input type="text"  class="form-control" name="board" placeholder="Enter Board" required> 
                                                     </div>
                                                    </div>
                                                </div>
                                                <div class="col-md-4">
                                                    <div class="form-group">
                                                        <label class="control-label col-md-4">Month/Yr</label>
                                                        <div class="col-md-8">
                                     <input type="text"  class="form-control" name="duration" placeholder="Enter duration" required> 

                                      </div>
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
                                    <th>Name</th>
                                    <th>Board</th>
                                    <th>Duration</th>
                                </tr>
                            </thead>
                            <tbody>

                                <?php
                                foreach($certification as $cert)
                                {
                                    echo "<tr>";
                                    echo "<td> $cert->cerid </td>";
                                    echo "<td> $cert->name </td>";
                                    echo "<td> $cert->board </td>";
                                    echo "<td> $cert->duration </td>";  
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




