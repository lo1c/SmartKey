<?php
	include 'db.php';
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
				<!--<?php/*
					//$datab = getConnection('172.16.105.242', 'root', 'a367908', 'smartkey');
					exit;
					$result	 = mysqli_query($db, "SELECT * FROM `skap`") or die("Can't execute query!");
					echo '<table border="1">';
					while ($line = mysqli_fetch_array($result, MYSQL_ASSOC)) {
					  echo "<tr>";
					  echo "<td>". $line['time'] . "</td>";
					  echo "<td>". $line['img_url'] . "</td>";
					  echo "<td>". $line['failed'] . "</td>";
					  echo "</tr>";
					}
					echo "</table>";

					mysqli_free_result($result);

				*/ ?> -->
				<table>
					<tr>
							<th>Datum/Zeit</th>
							<th>Bild</th>
							<th>Fehlgeschlagen</th>
				</tr>
					<tr>
						<td>7.3.2015, 20:54:32</td>
						<td><a href="/07.03.2015-20:54:32.png.jpg">172.16.105.242/07.03.2015-20:54:32.png</a></td>
						<td>True</td>
					</tr>
					<tr>
						<td>21.5.2016, 12:31:01</td>
						<td><a href="">172.16.105.242/21.05.2016-12:31:01.png</a></td>
						<td>False</td>
					</tr>
					<tr>
						<td>12.6.2016, 13:02:31</td>
						<td><a href="">172.16.105.242/12.06.2016-13:02:31.png</a></td>
						<td>False</td>
					</tr>
					<tr>
						<td>12.6.2016, 13:06:59</td>
						<td><a href="">172.16.105.242/12.06.2016-13:06:59.png</a></td>
						<td>False</td>
					</tr>
					<tr>
						<td>12.6.2016, 13:07:44</td>
						<td><a href="">172.16.105.242/12.06.2016-13:07:44.png</a></td>
						<td>True</td>
					</tr>
				</table>
      </div>
    </div>
  </body>
</html>
