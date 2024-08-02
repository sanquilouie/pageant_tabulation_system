<?php

$conn = new mysqli('localhost', 'root', '', 'tabulationdb') 
or die ('Cannot connect to db');

    $result = $conn->query("select name from candidate");
    
    echo "<html>";
    echo "<body>";
    echo "<select name='name'>";

    while ($row = $result->fetch_assoc()) {

                  unset($name);
                  $name = $row['name']; 
                  echo '<option value="'.$name.'">'.$name.'</option>';
                 
}

    echo "</select>";
    echo "</body>";
    echo "</html>";
?>