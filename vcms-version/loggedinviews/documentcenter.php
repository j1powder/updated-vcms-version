<?php
include '../loggedinheader.php';
receiveInsurance();
?>
<style>
#doc-form{
	background-color: lightgrey;
	padding: 2rem;
	border-radius: 5px;
	border: 1px solid grey;
	box-shadow: 1px 1px 3px 3px grey;
}

</style>
<div class="col-sm-9">

<form id="doc-form" action="documentcenter.php" method="post" enctype="multipart/form-data">
<div class="form-input py-2">
<div class="form-group">
<label>Name</label>
<input type="text" class="form-control" name="name" placeholder="Enter your name" required>
</div>
<div class="form-group">
<label>Upload Insurance</label>

<input type="file" name="pdf_file"  accept=".pdf" title="Upload PDF"/>
</div>
<div class="form-group">
<input type="submit" class="sub-btn" name="submit" value="Submit">
</div>
</div>
</form>


<?php /*
<form action="documentcenter.php" method="post">
<label class="qlabel">upload insurance certificate</label><input type="file" accept="pdf" class="qinput" name="insurance">
<button type="submit" class="sub-btn" name="submit">Submit</button>

</form>
*/
?>
<br>
<div class="card-body">
	<div class="table-responsive">
		<table>
			<thead>
				<th>ID &nbsp;</th>
				<th>UserName &nbsp;</th>
				<th>FileName</th>
			</thead>
			<tbody>
				<?php
                 global $connection;
                 $companytouse = $_SESSION['company_id'];
                 $company = $_SESSION['companyName'];
					$selectQuery = "SELECT * FROM vcms_companies INNER JOIN vcms_users ON vcms_companies.company_id = vcms_users.company_id INNER JOIN documents ON vcms_companies.company_id = documents.company_id WHERE companyName = '$company'";
					$squery = mysqli_query($connection, $selectQuery);
					
					while (($result = mysqli_fetch_assoc($squery))) {
				?>
				<tr>
				<td><?php echo $result['doc_id']; ?> &nbsp;</td>
				<td><?php echo $result['username']; ?> &nbsp;</td>
				<td><a href="PDF/<?php echo $result['insurance']; ?>" download><?php echo $result['insurance']; ?></a></td>
				</tr>
				<?php
					}
				?>
			</tbody>
		</table>			
	</div>
</div>

</div>

</div>
</div>








<?php
include '../footer.php';
?>
