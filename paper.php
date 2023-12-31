
<?php
error_reporting(1);
 session_start();
	//All QUERIES REQUIRED ON LANDING PAGE
	include"connect.php";	

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
           <?php include"nav.php"?>
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
 $nameofthis = "Memo";
  	foreach($QP as $ournewss){
		
			$bids = $ournewss['id'];
			$btitles = $ournewss['subject'];
			$bsubtitles = $ournewss['grade'];
			
			$pp 		= $ournewss['paper'];
			$des		= $ournewss['name'];
			$btimes = $ournewss['timestamp'];
			//Get Year From Name String since crawler could not find year maybe
			$string = $des;
			preg_match("/\d{4}/", $string, $matches);
			$year = $matches[0]; // 2020
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
		  <iframe src='$pp#toolbar=0' width='720px' height='1000px'>
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
      echo"";
$autosuggests = $pdo->prepare("SELECT * FROM papers WHERE subject LIKE ? AND grade LIKE ? AND name LIKE ?  ORDER BY name LIMIT 1");
$nameofthis = "Memo";
$wordss = explode(" ", $name);
$wordsinsides = array();
foreach ($wordss as $words) {
    $autosuggests->execute(array('%'.$btitles.'%', '%'.$bsubtitles.'%', '%'.$year.'%'));
    while ($autos = $autosuggests->fetch(PDO::FETCH_ASSOC)) {
        $wordsinsides[] = $autos;
    }
}
 
  	foreach($wordsinsides as $wordsinsidess){
		
			$bidsss = $wordsinsides['id'];
			$btitlesss = $wordsinsides['subject'];
			$bsubtitlesss = $wordsinsides['grade'];
			$bsubtitlesss = $wordsinsides['grade'];
			$ppss = $wordsinsides['paper'];
			$desss = $wordsinsides['name'];
			$btimesss = $wordsinsides['timestamp'];
			$addviewss = "1";
			
			
			if($btitlesss){
				//UPDATE PAPER VIEWS
			
				echo"<h1 class='has-text-centered' style='
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
			


'>Similar Document</h1>
				    <div class='modal'>
  <div class='modal-background'></div>
  <div class='modal-content'>

  </div>
  <button class='modal-close is-large' aria-label='close'></button>
</div>
				    <div class='card is-centered'>
 
            <a href='paper.php?paper=$bidsss'> 
			
			<div class='card-content' style='color:black'>
			   <div class='buttons '>
 <a href='subject.php?subject=$btitlesss'> <button class='button is-dark is-fullwidth is-rounded'><i class='fa fa-school' aria-hidden=''true' ></i>   $btitlesss</button></a> 
 <a href='grade.php?grade=$bsubtitlesss'> <button class='button is-dark is-fullwidth is-rounded'><i class='fa fa-graduation-cap' aria-hidden=''true' ></i> $bsubtitlesss</button></a>
 <a href='year.php?year=$year&subject=$bititless'> <button class='button is-dark  is-fullwidth is-rounded'><i class='fa fa-calendar' aria-hidden=''true' ></i> 
 $year</button></a>
 <a href='term.php?term=$termss'> <button class='button is-dark  is-fullwidth is-rounded'>
 <i class='fa fa-time' aria-hidden=''true' ></i>
 $termss</button></a> 

</div>
         <div class='content'>
		 $desss
		  <iframe src='$ppss#toolbar=0' width='720px' height='1000px'>
    </iframe>

            </div>

          </div></a>
       <div class='buttons is-fullwidth'>
 <a href='$ppsss'> <button class='button is-rounded  is-link'>    <i class='fa fa-download' aria-hidden=''true' ></i> Download Paper</button></a>

 <a href='paper.php?paper=$bidsss'> <button class='button is-rounded is-success  is-link'>    <i class='fa fa-eye' aria-hidden=''true' ></i> View Paper</button></a>

</div>
			</div></br>";
			
			}
	}
       echo"<h1 class='has-text-centered' style='
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
			


'>More Similar Documents</h1>";

$autosuggest = $pdo->prepare("SELECT * FROM papers WHERE subject LIKE ? AND grade LIKE ? AND name LIKE ?  ORDER BY name LIMIT 5");

$words = explode(" ", $name);
$wordsinside = array();
foreach ($words as $word) {
    $autosuggest->execute(array('%'.$btitles.'%', '%'.$bsubtitles.'%', '%'.$year.'%'));
    while ($auto = $autosuggest->fetch(PDO::FETCH_ASSOC)) {
        $wordsinside[] = $auto;
    }
}
 
  	foreach($wordsinside as $wordsinsides){
		
			$bidss = $wordsinsides['id'];
			$btitless = $wordsinsides['subject'];
			$bsubtitless = $wordsinsides['grade'];
			$bsubtitless = $wordsinsides['grade'];
			$pps = $wordsinsides['paper'];
			$dess = $wordsinsides['name'];
			$btimess = $wordsinsides['timestamp'];
			$addviews = "1";
			
			
			if($btitless){
				//UPDATE PAPER VIEWS
			
				echo"
				    <div class='modal'>
  <div class='modal-background'></div>
  <div class='modal-content'>
    <!-- Any other Bulma elements you want -->
  </div>
  <button class='modal-close is-large' aria-label='close'></button>
</div>
				    <div class='card is-centered'>
 
            <a href='paper.php?paper=$bidss'> 
			
			<div class='card-content' style='color:black'>
			   <div class='buttons '>
 <a href='subject.php?subject=$btitless'> <button class='button is-dark is-fullwidth is-rounded'><i class='fa fa-school' aria-hidden=''true' ></i>   $btitles</button></a> 
 <a href='grade.php?grade=$bsubtitless'> <button class='button is-dark is-fullwidth is-rounded'><i class='fa fa-graduation-cap' aria-hidden=''true' ></i> $bsubtitless</button></a>
 <a href='year.php?year=$years&subject=$bititless'> <button class='button is-dark  is-fullwidth is-rounded'><i class='fa fa-calendar' aria-hidden=''true' ></i> 
 $years</button></a>
 <a href='term.php?term=$terms'> <button class='button is-dark  is-fullwidth is-rounded'>
 <i class='fa fa-time' aria-hidden=''true' ></i>
 $terms</button></a> 

</div>
         <div class='content'>
		 $dess
            </div>

          </div></a>
       <div class='buttons is-fullwidth'>
 <a href='$pps'> <button class='button is-rounded  is-link'>    <i class='fa fa-download' aria-hidden=''true' ></i> Download Paper</button></a>

 <a href='paper.php?paper=$bidss'> <button class='button is-rounded is-success  is-link'>    <i class='fa fa-eye' aria-hidden=''true' ></i> View Paper</button></a>

</div>
</div></br>
";
			}
	}
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


