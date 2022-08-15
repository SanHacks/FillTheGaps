
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
		$theid = $_GET['paper'];
		
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
		
		
		
			
		$searchs = "SELECT * FROM papers WHERE id = ?";
		$stmt = $pdo->prepare($searchs);
		$stmt->execute([$theid]);
		$QP = $stmt->fetchAll();
		
		
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
            <nav class="navbar is-black is-fixed-top" style='
				
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
-webkit-backdrop-filter: blur(5.4px);


'>
                <div class="container">
                       <div class="navbar-brand">
     <a class="navbar-item" href="index.php"><figure class="image "><img  class="is-rounded" src="fillthegap/logos.png" alt="FillTheGAP" ></figure></a>
  <a class="navbar-item" href="index.php" >
     <figure class="image ">
    <img  class="is-rounded" src="fillthegap/top.png" alt="FillTheGAP" >
</figure>
    </a>
    <div class="navbar-burger burger"   data-target="navMenubd-example">
      <span></span>
      <span></span>
      <span></span>
    </div>
  </div>
                    <div id="navbarMenuHeroA" class="navbar-menu">
                        <div class="navbar-end">
                       
                            <a class="navbar-item" style="
 background-color: #000000;
  border: 2px solid #ff0000;
  color: #ffff00;
  text-shadow: 0 0 5px #ff0000;
  font-family: 'Courier New', Courier, monospace;
				font-size: 1em;
				border-radius: 99px;
				padding-left: calc(1em + 0.25em);
				padding-right: calc(1em + 0.25em);
				-webkit-box-shadow: -7px 11px 25px -9px rgba(10,200,60,1);
				-moz-box-shadow: -7px 11px 25px -9px rgba(10,200,60,1);
				box-shadow: -7px 11px 25px -9px rgba(10,200,60,1);
			


">
                                BETA
                            </a>
                       
                            <span class="navbar-item">
                                <a class="button is-primary is-inverted" href="contact.php" style="
				font-weight: bold;
	  background-color: #00ffff;
  border: 2px solid #0ac84c;
				font-size: 1em;
				border-radius: 9999px;
				padding-left: calc(1em + 0.25em);
				padding-right: calc(1em + 0.25em);
				-webkit-box-shadow: -7px 11px 25px -9px rgba(10,200,60,1);
				-moz-box-shadow: -7px 11px 25px -9px rgba(10,200,60,1);
				box-shadow: -7px 11px 25px -9px rgba(10,200,60,1);
			


">
                                    <span class="icon">
                                        <i class="fas fa-paper-plane"></i>
                                    </span>
                                    <span>Contact Us</span>
                                </a>
                            </span>
                        </div>
                    </div>
                </div>
            </nav>
        </div>

        <div class="hero-body">
            <div class="container has-text-centered" >
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
	
                <div class="column is-6 is-offset-3">
			
	 <?php
  $message = "I would love to Share ";
	$end = " With You";
 
  	foreach($QP as $ournewss){
		
			$bids = $ournewss['id'];
			$btitles = $ournewss['subject'];
			$bsubtitles = $ournewss['grade'];
			
			$pp 		= $ournewss['paper'];
			$des		= $ournewss['name'];
			$btimes = $ournewss['timestamp'];
			
			
			if($btitles){
					//UPDATE PAPER VIEWS
				$update = $pdo->prepare("UPDATE posts
					 SET views = views + 1
					 WHERE id= ?");
				$update->execute([$bids]);
				echo"
							 <h1 class='title'  style='
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
			


'>$bids $ournewss</h1>
				    <div class='card is-centered'>
 
            <a href='paper.php?paper=$bids'> 
			
			<div class='card-content' style='color:black'>
			   <div class='buttons '>
 <a href='subject.php?subject=$btitles'> <button class='button is-dark is-fullwidth is-rounded'><i class='fa fa-school' aria-hidden=''true' ></i>   $btitles</button></a> 
 <a href='grade.php?grade=$bsubtitles'> <button class='button is-dark is-fullwidth is-rounded'><i class='fa fa-graduation-cap' aria-hidden=''true' ></i> $bsubtitles</button></a>
 <a href='year.php?year=$year&subject=$bititles'> <button class='button is-dark  is-fullwidth is-rounded'><i class='fa fa-calendar' aria-hidden=''true' ></i> 
 $year</button></a>

</div>
         <div class='content'>
		 $des
		  <iframe src='$pp#toolbar=0' width='720px' height='700px'>
    </iframe>

            </div>

          </div>
       <div class='buttons is-fullwidth'>
 <a href='$pp'> <button class='button is-rounded  is-link'>    <i class='fa fa-download' aria-hidden=''true' ></i> Download Paper</button></a>
   
<footer class='card-footer'>
              <a href='https://www.facebook.com/sharer/sharer.php?u=http://grafintech.com/post.php?post=$bids&quote=$message$btitles$end' target='_blank' class='card-footer-item'><i class='fa fa-facebook' aria-hidden=''true' ></i></a>
			
			<a href='whatsapp://send?text=$message $btitles $bsubtitles $end http://fillthegaps.xyz?paper.php?paper=$bids' target='_blank' class='card-footer-item'><i class='fa fa-whatsapp' aria-hidden=''true' ></i></a>
			
			
			 <a href='https://t.me/share/url?url=http://grafintech.com/post.php?post=$bids&text=$message$btitles$end' target='_blank' class='card-footer-item'><i class='fa fa-telegram' aria-hidden=''true' ></i></a>
          </footer>
		  
</div>
</div>

</br>
";
$nameofthis = "Memo";
$autosuggest = $db->prepare("SELECT * FROM papers WHERE subject LIKE ? AND grade LIKE ? AND category LIKE ?");

$words = explode(" ", $name);
$results = array();
foreach ($words as $word) {
    $autosuggest->execute(array('%'.$btitles.'%', '%'.$bsubtitles.'%', '%'.$nameofthis.'%'));
    while ($auto = $autosuggest->fetch(PDO::FETCH_ASSOC)) {
        $results[] = $auto;
    }
}

print_r($results);
			}
	}
	?>
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


