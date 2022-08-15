
<?php
error_reporting(1);
 session_start();
	//All QUERIES REQUIRED ON LANDING PAGE
	include"connect.php";	
		

	
	// Services
	$service = $pdo->prepare("SELECT * FROM subjects  ORDER BY timestamp ASC");
	$service->execute();
	$thesubjects = $service->fetchAll();
	
	//GET USER tYPED IN  VARIABLE
		$theid = $_GET['subject'];
		
	if($theid){
		$var1 = $_GET['search'];
		$province = "National";
		$grade = $_GET['grade'];
		$subject = $_GET['subject'];
		$term = $_GET['term'];
		$year = $_GET['year'];
		
		/**
		if($subject || $grade || $year || $term || $province || $kind){
		//CHECK IF ALL INPUTS ARE FILLED
		$searchs = "SELECT * FROM papers WHERE province	= ? AND grade = ? AND subject = ? AND name LIKE ? OR name LIKE ? AND name LIKE ? ORDER BY timestamp DESC LIMIT 15";
		$params = array("$province","$grade","$subject", "%$term%","%$year%","%$kind%");
		}elseif($province || $grade || $subject || $term || $year ){
			
			$searchs = "SELECT * FROM papers WHERE province	= ? AND grade = ? AND subject = ? AND term = ? AND name LIKE ?  ORDER BY timestamp DESC LIMIT 15";
		$params = array("$province","$grade","$subject", "$term","%$year%");
		
		}elseif($province || $grade || $subject || $term  ){
			//IF USER LEFT OUT SOME
			$searchs = "SELECT * FROM papers WHERE province	= ? AND grade = ? AND subject = ? AND name LIKE ? ORDER BY timestamp DESC LIMIT 15";
		$params = array("$province","$grade","$subject", "%$term%");
		
		}elseif($province || $grade || $subject   ){
			//IF USER LEFT OUT SOME
			$searchs = "SELECT * FROM papers WHERE province	= ? AND grade = ? AND subject = ? ORDER BY timestamp DESC LIMIT 15";
		$params = array("$province","$grade","$subject");
		
		}elseif($subject || $grade ){
			//IF USER LEFT OUT SOME
			$searchs = "SELECT * FROM papers WHERE province	= ? AND grade = ?  ORDER BY timestamp DESC LIMIT 15";
		$params = array("$province","$grade");
		
		}else{
			//IF USER LEFT OUT SOME
			$searchs = "SELECT * FROM papers WHERE subject = ? AND grade = ? AND name LIKE ? ORDER BY timestamp DESC LIMIT 50";
		$params = array("$subject","$grade","%$year%");
		
		}
	***/
		
		
		if($theid){
			
		$searchs = "SELECT * FROM papers WHERE subject = ?  ORDER BY timestamp DESC LIMIT 50";
		$stmt = $pdo->prepare($searchs);
		$stmt->execute([$theid]);
		$QP = $stmt->fetchAll();
		}
		
	}
	
	


?>
<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
	<meta name="description" content="Looking for a way to reach your highest potential? Look no further than FillTheGaps. Our search engine is designed specifically for high school students looking for past exams papers. With our easy-to-use interface, you'll be able to find the papers you need in no time. So why wait? Start your search today! ">
    <title>FillTheGaps: <?php if($subject){
	echo"$subject $grade $term";
	}		?> </title>
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
        </div>

        <div class="hero-body">
            <div class="container has-text-centered" >
			      <img  	style="
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
-webkit-backdrop-filter: blur(5.4px);"  src="fillthegap/FillTheGapsS.png" alt="FillTheGap.xyz">
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
                            <a>News</a>
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
			 <h1 class="title"  style="
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
			


"><?php
  
  if($QP){
	  
	  echo"Showing results for '$theid'";
  }
  
  ?></h1>
                <div class="column is-6 is-offset-3" style='
	<?php include"content.php"?>
                </div>
            </div>
        </div>
    </section>


    <section class="section">
    </section>
    <script type="text/javascript" src="lib/main.js"></script>
    <script type="text/javascript" src="_Javascript/grafintech.js"></script>
  </body>
</html>
