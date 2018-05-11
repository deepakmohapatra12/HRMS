 <style type="text/css">
        .main-section{
  width: 300px;
  position: fixed;
  right:50px;
  bottom:-350px;
}
.first-section:hover{
  cursor: pointer;
}
.open-more{
  bottom:0px;
  transition:2s;
}
.border-chat{
  border:1px solid #FD8468;
  margin: 0px;
}
.first-section{
  background-color:#FD8468;
}
.first-section p{
  color:#fff;
  margin:0px;
  padding: 10px 0px;
}
.first-section p:hover{
  color:#fff;
  cursor: pointer;
}
.right-first-section{
   text-align: right;
}
.right-first-section i{
  color:#fff;
  font-size: 15px;
  padding: 12px 3px;
}
.right-first-section i:hover{
  color:#fff;
}
.chat-section ul li{
  list-style: none;
  margin-top:10px;
  position: relative;
}
.chat-section{
  overflow-y:scroll;
  height:300px;
}
.chat-section ul{
  padding: 0px;
}
.left-chat img,.right-chat img{
  width:50px;
  height:50px;
  float:left;
  margin:0px 10px;
}
.right-chat img{
  float:right;
}
.second-section{
  padding: 0px;
  margin: 0px;
  background-color: #F3F3F3;
  height: 300px;
}
.left-chat,.right-chat{
  overflow: hidden;
}
.left-chat p,.right-chat p{
  background-color:#FD8468;
  padding: 10px;
  color:#fff;
  border-radius: 5px; 
  float:left;
  width:60%;
  margin-bottom:20px;
}
.left-chat span,.right-chat span{
  position: absolute;
  left:70px;
  top:60px;
  color:#B7BCC5;
}
.right-chat span{
  left:45px;
}
.right-chat p{
  float:right;
  background-color: #FFFFFF;
  color:#FD8468;
}
.third-section{
  border-top: 1px solid #EEEEEE;
}
.text-bar input{
  width:90%;
  margin-left:-15px;
  padding:10px 10px;
  border:1px solid #fff;
}
.text-bar a i{
  background-color:#FD8468;
  color:#fff;
  width:30px;
  height:30px;
  padding:7px 0px;
  border-radius: 50%;
  text-align: center;
}
.left-chat:before{
  content: " ";
  position:absolute;
  top:0px;
  left:55px;
  bottom:150px;
  border:15px solid transparent;
  border-top-color:#FD8468; 
}
.right-chat:before{
  content: " ";
  position:absolute;
  top:0px;
  right:55px;
  bottom:150px;
  border:15px solid transparent;
  border-top-color:#fff; 
}

ul label
{
    padding-left:5px;
}
 </style>
 </div>
            <!-- /.container-fluid -->
            <footer class="footer text-center"> 2018 &copy; Infocampus Logics Pvt Ltd </footer>
        </div>
        <!-- /#page-wrapper -->
    </div>
	
	<script src="<?php echo BASEURL; ?>plugins/bower_components/jquery/dist/jquery.min.js"></script>
    <!-- Bootstrap Core JavaScript -->
    <script src="<?php echo BASEURL; ?>bootstrap/dist/js/bootstrap.min.js"></script>
    <!-- Menu Plugin JavaScript -->
    <script src="<?php echo BASEURL; ?>plugins/bower_components/sidebar-nav/dist/sidebar-nav.min.js"></script>
    <!--slimscroll JavaScript -->
    <script src="<?php echo BASEURL; ?>js/jquery.slimscroll.js"></script>
    <!--Wave Effects -->
    <script src="<?php echo BASEURL; ?>js/waves.js"></script>
    <!-- Custom Theme JavaScript -->
    <script src="<?php echo BASEURL; ?>js/custom.min.js"></script>
    <script src="<?php echo BASEURL; ?>js/jasny-bootstrap.js"></script>
	 <script src="<?php echo BASEURL; ?>plugins/bower_components/jquery-datatables-editable/jquery.dataTables.js"></script>
    <script src="<?php echo BASEURL; ?>plugins/bower_components/datatables/dataTables.bootstrap.js"></script>
    <script src="<?php echo BASEURL; ?>plugins/bower_components/tiny-editable/mindmup-editabletable.js"></script>
    <script src="<?php echo BASEURL; ?>plugins/bower_components/tiny-editable/numeric-input-example.js"></script>
    <script>
    $('#mainTable').editableTableWidget().numericInputExample().find('td:first').focus();
    $('#editable-datatable').editableTableWidget().numericInputExample().find('td:first').focus();
    $(document).ready(function() {
        $('#editable-datatable').DataTable();
    });
    </script>
    <script type="text/javascript">
        $(document).ready(function(){
        $(".left-first-section").click(function(){
            $('.main-section').toggleClass("open-more");
        });
    });
    $(document).ready(function(){
        $(".fa-minus").click(function(){
            $('.main-section').toggleClass("open-more");
        });
    });
    </script>

    <!-- Start of LiveChat (www.livechatinc.com) code -->
<div class="main-section">
    <div class="row border-chat">
        <div class="col-md-12 col-sm-12 col-xs-12 first-section">
            <div class="row">
                <div class="col-md-8 col-sm-6 col-xs-6 left-first-section">
                    <p>Chat</p>
                </div>
                <div class="col-md-4 col-sm-6 col-xs-6 right-first-section">
                    <a href="#"><i class="fa fa-minus" aria-hidden="true"></i></a>
                    <a href="#"><i class="fa fa-clone" aria-hidden="true"></i></a>
                    <a href="#"><i class="fa fa-times" aria-hidden="true"></i></a>
                </div>
            </div>
        </div>
    </div>
    <div class="row border-chat">
        <div class="col-md-12 col-sm-12 col-xs-12 second-section">
            <div class="chat-section">
            
 <?php if($this->session->userdata("userid")!==""){
 echo "<ul>
 <label>Name</label>
    <input type='text' class='form-control input-sm'>
    <br>
     <label>Email</label>
    <input type='email' class='form-control input-sm'>
    <br>
     <label>Mobile No.</label>
    <input type='number' class='form-control input-sm'>

 </ul>";
        }else {?>
            <ul>
                    <li>
                        <div class="left-chat">
                            <img src="/demo/man01.png">
                            <p>Lorem ipsum dolor sit ameeserunt.
                            </p>
                            <span>2 min</span>
                        </div>
                    </li>
                    <li>
                        <div class="right-chat">
                            <img src="/demo/man02.png">
                            <p>Lorem ipsum dolor sit ameeserunt.</p>
                            <span>2 min</span>
                        </div>
                    </li>
                    <li>
                        <div class="left-chat">
                            <img src="/demo/man01.png">
                            <p>Lorem ipsum dolor sit ameeserunt.</p>
                            <span>2 min</span>
                        </div>
                    </li>
                    <li>
                        <div class="right-chat">
                            <img src="/demo/man02.png">
                            <p>Lorem ipsum dolor sit ameeserunt.</p>
                            <span>2 min</span>
                        </div>
                    </li>
                    <li>
                        <div class="left-chat">
                            <img src="/demo/man01.png">
                            <p>Lorem ipsum dolor sit ameeserunt.</p>
                            <span>2 min</span>
                        </div>
                    </li>
                    <li>
                        <div class="right-chat">
                            <img src="/demo/man02.png">
                            <p>Lorem ipsum dolor sit ameeserunt.</p>
                            <span>2 min</span>
                        </div>
                    </li>
                    <li>
                        <div class="left-chat">
                            <img src="/demo/man01.png">
                            <p>Lorem ipsum dolor sit ameeserunt.</p>
                            <span>2 min</span>
                        </div>
                    </li>
                    <li>
                        <div class="right-chat">
                            <img src="/demo/man02.png">
                            <p>Lorem ipsum dolor sit ameeserunt.</p>
                            <span>2 min</span>
                        </div>
                    </li>
                </ul>
        <?php }?>
        </div>
    </div>
    <div class="row border-chat">
        <div class="col-md-12 col-sm-12 col-xs-12 third-section">
            <div class="text-bar">
                <input type="text" placeholder="Write messege"><a href="#"><i class="fa fa-arrow-right" aria-hidden="true"></i></a>
            </div>
        </div>
    </div>
</div>                  
<!-- End of LiveChat code -->
</body>
</html>
