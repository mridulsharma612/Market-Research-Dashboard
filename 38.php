<?php 
    error_reporting(0); 
include("dbcon.php"); 
$get = $_GET['pid'];
$s_s= 38; 
$s_d= 5;
$ran = "93b8addce1c6839510a5";
$sql = $conn->query("UPDATE vendors SET a_id ='$ran' Where survey_id ='$s_s'");
$sql_query = $conn->query("INSERT INTO report (v_id,s_id,vendor,a_id) VALUE('$get','$s_s','$s_d','$ran')"); if($sql_query) header("Location: https://edgeapi.innovatemr.net/startSurvey?Test=1&NotLive=1&survNum=mPg2za6K&supCode=92&PID=93b8addce1c6839510a5&s_id=38"); exit; ?>