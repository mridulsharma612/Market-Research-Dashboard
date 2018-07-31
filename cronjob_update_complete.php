<?php  
require_once("/home/probiqgr/public_html/dashboard/dbcon.php");      

        $sql = "SELECT survey_id, completed, incompleted FROM new_survey WHERE incidence_rate IS NULL"; //limit number of columns being fetched to reduce exceesive memory usage
       $result = $conn->query($sql);
$i = 0;
    while($rows = $result->fetch_assoc() ){
              
      
        $completed = $rows['completed'];
        $incompleted = $rows['incompleted'];
        
          if (!is_numeric($completed) || !is_numeric($incompleted)) {
              continue;
          }
        
        $i++; 
        
 $calc = ($completed / ($completed + $incompleted)) * 100;
        $incidence_rate = ceil($calc); //round to nearest whole number/integer
        
        //update table with calculation results
        $insert = $conn->query("UPDATE new_survey SET incidence_rate = '".$incidence_rate."' WHERE survey_id = '".$rows['survey_id']."'");
        if ($insert) {
            echo "Cron Job sucessful - Incident Rate Update for Survey ID: ". $rows['survey_id']."<br/>";
        } else {
            echo "::: Error Encountered. Failed to Insert Table Data for Survey ID: ". $rows['survey_id']."<br/>";
        }        
        
    }
if ($i == 0) {
    echo "No Job to Run!";
    exit;
}
$conn->close();
?>

    