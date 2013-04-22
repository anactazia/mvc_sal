<!doctype html>
<html>
<head>
	<meta charset="utf-8">
	<title>SAL</title>
	<link rel="stylesheet" href="<?php echo URL; ?>public/css/default.css" />

</head>
<body>

<?php 
		

Session::init();

$email = 'anna';

$hash = md5(strtolower(trim($email)));

$gravatar = "<img class='gravatar' src='http://www.gravatar.com/avatar/$hash.jpg?r=pg&amp;d=wavatar&amp;' />";



?>

<div id="header">

	<?php if (Session::get('loggedIn') == false):?>
		<a href="<?php echo URL; ?>index">Index</a>
		<a href="<?php echo URL; ?>guestbook">Gästbok</a>
		<a href="<?php echo URL; ?>help">Hjälp</a>
		<a href="http://www.student.bth.se/~anza13/phpmvc/me/kmom05/home.php">Me-Sidan</a>
		<div class="loginmenu">
		<a href="<?php echo URL; ?>user/usercreate">Skapa</a>
		<a href="<?php echo URL; ?>login">Login</a>
		</div>
	<?php endif; ?>	
	<?php if (Session::get('loggedIn') == true):?>
	        <a href="<?php echo URL; ?>index">Index</a>
		<a href="<?php echo URL; ?>guestbook">Gästbok</a>
		<a href="<?php echo URL; ?>help">Hjälp</a>
		<a href="http://www.student.bth.se/~anza13/phpmvc/me/kmom05/home.php">Me-Sidan</a>
		<div class="loginmenu">
		<?php echo $gravatar; ?>   
		
		<?php if (Session::get('role') == 'admin'):?>
		<a href="<?php echo URL; ?>user/useredit">Ändra</a>
		<a href="<?php echo URL; ?>user/admin">Admin</a>
		<?php endif; ?>
		
		<?php if (Session::get('role') !== 'admin'):?>
		<a href="<?php echo URL; ?>user/useredit">Ändra</a>
						
		<?php endif; ?>
		
		
		<a href="<?php echo URL; ?>dashboard/logout">Logout</a>	
		</div>
	<?php endif; ?>
</div>
	
<div id="content">
	
	
