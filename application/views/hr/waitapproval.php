  <br>
  <div class="row">

  <?php
    foreach($approve as $app)
    {

    ?>
    <div class="col-sm-4">
      <div class="panel panel-info">
        <div class="panel-heading text-center"><?php echo $app->name?></div>
        <div class="panel-wrapper collapse in" aria-expanded="true">
            <div class="panel-body text-center">   
                <p><?php echo $app->fromdate;?></p>to
                <p><?php echo $app->todate?></p> 
                <p><span>Total</span> = &nbsp<?php echo $app->total?></p>              
            </div>
        </div>
        <div class="panel-footer text-center"><a class="btn btn-sm btn-success" href="<?php echo BASEURL;?>hr/leave_details/<?php echo $app->empid?>">Approve</a></div>
    </div>
</div>

<?php
}
?>

</div>
