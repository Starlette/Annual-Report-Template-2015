<?php include("ui-var.php"); ?>
<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Template</title>
<link type="text/css" rel="stylesheet" href="css/layout.css" />
<?php include("ui-head.php"); ?>
<script src="js/functions.js"></script>
</head>

<body class="m07 sm28">

<?php 
  include("ui-header.php");
  include("ui-nav.php");
?>

<section class="heading">
  <div class="page">
    <span>Annual Financial Statements</span>
    Statements of comprehensive income
    <small>for the year ended</small>
  </div>
</section>

<section class="content">
  <div class="page">
    <ul class="breadcrumbs">
      <li><a href="index.php">Home</a></li>
      <li><a href="#">Annual Financial Statements</a></li>
      <li><a href="#">Statement of comprehensive income</a></li>
    </ul>
    <?php include("notes/note18.php"); ?>
  </div>
</section>

<?php
  include("ui-footer.php");
?>

</body>
</html>
