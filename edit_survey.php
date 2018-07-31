<?php include("header.php");?>
<?php
require_once("dbcon.php");?>
<?php
if(isset($_GET['id']))
{
$sql_query = ("SELECT * from new_survey WHERE survey_id=".$_GET['id']);

$result = $conn->query($sql_query);
    while($rows = $result->fetch_assoc()){
        $s_id = $rows['survey_id'];
        $s = $rows['survey_name'];
        $n = $rows['client_live_url'];
	$test_url = $rows['client_test_url'];
	$c = $rows['cost_or_nterview'];
	$te = $rows['time_period'];
	$rate = $rows['incidence_rate'];
	$completes = $rows['number_of_completes'];
        $da = $rows['creation_date'];
        $e = $rows['end_date'];
	$re = $rows['remarks'];
	$sa = $rows['status'];
    }
}
?>
<!DOCTYPE>
<html>

<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>


	<!-- Bootstrap Core CSS -->
	<link href="./vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

	<!-- MetisMenu CSS -->
	<link href="./vendor/metisMenu/metisMenu.min.css" rel="stylesheet">

	<!-- Custom CSS -->
	<link href="./dist/css/sb-admin-2.css" rel="stylesheet">

	<!-- Morris Charts CSS -->
	<link href="./vendor/morrisjs/morris.css" rel="stylesheet">

	<!-- Custom Fonts -->
	<link href="./vendor/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">

</head>

<body>
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
                             <a href="add_client.php">Add Client</a>
                            <a href="client_list.php">Clients List</a>
						</li>
						<li>
							<a href="survey_list.php">Survey List</a>
						</li>

					</ul>
					<!-- /.nav-second-level -->
				</li><br>
				<li>
				 <a href="add_vendor.php"><i class="fa fa-table fa-fw"></i> Add Vendoor</a>
                    <a href="vendor_list.php">Vendor List</a>
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
                    <h1 class="page-header">Edit Survey</h1>
                </div>
 </div>
        
             <div class="panel panel-default">
            <div class="panel-heading">
              Edit Survey
                 </div>
			  <div class="container-fluid">
			  <div class="form-group">
			  <br>            
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
                        <th>End Date</th>
                        <th>Remarks</th>
                        <th>Status</th>
        
                    </tr>
                </thead>
                <tbody>
                <form method="post">
                            
                            <td><input type="text" name="survey_id" value="<?php echo $s_id;?>" disabled></td>
                            <td><input type="text" name="survey_name" value="<?php echo $s;?>"></td>
                            <td><input type="text" name="client_live_url" value="<?php echo $n;?>"></td>
                            <td><input type="text" name="client_test_url" value="<?php echo $test_url;?>"</td>
                            <td><input type="text"name="cost_or_nterview" value="<?php echo $c;?>"</td>
                            <td><input type="text" name="time_period" value="<?php echo $te;?>"></td>
                            <td><input type="text" name="incidence_rate" value="<?php echo $rate;?>"></td>
                            <td><input type="text" name="number_of_completes" value="<?php echo $completes;?>"></td>
                            <td><textarea rows="5" cols="50" name="end_urls" id="end_urls" disabled="disabled" multiple></textarea></td>
                            <td><input type="date" id="date" name="creation_date" value="<?php echo $da;?>"></td>
                            <td><input type="date" id="date" name="end_date" value="<?php echo $e;?>"></td>
                             <script>
                                 document.getElementById('end_urls').value = "dashboard.probityresearch.com/survey_end_completed.php?id=&s_id= dashboard.probityresearch.com/survey_end_terminated.php?id=&s_id=                  dashboard.probityresearch.com/survey_end_quota.php?id=&s_id=";
      
                             </script>
                            <td><textarea name="remarks" value="<?php echo $re;?>"></textarea></td>
                            <td><select name="status">
                                <option value="Open">Open</option>
                                <option value="Close">Close</option>
                                <option value="Invoice">Invoice</option>
                                
                                </select></td>
							<tr>
                                <td><input type="hidden" name="survey_id" value=<?php echo $_GET['id'];?></td>
                                <td><input type="submit" name="update" value="update"/></td>
                    </tr>
                    </form>
    
   <?php
    if(isset($_POST['update'])){
        
//      $s_id = $_POST['survey_id'];
        $s = $_POST['survey_name'];
        $n = $_POST['client_live_url'];
	$test_url = $_POST['client_test_url'];
	$c = $_POST['cost_or_nterview'];
	$te = $_POST['time_period'];
	$rate = $_POST['incidence_rate'];
	$completes = $_POST['number_of_completes'];
        $da = $_POST['creation_date'];
        $e = $_POST['end_date'];
	$re = $_POST['remarks'];
	$sa = $_POST['status'];
        
    $sql_query = $conn->query("UPDATE new_survey SET survey_name='$s', client_live_url='$n',client_test_url='$test_url', cost_or_nterview='$c', time_period='$te', incidence_rate='$rate', number_of_completes='$completes', creation_date='$da', end_date='$e', remarks='$re', status='$sa' WHERE survey_id='$s_id'");
        
        
    
    if ($sql_query == true) {
            echo '<script type="text/javascript">alert("Your data has been uploaded.."); 
                        window.location.assign("survey_list.php");
</script>';
        } else {
            echo '<script type="text/javascript">alert("Failed ."); </script>';       
        }
}

?>
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
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



