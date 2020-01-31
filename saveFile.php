<?php
if (isset($_POST["submit"]))
	$txt = '.txt';
	$message = $_POST['subject'];
	$File = $message .= ".txt";
	$Handle = fopen($File, 'w');
	$Data = 0;
	fwrite($Handle, $Data);
	fclose($Handle);
	print("You were signed up as ");
	print($_POST['subject']);
?>