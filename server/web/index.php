<?php
	ob_start();
 ?>

<!DOCTYPE html>
<html>
	<head>
		<title><?php $title = 'SKAP'; echo $title;?></title>
		<link type="text/css" rel="stylesheet" href="src/css/reset.css">
		<link type="text/css" rel="stylesheet" href="src/css/style.css">
		<link href='https://fonts.googleapis.com/css?family=Lato:400,300' rel='stylesheet' type='text/css'>
		<meta charset="utf-8">
	</head>
	<body>
		<div id="page">
			<div id="header">
				<h1>SKAP</h1>
				<h6>SmartKey Administration Panel</h6>
				<?php
					$datab = mysqli_connect('5.230.10.116', 'smartkey', '123456', 'smartkey') or die("Can't Connect!");
					$result	 = mysqli_query($datab, "SELECT * FROM `skap`") or die("Can't execute query!");
					echo '
							<table border="1">
								<tr>
									<th>Datum/Zeit</th>
									<th>Bild</th>
									<th>Fehlgeschlagen</th>
								</tr>';
					while ($line = mysqli_fetch_array($result, MYSQL_ASSOC)) {						
					  echo "<tr>";
					  echo "<td>". $line['time'] . "</td>";
					  if (!empty($line['img_url'])) {echo "<td>". $line['img_url'] . "</td>";}
					  echo "<td>". $line['failed'] . "</td>";
					  echo "</tr>";
					}
					echo "</table>";

					mysqli_free_result($result);

				?>
      </div>
    </div>
  </body>
</html>
