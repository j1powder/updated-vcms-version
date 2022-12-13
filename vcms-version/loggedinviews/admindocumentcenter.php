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
<?php /*
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

<select>
					<?php
                 global $connection;
					$selectQuery = "SELECT * FROM vcms_companies";
					$squery = mysqli_query($connection, $selectQuery);

					while (($result = mysqli_fetch_assoc($squery))) {
						$companyisname = $result['companyName'];
				?>

<option name="companyinfo"><b><?php  echo $companyisname;  ?></b></option> <?php } ?>
</select>
*/?>

<?php 
global $connection;

$selectquery = "SELECT companyName, insurance FROM documents INNER JOIN vcms_companies on documents.company_id = vcms_companies.company_id";				
$squery = mysqli_query($connection, $selectquery);
while (($result = mysqli_fetch_assoc($squery))) {;
?>


<p><?php echo $result['companyName']; ?></p>

<p><a href="pdf/<?php echo $result['insurance']; ?>" download> <?php echo   $result["insurance"] ; ?></a></p>
<?php } ?>

<?php displayDocuments(); ?>

<p></p>

</div>
</div>
</div>
</main>




<?php include "../footer.php"; ?>