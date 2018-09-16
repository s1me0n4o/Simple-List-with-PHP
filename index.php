
<!DOCTYPE html>
<html>
<head>
	<title>test</title>
</head>
<body>
<table>
	<tr></tr>
</table>

<?php 

include('form.php');
include('db_select.php');

session_start();
form();
?>
<br>
<br>
<?php
lst();

session_destroy();
?>


</form>
</body>
</html>