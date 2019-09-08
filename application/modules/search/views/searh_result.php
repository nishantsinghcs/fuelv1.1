<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>
﻿<!doctype html>
<html>
<head>
<title><?=$term[0]['msgid']?> - Term Meaning in <?=$language_name?> - <?=$term[0]['msgid']?> in <?=$language_name?> - Fuel Terminology | Fuel Project : Terminology, Localization and Translations</title>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" >
<meta name="rating" content="General" />
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<meta http-equiv="cleartype" content="on">
<meta content="yes" name="apple-mobile-web-app-capable" />
<meta name="google" content="notranslate" />
<meta http-equiv="Content-Language" content="en_US" />
 <meta name="keyword" content=	<?=$term[0]['msgid']?>, <?=$term[0]['msgid']?> meaning, meaning of <?=$term[0]['msgid']?> in <?=$language_name?>, Standard term for <?=$term[0]['msgid']?>, Standard term for <?=$term[0]['msgid']?><?=$language_name?>, terminology, translation, definition />
 <meta name="description" content=	Answer of: what is meaning of <?=$term[0]['msgid']?> in <?=$language_name?>? <?=$term[0]['msgid']?> ka <?=$language_name?> matalab., uses, synonyms, meaning & related word	 />

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
<script type='text/javascript' src="<?php echo base_url(); ?>assets/js/bootstrap.js"></script>
<script type='text/javascript' src="<?php echo base_url(); ?>assets/js/bootstrap.min.js"></script>

	
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
<div class="jumbotron">
	<div class="container">
	      <h1 class="display-3"><?=$term[0]['msgid']?></h1>
	      <p><?=$term[0]['string']?></p>
	      <p>Context :<?=$term[0]['context']?></p>
	    <div class="list-group">
	      	    <span>Meaning in <?=$language_name?>:</span>
	      	<?php foreach ($term_meaning as $inner) { ?>
	  				<a href="#" class="list-group-item list-group-item-action list-group-item-success"><?=$inner['suggestion'] ?></a> 
			<?php } ?>
		</div>
		<br>
		<!-- 
	   	<div class="container-fluid">
		    <section class="row">
		        <div class="col-md-8">
		            <a class="btn btn-primary btn-lg" href="#" role="button">See Discussions »</a>
		        </div>
		        <div class="col-md-4">
		            <div class="btn-group float-right mt-2" role="group">
		                <a class="btn btn-danger btn-lg" href="#" role="button">Log a Bug</a>                  
		            </div>
		        </div>
		    </section>
		</div>
	-->
    </div>
</div>
<div class="container">
	<div>
		<h3>Similar Words</h3>
		<?php $relatedterms=relatedterms($term[0]['msgid']);
		$relatedcount=1;
		foreach ($relatedterms as $valuerelated) { ?>
		<p><?=$relatedcount?>. <?=$valuerelated->msgid?></p>
	      <p>Context :<?=$valuerelated->context?></p>
		<div class="list-group">
			<?php $strloc=getLocTermfromid($valuerelated->string_id,$language_id,3);
			if (!$strloc==false) {
			foreach ($strloc as $suggestion) { ?>
	  	<a href="#" class="list-group-item list-group-item-action list-group-item-success"><?=$suggestion->suggestion?></a> 
	  	<?php } ?>	
		</div> <br><br>
		<?php 
		$relatedcount++; }
		else{echo "<code>No evaluated suggestion provided for this string in ".$language_name.".</code><br><br>";}
		}
		?>
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

<!-- 
<a href="#" class="list-group-item list-group-item-action">Dapibus ac facilisis in</a>

<a href="#" class="list-group-item list-group-item-action list-group-item-success">This is a success list group item</a>
  <a href="#" class="list-group-item list-group-item-action list-group-item-danger">This is a danger list group item</a>
  <a href="#" class="list-group-item list-group-item-action list-group-item-warning">This is a warning list group item</a>
  <a href="#" class="list-group-item list-group-item-action list-group-item-info">This is a info list group item</a>
  <a href="#" class="list-group-item list-group-item-action list-group-item-light">This is a light list group item</a>
  <a href="#" class="list-group-item list-group-item-action list-group-item-dark">This is a dark list group item</a> -->