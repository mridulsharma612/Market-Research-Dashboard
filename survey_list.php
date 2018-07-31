<?php  require_once("session.php" );?>

<?php include("header.php"); require_once("dbcon.php");?>

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
                            <?php  
$sql = "SELECT COUNT(status) as count from new_survey WHERE Status LIKE 'open%'";
       $result = $conn->query($sql);
    while($rows = $result->fetch_assoc() )
         echo "<div class='huge'>{$rows['count']}</div>";
        ?>
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
                            <?php  

$sql = "SELECT COUNT(status) as count from new_survey WHERE Status LIKE 'close%'";
       $result = $conn->query($sql);
    while($rows = $result->fetch_assoc() )
         echo "<div class='huge'>{$rows['count']}</div>";
        ?>
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
        <div class="col-lg-3 col-md-6">
            <div class="panel panel-red">
                <div class="panel-heading">
                    <div class="row">
                        <div class="col-xs-3">
                            <i class="fa fa-support fa-5x"></i>
                        </div>
                        <div class="col-xs-9 text-right">
                            <?php  
$sql = "SELECT COUNT(status) as count from new_survey WHERE Status LIKE 'invoice%'";
       $result = $conn->query($sql);
    while($rows = $result->fetch_assoc() )
         echo "<div class='huge'>{$rows['count']}</div>";
        ?>
                            <div>Invoiced Surveys</div>
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
            Survey List
        </div>

    <div class="panel-body">
        <div class="table-responsive">
        <table class="table table-striped table-bordered table-hover" width="100%" border="1">
  <thead><tr>
    <th>Survey ID</th>
    <th>Client Name</th>
    <th>Survey Name</th>
      <th>Client Live URL</th>
      <th>Client Test URL</th>
      <th>Completed</th>
      <th>InCompleted</th>
      <th>Quota Full</th>
      <th>Time Period</th>
      <th>Creation Date</th>
      <th>End Date</th>
      <th>Status</th>
      <th>Edit</th>
      
      
  </tr>
  </thead>
  <tbody>
<?php 

$a = bin2hex(random_bytes(10));


$sql = "SELECT * from new_survey where survey_id order by survey_id desc";
       $result = $conn->query($sql);
    while($rows = $result->fetch_assoc() ){
            echo "<tr>";
            echo "  <td>{$rows['survey_id']}</td>";
            echo "  <td>{$rows['client_name']}</td>";
        echo "<td>{$rows['survey_name']}</td>";
        echo "<td> <a href=". $rows['client_live_url']  .  urlencode($a) . "&s_id=" . $rows['survey_id'] . " target='_blank'> Click Here </a></td>";
        echo "<td> <a href=". $rows['client_test_url']  .  urlencode($a) . "&s_id=" . $rows['survey_id'] . " target='blank'> Click Here </a></td>";
        echo"    <td>{$rows['completed']}</td>";
        echo "<td>{$rows['incompleted']}</td>";
        echo "<td>{$rows['quota_full']}</td>";
        echo" <td>{$rows['time_period']}</td>";
        echo" <td>{$rows['creation_date']}</td>";
        echo"     <td>{$rows['end_date']}</td>";
        echo"     <td>{$rows['status']}</td>";
        echo"     <td><a href=\"edit_survey.php?id={$rows['survey_id']}\">Edit</td>";
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
