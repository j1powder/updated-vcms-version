<?php
include "db.php";
include "functions.php";
session_start();
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="../styles.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">

<!-- jQuery library -->
<?php echo '<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.1/jquery.min.js"></script>' ?>

<!-- Latest compiled JavaScript -->
<?php echo '<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>' ?>
</head>
<style>
.sidemen-item{
    color: black;
    padding: 1rem;
    border: solid black 1px;
    background-color: #1189dd !important;
    border-radius: 5px;
    box-shadow: 1px 1px 2px 2px grey;
    margin: 1rem;
    height: 40px;
    width: 100%;   
}

#scorecard{
     border-radius: 5px;
     box-shadow: 1px 1px 2px 2px grey;
     margin: 5% 15%; 
     width: 70%;
     min-height: 200px; 
}
.sidemen-item a{
    text-decoration: none;
    color: black;
}

</style>
<body>
    <header>
    <nav class="navbar navbar-inverse">
  <div class="container-fluid">
    <div class="navbar-header">
      <a class="navbar-brand" href="contractordash.php"><img id="nav-logo" src="../images/VCMS-Cropped.png"> <?php echo $_SESSION['companyName'];?></a>
    </div>
    <?php /*<ul class="nav navbar-nav">
      <li style="text-align:left;" class="active"><a href="index.php">Home</a></li>
      <li class="dropdown"><a class="dropdown-toggle" data-toggle="dropdown" href="#">Page 1 <span class="caret"></span></a>
        <ul class="dropdown-menu">
          <li><a href="#">Page 1-1</a></li>
          <li><a href="#">Page 1-2</a></li>
          <li><a href="#">Page 1-3</a></li>
        </ul>
      </li>
      <li><a href="#">Page 2</a></li>
    </ul> */ ?>
    <ul class="nav navbar-nav navbar-right">
    
      <li><a href="contractordash.php"><span class="glyphicon glyphicon-user"></span>Dashboard</a></li>
      <li><a href="../logout.php"><span class="glyphicon glyphicon-log-in"></span> Logout</a></li>
    </ul>
  </div>
</nav>
    </header>

    <main>
   

<br><br>
<div class="container-fluid">
<h3 id="topname">Welcome <?php echo $_SESSION['firstname']; ?> </h3>
<h4><?php echo $_SESSION['co_address']; ?> </h4>

    <div class="row">
        <div class="col-sm-3">
       <button class="sidemen-item"><a href="contractordash.php">Home</a></button><br>
       <button class="sidemen-item"><a href="formpage.php">Questionnaire</a></button><br>
       <?php //<button class="sidemen-item">Insurance</button><br>?>
       <button class="sidemen-item"><a href="documentcenter.php">Document Center</a></button><br>
       <button class="sidemen-item">Message Center</button>
        
        </div>