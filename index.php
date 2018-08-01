<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Studymate</title>
	<link rel="shortcut icon" type="images/png" href="img/favicon.png">
	<link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/magnific-popup.js/1.1.0/magnific-popup.css">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
	<script src="https://use.fontawesome.com/releases/v5.0.8/js/all.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/magnific-popup.js/1.1.0/jquery.magnific-popup.js"></script>




	<link href="style.css" rel="stylesheet">
</head>
<?php

include 'menu.php';

?>



<!--- Image Slider -->
<div id="slides" class="carousel slide" data-ride="carousel">
<ul class="carousel-indicators">
	<li data-target="#slides" data-slide-to="0" class="active"></li>
	<li data-target="#slides" data-slide-to="1"></li>
	<li data-target="#slides" data-slide-to="2"></li>	
</ul> 
<div class="carousel-inner ">
	<div class="carousel-item active">
		<img src="img/students.png">
		<div class="carousel-caption">
			<h1 class="display-2 improve">Study<span class="yellow">MATE</span></h1>
			<h3> You are one step away from the university</h3>
			<?php if(isset($_SESSION['user_id'])): ?>
			<button type="button" class="btn btn-primary btn-md"><a href="courses.php">TAKE SUBJECT</a></button>
			<?php else: ?> 
			<?php endif; ?>
		</div>
	</div>
	<div class="carousel-item">
		<img src="img/GRADUATE.png">
		<div class="carousel-caption">
			<h1 class="display-2 improve">Study<span class="yellow">MATE</span></h1>
			<h3>Study. Pause. Play. Learn at your own pace</h3>
			<?php if(isset($_SESSION['user_id'])): ?>
			<button type="button" class="btn btn-primary btn-md"><a href="courses.php">TAKE SUBJECT</a></button> 
			<?php else: ?> 
			<?php endif; ?>
			
	    </div>
	</div>


	<div class="carousel-item">
		<img src="img/uni.png">
		<div class="carousel-caption">
			<h1 class="display-2 improve">Study<span class="yellow">MATE</span></h1>
			<h3>Your exam guide to higher learning in Nigeria</h3>
			<?php if(isset($_SESSION['user_id'])): ?>
			<button type="button" class="btn btn-primary btn-md"><a href="courses.php">TAKE SUBJECT</a></button>
			<?php else: ?> 
			<?php endif; ?>
			
	    </div>

	</div>
</div>	
</div>

<!--- Jumbotron -->


<section class="banner-bottom-agile-w3ls">
		<div class="container" style="padding-left: 40px;padding-right: 40px;">		
			<h3 class="tittle-w3ls text-center">How it works</h3>
			<div class="row inner-sec-w3layouts-agileits black">
				<div class="col-lg-6 about-img">
					<img src="img/study.png" class="img-fluid rounded" alt="">
				</div>
				<div class="col-lg-6 about-info text-left">
					<p>StudyMate is a rich, user-friendly education partner for students preparing for their entrance exams into 
					   institutions of higher learning in Nigeria. </p>
					<p class="sup-para mt-2">The project was designed to walk students through the test questions used by the Joint Admission and Matriculation Board in previous years, for the purpose of admitting students to the institutions of their choice.</p>
					<p class="sup-para mt-2">Our solution is designed to allow you practice before test modeling the CBT exam structure of the Board. With beautiful layout, structured design and smart model designed to suit</p>
					<div class="view my-4">
						<a href="about.html" class="btn btn-primary read-m">View More</a>
					</div>
					
				</div>
			</div>
		</div>
	</section>


<section class="banner-bottom-agile-w3ls blueish">
<div class="container" style="padding-left: 40px;padding-right: 40px;">	
        <h3 class="tittle-w3ls text-center">What Are You Interested In?</h3>
  
     <div class="row inner-sec-w3layouts-agileits">
        <div class="col-lg-6">
			<h4 class="sub-hd mb-4">Chemistry</h4>
					
				<p class="color-blue">StudyMate gives you the opportunity to know Chemistry as a scientific discipline involved with the combinations of atoms: their composition, structure, properties, behavior and the changes they undergo during a reaction with other compounds. You will get the breakdown of the Chemistry syllabus at your finger tips.</p>
		</div>
					
      
       <div class="col-lg-6">

			<h4 class="sub-hd mb-4">Geography</h4>
					
				<p class="color-blue">StudyMate gives you the opportunity to know the study of the physical features of the earth and its atmosphere, and of human activity as it affects and is affected by these, including the distribution of populations and resources and economic activities. You will get the breakdown of the Geography syllabus at your finger tips.</p>
		
        </div>

         <div class="col-lg-6">
						<h4 class="sub-hd mb-4">English</h4>
					<p class="color-blue">StudyMate gives you the opportunity to know the practice and theory of learning English and then applying it. About 20 percent of the world's population speaks English as a first or secondary language. You will get the breakdown of the English Language syllabus at your finger tips.</p>
		</div>

		<div class="col-lg-6">
 
	     	<h4 class="sub-hd mb-4">Biology</h4>
					
					<p class="color-blue">StudyMate gives you the opportunity to know the study of living organisms, divided into many specialized fields that cover their morphology, physiology, anatomy, behaviour, origin, and distribution. You will get the breakdown of the Biology syllabus at your finger tips.</p>
		</div>

      <div class="col-md-12 col-lg-12 col-sm-12">
      	<button class="btn btn-primary centerButtonHide" id="btn-read" onclick="showMore()">Read More</button>
      </div>
       
        <div class="col-lg-6 readMore">
			<h4 class="sub-hd mb-4">Maths</h4>
					
				<p class="color-blue">StudyMate gives you the opportunity to know the science of numbers and their operations, interrelations,structure, measurement, transformations, and generalizations Algebra, arithmetic, calculus, geometry, and trigonometry as branches of mathematics. You will get the breakdown of the Maths syllabus at your finger tips.</p>
		</div>
					
      
       <div class="col-lg-6 readMore">
					
						<h4 class="sub-hd mb-4">Commerce</h4>
					
						<p class="color-blue">StudyMate gives you the opportunity to know Commerce as a branch of business. It is concerned with the exchange of goods and services. It includes all those activities, which directly or indirectly facilitate that exchange. Commerce looks after the distribution aspect of the business. You will get the breakdown of the Commerce syllabus at your finger tips.</p>
	   </div>
					
        <div class="col-lg-6 readMore">
        
						<h4 class="sub-hd mb-4">CRS</h4>
					
						<p class="color-blue">StudyMate gives you the opportunity to know Christian religious education  as the process where by Christian learning takes place. It often involves "teaching which enables practicing Christians to adopt and deepen their Christian belief, values and dispositions to experience and act in a Christian way. You will get the breakdown of the CRS syllabus at your finger tips.</p>
		</div>
	
      
       <div class="col-lg-6 readMore">
        
						<h4 class="sub-hd mb-4">Accounts</h4>
					
						<p class="color-blue">StudyMate gives you the opportunity to know Accounts as a formal business arrangement providing for regular dealings or services (such as banking, advertising, or store credit) and involving the establishment and maintenance of an account a checking account. You will get the breakdown of the Account syllabus at your finger tips.</p>
		</div>
					
	

		
        <div class="col-lg-6 readMore">
        	
			
						<h4 class="sub-hd mb-4">Economics</h4>
					
						<p class="color-blue">StudyMate gives you the opportunity to know Economics as a social science concerned chiefly with description and analysis of the production, distribution, and consumption of goods and services. You will get the breakdown of the Economics syllabus at your finger tips.</p>
		</div>
					
	
      
       <div class="col-lg-6 readMore">
      
					
	
						<h4 class="sub-hd mb-4">IRS</h4>
					
						<p class="color-blue">StudyMate gives you the opportunity to know Islamic Religious Studies also known as "Kalam" as one of the "religious sciences" of Islam. In Arabic, the word means "discussion" and refers to the Islamic tradition of seeking theological principles through dialectic. You will get the breakdown of the IRS syllabus at your finger tips.</p>
	    </div>
					


	
        <div class="col-lg-6 readMore">
        

						<h4 class="sub-hd mb-4">Government</h4>
					
						<p class="color-blue">StudyMate gives you the opportunity to know Government as a group of people that governs a community or unit. It sets and administers public policy and exercises executive, political and sovereign power through customs, institutions, and laws within a state. You will get the breakdown of the Government syllabus at your finger tips.</p>
		</div>
					
	
       <div class="col-lg-6 readMore">
        	
						<h4 class="sub-hd mb-4">Physics</h4>
					
					<p class="color-blue">StudyMate gives you the opportunity to know Physics as the branch of science concerned with the nature and properties of matter and energy. The subject matter of physics includes mechanics, heat, light and other radiation, sound, electricity, magnetism, and the structure of atoms. You will get the breakdown of the Physics syllabus at your finger tips.</p>
		</div>
					




        <div class="col-lg-6 readMore">
        	
					<h4 class="sub-hd mb-4">Literature</h4>

					<p class="color-blue">StudyMate gives you the opportunity to know Literature as writings in which expression and form, in connection with ideas of permanent and universal interest, are characteristic or essential features, as poetry, novels, history, biography, and essays. You will get the breakdown of the Literture syllabus at your finger tips.</p>
		</div>
					
		
      
   </div> 	      

    
 </div>
</section>

<script type="text/javascript">
	function showMore() {
		// body...
		var btn = document.getElementById("btn-read");
		var divToShow = document.getElementsByClassName("readMore");
		var copyDiv = divToShow
		var i = 0;
		while(i < copyDiv.length)
		{
			
			copyDiv[i].className = "col-lg-6";
			console.log(copyDiv[i]);
			i++;
		} 
		btn.classList.add("readMore");
	}
</script>

<!--- latest courses -->
<!-- <section class="banner-bottom-agile-w3ls services black">
		<div class="container" style="padding-left: 40px; padding-right: 40px;">		
			<h3 class="tittle-w3ls cen text-center">Latest Subjects</h3>
			<div class="row inner-sec-w3layouts-agileits">
				<div class="col-lg-4 service-in text-center">
					<div class="card">
						s
						<div class="card-body">
							<h5 class="card-title">Chemistry 2003</h5>
							<img src="img/chemistry.png" class="img-fluid" >
							<div class="buttons">
                                
                                	<button class="btn btn-primary read-m down"><a class="popup-youtube " href="http://mtn.infomall.ng/Chemistry/chem2003/">Start</a><br></button>
                                    
                                
                            </div>
						</div>
					</div>
				</div>
				<div class="col-lg-4 service-in  text-center">
					<div class="card">
						
						<div class="card-body">
							<h5 class="card-title">Chemistry 2004</h5>
							<img src="img/chemistry.png" class="img-fluid" >
							<div class="buttons">
                                
                                	<button class="btn btn-primary read-m down"><a class="popup-youtube " href="http://mtn.infomall.ng/Chemistry/chem2004/">Start</a><br></button>
                                    
                                
                            </div>
						</div>
					</div>
				</div>

				<div class="col-lg-4 service-in  text-center">
					<div class="card">
						
						<div class="card-body">
							<h5 class="card-title">Chemistry 2006</h5>
							<img src="img/chemistry.png" class="img-fluid" >
							<div class="buttons">
                                
                                	<button class="btn btn-primary read-m down"><a class="popup-youtube " href="http://mtn.infomall.ng/Chemistry/chem2005/">Start</a><br></button>
                                    
                                
                            </div>
						</div>
					</div>
				</div>
				
			</div>
		</div>
	</section> -->


 
<!--- Cards -->


<!--- Two Column Section -->

<!--- Fixed background -->



  




<!--- Two Column Section -->





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
    
     	<p><a href="courses.php" target="blank"> Subjects</a></p>
       
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
	
	$(document).ready(function() {
	$('.popup-youtube, .popup-vimeo, .popup-gmaps').magnificPopup({
		disableOn: 700,
		type: 'iframe',
		mainClass: 'mfp-fade',
		removalDelay: 160,
		preloader: false,

		fixedContentPos: false
	});
});
</script>
</body>
</html> 













