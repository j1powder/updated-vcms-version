<?php
include "header.php";
include "db.php";
include "functions.php";
createCompanies();
?>


<main>
    <section id="regstr-form-section">
        <h2>Register for an account</h2>

        <form class="logreg-form" action="register.php" method="post">
            <label class="lbl-txt"> Contact Name</label><input class="form-control" type="text" id="contactName" for="contactName" name="contactName">
            <label class="lbl-txt">Company Name</label><input class="form-control" type="text" id="companyName" for="companyName" name="companyName">
            <label class="lbl-txt">Phone</label><input class="form-control" type="phone" id="companyPhone" for="companyPhone" name="companyPhone">
            <label class="lbl-txt">Email</label><input class="form-control" type="email" id="companyEmail" for="companyEmail" name="companyEmail">

        <br><button class="sub-btn" id="reg-btn" type="submit" value="CREATE" name="submit">Submit</button>
        </form>
    </section>
</main>


<?php
include 'footer.php';
?>