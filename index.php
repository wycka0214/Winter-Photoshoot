<?php
    require __DIR__."/students.php";
    
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=, initial-scale=1.0">
    <title>Document</title>
    <style>
 table {
    font-family: arial, sans-serif;
    border-collapse: collapse;
    width: 100%;
    }
    td, th {
    border: 1px solid #dddddd;
    text-align: left;
    padding: 8px;
    }
    tr:nth-child(even) {
    background-color: #dddddd;
    }
</style>
</head>
<body> 
    <?php include "header.php"?>
    <?php include "main.css"?>

<h2>Students</h2>

<table>
  <tr>
    <th>Student</th>
    <th>Group</th>
    <th>Action</th>
  </tr>
  <tr>
    <td>Ada Lovelace</td>
    <td>Group #2</td>
    <td>delete</td>
  </tr>
  <tr>
    <td>Grace Hopper</td>
    <td>Group #1</td>
    <td>delete</td>
  </tr>
  <tr>
    <td>Margaret Hamilton</td>
    <td>-</td>
    <td>delete</td>
  </tr>
  <tr>
    <td>Joan Clarke</td>
    <td>Group #2</td>
    <td>delete</td>
  </tr>
</table>

<style>
table, th, td {
  border:1px solid black;
}
</style>

<h2>Groups</h2>

<table style="width: 20%">
  <tr>
    <th>Group #1</th>
  </tr>
  <tr>
    <td>Grace Hopper</td>  
  </tr>
  <tr>
    <td>Assign student</td> 
  </tr>
</table>
<table style="width:20%">
     <tr>
        <th>Group #2</th>
     </tr><br>
    <tr>
      <td>Ada Lovelace</td>  
    </tr>
    <tr> 
        <td>Joan Clarke</td>
     </tr>
</table>
<table style="width:20%">
     <tr>
        <th>Group #3</th>
     </tr><br>
    <tr>
      <td>Assign student</td>  
    </tr>
    <tr>
      <td>Assign student</td>  
    </tr>
</table>
<table style="width:20%">
     <tr>
        <th>Group #4</th>
     </tr><br>
    <tr>
      <td>Assign student</td>  
    </tr>
    <tr>
      <td>Assign student</td>  
    </tr>
</table>
<table style="width:20%">
     <tr>
        <th>Group #5</th>
     </tr><br>
    <tr>
      <td>Assign student</td>  
    </tr>
    <tr>
      <td>Assign student</td>  
    </tr>
</table>

</body>
</html>