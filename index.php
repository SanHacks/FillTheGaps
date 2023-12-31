<?php
error_reporting(0);
 session_start();
	//All QUERIES REQUIRED ON LANDING PAGE
	include"connect.php";	
	$service = $pdo->prepare("SELECT * FROM subjects  ORDER BY timestamp ASC");
	$service->execute();
	$thesubjects = $service->fetchAll();
?>

<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
	<meta name="description" content="Looking for a way to reach your highest potential? Look no further than FillTheGaps. Our search engine is designed specifically for high school students looking for past exams papers. With our easy-to-use interface, you'll be able to find the papers you need in no time. So why wait? Start your search today! ">
    <title>FillTheGaps </title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bulma/0.7.1/css/bulma.min.css">
    <script defer src="https://use.fontawesome.com/releases/v5.0.0/js/all.js"></script>
	 <link rel="stylesheet" href="fa/css/font-awesome.min.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bulma/0.7.4/css/bulma.min.css">
		<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bulma-carousel@4.0.3/dist/css/bulma-carousel.min.css">
		<link rel="apple-touch-icon" href="fillthegap/logos.png">
		<link rel="icon" href="fillthegap/logos.png">
	

<link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css'>
<link rel="stylesheet" href="ext.css">
    <script src="https://kit.fontawesome.com/95a02bd20d.js"></script>
	  <script src="https://kit.fontawesome.com/95a02bd20d.js"></script>
	<script async src="https://pagead2.googlesyndication.com/pagead/js/adsbygoogle.js?client=ca-pub-7644821119757662"
     crossorigin="anonymous"></script>
<script>
var myVideo = document.getElementById("myVideo");

function playPause() { 
  if (myVideo.paused) 
    myVideo.play(); 
  else 
    myVideo.pause(); 
} 

function makeBig() { 
    myVideo.width = 560; 
} 

function makeNormal() { 
    myVideo.width = 320; 
} 

function makeSmall() { 
    myVideo.width = 240; 
} 

function makeTiny() { 
    myVideo.width = 160; 
} 
</script>

</head>

<body  style="background-image:url('background/edu.jpg');
background-repeat:no-repeat;
background-size: cover;
background-position: center;
background-color: #31cb68;
"

 class="has-navbar-fixed-top">
    <section class="hero is-info is-large" style="background-image:url('background/edu.jpg');
background-repeat:no-repeat;
background-size: cover;
background-position: center;
background-color: #31cb68;
">
        <div class="hero-head">
      
<?php include"nav.php"?>
        <div class="hero-body">
            <div class="container has-text-centered" >
			<?php
			 session_start();
			 $b =  $_COOKIE["visited"];
if (!isset($_COOKIE["visited"])) {
	session_start();
    setcookie("visited", 1, time()+3600);
	$_SESSION['visited'] ="visited";
	echo"
                    <h1 class='has-text-centered' style='
				font-weight: bold;
				color:#11392e;
				background: linear-gradient(90deg, rgb(56,209,74, 0.7), rgb(56,209,74,1),rgb(56,209,74, 1),rgb(33,191,163, 1));
				font-size: 1em;
				border-radius: 9999px;
				padding-left: calc(1em + 0.25em);
				padding-right: calc(1em + 0.25em);
				-webkit-box-shadow: -7px 11px 25px -9px rgba(10,200,60,1);
				-moz-box-shadow: -7px 11px 25px -9px rgba(10,200,60,1);
				box-shadow: -7px 11px 25px -9px rgba(10,200,60,1);
			


' >What is FillTheGaps?</h1>
<video poster='fillthegap/FillTheGapsS.png'	style='
  border: 2px solid green;
  background: linear-gradient(90deg, rgb(0,0,0, 0.2), rgb(0,0,0,0.2),rgb(0,0,0, 0.2),rgb(0,0,0, 0.2));
				color: #FFF;
				border-radius: 7px;
				padding-left: calc(1em + 0.25em);
				padding-right: calc(1em + 0.25em);
				margin-bottom: 10px;
				-webkit-box-shadow: -7px 11px 25px -9px rgba(200,0,0,1);
				-moz-box-shadow: -7px 11px 25px -9px rgba(200,0,0,1);
				box-shadow: -7px 11px 25px -9px rgba(200,0,0,1);
				
				backdrop-filter: blur(5.4px)
-webkit-backdrop-filter: blur(5.4px); 'id='myVideo' autoplay>

  <source src='promo/11.mp4'  type='video/mp4' >
</video>";
} else {
    echo "           <h1 class='has-text-centered' style='
				font-weight: bold;
				color:#11392e;
				background: linear-gradient(90deg, rgb(56,209,74, 0.7), rgb(56,209,74,1),rgb(56,209,74, 1),rgb(33,191,163, 1));
				font-size: 1em;
				border-radius: 9999px;
				padding-left: calc(1em + 0.25em);
				padding-right: calc(1em + 0.25em);
				-webkit-box-shadow: -7px 11px 25px -9px rgba(10,200,60,1);
				-moz-box-shadow: -7px 11px 25px -9px rgba(10,200,60,1);
				box-shadow: -7px 11px 25px -9px rgba(10,200,60,1);
			


' >Welcome Back</h1>
		      <img  	style='
	background-image:url('slider/');
	 background-size: cover;
		background-repeat: no-repeat;
	text-align: center;
				font-size: 2em;
				background: linear-gradient(90deg, rgb(0,0,0, 0.2), rgb(0,0,0,0.2),rgb(0,0,0, 0.2),rgb(0,0,0, 0.2));
				color: #FFF;
				border-radius: 7px;
				padding-left: calc(1em + 0.25em);
				padding-right: calc(1em + 0.25em);
				margin-bottom: 10px;
				-webkit-box-shadow: -7px 11px 25px -9px rgba(200,0,0,1);
				-moz-box-shadow: -7px 11px 25px -9px rgba(200,0,0,1);
				box-shadow: -7px 11px 25px -9px rgba(200,0,0,1);
				
				backdrop-filter: blur(5.4px)
-webkit-backdrop-filter: blur(5.4px);'  src='fillthegap/FillTheGapsS.png' alt='FillTheGap.xyz'>
";
	session_start();
    setcookie("visited", $_COOKIE["visited"]+1, time()+3600);
} ?>



	
                <h1 class="title" style="
				font-weight: bold;
				color:#11392e;
		
			


">
                    FillTheGaps
                </h1>
                <h2 class="subtitle"  style="
				font-weight: bold;
				color:#11392e;
		
			


"
				
>
                    Helping You Reach Your Full Potential
                </h2>
				<?php include"searchbar.php"; ?>
            </div>
        </div>

        <div class="hero-foot " >
            <nav class="tabs is-boxed is-fullwidth is-fixed-bottom">
                <div class="container">
                    <ul>
        
                        <li style="
				font-weight: bold;
				color:#11392e;
				background: linear-gradient(90deg, rgb(56,209,74, 0.7), rgb(56,209,74,1),rgb(56,209,74, 1),rgb(33,191,163, 1));
				font-size: 1em;
				border-radius: 9999px;
				padding-left: calc(1em + 0.25em);
				padding-right: calc(1em + 0.25em);
				-webkit-box-shadow: -7px 11px 25px -9px rgba(10,200,60,1);
				-moz-box-shadow: -7px 11px 25px -9px rgba(10,200,60,1);
				box-shadow: -7px 11px 25px -9px rgba(10,200,60,1);
			


">
                            <a href="subcontent.php">Lessons</a>
                        </li>
                        <li style="
				font-weight: bold;
				color:#11392e;
				background: linear-gradient(90deg, rgb(56,209,74, 0.7), rgb(56,209,74,1),rgb(56,209,74, 1),rgb(33,191,163, 1));
				font-size: 1em;
				border-radius: 9999px;
				padding-left: calc(1em + 0.25em);
				padding-right: calc(1em + 0.25em);
				-webkit-box-shadow: -7px 11px 25px -9px rgba(10,200,60,1);
				-moz-box-shadow: -7px 11px 25px -9px rgba(10,200,60,1);
				box-shadow: -7px 11px 25px -9px rgba(10,200,60,1);
			


">
                            <a>QuizMe</a>
                        </li>
                        <li  style="
				font-weight: bold;
				color:#11392e;
				background: linear-gradient(90deg, rgb(56,209,74, 0.7), rgb(56,209,74,1),rgb(56,209,74, 1),rgb(33,191,163, 1));
				font-size: 1em;
				border-radius: 9999px;
				padding-left: calc(1em + 0.25em);
				padding-right: calc(1em + 0.25em);
				-webkit-box-shadow: -7px 11px 25px -9px rgba(10,200,60,1);
				-moz-box-shadow: -7px 11px 25px -9px rgba(10,200,60,1);
				box-shadow: -7px 11px 25px -9px rgba(10,200,60,1);
			


">
                            <a>Sage QnA</a>
                        </li>
                        <li style="
				font-weight: bold;
				color:#11392e;
				background: linear-gradient(90deg, rgb(56,209,74, 0.7), rgb(56,209,74,1),rgb(56,209,74, 1),rgb(33,191,163, 1));
				font-size: 1em;
				border-radius: 9999px;
				padding-left: calc(1em + 0.25em);
				padding-right: calc(1em + 0.25em);
				-webkit-box-shadow: -7px 11px 25px -9px rgba(10,200,60,1);
				-moz-box-shadow: -7px 11px 25px -9px rgba(10,200,60,1);
				box-shadow: -7px 11px 25px -9px rgba(10,200,60,1);
			


">
                            <a>Classes</a>
                        </li>
						<li style="
				font-weight: bold;
				color:#11392e;
				background: linear-gradient(90deg, rgb(56,209,74, 0.7), rgb(56,209,74,1),rgb(56,209,74, 1),rgb(33,191,163, 1));
				font-size: 1em;
				border-radius: 9999px;
				padding-left: calc(1em + 0.25em);
				padding-right: calc(1em + 0.25em);
				-webkit-box-shadow: -7px 11px 25px -9px rgba(10,200,60,1);
				-moz-box-shadow: -7px 11px 25px -9px rgba(10,200,60,1);
				box-shadow: -7px 11px 25px -9px rgba(10,200,60,1);
			


" >
                            <a>Turtorials</a>
                        </li>
                    </ul>
                </div>
            </nav>
        </div>
    </section>

    <section class="section">
        <div class="container">
            <div class="columns">
                <div class="column is-6 is-offset-3" style='
				color:white;
				font-weight: bold;
				background: linear-gradient(90deg, rgb(0,0,0, 0.7), rgb(0,0,0,0.7),rgb(0,0,0, 0.75),rgb(0,0,0, 0.7));
				border-radius: 0px;
				padding-left: calc(1em + 0.25em);
				padding-right: calc(1em + 0.25em);
				-webkit-box-shadow: -7px 11px 25px -9px rgba(0,255,0,1);
				-moz-box-shadow: -7px 11px 25px -9px rgba(0,255,0,1);
				box-shadow: -7px 11px 25px -9px rgba(0,255,0,1);
				
				backdrop-filter: blur(5.4px);
-webkit-backdrop-filter: blur(5.4px);'>
		
                    <h1 class="has-text-centered" style="
				font-weight: bold;
				color:#11392e;
				background: linear-gradient(90deg, rgb(56,209,74, 0.7), rgb(56,209,74,1),rgb(56,209,74, 1),rgb(33,191,163, 1));
				font-size: 1em;
				border-radius: 9999px;
				padding-left: calc(1em + 0.25em);
				padding-right: calc(1em + 0.25em);
				-webkit-box-shadow: -7px 11px 25px -9px rgba(10,200,60,1);
				-moz-box-shadow: -7px 11px 25px -9px rgba(10,200,60,1);
				box-shadow: -7px 11px 25px -9px rgba(10,200,60,1);
			


" >What is FillTheGaps?</h1>
                    <p >FillTheGaps is the perfect way for high school students in South Africa to access already scrapped question papers and answer quizzes.</br></br>
					This search engine also provides access to tutorials and virtual classes created by various verified teachers. </br></br>
					A powerful QnA engine for students, this Artificial Intelligence powered Question & Answer has the ability to answer all questions of all subject matter related to School.</br></br>
					Verified Teachers may also answer a specific question.</br></br>
					Periodical Grand Prizes for High Achievers are offered based on tests conducted on the platform with other students.</br></br>
					Verified Teachers may sell subscriptions to students a month.</p></br>
                </div>
            </div>
        </div>
    </section>
<!--
    <section class="section">
        <div class="container">
            <div class="columns">
                <div class="column is-6 is-offset-3">
                    <h1 class="has-text-centered">How FillTheGaps Works</h1>
                    <p style='
				
				background: linear-gradient(90deg, rgb(0,0,0, 0.7), rgb(0,0,0,0.7),rgb(0,0,0, 0.75),rgb(0,0,0, 0.7));
				width:99.99%;
				border-radius: 0px;
				padding-left: calc(1em + 0.25em);
				padding-right: calc(1em + 0.25em);
				margin-bottom: 10px;
				-webkit-box-shadow: -7px 11px 25px -9px rgba(0,255,0,1);
				-moz-box-shadow: -7px 11px 25px -9px rgba(0,255,0,1);
				box-shadow: -7px 11px 25px -9px rgba(0,255,0,1);
				
				backdrop-filter: blur(5.4px);
-webkit-backdrop-filter: blur(5.4px);'>FillTheGaps is the perfect way for high school students in South Africa to access already scrapped question papers and answer quizzes. This search engine also provides access to tutorials and virtual classes created by various verified teachers. A powerful QnA engine for students, this Artificial Intelligence powered Question & Answer has the ability to answer all questions of all subject matter related to School. Verified Teachers may also answer a specific question. Periodical Grand Prizes for High Achievers are offered based on tests conducted on the platform with other students. Verified Teachers may sell subscriptions to students a month.</p>
                </div>
            </div>
        </div>
    </section>
-->


    <section class="section">
        <div class="container">
            <div class="columns">
                <div class="column is-6 is-offset-3" style='
				color:white;
				font-weight: bold;
	
				background: linear-gradient(90deg, rgb(0,0,0, 0.7), rgb(0,0,0,0.7),rgb(0,0,0, 0.75),rgb(0,0,0, 0.7));
			
				border-radius: 0px;
				padding-left: calc(1em + 0.25em);
				padding-right: calc(1em + 0.25em);
	
				-webkit-box-shadow: -7px 11px 25px -9px rgba(0,255,0,1);
				-moz-box-shadow: -7px 11px 25px -9px rgba(0,255,0,1);
				box-shadow: -7px 11px 25px -9px rgba(0,255,0,1);
				
				backdrop-filter: blur(5.4px);
-webkit-backdrop-filter: blur(5.4px);'>
                    <h1 class="has-text-centered" style="
				font-weight: bold;
				color:#11392e;
				background: linear-gradient(90deg, rgb(56,209,74, 0.7), rgb(56,209,74,1),rgb(56,209,74, 1),rgb(33,191,163, 1));
				font-size: 1em;
				border-radius: 9999px;
				padding-left: calc(1em + 0.25em);
				padding-right: calc(1em + 0.25em);
				-webkit-box-shadow: -7px 11px 25px -9px rgba(10,200,60,1);
				-moz-box-shadow: -7px 11px 25px -9px rgba(10,200,60,1);
				box-shadow: -7px 11px 25px -9px rgba(10,200,60,1);
			


" >Why Use FillTheGaps?</h1>


                    <p >There are many reasons why students should join and use FillTheGaps. First, the search engine provides access to a wealth of already scrapped question papers and answer quizzes. This means that students can get the practice they need to improve their grades. </br></br>
					Second, the platform also provides access to tutorials and virtual classes created by various verified teachers. This means that students can get the help they need to understand difficult concepts.</br></br>
					Third, the QnA engine is powered by Artificial Intelligence, which means that it can answer all questions of all subject matter related to school.</br></br>
					Fourth, verified teachers may also answer specific questions.
					This means that students can get the answers they need from a trusted source. </br></br>
					Fifth, periodic grand prizes are offered to high achievers.</p></br>
                </div>
            </div>
			     <a href="privacy.php"><h1 class="has-text-centered" style="
				font-weight: bold;
				color:#11392e;
				background: linear-gradient(90deg, rgb(56,209,74, 0.7), rgb(56,209,74,1),rgb(56,209,74, 1),rgb(33,191,163, 1));
				font-size: 1em;
				border-radius: 9999px;
				padding-left: calc(1em + 0.25em);
				padding-right: calc(1em + 0.25em);
				-webkit-box-shadow: -7px 11px 25px -9px rgba(10,200,60,1);
				-moz-box-shadow: -7px 11px 25px -9px rgba(10,200,60,1);
				box-shadow: -7px 11px 25px -9px rgba(10,200,60,1);
			


" >Read our Terms & Privacy Policy</h1><a/>
        </div>
		
               
    </section>

    <section class="section">
    </section>
    <script type="text/javascript" src="lib/main.js"></script>
    <script type="text/javascript" src="_Javascript/grafintech.js"></script>
  </body>
</html>
