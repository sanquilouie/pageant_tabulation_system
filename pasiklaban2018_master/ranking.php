<?php
	require 'connect.php'; 
	$result4 = mysqli_query($con,"DELETE from result");
	$sql = "SELECT DISTINCT(name) as distnames FROM candidatescore";  
    $result = mysqli_query($con, $sql);
	while($row = mysqli_fetch_array($result))  {
	$sql2 = "SELECT name,AVG(score) as scores FROM candidatescore WHERE name = '$row[distnames]'";
    $result2 = mysqli_query($con, $sql2);
	while($row2 = mysqli_fetch_array($result2))  {
		$result3 = mysqli_query($con,"INSERT INTO result (name,score) VALUES ('$row2[name]', '$row2[scores]')");
	}
	}
?>
<html>
	<head>
	<script src="jquery.js"></script>
	<style>
html {
  width: 100%;
  min-height: 500px;
  margin: 0;
  /* Permalink - use to edit and share this gradient: http://colorzilla.com/gradient-editor/#f7cac9+0,92a8d1+100 */
  background: #f7cac9;
  /* Old browsers */
  background: -moz-linear-gradient(-45deg, #f7cac9 0%, #92a8d1 100%);
  /* FF3.6-15 */
  background: -webkit-linear-gradient(-45deg, #f7cac9 0%, #92a8d1 100%);
  /* Chrome10-25,Safari5.1-6 */
  background: linear-gradient(135deg, #f7cac9 0%, #92a8d1 100%);
  /* W3C, IE10+, FF16+, Chrome26+, Opera12+, Safari7+ */
  /* IE6-9 fallback on horizontal gradient */
  font-family: 'Roboto', sans-serif;
  letter-spacing: 1px;
  overflow-y: scroll;
}
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
input[type=submit] {
    width: 100%;
    background-color: #4CAF50;
    color: white;
    padding: 14px 20px;
    margin: 8px 0;
    border: none;
    border-radius: 4px;
    cursor: pointer;
	font-size: 20px;
}
</style>
	</head>
<body >
	<div class="column1" id = "reff"> 
<?php
	require 'connect.php'; 
	
	$sql = "SELECT @n := @n +1 n,name,score FROM result, (SELECT @n := 0) as finalscore ORDER BY score DESC ";  
    $result = mysqli_query($con, $sql);
?>

	<table border = "1" style="width:100%;border-collapse:collapse;" id="customers" >
        <tr>
			<th>RANK</th>
            <th>CANDIDATE</th>
            <th>TALLY</th>	
        </tr>
<?php
     while($row = mysqli_fetch_array($result))  {
		 $rank = 1;
?>
        <tr>
			<td><b><?php echo $row["n"]; ?></b></td>
            <td><b><?php echo $row["name"]; ?></b></td>
            <td><b>Average: <?php echo $row["score"]; ?></b></td>
			
        </tr>
		<?php
		 $result2 = mysqli_query($con, "SELECT nickname,score FROM candidatescore where name= '$row[name]'");
		 while($row2 = mysqli_fetch_array($result2))  { 
		?>
		<tr>	
<td></td>	<td></td>	
            <td><?php echo $row2["nickname"]; ?>: &nbsp;<?php echo $row2["score"]; ?></td>
   	         
        </tr>
<?php
    }
	
	 }
?>
    </table>
	<input type="submit" name="btnsubmit" id="submit" onclick="printTally()" value="Print Result"/>
	</div>

</body>
</html>
<script>
function printTally(){
	var divtoPrint = document.getElementById("customers");
	newWin = window.open("");
	newWin.document.write(divtoPrint.outerHTML);
	newWin.print()
	newWin.close();
}
</script>