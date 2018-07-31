<?php 
    error_reporting(0); 
include("dbcon.php"); 
$get = $_GET['pid'];
$s_s= 35; 
$s_d= 107;
$sql_query = $conn->query("INSERT INTO report (v_id,s_id,vendor) VALUE('$get','$s_s','$s_d')"); if($sql_query) header("Location: https://edgeapi.innovatemr.net/startSurvey?Test=1&NotLive=1&survNum=mPg2za6K&supCode=92&PID=fe84840a821e86040226&s_id=35"); exit; ?>