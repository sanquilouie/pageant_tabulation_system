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

	$choreo = $_POST['choreo'];
	$music = $_POST['music'];
	$dress = $_POST['dress'];
	$poetry = $_POST['poetry'];
	if($choreo >= 1 && $choreo <= 35){
		if($music >= 1 && $music <= 25){
			if($dress >= 1 && $dress <= 20){
				if($poetry >= 1 && $poetry <= 20){					
					$judge = $_SESSION['username'];
					$judgename = $_SESSION['nickname'];
					$name = $_POST['name'];
					if($name != '---'){
					$score = $choreo + $music + $dress + $poetry; 
					$result2 = mysqli_query($con, "SELECT abbrev FROM candidate WHERE name = '$name'");  
					$row2 = mysqli_fetch_array($result2);
					$abbrev = $row2["abbrev"];
					$result = mysqli_query($con, "SELECT judge,name FROM candidatescore WHERE judge = '$judge' AND name = '$name'");
					$count=mysqli_num_rows($result);
					
						if ($count > 0){
							$result = mysqli_query($con,"UPDATE candidatescore set score = '.$score.',choreo = '.$choreo.',music = '.$music.',dress = '.$dress.',spoken = '.$poetry.' where judge ='$judge' AND name ='$name'");
						}else{
							$result = mysqli_query($con,"INSERT INTO candidatescore (judge,name,score,nickname,choreo,music,dress,spoken,abbrev) VALUES ('$judge', '$name','.$score.','$judgename','.$choreo.','.$music.','.$dress.','.$poetry.','$abbrev')");
						}
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
		PASIKLABAN 2018
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
			<label for="choreo"><b>Choreography, Originality and Over-all Effect</b></label>
			<input onkeypress='return event.charCode >= 48 && event.charCode <= 57' type="text" name="choreo" id="choreo" onblur="myChoreo()" placeholder="Input score from 1 - 35"/>
			<label id="notif" class="notif"></label>
			</br></br>
			<label for="musika"><b>Musika, Ekspresyon, at Koordinasyon</b></label>
			<input onkeypress='return event.charCode >= 48 && event.charCode <= 57' type="text" name="music" id="music" onblur="myMusic()" placeholder="Input score from 1 - 25"/>
			<label id="notif1" class="notif"></label>
			</br></br>
			<label for="kasuotan"><b>Kasuotan at Props</b></label>
			<input onkeypress='return event.charCode >= 48 && event.charCode <= 57' type="text" name="dress" id="dress" onblur="myDress()" placeholder="Input score from 1 - 20"/>
			<label id="notif2" class="notif"></label>
			</br></br>
			<label for="spoken"><b>Spoken Poetry</b></label>
			<input onkeypress='return event.charCode >= 48 && event.charCode <= 57' type="text" name="poetry" id="poetry" onblur="myPoetry()" placeholder="Input score from 1 - 20"/>
			<label id="notif3" class="notif"></label>
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
function myChoreo() {

	if(document.getElementById('choreo').value >= 1 && document.getElementById('choreo').value <= 35){		
    document.getElementById("notif").innerHTML = "";
	}else{
	document.getElementById("notif").innerHTML = "Please supply a valid score.";
	}
}
function myMusic() {

	if(document.getElementById('music').value >= 1 && document.getElementById('music').value <= 25){		
    document.getElementById("notif1").innerHTML = "";
	}else{
	document.getElementById("notif1").innerHTML = "Please supply a valid score.";
	}
}
function myDress() {

	if(document.getElementById('dress').value >= 1 && document.getElementById('dress').value <= 20){		
    document.getElementById("notif2").innerHTML = "";
	}else{
	document.getElementById("notif2").innerHTML = "Please supply a valid score.";
	}
}
function myPoetry() {

	if(document.getElementById('poetry').value >= 1 && document.getElementById('poetry').value <= 20){		
    document.getElementById("notif3").innerHTML = "";
	}else{
	document.getElementById("notif3").innerHTML = "Please supply a valid score.";
	}
}
function mySubmit() {
	var e = document.getElementById('name').value;
	if(document.getElementById('poetry').value >= 1 && document.getElementById('poetry').value <= 20 
	&& document.getElementById('dress').value >= 1 && document.getElementById('dress').value <= 20
	&& document.getElementById('music').value >= 1 && document.getElementById('music').value <= 25
	&& document.getElementById('choreo').value >= 1 && document.getElementById('choreo').value <= 35 
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
	  document.getElementById('choreo').value = "";
		document.getElementById('music').value = "";
		document.getElementById('dress').value = "";
		document.getElementById('poetry').value = "";
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