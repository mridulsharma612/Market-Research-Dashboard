<?php  require_once("session.php" );?>
<?php
require_once("dbcon.php");
    
    // Lets check if our form was submitted.
    if (isset($_POST['submit'])) {
        $s = $_POST['client_name'];
        $n = $_POST['address'];
		$test_url = $_POST['phone'];
		$c = $_POST['location'];
		$te = $_POST['remarks'];

        // continuing setting other variables from your form element
        // Add the rest 
      
        //
        // now lets write our query  
        $sql_query = $conn->query("INSERT INTO client(client_name,address,phone,location,remarks) values('$s', '$n','$test_url','$c','$te')");

        
        if ($sql_query == true) {
            echo '<script type="text/javascript">alert("Your data has been uploaded.."); </script>';
            
        } else {
            echo '<script type="text/javascript">alert("Failed ."); </script>';       
        }
    }

//$datetime = date_create()->format('d-m-Y');
?>


<?php include("header.php"); ?>

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
                        <a href="add_client.php"  class="alert alert-success">Add Clients</a>
                        <a href="client_list.php">Clients List</a>
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
</nav>

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
                            <div>Surveys Closed</div>
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
            Add a New Client
        </div>
        <div class="table-responsive">
            <table class="table table-striped table-bordered table-hover">
                <thead>
                    <tr>
<!--                        <th>Survey ID</th>-->
                        <th>Client Name</th>
                        <th>Address </th>
                        <th>Phone</th>
                        <th>Location</th>
                        <th>Remarks</th>


                    </tr>
                </thead>
                <tbody>
                        <tr class="success">
    
                         <form method="post" >
                            <td><input type="text" name="client_name" required></td>
                            <td><input type="text" name="address" ></td>
                            <td><input type="text" name="phone" ></td>
                            <td><input type="text"name="location" ></td>
                            <td><input type="text" name="remarks"></td>
							<tr>
							 <td><input type="submit" name="submit" placeholder="submit"></td>
                            </form>
                        </tr>
                    
                </tbody>
            </table>
        </div>

    </div>

</div>



<div class="panel-footer">
    <div class="text-center">
        <?php echo date('Y'); ?>, &copy;
        <?php echo "$copyright"; ?>
    </div>
</div>


<!-- /#wrapper -->

<!-- jQuery -->
<link rel="stylesheet" href="//cdnjs.cloudflare.com/ajax/libs/timepicker/1.3.5/jquery.timepicker.min.css">
<script src="./vendor/jquery/jquery.min.js"></script>
<script src="./jquery.ui.timepicker.js"></script>
<link rel="stylesheet" href="//cdnjs.cloudflare.com/ajax/libs/timepicker/1.3.5/jquery.timepicker.min.css">

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

