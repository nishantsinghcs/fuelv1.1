<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?><!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<title>Welcome to The FUEL PROJECT</title>

	<style type="text/css">


body {
	color: #333;
	font: 14px Sans-Serif;
	padding: 50px;
	background: #eee;
}


#container {
	box-shadow: 0 5px 10px -5px rgba(0,0,0,0.5);
	position: relative;
	background: white; 
}

table {
	background-color: #F3F3F3;
	border-collapse: collapse;
	width: 100%;
	margin: 15px 0;
}

th {
	background-color: #FE4902;
	color: #FFF;
	cursor: pointer;
	padding: 5px 10px;
}

th small {
	font-size: 9px; 
}

td, th {
	text-align: left;
}

a {
	text-decoration: none;
}

td a {
	color: #663300;
	display: block;
	padding: 5px 10px;
}
th a {
	padding-left: 0
}

td:first-of-type a {
	background: url(./.images/file.png) no-repeat 10px 50%;
	padding-left: 35px;
}
th:first-of-type {
	padding-left: 35px;
}

td:not(:first-of-type) a {
	background-image: none !important;
} 

tr:nth-of-type(odd) {
	background-color: #E6E6E6;
}

tr:hover td {
	background-color:#CACACA;
}

tr:hover td a {
	color: #000;
}

	
	</style>
</head>
<body>
<h1>Languages Available</h1>
    <code>Path: <?=$predir?></code>
    <table class="sortable">
      <thead>
        <tr>
          <th>Sl. No</th>
          <th>Language</th>
          <th>Unlocalised Strings</th>
          <th>Total Strings</th>
          <th>Last Modified</th>
        </tr>
      </thead>
      <tbody>
      	   <?php foreach ($getDir as $key => $value) { ?>
      	   
          <tr >
            <td ><?=($key+1) ?></td>
            <td><form method="GET" action ="<?=base_url()?>DockViewer/FileList" onclick="this.submit()"><input type="hidden" name="filepathForm" value="<?=$predir?>/<?=$value ?>"><?=$value ?></form></td>
            <td><?=$UnlocalisedStringsinDirectory[$key]?></td>
            <td><?=$TotalStringsinDirectory[$key]?></td>
            <td><?=$FileLastModified[$key]?></td>
          </tr>

            <?php   }
          ?>
        
      </tbody>
    </table>
<p class="footer">Page rendered in <strong>{elapsed_time}</strong> seconds.</p>
</body>
</html>