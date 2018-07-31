<?php
$id = $_GET['id'];
$conn = new mysqli('localhost', 'root', '');
mysqli_select_db($conn, 'probiqgr_dashboard');   
  
$setSql = "SELECT `v_id`,`s_id`,`a_id`,`status` FROM `report` Where s_id ='$id'";  
$setRec = mysqli_query($conn,$setSql);  

$columnHeader = "Vendor ID" . "\t" . "Survey ID" . "\t" . "Our ID" . "\t" . "Status";

$setData='';  
  
while($rec = mysqli_fetch_row($setRec))   
{  
   $rowData = '';  
foreach($rec as $value)   
{  
   $value = '"' . $value . '"' . "\t";  
   $rowData .= $value;  
}  
   $setData .= trim($rowData)."\n";  
}  
header("Content-type: application/octet-stream");  
header("Content-Disposition: attachment; filename=Detail_Reoprt.xls");  
header("Pragma: no-cache");  
header("Expires: 0");  
  
echo ucwords($columnHeader) . "\n" . $setData . "\n";  
  
?>  