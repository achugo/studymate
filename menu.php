<?php

?>

<!-- Navigation --> 
<nav class="navbar navbar-expand-md navbar-light bg-light sticky-top">
<div class="container-fluid"> 
	<a class="navbar-brand" href="index.php"><img class="reduce" src="img/logoo.png"></a><br>
		<?php if(isset($_SESSION['user_id'])): ?>
				<span class="destiny"><?php echo' Hi, '.$_SESSION['user_name']; ?> </span>
			<?php else: ?> 

				<?php endif; ?>
	<button class="navbar-toggler" type="button" data-toggle="collapse"
	data-target="#navbarResponsive">
	<span class="navbar-toggler-icon standardize"></span>	
	</button>

	<div class="collapse navbar-collapse" id="navbarResponsive">
	
		<ul class="navbar-nav ml-auto">
			<li class="nav-item">
				<a class="nav-link disp"  href="index.php">Home</a>
			</li>
				
			<li class="nav-item">
				<a class="nav-link" href="about.php">About us</a>
			</li>

			<li class="nav-item">
				<a class="nav-link" href="courses.php">Subjects</a>
			</li>
		<?php if(isset($_SESSION['user_id'])): ?>


			
			<li class="nav-item">
					<a class="nav-link" href="logout.php">Log out</a>
			</li>

		<?php else: ?> 
			<li class="nav-item">
					<a class="nav-link" href="register.php">Registration</a>
			</li>
			
		
			<li class="nav-item">
				<a class="nav-link" href="login.php">Login</a>
			</li>
	   <?php endif; ?>
			
		</ul>
	</div>
</div>
	
</nav>

<script type="text/javascript">
// Add active class to the current button (highlight it)
$(document).ready(function(){
  $('ul li a').click(function(){
    $('li a').removeClass("disp");
    $(this).addClass("disp");
});
});
</script>

