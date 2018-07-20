<?php
    $pwd=$_POST['password'];
	if($pwd=='krutika')
	{
		header('Location: http://localhost/test/child2_page.html');
		exit;
	}
	else 
	{
		echo "incorrect password";
		echo "<a href=\"child2.html\">try again</a>";
	}
?>
