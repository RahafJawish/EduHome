<html>
	<head>
		<title> My Fisrt Page </title>
	</head>

	<body>
		<!-- Header -->
		<div id="container" style="width: 1340px;">
		<div id="header" style="background-color: #3300cc; height: 95px; "><br/>
			<h1 style="color: #f0f0f0;" align="center"><b> ITE Damascus </b></h2>
		</div>
		
		<div id="menu" style="background-color: #ff3366; float:left; width: 170px; height: 500px;">
			  <b style="color: #f0f0f0"><br/><br/>
			<li> <a style="color: #f0f0f0" href="index.php?s=subjects">  Subjects </a></li><br/>
			<li> <a style="color: #f0f0f0" href="index.php?s=mark"> Students marks </a></li><br/>
			<li> <a style="color: #f0f0f0" href="index.php?s=aboutpr"> About programmer </a></li>
			  </b>
		</div>
		<div id="contant" style="background-color: #e8e8e8; width: 1340px; height: 500px;">
		
		
		<!-- Content -->
		<?php		
		if (isset($_GET['s']))
		  if ($_GET['s'] =='subjects')
		  {
		  	?>
		  	<table style="width:1100px">
		  	<style>
		 table,th,td
		 {
		 	border:1px solid gray;
		 	border-collapse:collapse
		 }
		 
		 th, td
		 {
		 	padding:15px;
		 }

		    </style>
		  		<colgroup>
		  		 <col span="1" style="background-color: #ccffff" />
		  		 <col span="1" style="background-color: #ccccff" />
		  		 <col span="1" style="background-color: #cc99ff" />
		  		 <col span="1" style="background-color: #cc99cc" />
		  		 <col span="1" style="background-color: #cccccc" />
		  		 <col span="1" style="background-color: #ccffcc" />
		  		</colgroup>
		  		
		  		<caption><b> Second year, Second semester subjects </b></caption>
		  		<tr>
		  			<th> Algorithms2 </th>
		  			<th> Digital communications </th>
		  			<th> Computer architecture1 </th>
		  			<th> Numerical analysis </th>
		  			<th> Communications skills </th>
		  			<th> English4 </th>
		  		</tr>
		  		
		  		<tr>
		  			<td> Dr.Madleen Aboud </td>
		  			<td> Dr.Emad Al-deen Mohammed </td>
		  			<td> Dr.Sira Astour </td>
		  			<td> Dr.Abd Allah Al-Omar </td>
		  			<td> Dr.Mohammed Hesham Hawood </td>
		  			<td> Ms.Mirna Kassam </td>
		  		</tr>
		  		
		  	<!--	<tr>
		  			<img src="" width="" height=""/>
		  			<img src="" width="" height=""/>
		  			<img src="" width="" height=""/>
		  	</tr> -->
		  	</table>		  	
		  	<?php
		  }
		  else if ($_GET['s'] == 'aboutpr')
		  {
		  	include 'mydata.php';
		  	?>
		  	<form method="POST" action="index.php?s=aboutpr">
		  		<p> you can't get there until you enter your </p>
		  		First name: <input type="text" name="first" /> <br/>
		  		Last name: <input type="text" name="last" /> <br/>
		  		E-mail: <input type="text" name="email" /> <br/>
		  		Password: <input type="password" name="pass"/> <br/>
		  		<input type="submit" value="Send" />
		  	</form>
		  	<?php
		  	if (isset($_POST['first']) && isset($_POST['pass']))
			{
				$any = mysql_query("SELECT * FROM students;");
				$result = mysql_fetch_assoc($any);
				
				while (! $result['first_name'] == $_POST['first'] )
				{
					$result = mysql_fetch_assoc($any);
				}
				
				if ($result['email'] == $_POST['email'])
				  if ($result['password'] == $_POST['pass'])
				  {
				  	?><a href = "index.php"> Go </a> <?php
				  }				     
				   else
					 echo "you're liar";
			}
		  }
		?>
	</div>
		<!-- Footer -->
			
<div id="footer" style="background-color: #cc0033; width: 1340px; height: 50px; text-align: center; clear: both;">
		<ul style=" float: left">
		<a href="http://facebook.com"><img src="logo_facebook.png" width="30" height="30" alt="facebook"></a>			
	    <a href="http://twitter.com"><img src="logo_twitter.jpg" width="30" height="30" alt="twitter"></a>
		<a href="http://youtube.com"><img src="logo_youtube.jpg" width="30" height="30" alt="youtube"></a>
		</ul>

		<br>Copyright © 2014 ITE_Damascus </br>
	</div>
 </div>

	</body>

</html>