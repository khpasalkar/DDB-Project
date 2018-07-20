<?php
    $pwd=$_POST['password'];
	if($pwd=='krutika')
	{
		header('Location: http://localhost/test/child1_page.html');
		exit;
	}
	else 
	{
		echo "incorrect password";
		echo "<a href=\"child1.html\">try again</a>";
	}
?>
