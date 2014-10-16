<html> 

<head> 

  <meta name=viewport content="user-scalable=no,width=device-width" data-ajax="false" />
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
		<a href="index.html" data-icon="home">Home</a>
	</div>

		<h2>Pick Your Breed : </h2>
		<br>

		<form method="GET" action="#">
		<table>
		<tr>
			<td><input type="text" placeholder="Breed ID" /></td><td><input type="submit" data-inline="true" value="Go"/></td>
		</tr>
		</table>
		</form>


		<table>

		<tr>
			<td>No</td> <td>Breed ID</td> <td>Details</td>
		</tr>

		<tr>
			<td>1.</td> <td> B15</td> <td><a href="illnes.php" data-role="button">Medication Details</a></td>
		</tr>

		<tr>
			<td>2.</td> <td> C11</td> <td><a href="illnes.php" data-role="button">Medication Details</a></td>
		</tr>

		</table>
		

		<a href="register.php" data-role="button" data-inline="true">Add</a> <a href="#" data-role="button" data-inline="true">Delete</a>
	
</div>



</center>
</body>

</html> 