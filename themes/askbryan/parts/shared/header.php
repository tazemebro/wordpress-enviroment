<header>
<nav class="navbar navbar-default navbar-fixed-top" role="navigation" style="margin-right: -15px;">
  <div class="container-fluid">
    <!-- Brand and toggle get grouped for better mobile display -->
    <div class="navbar-header">
      <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
      <a href="<?php echo home_url(); ?>"><img src="<?php echo get_stylesheet_directory_uri();?>/css/images/bryan-logo.png"/></a>
    </div>

	<div class="btn-group pull-right">
	  <button type="button" class="btn-danger btn btn-default dropdown-toggle menu-button" data-toggle="dropdown">
	    Menu <span class="caret"></span>
	  </button>
	  <ul class="dropdown-menu" role="menu">
	    <li><a href=".blog">Blog</a></li>
	    <li><a href="#">Customer Testimonials</a></li>
	    <li><a href="#">Meet Bryan</a></li>
	    <li class="divider"></li>
	    <li><a href="#">Contact Bryan</a></li>
	  </ul>
	</div>
  </div><!-- /.container-fluid -->
</nav>

<!--	<?php bloginfo( 'description' ); ?>
	<?php get_search_form(); ?>-->
</header>
