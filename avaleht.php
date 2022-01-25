<?php
session_start();
?>
<!doctype html>
<html>
<head>
    <title>Kasutaja registreerimine</title>
    <link rel="stylesheet" href="css/style.css" type="text/css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css">
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.bundle.min.js"></script>
</head>
<body>

<div class="header"><h1>Avaleht</h1></div>
<?php include("navigation.php");
?>
<h4>Palun registreeruge eksamile</h4><br>
<a href="registreerimine.php">registreerimine</a>
</body>
<?php include("footer.php");
?>
</html>