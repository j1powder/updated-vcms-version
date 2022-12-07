<?php 
include "db.php";
?>

<?php
function createCompanies() {
global $connection;

if(isset($_POST['submit'])) {
    $contactname = $_POST['contactName'];
    $companyname = $_POST['companyName'];
    $companyphone = $_POST['companyPhone'];
    $companyemail = $_POST['companyEmail'];

$contactname = mysqli_real_escape_string($connection, $contactname);
$companyname = mysqli_real_escape_string($connection, $companyname);
$companyphone = mysqli_real_escape_string($connection, $companyphone);
$companyemail = mysqli_real_escape_string($connection, $companyemail);



//$query = "SELECT * FROM vcms_companies";
$query = "INSERT INTO vcms_companies(contactName, companyName, companyPhone, companyEmail)";
$query .= "VALUES('$contactname','$companyname', '$companyphone', '$companyemail')";

$result = mysqli_query($connection, $query);
if(!$result) {
    die('query failed');
}else {
    echo "record created";
}
    
    }
}
?>

<?php 

function createUsers() {
    global $connection;
    if(isset($_POST['submit'])) {
      $firstname = $_POST['firstname'];
      $lastname = $_POST['lastname'];
      $username = $_POST['username'];
      $password = $_POST['password'];
    
      $firstname = mysqli_real_escape_string($connection, $firstname );
      $lastname = mysqli_real_escape_string($connection, $lastname );
      $username = mysqli_real_escape_string($connection, $username );
      $password = mysqli_real_escape_string($connection, $password );


      $query = "SELECT * FROM vcms_users";
      $query = "INSERT INTO vcms_users(firstname, lastname, username, password) ";
      $query .="VALUES ('$firstname','$lastname', '$username', '$password')";
      
      $result = mysqli_query($connection, $query);
      
      if(!$result) {
       die('Query Failed');
        } else {
          echo "record created";
        }
      }
    }

?>

<?php
function createAnotherEntry() {
global $connection;

$companynametouse = $_SESSION['companyName'];

if(isset($_POST['submit'])) {
  $legalcompanyname = $_POST['legal_co_name'];
    $companyaddress = $_POST['co_address'];
    $cophone = $_POST['co_phone'];
    $coemail = $_POST['co_email'];
    $scname = $_POST['sc_name'];
    $scphone = $_POST['sc_phone'];
    $yrsinbiz = $_POST['years_in_biz'];
    $curremployees = $_POST['current_employees'];
    $taxid = $_POST['tax_id'];
    $procmgmt = $_POST['proc_mgmt_fac'];
    $workdot = $_POST['work_dot'];
    $workmsha = $_POST['work_msha'];
    $naics = $_POST['naics'];
    $trir = $_POST['trir'];
    $emr = $_POST['emr'];

    $legalcompanyname = mysqli_real_escape_string($connection, $legalcompanyname);
    $companyaddress = mysqli_real_escape_string($connection, $companyaddress);
    $cophone = mysqli_real_escape_string($connection, $cophone);
    $coemail = mysqli_real_escape_string($connection, $coemail);
    $scname = mysqli_real_escape_string($connection, $scname);
    $scphone = mysqli_real_escape_string($connection, $scphone);
    $yrsinbiz = mysqli_real_escape_string($connection, $yrsinbiz);
    $curremployees = mysqli_real_escape_string($connection, $curremployees);
    $taxid = mysqli_real_escape_string($connection, $taxid);
    $procmgmt = mysqli_real_escape_string($connection, $procmgmt);
    $workdot = mysqli_real_escape_string($connection, $workdot);
    $workmsha = mysqli_real_escape_string($connection, $workmsha);
    $naics = mysqli_real_escape_string($connection, $naics);
    $trir = mysqli_real_escape_string($connection, $trir);
    $emr = mysqli_real_escape_string($connection, $emr);
    
$query = "SELECT * FROM vcms_companies";
$query = "UPDATE vcms_companies SET legal_co_name = '$legalcompanyname', co_address = '$companyaddress', co_phone = '$cophone', co_email = '$coemail', sc_name = '$scname', sc_phone = '$scphone', years_in_biz = '$yrsinbiz', current_employees = '$curremployees', tax_id = '$taxid', proc_mgmt_fac = '$procmgmt', work_dot = '$workdot', work_msha = '$workmsha', naics = '$naics', trir = '$trir', emr = '$emr' WHERE companyName = '$companynametouse'";

//$query = "INSERT INTO vcms_companies(legal_co_name, co_address)";
//$query .= "VALUES('$legalcompanyname','$companyaddress')";

$result = mysqli_query($connection, $query);
if(!$result) {
    die('query failed');
}else {
    echo "record created";
}


}

}
?>



<?php
/*
function createNewEntry() {
global $connection;

if(isset($_POST['submit'])) {
    
  $legalcompanyname = $_POST['legal_co_name'];
    $companyaddress = $_POST['co_address'];
    $companyphone = $_POST['co_phone'];
    $companyemail = $_POST['co_email'];

$legalcompanyname = mysqli_real_escape_string($connection, $legalcompanyname);
$companyaddress = mysqli_real_escape_string($connection, $companyaddress);
$companyphone = mysqli_real_escape_string($connection, $companyphone);
$companyemail = mysqli_real_escape_string($connection, $companyemail);



$query = "SELECT * FROM form-entries";
$query = "INSERT INTO form-entries(legal_co_name, co_address, co_phone, co_email)";
$query .= "VALUES('$legalcompanyname','$companyaddress', '$companyphone', '$companyemail')";

$result = mysqli_query($connection, $query);
if(!$result) {
    die('query failed');
}else {
    echo "record created";
}
    
    }
}
*/
?>








<?php 

/* function createFormEntry() {
    global $connection;
    if(isset($_POST['submit'])) {
      $legcompanyname = $_POST['legal_co_name'];
      $coaddress = $_POST['co_address'];
      $cophone = $_POST['co_phone'];
      $coemail = $_POST['co_email'];
      $scname = $_POST['sc_name'];
      $scphone = $_POST['sc_phone'];
      $yrsinbiz = $_POST['years_in_biz'];
      $curremployees = $_POST['current_employees'];
      $taxid = $_POST['tax_id'];
      $procmgmt = $_POST['proc_mgmt_fac'];
      $workdot = $_POST['work_dot'];
      $workmsha = $_POST['work_msha'];
      $naics = $_POST['naics'];
      $trir = $_POST['trir'];
      $emr = $_POST['emr'];
      
      $legcompanyname = mysqli_real_escape_string($connection, $legcompanyname  );
      $coaddress = mysqli_real_escape_string($connection, $coaddress  );
      $cophone = mysqli_real_escape_string($connection, $cophone);
      $coemail = mysqli_real_escape_string($connection, $coemail);
      $scname = mysqli_real_escape_string($connection, $scname);
      $scphone = mysqli_real_escape_string($connection, $scphone);
      $yrsinbiz = mysqli_real_escape_string($connection, $yrsinbiz);
      $curremployees = mysqli_real_escape_string($connection, $curremployees);
      $taxid = mysqli_real_escape_string($connection, $taxid);
      $procmgmt = mysqli_real_escape_string($connection, $procmgmt);
      $workdot = mysqli_real_escape_string($connection, $workdot);
      $workmsha = mysqli_real_escape_string($connection, $workmsha);
      $naics = mysqli_real_escape_string($connection, $naics);
      $trir = mysqli_real_escape_string($connection, $trir);
      $emr = mysqli_real_escape_string($connection, $emr);
    



      $query = "SELECT * FROM form-entries";
      $query = "INSERT INTO form-entries(legal_co_name, co_address, co_phone, co_email, sc_name, sc_phone, years_in_biz, current_employees, tax_id, proc_mgmt_fac, work_dot, work_msha, niacs, trir, emr) ";
      $query .="VALUES ('$legcompanyname','$coaddress', '$cophone', '$coemail', '$scname', '$scphone', '$yrsinbiz', '$curremployees', '$taxid', '$procmgmt', '$workdot', '$workmsha', '$naics', '$trir', '$emr')";
      
      $result = mysqli_query($connection, $query);
      
      if(!$result) {
       die('Query Failed');
        } else {
          echo "record created";
        }
      }
    } */

?>




<?php 
function LoginUser(){
  session_start();
    if(isset($_POST['login'])) {
    global $connection;
  $username = $_POST['username'];
  $password = $_POST['password'];
  
  $username = mysqli_real_escape_string($connection, $username );
  $password = mysqli_real_escape_string($connection, $password );
    $query = "SELECT * FROM vcms_companies INNER JOIN vcms_users ON vcms_companies.company_id = vcms_users.company_id WHERE username = '{$username}'";
   // $query = "SELECT * FROM vcms_companies INNER JOIN vcms_users ON vcms_companies.company_id = vcms_users.company_id WHERE username = '{$username}' ";
  //$query = "SELECT * FROM vcms_users WHERE username = '{$username}'";
  $select_user_query = mysqli_query($connection, $query);
   if(!$select_user_query) {
      die("QUERY FAILED" . mysqli_error($connection));
   }
    //data to use while user is logged in
   while($row = mysqli_fetch_array($select_user_query)) {
    //$newrow = "SELECT*  FROM vcms_users INNER JOIN vcms_companies ON vcms_users.company_company_id = vcms_companies.company_id"; 

          $db_id = $row['company_id'];
          $db_username = $row['username'];
          $db_password = $row['password'];
          $db_firstname = $row['firstname'];
          $db_companyname = $row['companyName'];
          $db_companyaddress = $row['co_address'];
          $db_trir = $row['trir'];
          $db_emr = $row['emr'];
          $db_doc_id = $row['doc_id'];
          $db_insurance = $row['insurance'];
   }
  
   if($username !== $db_username && $password !== $db_password){
     header("Location: login.php");
   } else if($username == $db_username && $password == $db_password){
      
    $_SESSION['company_id'] = $db_id;
    $_SESSION['username']= $db_username;
    $_SESSION['firstname'] = $db_firstname;
    $_SESSION['companyName'] = $db_companyname;
    $_SESSION['co_address'] = $db_companyaddress;
    $_SESSION['trir'] = $db_trir;
    $_SESSION['emr'] = $db_emr;
    $_SESSION['doc_id'] = $db_doc_id;
    $_SESSION['insurance'] = $db_insurance;

    $companynametouse = $_SESSION['companyName'];

    //$_SESSION['company_id'] = $db_companyid;
  
    header("Location: loggedinviews/contractordash.php");
   }
  }
  }
  

?>


<?php
function receiveInsurance(){
global $connection;
$companytouse = $_SESSION['company_id'];
if (isset($_POST['submit'])) {

$name = $_POST['name'];

if (isset($_FILES['pdf_file']['name']))
{
$file_name = $_FILES['pdf_file']['name'];
$file_tmp = $_FILES['pdf_file']['tmp_name'];

move_uploaded_file($file_tmp,"./pdf/".$file_name);

$insertquery =
"INSERT INTO documents(user, insurance, company_id) VALUES('$name','$file_name', '$companytouse')";
$iquery = mysqli_query($connection, $insertquery);
}
else {
?>
<div class= "alert alert-danger alert-dismissible fade show text-center">
<a class="close" data-dismiss="alert" aria-label="close">x</a>
<strong>Failed!</strong>
File must be uploaded in PDF format!
</div>
<?php
}
}
}
?>

