<?php
if (isset($_POST['submit'])) {

	$name = $_POST['shopname'];
	$ownername = $_POST['ownername'];

	echo $name.'\n'.$ownername;
	
}
?>