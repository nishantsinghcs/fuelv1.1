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
<div class="container">
  <h2><?=$lang?></h2>
  <p>Contribute and minimise the workload for your Language</p>
  <div class="card-columns">
    <?php 
    foreach ($project as $key => $value) { 
    		//var_dump($value); ?>
        <a href="<?=base_url();?>contribute/project/<?=$value->project_name?>">
    	<div class="card <?php if($value->status=='1'){ ?>bg-success<?php }else { ?>bg-warning <?php }?>">
	      <div class="card-body text-center">
	        <p class="card-text"><?php echo $value->project_name; ?></p>
	        <p><small>
            <?php //var_dump(); ?>
            <?=$count[$key][0]; ?>/<?=$uscount[$key][0]; ?> Strings remaining</small></p>
	      </div>
	    </div>
      </a>
	<?php }  ?>
  </div>
</div>

<?php
		//var_dump($count);
		
?>
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