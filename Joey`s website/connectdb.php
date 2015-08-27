<?php
error_reporting(E_ALL ^ E_DEPRECATED);
$c=mysqli_connect('localhost','joeyliux_root','lzy722198','joeyliux_01') or die("Failed to submit");
if ($c) echo "Successfully connected :-)<br>";
if(isset($_POST['name'],$_POST['pass'])){
$name1=$_POST['name'];
$date1=$_POST['date'];
$pass1=$_POST['pass'];

$timestamp = strtotime($date1);
$mydate = date('Y-m-d H:i:s', $timestamp);

//mysql_select_db('joeyliux_01') or die("fail");

if(isset($_POST['submitted'])){
	if($_POST['name']=="" or $_POST['pass']=="") die("Please complete the inputs :-(");
$query=" insert into writing(name, date,say ) value('$name1','$mydate','$pass1'); ";
mysqli_query($c,$query);
}


if(isset($_POST['history'])){
	$query="select * from writing";
$result=	mysqli_query($c,$query);
	
	while($row = mysqli_fetch_array($result)){   
//echo "<tr><td>" . $row['name'] . "</td><td>" . $row['date'] . "</td></tr>". $row['say'] . "</td></tr>"; 
echo $row['name']."    ".$row['date']."     ".$row['say'].'<br/>';
}
}
}

?>