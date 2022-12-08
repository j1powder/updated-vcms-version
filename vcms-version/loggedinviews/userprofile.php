<?php
include "../loggedinheader.php";
updateUserData();
if(isset($_POST['submit'])){
    echo "connected";
}
?>
<style>
#demo-data-form{
    display: none;
}
#user-data{
    background-color: lightgrey;
    padding: 2rem 3rem;
    margin-bottom: 2rem;
    border-radius: 5px;
    box-shadow: 1px 1px 3px 3px grey;
}
</style>
<div class="col-sm-9">
 <br>
 <div id="user-data">   
<label>First Name</label>
<p ><?php echo $_SESSION['firstname']; ?></p>
<label>Last Name</label>
<p ><?php echo $_SESSION['lastname']; ?></p>
<label>Address</label>
<p><?php echo $_SESSION['address']?> <br> <?php echo $_SESSION['city'] . ", ", $_SESSION['state'] . " ",  $_SESSION['zip']; ?></p>
<label>Phone</label>
<p ><?php echo $_SESSION['phone']; ?></p>
<label>Email</label>
<p ><?php echo $_SESSION['email']; ?></p>
</div>
<button id="demo-data-btn" class="sub-btn" onClick="showForm()" >Update Demographic Data</button>



<form id="demo-data-form" action="userprofile.php" method="post">
    <label class="qlabel">Address</label><input class="qinput form-control" name="address">
    <label class="qlabel">City</label><input class="qinput form-control" name="city">
    <label class="qlabel">State</label><input class="qinput form-control" name="state">
    <label class="qlabel">Zip</label><input class="qinput form-control" name="zip">
    <label class="qlabel">Cell Phone</label><input class="qinput form-control" name="phone">
    <label class="qlabel">Email</label><input class="qinput form-control" name="email">
    <br>
    <button type="submit" id="enter-data" name="submit">Submit</button>
</form>
</div>
</div>
</div>





<?php 
include "../footer.php";
?>