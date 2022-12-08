<?php

include "../loggedinheader.php";
//include "../functions.php";
?>
<style>
    #top-bar {
    display: flex;
    flex-wrap: wrap;
    justify-content: space-evenly;
    background-color: ghostwhite;
    border: 1px solid grey;
    border-radius: 4px;
    margin:  0 5rem;
    
}
.top-widgets{
    padding: 3rem 1rem;
    font-size: 2rem;
}
#first, #second{
    border-right: solid 1px grey;

}
</style>
 

        <div class="col-sm-9">
        
        <div id="top-bar">
            <div>
        <p class="top-widgets" id="first">Connections<br>
         1</p>
       
</div>
<div>
<?php
                 global $connection;
                    $companyid = $_SESSION['company_id'];
					$selectQuery = "SELECT COUNT(company_id) FROM vcms_users WHERE company_id = '$companyid'";
					$squery = mysqli_query($connection, $selectQuery);
					$result = mysqli_fetch_assoc($squery);
                    //while (($result = mysqli_fetch_assoc($squery))) {
				?>
        <p class="top-widgets" id="second">Active Users <br>
        <?php echo implode(" ",$result); ?></p>


</div>
<div>
        <p class="top-widgets">Messages <br>
        3</p>

</div>
        </div>
        
        <br>
        <table id="scorecard">
        <tbody id="scorecard-bdy">
            <tr class="trows">
            <th class="theads">Safety Score: </th>
            <td class="tdata">A Rated</td>
            </tr>
            <tr class="trows">
            <th class="theads">Current TRIR: </th>
            <td class="tdata"><?php echo $_SESSION['trir'];?></td>
            </tr>
            <tr class="trows">
            <th class="theads">Current EMR: </th>
            <td class="tdata"><?php echo $_SESSION['emr'];?></td> 
            </tr>
            <tr class="trows">
            <th class="theads">Insurance Status: &nbsp;  </th>
            <td class="tdata">Approved</td>
        </tr>

        </tbody>
    </table>
        </div>
    </div>
</div>


</main>
<?php
include '../footer.php';
?>

