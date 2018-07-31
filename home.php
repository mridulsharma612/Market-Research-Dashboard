<?php

	require_once("session.php");

	require_once("class.user.php");
	$auth_user = new USER();


	$user_id = $_SESSION['user_session'];

	$stmt = $auth_user->runQuery("SELECT * FROM users WHERE user_id=:user_id");
	$stmt->execute(array(":user_id"=>$user_id));

	$userRow=$stmt->fetch(PDO::FETCH_ASSOC);

?>
    <?php include("header.php");?>
    <?php include("dbcon.php");?>

    <!-- /.navbar-top-links -->

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
                    <a href="home.php"><i class="fa fa-dashboard fa-fw"></i> Dashboard</a><br>
                </li>
                <li>
                    <a href=""><i class="fa fa-bar-chart-o fa-fw"></i> Survey<span class="fa arrow"></span></a>
                    <ul class="nav nav-second-level">
                        <li>
                            <a href="new_survey.php">New Survey</a>
                            <a href="add_client.php">Add Clients</a>
                            <a href="client_list.php">Client List</a>
                        </li>
                        <li>
                            <a href="survey_list.php">Survey List</a>
                        </li>

                    </ul>
                    <!-- /.nav-second-level -->
                </li><br>
                <li>
                     <a href="add_vendor.php"><i class="fa fa-table fa-fw"></i> Add Vendor</a>
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
                                <div>Surveys Open</div>
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
                                <div>Closed Surveys</div>
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
        <!-- /.row -->
        <div class="row">
            <div class="col-lg-10">
                <div class="panel panel-default">
                    <div class="panel-heading">
                        <i></i> <b>Surveys Currently Open</b>

                    </div>
                    <!-- /.panel-heading -->
                    <div class="panel-body">
                        <div id="table-responsive">
                            <table class="table table-striped table-bordered table-hover">
                                <thead>

                                    <tr>
                                        <th>Survey ID</th>
                                        <th>Survey Name</th>
                                        <th>Survey Completed</th>
                                        <th>Cost / Interview</th>
                                        <th>FOI</th>
                                        <th>Incidence Rate</th>
                                        <th>Creation Date</th>
                                        <th>End Date</th>
                                        <th>Remarks</th>
                                        <!--                                            <th>Cost Ratio</th>-->
                                        <th>Status</th>

                                    </tr>
                                </thead>
                                <tbody>
                                    <?php 
$sql = "SELECT * from new_survey WHERE status LIKE 'open%'";
       $result = $conn->query($sql);
    while($rows = $result->fetch_assoc() ){
            echo
            "<tr class='success'>
              <td>{$rows['survey_id']}</td>
              <td>{$rows['survey_name']}</td>
             <td> {$rows['number_of_completes']}</td>
             <td> {$rows['cost_or_nterview']}</td>
             <td>{$rows['time_period']}</td>
             <td>".(is_numeric($rows['incidence_rate']) ? $rows['incidence_rate'].'%': '0')."</td>
             <td>{$rows['creation_date']}</td>
             <td>{$rows['end_date']}</td>
             <td>{$rows['remarks']}</td>
             <td>{$rows['status']}</td>
            </tr>\n";
          }
$conn->close();
                
?>

                                </tbody>
                            </table>
                        </div>
                    </div>
                    <!-- /.panel-body -->
                </div>
            </div>
        </div>
                <!-- /.panel -->
                <div class="row">
                    <div class="col-lg-10">
                        <div class="panel panel-default">
                            <div class="panel-heading">
                                <i></i><b>Surveys Closed</b>

                            </div>
                            <!-- /.panel-heading -->
                            <div class="panel-body">
                                <div class="table-responsive">
                                    <table class="table table-bordered table-hover table-striped">
                                        <thead>
                                            <tr>
                                                <th>Survey ID</th>
                                                <th>Survey Name</th>
                                                <th>Survey Completed</th>
                                                <th>Cost / Interview</th>
                                                <th>Time Period</th>
                                                <th>Creation Date</th>
                                                <th>End Date</th>
                                                <th>Remarks</th>
                                                <!--                                            <th>Cost Ratio</th>-->
                                                <th>Status</th>

                                            </tr>
                                        </thead>
                                        <tbody>
                                            <?php $conn = new mysqli("localhost", "root", "", "probiqgr_dashboard");
     $sql = "SELECT * from new_survey WHERE status LIKE 'close%'";
       $result = $conn->query($sql);
    while($rows = $result->fetch_assoc() ){
            echo
            "<tr class='danger'>
              <td>{$rows['survey_id']}</td>
              <td>{$rows['survey_name']}</td>
             <td> {$rows['number_of_completes']}</td>
             <td> {$rows['cost_or_nterview']}</td>
             <td>{$rows['time_period']}</td>
             <td>{$rows['creation_date']}</td>
             <td>{$rows['end_date']}</td>
             <td>{$rows['remarks']}</td>
             <td>{$rows['status']}</td>
            </tr>\n";
          }
$conn->close();
                
?>
                                        </tbody>
                                    </table>
                                </div>
                                <!-- /.table-responsive -->
                            </div>
                        </div>
                        <!-- /.col-lg-8 (nested) -->
                    </div>
                    <!-- /.row -->
                </div>
                <!-- /.panel-body -->
            </div>
            <!-- /.panel -->
            <!-- /.panel -->
        
        <!-- /.col-lg-8 -->

        <!-- /.col-lg-4 -->

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
