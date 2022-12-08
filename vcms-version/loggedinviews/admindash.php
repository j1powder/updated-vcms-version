<?php
include "../loggedinadmin.php";

?>
<style>
#data-table, #data-row, .data-head, .data-data {
border: 1px solid black;
padding: 10px;
}
</style>    

<div class="col-sm-10">

<!-- <label>Company</label>
                        <select id="company">
    
    <?php
                 global $connection;
                 //$companytouse = $_SESSION['company_id'];
                 //$company = $_SESSION['companyName'];
					$selectQuery = "SELECT companyName FROM vcms_companies";
					$squery = mysqli_query($connection, $selectQuery);
					//$result = mysqli_fetch_assoc($squery);
					while (($result = mysqli_fetch_assoc($squery))) {
				?>
                   
                        
                            <option value="<?php echo implode(" ",$result); ?>" ><?php echo implode(" ",$result); ?></option>
                        
                        <?php
					}
				?>
                </select><br>
<h4><?php loopThruCompanies(); ?></h4> -->
<table id="data-table">
<tr id="data-row">
 <th class='data-head'>Company Name</th>
 <?php
                 global $connection;
                 //$companytouse = $_SESSION['company_id'];
                 //$company = $_SESSION['companyName'];
					$selectQuery = "SELECT companyName FROM vcms_companies";
					$squery = mysqli_query($connection, $selectQuery);
					//$result = mysqli_fetch_assoc($squery);
					while (($result = mysqli_fetch_assoc($squery))) {
				?>
 <td class='data-data' style="color: blue;"><b><?php echo implode(" ",$result); ?></b></td> <?php } ?>
   
</tr>
<tr id="data-row">
 <th class='data-head'>Company Contact</th>
 <?php
                 global $connection;
                 //$companytouse = $_SESSION['company_id'];
                 //$company = $_SESSION['companyName'];
					$selectQuery = "SELECT contactName FROM vcms_companies";
					$squery = mysqli_query($connection, $selectQuery);
					//$result = mysqli_fetch_assoc($squery);
					while (($result = mysqli_fetch_assoc($squery))) {
				?>
 <td class='data-data'><?php echo implode(" ",$result); ?></td> <?php } ?>
   
</tr>
<tr id="data-row">
 <th class='data-head'>Current Number of Employees</th>
 <?php
                 global $connection;
                 //$companytouse = $_SESSION['company_id'];
                 //$company = $_SESSION['companyName'];
					$selectQuery = "SELECT current_employees FROM vcms_companies";
					$squery = mysqli_query($connection, $selectQuery);
					//$result = mysqli_fetch_assoc($squery);
					while (($result = mysqli_fetch_assoc($squery))) {
				?>
 <td class='data-data'><?php echo implode(" ",$result); ?></td> <?php } ?>
   
</tr>
<tr id="data-row">
 <th class='data-head'>Current Total Recordable Incident Rate(TRIR)</th>
 <?php
                 global $connection;
                 //$companytouse = $_SESSION['company_id'];
                 //$company = $_SESSION['companyName'];
					$selectQuery = "SELECT trir FROM vcms_companies";
					$squery = mysqli_query($connection, $selectQuery);
					//$result = mysqli_fetch_assoc($squery);
					while (($result = mysqli_fetch_assoc($squery))) {
				?>
 <td class='data-data'><?php echo implode(" ",$result); ?></td> <?php } ?>
   
</tr>
<tr id="data-row">
 <th class='data-head'>Current Experience Modification Rate(EMR)</th>
 <?php
                 global $connection;
                 //$companytouse = $_SESSION['company_id'];
                 //$company = $_SESSION['companyName'];
					$selectQuery = "SELECT emr FROM vcms_companies";
					$squery = mysqli_query($connection, $selectQuery);
					//$result = mysqli_fetch_assoc($squery);
					while (($result = mysqli_fetch_assoc($squery))) {
				?>
 <td class='data-data'><?php echo implode(" ",$result); ?></td> <?php } ?>
   
</tr>

<tr>

 <td class='data-data'></td> 
 <td class='data-data'>Data</td>   
 <td class='data-data'>Data</td>   
 <td class='data-data'>Data</td>   
 <td class='data-data'>Data</td>     
</tr>




</table>




<form>
                        <br><br>
                        <label for="insurance">Insurance Approved?</label>
                        <select id="insurance" class="form-control">
                            <option value='Yes' name='Yes'>Yes</option>
                            <option value='No' name='No'>No</option>
                        </select><br>
                        <button type="submit" name='submit'>Submit</button>
                    </form>
                    </div>
                </div>
            </div>
                    </main>
                    <?php include "../footer.php"; ?>