  <br>
  <div class="row" id="details">
            <div class="col-sm-12">
              <div class="panel panel-info">
                <div class="panel-heading text-center">Employee History</div>
                 <div class="panel-wrapper collapse in" aria-expanded="true">
                    <div class="panel-body">                      <table class="table table-bordered">
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





  <div class="row" id="details">
            <div class="col-sm-12">
              <div class="panel panel-info">
                <div class="panel-heading text-center">Employee Certificate</div>
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


  <div class="row" id="details">
            <div class="col-sm-12">
              <div class="panel panel-info">
                <div class="panel-heading text-center">Employee Education</div>
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


   <div class="row" id="details">
            <div class="col-sm-12">
              <div class="panel panel-info">
                <div class="panel-heading text-center">Employee Reference</div>
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












