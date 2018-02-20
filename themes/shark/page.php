<html>
<head>
	<?php $template_url = plugin_dir_url( __FILE__ ); ?>
	<?php $template_dir = plugin_dir_path( __FILE__ ); ?>
	<title><?php wp_title('') ?></title>
	<?php resumecv_head(); ?>
	<link rel="stylesheet" type="text/css" href="<?php echo RESUMECV_PLUGIN_URL; ?>assets/css/bootstrap.css">
	<link rel="stylesheet" type="text/css" href="<?php echo RESUMECV_PLUGIN_URL; ?>assets/css/font-awesome.css">
	<link rel="stylesheet" type="text/css" href="https://fonts.googleapis.com/css?family=Raleway:200,200i,300,300i,400,400i,500,500i,600,600i,700,700i,800,800i,900,900i">
	<link rel="stylesheet" type="text/css" href="<?php echo esc_url($template_url); ?>css/style.css">
</head>
<body> 
<div class="--l-rcv-box">
	<div class="--l-rcv-top-space"></div>
	<div class="container">
		<div class="col-md-3">
			<?php require_once ($template_dir . '/parts/profile.php'); ?>
			<?php require_once ($template_dir . '/parts/contact.php'); ?>
			<?php require_once ($template_dir . '/parts/skillbar.php'); ?>
			<?php require_once ($template_dir . '/parts/award.php'); ?>
			<?php require_once ($template_dir . '/parts/reference.php'); ?>
		</div>
		<div class="col-md-9">
			<?php require_once ($template_dir . '/parts/profile-right.php'); ?>
			<?php require_once ($template_dir . '/parts/qualification.php'); ?>
			<?php require_once ($template_dir . '/parts/education.php'); ?>
			<?php require_once ($template_dir . '/parts/experience.php'); ?>
			<?php require_once ($template_dir . '/parts/hobby.php'); ?>
		</div>
	</div>
</div>

<div class="container">
	<div class="row">
		<div class="col-md-12">
			<div class="text-center">
				<p class="rcv-copyright"><?php printf(esc_html__('Create in %1$s | Resume CV Template by %2$s', 'cvresume'), date("Y"), '<a href="' . esc_url('http://wpamanuke.com') . '" rel="nofollow">wpamanuke</a>'); ?></p>
			</div>
		</div>
	</div>
</div>

	
	<?php resumecv_footer(); ?>
</body>
</html>