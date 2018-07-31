<?php  require_once("session.php");?>

<?php include("header.php"); ?>
<?php require_once("dbcon.php"); ?>
<?php include("functions.php");?>
	
	
<?php 
    $s_d = (isset($_GET['vid']));
	$s_v_d = (isset($_GET['id']));
    $a = bin2hex(random_bytes(10));
    $sql = "SELECT client_live_url FROM new_survey WHERE survey_id='$s_v_d'";
    $result = $conn->query($sql);
    while($rows = $result->fetch_assoc() ){
    $client = $rows['client_live_url']; 
    //$file_data .= file_get_contents("$s_v_d.php");
    $filedata = '<?php 
    $a = bin2hex(random_bytes(10));
    error_reporting(0); 
include("dbcon.php"); 
$get = $_GET[\'pid\'];
$s_s= '.$s_v_d.'; 
$s_d= '.$s_d.';
$sql_query = $conn->query("INSERT INTO report (v_id,s_id,vendor,a_id) VALUE(\'$get\',\'$s_s\',\'$s_d\',\'$a\')"); if($sql_query) header("Location: '.$client.'$a'.'&s_id='.$s_v_d.'"); exit; ?>'; 
    if (file_exists($a.'.php')) unlink($a.'.php');
    file_put_contents($a.".php", $filedata);
    //$FileHandler = fopen($s_v_d."php", 'w') or die("can't open file");
    //fclose($FileHandler);
            


$d = "http://dashboard.probityresearch.com/$a.php?pid=";
$sq = "UPDATE vendors SET replica_url ='$d' WHERE vendor_id ='$s_d'";
$result = $conn->query($sq);
if(!$result)
    echo"error";
else
    echo'<script> window.location.assign("vendor_list.php");</script>';
        exit;
    }

?>

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
                        <a href="client_list.php">Client List</a>
                    </li>
                    <li>
                        <a href="survey_list.php" class="alert alert-success">Survey List</a>
                    </li>

                </ul>
                <!-- /.nav-second-level -->
            </li><br>
            <li>
                <a href="add_vendor.php"><i class="fa fa-table fa-fw"></i>Add Vendor</a>
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
        <!-- /.col-lg-12 -->
    </div>
    <!-- /.row -->
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
                            <div>Surveys Open</div>
                        </div>
                    </div>
                </div>
                <a href="">
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
                            <div>Closed Surveys</div>
                        </div>
                    </div>
                </div>
                <a href="#">
                    <div class="panel-footer">
                        <span class="pull-left">View Details</span>
                        <span class="pull-right"><i class="fa fa-arrow-circle-right"></i></span>
                        <div class="clearfix"></div>
                    </div>
                </a>
            </div>
        </div>
        <div class="col-lg-3 col-md-6">
            <div class="panel panel-red">
                <div class="panel-heading">
                    <div class="row">
                        <div class="col-xs-3">
                            <i class="fa fa-support fa-5x"></i>
                        </div>
                        <div class="col-xs-9 text-right">
                            <?php in();?>
                            <div>Invoiced Surveys</div>
                        </div>
                    </div>
                </div>
                <a href="">
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
            Survey List
        </div>

    <div class="panel-body">
        <div class="table-responsive">
        <table class="table table-striped table-bordered table-hover" width="100%" border="1">
  <thead><tr>
        <th>Vendor ID</th>
    <th>Vendor Name</th>
      <th>Cost Interview</th>
      <th>Allotment Date</th>
<!--      <th>Allotment Time</th>-->
      <th>Number of Completes</th>
      <th>Message</th>
      <th>Replica URL</th>
      <th>Remarks</th>
<!--      <th>Complete End URL</th>-->
<!--      <th>Screen Out URL</th>-->
<!--      <th>Quota Full URL</th>-->
      <th>Status</th>
      <th>Survey ID</th>
      <th>Edit</th>
      
      
      
  </tr>
  </thead>
  <tbody>
<?php

        $sql = "SELECT * from vendors";
       $result = $conn->query($sql);
    while($rows = $result->fetch_assoc() ){
            echo "<tr>";
            echo "  <td>{$rows['vendor_id']}</td>";
        echo "<td>{$rows['vendor_name']}</td>";
        echo "<td>{$rows['cost_interview']}</td>";
        echo "<td>{$rows['allotment_date']}</td>";
//        echo "<td>{$rows['allotment_time']}</td>";
        echo"<td>{$rows['number_complete']}</td>";
        echo "<td>{$rows['message']}</td>";
        echo "<td>{$rows['replica_url']}</td>";
        echo" <td>{$rows['remarks']}</td>";
//        echo" <td>{$rows['complete_end_url']}</td>";
//        echo" <td>{$rows['screen_out_url']}</td>";
//        echo" <td>{$rows['quota_full_url']}</td>";
        echo"<td>{$rows['vendor_survey_status']}</td>";
        echo "<td>{$rows['survey_id']}";
        echo "<td><a href=\"edit.php?id={$rows['vendor_id']}\">Edit</td>";
        echo     "</tr>";      
    }
$conn->close();

    
?>
        

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

<!-- Metis Menu Plugin JavaScript -->
<script src="./vendor/metisMenu/metisMenu.min.js"></script>

<!-- Morris Charts JavaScript -->
<script src="./vendor/raphael/raphael.min.js"></script>
<script src="./vendor/morrisjs/morris.min.js"></script>
<script src="./data/morris-data.js"></script>

<!-- Custom Theme JavaScript -->
<script src="./dist/js/sb-admin-2.js"></script>