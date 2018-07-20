<html>
<head>
<title>
Main Page
</title>
<style>
body{
background-color:lightblue;
}
li{
float:left;
list-style:none;
width:300px;
}
</style>
</head>
<body>
<body>
<hr>
<h1><center>THEATRE MANAGEMENT SYSTEM</center></h1>
<hr>
<form action="main.php" method="post">
<label>ENTER YOUR QUERY HERE: </label><br>
<textarea name="query"></textarea>
<br>
<input type="Submit">
</form>
<hr>
<br>
<?php
$conn=oci_connect("system","krutika","localhost/orcl");
if($_POST['query'])
{ 
$query=$_POST['query'];
$stid = oci_parse($conn,$query);
oci_execute($stid);
if(oci_num_rows($stid)>0)
{
echo "<table border='1'>\n";
while ($row1 = oci_fetch_array($stid, OCI_ASSOC+OCI_RETURN_NULLS)) {
    echo "<tr>\n";
    foreach ($row1 as $item1) {
        echo "    <td>" . ($item1 !== null ? htmlentities($item1, ENT_QUOTES) : "&nbsp;") . "</td>\n";
    }
    echo "</tr>\n";
}
echo "</table>\n";
}
else{
	 echo "no data";
}}
else{
	
	echo "No query ";
}


//oci_free_statement($stid);
oci_close($conn);
?>


</body>
</html>

