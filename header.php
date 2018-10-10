<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN"
"http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="nl" lang="nl">
<head>
	
	<title>Browse all courses</title>
<style>
body {
	padding:0;
	margin:0;
	background-color: #eee;
	text-align: center;			/* make sure IE centers the page too */
}

#navigation {
  width: 100%;
  background-color: #eee;
  position: static;
}

div#logo {
  float: left;
  margin-left: 20px;
  margin-top: 4px;
  padding: 0;


}

div#navmenu {
  float: left;


}
#navigation ul {
  margin: 0;
  padding: 0; 
}
#navigation li {
  border-right: 1px solid #ddd;
  display: block;
  float: left;

  margin: 0;
}
#navigation li:last-child {
  border-right-width: 0;
}
#navigation a {
  font-family: 'Open Sans Condensed', sans-serif;
font-size: 1.1em;
  text-decoration: none;
  font-style: bold;
  background-color: #eee;
  color: #45495b;
  display: block;
  padding: 1em 2.0em;
  
  transition: all .25s ease-in-out;
  -moz-transition: all .25s ease-in-out;
  -webkit-transition: all .25s ease-in-out;
}
#navigation a:hover {
  background-color: #ddd;
}
.clearfix {
  *zoom: 1;
}
.clearfix:after, 
.clearfix:before {
  content: '';
  display: table;
}
.clearfix:after {
  clear: both;
}

#wrapper {
	padding:0;
	width: 100%;
	margin: 0 auto; 	/* center the page */
	background-color:#eee;
	}

#content {
	background-color: #eee;
	border: 1px solid #eee;
	float: left;
	font-family: Arial;
	padding: 20px 30px;
	text-align: left;
	width: 100%;				/* fill up the entire div */
}

#menu {
	float: left;
	
	border-bottom: none;		/* avoid a double border */
	clear: BOTH;				/* clear:both makes sure the content div doesn't float next to this one but stays under it */
	width:100%;
	height:25px;
	padding: 0 30px;
	background-color: #eee;
	text-align: left;
	
}

#menu a:hover {
	background-color: #ddd;
}

#userbar {
	background-color: #eee;
	//font-size:1.5em;
	display:inline;
	
	
	float: right;
	
	
}


#form1{
	margin-top:200px;
	margin-left:700px;
	position:absolute;
	
	
}
#container a{
	text-decoration:none;
	visited:none;
	color:black;
}

#left{
margin-top:50px;
position:absolute;
width:45%;
height:100%;
background-color:#f2f2f2;
padding:0;

}

#footer {
	clear: both;
}

/* begin table styles */
table {
	border-collapse: collapse;
	width: 80%;
	margin-right:10px;
	padding-right:10px;
}

table a {
	color: #000;
	text-decoration:none;
}

table a:hover {
	color:#373737;
	text-decoration: none;
}

th {
	background-color: #DDD;
	color: black;
}

td {
	padding: 5px;
}

/* Begin font styles */
h1, #footer {
	font-family: Arial;
	color: #F1F3F1;
}

h3 {margin: 0; padding: 0;}
#courses h1{
	color:black;
  font-family: 'Open Sans Condensed', sans-serif;
font-size: 2.5em;
position: relative;
text-align: center;

}

/*courses styles*/

#container{
	margin-left:7%;
	position:absolute;
	clear:both;
}

#container1{
	position:absolute;
	margin-left:37%;
}
#container2{
	position:absolute;
	margin-left:67%;
}


/* Menu styles */



.leftpart {
	width: 70%;
}

.rightpart {
	width: 30%;
}

.small {
	font-size: 75%;
	color: #373737;
}
#footer {
	font-size: 65%;
	padding: 3px 0 0 0;
}

.topic-post {
	height: 100px;
	overflow: auto;
}

.post-content {
	padding: 30px;
}

textarea {
	width: 500px;
	height: 200px;
}
</style>

</head>

<body>

	<div id="wrapper">
	<nav id="navigation" class="clearfix">
	<div id="logo">
		
	</div>	
	
	<div id="navmenu">
  <ul>
    <li><a href="../website/index.html">HOME</a></li>
	<li><a href="book.php">Book A Cab</a></li>
    <li><a href="fares.php">Cab Fares</a></li>
	
    
  </ul>

</div>
  <div id="userbar">
<?php
 session_start();
 if(isset($_SESSION['signed_in'])){
   echo '<li> <a>Welcome, ' . $_SESSION['user_name'] . '</a></li>';
   echo   ' ' . '<li><a href="signout.php"> Sign Out</a></li> ';
	 
	 	}
 	else
 	{
 		echo '<li><a href="signin.php">Sign in</a> </li><li><a href="signup.php">Create an account</a></li>.';
 	}
?>
</div>
</nav>
		

</div>
		<div id="content">
	


