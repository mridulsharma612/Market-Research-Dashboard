<?php include("header.php"); ?>
<?php include("dbcon.php"); ?>
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
                        <a href="new_survey.php" >New Survey</a>
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
                            <?php  rows();  ?>
                            <div>Surveys Completed</div>
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
                            <?php co();      ?>
                            <div>Closed Surveys</div>
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
            <div class="panel panel-red">
                <div class="panel-heading">
                    <div class="row">
                        <div class="col-xs-3">
                            <i class="fa fa-support fa-5x"></i>
                        </div>
                        <div class="col-xs-9 text-right">
                                <?php  in();?>
                            <div>Invoiced Surveys</div>
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
    </div>

<div class="panel panel-default">
        <div class="panel-heading">
            Report
        </div>
     <div class="panel-body">
        <div class="table-responsive">
        <table class="table table-striped table-bordered table-hover" width="100%" border="1">
  <thead><tr>
        <th>Vendor ID</th>
        <th>Survey ID</th>
        <th>Our ID</th>
        <th>Status</th>
        <th>Download</th>
    
        
      </tr>
  </thead>
  <tbody>
    
   <?php $sql = 'select * from report';
       $result = $conn->query($sql);
       while($rows = $result->fetch_assoc() ){
        echo "<tr>";
        echo "  <td>{$rows['v_id']}</td>";
        echo "  <td>{$rows['s_id']}</td>";
        echo "  <td>{$rows['a_id']}</td>";
        echo "  <td>{$rows['status']}</td>";
        echo "<td><a href=\"download.php?id={$rows['s_id']}\" class=\"btn btn-info\"> Single Report </a></td>";
       }
?>
</tbody>
</table>
</div>
<p>
<a href="alldownload.php" class="btn btn-info"> Full Report </a>
</p>
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
