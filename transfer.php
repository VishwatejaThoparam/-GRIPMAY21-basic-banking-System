<?php
session_start();
$con=mysqli_connect('localhost','root','','systembank_update');
$q="select name from users";
$result=mysqli_query($con,$q);
?>


<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Select User</title>
	<link rel="stylesheet" href="style.css">

	<div class="buttons"><br><br><br>
		<a href="index.php">
    		<button class="glow-on-hover">HOME</button>
		</a>
	</div>

	<style>
	body{
		text-align:center;
	}
	body{
		background-color: rgb(217,129,22);
		background-image:url("https://images.pexels.com/photos/2387532/pexels-photo-2387532.jpeg?auto=compress&cs=tinysrgb&dpr=1&w=500.jpg");
		background-position: center;
		background-repeat: no-repeat;
		background-size:cover;
		object-fit:cover;
	}
	html,body{
		height:100%;
		width:100%;
	}
	html {
    display: table;
    margin: auto;
	}

	body {
    display: table-cell;
    vertical-align: middle;
	}
	.center{
		display:inline-block;
		background-color:#695d56;
		padding:50px;
		border:2px ridge red;
	}
	.ho{
		padding-top:50px;
	}
	.butto1{
		background-color:#bebebe;
	}
	.button{
		border-radius:10px;
		border: 1px solid black;
		height: 51px;
		width: 218px;
		margin: auto;
		overflow: hidden;
		cursor: pointer;
		color: #28048a;
		font-size:17px;
		font-weight:bold;
		background:#26abff;
	}
	.button:hover{
		background-color:#26abff;
	}
	</style>
	<script>
		 function random_function()
            {
                var a=document.getElementById("input").value;
				if(a==="Sampath"){
				 var arr=["Arun","Ajaykumer","Vamshi","Arjun","swetha","sony","bharathwaj","Ashu","vishwa"];
				 }
				 else if(a==="Ajaykumer"){
					var arr=["Sampath","Arun","Vamshi","Arjun","swetha","sony","bharathwaj","Ashu","vishwa"];
				}
				else if(a==="Vamshi"){
					var arr=["Sampath","Ajaykumer","Arun","Arjun","swetha","sony","bharathwaj","Ashu","vishwa"];
				}
				else if(a==="Arjun"){
					var arr=["Sampath","Ajaykumer","Vamshi","Arun","swetha","sony","bharathwaj","Ashu","vishwa"];
				 }
				 else if(a==="swetha"){
					var arr=["Sampath","Ajaykumer","Vamshi","Arjun","Arun","sony","bharathwaj","Ashu","vishwa"];
				 }
				 else if(a==="sony"){
					var arr=["Sampath","Ajaykumer","Vamshi","Arjun","swetha","Arun","bharathwaj","Ashu","vishwa"];
				 }
				 else if(a==="bharathwaj"){
					var arr=["Sampath","Ajaykumer","Vamshi","Arjun","swetha","sony","Arun","Ashu","vishwa"];
				 }
				 else if(a==="Ashu"){
					var arr=["Sampath","Ajaykumer","Vamshi","Arjun","swetha","sony","bharathwaj","Arun","vishwa"];
				 }
				 else if(a==="vishwa"){
					var arr=["Sampath","Ajaykumer","Vamshi","Arjun","swetha","sony","bharathwaj","Ashu","Arun"];
				 }
				 else if(a==="Arun"){
				 var arr=["Sampath","Ajaykumer","Vamshi","Arjun","swetha","sony","bharathwaj","Ashu","Vishwa"];
				 }
                var string="";
             
                for(i=0;i<arr.length;i++)
                {
                    string=string+"<option value="+arr[i]+">"+arr[i]+"</option>";
                }
                document.getElementById("output").innerHTML=string;
            }
	</script>	
</head>
<body>
	<h1 style=" font-size:45px;color:#e0115f;text-shadow: 1.5px 1.5px black;">Send Money</h1><br>
	<div class="center">
	<form action="amount_update.php" method="post">
		<label for="sender" align="left">Senders Name: &nbsp;</label>
		<select id="input" name="sender"style="font-size: 12pt; height: 28px; width:290px;" align="middle" onchange="random_function()">
			<option  selected>Select Name</option>
			<option value="Sampath">Sampath</option>
			<option value="Arun">Arun</option>
			<option value="Ajaykumer">Ajaykumer</option>
			<option value="Vamshi">Vamshi</option>
			<option value="Arjun">Arjun</option>
			<option value="swetha">swetha</option>
			<option value="sony">sony</option>
			<option value="bharathwaj">bharathwaj</option>
			<option value="Ashu">Ashu</option>
			<option value="Vishwa">Vishwa</option>
		</select><br><br>
		<label for="receiver" align="left">Receiver Name:&nbsp;</label>
		<select id="output" name="receiver"style="font-size: 12pt; height: 28px; width:290px;" align="middle" onchange="random_function1()" >
			<option>Select Name</option>
		</select><br><br>
		<label for="transfer" align="left">Amount: &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;</label>
		<input type="number"  name="transfer" style="font-size: 12pt; height: 20px; width:285px;" align="middle" required><br><br>
		<div class="button1">
		&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input class="button" onMouseOver="this.style.color='red'"onMouseOut="this.style.color='#28048a'"type="submit" name="submit" value="Transfer" style="height:40px; width:100px;">
		</div>
	</form> 
	</div>
</body>
</html>