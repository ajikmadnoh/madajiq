<html> 

<head> 

  <meta name=viewport content="user-scalable=no,width=device-width"ajax="false" />
  <meta name="apple-mobile-web-app-capable" content="yes" />

  <link rel=stylesheet href=js/jquery.mobile-1.3.2.min.css />
  <script src=js/jquery-1.9.1.min.js></script>
  <script src=js/jquery.mobile-1.3.2.min.js>

  </script>
  

	
  
 <title>Your Farm Agree !</title>

</head> 
<body> 
<center>

<div  data-role="page" id="one" >

	<div data-role="header" position="fixed" >
		<h3>Animal Details</h3>
		<a href="index.html" data-role="button" data-icon="home">Home</a>
	</div>

		<h2>Pick Your Breed : </h2>
		<br>

		<form action="AnimalDetails1.php?=" method="get">
		<table>
		<tr>
			<td>Category </td> 
			<td>
				<form>
					<div data-role="fieldcontain">
        				
        				<select name="select-native-1" id="select-native-1">
        					<option value="1">The 1st Option</option>
        					<option value="2">The 2nd Option</option>
        					<option value="3">The 3rd Option</option>
        					<option value="4">The 4th Option</option>
        				</select>
					</div>
				</form>	
			</td>
		</tr>

		<tr>
			<td>Breed</td>

			<td>
				<form>
					<div data-role="fieldcontain">
        				<select name="select-native-1" id="select-native-1">
        					<option value="1">The 1st Option</option>
       					    <option value="2">The 2nd Option</option>
        					<option value="3">The 3rd Option</option>
        					<option value="4">The 4th Option</option>
        				</select>
					</div>
				</form>
			</td>
		</tr>
		<tr>
			<td><input type="submit" value="Enter"/></td>
		</tr>
		</form>
	
</div>



</center>
</body>

</html> 