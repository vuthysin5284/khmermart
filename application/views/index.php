<!DOCTYPE html>
<html>
<head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">

    <!-- Page title -->
    <!-- Title -->
    <title>Khmermart | <?php echo $page_title;?></title>

    <meta content="width=device-width, initial-scale=1" name="viewport"/>
    <meta charset="UTF-8">
    <meta name="description" content="Admin Dashboard Template" />
    <meta name="keywords" content="admin,dashboard" />
    <meta name="author" content="Steelcoders" />
    
    
	<?php include 'includes_top.php';?> 
	
</head><!--page-header-fixed-->
<body class="compact-menu page-horizontal-bar">
<div class="overlay"></div>

 
     <form class="search-form" action="#" method="GET">
        <div class="input-group">
            <input type="text" name="search" class="form-control search-input" placeholder="Search...">
            <span class="input-group-btn">
                <button class="btn btn-default close-search waves-effect waves-button waves-classic" type="button"><i class="fa fa-times"></i></button>
            </span>
        </div><!-- Input Group -->
    </form><!-- Search Form -->
    <main class="page-content content-wrap">
    

	<?php include 'header.php';?> 
    <?php include 'navigation.php';?>	
    
        <!-- Page Sidebar -->
        <div class="page-inner">  
			<div class="page-breadcrumb">
                <ol class="breadcrumb container">
                    <!--li><a href="< ?php echo base_url();?>">Home</a></li-->
                    <li class="active" style="text-transform: uppercase"><?php echo $page_title;?></li>
                </ol>

            </div> 
        	<div id="main-wrapper" class="container">
			<?php include $page_name.'.php';?>  
            </div>
            <?php include 'footer.php';?> 
             
         </div><!-- Page Inner -->
	</main> 
    <!--?php include 'chat.php';?-->
    <?php include 'modal.php';?>
    <?php include 'includes_bottom.php';?>
    
    
 
</body>
</html>
 