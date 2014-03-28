<?php
	require "system/init.php";
?>
<!DOCTYPE html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js"> <!--<![endif]-->
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title></title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <!-- Place favicon.ico and apple-touch-icon.png in the root directory -->

        <link rel="stylesheet" href="<?php echo getFrontPath();?>assets/css/vendor/normalize.css">
        <link rel="stylesheet" href="<?php echo getFrontPath();?>assets/css/vendor/main.css">
        <link rel="stylesheet" href="<?php echo getFrontPath();?>assets/css/vendor/bootstrap.min.css">
        
        <script src="<?php echo getFrontPath();?>assets/js/vendor/modernizr-2.6.2.min.js"></script>
        <script src="<?php echo getFrontPath();?>assets/js/vendor/bootstrap.min.js"></script>
    </head>
    <body>
        <!--[if lt IE 7]>
            <p class="browsehappy">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.</p>
        <![endif]-->

        <!-- Add your site or application content here -->
        
        
        <div class="container">
	        <h1>Detta är en rubrik</h1>
	        <h2>Med en underrubrik...</h2>
	        
	        <p>Hello world! This is HTML5 Boilerplate.</p>

			<div class="well">
				<p>Registered action is:
				<?php
					echo ACTION;
				?></p>
				
				<p>Arguments are:</p>
				<?php
					print_r($arguments);
				?>
				
			</div>


        </div>
        
        
        <script src="//ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>
        <script>window.jQuery || document.write('<script src="<?php echo getFrontPath();?>js/vendor/jquery-1.10.2.min.js"><\/script>')</script>
        <script src="js/plugins.js"></script>
        <script src="js/main.js"></script>

        <!-- Google Analytics: change UA-XXXXX-X to be your site's ID. -->
        <script>
            (function(b,o,i,l,e,r){b.GoogleAnalyticsObject=l;b[l]||(b[l]=
            function(){(b[l].q=b[l].q||[]).push(arguments)});b[l].l=+new Date;
            e=o.createElement(i);r=o.getElementsByTagName(i)[0];
            e.src='//www.google-analytics.com/analytics.js';
            r.parentNode.insertBefore(e,r)}(window,document,'script','ga'));
            ga('create','UA-XXXXX-X');ga('send','pageview');
        </script>
    </body>
</html>
