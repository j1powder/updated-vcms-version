<?php
include "header.php";
include "db.php";
include "functions.php";
loginUser();
?>

<main>
    <div id="login-section">

  <form class="logreg-form" action="login.php" method="post">
    <label class="lbl-txt">Username</label><input class="form-control login-input" type="text" id="username" for="username" name="username"><br><br>
    <label class="lbl-txt">Password</label><input class="form-control login-input" type="text" id="password" for="password" name="password">
    <br><button class="sub-btn" id="login-btn" type="submit" value="CREATE" name="login">Login</button>
</form>  

</div>
</main>

<?php
include 'footer.php';
?>