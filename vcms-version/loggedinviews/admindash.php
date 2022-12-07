<?php
include "../loggedinadmin.php";

?>


<div class="col-sm-9">
<form>
                        <label>Company</label>
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
                   
                        
                            <option><?php echo implode(" ",$result); ?></option>
                        
                        <?php
					}
				?>
                </select><br><br>
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