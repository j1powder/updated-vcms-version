<?php 
include "../loggedinadmin.php";
// if(isset($_POST['submit'])){
//     echo "connected";
// }
updateScore();
generateScore();

?>
<style>
    .qlabel{
        display: block;
    }
    #score-submit{
        display: inline;
    }
    #get-score{
        margin-top: 2rem;
    }
</style>
<div class="col-sm-9">
<h4>Company Scorecard</h4>
<form id="neweForm" action="adminscorecard.php" method="post">

<label class="qlabel">Select Company to Score</label><br>
<select name="companyName">
    <?php loopThruCompanies(); ?>
</select><br>
    
    <br>
    <label class="qlabel">Name of person completing this scorecard?</label><input id="acctmgr_name" class="qinput form-control" name="acctmgr_name">
    
    <br>
    <label class="qlabel">Is the Company Safety Program Present and within guidelines?</label>
    <input id="firstinput" class="yes" name="safetyprogram" type="radio" value="1"><label for="yes">&nbsp; Yes</label> 
    <input class="no" name="safetyprogram" type="radio" value="0"><label for="No">&nbsp;No</label><br><br>

    <label class="qlabel">Is the Companies Insurance acceptible?</label>
    <input class="yes" name="insurance_" type="radio" value="1"><label for="yes">&nbsp; Yes</label> 
    <input class="no" name="insurance_" type="radio" value="0"><label for="No">&nbsp;No</label><br><br>

    <label class="qlabel">Is there documented proof of training?</label>
    <input class="yes" name="proofof_training" type="radio" value="1"><label for="yes">&nbsp; Yes</label> 
    <input class="no" name="proofof_training" type="radio" value="0"><label for="No">&nbsp;No</label><br><br>

    <label class="qlabel">Does the company have a drug and alcohol program?</label>
    <input class="yes" name="drug_program" type="radio" value="1"><label for="yes">&nbsp; Yes</label> 
    <input class="no" name="drug_program" type="radio" value="0"><label for="No">&nbsp;No</label><br><br>

    <label class="qlabel">Does the company have OSHA 10 hour employee cards?</label>
    <input class="yes" name="osha_10_cards" type="radio" value="1"><label for="yes">&nbsp; Yes</label> 
    <input class="no" name="osha_10_cards" type="radio" value="0"><label for="No">&nbsp;No</label><br><br>

    <label class="qlabel">Is the company's TRIR acceptible? (2.0 or below)</label>
    <input class="yes" name="trir_acceptable" type="radio" value="1"><label for="yes">&nbsp; Yes</label> 
    <input class="no" name="trir_acceptable" type="radio" value="0"><label for="No">&nbsp;No</label><br><br>

    <label class="qlabel">Is the company's EMR acceptible?(1.0 or below)</label>
    <input class="yes" name="emr_acceptable" type="radio" value="1"><label for="yes">&nbsp; Yes</label> 
    <input class="no" name="emr_acceptable" type="radio" value="0"><label for="No">&nbsp;No</label><br><br>
    

    <label class="qlabel">Overall Score</label>
    <input  class="qinput form-control" name="overall_score" id="overall-score" placeholder="!!copy the overall score into this field prior to submission!!" value="" >

    <button id="score-submit" type="submit" name="submit">Submit Score</button>     <button id="score-update" name="update">Update Score</button> 

</form>

<button id="get-score" onClick="getValues()">get score</button>


   


</div>
</div>
</div>
</main>


<?php
include "../footer.php";
?>