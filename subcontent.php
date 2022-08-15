
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
		$grade = $_GET['grade'];
		$subject = $_GET['subject'];
		
		//Save the search record to database
		$thefullsearch = "$var1 $subject $grade $term $year $province ";
		
		$saves = "INSERT INTO searches (query,province, grade, subject , timestamp ) VALUES (?,?,?,?,?)";
		//Prepare Statements
		$spush= $pdo->prepare($saves);
		//Execution
		$spush->execute([$thefullsearch , $province, $grade, $subject, $tshifhinga]);

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
			$searchs = "SELECT * FROM papers WHERE subject = ? AND grade = ? AND name LIKE ? ORDER BY timestamp DESC LIMIT 150";
		$params = array("$subject","$grade","%$year%");
		
		}
	***/
		//THE QUESTION PAPERS SEARCH ENGINE
		

			
		$searchs = "SELECT * FROM youtube ORDER BY subject RAND() LIMIT 30";
		$params = array("$subject","$grade");
		$stmt = $pdo->prepare($searchs);
		$stmt->execute($params);
		$videos = $stmt->fetchAll();

	}
	
	


?>
<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
	<meta name="description" content="Looking for a way to reach your highest potential? Look no further than FillTheGaps. Our search engine is designed specifically for high school students looking for past exams papers. With our easy-to-use interface, you'll be able to find the papers you need in no time. So why wait? Start your search today! ">
    <title>FillTheGaps</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bulma/0.7.1/css/bulma.min.css">
    <script defer src="https://use.fontawesome.com/releases/v5.0.0/js/all.js"></script>
	 <link rel="stylesheet" href="fa/css/font-awesome.min.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bulma/0.7.4/css/bulma.min.css">
		<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bulma-carousel@4.0.3/dist/css/bulma-carousel.min.css">
		<link rel="apple-touch-icon" href="fillthegap/logos.png">
		<link rel="icon" href="fillthegap/logos.png">
	<link rel="stylesheet" type="text/css" media="screen" href="bot/main.css" />

<link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css'>
<link rel="stylesheet" href="ext.css">
    <script src="https://kit.fontawesome.com/95a02bd20d.js"></script>
	  <script src="https://kit.fontawesome.com/95a02bd20d.js"></script>
	<script async src="https://pagead2.googlesyndication.com/pagead/js/adsbygoogle.js?client=ca-pub-7644821119757662"
     crossorigin="anonymous"></script>
</head>

<body  style="
background-repeat:no-repeat;
background-size: cover;
background-position: center;
background-color: #31cb68;
"

 class="has-navbar-fixed-top">
    <section class="hero is-info is-large" style="
background-repeat:no-repeat;
background-size: cover;
background-position: center;
background-color: #31cb68;
">
        <div class="hero-head">
 <?php include"nav.php"; ?>
        </div>

 
		 <p class="control is-centered">
		 <form action='search.php' method='GET'><input  class="input is-success is-rounded" type="search"  " name="search" type="text" value="Search Subject
		 's Videos" placeholder="
		 
		     <?php
   if($_GET['search']){
	   $hol = $_GET['search'];
                    echo"$hol";
   }else{
	   
	echo" Search e.g. Geography Memo...
				  ";   
   }
					 ?>
		 ">
		 	          <nav class="tabs is-boxed is-fullwidth">
                <div class="container">
                    <ul>
					<li>
                        <div class="select is-rounded is-primary" >
   <select name='subject' style="
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
      <?php
   if($_GET['subject']){
	   $rec = $_GET['subject'];
                    echo" <option value='$rec'>$rec";
   }else{
	echo" <option>Subject
				  ";   
   }
					 ?>
                     
<?php 
//Fetch subjects stored in the database
	foreach($thesubjects as $thesub){
		$thess = $thesub['subject'];
		echo"<option name='subject'  value='$thess'>$thess</option>";
	}

?>
				  </option>
                </select>  
				</div>
                        </li>
                        <li>
                              <div class="select is-rounded is-primary" >
<select  name='grade' style="
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
				  		     <?php
   if($_GET['grade']){
	   $ggrad = $_GET['grade'];
                    echo" <option value='$ggrad'>$ggrad";
   }else{
	echo" <option value='12'><em>Grade</em>
				  ";   
   }
					 ?>
                  
				  <option value='12'>12</option>
				  <option value='11'>11</option>
				   <option value='10'>10</option>
				  </option>
				
                </select>
</div>
                        </li>
 
                        
                    </ul>
                </div>
            </nav>
				 		
		<button type="submit" class="button is-primary is-fullwidth" name="push" style="
					font-weight: bold;
				color:#11392e;
				background: linear-gradient(90deg, rgb(56,209,74, 0.7), rgb(56,209,74,1),rgb(56,209,74, 1),rgb(33,191,163, 1));
				font-size: 1.5em;
				border-radius: 9999px;
				padding-left: calc(1em + 0.25em);
				padding-right: calc(1em + 0.25em);
				-webkit-box-shadow: -7px 11px 25px -9px rgba(10,200,60,1);
				-moz-box-shadow: -7px 11px 25px -9px rgba(10,200,60,1);
				box-shadow: -7px 11px 25px -9px rgba(10,200,60,1);
			


">Search Videos</button>
		 
		 </form>
		 
  </p>
    </section>
	<br>
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
			


' > Videos' Sections</h1>
	<nav class="tabs is-boxed is-fullwidth is-fixed-bottom" style='
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
-webkit-backdrop-filter: blur(5.4px); '>

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
                            <a href='subsections.php?subject=Physical Sciences'>Physical Sciences</a>
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
                            <a href='subsections.php?subject=Life Sciences'>Life Sciences</a>
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
                            <a href='subsections.php?subject=geography'>Geography</a>
                        </li>
               
               
	
                    </ul>
                </div>
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
                            <a href='subsections.php?subject=Mathemathics'>Mathemathics</a>
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
                            <a href='subsections.php?subject=Accounting'>Accounting</a>
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
                            <a href='subsections.php?subject=mathlit'>M. Lit</a>
                        </li>
               
               
	
                    </ul>
                </div>
            </nav>
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
			


' >Trending Content</h1>
       <div 	style='
	   text-align:center;
	   color:white;
border-radius: 2px;
background: linear-gradient(90deg, rgb(0,0,0, 0.2), rgb(0,0,0,0.2),rgb(0,0,0, 0.2),rgb(0,0,0, 0.2));
  box-shadow: 0 1px 2px rgba(0, 0, 0, 0.1);
  margin: 20px auto;
	max-width: 768px;
  max-height:720px;
  padding: 2px;
				backdrop-filter: blur(5.4px)
-webkit-backdrop-filter: blur(5.4px);'>
<iframe style='
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
-webkit-backdrop-filter: blur(5.4px); 'id='myVideo' width="768" height="720" src="https://www.youtube.com/embed/UabDiuTtU0M" title="The Nervous System" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
<p >TITLE OF THE VIDEO HERE</p>
<p>Subject</p>
</div>
<?php
    foreach ( $videos as $video){

	$id = $video['id'];
	$title = $video['title'];
	$source = $video['source'];
	$subject = $video['subject'];
	$timestamp = $video['timestamp'];
echo"
	  <div 	style='
	   text-align:center;
	   color:white;
border-radius: 2px;
background: linear-gradient(90deg, rgb(0,0,0, 0.2), rgb(0,0,0,0.2),rgb(0,0,0, 0.2),rgb(0,0,0, 0.2));
  box-shadow: 0 1px 2px rgba(0, 0, 0, 0.1);
  margin: 20px auto;
	max-width: 768px;
  max-height:720px;
  padding: 2px;
				backdrop-filter: blur(5.4px)
-webkit-backdrop-filter: blur(5.4px);'>
<iframe style='
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
-webkit-backdrop-filter: blur(5.4px); 'id='myVideo' width='768' height='720' src='https://www.youtube.com/embed/$source title='$title' frameborder='0' allow='accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture' allowfullscreen></iframe>
<p >$title</p>
<p>$subject</p>
</div>";
	}
?>
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
      
    <script type="text/javascript" src="lib/main.js"></script>
    <script type="text/javascript" src="_Javascript/grafintech.js"></script>
  </body>
</html>
