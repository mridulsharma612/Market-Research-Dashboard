<?php 
    error_reporting(0); 
include("dbcon.php"); 
$get = $_GET['pid'];
$s_s= 36; 
$s_d= 1044;
$ran = "dcbfc1f44a758b7e324d";
$sql = $conn->query("UPDATE vendors SET a_id ='$ran' Where survey_id ='$s_s'");
$sql_query = $conn->query("INSERT INTO report (v_id,s_id,vendor,a_id) VALUE('$get','$s_s','$s_d','$ran')"); if($sql_query) header("Location: http://www.sktechsolutions.in?id=dcbfc1f44a758b7e324d&s_id=36"); exit; ?>