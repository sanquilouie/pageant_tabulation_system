<?php
session_start();    

require 'connect.php'; 
 function fill_brand($con)  
 {  
      $output = '';  
      $sql = "SELECT name FROM candidate";  
      $result = mysqli_query($con, $sql);  
      while($row = mysqli_fetch_array($result))  
      {  
           $output .= '<option value="'.$row["name"].'">'.$row["name"].'</option>';  
      }  
      return $output;  
 }   
if(isset($_POST['btnsubmit'])){	 

	$creative = $_POST['creative'];
	$showman = $_POST['showman'];
	$enterr = $_POST['enter'];
	if($creative >= 1 && $creative <= 40){
		if($showman >= 1 && $showman <= 40){
			if($enterr >= 1 && $enterr <= 20){				
					$judge = $_SESSION['username'];
					$judgename = $_SESSION['nickname'];
					$name = $_POST['name'];
					if($name != '---'){
					$score = $creative + $showman + $enterr; 
					$result2 = mysqli_query($con, "SELECT abbrev FROM candidate WHERE name = '$name'");  
					$row2 = mysqli_fetch_array($result2);
					$abbrev = $row2["abbrev"];
					$result = mysqli_query($con, "SELECT judge,name FROM candidatescore WHERE judge = '$judge' AND name = '$name'");
					$count=mysqli_num_rows($result);
						if ($count > 0){
							$result = mysqli_query($con,"UPDATE candidatescore set score = '.$score.', creative = '.$creative.',showman = '.$showman.',entertain = '.$enterr.' where judge ='$judge' AND name ='$name'");
						}else{
							$result = mysqli_query($con,"INSERT INTO candidatescore (judge,name,score,nickname,abbrev,showman,creative,entertain) VALUES ('$judge', '$name','.$score.','$judgename','$abbrev','$showman','$creative','$enterr')");
						}
					}
			}
		}
	}	
	//$result = mysqli_query($con,"INSERT INTO candidatescore (judge,name,score) VALUES(' $judge ',' $name ', ' .$score. ')");	
}
?>
<html>
	<head>
		<script src="jquery.min.js"></script>
		<link rel="stylesheet" href="style.css">
	</head>
<body>
<form method="post" action="main.php">
	<div class="topnav">
		
		<?php 
			  echo '<a href="index.php?action=logout" style="padding-top:2.3%;">Logout</a>';
		?>
		<h2 class="username" id="judgename">
		<?php 
			  echo $_SESSION['nickname']; 
		?>
		</h2>
		<h1 class="titletext" style="color:#444444;">
		AU GOT TALENT 2018
		</h1>
	</div>
<div class="row">
	<div class="column1"> 
		<div class="inner1">
		<label id="notiflast" class="notiflast" style="text-align:center;"></label>
			<select name="name" id="name">  
			<option value="---">---</option>
			<?php echo fill_brand($con); ?>  
		</select> 
			<br/>
			<label for="creativee"><b>Creativity, Originality and Style</b></label>
			<input onkeypress='return event.charCode >= 48 && event.charCode <= 57' type="text" name="creative" id="creative" onblur="myCreative()" placeholder="Input score from 1 - 40"/>
			<label id="notif" class="notif"></label>
			</br></br>
			<label for="showmann"><b>Showmanship, Intensity, Confidence, Projection <br>
			Mastery & Presence</b></label>
			<input onkeypress='return event.charCode >= 48 && event.charCode <= 57' type="text" name="showman" id="showman" onblur="myShowman()" placeholder="Input score from 1 - 40"/>
			<label id="notif1" class="notif"></label>
			</br></br>
			<label for="enterr"><b>Entertainment Value/ Crowd Appeal</b></label>
			<input onkeypress='return event.charCode >= 48 && event.charCode <= 57' type="text" name="enter" id="enter" onblur="myEnter()" placeholder="Input score from 1 - 20"/>
			<label id="notif2" class="notif"></label>
			</br></br>
			<input type="submit" name="btnsubmit" id="submit" onclick="mySubmit()" value="Submit"/>
		</div>
	</div>
<div class="column2" > 
	<div class="row" id="show_contestant">  
</div>
</div>
</div>
</form>
</body>
</html>
<script> 
function myCreative() {

	if(document.getElementById('creative').value >= 1 && document.getElementById('creative').value <= 40){		
    document.getElementById("notif").innerHTML = "";
	}else{
	document.getElementById("notif").innerHTML = "Please supply a valid score.";
	}
}
function myShowman() {

	if(document.getElementById('showman').value >= 1 && document.getElementById('showman').value <= 40){		
    document.getElementById("notif1").innerHTML = "";
	}else{
	document.getElementById("notif1").innerHTML = "Please supply a valid score.";
	}
}
function myEnter() {

	if(document.getElementById('enter').value >= 1 && document.getElementById('enter').value <= 20){		
    document.getElementById("notif2").innerHTML = "";
	}else{
	document.getElementById("notif2").innerHTML = "Please supply a valid score.";
	}
}
function mySubmit() {
	var e = document.getElementById('name').value;
	if(document.getElementById('creative').value >= 1 && document.getElementById('creative').value <= 40 
	&& document.getElementById('showman').value >= 1 && document.getElementById('showman').value <= 40
	&& document.getElementById('enter').value >= 1 && document.getElementById('enter').value <= 20
	&& e != '---'){		
    document.getElementById("notiflast").innerHTML = "Score Succesfully Sent.";
	document.getElementById("notiflast").style.color = "green";
	}else{
	document.getElementById("notiflast").innerHTML = "Score Failed to Send.";
	document.getElementById("notiflast").style.color = "red";
	}
}
 $(document).ready(function(){  
      $('#name').change(function(){  
	  document.getElementById('creative').value = "";
		document.getElementById('showman').value = "";
		document.getElementById('enter').value = "";
		var spoken;
           var name = $(this).val();  
		   var judge = '<?php echo $_SESSION['nickname'] ?>';
           $.ajax({  
                url:"load_information.php",  
                method:"POST",  
                data:{name:name, judge:judge},  
                success:function(data){  
                     $('#show_contestant').html(data);  
                }  
           });   
      });  
 });  
 
 </script>  