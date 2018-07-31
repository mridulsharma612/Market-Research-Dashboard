<?php 
    $a = bin2hex(random_bytes(10));
    error_reporting(0); 
include("dbcon.php"); 
$get = $_GET['pid'];
$s_s= 40; 
$s_d= 434343;
$sql_query = $conn->query("INSERT INTO report (v_id,s_id,vendor,a_id) VALUE('$get','$s_s','$s_d','$a')"); if($sql_query) header("Location: https://edgeapi.innovatemr.net/startSurvey?Test=1&NotLive=1&survNum=2v49ANYJ&supCode=260&PID=$a&s_id=40"); exit; ?>