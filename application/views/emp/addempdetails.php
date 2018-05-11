<br>
<div class="row">
<div class="col-md-12">
<div class="panel panel-info">
<div class="panel-heading"> New Employee Details</div>
<div class="panel-wrapper collapse in" aria-expanded="true">
<div class="panel-body">
    <form action="<?php echo BASEURL;?>employee/save_employee_info" method="POST" class="form-horizontal">
        <div class="form-body">
            <h3 class="box-title">Employment Info
                <?php echo $this->session->flashdata("msg")?>
            </h3>

            <hr class="m-t-0 m-b-10">
            <div class="row">
                <div class="col-md-4">
                    <div class="form-group">
                        <label class="control-label col-md-4">Full Name</label>
                        <div class="col-md-8">
                            <input type="hidden" name="txt_hidden" value="<?php echo $row->empid; ?>">
                            <input type="text" class="form-control" disabled="disabled" name="name" value="<?php echo $row->name; ?>" placeholder="Enter name" required>
                            

                        </div>
                    </div>
                </div>
                <!--/span-->
                <div class="col-md-4">
                    <div class="form-group">
                        <label class="control-label col-md-4">Joining Date</label>
                        <div class="col-md-8">
                            <input type="text" disabled="disabled" class="form-control" name="joining" value="<?php echo $row->joindate; ?>" placeholder="Enter Joining date">  </div>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="form-group">
                            <label class="control-label col-md-4">Designation</label>
                            <div class="col-md-8">
                                <input type="text" class="form-control" name="designation" disabled="disabled" value="<?php echo $row->designation; ?>" placeholder="Enter Designation">  </div>
                            </div>
                        </div>
                        <!--/span-->
                    </div>

                    <div class="row">
                       
                        <!--/span-->
                        <div class="col-md-4">
                            <div class="form-group">
                                <label class="control-label col-md-4">PAN No.</label>
                                <div class="col-md-8">
                                    <input type="text" class="form-control"  name="pan" value="<?php echo $row->pan; ?>"  placeholder="Enter PAN Details" required>  </div>
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="form-group">
                                    <label class="control-label col-md-4">Current City</label>
                                    <div class="col-md-8">
                                        <input type="text"  class="form-control"  name="city" value="<?php echo $row->empcity; ?>"  placeholder="Enter Location" required>  </div>
                                    </div>
                                </div>
                                <!--/span-->
                                
                                <div class="col-md-4">
                                    <div class="form-group">
                                        <label class="control-label col-md-4">DOB</label>
                                        <div class="col-md-8">
                                            <input type="text" class="form-control" name="dob" value="<?php echo $row->dob; ?>"  placeholder="Date Of Birth" required>  </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="row">
                                    <div class="col-md-4">
                                        <div class="form-group">
                                            <label class="control-label col-md-4">Blood Group</label>
                                            <div class="col-md-8">
                                                <input type="text" class="form-control" name="blood" value="<?php echo $row->blood; ?>"   placeholder="Enter Blood Group" required>  </div>
                                            </div>
                                        </div>
                                        <!--/span-->
                                        <div class="col-md-4">
                                            <div class="form-group">
                                                <label class="control-label col-md-4">Nationality</label>
                                                <div class="col-md-8">
                                                    <input type="text"  class="form-control"  name="nationality" value="<?php echo $row->nationality; ?>"  placeholder="Enter Nationality" required>  </div>
                                                </div>
                                            </div>
                                            <div class="col-md-4">
                                                <div class="form-group">
                                                    <label class="control-label col-md-4">Religion</label>
                                                    <div class="col-md-8">
                                                        <input type="text"  class="form-control"  name="religion" value="<?php echo $row->religion; ?>"  placeholder="Enter Religion" required>

                                                    </div>
                                                </div>
                                            </div>
                                            <!--/span-->
                                        </div>


                                        <div class="row">
                                            <!--/span-->
                                            <div class="col-md-4">
                                                <div class="form-group">
                                                    <label class="control-label col-md-4">Driving Liscence No.</label>
                                                    <div class="col-md-8">
                                                      <input type="text"  class="form-control"  name="drive" value="<?php echo $row->dl; ?>"  placeholder="Driving Liscense" required>  </div>
                                                  </div>
                                              </div>
                                              <div class="col-md-4">
                                                <div class="form-group">
                                                    <label class="control-label col-md-4">Date of Issue</label>
                                                    <div class="col-md-8">
                                                     <input type="text"  class="form-control" name="dlissue" value="<?php echo $row->dldateofissue; ?>"   placeholder="Date Of Issue" required>  </div>
                                                 </div>
                                             </div>
                                             <!--/span-->
                                             
                                             <div class="col-md-4">
                                                <div class="form-group">
                                                    <label class="control-label col-md-4">Place of Issue</label>
                                                    <div class="col-md-8">
                                                        <input type="text" class="form-control" name="dlplace" value="<?php echo $row->dlplaceofissue; ?>"   placeholder="Enter Place" required>  </div>
                                                    </div>
                                                </div>
                                            </div>




                                            <div class="row">
                                               
                                                <!--/span-->
                                                <div class="col-md-4">
                                                    <div class="form-group">
                                                        <label class="control-label col-md-4">Passport no</label>
                                                        <div class="col-md-8">
                                                            <input type="text"  class="form-control"  name="passport" value="<?php echo $row->passport; ?>"  placeholder="Enter Passport" required> 

                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-md-4">
                                                    <div class="form-group">
                                                        <label class="control-label col-md-4">Date of Issue</label>
                                                        <div class="col-md-8">
                                                         <input type="text"  class="form-control"  name="pissue" value="<?php echo $row->pdateofissue; ?>"  placeholder="Enter Issue" required>  </div>
                                                     </div>
                                                 </div>
                                                 <!--/span-->
                                                 
                                                 <div class="col-md-4">
                                                    <div class="form-group">
                                                        <label class="control-label col-md-4">Place Of Issue</label>
                                                        <div class="col-md-8">
                                                            <input type="text" class="form-control" name="pplace" value="<?php echo $row->pplaceofissue; ?>"  placeholder="Enter" required>  </div>
                                                        </div>
                                                    </div>
                                                </div>

                                                
                                            </div>

                                            <!--/row-->

                                            
                                            <div class="form-actions">
                                                <div class="row">
                                                    <div class="col-md-12">
                                                        <div class="row">
                                                            <div class="col-md-12 text-center">
                                                                <button type="submit" class="btn btn-info">Submit</button>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-6"> </div>
                                                </div>
                                            </div>
                                        </form>
                                    </div>


                                    <!--Adress Start-->
                                    <div class="panel-body">
                                      <form action="<?php echo BASEURL;?>employee/save_employee_address" method="POST" class="form-horizontal">

                                        <!--/row-->

                                        <hr class="m-t-0 m-b-10">


                                        <div class="form-body">
                                            <h3 class="box-title">Address</h3>
                                            <hr class="m-t-0 m-b-10">

                                            <div class="row">
                                                <div class="col-md-12">
                                                  <div class="row">
                                                    <div class="col-md-4">
                                                        <div class="form-group">
                                                            <label class="control-label col-md-4">Current Address</label>
                                                            <div class="col-md-8">
                                                             <input type="hidden" name="txt_hidden" value="<?php echo $row->empid; ?>">
                                                             <textarea class="form-control" name="caddress" placeholder="Address" required><?php echo $row->currentaddress; ?></textarea> 

                                                         </div>
                                                     </div>
                                                 </div>
                                                 <!--/span-->
                                                 <div class="col-md-4">
                                                    <div class="form-group">
                                                        <label class="control-label col-md-4">Teleohone No.</label>
                                                        <div class="col-md-8">
                                                            <input type="text"  class="form-control" name="cphone" value="<?php echo $row->phone;?>"   placeholder="Phone No." required>  </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-4">
                                                        <div class="form-group">
                                                            <label class="control-label col-md-4">Email Id</label>
                                                            <div class="col-md-8">
                                                                <input type="email"  class="form-control" name="email" value="<?php echo $row->emailid; ?>"  placeholder="Enter emailid" required>  </div>
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
                                                            <label class="control-label col-md-4">Permanent Address</label>
                                                            <div class="col-md-8">
                                                                <textarea class="form-control" name="paddress" placeholder="Permanent Address" required><?php echo $row->permanentaddress; ?></textarea> 
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <!--/span-->
                                                    <div class="col-md-4">
                                                        <div class="form-group">
                                                            <label class="control-label col-md-4">Teleohone No.</label>
                                                            <div class="col-md-8">
                                                             <input type="text"  class="form-control" name="pphone" value="<?php echo $row->permanentphone; ?>"  placeholder="Phone No." required>  </div>
                                                         </div>
                                                     </div>
                                                     <div class="col-md-4">
                                                        <div class="form-group">
                                                            <label class="control-label col-md-4">Email Id</label>
                                                            <div class="col-md-8">
                                                                <input type="email"  class="form-control" name="email" value="<?php echo $row->emailid; ?>"  placeholder="Enter emailid" required>  </div>
                                                            </div>
                                                        </div>
                                                        <!--/span-->
                                                    </div>

                                                </div>
                                            </div>

                                        </div>
                                        <div class="form-actions">
                                            <div class="row">
                                                <div class="col-md-12">
                                                    <div class="row">
                                                        <div class="col-md-12 text-center">
                                                            <button type="submit" class="btn btn-info">Submit</button>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-md-6"> </div>
                                            </div>
                                        </div>

                                        <!--primary contact start-->
                                    </form>
                                </div>


                                <div class="panel-body">
                                  <form action="<?php echo BASEURL;?>employee/save_primary_info" method="POST" class="form-horizontal">
                                    <hr class="m-t-0 m-b-10">

                                    <div class="form-body">
                                        <h3 class="box-title">Primary Contact</h3>
                                        <hr class="m-t-0 m-b-10">

                                        <div class="row">
                                            <div class="col-md-12">
                                              <div class="row">
                                                <div class="col-md-4">
                                                    <div class="form-group">
                                                        <label class="control-label col-md-4">Name</label>
                                                        <div class="col-md-8">
                                                         <input type="hidden" name="txt_hidden" value="<?php echo $row->empid; ?>">
                                                         <input type="text" class="form-control" name="name" value="<?php echo $row->primaryname?>" placeholder="Enter name" required>  </div>
                                                     </div>
                                                 </div>
                                                 <!--/span-->
                                                 <div class="col-md-4">
                                                    <div class="form-group">
                                                        <label class="control-label col-md-4">Relationship</label>
                                                        <div class="col-md-8">
                                                         <input type="text"  class="form-control" name="relation" value="<?php echo $row->primaryrelationship?>" placeholder="Relationship" required>  </div>
                                                     </div>
                                                 </div>
                                                 <div class="col-md-4">
                                                    <div class="form-group">
                                                        <label class="control-label col-md-4">Address</label>
                                                        <div class="col-md-8">
                                                         <input type="text"  class="form-control" name="address" value="<?php echo $row->primaryaddressone?>" placeholder="Address" required>  </div>
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
                                                    <label class="control-label col-md-4">City</label>
                                                    <div class="col-md-8">
                                                     <input type="text"  class="form-control" name="city" value="<?php echo $row->primarycity?>" placeholder="city" required>  
                                                 </div>
                                             </div>
                                         </div>
                                         <!--/span-->
                                         <div class="col-md-4">
                                            <div class="form-group">
                                                <label class="control-label col-md-4">Address</label>
                                                <div class="col-md-8"> <textarea style="resize: none;" class="form-control" name="secaddress" placeholder="Enter Address" required><?php echo $row->primaryaddresstwo?></textarea>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-4">
                                            <div class="form-group">
                                                <label class="control-label col-md-4">Phone</label>
                                                <div class="col-md-8">
                                                 <input type="text"  class="form-control" name="phone" value="<?php echo $row->primaryphone?>" placeholder="Phone No." required>  </div>
                                             </div>
                                         </div>
                                         <!--/span-->
                                     </div>

                                 </div>
                             </div>

                         </div>
                         
                         <div class="form-actions">
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="row">
                                        <div class="col-md-12 text-center">
                                            <button type="submit" class="btn btn-info">Submit</button>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6"> </div>
                            </div>
                        </div>

                        <!--primary cintact end-->
                    </form>
                </div>
                



                <div class="panel-body">
                  <form action="<?php echo BASEURL;?>employee/save_secondary_info" method="POST" class="form-horizontal">
                    <hr class="m-t-0 m-b-10">

                    <div class="form-body">
                        <h3 class="box-title">Secondary Contact</h3>
                        <hr class="m-t-0 m-b-10">

                        <div class="row">
                            <div class="col-md-12">
                              <div class="row">
                                <div class="col-md-4">
                                    <div class="form-group">
                                        <label class="control-label col-md-4">Name</label>
                                        <div class="col-md-8">
                                            <input type="hidden" name="txt_hidden" value="<?php echo $row->empid; ?>">
                                            <input type="text" class="form-control" name="name" value="<?php echo $row->secondaryname;?>" placeholder="Enter name" required>  </div>
                                        </div>
                                    </div>
                                    <!--/span-->
                                    <div class="col-md-4">
                                        <div class="form-group">
                                            <label class="control-label col-md-4">Relationship</label>
                                            <div class="col-md-8">
                                             <input type="text"  class="form-control" name="relation" value="<?php echo $row->secondaryrelationship;?>" placeholder="Relationship" required>  </div>
                                         </div>
                                     </div>
                                     <div class="col-md-4">
                                        <div class="form-group">
                                            <label class="control-label col-md-4">Address</label>
                                            <div class="col-md-8">
                                             <textarea class="form-control" name="address" required><?php echo $row->secondaryaddressone;?></textarea>
                                         </div>
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
                                    <label class="control-label col-md-4">City</label>
                                    <div class="col-md-8">
                                     <input type="text"  class="form-control" name="city" value="<?php echo $row->secondarycity;?>" placeholder="city" required>  
                                 </div>
                             </div>
                         </div>
                         <!--/span-->
                         <div class="col-md-4">
                            <div class="form-group">
                                <label class="control-label col-md-4">Address</label>
                                <div class="col-md-8">
                                    <textarea style="resize: none;" class="form-control" name="secaddress" placeholder="Enter Address" required><?php echo $row->secondaryaddresstwo;?></textarea>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="form-group">
                                <label class="control-label col-md-4">Phone</label>
                                <div class="col-md-8">
                                    <input type="text"  class="form-control" name="phone" value="<?php echo $row->secondaryphone;?>" placeholder="Phone No." required>  </div>
                                </div>
                            </div>
                            <!--/span-->
                        </div>

                    </div>
                </div>

            </div>
            
            <div class="form-actions">
                <div class="row">
                    <div class="col-md-12">
                        <div class="row">
                            <div class="col-md-12 text-center">
                                <button type="submit" class="btn btn-info">Submit</button>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6"> </div>
                </div>
            </div>

            <!--primary cintact end-->
        </form>
    </div>






    <div class="panel-body">
      <form action="<?php echo BASEURL;?>employee/save_personal_info" method="POST" class="form-horizontal">


        <hr class="m-t-0 m-b-10">


        <div class="form-body">
            <h3 class="box-title">Personal Information</h3>
            <hr class="m-t-0 m-b-10">

            <div class="row">
                <div class="col-md-12">
                  <div class="row">
                    
                    
                    <div class="col-md-12">
                        <div class="form-group">
                            <label class="control-label col-md-2">No.of children</label>
                            <div class="col-md-10">
                             <input type="hidden" name="txt_hidden" value="<?php echo $row->empid; ?>">
                             <input type="text"  class="form-control" name="child" value="<?php echo $row->children?>" placeholder="children" required>  </div>
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
                        <label class="control-label col-md-4">Fathers Name</label>
                        <div class="col-md-8">
                         <input type="text" class="form-control" name="fname" value="<?php echo $row->fathername?>" placeholder="Enter name">  </div>
                     </div>
                 </div>
                 <!--/span-->
                 <div class="col-md-4">
                    <div class="form-group">
                        <label class="control-label col-md-4">Profession</label>
                        <div class="col-md-8">
                         <input type="text"  class="form-control" name="fprof" value="<?php echo $row->fatherprof?>" placeholder="Profession" required>  </div>
                     </div>
                 </div>
                 <div class="col-md-4">
                    <div class="form-group">
                        <label class="control-label col-md-4">Age</label>
                        <div class="col-md-8">
                            <input type="text"  class="form-control" name="fage" value="<?php echo $row->fatherage?>"  placeholder="age" required>  </div>
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
                        <label class="control-label col-md-4">Mothers Name</label>
                        <div class="col-md-8">
                            <input type="text" class="form-control" name="mname" value="<?php echo $row->mothername?>" placeholder="Enter name">  </div>
                        </div>
                    </div>
                    <!--/span-->
                    <div class="col-md-4">
                        <div class="form-group">
                            <label class="control-label col-md-4">Profession</label>
                            <div class="col-md-8">
                              <input type="text"  class="form-control" name="mprof" value="<?php echo $row->motherprof?>" placeholder="Profession" required>  </div>
                          </div>
                      </div>
                      <div class="col-md-4">
                        <div class="form-group">
                            <label class="control-label col-md-4">Age</label>
                            <div class="col-md-8">
                                <input type="text"  class="form-control" name="mage" value="<?php echo $row->motherage?>" placeholder="age" required>  </div>
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
                        <button type="submit" class="btn btn-info">Submit</button>
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
