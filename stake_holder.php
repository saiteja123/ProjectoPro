<!DOCTYPE html>
<html lang="en">
<head>
  <title>Bootstrap Example</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
</head>
<body>
<nav class="navbar navbar-default">
      <div class="container">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
          <span class="sr-only">Toggle navigation</span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
          </button>
          <a class="navbar-brand" href="#">ProjectoPro</a>
        </div>
        <div id="navbar" class="collapse navbar-collapse">
          <ul class="nav navbar-nav">
            <li class="active"><a href="index.html">Dashboard</a></li>
            <li><a href="pages.html">Pages</a></li>
            <li><a href="posts.html">posts</a></li>
            <li><a href="users.html">users</a></li>
          </ul>
          <ul class="nav navbar-nav navbar-right">
            <li class="active"><a href="index.html">Welcome, Brad</a></li>
            <li><a href="Login.html">Logout</a></li>
          </ul>
        </div>
        <!--/.nav-collapse -->
      </div>
    </nav>
    
<div class="panel panel-default">
<div class="panel-heading">
                <h3 align="center" class="panel-title">Stake Holders</h3>
              </div>
              <div class="container">
<table  class="table table-striped" >
      <thead>
        <tr>
          <th>S.no</th>
          <th>Username</th>
          <th>Designation</th>
          <th>Department</th>
          <th><button class="btn btn-default">Select All</button></th>
         
        </tr>
      </thead>
      <tbody>

<?php
require "init.php";
$query="select UID,Username,Designation,Department from user_info";
$result=mysqli_query($con,$query);
          while( $row = mysqli_fetch_array($result) )
          {
            echo "<tr>";
              echo "<td>".$row['UID']."</td>";
              echo "<td>".$row['Username']."</td>";
              echo "<td>".$row['Designation']."</td>";
              echo "<td>".$row['Department']."</td>";
              echo "<td><input type='checkbox'></td>";
            echo "</tr>\n";
          }
?>
    </tbody>
    </table>
     </div>
    
    </div>
    <div align="center">
    <button class="btn btn-warning">Send</button>
    </div>
   
</body>
</html>
