<?php 
	session_start();
	if (!empty($_SESSION['uname'])) {
    	header('Location: Dashboard.php');
      	// Immediately exit and send response to the client and do not go furthur in whatever script it is part of.
      	exit();
    }
?>
<!DOCTYPE html>
<html>
<head>
	<head>
		<link rel="stylesheet" type="text/css" href="theme.css">
		<script type="text/javascript" src="formValidation.js"></script>
	</head>
	<meta name="viewport" content="width=device-width, height=device-height, initial-scale=1">
	<title>1Tag</title>
	<link rel="shortcut icon" type="image/x-icon" href="favicon.ico" />
</head>
<body style="background-color: white;">
	<div class="container-fluid" style="background-image: url('full.jpg'); min-width: 101.2%;">

	<div>
		<header>
		   <div>
		   	   <button class="button button1" id="butn0">Register</button>
		   	   <button class="button button2" id="butn">Login</button>
		   </div>
		   <h1>1Tag</h1>
		</header>
	</div>
	  
	<nav>
	  <ul class="ls">
	    <li class="ls"><a href="#">Home</a></li>
	    <li class="ls"><a href="Tagboard.php?val=Tags">Tags</a></li>
	    <li class="ls"><a href="#" onclick="document.getElementById('search').focus();">Search</a></li>
	    	    <li class="ls"><a href="#">Others</a></li>
	    	  </ul>
	    	</nav>
	    )
	<article>
		<h2>What is 1Tag?</h2>
		<div class="div boxed">
			<p style="font-size: 20px; color: #ACE3C4; " style="font-family: sans-serif;" >1Tag is an only one hashtag discussion page where anyone with an account can post anything, make comments, upvote and share posts. They can also post images with their posts. There is a list given of the most common topics that u can use as a tag or browse piosts related to that tag. Users do not need to register if they only wish to browse posts by tag. Click any of the hashtags and get the most recent and most popular posts of that topic.</p>
		</div>
	</article>

	<p><br><br></p>
	<h2 style="margin-left: 50px;">Search Tags Here: </h2>

	<form>
	  <input type="text" id="search" name="search" placeholder="Search..">
	</form>

	<article>
		<h2>Tags:</h2>
		<div class="div boxed" style="height: 11em;">
			<ul class="tg">
				<li class="tg"><a href="tagboard.php?val=%23cats">#cats</a></li>
				<li class="tg"><a href="tagboard.php?val=%23dogs">#dogs</a></li>
				<li class="tg"><a href="tagboard.php?val=%23animals">#animals</a></li>
				<li class="tg"><a href="tagboard.php?val=%23friday_events">#friday_events</a></li>
				<li class="tg"><a href="tagboard.php?val=%23wednesday">#wednesday</a></li>
				<li class="tg"><a href="tagboard.php?val=%23sunday_morning">#sunday_morning</a></li>
				<li class="tg"><a href="tagboard.php?val=%23NewYearsEve">#NewYearsEve</a></li>
				<li class="tg"><a href="tagboard.php?val=%23ChristmasEve">#ChristmasEve</a></li>
				<li class="tg"><a href="tagboard.php?val=%23meme">#meme</a></li>
				<li class="tg"><a href="tagboard.php?val=%23memes2018">#memes2018</a></li>
				<li class="tg"><a href="tagboard.php?val=%23anime">#anime</a></li>
				<li class="tg"><a href="tagboard.php?val=%23otaku">#otaku</a></li>
				<li class="tg"><a href="tagboard.php?val=%23gingers">#gingers</a></li>
				<li class="tg"><a href="tagboard.php?val=%23sunday_morning">#sunday_morning</a></li>
				<li class="tg"><a href="tagboard.php?val=%23NewYear2018">#NewYear2018</a></li>
				<li class="tg"><a href="tagboard.php?val=%23EasterEgg">#EasterEgg</a></li>
				<li class="tg"><a href="tagboard.php?val=%23egg">#egg</a></li>
				<li class="tg"><a href="tagboard.php?val=%23programming">#programming</a></li>
				<li class="tg"><a href="tagboard.php?val=%23geeky_friday">#geeky_friday</a></li>
				<li class="tg"><a href="tagboard.php?val=%23Upcoming_movies">#Upcoming_movies</a></li>
				<li class="tg"><a href="tagboard.php?val=%23wednesday">#wednesday</a></li>
				<li class="tg"><a href="tagboard.php?val=%23sunday_morning">#sunday_morning</a></li>
				<li class="tg"><a href="tagboard.php?val=%23NewYearsEve">#NewYearsEve</a></li>
				<li class="tg"><a href="tagboard.php?val=%23ChristmasEve">#ChristmasEve</a></li>
				<li class="tg"><a href="tagboard.php?val=%23Marvel">#Marvel</a></li>
				<li class="tg"><a href="tagboard.php?val=%23thor">#thor</a></li>
				<li class="tg"><a href="tagboard.php?val=%23ragnarok">#ragnarok</a></li>
				<li class="tg"><a href="tagboard.php?val=%23silver">#silver</a></li>
				<li class="tg"><a href="tagboard.php?val=%23wednesday">#wednesday</a></li>
				<li class="tg"><a href="tagboard.php?val=%23sunday_morning">#sunday_morning</a></li>
				<li class="tg"><a href="tagboard.php?val=%23NewYearsEve">#NewYearsEve</a></li>
				<li class="tg"><a href="tagboard.php?val=%23ChristmasEve">#ChristmasEve</a></li>
			</ul>
		</div>
	</article>

	<footer>Copyright &copy; 1tag.com</footer>

	</div>

	<?php include('formmodal.php'); ?>

	<script src="https://code.jquery.com/jquery-3.3.1.min.js"></script>

	<script type="text/javascript">
		var modal = document.getElementById('myModal');
		var modalreg = document.getElementById('myReg');
		var btn = document.getElementById("butn");
		var btn0 = document.getElementById("butn0");
		var span = document.getElementsByClassName("close")[0];
		var span1 = document.getElementsByClassName("close")[1];

		btn.onclick = function() {
		    modal.style.display = "block";
		}

		btn0.onclick = function() {
		    modalreg.style.display = "block";
		}


		$('.message a').click(function(event){
			event.preventDefault();
			modal.style.display = "none";
			modalreg.style.display = "block";
		});

		span.onclick = function() {
		    modal.style.display = "none";
		}

		span1.onclick = function() {
		    modalreg.style.display = "none";
		}

		window.onclick = function(event) {
		    if (event.target.id == 'myModal') {
		        modal.style.display = "none";
		    }
		    if (event.target.id == 'myReg') {
		        modalreg.style.display = "none";
		    }
		}

		var check = function() {
		  if (document.getElementById('psw0').value ==
		    document.getElementById('pswcon').value) {
		    document.getElementById('message').style.color = 'green';
		    document.getElementById('message').innerHTML = '*matching';
		  } else {
		    document.getElementById('message').style.color = 'red';
		    document.getElementById('message').innerHTML = '*not matching';
		  }
		}

	</script>

</body>
</html>