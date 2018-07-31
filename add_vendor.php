<?php 
 require_once("session.php");?>
<?php   require_once("dbcon.php");
 
if (isset($_POST['submit'])) {
        $v_id = $_POST['vendor_id'];
	$v_name = $_POST['vendor_name'];
	$c_i = $_POST['cost_interview'];
	$c_date = $_POST['allotment_date'];
	$v_complete = $_POST['number_complete'];
        $v_message = $_POST['message'];
        $remark_v = $_POST['remarks'];
        $url_v = $_POST['complete_end_url'];
	$out_url_v = $_POST['screen_out_url'];
	$q_url_v = $_POST['quota_url'];
	$stat_v = $_POST['vendor_survey_status'];
        $s = $_POST['survey_id'];        
    
$query = "INSERT INTO `vendors` (vendor_id,vendor_name,cost_interview,allotment_date,number_complete,message,remarks,complete_end_url,screen_out_url,quota_url,vendor_survey_status,survey_id) VALUES('$v_id','$v_name','$c_i','$c_date','$v_complete','$v_message','$remark_v','$url_v','$out_url_v','$q_url_v','$stat_v',(Select survey_id from new_survey where survey_id='$s'))";

     $sql_query = $conn->query($query);

  
if ($sql_query == true) {
            echo '<script type="text/javascript">alert("Your data has been uploaded.."); </script>';
            
        } else {
            echo '<script type="text/javascript">alert("Failed ."); </script>';       
        }
    }



    
?>
<?php include("header.php"); ?>
<?php include("functions.php"); ?>

<div class="navbar-default sidebar" role="navigation">
    <div class="sidebar-nav navbar-collapse">
        <ul class="nav" id="side-menu">
            <li class="sidebar-search">
                <div class="input-group custom-search-form">
                    <input type="text" class="form-control" placeholder="Search...">
                    <span class="input-group-btn">
                    <button class="btn btn-default" type="button">
                        <i class="fa fa-search"></i>
                    </button>
                </span>
                </div>


            </li>
            <li>
                <a href="index.php"><i class="fa fa-dashboard fa-fw"></i> Dashboard</a><br>
            </li>
            <li>
                <a href="#"><i class="fa fa-bar-chart-o fa-fw"></i> Survey<span class="fa arrow"></span></a>
                <ul class="nav nav-second-level">
                    <li>
                        <a href="new_survey.php">New Survey</a>
                        <a href="add_client.php">Add Clients</a>
                        <a href="client_list.php">Clients List</a>
                    </li>
                    <li>
                        <a href="survey_list.php">Survey List</a>
                    </li>

                </ul>
                <!-- /.nav-second-level -->
            </li><br>
            <li>
                <a href="add_vendor.php" class="alert alert-success"><i class="fa fa-table fa-fw"></i>Add Vendor</a>
                 <a href="vendor_list.php">Vendor List</a>
                 <a href="report.php">Report</a>
            </li>
            <li>
                <!-- /.nav-second-level -->
            </li>
        </ul>
    </div>
    <!-- /.sidebar-collapse -->
</div>
<!-- /.navbar-static-side -->
<nav>
    <div id="page-wrapper">
        <div class="row">
            <div class="col-lg-8  ">
                <h1 class="page-header">Dashboard</h1>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-3 col-md-6">
                <div class="panel panel-primary">
                    <div class="panel-heading">
                        <div class="row">
                            <div class="col-xs-3">
                                <i class="fa fa-check-circle fa-5x"></i>
                            </div>
                            <div class="col-xs-9 text-right">
                                <?php rows();?>
                                <div>Surveys Completed</div>
                            </div>
                        </div>
                    </div>
                    
                        <div class="panel-footer">
                            <span class="pull-left">View Details</span>
                            <span class="pull-right"><i class="fa fa-arrow-circle-right"></i></span>
                            <div class="clearfix"></div>
                        </div>
                    </a>
                </div>
            </div>
            <div class="col-lg-3 col-md-6">
                <div class="panel panel-green">
                    <div class="panel-heading">
                        <div class="row">
                            <div class="col-xs-3">
                                <i class="fa fa-tasks fa-5x"></i>
                            </div>
                            <div class="col-xs-9 text-right">
                                <div class="huge">New</div>
                                <div>Survey</div>
                            </div>
                        </div>
                    </div>
                    <a href="new_survey.php">
                        <div class="panel-footer">
                            <span class="pull-left">Create New Survey</span>
                            <span class="pull-right"><i class="fa fa-arrow-circle-right"></i></span>
                            <div class="clearfix"></div>
                        </div>
                    </a>
                </div>
            </div>
            <div class="col-lg-3 col-md-6">
                <div class="panel panel-yellow">
                    <div class="panel-heading">
                        <div class="row">
                            <div class="col-xs-3">
                                <i class="fa fa-ban fa-5x"></i>
                            </div>
                            <div class="col-xs-9 text-right">
                                <?php co();?>
                                <div>InCompleted Surveys</div>
                            </div>
                        </div>
                    </div>
                     
                
                   
                        <div class="panel-footer">
                            <span class="pull-left">View Details</span>
                            <span class="pull-right"><i class="fa fa-arrow-circle-right"></i></span>
                            <div class="clearfix"></div>
                        </div>
                    </a>
                </div>
            </div>
        </div>
        <div class="panel panel-default">
            <div class="panel-heading">
                Add Vendor
            </div>

            <div class="panel-body">
                <div class="table-responsive">

                    <!-- form HTML goes here -->
                    <table class="table table-striped table-bordered table-hover">
                        <thead>
                            <tr>
                                <th>Survey ID</th>
                                <th>Vendor ID</th>
                                <th>Vendor Name</th>
                                <th>Cost/Interview</th>
                                <th>Allotment Date</th>
                                <th>Number of Completes</th>
                                <th>Message</th>
                                <th>Replica URL</th>
                                <th>Remarks</th>
                                <th>Complete Survey URL</th>
                                <th>ScreenOut Survey URL</th>
                                <th>Quota Full Survey URL</th>
                                <th>Vendor Survey Status</th>



                            </tr>
                        </thead>
                        <tbody>
                            <tr class="success">
                                <form method="post">
                                    <td> <?php 
                                    $conn =mysqli_connect("localhost","root","","probiqgr_dashboard");
                                    $sql = "SELECT survey_id from new_survey";
       $result = $conn->query($sql);
                          echo"      <select name=\"survey_id\" id=\"survey_id\" >";
    while($rows = $result->fetch_assoc() ){
                    echo "<option value'" .$rows['survey_id']."'>". $rows['survey_id'] . "</option>";
    }
                                echo"</select>";
                              ?>  </td>
                               

                                    <td><input type="text" name="vendor_id" required></td>
                                    <td><input type="text" name="vendor_name" required></td>
                                    <td><input type="text" name="cost_interview"></td>
                                    <td><input type="date" name="allotment_date"></td>

                                    <td><input type="text" name="number_complete"></td>
                                    <td><input type="text" name="message"></td>
                                    <td><textarea style="height:100px" name="replica_url" id="replica_url" disabled="disabled"></textarea></td>
                                    <script>
                                 document.getElementById('replica_url').value = "dashboard.probityresearch.com/survey_end_completed?id=&s_id=";
      
                             </script>
                                    <td><textarea name="remarks"></textarea></td>
                                    <td><input type="text" name="complete_end_url"></td>
                                    <td><input type="text" name="screen_out_url"></td>
                                    <td><input type="text" name="quota_url"></td>
                                    <td><select name="vendor_survey_status">
                                        
                                        
                                        <option value="Open">Open</option>
                                        <option value="Close">Close</option>
                                        
                                        </select></td>
                                    <tr>
                                        <td><input type="submit" name="submit" placeholder="submit"></td>
                                        <?php
				echo"     <td><a href=\"vendor_list.php?id=\">Replica URL Generate</td>";
                                    ?></tr>
                                </form>
                            </tr>
                        </tbody>
                    </table>
                </div>





            </div>
        </div>
    </div>
    <!-- /#page-wrapper -->
    <div class="panel-footer">
        <div class="text-center">
            <?php echo date('Y'); ?>, &copy;
            <?php echo "$copyright"; ?>
        </div>
    </div>


    <!-- /#wrapper -->

    <!-- jQuery -->
    <script src="./vendor/jquery/jquery.min.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="./vendor/bootstrap/js/bootstrap.min.js"></script>
    <!--    <script src="./data/select/js/bootstrap-select.js"></script>-->

    <!-- Metis Menu Plugin JavaScript -->
    <script src="./vendor/metisMenu/metisMenu.min.js"></script>

    <!-- Morris Charts JavaScript -->
    <script src="./vendor/raphael/raphael.min.js"></script>
    <script src="./vendor/morrisjs/morris.min.js"></script>
    <script src="./data/morris-data.js"></script>

    <!-- Custom Theme JavaScript -->
    <script src="./dist/js/sb-admin-2.js"></script>