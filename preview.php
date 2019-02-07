<!doctype html>
<html lang="sk">
    <head>
        <meta charset="utf-8" />
         <link href="/tis/plugs/bootstrap-v4.1.3/bootstrap.min.css" rel="stylesheet" type="text/css" />
        <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i,800,800i&amp;subset=latin-ext" rel="stylesheet">
        <link href="/tis/iconics/icons.css" rel="stylesheet" type="text/css" />
        <link href="/tis/styles/core-framework.css" rel="stylesheet" type="text/css" />
		<link rel="stylesheet" href="/tis/plugs/swiper-4.4.6/dist/css/swiper.min.css">
		<link rel="stylesheet" href="/tis/plugs/custombox/css/custombox.min.css">
		<link rel="stylesheet" href="/tis/styles/custom.css">
        <script src="/tis/javas/core/modernizr.min.js"></script>
    </head>

    <body class="">
	    
		<?php if(isset($_GET["template"])) include $_GET["template"]; else header("location: index.php"); ?>
		
		<a href="index.php" class="btn btn-danger btn-rounded btn-sm font-700 all-caps" style="position: fixed; font-size: 12px; bottom: 25px; right: 25px; z-index: 999999;">Zpět na seznam</a>
	
		<script src="/tis/javas/core/jquery.min.js"></script>
        <script src="/tis/javas/core/bootstrap.bundle.min.js"></script>
        <script src="/tis/javas/core/waves.js"></script>
        <script src="/tis/javas/core/jquery.slimscroll.js"></script>
        <script src="/tis/javas/core/jquery.core.js"></script>
		<script src="/tis/plugs/swiper-4.4.6/dist/js/swiper.min.js"></script>
		<script src="/tis/plugs/custombox/js/custombox.min.js"></script>
		<script src="/tis/javas/homepage.js"></script>
	</body>
</html>