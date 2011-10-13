<!doctype html>
<html>
<head>
	<meta charset="<?php echo Configure::read('App.encoding') ?>" />
	<title><?php echo $title_for_layout ?></title>
	
	<?php echo $this->Html->css(array('http://twitter.github.com/bootstrap/1.3.0/bootstrap.min.css', 'admin/style.css')) . PHP_EOL ?>
		
	<!--[if lt IE 9]><?php echo $this->Html->script('http://html5shim.googlecode.com/svn/trunk/html5.js') ?><![endif]-->
</head>
<body>
	
	<?php echo $this->element('admin/topbar') ?>
	
	<div class="container">
		<div class="content">
			<div class="page-header">
				<h1><?php echo $title_for_layout ?> <?php if (isset($subtitle_for_layout) && !empty($subtitle_for_layout)) echo $this->Html->tag('small', $subtitle_for_layout) ?></h1>
			</div>
			
			<?php echo $content_for_layout ?>
		</div>
	</div>
	
	<?php echo $this->element('sql_dump') ?>
	
	<?php echo $this->Html->script(array('https://ajax.googleapis.com/ajax/libs/jquery/1.6/jquery.min.js', 'http://twitter.github.com/bootstrap/1.3.0/bootstrap-dropdown.js')) ?>

</body>
</html>