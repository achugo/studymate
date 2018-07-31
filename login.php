
<?php

session_start();

require 'database.php';
if(isset($_POST['submit'])){
  $pass = $_POST['password'];
  $email = $_POST['email']; 
}

if(!empty($_POST['email']) && !empty($_POST['password'])){

	$records = $conn->prepare('SELECT id, email, first_name, pwd FROM users WHERE email = :email');
	$records->bindParam(':email', $email);
	$records->execute();
  $results = $records->fetch(PDO::FETCH_ASSOC);
 
  

	$message = '';
  $hashed_password = password_hash($pass, PASSWORD_DEFAULT);
	if(count($results) > 0 && password_verify($pass, $hashed_password)){

    $_SESSION['user_name'] = $results['first_name'];
		$_SESSION['user_id'] = $results['id'];
	  header("Location: /index.php");
	}else{
		$message = 'sorry, those credentials do not match';
	}


}

	

?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Studymate</title>
	<link rel="shortcut icon" type="image/png" href="img/favicon.png">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
  <link rel="stylesheet" href="style.css" type="text/css" />
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
	<script src="https://use.fontawesome.com/releases/v5.0.8/js/all.js"></script>

	<link href="style.css" rel="stylesheet">
</head>
<body>
<?php

include 'menu.php';

?>



<section class="banner-bottom-agile-w3ls">
	<div class="container" style="padding-left: 40px; padding-right: 40px;">
		<h3 class="tittle-w3ls text-center">Login</h3>
		<div class="row inner-sec-w3layouts-agileits black">
		
         <div class="container">
          <div class="contact_grid_right" style="padding-top: 0px;">
              <?php if (!empty($message))
              echo '<br>'. $message; 
               ?>
               <form action="login.php" method="POST">
                     <div class="row contact_left_grid">
                          <div class="col-md-12 ">
                                <div class="form-group">
                                  <label for="exampleFormControlInput1">Email</label>
                                  <input class="form-control" type="email" name="email" placeholder="" required="">
                                </div>
                                <div class="form-group">
                                  <label for="validationCustom03 my-2">Password</label>
                                  <input class="form-control" type="password" name="password" placeholder="" required="">
                                </div>
                               
                                <div class="col-md-4 con-left" style="padding-right: 16px;right: 16px;">
                                <input class="form-control" name="submit" type="submit" value="Submit">
                                </div>

                          </div>
                      
                     </div>
               </form>


			</div>
		</div>
	</section>



<!--- Footer -->
<footer>
<div class="container-fluid padding ">
<div class="row text-center copyright  "> 
     <div class="col-md-4 ">
     	<img src="img/logoo.png">
     	<br>
     	<p>081 1850 5335</p>
     	<p>contact@infomall.ng</p> 	
     </div>

     <div class="col-md-4 social padding">
		<a href="#"><i class="fab fa-facebook"></i></a>
		<a href="#"><i class="fab fa-twitter"></i></a>	
		<a href="#"><i class="fab fa-instagram"></i></a>
	</div>
   
    <div class="col-md-4">
     <p><a href="about.php" target="blank" > How it works</a></p>
    
      <p><a href="courses.php" target="blank">Subjects</a></p>
     </div>

     <div class="col-12">
        <hr class="light">
       <p>© 2018 Studymate . All Rights Reserved | Design by
       <a href="http://www.infomall.ng/" target="blank" > Infomall </a></p>
       </div> 

</div>
</div>
</footer>
  <script src="js/script.js"></script>
<script type="text/javascript">
	
$('.email').on("change keyup paste",
  function(){
    if($(this).val()){
      $('.icon-paper-plane').addClass("next");
    } else {
      $('.icon-paper-plane').removeClass("next");
    }
  }
);

$('.next-button').hover(
  function(){
    $(this).css('cursor', 'pointer');
  }
);

$('.next-button.email').click(
  function(){
    console.log("Something");
    $('.email-section').addClass("fold-up");
    $('.password-section').removeClass("folded");
  }
);

$('.password').on("change keyup paste",
  function(){
    if($(this).val()){
      $('.icon-lock').addClass("next");
    } else {
      $('.icon-lock').removeClass("next");
    }
  }
);

$('.next-button').hover(
  function(){
    $(this).css('cursor', 'pointer');
  }
);

$('.next-button.password').click(
  function(){
    console.log("Something");
    $('.password-section').addClass("fold-up");
    $('.repeat-password-section').removeClass("folded");
  }
);

$('.repeat-password').on("change keyup paste",
  function(){
    if($(this).val()){
      $('.icon-repeat-lock').addClass("next");
    } else {
      $('.icon-repeat-lock').removeClass("next");
    }
  }
);

$('.next-button.repeat-password').click(
  function(){
    console.log("Something");
    $('.repeat-password-section').addClass("fold-up");
    $('.success').css("marginTop", 0);
  }
);$('.email').on("change keyup paste",
  function(){
    if($(this).val()){
      $('.icon-paper-plane').addClass("next");
    } else {
      $('.icon-paper-plane').removeClass("next");
    }
  }
);

$('.next-button').hover(
  function(){
    $(this).css('cursor', 'pointer');
  }
);

$('.next-button.email').click(
  function(){
    console.log("Something");
    $('.email-section').addClass("fold-up");
    $('.password-section').removeClass("folded");
  }
);

$('.password').on("change keyup paste",
  function(){
    if($(this).val()){
      $('.icon-lock').addClass("next");
    } else {
      $('.icon-lock').removeClass("next");
    }
  }
);

$('.next-button').hover(
  function(){
    $(this).css('cursor', 'pointer');
  }
);

$('.next-button.password').click(
  function(){
    console.log("Something");
    $('.password-section').addClass("fold-up");
    $('.repeat-password-section').removeClass("folded");
  }
);

$('.repeat-password').on("change keyup paste",
  function(){
    if($(this).val()){
      $('.icon-repeat-lock').addClass("next");
    } else {
      $('.icon-repeat-lock').removeClass("next");
    }
  }
);

$('.next-button.repeat-password').click(
  function(){
    console.log("Something");
    $('.repeat-password-section').addClass("fold-up");
    $('.success').css("marginTop", 0);
  }
);	
</script>


</body>
</html> 













