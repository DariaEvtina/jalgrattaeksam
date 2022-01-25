
<div class="topnav">
<nav>
    <ul>
        <a class="navbar-brand" href="#">
            <img src="img/logo.png" alt="logo" style="width:40px;">
        </a>
        <a>
            <div>
                <form action="logout.php" method="post">
                    <p  id="text"><?=$_SESSION['unimi']?> on sisse loginud</p>
                    <input type="submit" value="Logi valja" name="logout">
                </form>
            </div>

        </a>
        <a href="avaleht.php">Avaleht</a>
        <a href="registreerimine.php">Registreerimine leht</a>
        <a href="teooriaeksam.php">Teooriaeksam</a>
        <a href="slaalom.php">Slaalom</a>
        <a href="ringtee.php">Ringtee</a>
        <a href="t2nav.php">Tänavasõidueksam</a>
        <a href="lubadeleht.php">Vormistamise leht</a>
    </ul>
</nav>
</div>

