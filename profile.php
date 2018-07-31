<?php
require_once("session.php" );

require_once( "class.user.php" );
$auth_user = new USER();


$user_id = $_SESSION[ 'user_session' ];

$stmt = $auth_user->runQuery( "SELECT * FROM users WHERE user_id=:user_id" );
$stmt->execute( array( ":user_id" => $user_id ) );

while($userRow = $stmt->fetch( PDO::FETCH_ASSOC )){
$user_name = $userRow['user_name'];
$user_email = $userRow['user_email'];


}

?>

<?php include("header.php"); ?>
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
                    <h1 class="page-header">User Profile</h1>
                </div>
 </div>
        

             <div class="panel panel-default">
            <div class="panel-heading">
              User Profile
			  </div>
			  <form method="post" name="user_details">
			  <div class="container-fluid">
			  <div class="form-group">
			  <br>
			  	<label>User Name</label>
			  	<input type="text" name="user_name" class="form-control" disabled="disabled" value="<?php echo $user_name;?>">
			  	<br>
			  	<label>Email ID</label>
			 	<input type="email" name="user_email" class="form-control" disabled="disabled" value="<?php echo $user_email; ?>">
			 	<br>
			 	<label>Contact Number</label>
			  	<input type="number" name"mobile_number" class="form-control"
			  	<br>
			  	<label>Address</label>
			  	<textarea name="address" class="form-control"></textarea>
			  
                




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

	<!-- <script src="bootstrap/js/bootstrap.min.js"></script> -->
