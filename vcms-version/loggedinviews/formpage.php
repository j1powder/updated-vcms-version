<?php
include '../loggedinheader.php';

createAnotherEntry();
?>

<div class="col-sm-9">
<form class="qform" action="formpage.php" method="post">
    <label class="qlabel">Legal Company Name</label><input class="qinput form-control" name="legal_co_name">
    <label class="qlabel">Company Address</label><input class="qinput form-control" name="co_address">
    <label class="qlabel">Company Phone</label><input class="qinput form-control" name="co_phone">
    <label class="qlabel">Company Email</label><input class="qinput form-control" name="co_email">
    <label class="qlabel">Safety Coordinator Name</label><input class="qinput form-control" name="sc_name">
    <label class="qlabel">Safety Coordinator Phone</label><input class="qinput form-control" name="sc_phone">
    <label class="qlabel">How many years has the company been in business</label><input class="qinput form-control" name="years_in_biz">
    <label class="qlabel">How many current employees</label><input class="qinput form-control" name="current_employees">
    <label class="qlabel">Tax ID Number</label><input class="qinput form-control" name="tax_id">
    <label class="qlabel">Does the Company Work in a Process Mgmt Facility?</label><input class="qinput form-control" name="proc_mgmt_fac">
    <label class="qlabel">Does the Company perform work under DOT?</label><input class="qinput form-control" name="work_dot">
    <label class="qlabel">Does the Company Perform work under MSHA?</label><input class="qinput form-control" name="work_msha">
    <label class="qlabel">What is your NAICS Code?</label><input class="qinput form-control" name="naics">
    <label class="qlabel">What is your TRIR?</label><input class="qinput form-control" name="trir">
    <label class="qlabel">What is your EMR?</label><input class="qinput form-control" name="emr">


    
    <button type="submit" class="sub-btn" name="submit">Submit</button>
</form>

</div>
</div>
</div>
</main>

<?php
include '../footer.php';
?>
