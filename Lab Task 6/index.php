<?php 
session_start();
include('header.php');
include_once("db_connect.php");
?>

<script type="text/javascript" src="script/ajax.js"></script>
<?php include('container.php');?>

<div class="container">
		
		
		<br>
		<br>
		<div class="collapse navbar-collapse" id="navbar1">
			<ul class="nav navbar-nav navbar-left">
				<?php if (isset($_SESSION['user_id'])) { ?>
				<li><p class="navbar-text"><?php echo $_SESSION['user_name']; ?></p></li>
				<li><a href="logout.php">Log Out</a></li>
				<?php } else { ?>
				<li><a href="login.php">Login</a></li>
				<li><a href="register.php">Sign Up</a></li>
				<?php } ?>
			</ul>
		</div>
		
		
		
		<div style="margin:50px 0px 0px 0px;">
			<a class="btn btn-default read-more" style="background:#3399ff;color:white" href="" title=""></a>			
		</div>	
</div>	
<?php include('footer.php');?> 