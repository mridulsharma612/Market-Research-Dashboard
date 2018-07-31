<?php  
function rows(){
    $conn = new mysqli("localhost", "root", "", "probiqgr_dashboard");
$sql = "SELECT COUNT(status) as count from new_survey WHERE Status LIKE 'open%'";
       $result = $conn->query($sql);
    while($rows = $result->fetch_assoc() )
         echo "<div class='huge'>{$rows['count']}</div>";
}
        ?>

<?php
function co(){
$conn = new mysqli("localhost", "root", "", "probiqgr_dashboard");
$sql = "SELECT COUNT(status) as count from new_survey WHERE Status LIKE 'close%'";
       $result = $conn->query($sql);
    while($rows = $result->fetch_assoc() )
         echo "<div class='huge'>{$rows['count']}</div>";
}
        ?>
        
  <?php  
function in(){
$conn = new mysqli("localhost", "root", "", "probiqgr_dashboard");
$sql = "SELECT COUNT(status) as count from new_survey WHERE Status LIKE 'invoice%'";
       $result = $conn->query($sql);
    while($rows = $result->fetch_assoc() )
         echo "<div class='huge'>{$rows['count']}</div>";
}
        ?>
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        