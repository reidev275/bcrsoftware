<?php 
    $name = "Business Computer Resources, Inc.";
    $address = "413 Montbrook Ln.";
    $cityStateZip = "Knoxville, TN 37919";
    $phone = "(866) 694-2007";
    $fax = "(865) 694-2008";
    $email = "BCRStaff@BCRSoftware.com";

    $title_links = array(
        array("Applications", "/applications.php"),
        array("Support", "/support.php"),
        array("About", "/about.php")
    );
?>

<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">
		<title>BCR Software - Distribution Software</title>
		<!--<link href="favicon.ico" rel="shortcut icon" type="image/x-icon" />-->
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap.min.css">
		<link href="Content/Site.css" rel="stylesheet" />
	</head>
    <body>       
		<nav class="navbar navbar-default navbar-static-top" role="navigation">
			<div class="container">
				<div class="navbar-header">
					<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target=".navbar-collapse">
					<span class="sr-only">Toggle navigation</span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
					</button>
					<a class="navbar-brand" href="/"><img alt="Brand" src="Content/logo.png"></a>                  
                    <a class="navbar-brand" style="padding: 15px 0 0 15px;" href="/"><span>BCR Software</span></a>
				</div>

				<div class="collapse navbar-collapse">
					<ul class="nav navbar-nav">
                        <?php foreach ($title_links as $link) {
                          echo "<li><a href='", $link[1], "'>", $link[0], "</a></li>";
                        } ?>
					</ul>
				</div>
			</div>
		</nav>
        <div class="container">