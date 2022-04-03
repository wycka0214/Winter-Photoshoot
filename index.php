<?php session_start();?>

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
</head>

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

<h2>Groups</h2>

<table>
  <tr>
    <th>Group #1</th>
    
    <tr> 
</table>
<table>
  <tr>
    <th>Group #1</th>
   
    <tr> 
</table>
<table>
  <tr>
    <th>Group #1</th>
    
    <tr> 
</table>
<table>
  <tr>
    <th>Group #1</th>
   
    <tr> 
</table>
<table>
  <tr>
    <th>Group #1</th>
  
    <tr> 
</table>
</body>
</html>