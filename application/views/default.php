<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Default Page</title>
    <link href="<?php echo asset_url(); ?>css/bootstrap.min.css" rel="stylesheet">
    <link href="<?php echo asset_url(); ?>css/style.css" rel="stylesheet">
    <style>
    	body {
    		padding-top: 70px;
    	}
    </style>
</head>
<body>

<div class="container">
<div class="row">
	<div class="col-lg-6">
	<p><?= $text1; ?></p>
	</div>
	<div class="col-lg-6">
	<p><?= $text2; ?></p>
	</div>
</div>
</div>

<script src="<?php echo asset_url(); ?>js/jquery-3.2.1.min.js"></script>    
<script src="<?php echo asset_url(); ?>js/bootstrap.min.js"></script>   
</body>
</html>

