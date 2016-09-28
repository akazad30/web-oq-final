<?php
	require_once 'dbConfig.php';

?>

<!DOCTYPE html>
<head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title>Obaidul Quader :: Minister of Road Transport & Bridges,BD</title>
        
        <meta name="description" content="">
        
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link href="#" rel="icon" type="image/png" id="page_favicon"/>

        <!-- Stylesheets -->
        <link rel="stylesheet" href="css/materialize.min.css">
        <link rel="stylesheet" href="css/bootstrap.min.css">
        <link rel="stylesheet" href="css/font-awesome.min.css">
        <link rel="stylesheet" href="css/ionicons.min.css">
        <link rel="stylesheet" href="css/fonts.css">
        <link rel="stylesheet" href="css/animate.min.css">
        <link rel="stylesheet" href="css/owl.carousel.css">
        <link rel="stylesheet" href="css/slick.css">
        <link rel="stylesheet" href="css/slick-theme.css">
  		<link rel="stylesheet" href="css/camera.css">
        <link rel="stylesheet" href="css/main.css">
        <link rel="stylesheet" href="css/responsive.css">
        <link rel="stylesheet" href="css/colors/color1.css">

    </head>
    <body>

        <div id="loader">
            <div class="loader-content">
                <div class="preloader-wrapper small active">
                    <div class="spinner-layer spinner-blue-only">
                        <div class="circle-clipper left">
                            <div class="circle"></div>
                        </div>
                        <div class="gap-patch">
                            <div class="circle"></div>
                        </div>
                        <div class="circle-clipper right">
                            <div class="circle"></div>
                        </div>
                    </div>
                </div>
                <p class="loading-title">Obaidul Quader</p>
            </div>
        </div>

        <header class="main-header">
            <!-- desktop menu -->
            <div class="header-big-screen hidden-sm hidden-xs">
                <div class="container">
                    <div class="header-inner clearfix">
                        <a href="#home" data-section="#home" class="logo menu-smooth-scroll">
                            <p><img src="img/gov-logo.png" alt="logo"> &nbsp;&nbsp; <font color="black-text" size="3px">Obaidul Quader</font></p>
                        </a>
                        <nav class="menu">
                            <ul>
                                <li class="current"><a href="#home" data-section="#home" class="menu-smooth-scroll">Home</a></li>
                                <li><a href="#about" data-section="#about" class="menu-smooth-scroll">About Us</a></li>
                                <li><a href="#latestupdate" data-section="#latestupdate" class="menu-smooth-scroll">Latest Update</a></li>
								<li><a href="#gallery" data-section="#gallery" class="menu-smooth-scroll">Gallery</a></li>
								<li><a href="#book" data-section="#book" class="menu-smooth-scroll">Book</a></li>
<!--                                 <li><a href="#liveevents" data-section="#liveevents" class="menu-smooth-scroll">Live</a></li> -->
                                <li><a href="#blog" data-section="#blog" class="menu-smooth-scroll">Blog</a></li>
                               <!-- <li><button class="btn bg-brand color-white waves-effect modal-trigger" href="#modal1">Get an Appoinment</button></li> -->
                            </ul>
                        </nav>
                    </div>
                </div>
            </div>
            <!-- mobile menu -->
            <div class="header-mobile-screen visible-sm visible-xs full-height">
                <div class="header-inner full-height">
                    <div class="logo-area clearfix">
                        <a href="#home" data-section="#home" class="logo pull-left menu-smooth-scroll">
                            <p><img src="img/gov-logo.png" alt="logo"> &nbsp;&nbsp; <font color="black-text" size="3px">Obaidul Quader</font></p>
                        </a>
                        <div class="bar-area pull-right">
                            <a href="#" class="open-menu"><i class="fa fa-bars"></i></a>
                            <a href="#" class="close-menu"><i class="fa fa-times"></i></a>
                        </div>
                    </div>
                    <nav class="menu animated">
                        <ul>
                                <li><a href="#home" data-section="#home" class="menu-smooth-scroll">Home</a></li>
                                <li><a href="#about" data-section="#about" class="menu-smooth-scroll">About</a></li>
                                <li><a href="#latestupdate" data-section="#latestupdate" class="menu-smooth-scroll">Latest Update</a></li>
<!--                                 <li><a href="#liveevents" data-section="#liveevents" class="menu-smooth-scroll">Live Events</a></li> -->
                                <li><a href="#archive" data-section="#archive" class="menu-smooth-scroll">Achievement</a></li>
                                <li><a href="#blog" data-section="#blog" class="menu-smooth-scroll">Blog</a></li>
                                
                        </ul>
                    </nav>
                </div>
            </div>
        </header>
        <!-- Header Menu end -->



        <!-- Main section start -->
        <main role="main" class="main">
            <!-- Banner Section start -->
            <section id="home" class="scroll-section hidden-overflow">
                <div class="container">
					<div class="camera_wrap camera_emboss pattern_1" id="camera_wrap_4">
<!-- 							<div data-src="img/slider-one.jpg"></div> -->
							<div data-src="img/slide1.jpg"></div>
							<div data-src="img/slide2.jpg"></div>
							<div data-src="img/slide3.jpg"></div>
					</div>
<!-- 							<div id="pl-slides"></div>		 -->
									
				</div>		
            </section>
            <!-- Banner Section end -->

            <!-- Why this app start -->
            <section id="about" class="scroll-section section-space why-this-app section-bg-02 hidden-overflow">
                <div class="container">

                    <div class="row">
                        <div class="why-section-col col-lg-5 col-md-5 col-sm-6 col-xs-12">
                            <header><h3>
<?php				
$stmt = $DB_con->prepare('SELECT HeadingDesc FROM heading WHERE HeadingId =22 ');
$stmt->execute();
if($stmt->rowCount() > 0)
{
	while($row=$stmt->fetch(PDO::FETCH_ASSOC))
		{
			extract($row);
			?>
			<h3 class="page-header"><?php echo $HeadingDesc." "; ?></h3>
				<?php
		}
}
else
{
?>
<div class="col-xs-12">
<div class="alert alert-warning">
<span class="glyphicon glyphicon-info-sign"></span> &nbsp; Under Construction....
</div>
</div>
<?php
}
?>
							
							</h3>
							</header>
								<p>	 
								
<?php				
$stmt = $DB_con->prepare('SELECT ContentDesc,HeadingTitle FROM description WHERE HeadingId =22 ');
		$stmt->execute();
	if($stmt->rowCount() > 0)
		{
			while($row=$stmt->fetch(PDO::FETCH_ASSOC))
				{
					extract($row);
					?>
																
					<p class="page-header"><?php echo $ContentDesc." "; ?></p>
<?php
				}
					}
				else
					{
						?>
					<div class="col-xs-12">
					<div class="alert alert-warning">
						<span class="glyphicon glyphicon-info-sign"></span> &nbsp; Under Construction....
							</div>
						</div>
					<?php
				}
															
?>
								
								</p>
                        </div>
						
                        <div class="why-section-col col-lg-1 col-md-1 hidden-sm hidden-xs"></div>
						
                        <div class="why-section-col col-lg-6 col-md-6 col-sm-6" style="">
                            <div class="why-slider" id="whySlider">
                                <div class="thumb-area">
								
<?php
	$stmt = $DB_con->prepare('select UserPic from image where HeadingId = 22 ');
	$stmt->execute();
		if($stmt->rowCount() > 0)
			{
				while($row=$stmt->fetch(PDO::FETCH_ASSOC))
					{
						extract($row);
						?>
			<img src="images/<?php echo $row['UserPic']; ?>" style="width:80%; height:90%" />
				<?php
						}
					}
		else
				{
					?>
						<div class="col-xs-12">
							<div class="alert alert-warning">
							<span class="glyphicon glyphicon-info-sign"></span> &nbsp; Under Construction....
						</div>
						</div>
				<?php
				}
					?>
																						
								
								
								
								
                                </div>
                            </div>
                        </div>
                    </div>

                </div>
            </section>
            <!-- Why this app end -->
			<!-- Latest Update Section start -->
            <section id="latestupdate" class="scroll-section blog-section section-space">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-12 text-center">
                            <div class="section-head">
                                <h2 class="section-title title-1">
								<?php				
$stmt = $DB_con->prepare('SELECT HeadingDesc FROM heading WHERE HeadingId =23 ');
$stmt->execute();
if($stmt->rowCount() > 0)
{
	while($row=$stmt->fetch(PDO::FETCH_ASSOC))
		{
			extract($row);
			?>
			<h3 class="page-header"><?php echo $HeadingDesc." "; ?></h3>
				<?php
		}
}
else
{
?>
<div class="col-xs-12">
<div class="alert alert-warning">
<span class="glyphicon glyphicon-info-sign"></span> &nbsp; Under Construction....
</div>
</div>
<?php
}
?>
								</h2>
                            </div>
                        </div>
                    </div>
                    <div class="row" id="lateupdate">
                        <article class="single-post">
                            <div class="single-blog-post theme01 z-depth-1">
                                <div class="blog-post-thumb-container">
                                    <a href="" class="blog-post-thumb-permalink">
										 <?php
	$stmt = $DB_con->prepare('select UserPic from image where HeadingId = 23 ');
	$stmt->execute();
		if($stmt->rowCount() > 0)
			{
				while($row=$stmt->fetch(PDO::FETCH_ASSOC))
					{
						extract($row);
						?>
			<img src="images/<?php echo $row['UserPic']; ?>" style="width:80%; height:90%" />
				<?php
						}
					}
		else
				{
					?>
						<div class="col-xs-12">
							<div class="alert alert-warning">
							<span class="glyphicon glyphicon-info-sign"></span> &nbsp; Under Construction....
						</div>
						</div>
				<?php
				}
					?>
									</a>
                                </div>
                                <a href="#" class="blog-post-title-permalink"><h3 class="blog-post-title">
									<?php				
$stmt = $DB_con->prepare('SELECT ContentDesc,HeadingTitle FROM description WHERE HeadingId =23 ');
		$stmt->execute();
	if($stmt->rowCount() > 0)
		{
			while($row=$stmt->fetch(PDO::FETCH_ASSOC))
				{
					extract($row);
					?>
																
					<p class="page-header"><?php echo $ContentDesc." "; ?></p>
<?php
				}
					}
				else
					{
						?>
					<div class="col-xs-12">
					<div class="alert alert-warning">
						<span class="glyphicon glyphicon-info-sign"></span> &nbsp; Under Construction....
							</div>
						</div>
					<?php
				}
															
?>
								
								
								
								</h3></a>
                                <!--<header><h5 class="blog-post-meta">By <a href="#" title="Posted by Admin">Admin</a> | 24 Oct 2014</h5></header>-->
                                <div class="blog-post-content">
                                   <?php				
$stmt = $DB_con->prepare('SELECT ContentDesc,HeadingTitle FROM description WHERE HeadingId =23 ');
		$stmt->execute();
	if($stmt->rowCount() > 0)
		{
			while($row=$stmt->fetch(PDO::FETCH_ASSOC))
				{
					extract($row);
					?>
																
					<p class="page-header"><?php echo $ContentDesc." "; ?></p>
<?php
				}
					}
				else
					{
						?>
					<div class="col-xs-12">
					<div class="alert alert-warning">
						<span class="glyphicon glyphicon-info-sign"></span> &nbsp; Under Construction....
							</div>
						</div>
					<?php
				}
															
?>
                                </div>
                            </div>
                        </article>
                           <article class="single-post">
                            <div class="single-blog-post theme01 z-depth-1">
                                <div class="blog-post-thumb-container">
                                    <a href="" class="blog-post-thumb-permalink">
										 <?php
	$stmt = $DB_con->prepare('select UserPic from image where HeadingId = 24 ');
	$stmt->execute();
		if($stmt->rowCount() > 0)
			{
				while($row=$stmt->fetch(PDO::FETCH_ASSOC))
					{
						extract($row);
						?>
			<img src="images/<?php echo $row['UserPic']; ?>" style="width:80%; height:90%" />
				<?php
						}
					}
		else
				{
					?>
						<div class="col-xs-12">
							<div class="alert alert-warning">
							<span class="glyphicon glyphicon-info-sign"></span> &nbsp; Under Construction....
						</div>
						</div>
				<?php
				}
					?>
									</a>
                                </div>
                                <a href="#" class="blog-post-title-permalink"><h3 class="blog-post-title">
									<?php				
$stmt = $DB_con->prepare('SELECT ContentDesc,HeadingTitle FROM description WHERE HeadingId =24 ');
		$stmt->execute();
	if($stmt->rowCount() > 0)
		{
			while($row=$stmt->fetch(PDO::FETCH_ASSOC))
				{
					extract($row);
					?>
																
					<p class="page-header"><?php echo $ContentDesc." "; ?></p>
<?php
				}
					}
				else
					{
						?>
					<div class="col-xs-12">
					<div class="alert alert-warning">
						<span class="glyphicon glyphicon-info-sign"></span> &nbsp; Under Construction....
							</div>
						</div>
					<?php
				}
															
?>
								
								
								
								</h3></a>
                                <!--<header><h5 class="blog-post-meta">By <a href="#" title="Posted by Admin">Admin</a> | 24 Oct 2014</h5></header>-->
                                <div class="blog-post-content">
                                   <?php				
$stmt = $DB_con->prepare('SELECT ContentDesc,HeadingTitle FROM description WHERE HeadingId =24 ');
		$stmt->execute();
	if($stmt->rowCount() > 0)
		{
			while($row=$stmt->fetch(PDO::FETCH_ASSOC))
				{
					extract($row);
					?>
																
					<p class="page-header"><?php echo $ContentDesc." "; ?></p>
<?php
				}
					}
				else
					{
						?>
					<div class="col-xs-12">
					<div class="alert alert-warning">
						<span class="glyphicon glyphicon-info-sign"></span> &nbsp; Under Construction....
							</div>
						</div>
					<?php
				}
															
?>
                                </div>
                            </div>
                        </article>
						     <article class="single-post">
                            <div class="single-blog-post theme01 z-depth-1">
                                <div class="blog-post-thumb-container">
                                    <a href="" class="blog-post-thumb-permalink">
										 <?php
	$stmt = $DB_con->prepare('select UserPic from image where HeadingId = 25 ');
	$stmt->execute();
		if($stmt->rowCount() > 0)
			{
				while($row=$stmt->fetch(PDO::FETCH_ASSOC))
					{
						extract($row);
						?>
			<img src="images/<?php echo $row['UserPic']; ?>" style="width:80%; height:90%" />
				<?php
						}
					}
		else
				{
					?>
						<div class="col-xs-12">
							<div class="alert alert-warning">
							<span class="glyphicon glyphicon-info-sign"></span> &nbsp; Under Construction....
						</div>
						</div>
				<?php
				}
					?>
									</a>
                                </div>
                                <a href="#" class="blog-post-title-permalink"><h3 class="blog-post-title">
									<?php				
$stmt = $DB_con->prepare('SELECT ContentDesc,HeadingTitle FROM description WHERE HeadingId =25 ');
		$stmt->execute();
	if($stmt->rowCount() > 0)
		{
			while($row=$stmt->fetch(PDO::FETCH_ASSOC))
				{
					extract($row);
					?>
																
					<p class="page-header"><?php echo $ContentDesc." "; ?></p>
<?php
				}
					}
				else
					{
						?>
					<div class="col-xs-12">
					<div class="alert alert-warning">
						<span class="glyphicon glyphicon-info-sign"></span> &nbsp; Under Construction....
							</div>
						</div>
					<?php
				}
															
?>
								
								
								
								</h3></a>
                                <!--<header><h5 class="blog-post-meta">By <a href="#" title="Posted by Admin">Admin</a> | 24 Oct 2014</h5></header>-->
                                <div class="blog-post-content">
                                   <?php				
$stmt = $DB_con->prepare('SELECT ContentDesc,HeadingTitle FROM description WHERE HeadingId =25 ');
		$stmt->execute();
	if($stmt->rowCount() > 0)
		{
			while($row=$stmt->fetch(PDO::FETCH_ASSOC))
				{
					extract($row);
					?>
																
					<p class="page-header"><?php echo $ContentDesc." "; ?></p>
<?php
				}
					}
				else
					{
						?>
					<div class="col-xs-12">
					<div class="alert alert-warning">
						<span class="glyphicon glyphicon-info-sign"></span> &nbsp; Under Construction....
							</div>
						</div>
					<?php
				}
															
?>
                                </div>
                            </div>
                        </article>
                    </div>

                </div>
            </section>
     
			
			<!--Section achievements-->
			<section class="achievements section-space hidden-overflow" style="background-color:green">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-12 text-center">
                            <div class="section-head">
                                <h2 class="section-title title-1 color-white">
									<?php				
$stmt = $DB_con->prepare('SELECT HeadingDesc FROM heading WHERE HeadingId =34 ');
$stmt->execute();
if($stmt->rowCount() > 0)
{
	while($row=$stmt->fetch(PDO::FETCH_ASSOC))
		{
			extract($row);
			?>
			<h3 class="page-header"><?php echo $HeadingDesc." "; ?></h3>
				<?php
		}
}
else
{
?>
<div class="col-xs-12">
<div class="alert alert-warning">
<span class="glyphicon glyphicon-info-sign"></span> &nbsp; Under Construction....
</div>
</div>
<?php
}
?>
								
								</h2>
                            </div>
                        </div>
                    </div>
					<div class="row">
					<div class="achivements-content">
						<div class="achive-post">
							<div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
								<div class="card-panel grey lighten-5 z-depth-1">
									  <div class="row valign-wrapper">
										<div class="col-sm-5">
										<?php
	$stmt = $DB_con->prepare('select UserPic from image where HeadingId = 34 ');
	$stmt->execute();
		if($stmt->rowCount() > 0)
			{
				while($row=$stmt->fetch(PDO::FETCH_ASSOC))
					{
						extract($row);
						?>
			<img src="images/<?php echo $row['UserPic']; ?>" style="width:80%; height:90%" />
				<?php
						}
					}
		else
				{
					?>
						<div class="col-xs-12">
							<div class="alert alert-warning">
							<span class="glyphicon glyphicon-info-sign"></span> &nbsp; Under Construction....
						</div>
						</div>
				<?php
				}
					?>
										</div>
										<div class="col-sm-7">
										  <span class="black-text spnblk">
											<span class="title">
													<?php				
$stmt = $DB_con->prepare('SELECT HeadingDesc FROM heading WHERE HeadingId =34 ');
$stmt->execute();
if($stmt->rowCount() > 0)
{
	while($row=$stmt->fetch(PDO::FETCH_ASSOC))
		{
			extract($row);
			?>
			<h3 class="page-header"><?php echo $HeadingDesc." "; ?></h3>
				<?php
		}
}
else
{
?>
<div class="col-xs-12">
<div class="alert alert-warning">
<span class="glyphicon glyphicon-info-sign"></span> &nbsp; Under Construction....
</div>
</div>
<?php
}
?>
											</span>
											<?php				
$stmt = $DB_con->prepare('SELECT ContentDesc,HeadingTitle FROM description WHERE HeadingId =34 ');
		$stmt->execute();
	if($stmt->rowCount() > 0)
		{
			while($row=$stmt->fetch(PDO::FETCH_ASSOC))
				{
					extract($row);
					?>
																
					<p class="page-header"><?php echo $ContentDesc." "; ?></p>
<?php
				}
					}
				else
					{
						?>
					<div class="col-xs-12">
					<div class="alert alert-warning">
						<span class="glyphicon glyphicon-info-sign"></span> &nbsp; Under Construction....
							</div>
						</div>
					<?php
				}
															
?>
										  </span>
										  <span class="read-more">
											<a href="#" class="btn th-btn th-btn-small text-right bg-brand color-white waves-effect">Details</a>
										  </span>
										</div>
									  </div>
								</div>
							</div>
						<div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
								<div class="card-panel grey lighten-5 z-depth-1">
									  <div class="row valign-wrapper">
										<div class="col-sm-5">
										 <?php
	$stmt = $DB_con->prepare('select UserPic from image where HeadingId = 35 ');
	$stmt->execute();
		if($stmt->rowCount() > 0)
			{
				while($row=$stmt->fetch(PDO::FETCH_ASSOC))
					{
						extract($row);
						?>
			<img src="images/<?php echo $row['UserPic']; ?>" style="width:80%; height:90%" />
				<?php
						}
					}
		else
				{
					?>
						<div class="col-xs-12">
							<div class="alert alert-warning">
							<span class="glyphicon glyphicon-info-sign"></span> &nbsp; Under Construction....
						</div>
						</div>
				<?php
				}
					?>
										</div>
										<div class="col-sm-7">
										  <span class="black-text spnblk">
											<span class="title">
													<?php				
$stmt = $DB_con->prepare('SELECT HeadingDesc FROM heading WHERE HeadingId =35 ');
$stmt->execute();
if($stmt->rowCount() > 0)
{
	while($row=$stmt->fetch(PDO::FETCH_ASSOC))
		{
			extract($row);
			?>
			<h3 class="page-header"><?php echo $HeadingDesc." "; ?></h3>
				<?php
		}
}
else
{
?>
<div class="col-xs-12">
<div class="alert alert-warning">
<span class="glyphicon glyphicon-info-sign"></span> &nbsp; Under Construction....
</div>
</div>
<?php
}
?>
											</span>
											<?php				
$stmt = $DB_con->prepare('SELECT ContentDesc,HeadingTitle FROM description WHERE HeadingId =35 ');
		$stmt->execute();
	if($stmt->rowCount() > 0)
		{
			while($row=$stmt->fetch(PDO::FETCH_ASSOC))
				{
					extract($row);
					?>
																
					<p class="page-header"><?php echo $ContentDesc." "; ?></p>
<?php
				}
					}
				else
					{
						?>
					<div class="col-xs-12">
					<div class="alert alert-warning">
						<span class="glyphicon glyphicon-info-sign"></span> &nbsp; Under Construction....
							</div>
						</div>
					<?php
				}
															
?>
										  </span>
										  <span class="read-more">
											<a href="#" class="btn th-btn th-btn-small text-right bg-brand color-white waves-effect">Details</a>
										  </span>
										</div>
									  </div>
								</div>
							</div>
						</div>

<div class="achive-post">
							<div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
								<div class="card-panel grey lighten-5 z-depth-1">
									  <div class="row valign-wrapper">
										<div class="col-sm-5">
										  <?php
	$stmt = $DB_con->prepare('select UserPic from image where HeadingId = 36 ');
	$stmt->execute();
		if($stmt->rowCount() > 0)
			{
				while($row=$stmt->fetch(PDO::FETCH_ASSOC))
					{
						extract($row);
						?>
			<img src="images/<?php echo $row['UserPic']; ?>" style="width:80%; height:90%" />
				<?php
						}
					}
		else
				{
					?>
						<div class="col-xs-12">
							<div class="alert alert-warning">
							<span class="glyphicon glyphicon-info-sign"></span> &nbsp; Under Construction....
						</div>
						</div>
				<?php
				}
					?>
										</div>
										<div class="col-sm-7">
										  <span class="black-text spnblk">
											<span class="title">
													<?php				
$stmt = $DB_con->prepare('SELECT HeadingDesc FROM heading WHERE HeadingId =36 ');
$stmt->execute();
if($stmt->rowCount() > 0)
{
	while($row=$stmt->fetch(PDO::FETCH_ASSOC))
		{
			extract($row);
			?>
			<h3 class="page-header"><?php echo $HeadingDesc." "; ?></h3>
				<?php
		}
}
else
{
?>
<div class="col-xs-12">
<div class="alert alert-warning">
<span class="glyphicon glyphicon-info-sign"></span> &nbsp; Under Construction....
</div>
</div>
<?php
}
?>
											</span>
											<?php				
$stmt = $DB_con->prepare('SELECT ContentDesc,HeadingTitle FROM description WHERE HeadingId =36 ');
		$stmt->execute();
	if($stmt->rowCount() > 0)
		{
			while($row=$stmt->fetch(PDO::FETCH_ASSOC))
				{
					extract($row);
					?>
																
					<p class="page-header"><?php echo $ContentDesc." "; ?></p>
<?php
				}
					}
				else
					{
						?>
					<div class="col-xs-12">
					<div class="alert alert-warning">
						<span class="glyphicon glyphicon-info-sign"></span> &nbsp; Under Construction....
							</div>
						</div>
					<?php
				}
															
?>
										  </span>
                                                                               <span class="read-more">
											<a href="#" class="btn th-btn th-btn-small text-right bg-brand color-white waves-effect">Details</a>
										  </span>
										
										</div>
									  </div>
								</div>
							</div>
						<div class="achive-post">
					
				</div>
			</section>
			<!--Section Inovation-->
			<section class="inovation section-space hidden-overflow">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-12 text-center">
                            <div class="section-head">
                                <h2 class="section-title title-1">
								<?php				
$stmt = $DB_con->prepare('SELECT HeadingDesc FROM heading WHERE HeadingId =32 ');
$stmt->execute();
if($stmt->rowCount() > 0)
{
	while($row=$stmt->fetch(PDO::FETCH_ASSOC))
		{
			extract($row);
			?>
			<h3 class="page-header"><?php echo $HeadingDesc." "; ?></h3>
				<?php
		}
}
else
{
?>
<div class="col-xs-12">
<div class="alert alert-warning">
<span class="glyphicon glyphicon-info-sign"></span> &nbsp; Under Construction....
</div>
</div>
<?php
}
?>
								</h2>
                            </div>
                        </div>
                    </div>
					<div class="row">
						<div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
							  <div class="card">
								<div class="card-image waves-effect waves-block waves-light">
								<?php
	$stmt = $DB_con->prepare('select UserPic from image where HeadingId = 32 ');
	$stmt->execute();
		if($stmt->rowCount() > 0)
			{
				while($row=$stmt->fetch(PDO::FETCH_ASSOC))
					{
						extract($row);
						?>
			<img src="images/<?php echo $row['UserPic']; ?>" style="width:40%; height:40%" />
				<?php
						}
					}
		else
				{
					?>
						<div class="col-xs-12">
							<div class="alert alert-warning">
							<span class="glyphicon glyphicon-info-sign"></span> &nbsp; Under Construction....
						</div>
						</div>
				<?php
				}
					?>
								</div>
								<div class="card-content">
								  <span class="card-title activator grey-text text-darken-4">
								  <?php				
$stmt = $DB_con->prepare('SELECT ContentDesc,HeadingTitle FROM description WHERE HeadingId =32 ');
		$stmt->execute();
	if($stmt->rowCount() > 0)
		{
			while($row=$stmt->fetch(PDO::FETCH_ASSOC))
				{
					extract($row);
					?>
																
					<p class="page-header"><?php echo $HeadingTitle." "; ?></p>
<?php
				}
					}
				else
					{
						?>
					<div class="col-xs-12">
					<div class="alert alert-warning">
						<span class="glyphicon glyphicon-info-sign"></span> &nbsp; Under Construction....
							</div>
						</div>
					<?php
				}
															
?>
								<i class="ion-android-more-vertical right"></i></span>
								</div>
								<div class="card-reveal">
								  <span class="card-title grey-text text-darken-4">
								 <?php				
$stmt = $DB_con->prepare('SELECT ContentDesc,HeadingTitle FROM description WHERE HeadingId =32 ');
		$stmt->execute();
	if($stmt->rowCount() > 0)
		{
			while($row=$stmt->fetch(PDO::FETCH_ASSOC))
				{
					extract($row);
					?>
																
					<p class="page-header"><?php echo $ContentDesc." "; ?></p>
<?php
				}
					}
				else
					{
						?>
					<div class="col-xs-12">
					<div class="alert alert-warning">
						<span class="glyphicon glyphicon-info-sign"></span> &nbsp; Under Construction....
							</div>
						</div>
					<?php
				}
															
?>
								<i class="ion-close right"></i></span>
								  <p><?php				
$stmt = $DB_con->prepare('SELECT ContentDesc,HeadingTitle FROM description WHERE HeadingId =33 ');
		$stmt->execute();
	if($stmt->rowCount() > 0)
		{
			while($row=$stmt->fetch(PDO::FETCH_ASSOC))
				{
					extract($row);
					?>
																
					<p class="page-header"><?php echo $ContentDesc." "; ?></p>
<?php
				}
					}
				else
					{
						?>
					<div class="col-xs-12">
					<div class="alert alert-warning">
						<span class="glyphicon glyphicon-info-sign"></span> &nbsp; Under Construction....
							</div>
						</div>
					<?php
				}
															
?></p>
								</div>
							  </div>
						</div>
						<div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
							  <div class="card">
								<div class="card-image waves-effect waves-block waves-light">
								   <?php
	$stmt = $DB_con->prepare('select UserPic from image where HeadingId = 33 ');
	$stmt->execute();
		if($stmt->rowCount() > 0)
			{
				while($row=$stmt->fetch(PDO::FETCH_ASSOC))
					{
						extract($row);
						?>
			<img src="images/<?php echo $row['UserPic']; ?>" style="width:40%; height:40%" />
				<?php
						}
					}
		else
				{
					?>
						<div class="col-xs-12">
							<div class="alert alert-warning">
							<span class="glyphicon glyphicon-info-sign"></span> &nbsp; Under Construction....
						</div>
						</div>
				<?php
				}
					?>
								</div>
								<div class="card-content">
								  <span class="card-title activator grey-text text-darken-4"><?php				
$stmt = $DB_con->prepare('SELECT HeadingDesc FROM heading WHERE HeadingId =33 ');
$stmt->execute();
if($stmt->rowCount() > 0)
{
	while($row=$stmt->fetch(PDO::FETCH_ASSOC))
		{
			extract($row);
			?>
			<h3 class="page-header"><?php echo $HeadingDesc." "; ?></h3>
				<?php
		}
}
else
{
?>
<div class="col-xs-12">
<div class="alert alert-warning">
<span class="glyphicon glyphicon-info-sign"></span> &nbsp; Under Construction....
</div>
</div>
<?php
}
?><i class="ion-android-more-vertical right"></i></span>
								</div>
								<div class="card-reveal">
							           							  <span class="card-title grey-text text-darken-4">
								 <?php				
$stmt = $DB_con->prepare('SELECT ContentDesc,HeadingTitle FROM description WHERE HeadingId =33');
		$stmt->execute();
	if($stmt->rowCount() > 0)
		{
			while($row=$stmt->fetch(PDO::FETCH_ASSOC))
				{
					extract($row);
					?>
																
					<p class="page-header"><?php echo $ContentDesc." "; ?></p>
<?php
				}
					}
				else
					{
						?>
					<div class="col-xs-12">
					<div class="alert alert-warning">
						<span class="glyphicon glyphicon-info-sign"></span> &nbsp; Under Construction....
							</div>
						</div>
					<?php
				}
															
?><i class="ion-close right"></i></span>
								  <p></p>
								</div>
							  </div>
						</div>
					</div>
				</div>
			</section>	
			

            <!-- Amazing Feature Section start -->
            <section id="features" class="scroll-section section-space section-bg-01 amazing-feature amazing-feature-01 hidden-overflow" style="background-color:#424A54">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-12 text-center">
                            <div class="section-head">
                                <h2 class="section-title title-1" style="background-color:#FFFFFF;border-radious:5ps solid #ddd"><i><marquee>
									<?php				
$stmt = $DB_con->prepare('SELECT HeadingDesc FROM heading WHERE HeadingId =26 ');
$stmt->execute();
if($stmt->rowCount() > 0)
{
	while($row=$stmt->fetch(PDO::FETCH_ASSOC))
		{
			extract($row);
			?>
			<h3 class="page-header"><?php echo $HeadingDesc." "; ?></h3>
				<?php
		}
}
else
{
?>
<div class="col-xs-12">
<div class="alert alert-warning">
<span class="glyphicon glyphicon-info-sign"></span> &nbsp; Under Construction....
</div>
</div>
<?php
}
?></marquee></i></h2>
                            </div>
                        </div>
                    </div>
                    <div class="row feature-lists-box" style="height:300px">
                        <div class="feature-lists feature-lists-style-one">
													
													<div class="col-md-offset-2 col-md-8">
                                <div class="feature-list">
                                    <div class="icon-area wow rotateIn animated">
                                    <?php
	$stmt = $DB_con->prepare('select UserPic from image where HeadingId = 32 ');
	$stmt->execute();
		if($stmt->rowCount() > 0)
			{
				while($row=$stmt->fetch(PDO::FETCH_ASSOC))
					{
						extract($row);
						?>
			<img src="images/<?php echo $row['UserPic']; ?>" style="width:50%; height:50%" />
				<?php
						}
					}
		else
				{
					?>
						<div class="col-xs-12">
							<div class="alert alert-warning">
							<span class="glyphicon glyphicon-info-sign"></span> &nbsp; Under Construction....
						</div>
						</div>
				<?php
				}
					?>
                                    </div>
                                    <div class="f-content-area">
                                        <h3 class="title"><?php				
$stmt = $DB_con->prepare('SELECT ContentDesc,HeadingTitle FROM description WHERE HeadingId =26 ');
		$stmt->execute();
	if($stmt->rowCount() > 0)
		{
			while($row=$stmt->fetch(PDO::FETCH_ASSOC))
				{
					extract($row);
					?>
																
					<p class="page-header"><?php echo $ContentDesc." "; ?></p>
<?php
				}
					}
				else
					{
						?>
					<div class="col-xs-12">
					<div class="alert alert-warning">
						<span class="glyphicon glyphicon-info-sign"></span> &nbsp; Under Construction....
							</div>
						</div>
					<?php
				}
															
?></h3>

                                    </div>
                                </div>
													</div>
																										
													<div class="col-md-offset-2 col-md-8">
                                <div class="feature-list">
                                    <div class="icon-area wow rotateIn animated">
                                    <?php
	$stmt = $DB_con->prepare('select UserPic from image where HeadingId = 33 ');
	$stmt->execute();
		if($stmt->rowCount() > 0)
			{
				while($row=$stmt->fetch(PDO::FETCH_ASSOC))
					{
						extract($row);
						?>
			<img src="images/<?php echo $row['UserPic']; ?>" style="width:50%; height:50%" />
				<?php
						}
					}
		else
				{
					?>
						<div class="col-xs-12">
							<div class="alert alert-warning">
							<span class="glyphicon glyphicon-info-sign"></span> &nbsp; Under Construction....
						</div>
						</div>
				<?php
				}
					?>
                                    </div>
                                    <div class="f-content-area">
                                        <h3 class="title"><?php				
$stmt = $DB_con->prepare('SELECT ContentDesc,HeadingTitle FROM description WHERE HeadingId =27 ');
		$stmt->execute();
	if($stmt->rowCount() > 0)
		{
			while($row=$stmt->fetch(PDO::FETCH_ASSOC))
				{
					extract($row);
					?>
																
					<p class="page-header"><?php echo $ContentDesc." "; ?></p>
<?php
				}
					}
				else
					{
						?>
					<div class="col-xs-12">
					<div class="alert alert-warning">
						<span class="glyphicon glyphicon-info-sign"></span> &nbsp; Under Construction....
							</div>
						</div>
					<?php
				}
															
?></h3>

                                    </div>
                                </div>
													</div>


                        
                    
                        </div>
                    </div>
                </div>
            </section>
			
			<!--Section social connect-->
			<section class="section-space section-bg-02 hidden-overflow">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-12 text-center">
                            <div class="section-head">
                                <h2 class="section-title title-1">
										<?php				
$stmt = $DB_con->prepare('SELECT HeadingDesc FROM heading WHERE HeadingId =29 ');
$stmt->execute();
if($stmt->rowCount() > 0)
{
	while($row=$stmt->fetch(PDO::FETCH_ASSOC))
		{
			extract($row);
			?>
			<h3 class="page-header"><?php echo $HeadingDesc." "; ?></h3>
				<?php
		}
}
else
{
?>
<div class="col-xs-12">
<div class="alert alert-warning">
<span class="glyphicon glyphicon-info-sign"></span> &nbsp; Under Construction....
</div>
</div>
<?php
}
?>
								</h2>
                            </div>
                        </div>
                    </div>
					<div class="row">
						<div class="col-lg-4 col-md-4 col-sm-6 col-xs-12">
							<div class="facebook-social">
								<a href="#">
								<?php
	$stmt = $DB_con->prepare('select UserPic from image where HeadingId = 29 ');
	$stmt->execute();
		if($stmt->rowCount() > 0)
			{
				while($row=$stmt->fetch(PDO::FETCH_ASSOC))
					{
						extract($row);
						?>
			<img src="images/<?php echo $row['UserPic']; ?>" style="width:80%; height:90%" />
				<?php
						}
					}
		else
				{
					?>
						<div class="col-xs-12">
							<div class="alert alert-warning">
							<span class="glyphicon glyphicon-info-sign"></span> &nbsp; Under Construction....
						</div>
						</div>
				<?php
				}
					?>
								</a><?php				
$stmt = $DB_con->prepare('SELECT ContentDesc,HeadingTitle FROM description WHERE HeadingId =29 ');
		$stmt->execute();
	if($stmt->rowCount() > 0)
		{
			while($row=$stmt->fetch(PDO::FETCH_ASSOC))
				{
					extract($row);
					?>
																
					<p class="page-header"><?php echo $ContentDesc." "; ?></p>
<?php
				}
					}
				else
					{
						?>
					<div class="col-xs-12">
					<div class="alert alert-warning">
						<span class="glyphicon glyphicon-info-sign"></span> &nbsp; Under Construction....
							</div>
						</div>
					<?php
				}
															
?>

								
							</div>
						</div>
							<div class="col-lg-4 col-md-4 col-sm-6 col-xs-12">
							<div class="facebook-social">
								<a href="#">
									<?php
	$stmt = $DB_con->prepare('select UserPic from image where HeadingId = 29 ');
	$stmt->execute();
		if($stmt->rowCount() > 0)
			{
				while($row=$stmt->fetch(PDO::FETCH_ASSOC))
					{
						extract($row);
						?>
			<img src="images/<?php echo $row['UserPic']; ?>" style="width:80%; height:90%" />
				<?php
						}
					}
		else
				{
					?>
						<div class="col-xs-12">
							<div class="alert alert-warning">
							<span class="glyphicon glyphicon-info-sign"></span> &nbsp; Under Construction....
						</div>
						</div>
				<?php
				}
					?>
								</a><?php				
$stmt = $DB_con->prepare('SELECT ContentDesc,HeadingTitle FROM description WHERE HeadingId =29 ');
		$stmt->execute();
	if($stmt->rowCount() > 0)
		{
			while($row=$stmt->fetch(PDO::FETCH_ASSOC))
				{
					extract($row);
					?>
																
					<p class="page-header"><?php echo $ContentDesc." "; ?></p>
<?php
				}
					}
				else
					{
						?>
					<div class="col-xs-12">
					<div class="alert alert-warning">
						<span class="glyphicon glyphicon-info-sign"></span> &nbsp; Under Construction....
							</div>
						</div>
					<?php
				}
															
?>	
							</div>
						</div>
							<div class="col-lg-4 col-md-4 col-sm-6 col-xs-12">
							<div class="facebook-social">
								<a href="#">
									<?php
	$stmt = $DB_con->prepare('select UserPic from image where HeadingId = 29 ');
	$stmt->execute();
		if($stmt->rowCount() > 0)
			{
				while($row=$stmt->fetch(PDO::FETCH_ASSOC))
					{
						extract($row);
						?>
			<img src="images/<?php echo $row['UserPic']; ?>" style="width:80%; height:90%" />
				<?php
						}
					}
		else
				{
					?>
						<div class="col-xs-12">
							<div class="alert alert-warning">
							<span class="glyphicon glyphicon-info-sign"></span> &nbsp; Under Construction....
						</div>
						</div>
				<?php
				}
					?>
								</a><?php				
$stmt = $DB_con->prepare('SELECT ContentDesc,HeadingTitle FROM description WHERE HeadingId =29 ');
		$stmt->execute();
	if($stmt->rowCount() > 0)
		{
			while($row=$stmt->fetch(PDO::FETCH_ASSOC))
				{
					extract($row);
					?>
																
					<p class="page-header"><?php echo $ContentDesc." "; ?></p>
<?php
				}
					}
				else
					{
						?>
					<div class="col-xs-12">
					<div class="alert alert-warning">
						<span class="glyphicon glyphicon-info-sign"></span> &nbsp; Under Construction....
							</div>
						</div>
					<?php
				}
															
?>	
							</div>
						</div>

					</div>
				</div>
			</section>	
			

            <!-- Statistics Section start -->
            <section class="statistics statistics-01 text-center color-white parallux-bg" id="archive" >
                <div class="section-relative section-space"   style="background-color:">
                    <div class="overlay overlay-four"></div>
                    <div class="overlay-content"   style="background-color:">
                        <div class="container">
							<div class="row">
								<div class="section-head only-title">
									<h2 class="section-title title-1 color-white">EDUCATION</h2>
								</div>	
								<p style="text-align:center">Under Construction</p>

							</div>
                        </div>
                    </div>
                </div>
            </section>
            <!-- Statistics Section end -->


            <!-- Screenshot Section start -->
            <section id="gallery" class="scroll-section section-space screenshot">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-12 text-center">
                            <div class="section-head">
                                <h2 class="section-title title-1">
										<?php				
$stmt = $DB_con->prepare('SELECT HeadingDesc FROM heading WHERE HeadingId =37 ');
$stmt->execute();
if($stmt->rowCount() > 0)
{
	while($row=$stmt->fetch(PDO::FETCH_ASSOC))
		{
			extract($row);
			?>
			<h3 class="page-header"><?php echo $HeadingDesc." "; ?></h3>
				<?php
		}
}
else
{
?>
<div class="col-xs-12">
<div class="alert alert-warning">
<span class="glyphicon glyphicon-info-sign"></span> &nbsp; Under Construction....
</div>
</div>
<?php
}
?>
								</h2>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="screenshoot-wrapper">
                    <div class="container-width">
                        <div class="container">
                            <div class="screenshoot-area">
                                <div id="screenshoot_slider" class="screenshoot-slider">
                                    <div class="single-screenshoot">
									<?php
	$stmt = $DB_con->prepare('select UserPic from image where HeadingId = 39');
	$stmt->execute();
		if($stmt->rowCount() > 0)
			{
				while($row=$stmt->fetch(PDO::FETCH_ASSOC))
					{
						extract($row);
						?>
			<img src="images/<?php echo $row['UserPic']; ?>" style="width:80%; height:90%" />
				<?php
						}
					}
		else
				{
					?>
						<div class="col-xs-12">
							<div class="alert alert-warning">
							<span class="glyphicon glyphicon-info-sign"></span> &nbsp; Under Construction....
						</div>
						</div>
				<?php
				}
					?>
									</div>
                                      <div class="single-screenshoot">
									<?php
	$stmt = $DB_con->prepare('select UserPic from image where HeadingId = 40 ');
	$stmt->execute();
		if($stmt->rowCount() > 0)
			{
				while($row=$stmt->fetch(PDO::FETCH_ASSOC))
					{
						extract($row);
						?>
			<img src="images/<?php echo $row['UserPic']; ?>" style="width:80%; height:100%" />
				<?php
						}
					}
		else
				{
					?>
						<div class="col-xs-12">
							<div class="alert alert-warning">
							<span class="glyphicon glyphicon-info-sign"></span> &nbsp; Under Construction....
						</div>
						</div>
				<?php
				}
					?>
									</div>
                                     <div class="single-screenshoot">
									<?php
	$stmt = $DB_con->prepare('select UserPic from image where HeadingId = 38 ');
	$stmt->execute();
		if($stmt->rowCount() > 0)
			{
				while($row=$stmt->fetch(PDO::FETCH_ASSOC))
					{
						extract($row);
						?>
			<img src="images/<?php echo $row['UserPic']; ?>" style="width:80%; height:90%" />
				<?php
						}
					}
		else
				{
					?>
						<div class="col-xs-12">
							<div class="alert alert-warning">
							<span class="glyphicon glyphicon-info-sign"></span> &nbsp; Under Construction....
						</div>
						</div>
				<?php
				}
					?>
									</div>
                                    <div class="single-screenshoot"><img data-original="img/oQ.jpg" class="lazy" alt="screenshoot" width="80%" height="90%"></div>
                                </div>
                            </div>
                        </div>
                       
                    </div>
                </div>
            </section>

                 <section id="book" class="scroll-section section-space screenshot">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-12 text-center">
                            <div class="section-head">
                                <h2 class="section-title title-1">
								<a href="#"><?php				
$stmt = $DB_con->prepare('SELECT HeadingDesc FROM heading WHERE HeadingId =41 ');
$stmt->execute();
if($stmt->rowCount() > 0)
{
	while($row=$stmt->fetch(PDO::FETCH_ASSOC))
		{
			extract($row);
			?>
			<h3 class="page-header"><?php echo $HeadingDesc." "; ?></h3>
				<?php
		}
}
else
{
?>
<div class="col-xs-12">
<div class="alert alert-warning">
<span class="glyphicon glyphicon-info-sign"></span> &nbsp; Under Construction....
</div>
</div>
<?php
}
?></a>
								</h2>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="screenshoot-wrapper">
                    <div class="container-width">
                        <div class="container">
                            <div class="screenshoot-area">
                                <div id="screenshoot_slider" class="screenshoot-slider">
								
                                    <div class="single-screenshoot">
									<a href="#">
									<?php
	$stmt = $DB_con->prepare('select UserPic from image where HeadingId = 41 ');
	$stmt->execute();
		if($stmt->rowCount() > 0)
			{
				while($row=$stmt->fetch(PDO::FETCH_ASSOC))
					{
						extract($row);
						?>
			<img src="images/<?php echo $row['UserPic']; ?>" style="width:50%; height:40%; margin-left:300px" />
				<?php
						}
					}
		else
				{
					?>
						<div class="col-xs-12">
							<div class="alert alert-warning">
							<span class="glyphicon glyphicon-info-sign"></span> &nbsp; Under Construction....
						</div>
						</div>
				<?php
				}
					?>
								</a>
									</div>

                                </div>
                            </div>
                        </div>
                       
                    </div>
                </div>
            </section>
            <!-- Download Section end -->
            <!-- Blog Section start -->
           
			
     
            <section id="contact" class="contact scroll-section">
                <div class="container">
                    <a href="#" data-section="#contact" class="btn contact-location-toggle-btn wow bounce" data-wow-duration="1.5s"><i class="ion-paper-airplane"></i></a>
                    <div class="contact-content-wrapper">
                        <div class="row">
                            <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6 col-xxs-12 hidden-xxs">
                                <div class="contact-info">
                                    <h3 class="contact-title">Address</h3>
                                    <ul class="contact-info-lists">
                                        <li><a href="#"><span class="btn"><i class="ion-ios-location"></i></span>Contact Us Coming Soon....</a></li>
                     
                                    </ul>
                                    <h3 class="contact-title">Reach Out</h3>
                                    <ul class="contact-info-lists">
									     <li><a href="#"><span class="btn"><i class="ion-ios-location"></i></span>Contact Us Coming Soon....</a></li>
                                    </ul>
                                </div>
                            </div>

                            <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6 col-xxs-12 visible-xxs">
                                <div class="contact-info">
                                    <ul class="contact-info-lists">
                                     			     <li><a href="#"><span class="btn"><i class="ion-ios-location"></i></span>Contact Us Coming Soon....</a></li>
                                    </ul>
                                    <ul class="contact-info-lists">
                                      			     <li><a href="#"><span class="btn"><i class="ion-ios-location"></i></span>Contact Us Coming Soon....</a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <!-- Contact Area end -->
        </main>
        <!-- Main section end -->



        <!-- Footer area start -->
        <footer class="main-footer">
            <div class="top">
                <div class="container">

                </div>
            </div>
            <div class="bottom">
                <div class="container">
                    <p>&copy; Under Construction</p>
                </div>
            </div>
        </footer>
        <!-- Footer area end -->
	<!--Model-->		
<!-- Modal Structure -->
  <div id="modal1" class="modal" data-backdrop="static" data-keyboard="false">
    <div class="modal-content">
      <h5>Get an Appoinment</h5>
	  <br />
	  <a href="#" class="right-close modal-action modal-close right"><i class="ion-close-round"></i></a>
      <form action="#">
			<div class="input-field col-sm-offset-1 col-sm-5">
				  <i class="ion-person prefix"></i>
				  <input id="icon_prefix3" type="text" class="validate">
				  <label for="icon_prefix3" class="">Name</label>
			</div>
			<div class="input-field col-sm-5">
				  <i class="ion-calendar prefix"></i>
				   <input id="dates3" type="date" class="datepicker">
				  
			</div>
			<div class="input-field col-sm-offset-1 col-sm-5">
				  <i class="ion-android-call prefix"></i>
				  <input id="icon_telephone" type="tel" class="validate">
				  <label for="icon_telephone" class="">Mobile</label>
			</div>
			<div class="input-field col-sm-5">
				  <i class="ion-android-mail prefix"></i>
				  <input id="email3" type="email">
				  <label for="email" class="">Email</label>
			</div>
			<div class="input-field col-sm-offset-1 col-sm-10">
				  <i class="ion-ios-chatboxes prefix"></i>
				  <textarea id="message3" class="materialize-textarea"></textarea>
				  <label for="message" class="">Address</label>
            </div>
			<div class="input-field col-sm-offset-1 col-sm-10">
				  <i class="ion-ios-redo prefix"></i>
				  <textarea id="reference" class="materialize-textarea"></textarea>
				  <label for="reference" class="">Reference</label>
            </div>
			<div class="input-field col-sm-offset-1 col-sm-10">
				  <i class="ion-android-contact prefix"></i>
				  <textarea id="agenda" class="materialize-textarea"></textarea>
				  <label for="agenda" class="">Agenda</label>
            </div>
	  
    </div>
    <div class="modal-footer">
		<div class="input-field col-sm-offset-1 col-sm-10">
			<button class="btn cyan waves-effect waves-light right" type="submit" name="action">Submit
			  <i class="ion-android-send right"></i>
			</button>
        </div>
    </div>
	</form>
  </div>
        <script>window.jQuery || document.write('<script type="text/javascript" src="js/vendor/jquery-1.10.2.min.js"><\/script>')</script>
<script type="text/javascript">
	$(document).ready(function(){
    // the "href" attribute of .modal-trigger must specify the modal ID that wants to be triggered
    $('.modal-trigger').leanModal();

        
  });
</script>
        <script type="text/javascript" src="js/jquery.lazyload.min.js"></script>
<script>
$(function() {
    $("img.lazy").lazyload({
			 event : "sporty"
		});
});
$(window).bind("load", function() {
    var timeout = setTimeout(function() {
        $("img.lazy").trigger("sporty")
    }, 1500);
});
</script>


        <script type="text/javascript" src="js/vendor/detectmobilebrowser.js"></script>
        <script type="text/javascript" src="js/vendor/jquery.easing.1.3.js"></script>
        <script type="text/javascript" src="js/vendor/bootstrap.min.js"></script>
        <script type="text/javascript" src="js/vendor/materialize.min.js"></script>
        <script type="text/javascript" src="js/camera.min.js"></script>
        <script type="text/javascript" src="owl-carousel/owl.carousel.min.js"></script>
        <script type="text/javascript" src="js/slick.min.js"></script>
        <script type="text/javascript" src="js/plugins.js"></script>

        <script type="text/javascript" src="js/common.js"></script>
        
		<script type="text/javascript" src="js/main.js"></script>
        <script type="text/javascript" src="js/zap.js"></script>
        <script type="text/javascript" src="js/settings.js"></script>
    </body>


</html>