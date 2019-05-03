<?php
require("../kapcsolat.php");

// Űrlap feldolgozása
if (isset($_POST['rendben'])) {

	// Változók tisztítása
	$nev    = strip_tags(ucwords(strtolower(trim($_POST['nev']))));
	$cegnev = strip_tags(trim($_POST['cegnev']));
	$mobil  = strip_tags(trim($_POST['mobil']));
	$email  = strip_tags(strtolower(trim($_POST['email'])));

	// Változók vizsgálata
	if (empty($nev))
		$hibak[] = "Nem adtál meg nevet!";
	elseif (strlen($nev) < 5)
		$hibak[] = "Rossz nevet adtál meg!";
	if (!empty($mobil) && strlen($mobil) < 9)
		$hibak[] = "Rossz mobil számot adtál meg!";
	if (!empty($email) && !filter_var($email, FILTER_VALIDATE_EMAIL))
		$hibak[] = "Rossz e-mail címet adtál meg!";

	// Hibaüzenetet összeállítása
	if (isset($hibak)) {
		$kimenet = "<ul>\n";
		foreach($hibak as $hiba) {
			$kimenet.= "<li>{$hiba}</li>\n";
		}
		$kimenet.= "</ul>\n";
	}
	else {
		// Felvitel az adatbázisba
		$id = (int)$_POST['id'];
		$sql = "UPDATE nevjegyek
				SET nev = '{$nev}', cegnev = '{$cegnev}', mobil = '{$mobil}', email = '{$email}'
				WHERE id = {$id}";
		mysqli_query($dbconn, $sql);
		header("Location: lista.php");
	}
}

// Űrlap előzetes kitöltése
else {
	$id = (int)$_GET['id'];
	$sql = "SELECT *
			FROM nevjegyek
			WHERE id = {$id}";
	$eredmeny = mysqli_query($dbconn, $sql);
	$sor = mysqli_fetch_assoc($eredmeny);

	$nev    = $sor['nev'];
	$cegnev = $sor['cegnev'];
	$mobil  = $sor['mobil'];
	$email  = $sor['email'];
}
// Űrlap megjelenítése
?><!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<title>Névjegykártyák</title>
<link href="../stilus.css" rel="stylesheet">
</head>

<body>
<h1>Névjegykártyák</h1>
<form method="post" action="">
	<?php if (isset($kimenet)) print $kimenet; ?>
	<input type="hidden" id="id" name="id" value="<?php print $id; ?>">
	<p><label for="nev">Név*:</label><br>
	<input type="text" id="nev" name="nev" value="<?php print $nev; ?>"></p>
	<p><label for="cegnev">Cégnév:</label><br>
	<input type="text" id="cegnev" name="cegnev" value="<?php print $cegnev; ?>"></p>
	<p><label for="mobil">Mobil:</label><br>
	<input type="tel" id="mobil" name="mobil" value="<?php print $mobil; ?>"></p>
	<p><label for="email">E-mail:</label><br>
	<input type="email" id="email" name="email" value="<?php print $email; ?>"></p>
	<p><em>A *-gal jelölt mezők kitöltése kötelező!</em></p>
	<input type="submit" id="rendben" name="rendben" value="Rendben">
	<input type="reset" value="Mégse">
	<p><a href="lista.php">Vissza a névjegyekhez</a></p>
</form>
</body>
</html>