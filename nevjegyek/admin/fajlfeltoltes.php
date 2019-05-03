<?php
if (isset($_POST['rendben'])) {
	$kimenet = "<h3>Feltöltött fájl adatai:</h3>
	<ul>
		<li>Fájlnév: {$_FILES['fajl']['name']}</li>
		<li>Ideiglenes név: {$_FILES['fajl']['tmp_name']}</li>
		<li>Hibakód: {$_FILES['fajl']['error']}</li>
		<li>Fájlméret: {$_FILES['fajl']['size']} bytes</li>
		<li>Fájltípus: {$_FILES['fajl']['type']}</li>
	</ul>";
}
?><!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<title>Fájlfeltöltés</title>
</head>

<body>
<h1>Fájlfeltöltés</h1>
<form method="post" action="" enctype="multipart/form-data">
	<?php if (isset($kimenet)) print $kimenet; ?>
	<input type="file" id="fajl" name="fajl">
	<input type="submit" id="rendben" name="rendben" value="Feltöltés">
</form>
</body>
</html>