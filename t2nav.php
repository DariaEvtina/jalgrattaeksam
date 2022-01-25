<?php
require_once("konf.php");
global $yhendus;
session_start();
$kask=$yhendus->prepare(
    "SELECT id, eesnimi, perekonnanimi, teooriatulemus, 
	     slaalom, ringtee, t2nav, luba FROM jalgrattaeksam;");
$kask->bind_result($id, $eesnimi, $perekonnanimi, $teooriatulemus,
    $slaalom, $ringtee, $t2nav, $luba);
$kask->execute();
?>
<!doctype html>
<html>
<head>
    <title>Lõpetamine</title>
    <link rel="stylesheet" href="css/style.css" type="text/css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css">
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.bundle.min.js"></script>
</head>
<body>

<div class="header"><h1>Tänavasõidueksam</h1></div>
<?php include("navigation.php");
if($_SESSION['admin']==true) {
?>

<table>
    <?php
    while($kask->fetch()){
        echo "
		     <tr>
			   <td>$eesnimi</td>
			   <td>$perekonnanimi</td>
			   <td>$teooriatulemus</td>
			   <td>$slaalom</td>
			   <td>$ringtee</td>
			   <td>$t2nav</td>
			   <td>$luba</td>
			 </tr>
		   ";
    }
    ?>
</table>
<?php
}
if($_SESSION['admin']==false) {
    echo"<p>Seda lehte vaadta ainult administraator</p>";
}?>
</body>
<?php include("footer.php");
?>
</html>

