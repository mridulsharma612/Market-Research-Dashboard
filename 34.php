<?php 
    error_reporting(0); 
include("dbcon.php"); 
$get = $_GET['pid'];
$s_s= 34; 
$s_d= 106;
$sql_query = $conn->query("INSERT INTO report (v_id,s_id,vendor) VALUE('$get','$s_s','$s_d')"); if($sql_query) header("Location: https://edgeapi.innovatemr.net/startSurvey?survNum=A608XM6k&supCode=140&PID=ac21adce0f6da67fbca1&s_id=34"); exit; ?>