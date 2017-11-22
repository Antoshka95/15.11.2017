<html>
	<body>

		<?php
			if(isset($_GET['value'])) {
				$myDate = DateTime::createFromFormat(
					'Y-m-d',
					$_GET['value']
				);
			};
		?>
				<form method="GET" action="index.php">
					<input type="date" name="value" value="<?php
						if(isset($myDate)) {
							echo htmlspecialchars ($myDate->format('Y-m-d'));
						}
						?>">
					<input type="submit" value="Узнать день недели">
				</form>
				<?php
				if (isset($myDate)) {
					echo $myDate->format('D');
				}
				?>
	</body>
</html>