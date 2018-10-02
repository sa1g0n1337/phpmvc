<?php 

if (isset($_GET['a'])) {
	switch ($_GET['a']) {
		case 'list':
			include('controllers/server/listserver.php');
			break;
		case 'add':
			include('controllers/server/addserver.php');
			break;
		case 'edit':
			include('controllers/server/editserver.php');
			break;
		case 'delete':
			include('controllers/server/deleteserver.php');
			break;
		case 'scan':
			include('controllers/server/scanserver.php');
			break;
		case 'scanall':
			include('controllers/server/scanallserver.php');
			break;
		default:
			# code...
			break;
	}
}
?>