<?php  

 //load_data.php  
require 'connect.php';    
 $output = ''; 
 if(isset($_POST["name"]))  
 {  
      if($_POST["name"] != '' || $_POST["name"] != '---')  
      {  
           $sql = "SELECT * FROM candidate WHERE name = '".$_POST["name"]."'";  
      }  
      else  
      {  
           $sql = "SELECT * FROM candidate";  
      }  
      $result = mysqli_query($con, $sql);  
      while($row = mysqli_fetch_array($result))  
      {  
           $output .= '<div>
			<h1 style="color:#444444;"> '.$row["abbrev"].' </h1>
		   </div>';   
      }  
      echo $output;  
 }
 ?> 
<html>
	<head>
	<style>
#customers {
    font-family: "Trebuchet MS", Arial, Helvetica, sans-serif;
    border-collapse: collapse;
    width: 100%;
}
#customers td, #customers th {
    border: 1px solid #ddd;
    padding: 8px;
}
#customers tr:hover {background-color: #ddd;}

#customers th {
    padding-top: 12px;
    padding-bottom: 12px;
    text-align: left;
    background-color: #126EF9;
    color: white;
}
</style>
	</head>
<body >
<?php
	$name = $_POST['name'];
	$nickname = $_POST['judge'];
	$sql = "SELECT * FROM candidatescore WHERE nickname = '$nickname'";  
    $result = mysqli_query($con, $sql);
?>

	<table id="customers" align="center">
        <tr>
			<th>Department</th>
			<th>Choreo</th>
            <th>Musika</th>
            <th>Kasuotan</th>
			<th>Poetry</th>
			<th>Average</th>
        </tr>
<?php
     while($row = mysqli_fetch_array($result))  {
?>
        <tr >
			<td><b><?php echo $row["abbrev"]; ?></b></td>
			<td><b><?php echo $row["choreo"]; ?></b></td>
            <td><b><?php echo $row["music"]; ?></b></td>
            <td><b><?php echo $row["dress"]; ?></b></td>
			<td><b><?php echo $row["spoken"]; ?></b></td>	
			<td><b><?php echo $row["score"]; ?></b></td>
        </tr>
		
<?php
    }
?>
<?php
	$namee = $_POST['name'];
	$nicknamee = $_POST['judge'];
	$sqll = "SELECT * FROM candidatescore WHERE nickname = '$nicknamee' AND name = '$namee'";  
    $resultt = mysqli_query($con, $sqll);
?>
<?php
while($row2 = mysqli_fetch_array($resultt))  {
?>
		<script>
		document.getElementById('choreo').value = <?php echo $row2["choreo"]; ?>;
		document.getElementById('music').value = <?php echo $row2["music"]; ?>;
		document.getElementById('dress').value = <?php echo $row2["dress"]; ?>;
		document.getElementById('poetry').value = <?php echo $row2["spoken"]; ?>;
		</script>
<?php
}
?>

</body>
</html> 
<script>
</script>