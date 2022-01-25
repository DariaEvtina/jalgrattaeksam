<?php
require_once("konf.php");
global $yhendus;
session_start();
if(!empty($_REQUEST["teooriatulemus"])){
    $kask=$yhendus->prepare(
        "UPDATE jalgrattaeksam SET teooriatulemus=? WHERE id=?");
    $kask->bind_param("ii", $_REQUEST["teooriatulemus"], $_REQUEST["id"]);
    $kask->execute();
}
$kask=$yhendus->prepare("SELECT id, eesnimi, perekonnanimi 
     FROM jalgrattaeksam WHERE teooriatulemus=-1");
$kask->bind_result($id, $eesnimi, $perekonnanimi);
$kask->execute();
if(isset($_REQUEST['kustuta'])){
    $kask=$yhendus->prepare("DELETE FROM jalgrattaeksam WHERE id=?");
    $kask->bind_param("i",$_REQUEST['kustuta']);
    $kask->execute();

}
?>
<!doctype html>
<html>
<head>
    <title>Teooriaeksam</title>
    <link rel="stylesheet" href="css/style.css" type="text/css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css">
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.bundle.min.js"></script>
</head>
<body>

<div class="header"><h1>Teooriaeksam</h1></div>
<?php include("navigation.php");
if($_SESSION['admin']==true) {
?>

<table>
    <?php
    $txt="Kas sa tahad kustutada see opilane";
    while($kask->fetch()){
        echo "
		    <tr>
			  <td>$eesnimi</td>
			  <td>$perekonnanimi</td>
			  <td><form action=''>
			         <input type='hidden' name='id' value='$id' />
					 <input type='text' name='teooriatulemus' />
					 <input type='submit' value='Sisesta tulemus' />
			      </form>
			  </td>
			  <!--<td><a href='?kustuta=$id' onclick='return confirm($txt)'>X</a></td>-->
			</tr>
		  ";
    }
    ?>
</table>
<?php }
if($_SESSION['admin']==false) {
    echo"<p>Seda lehte vaadta ainult administraator</p>";
}?>
</body>
<?php include("footer.php");
?>
</html>

