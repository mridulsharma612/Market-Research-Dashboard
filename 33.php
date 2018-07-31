<?php 
    error_reporting(0); 
include("dbcon.php"); 
$get = $_GET['pid'];
$s_s= 33; 
$s_d= 105;
$sql_query = $conn->query("INSERT INTO report (v_id,s_id,vendor) VALUE('$get','$s_s','$s_d')"); if($sql_query) header("Location: https://edgeapi.innovatemr.net/startSurvey?Test=1&NotLive=1&survNum=36m75Dvb&supCode=92&PID=ef0b01e84d87c75a4ebf&s_id=33"); exit; ?>