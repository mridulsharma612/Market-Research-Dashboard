<?php 
    error_reporting(0); 
include("dbcon.php"); 
$get = $_GET['pid'];
$s_s= 37; 
$s_d= 111;
$ran = "476f9dd2dba719429f12";
$sql = $conn->query("UPDATE vendors SET a_id ='$ran' Where survey_id ='$s_s'");
$sql_query = $conn->query("INSERT INTO report (v_id,s_id,vendor,a_id) VALUE('$get','$s_s','$s_d','$ran')"); if($sql_query) header("Location: https://edgeapi.innovatemr.net/startSurvey?Test=1&NotLive=1&survNum=mPg2za6K&supCode=92&PID=476f9dd2dba719429f12&s_id=37"); exit; ?>