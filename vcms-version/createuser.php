<?php
include "header.php";
include "db.php";
include "functions.php";
createUsers();
?>

<form class="logreg-form" action="createuser.php" method="post">
            <label class="lbl-txt"> First Name</label><input class="form-control" type="text" id="firstname" for="firstname" name="firstname">
            <label class="lbl-txt">Last Name</label><input class="form-control" type="text" id="lastname" for="lastname" name="lastname">
            <label class="lbl-txt">Username</label><input class="form-control" type="text" id="username" for="username" name="username">
            <label class="lbl-txt">Password</label><input class="form-control" type="text" id="password" for="password" name="password">


        <br><button class="sub-btn" id="reg-btn" type="submit" value="CREATE" name="submit">Submit</button>
        </form>

        <?php
include 'footer.php';
?>