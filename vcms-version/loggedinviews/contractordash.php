<?php

include "../loggedinheader.php";
//include "../functions.php";
?>


        <div class="col-sm-9">
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

