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
          $db_firstname = $row['firstname'];
          $db_lastname = $row['lastname'];
          $db_address = $row['address'];
          $db_city = $row['city'];
          $db_state = $row['state'];
          $db_zip = $row['zip'];
          $db_phone = $row['phone'];
          $db_email = $row['email'];
          $db_isAdmin = $row['is_admin']; 
   }
  
   if($username !== $db_username && $password !== $db_password){
     header("Location: login.php");
   } else if($username == $db_username && $password == $db_password && $db_isAdmin == "Yes"){
    header("Location: loggedinviews/admindash.php");

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
    $_SESSION['firstname'] = $db_firstname;
    $_SESSION['lastname'] = $db_lastname;
    $_SESSION['address'] = $db_address;
    $_SESSION['city'] = $db_city;
    $_SESSION['state'] = $db_state;
    $_SESSION['zip'] = $db_zip;
    $_SESSION['phone'] = $db_phone;
    $_SESSION['email'] = $db_email;
    $_SESSION['is_admin'] = $db_isAdmin;

    //$companynametouse = $_SESSION['companyName'];

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


<?php 
function updateUserData() {

  global $connection;
  $user = $_SESSION['username'];
  
  if(isset($_POST['submit'])) {
      $address = $_POST['address'];
      $city = $_POST['city'];
      $state = $_POST['state'];
      $zip = $_POST['zip'];
      $phone = $_POST['phone'];
      $email = $_POST['email'];

  
      $address = mysqli_real_escape_string($connection, $address);
      $city = mysqli_real_escape_string($connection, $city);
      $state = mysqli_real_escape_string($connection, $state);
      $zip = mysqli_real_escape_string($connection, $zip);
      $phone = mysqli_real_escape_string($connection, $phone);
      $email = mysqli_real_escape_string($connection, $email);
      
      
  $query = "SELECT * FROM vcms_users";
  $query = "UPDATE vcms_users SET address = '$address', city = '$city', state = '$state', zip = '$zip', phone = '$phone', email = '$email' WHERE username = '$user'";
  
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
function loopThruUserData() {
  global $connection;
  $user = $_SESSION['username'];
  $query = "SELECT firstname, lastname FROM vcms_users Where username = '$user'";
  $squery = mysqli_query($connection, $query);

  while (($result = mysqli_fetch_assoc($squery))) { 
    echo implode(" ",$result);
  }

}

?>

<?php 
function loopThruCompanies() {
global $connection;
$selectQuery = "SELECT companyName FROM vcms_companies";
$squery = mysqli_query($connection, $selectQuery);
//$result = mysqli_fetch_assoc($squery);
while (($result = mysqli_fetch_assoc($squery))) {
 echo implode(" ",$result) . " <br>"; 
               
}
}
?>

<?php
function sendSomeMail(){
// the message
$msg = "First line of text\nSecond line of text";

// use wordwrap() if lines are longer than 70 characters
$msg = wordwrap($msg,70);

// send email
mail("j1powder@yahoo.com","My subject",$msg);


if(isset($_POST['submit'])){
  $to = 'j1powder@yahoo.com';
  $subject = $_POST['subject'];
  $body = $_POST['body'];
}
}
?>
