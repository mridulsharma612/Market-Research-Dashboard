<?php 
    error_reporting(0); 
include("dbcon.php"); 
$get = $_GET['pid'];
$s_s= 39; 
$s_d= 0001;
$ran = "71087b2266fdc56744f8";
$sql = $conn->query("UPDATE vendors SET a_id ='$ran' Where survey_id ='$s_s'");
$sql_query = $conn->query("INSERT INTO report (v_id,s_id,vendor,a_id) VALUE('$get','$s_s','$s_d','$ran')"); if($sql_query) header("Location: https://edgeapi.innovatemr.net/startSurvey?Test=1&NotLive=1&survNum=mPg2za6K&supCode=92&PID=71087b2266fdc56744f8&s_id=39"); exit; ?>