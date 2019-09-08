<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>
﻿<!doctype html>
<html>
<head>
<title>Fuel Project - Term Meaning in  Fuel Project - Fuel Project in  Fuel Project - Fuel Terminology | Fuel Project : Terminology, Localization and Translations</title>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" >
<meta name="rating" content="General" />
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<meta http-equiv="cleartype" content="on">
<meta content="yes" name="apple-mobile-web-app-capable" />
<meta name="google" content="notranslate" />
<meta http-equiv="Content-Language" content="en_US" />
 <meta name="keyword" content=	Fuel Project, Fuel Project meaning, meaning of Fuel Project in  Fuel Project, Standard term for Fuel Project, Standard term for Fuel Project Fuel Project, terminology, translation, definition />
 <meta name="description" content=	Answer of: what is meaning of Fuel Project in  Fuel Project? Fuel Project ka  Fuel Project matalab., uses, synonyms, meaning & related word	 />

<meta name="robots" content="index,follow" />
<meta name="copyright" content="Copyright © 2008-2019 by fuelproject.org, All rights reserved." />
<meta name="author" content="Nishant Singh for Fuel Project(Terminoligy)" />
<meta http-equiv="Content-type" content="text/html;charset=UTF-8" />
<meta http-equiv="Content-Style-Type" content="text/css" />
<meta http-equiv="Content-Type" content="text/html;charset=UTF-8">
<meta property="Last-Modified" content="Variable" />

<link rel="icon" href="<?php echo base_url(); ?>assets/img/cropped-favicon-32x32.png" sizes="32x32" />
<link rel="icon" href="<?php echo base_url(); ?>assets/img/cropped-favicon-192x192.png" sizes="192x192" />
<link rel="apple-touch-icon-precomposed" href="<?php echo base_url(); ?>assets/img/cropped-favicon-180x180.png" />
<meta name="msapplication-TileImage" content="http://fuelproject.org/wp-content/uploads/2016/04/cropped-favicon-270x270.png" />
<link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>assets/css/bootstrap.css">
<link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>assets/css/bootstrap.min.css">
<link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>assets/css/dataTables.bootstrap4.min.css">
<link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>assets/css/Tbootstrap.css">
<script type='text/javascript' src="<?php echo base_url(); ?>assets/js/jquery-1.12.4.js"></script>
<script type='text/javascript' src="<?php echo base_url(); ?>assets/js/bootstrap.js"></script>
<script type='text/javascript' src="<?php echo base_url(); ?>assets/js/bootstrap.min.js"></script>
<script type='text/javascript' src="<?php echo base_url(); ?>assets/js/dataTables.bootstrap4.min.js"></script>
<script type='text/javascript' src="<?php echo base_url(); ?>assets/js/jquery.dataTables.min.js"></script>
<script type='text/javascript' src="<?php echo base_url(); ?>assets/js/contribute/check.js"></script>
	
</head>
<body>
<!-- Head -->
<nav class="navbar navbar-expand-sm bg-light">

  <div class="collapse navbar-collapse" id="navb">
  	<div class="navbar-header">
      <a class="navbar-brand" href="http://fuelproject.org" target="_blank"><img src="<?php echo base_url(); ?>assets/img/logo.png"></a>
    </div>
    <ul class="navbar-nav mr-auto">
    </ul>
    <form class="form-inline my-2 my-lg-0" method="POST" action="http://fuelproject.org/contribute/index.php?route=search">
      <input class="form-control mr-sm-2" type="text" placeholder="Search" name="searchcontent">
      <input value="0" name="language_id" type="hidden">
      <button class="btn btn-success my-2 my-sm-0" type="submit">Search</button>
    </form>
  </div>
</nav>

<!-- end Head -->
<div class="container">
  <h2>Evaluate: <?=$projname?></h2>
 <!-- <p>Press E to evaluate, F to fail and S to skip</p> -->
  <div style="height:350px;overflow-y: scroll;margin-bottom: 30px">
 <table class="table table-striped" id="sortedtable">
  <thead>
      <tr>
        <th>Sl No.</th>
        <th>String id</th>
        <th>Project</th>
       <th style="display: none">Context</th>
        <th>String</th>
        <th>Terminology</th>
      </tr>
    </thead>
    <tbody>
    <?php $i=1; foreach ($strings as $value) { ?>
      
      <?php $strloc=getLocTermfromid($value->string_id,143,0);
      if (!$strloc==false) {
      foreach ($strloc as $suggestion) { 
        ?>
      <tr onclick="getStrngstoPanel(this.id)" id="<?=$suggestion->suggestion_id?>" class="trow">
        <td id="slid-<?=$suggestion->suggestion_id?>"><?=$i?></td>
        <td id="strid-<?=$suggestion->suggestion_id?>" class="strid"><?=$value->string_id?></td>
        <td id="projid-<?=$suggestion->suggestion_id?>"><?=getProjectfromid($value->project_id)?></td>
        <td style="display: none" id="contxtid-<?=$suggestion->suggestion_id?>"><?=$value->context?></td>
        <td id="valueid-<?=$suggestion->suggestion_id?>"><b><?=$value->msgid?></b></td>
        <td id="suggid-<?=$suggestion->suggestion_id?>"><b><?=$suggestion->suggestion?></b></td>
      </tr>
    <?php $i++; }} ?>
    <?php  } ?>
    </tbody>
  </table>
  </div>
  <!--<p>Showing: <?=$i-1?> Strings</p>-->
  <div class="container">
  <div class="row">
    <div class="col-sm">
      <textarea class="form-control" rows="5" id="panelstring"></textarea>
    </div>
    <div class="col-sm">
     <textarea class="form-control" rows="5" id="panelsuggestion"></textarea>
    </div>
    <div class="col-sm" style="margin-top:30px">
      <button class="btn btn-warning">Pass</button> <button class="btn btn-danger">Fail</button> <button class="btn btn-success">Save Project</button>
      <br><br>
      <p>Context: <small id="panelcontext"></small></p>
    </div>
  </div>
</div>
</div>
<footer class="page-footer font-small blue pt-4 mt-4">
    	<div class="container container-fluid text-center">
        	<center>
	            <p>&copy;2018 | Fuel Project&reg; All Rights Reserved</p>
	            <code>Page loaded in <strong>{elapsed_time}</strong> seconds.</code>
        	</center>
  	 	</div>
</footer>
</body>
</html>
<script type="text/javascript">
  $(document).ready(function() {
    $('#sortedtable').DataTable();
} );
$('table').dataTable({searching: false, paging: false});
</script>