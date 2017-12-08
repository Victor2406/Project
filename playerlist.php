<html>
<head></head>

<body>

<table>
	<tr><td>Player</td><td>Team</td><td>&nbsp;Mascot</td></tr>
	<?php 

		foreach ($nbas as $player => $nba)
		{
			echo '<tr><td><a href="index.php?player='.$nba->player.'">'.$nba->player.'</a></td><td>'.$nba->team.'</td><td>('.$nba->mascot.')</td></tr>';
		}

	?>
</table>

</body>
</html>