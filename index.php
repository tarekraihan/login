<?php

    include("admin/classes/class_Mail.php");
    $main=new Mail();

?>
<!DOCTYPE html>
<html lang="en">
<head>
	  <meta charset="utf-8">
	  <meta name="viewport" content="width=device-width, initial-scale=1">
	  <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/css/bootstrap.min.css">
	  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
	  <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/js/bootstrap.min.js"></script>


	  <link rel="stylesheet" href="font-awesome/css/font-awesome.min.css">
	  <link rel="stylesheet" type="text/css" href="css/styleesheet.css">
</head>

<body>

<div id="fb-root"></div>
<script>(function(d, s, id) {
        var js, fjs = d.getElementsByTagName(s)[0];
        if (d.getElementById(id)) return;
        js = d.createElement(s); js.id = id;
        js.src = "//connect.facebook.net/en_US/sdk.js#xfbml=1&version=v2.3&appId=1100933466586979";
        fjs.parentNode.insertBefore(js, fjs);
    }(document, 'script', 'facebook-jssdk'));</script>


<div class="container">
	<div class="row no-margin">
	   <div class="header">
	     <img src="images/bg.JPG" class="img_style_a"/>
	   </div>
	</div>

    <?php include("placeholder.php"); ?> <!--Main Dynamic Contain -->

</div>

</body>
</html>