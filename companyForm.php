<?php
session_start();
?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
<head>
<meta http-equiv="Content-Type" content="text/html; UTF-8" />
<link href="css/formstyles.css" type="text/css" rel="stylesheet" media="all" />
<title>Form Page</title>
<style>
	table {
	  table-layout: fixed;
	  font-family: Helvetica, arial, sans-serif;
	  border-collapse: collapse;
	  width: 100%;
	}
	td, th {
	  border: 1px solid #dddddd;
	  text-align: left;
	  padding: 8px;
	}
	</style>
</head>
	
<body>
<div id="wrapper">
<div id="container">	
<div id="content">
<h2>Employee Evaluation Form</h2>	
<div class="Form">
   <form action="success.php" method="post">
   
   <div class="companyinfo">
    <h3 class="title1">Company Information</h3>
	<p>Name of Company. <input type="text" name="companyName"></p>
	<p>Address of Home/Main Office. <input type="text" name="companyAdd"></p>
	<p>Type/Sector of CGT Industry <input type="text" name="companyType"></p>   
	<table>
		<tr>			 			 	
			<th>Animation</th>
			<th>Construction</th>
			<th>Data Viz</th>
			<th>Game</th>
			<th>UX</th>
			<th>VPI</th>
			<th>Vis EFx</th>
			<th>Web</th>
	  	</tr>
		<tr>			 			 	
			<th><input type="checkbox" name="compTypeAnim" value="compTypeAnim" id="typeI"><br></th>
			<th><input type="checkbox" name="compTypeCons" value="compTypeCons" id="typeI"></th>
			<th><input type="checkbox" name="compTypeData" value="compTypeData" id="typeI"></th>
			<th><input type="checkbox" name="compTypeGame" value="compTypeGame" id="typeI"></th>
			<th><input type="checkbox" name="compTypeUX" value="compTypeUX" id="typeI"></th>
			<th><input type="checkbox" name="compTypeVPI" value="compTypeVPI" id="typeI"></th>
			<th><input type="checkbox" name="compTypeVisEfx" value="compTypeVisEfx" id="typeI"></th>
			<th><input type="checkbox" name="compTypeWeb" value="compTypeWeb" id="typeI"></th>
	  	</tr>
	</table>
	
	<p>Performance Review of Supervisor— Rate Employees work behaviors below: To be Filled out by Supervisor</p>
	<table>
		<tr>			 			 	
			<th>Behaviors</th>
			<th>2</th>
			<th>1</th>
			<th>0</th>
			<th>N/A</th>
	  	</tr>
		<tr>			 			 	
			<th>Performs in a dependable manner</th>
			<th><input type="radio" name="spRate1" value="2" id="manner"></th>
			<th><input type="radio" name="spRate1" value="1" id="manner"></th>
			<th><input type="radio" name="spRate1" value="0" id="manner"></th>
			<th><input type="radio" name="spRate1" value="N/A" id="manner"></th>
	  	</tr>
		<tr>			 			 	
			<th>Cooperates with co-workers and supervisors</th>
			<th><input type="radio" name="spRate2" value="2" id="cooperate"></th>
			<th><input type="radio" name="spRate2" value="1" id="cooperate"></th>
			<th><input type="radio" name="spRate2" value="0" id="cooperate"></th>
			<th><input type="radio" name="spRate2" value="N/A" id="cooperate"></th>
	  	</tr>
		<tr>			 			 	
			<th>Shows interest in work</th>
			<th><input type="radio" name="spRate3" value="2" id="interest"></th>
			<th><input type="radio" name="spRate3" value="1" id="interest"></th>
			<th><input type="radio" name="spRate3" value="0" id="interest"></th>
			<th><input type="radio" name="spRate3" value="N/A" id="interest"></th>
	  	</tr>
		<tr>			 			 	
			<th>Learns quickly</th>
			<th><input type="radio" name="spRate4" value="2" id="learnQ"></th>
			<th><input type="radio" name="spRate4" value="1" id="learnQ"></th>
			<th><input type="radio" name="spRate4" value="0" id="learnQ"></th>
			<th><input type="radio" name="spRate4" value="N/A" id="learnQ"></th>
	  	</tr>
		<tr>			 			 	
			<th>Shows initiative</th>
			<th><input type="radio" name="spRate5" value="2" id="initialtive"></th>
			<th><input type="radio" name="spRate5" value="1"id="initialtive"></th>
			<th><input type="radio" name="spRate5" value="0" id="initialtive"></th>
			<th><input type="radio" name="spRate5" value="N/A" id="initialtive"></th>
	  	</tr>
		<tr>			 			 	
			<th>Produces high quality work</th>
			<th><input type="radio" name="spRate6" value="2" id="HQwork"></th>
			<th><input type="radio" name="spRate6" value="1" id="HQwork"></th>
			<th><input type="radio" name="spRate6" value="0" id="HQwork"></th>
			<th><input type="radio" name="spRate6" value="N/A" id="HQwork"></th>
	  	</tr>
		<tr>			 			 	
			<th>Accepts responsibility</th>
			<th><input type="radio" name="spRate7" value="2" id="respon"></th>
			<th><input type="radio" name="spRate7" value="1" id="respon"></th>
			<th><input type="radio" name="spRate7" value="0" id="respon"></th>
			<th><input type="radio" name="spRate7" value="N/A" id="respon"></th>
	  	</tr>
		<tr>			 			 	
			<th>Accepts criticism</th>
			<th><input type="radio" name="spRate8" value="2" id="criticism"></th>
			<th><input type="radio" name="spRate8" value="1" id="criticism"></th>
			<th><input type="radio" name="spRate8" value="0" id="criticism"></th>
			<th><input type="radio" name="spRate8" value="N/A" id="criticism"></th>
	  	</tr>
		<tr>			 			 	
			<th>Demonstrates organizational skills</th>
			<th><input type="radio" name="spRate9" value="2" id="DOS"></th>
			<th><input type="radio" name="spRate9" value="1" id="DOS"></th>
			<th><input type="radio" name="spRate9" value="0" id="DOS"></th>
			<th><input type="radio" name="spRate9" value="N/A" id="DOS"></th>
	  	</tr>
		<tr>			 			 	
			<th>Demonstrates technical knowledge and expertise</th>
			<th><input type="radio" name="spRate10" value="2" id="DTK"></th>
			<th><input type="radio" name="spRate10" value="1" id="DTK"></th>
			<th><input type="radio" name="spRate10" value="0" id="DTK"></th>
			<th><input type="radio" name="spRate10" value="N/A" id="DTK"></th>
	  	</tr>
		<tr>			 			 	
			<th>Shows good judgment</th>
			<th><input type="radio" name="spRate11" value="2" id="JUD"></th>
			<th><input type="radio" name="spRate11" value="1" id="JUD"></th>
			<th><input type="radio" name="spRate11" value="0" id="JUD"></th>
			<th><input type="radio" name="spRate11" value="N/A" id="JUD"></th>
	  	</tr>
		<tr>			 			 	
			<th>Demonstrates creativity/originality</th>
			<th><input type="radio" name="spRate12" value="2" id="DCO"></th>
			<th><input type="radio" name="spRate12" value="1" id="DCO"></th>
			<th><input type="radio" name="spRate12" value="0" id="DCO"></th>
			<th><input type="radio" name="spRate12" value="N/A" id="DCO"></th>
	  	</tr>
		<tr>			 			 	
			<th>Analyzes problems effectively</th>
			<th><input type="radio" name="spRate13" value="2" id="APE"></th>
			<th><input type="radio" name="spRate13" value="1" id="APE"></th>
			<th><input type="radio" name="spRate13" value="0" id="APE"></th>
			<th><input type="radio" name="spRate13" value="N/A" id="APE"></th>
	  	</tr>
		<tr>			 			 	
			<th>Is self-reliant</th>
			<th><input type="radio" name="spRate14" value="2" id="SR"></th>
			<th><input type="radio" name="spRate14" value="1" id="SR"></th>
			<th><input type="radio" name="spRate14" value="0" id="SR"></th>
			<th><input type="radio" name="spRate14" value="N/A" id="SR"></th>
	  	</tr>
		<tr>			 			 	
			<th>Communicates well</th>
			<th><input type="radio" name="spRate15" value="2" id="CW"></th>
			<th><input type="radio" name="spRate15" value="1" id="CW"></th>
			<th><input type="radio" name="spRate15" value="0" id="CW"></th>
			<th><input type="radio" name="spRate15" value="N/A" id="CW"></th>
	  	</tr>
		<tr>			 			 	
			<th>Writes effectively</th>
			<th><input type="radio" name="spRate16" value="2" id="WE"></th>
			<th><input type="radio" name="spRate16" value="1" id="WE"></th>
			<th><input type="radio" name="spRate16" value="0" id="WE"></th>
			<th><input type="radio" name="spRate16" value="N/A" id="WE"></th>
	  	</tr>
		<tr>			 			 	
			<th>Has a professional attitude</th>
			<th><input type="radio" name="spRate17" value="2" id="PA"></th>
			<th><input type="radio" name="spRate17" value="1" id="PA"></th>
			<th><input type="radio" name="spRate17" value="0" id="PA"></th>
			<th><input type="radio" name="spRate17" value="N/A" id="PA" ></th>
	  	</tr>
		<tr>			 			 	
			<th>Gives a professional appearance</th>
			<th><input type="radio" name="spRate18" value="2" id="GPA"></th>
			<th><input type="radio" name="spRate18" value="1" id="GPA"></th>
			<th><input type="radio" name="spRate18" value="0" id="GPA"></th>
			<th><input type="radio" name="spRate18" value="N/A" id="GPA"></th>
	  	</tr>
		<tr>			 			 	
			<th>Is punctual</th>
			<th><input type="radio" name="spRate19" value="2" id="PUN"></th>
			<th><input type="radio" name="spRate19" value="1" id="PUN"></th>
			<th><input type="radio" name="spRate19" value="0" id="PUN"></th>
			<th><input type="radio" name="spRate19" value="N/A" id="PUN"></th>
	  	</tr>
		<tr>			 			 	
			<th>Uses time effectively</th>
			<th><input type="radio" name="spRate20" value="2" id="IE"></th>
			<th><input type="radio" name="spRate20" value="1" id="IE"></th>
			<th><input type="radio" name="spRate20" value="0" id="IE"></th>
			<th><input type="radio" name="spRate20" value="N/A" id="IE"></th>
	  	</tr>
	</table>
   <div class="submit">
   <input type="submit" name="submitBox" value="Submit">
   </div>   
	   	</form>
    </div>
	</div>
	</div>
	</div>
</body>
</html>