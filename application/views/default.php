<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Default Page</title>
    <link href="<?php echo asset_url(); ?>css/bootstrap.min.css" rel="stylesheet">
    <link href="<?php echo asset_url(); ?>css/font-awesome.css" rel="stylesheet">
    <link href="<?php echo asset_url(); ?>css/style.css" rel="stylesheet">
    <style>
    	body {
    		padding-top: 70px;
    	}
    </style>
</head>
<body>

<header>
    <div class="container">
        <div id="branding">
            <h1><i class="fa fa-rocket"></i> <span class="highlight">ABC</span> Web design</h1>
        </div>
        <nav>
            <ul>
             <li><a href="#">Home</a></li>       
             <li><a href="#">About</a></li>       
             <li><a href="#">Services</a></li>             
            </ul>
        </nav>
    </div>
</header>

<section id="showcase">
    <div class="container">
        <h1>Haloo apa kabar?</h1>
        <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley </p>
    </div>
</section>

<section id="newsletter">
    <div class="container">
        <h1></h1>
        <form>
            <input type="email" placeholder="enter email address">
            <button type="submit" class="button1">Subscribe</button>
        </form>
    </div>
</section>

<section id="boxes">
    <div class="container">
        <div class="box">
            <i class="fa fa-signal fa-5x"></i>
            <h3>Grow Your Audience</h3>
            <p>Lorem dasdasdasdasdasd</p>
        </div>

        <div class="box">
            <i class="fa fa-photo fa-5x"></i>
            <h3>Modern Web Design</h3>
            <p>Lorem dasdasdasdasdasd</p>
        </div>

        <div class="box">
            <i class="fa fa-cube fa-5x"></i>
            <h3>Ultra fast hosting</h3>
            <p>Lorem dasdasdasdasdasd</p>
        </div>
    </div>
</section>

<footer>
    <p> web design, coyright &copy; 2017</p>
</footer>

<script src="<?php echo asset_url(); ?>js/jquery-3.2.1.min.js"></script>    
<script src="<?php echo asset_url(); ?>js/bootstrap.min.js"></script>   
</body>
</html>

