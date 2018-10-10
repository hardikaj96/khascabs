<?php
include 'connect.php';
include 'header.php';
if(!isset($_SESSION['signed_in']))
{
	//the user is not signed in
	echo "sorry you have to be sign in to post to that topic";
}
else if($_SERVER['REQUEST_METHOD'] != 'POST')
{
    //the form hasn't been posted yet, display it
    echo '	<div id="left"><img src="book.jpeg"></div>
		<div id="form1">
		<form method="post" action="book.php">
 	 	Car type: <select id="car" name="car">
		<option value="a">Micro</option>
		<option value="b">Sedan</option>
		<option value="c">Suv</option>
		<option value="d">KHAS share</option>
		</select><br><br>
 		Enter Source: <select id="source" name="source">
		<option value="1">Bandra</option>
		<option value="2">Colaba</option>
		<option value="3">Andheri</option>
		<option value="4">Dadar</option>
		<option value="5">Mahim</option>
		</select><br><br>
		Enter Destination: <select id="desti" name="desti">
		<option value="mira">Mira Road</option>
		<option value="ghat">Ghatkopar</option>
		<option value="juhu">Juhu</option>
		<option value="powai">Powai</option>
		</select><br><br>
		<input type="submit" value="BOOK">
 	 </form>
	</div>';
}
else
{
$desti = $_POST['desti'];
$source = $_POST['source'];
$type= $_POST['car'];
 $sql = "				SELECT 
						$desti
					FROM
						distance
					WHERE
						source = $source 
	";

						
			$result = mysqli_query($con,$sql);
 $row = mysqli_fetch_array ($result, MYSQLI_NUM);

$distance = $row[0];
$name = $_SESSION['user_name'] ;

$basefare = 100;
$est = $distance * 12 + $basefare ;
        echo 'Hey '.$name.' , Your cab is succesfully booked.<br>';
        echo '<br>Estimated Fare is Rs.'.$est.'.<br>';
    	echo '<br> Our Cab will arrive in just 5 minutes .<br>';
	echo '<br> We admire your patience <br><br>';
	echo '<img src="arrive.jpeg">';
}




include 'footer.php';
?>