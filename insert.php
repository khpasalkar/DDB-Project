<?php
$conn=oci_connect("system","krutika","localhost/orcl");
$query=$_POST['query'];
$stid = oci_parse($conn,$query);
oci_execute($stid);
oci_free_statement($stid);
oci_close($conn);
echo "data inserted";
?>
