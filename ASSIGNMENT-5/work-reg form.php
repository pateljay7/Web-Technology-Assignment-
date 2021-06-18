

<?php
$host='localhost';
$user='root';
$pass='';
$dbname='data';
if(isset($_POST['submit']))
{
$conn=mysqli_connect($host,$user,$pass,$dbname);


if(mysqli_select_db($conn,'data'))

$fname= $_POST['fname'];
$lastName= $_POST['lastName'];
$Gender= isset($_POST['Gender'])?$_POST['Gender']:'';
$email= $_POST['email'];
$date2= $_POST['date2'];
$address= $_POST['address'];
$title= $_POST['title'];
$fee= $_POST['fee'];

$sugg= $_POST['sugg'];
			$sql = "INSERT INTO workshopdata values('$fname','$lastName','$email','$Gender','$date2','$address','$title','$fee','$sugg')";
			mysqli_query($conn,$sql);
/*{
echo "new";
}
else
{
echo "error: " . $sql . " " .mysqli_error($conn);
}*/

				
				mysqli_close($conn);	
}
					
?>



<html>
<head>
<style>
*{letter-spacing:1px;word-spacing:2px;line-height:35px;}
#form{
	width:60%;
	height:900px;
	background:#333;
	opacity:0.6;
	margin-left:20%;
	margin-top:30px;
	border-radius:10px;
}

#line{
	margin-bottom:5px;
	width: 500px;
	height: 5px;
	background:#FF3600;
	opacity:1;
}
#line2{
	margin-bottom:5px;
	width: 800px;
	height: 5px;
	background:white;
	opacity:1;
}
font
{
	color:red;
	opacity:1;
	font-family:serif;
}
b
{
	color:white;
	opacity:1;
}
select,input{
	background:black 	;
	border-radius:5px;
	border:none;
	opacity:0.5;
	height:20px;
	opacity:1;
	height:25px;
	box-shadow:5px 5px 10px #555;
	
}
textarea{
background:black 	;
	border:none;
	opacity:0.5;
	height:60px;
	opacity:1;
	border-radius:5px;
	box-shadow:5px 5px 10px #555;
}
button
{
	height:30px;
	width:80%;
	background:black;
	opacity:1;
	margin-top:20px;
	border-radius:5px;
	font-size:25px;
	color:white;
	font-family: Calibri;
	border:none;
	font-weight:bold;
}

#total{
background:red;
}
button:hover{background:red;font-size:30px;}
select:hover,input:hover{background:white;opacity:0.7;font-size:25px;}
textarea:hover{background:white;opacity:0.7}

#submit:hover{box-shadow:0px 0px 20px #333;font-size:25px;}
	select:hover,input:hover{box-shadow:5px 5px 20px #333;font-size:20px;border:none;}
</style>

	<script>
			
			function amount1(){
				var e = document.getElementById("no_of_part1");
				var result1 = e.options[e.selectedIndex].value;
				
				document.getElementById("result").innerHTML = result1;
			}
			// function amount2(){
			// 	var e = document.getElementById("no_of_part2");
			// 	var result2 = e.options[e.selectedIndex].value;
				
			// 	document.getElementById("result").innerHTML = result2;
			// }

	</script>
</head>

<body background="bk10.jpg">

<div id="form" align="center">

<h1 style="color:white;font-size:30px;letter-spacing:3px">Workshop Registration</h1>
<div id="line"></div>


<center>
	<form action="<?php $_PHP_SELF ?>" method="post">
		 
		 	<table cellspacing="10" >
		 		<tr> 
		 			<td colspan="2">
		 		<font size="5px">Please fill up the form for registration in workshop.</font>
		 		<div id="line2"><div>
		 	        </td>
		     	</tr>
		     	<tr width="100%">   <!-----2 -->
		     		
		     		<td width="50%">
		 		
		 			<b>NAME:</b>
		 		<input type="text" style="width:100%" name="fname"  placeholder="First Name">
		 			</td>
		 			<td width="50%">
		 				<br>
		 		<input type="text" style="width:100%" name="lastName"  placeholder="Last Name"> 
		 			</td>
		 	    </tr>
		 	     <tr colspan="2">   <!-----3 -->
		     		<td>
		 		<b>Email : </b> 
		 		 <input type="email" style="width:100%" name="email"  placeholder="ex: abc@xyz.com"> 
		 			</td>
		 		
		 	    </tr>
		     	<tr>   <!-----2 -->
		     		
		     		<td colspan="2">
		     			<b>Gender : </b>

					 <input type="radio" name="Gender" value="Male">Male
					<input type="radio" name="Gender" value="Female">Female 
					</td>
		 	    </tr>
				<tr >	
						<td colspan="2">
							<label for="dob"><b>Date Of Birth:</b></label>
							<input type="date" name="date2" style="width:30%" id="dob">
						</td>
				</tr>
				<tr>
					<td colspan="2">
						<b>Address:</b>
						<textarea  name="address" rows="4" cols="25"></textarea>
					</td>
				</tr>
    		    <tr>   <!-----5 -->
					<td colspan="2">
						<lable id="lableid"><b>Title :</b></lable>
						<input type="text" style="width:70%"  name="title" placeholder="Title of Workshop"> 
     		   		</td>
    		    </tr>
    		    <tr>   <!-----6 -->
    		    	
					<td colspan="2">
						<lable id="lableid"><b>Participation Fee :</b></lable>
						Workshop : <b>$100</b>
						<br>
					
						<br>
					
						<b>No. of Participation:<b>
						<select id="no_of_part1" style="width:20%" name="fee" onchange="amount1()">
							
							<option value="100$" selected=""><font color="white">1</font></option>
							<option value="200$">2</option>
							<option value="300$">3</option>
							<option value="400$">4</option>
							<option value="500$">5</option>
							<option value="600$">6</option>
						</select>
						<br>
						<!-- <br>
						<input type="radio"  value="wl" style="margin-left: 5px" onchange="displayRadioValue()">
						Workshop + Lunch: <b>$150</b>
						
						No. of Participation:
						<select id="no_of_part2" style="width:20%"  >
						<select id="no_of_part2" style="width:20%"  onchange="amount2()">

							<option value="150$" selected="">1</option>
							<option value="300$">2</option>
							<option value="450$">3</option>
							<option value="600$">4</option>
							<option value="750$">5</option>
							<option value="900$">6</option>
						</select> -->
						<hr>
     		   		 
     		   		</td>
				
    		    </tr>
    		    <tr ><div id="total">
    		    	<td>
    		    		<b style="margin-left:0px;font-size:20px">Total Fee:-</b>
						<b id="result" name="fee" style="background:black">0 $</b>
					</td>
    		    	<td>
    		    		
    		    	</td></div>

    		    </tr>

    		    <tr>
					<td colspan="2">
						<b>Do you have any special requirements or suggestions?</b>
						<textarea name="sugg" rows="4" cols="100"></textarea>
					</td>
				</tr>
    		    
    		    
    		    <tr>	<!-----11 -->
						<td >
			        		<button  type="submit" name="submit">Submit</button>
			            </td>
			            <td>
							<button  type="reset" name="reset" >Reset</button>
						</td>
						
				</tr>

		 	</table>
		 </fieldset>

	</form>
</center>


</div>

</body>
</html>


