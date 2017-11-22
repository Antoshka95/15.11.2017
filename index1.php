<html>
	<body>
		<form action="GET" action="date.php">
			<input type="date" name="value">
			<input type="submit" value="Узнать день недели">
		</form>
		<?php
			$myDate = new DateTime;
			echo $myDate->format('D');
		?>
	</body>
</html>