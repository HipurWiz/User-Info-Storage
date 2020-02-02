<?php
// Make sure that you run this file with the form included with the file on localhost or your own domain.
if (isset($_POST["submit"]))
	$txt = '.txt';
	$message = $_POST['username'];
	$File = $message .= ".txt";
	$Handle = fopen($File, 'w');
	$Data = 0;
	fwrite($Handle, $Data);
	fclose($Handle);
	print("You were signed up as ");
	print($_POST['subject']);
?>
