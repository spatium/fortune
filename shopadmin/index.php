<?php
require($_SERVER["DOCUMENT_ROOT"].'/core/MenuCore.php');
?>
<html>
<head></head>
<body>
<form action="/f-control/menu.php" method="post" name="form">
	<label>Name:</label><input type="text" name="name_base" /><input type="submit" />
</form>
</body>
</html>