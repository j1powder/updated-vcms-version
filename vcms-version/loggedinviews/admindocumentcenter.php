<?php
include "../loggedinadmin.php";
?>
<style>
#doc-table, #doc-row, .data-head, .data-data {
border: 1px solid black;
padding: 10px;
}
</style>

<div class="col-sm-10">

<h4>Welcome to the document center</h4>
<br>
<table id="doc-table">
<tr id="doc-row">
 <th class='data-head'>Company</th>
 <?php
                 global $connection;
					$selectQuery = "SELECT * FROM documents INNER JOIN vcms_companies on documents.company_id = vcms_companies.company_id";
					$squery = mysqli_query($connection, $selectQuery);

					while (($result = mysqli_fetch_assoc($squery))) {
				?>
 <td class='data-data' style="color: blue;"><b><?php echo $result['companyName']; ?></b></td> <?php } ?>
   
</tr>
<tr id="doc-row">
 <th class='data-head'>Insurance Document</th>
 <?php
                 global $connection;
					$selectQuery = "SELECT * FROM documents INNER JOIN vcms_companies on documents.company_id = vcms_companies.company_id";
					$squery = mysqli_query($connection, $selectQuery);
					while (($result = mysqli_fetch_assoc($squery))) {
				?>
 <td class='data-data'><a href="PDF/<?php echo $result['insurance']; ?>" download><?php echo $result['insurance']; ?></td> <?php } ?></td>
   
</tr>

                    </table>

<ul>
<?php
                 global $connection;
					$selectQuery = "SELECT * FROM documents INNER JOIN vcms_companies on documents.company_id = vcms_companies.company_id";
					$squery = mysqli_query($connection, $selectQuery);

					while (($result = mysqli_fetch_assoc($squery))) {
				?>
<li><b><?php echo $result['companyName']; ?></b></li>
<?php } ?>
                    </ul>

<?php 
                global $connection;
				
					$selectQuery = "SELECT * FROM documents INNER JOIN vcms_companies on documents.company_id = vcms_companies.company_id WHERE companyName = 'New York Giants'";
					$squery = mysqli_query($connection, $selectQuery);
					
					while (($result = mysqli_fetch_assoc($squery))) { 

				?>

                <p><?php echo $result['company_id']; ?></p>
                <p><a href="PDF/<?php echo $result['insurance']; ?>" download><?php echo $result['insurance']; ?></a></p>

                <?php } ?>
</div>
</div>
</div>
</main>




<?php include "../footer.php"; ?>