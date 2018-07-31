<?php include("header.php");?>
<?php
require_once("dbcon.php");
if(isset($_GET['id']))
{
$sql_query = ("SELECT * from vendors WHERE vendor_id=".$_GET['id']);

$result = $conn->query($sql_query);
    while($rows = $result->fetch_assoc()){
        $v_id = $rows['vendor_id'];
        $s = $rows['vendor_name'];
	$c = $rows['cost_interview'];
	$date = $rows['allotment_date'];
	$completes = $rows['number_of_completes'];
        $msg = $rows['message'];
        $url = $rows['replica_url'];
        $re = $rows['remarks'];
        $end_url = $rows['complete_end_url'];
	$screen = $rows['screen_out_url'];
	$quota = $rows['quota_url'];
	$s_id = $rows['survey_id'];
        
    }
}
?>
    <!DOCTYPE>
    <html>

    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />


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
                        <h1 class="page-header">Edit Vendor</h1>
                    </div>
                </div>

                <div class="panel panel-default">
                    <div class="panel-heading">
                        Edit Vendor
                    </div>
                    <div class="container-fluid">
                        <div class="form-group">
                            <br>
                            <div class="table-responsive">
                                <table class="table table-striped table-bordered table-hover">
                                    <thead>
                                        <tr>
                                            <th>Vendor ID </th>
                                            <th>Vendor Name</th>
                                            <th>Cost/Interview</th>
                                            <th>Allotment Date</th>
                                            <th>Number of Completes</th>
                                            <th>Message</th>
                                            <th>Replica URL</th>
                                            <th>Remarks</th>
                                            <th>End URL</th>
                                            <th>Screen Out</th>
                                            <th>Quota Full</th>
                                            <th>Status</th>
                                            <th>Survey ID</th>

                                        </tr>
                                    </thead>
                                    <tbody>
                                        <form method="post">

                                            <td><input type="text" name="vendor_id" value="<?php echo $v_id;?>" disabled></td>
                                            <td><input type="text" name="vendor_name" value="<?php echo $s;?>"></td>
                                            <td><input type="text" name="cost_interview" value="<?php echo $c;?>" </td>
                                                <td><input type="date" name="allotment_date" value="<?php echo $date;?>" </td>
                                                    <td><input type="text" name="number_of_completes" value="<?php echo $completes;?>"></td>
                                                    <td><input type="text" name="message" value="<?php echo $msg ?>"></td>
                                                    <td><input type="text" name="replica_url" value="<?php echo $url;?>" disabled></td>
                                                    <td><input type="text" name="remarks" value="<?php echo $re;?>"></td>
                                                    <td><input type="text" name="complete_end_url" value="<?php echo $end_url;?>"></td>
                                                    <td><input type="text" name="screen_out_url" value="<?php echo $screen;?>"></td>
                                                    <td><input name="text" name="quota_url" value="<?php echo $quota;?>"></td>
                                                    <td><select name="vendor_survey_status">
                                                        <option value="Open">Open</option>
                                                        <option value="Close">Close</option>
                                
                                                        </select></td>
                                                    <td><input type="text" name="survey_id" value="<?php echo $s_id;?>" disabled></td>
                                                    <tr>
                                                        <td><input type="hidden" name="vendor_id" value=<?php echo $_GET['id'];?></td>
                                                        <td><input type="submit" name="update" value="update" /></td>
                                                    </tr>
                                        </form>

<?php
            if(isset($_POST["update"])){
        
//        $s_id = $_POST['survey_id'];
        $s = $_POST['vendor_name'];
       $n = $_POST['cost_interview'];
	$test_url = $_POST['allotment_date'];
	$c = $_POST['number_of_completes'];
	$te = $_POST['message'];
	$completes = $_POST['remarks'];
        $de = $_POST['complete_end_url'];
        $t = $_POST['screen_out_url'];
        $quota = $_POST['quota_url'];
        $s_stats = $_POST['vendor_survey_status'];
        
    $sql_query = $conn->query("UPDATE probiqgr_dashboard.vendors SET vendor_name='$s', cost_interview='$n', allotment_date='$test_url', number_of_completes='$c', message='$te', remarks='$completes', complete_end_url='$de', screen_out_url='$t', quota_url='$quota', vendor_survey_status='$s_stats' WHERE vendor_id='$v_id'");
        
        
    
    if ($sql_query == true) {
            echo '<script type="text/javascript">alert("Your data has been uploaded.."); 
                        window.location.assign("vendor_list.php");
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