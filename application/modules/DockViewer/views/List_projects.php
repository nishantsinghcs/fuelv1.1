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

<h1>The Fuel Project</h1>
    <code>Path: <?=$predir?></code>
    <table class="sortable">
      <thead>
        <tr>
          <th>Sl. No</th>
          <th>Project Name</th>
          <th>Size <small>(Kilo bytes)</small></th>
          <th>Date Modified</th>
        </tr>
      </thead>
      <tbody>
        
       
          <?php foreach ($getDir as $key => $value) { ?>
          <tr >
            <td ><?=($key+1) ?></td>
            <td> <a href="DockViewer/LanguageList/<?=$value ?>"><?=$value ?></a></td>
            <td>2 Kb</td>
            <td>10:12:22 10-3-2018</td>
          </tr>
            <?php   }
          ?>
        
      </tbody>
    </table>
  
   <p class="footer">Page rendered in <strong>{elapsed_time}</strong> seconds.</p>
    

<!--
<div id="container">
	<h1>Welcome to The Fuel Project!</h1>

	<div id="body">
		<h1><b>LIST OF PROJECTS </b></h1>

		<code>Fuel/Projects</code>
		<code>
			<?php foreach ($getDir as $key => $value) { ?>
					<a href="DockViewer/LanguageList/<?=$value ?>"><?=$value ?></a><br>
				<?php 	}
		 	?>
		</code>

	</div>

	<p class="footer">Page rendered in <strong>{elapsed_time}</strong> seconds. <?php echo  (ENVIRONMENT === 'development') ?  'CodeIgniter Version <strong>' . CI_VERSION . '</strong>' : '' ?></p>
</div>
-->

</body>
</html>