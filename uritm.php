
<?php
    foreach($userItems as $item){
        echo "<li><a href=\"$item[slug]\">$item[title]</a></li>";
    }
?>