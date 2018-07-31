<?php $conn=mysqli_connect("localhost","root","","dashboard"); ?>

<?php include("header.php");?>

<?php
if($_POST)
{
print_r($_POST['submit']);
   // $survey=$_POST['survey'];
   $name=$_POST['name'];
   // $live=$_POST['live'];
   // $test=$_POST['test'];
   // $cost=$_POST['cost'];
   // $time=$_POST['time'];
   // $incedence=$_POST['incedence'];
   // $complete=$_POST['complete'];
   // $endurl=$_POST['endurl'];
   // $credate=$_POST['credate'];
   // $cretime=$_POST['cretime'];
   // $enddate=$_POST['enddate'];
   // $endtime=$_POST['endtime'];
   // $remarks=$_POST['remarks'];
   // $status=$_POST['status'];
$query=mysql_query("insert into testing(name)values('$name')");
if($query)
 {
   echo "contact inserted"; 
 } else {
   echo "ERROR";
 }   
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
                        <a href="new_survey.php" class="alert alert-success">New Survey</a>
                    </li>
                    <li>
                        <a href="morris.html">Survey List</a>
                    </li>

                </ul>
                <!-- /.nav-second-level -->
            </li><br>
            <li>
                <a href="tables.html"><i class="fa fa-table fa-fw"></i> Tables</a>
            </li>
            <li>
                <a href="forms.html"><i class="fa fa-edit fa-fw"></i> Forms</a>
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
                                  <div class="huge">26</div>
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
                                  <div class="huge">124</div>
                                  <div>InCompleted Surveys</div>
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
                                  <div class="huge">13</div>
                                  <div>Support Tickets!</div>
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
              Add a New Survey
			  </div>
              <div class="table-responsive">
					<table class="table table-striped table-bordered table-hover">
                                    <thead>
                                        <tr>
                                            <th>Survey ID</th>
                                            <th>Survey Name</th>
                                            <th>Client Live URL </th>
                                            <th>Client Test URL</th>
                                            <th>Cost/Interview</th>
                                            <th>Time Period</th>
                                            <th>Incedence Rate</th>
                                            <th>Number of Completes</th>
                                            <th>End URLS</th>
                                            <th>Creation Date</th>
                                            <th>Creation Time</th>
                                            <th>End Date</th>
                                            <th>End Time</th>
                                            <th>Remarks</th>
                                            <th>Status</th>

                                        </tr>
                                    </thead>
                      <tbody><tr>
                                        <tr class="success">
                                          <td><input name="survey" type="text" disabled="disabled"></td>
                                          <td><input name="name" type="text" required></td>
                                            <td><input name="live" type="text"></td>
                                            <td><input name="test" type="text"></td>
                                            <td><input name="cost" type="text"></td>
                                            <td><input name="time" type="text"></td>
                                            <td><input name="incedence" type="text"></td>
                                            <td><input name="completes" type="text"></td>
                                            <td><input name="endurl" type="text" disabled="disabled"></td>
                                            <td><input name="credate" type="text" id="date" disabled="disabled"></td>
                                            <td><input name="cretime" type="time" disabled="disabled"></td>
                                            <td><input name="enddate" type="text" disabled="disabled"></td>
                                            <td><input name="endtime" type="text" disabled="disabled"></td>
                                            <td><input name="remarks" type="textarea"></td>
                                            <td><input name="status" type="text"></td>
                                            

						</tr>
						</tr>
                     	<tr>
							<td><input type="button" name="submit" value="submit"></td>
                     	</tr>
                      </tbody>
                                </table>
</div>

            </div>

          </div>


          </div>


          <div class="panel-footer">
            <div class="text-center">
              <?php echo date('Y'); ?>, &copy; <?php echo "$copyright"; ?>
            </div>
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
   
  </body>

  </html>
