<?php
$conn=oci_connect("system","krutika","localhost/orcl");
if($_POST['query'])
{ $query=$_POST['query'];
$stid = oci_parse($conn,$query);
oci_execute($stid);

if(oci_num_rows($stid)>0)
{
echo "<table border='1'>\n";
while ($row = oci_fetch_array($stid, OCI_ASSOC+OCI_RETURN_NULLS)) {
    echo "<tr>\n";
    foreach ($row as $item) {
        echo "    <td>" . ($item !== null ? htmlentities($item, ENT_QUOTES) : "&nbsp;") . "</td>\n";
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
oci_close($conn);
?>