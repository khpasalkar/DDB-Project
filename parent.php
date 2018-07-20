<?php
    $pwd=$_POST['password'];
	if($pwd=='krutika')
	{
		header('Location: http://localhost/test/parent_page.html');
		exit;
	}
	else 
	{
		echo "incorrect password";
		echo "<a href=\"parent.html\">try again</a>";
	}
?>
