<!DOCTYPE html>
<html lang="en">
  <head>
	<title>
		<?php 
    $title_for_layout = "GOSGraf - Gestão de Ordens de Serviço e Gráficas";
    echo $title_for_layout; ?>
	</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">

	<?php
		echo $this->Html->meta('icon');

		echo $this->fetch('meta');
		echo $this->fetch('css');
		echo $this->fetch('script');
	?>

  	<!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" type="css/cake.generic.css" href="">
  	<link rel="stylesheet" href="css/signin.css">
    <link rel="stylesheet" href="css/stylelogin.css">
    <link rel="stylesheet" href="css/bootstrap.min.css">

  	<!-- Latest compiled and minified JavaScript -->
  	<!--<script src="js/jquery.min.js"></script>-->
    <script src="js/jquery-3.1.1.min.js"></script>
  	<script src="js/ie-emulation-modes-warning.js"></script>
    <script src="js/ie10-viewport-bug-workaround.js"></script>
    <script src="js/bootstrap.min.js"></script>

    <!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
      <script src="//cdnjs.cloudflare.com/ajax/libs/html5shiv/3.6.2/html5shiv.js"></script>
      <script src="//cdnjs.cloudflare.com/ajax/libs/respond.js/1.3.0/respond.min.js"></script>
    <![endif]-->

    <style type="text/css">
    	body{ padding: 70px 0px; }
    </style>

  </head>

  <body>

    <?php echo $this->Element('navigation'); ?>

    <div class="container">

			<?php echo $this->Session->flash(); ?>

			<?php echo $this->fetch('content'); ?>

    </div><!-- /.container -->

  </body>
</html>
