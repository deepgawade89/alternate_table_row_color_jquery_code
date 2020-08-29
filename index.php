<?php session_start() ?>  
<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>
<title>phpflow.com : Alternate row colors using jquery</title>
</head>
<body>
<div class="container" style="padding:50px 250px;">
<h1>Alternate row colors using jquery</h1>
<table border="1" class="table table-bordered">
  <tr>
    <th>Month</th>
    <th>Savings</th>
  </tr>
  <tr>
    <td>Feb</td>
    <td>$100</td>
  </tr>
  <tr>
    <td>March</td>
    <td>$100</td>
  </tr>
  <tr>
    <td>April</td>
    <td>$100</td>
  </tr>
  <tr>
    <td>May</td>
    <td>$100</td>
  </tr>
</table>

</div>
</body>
</html>
<script type="text/javascript">
$(document).ready(function(){
  //for div
  //$("div:odd").css("background-color", "#F4F4F8");
  //$("div:even").css("background-color", "#EFF1F1");

  //for table row
  $("tr:even").css("background-color", "#F4F4F8");
  $("tr:odd").css("background-color", "#EFF1F1");
});
</script>