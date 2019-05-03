<?php
require("kapcsolat.php");

$kifejezes = (isset($_POST['kifejezes'])) ? $_POST['kifejezes'] : "";
$sql = "SELECT *
		FROM nevjegyek
		WHERE (
			nev LIKE '%{$kifejezes}%'
			OR cegnev LIKE '%{$kifejezes}%'
			OR mobil LIKE '%{$kifejezes}%'
			OR email LIKE '%{$kifejezes}%'
		)
		ORDER BY nev ASC";
$eredmeny = mysqli_query($dbconn, $sql);

$kimenet = "";
while ($sor = mysqli_fetch_assoc($eredmeny)) {
	$kimenet.= "<article>
		<h2>{$sor['nev']}</h2>
		<h3>{$sor['cegnev']}</h3>
		<p>Mobil: <a href=\"tel:{$sor['mobil']}\">{$sor['mobil']}</a></p>
		<p>E-mail: <a href=\"mailto:{$sor['email']}\">{$sor['email']}</a></p>
	</article>\n";
}
?><!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<title>Névjegykártyák</title>
<link href="stilus.css" rel="stylesheet">
</head>

<body>
<h1>Névjegykártyák</h1>
<form method="post" action="">
	<input type="search" id="kifejezes" name="kifejezes">
</form>
<?php print $kimenet; ?>
</body>
</html>