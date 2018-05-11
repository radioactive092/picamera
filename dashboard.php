<?php include('action/dashboard_action.php'); ?>

<?php if(!(isset($_SESSION['username']))) { include('/loginsystem/nopermission.php'); } else { ?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
    <head>
        <meta charset="utf-8">
        <title>Dashboard</title>
        <link rel="stylesheet" type="text/css" href="css/dashboard_style.css">
    </head>
    <h3>Change Settings</h3>
    <body>
        <div class="container">
        <form  name="form1" action="/editsettings.php" method="post">

            <div class="row">
                <div class="col-25">
                    <label for="Email1">From Email :
                    </label>
                </div>
                <div class="col-75">
                    <input type="text" id="Email1" name="semail">
                </div>
            </div>
            <div class="row">
                <div class="col-25">
                    <label for="Pd">Password :
                    </label>
                </div>
                <div class="col-75">
                    <input type="password" id="Pd" name="passwd">
                </div>
            </div>
            <div class="row">
                <div class="col-25">
                    <label for="em2">To Email :
                    </label>
                </div>
                <div class="col-75">
                    <input type="text" id="em2" name="temail">
                </div>
            </div>
            <div class="row">
                <div class="col-25">
                    <label for="emi">Email minimum interval :
                    </label>
                </div>
                <div class="col-75">
                    <input type="text" id="emi" name="interval">
                </div>
            </div>
                <br>
            <div class="row">
                <input type="submit" name="submit" value="Submit">
            </div>
        </form>
    </div>
<br><br><br>
<div class="container2">
        <form name="form2" action="/changelogincred.php" method="post">
	<h3>Change Login Credentials</h3>
            <div class="row">
                <div class="col-25">
                    <label for="uid1">User ID :
                    </label>
                </div>
                <div class="col-75">
                    <input type="text" id="uid1" name="uid">
                </div>
            </div>
            <div class="row">
                <div class="col-25">
                    <label for="passwd1">Password :
                    </label>
                </div>
                <div class="col-75">
                    <input type="password" id="passwd1" name="password">
                </div>
            </div>
            <br>
            <div class="row">
                <input type="submit" name="submit" value="Submit">
            </div>
        </form>
</div>

 <br><br>
        <div class="container3">
            <button class="button">
            <a target="_blank" href="documentation/FAQ.html" style="text-decoration: none; color: #fff;" >FAQ</a></button>

            <button class="button">
            <a target="_blank" href="http://<?php echo $_SERVER['HTTP_HOST']; ?>:7001" style="text-decoration: none; color: #fff;" >View Stream</a></button>
            <button class="button">
            <a href="/updatesystem.php" style="text-decoration: none; color: #fff;">Update System</a></button>
            <button class="button">
            <a href="http://<?php echo $_SERVER['HTTP_HOST']; ?>/logout.php" style="text-decoration: none; color: #fff;">Logout</a></button>
        </div>
    </body>
</html>

<?php } ?>
